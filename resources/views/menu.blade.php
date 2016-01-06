
<nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <div>
      <ul class="nav navbar-nav">
        <li class="{{ (Request::path() == '/' ? ' active' : '') }}"><a href="/">Home</a></li>
        <li class="{{ (starts_with(Request::path(), 'portfolio') ? ' active' : '') }}"><a href="/portfolio">Portfolio</a></li>
        @if(Auth::check())
        <li class="{{ (starts_with(Request::path(), 'blog') ? ' active' : '') }}"><a href="/blog">Blog</a></li>
        @endif
      </ul>
    </div>
  </div>
</nav>
