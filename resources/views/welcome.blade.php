<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

  <title>Joakim Hedlund, web enthusiast</title>
  <meta property="og:title" content="Joakim Hedlund" />
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

  <style>
  @media (min-width: 768px) {
    #hero
    {
      background-attachment: fixed;
      background-image: url('images/9107882675_0cca140f23_k.jpg'); /* Photo by Edward Stojakovic */
      background-position: center left;
      background-size: cover;
      min-height: 600px;
      padding-top: 200px;
    }
  }
  </style>
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

    <div class="row">
      <div class="col-sm-6">
        <h2 id="about">About</h2>
        <p>Usually working out of Stockholm, Sweden I enjoy building things that make peoples lives more convenient.</p>
        <p>I'm passionate about the user experience and try to promote its impact on business metrics as often as I can.</p>
      </div>
    </div>

    <div class="row" style="border-bottom: 1px solid #d6e1e5; margin-bottom: 2em; padding-bottom: 1em;">
      <div class="col-sm-6">
        <h2 id="work">Recent work</h2>
        <p>Below are my three latest braggable projects. See my <a href="/portfolio">portfolio</a> for a broader view.</p>
      </div>
    </div>
    <div class="row">
      @foreach($portfolioworks as $work)
      <div class="col-sm-4">
        @include('portfolio.card', ['entry' => $work])
      </div>
      @endforeach
    </div>

    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        @include('contact-panel')
      </div>
    </div>

  </div>
</body>
</html>
