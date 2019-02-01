<div class="card shadow no-border pb-2">
    <img width="100%" class="card-img-top" src="{{ $image }}" alt="article image">

    <div class="bg-secondary px-3 py-2">
        <a href="{{ $category->path() }}" class="btn btn-link btn-sm ml-1">{{ $category->title }}</a>/ {{ \Carbon\Carbon::parse($date)->toDateString() }}
    </div>

    <div class="card-body">
        <h2>@if($featured) <span>&#9733;</span> @endif {{ $title }}</h2>
        <p>{{ $body }}</p>
        <a href="{{ $url }}" class="btn btn-outline-primary">查看更多</a>
    </div>
</div>