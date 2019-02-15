<!doctype html>
<html lang="zh_CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>华为第三方登录</title>

    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
<div id="app">

</div>
</body>

<script
        src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
        crossorigin="anonymous"></script>

<script type="text/javascript" src="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/public/quickapp_blog/js/NspClient.js"></script>
<script src="https://unpkg.com/vue/dist/vue.js"></script>
<script src="https://unpkg.com/element-ui/lib/index.js"></script>

<script type="text/javascript">
    const APPID = '100625581';

    var setCookie = function(name, value, path, expires) {
        document.cookie = name + "=" + escape(value)
            + (path == null ? "" : ";path=" + path)
    }

    var getUriRspArgs = function() {
        var getArgs = function(srcStr) {
            var pairs = srcStr.split("&");
            for ( var i = 0; i < pairs.length; i++) {
                var pos = pairs[i].indexOf('=');
                if (pos == -1)
                    continue;
                var argname = pairs[i].substring(0, pos);
                var value = pairs[i].substring(pos + 1);
                value = decodeURIComponent(value);
                args[argname] = value;
            }
        }
        var args = {};
        getArgs(window.location.search.substring(1)); //window.location.search 查询(参数)部分   例:?ver=1.0&id=timlq
        getArgs(window.location.hash.substring(1)); // window.location.hash 锚点   例:#love

        return args;
    }


    var loginRsp = getUriRspArgs();


    var p = decodeURIComponent(loginRsp.p);

    if (!!loginRsp.authorization_code) {

        if (window.console) {
            console.log("authorization_code is "+loginRsp.authorization_code);
        }

        $.post("/NSPClient/GetAccessToken",
            {
                code : loginRsp.authorization_code,
                redirect_uri : "{{ url('/huawei/handle_transit') }}" + '?p=' + encodeURIComponent(p)
            },
            function(data) {
                if(!!data.access_token){
                    setCookie("access_token", data.access_token, "/", data.expires_in);
                    window.location.href = p;
                }
            },
            "json");

    } else {

        var accessToken = loginRsp.access_token;
        setCookie("access_token", accessToken, "/", loginRsp.expires_in);

        if (window.console) {
            console.log("accessToken is " + accessToken);
        }

        window.location.href = p;//跳转到最终访问的页面
    }
</script>
</html>
