<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

  <title>{{{ $post->title }}} - Joakim Hedlund, web enthusiast</title>
  <meta property="og:title" content="{{{ $post->title }}} - Joakim Hedlund" />
  <meta property="og:type" content="website" />
  <meta property="og:email" content="contact@joakimhedlund.com" />
  <meta property="og:url" content="http://joakimhedlund.com/" />
  <meta property="og:image" content="http://gravatar.com/avatar/8c88d8cf7e0b9ac9d5bfe6b900028673?s=120" />
  <meta property="og:site_name" content="Joakim Hedlund, web enthusiast" />
  <meta property="fb:admins" content="1281266716" />
  <meta property="og:description" content="Web developer focusing on user experiences and code optimization." />

  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="{{{ url('rss') }}}">

  <link href="{{{ asset('css/libs/bootstrap.css') }}}" rel="stylesheet" type="text/css" />
  <link href="{{{ asset('css/libs/font-awesome.min.css') }}}" rel="stylesheet" type="text/css" />
  <link href="{{{ asset('css/libs/drunken-parrot.css') }}}" rel="stylesheet" type="text/css" />
  <link href="{{{ asset('css/main.css') .'?'. filemtime(public_path('css/main.css')) }}}" rel="stylesheet" type="text/css" />
  <link href="{{{ asset('packages/prism/prism.css') }}}" rel="stylesheet" type="text/css" />

  <script src="{{{ asset('packages/prism/prism.js') }}}"></script>
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-2840885-13']);
    _gaq.push(['_setDomainName', 'none']);
    _gaq.push(['_setAllowLinker', true]);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script');
      ga.type = 'text/javascript';
      ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(ga, s);
    })();
  </script>

</head>
<body>
  <div class="container-fluid" id="hero">
    <div class="row">

      <div class="col-md-11 col-md-offset-1">
        <div class="media">
          <div class="pull-left media-middle">
            <img class="media-object" src="//www.gravatar.com/avatar/8c88d8cf7e0b9ac9d5bfe6b900028673.png?s=150" alt="Photo of Joakim Hedlund" style="border-radius: 50%;">
          </div>
          <div class="media-body">
            <h1 class="media-heading">Joakim Hedlund</h1>
            <h3>Web enthusiast</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('menu')
  <div class="container">

    <div class="row" id="meta">
      <div class="col-sm-9">
        <h1 id="title">{{ $post->title }}</h1>
        <span title="{{{ $post->updated_at->toW3cString() }}}">Last updated <time datetime="{{{ $post->updated_at->toW3cString() }}}">{{ $post->updated_at->diffForHumans() }}</time></span>
      </div>
    </div>

    <div class="row" id="content">
      <div class="col-sm-9">
        {{ $post->html }}
      </div>
    </div>

    <div class="row">
      <div class="col-sm-9">
        <div id="disqus_thread"></div>
        <script type="text/javascript">
            /* * * CONFIGURATION VARIABLES * * */
            var disqus_shortname = 'joakimhedlund';
            var disqus_identifier = 'blog-{{{ $post->slug }}}';

            /* * * DON'T EDIT BELOW THIS LINE * * */
            (function() {
                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        @include('contact-panel')
      </div>
    </div>

  </div>
</body>
</html>
