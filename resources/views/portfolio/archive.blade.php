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
  <link href="{{{ asset('css/main.css') }}}" rel="stylesheet" type="text/css" />

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

    <div class="row" style="border-bottom: 1px solid #d6e1e5; margin-bottom: 2em; padding-bottom: 1em;">
      <div class="col-sm-6">
        <h2 id="experience">Experience</h2>
        <p>I've tried to scribble down some of the things I've been busy building while you were out there looking for me. This is a non-exhaustive list that probably wont get updated very regularly, but it'll give you an idea of what I can help you with.</p>
      </div>
      <div class="col-sm-4 col-sm-offset-2">
        <a href="#contact" class="btn btn-embossed btn-orange">Want to get in touch?</a>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-9">
        <ul>
        @foreach($entries as $entry)
          <li><a href="/portfolio/{{{ $entry->slug }}}">{{{ $entry->title }}}</a></li>
        @endforeach
        </ul>
      </div>
    </div>

    <!-- With cover photo -->
    <div class="col-sm-4">
      <div class="thumbnail thumbnail-caption">
        <img src="{{{ asset('images/4665905531_3c54137c0d_z.jpg') }}}" alt="Photo by Hermann Kaser" />
        <div class="caption">
          <h4>Performance optimization</h4>
          <p>I'm a big fan of New Relic and the flame charts in Chrome's Developer Tools. Few things make me feel as bad-ass as cutting load times in half.</p>
        </div>
      </div>
    </div>

    <!-- Without cover photo -->
    <div class="col-sm-4">
      <div class="panel panel-default">
        <div class="panel-body">
          <h4>ElasticSearch</h4>
          <p>Managing an e-store is tricky. I built a blazing fast search engine that indexes orders and shows additional information from various integrated services such as the payment provider, the shipping company and our customer support tool HelpScout.</p>
        </div>
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
