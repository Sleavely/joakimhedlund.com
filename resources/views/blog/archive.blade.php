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

  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="/rss">

  <link href="{{{ asset('css/bootstrap.css') }}}" rel="stylesheet" type="text/css" />
  <link href="{{{ asset('css/font-awesome.min.css') }}}" rel="stylesheet" type="text/css" />
  <link href="{{{ asset('css/drunken-parrot.css') }}}" rel="stylesheet" type="text/css" />

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
  html,
  body
  {
    background-color: #f5f5f5;
  }
  #hero
  {
    margin-bottom: 1em;
    min-height: 200px;
  }
  #hero h1
  {
    font-size: 64px;
    margin-bottom: 0;
    margin-top: 0.3em;
  }
  #hero h3
  {
    margin-left: 1em;
    margin-top: 0.3em;
  }
  @media (max-width: 767px) {
    #hero .media
    {
      margin-top: 50px;
    }
    #hero h1
    {
      font-size: 34px;
    }
  }
  @media (max-width: 767px) and (min-width: 501px) {
    #hero h1
    {
      margin-top: 1em;
    }
  }
  @media (max-width: 500px) {
    .media-object
    {
      max-width: 75px;
    }
  }
  @media (min-width: 768px) {
    #hero
    {
      background-attachment: fixed;
      background-image: url({{{ asset('images/9107882675_0cca140f23_k.jpg') }}}); /* Photo by Edward Stojakovic */
      background-position: center 50%;
      background-size: cover;
      min-height: 300px;
      padding-top: 55px;
    }
  }
  .thumbnail .caption {
    font-size: inherit;
  }
  .thumbnail.thumbnail-bordered > img
  {
    border-left: 2px solid #d6e1e5;
    border-right: 2px solid #d6e1e5;
    border-top: 2px solid #d6e1e5;
  }

  #contact
  {
    margin-top: 10em;
    margin-bottom: 10em;
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
  <div class="container">

    <div class="row">
      <div class="col-sm-9">
        <h2 id="about">Blog</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-9">
        <ul>
        @foreach($posts as $post)
          <li><a href="/blog/{{{ $post->slug }}}">{{{ $post->title }}}</a></li>
        @endforeach
        </ul>
      </div>
    </div>

    <div class="row" id="contact">
      <div class="col-sm-6 col-sm-offset-3">
        <div class="panel panel-default">
          <div class="panel-body" style="text-align: center; padding-bottom: 3em;">
            <h2>Contact</h2>
            <a href="https://twitter.com/Sleavely" class="btn btn-embossed btn-primary" style="width: 100px;">Twitter</a>
            <a href="https://www.linkedin.com/in/joakimhedlund" class="btn btn-embossed btn-primary" style="width: 100px;">LinkedIn</a>
            <a href="mailto:contact@joakimhedlund.com" class="btn btn-embossed btn-primary" style="width: 100px;">E-mail</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</body>
</html>
