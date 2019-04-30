<?php
namespace App\Http\Controllers\Admin;

use TCG\Voyager\Http\Controllers\VoyagerMediaController as Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\Plugin\ListWith;

class VoyagerMediaController extends Controller
{
    /** @var string */
    private $filesystem;

    /** @var string */
    private $directory = '';

    public function __construct()
    {
        $this->filesystem = config('voyager.storage.disk');
    }

    public function files(Request $request)
    {
        $folder = $request->folder;

        if ($folder == '/') {
            $folder = '';
        }

        $dir = $this->directory.$folder;

        return response()->json([
            'name'          => 'files',
            'type'          => 'folder',
            'path'          => $dir,
            'folder'        => $folder,
            'items'         => $this->getFiles($dir),
            'last_modified' => 'asdf',
        ]);
    }

    private function getFiles($dir)
    {
        $files = [];
        $storage = Storage::disk($this->filesystem)->addPlugin(new ListWith());
        $storageItems = $storage->listWith(['mimetype'], $dir);


        foreach ($storageItems as $item) {
            if ($item['type'] == 'dir') {
                $files[] = [
                    'name'          => $item['basename'],
                    'type'          => 'folder',
                    'path'          => "",
                    'items'         => '',
                    'last_modified' => '',
                ];
            } else {
                if (empty(pathinfo($item['path'], PATHINFO_FILENAME)) && !config('voyager.hidden_files')) {
                    continue;
                }
                $files[] = [
                    'name'          => $item['basename'],
                    'type'          => isset($item['mimetype']) ? $item['mimetype'] : 'file',
                    'path'          => Storage::disk($this->filesystem)->url($item['path']),
                    'size'          => $item['size'],
                    'last_modified' => $item['timestamp'],
                ];
            }
        }

        return $files;
    }

    // Upload Working with 5.3
    public function upload(Request $request)
    {
        try {

            $file = $request->file->store($request->upload_path, $this->filesystem);
            $file = Storage::disk($this->filesystem)->url($file);

            $success = true;
            $message = __('voyager::media.success_uploaded_file');
            $path = preg_replace('/^public\//', '', $file);
        } catch (Exception $e) {
            $success = false;
            $message = $e->getMessage();
            $path = '';
        }

        return response()->json(compact('success', 'message', 'path'));
    }


}
