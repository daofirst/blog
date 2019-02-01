<li class="nav-item">
    <a class="nav-link" href="/">
        <i class="ni ni-planet"></i> 网站地址
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/blog">
        <i class="ni ni-book-bookmark"></i> 博客地址
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="#" onclick="document.getElementById('logoutForm').submit();">
        <i class="ni ni-button-power"></i> 登出
    </a>
</li>
<form id="logoutForm" action="/logout" method="POST">
    {{ csrf_field() }}
</form>