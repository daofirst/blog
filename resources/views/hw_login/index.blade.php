<!doctype html>
<html lang="zh_CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>华为第三方登录</title>

    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style type="text/css">
        .el-main {
            background-color: #fff;
            border: 1px solid #eee;
            border-radius: 3px;
            color: #333;
            height: 500px;
            width: 900px;
            flex: none;
            position: relative;
            left: 50%;
            margin-left: -450px;
            top: 80px;
            -webkit-box-shadow: 3px 4px 11px 8px rgba(221,221,221,0.51);
            box-shadow: 3px 4px 11px 8px rgba(221,221,221,0.51);
            padding: 0;
        }

        body > .el-container {
            margin-bottom: 40px;
        }
    </style>

</head>
<body>
<div id="app">
    <el-container>
        <el-main>
            <el-menu
                    :default-active="activeIndex"
                    class="el-menu-top"
                    mode="horizontal"
                    background-color="#545c64"
                    text-color="#fff"
                    active-text-color="#ffd04b">
                <el-menu-item index="1">华为登录</el-menu-item>
            </el-menu>
            <div style="padding: 30px 20px;">
                <el-row :gutter="20">
                    <el-col :span="12" :offset="4">
                        <el-form label-position="right" label-width="80px">
                            <el-form-item label="用户名">
                                <el-input placeholder="请输入用户名"></el-input>
                            </el-form-item>
                            <el-form-item label="密码">
                                <el-input type="password" placeholder="请输入密码"></el-input>
                            </el-form-item>


                            <el-form-item >
                                <el-button type="primary" plain>登录</el-button>
                            </el-form-item>
                        </el-form>
                    </el-col>
                </el-row>
            </div>

            <hr>
            <div style="margin-left: 160px;width: 300px">
                <div style="font-size: 12px;font-weight: bold;line-height: 20px;">您还可以使用第三方登录认证</div>
                <div style="padding: 20px;">
                    <a href="javascript:;" @click="getAccessToken_token">
                        <img width="48" src="https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/public/quickapp_blog/images/logo.png" alt="" >
                    </a>
                </div>
            </div>
        </el-main>
    </el-container>
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

    var app = new Vue({
        el: "#app",
        data: {
            activeIndex: '1',
        },
        methods: {
            getAccessToken_token () {
                var option = {
                    respontype : "token",
                    appid: APPID,
                    handle_login_uri: "http://tangzhengyuan.com/huawei_login",
                }

                var nspp = new NspClient(option);

                nspp.checkLogin(function() {
                    // 调用接口
                    nspp.api('OpenUP.User.getInfo', {
                        callback : function(data) {
                            if (!!data) {
                                alert("userName:" + data.userName + ",userID:" + data.userID)
                            }
                        },
                        onError : function(err) {
                            if (!!err) {
                                alert("error");
                            }
                        }
                    });
                });
            }
        }
    });
</script>
</html>
