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
      background-position: center left;
      background-size: cover;
      min-height: 600px;
      padding-top: 200px;
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

      <div class="col-sm-4">
        <div class="thumbnail thumbnail-caption thumbnail-bordered">
          <img src="{{{ asset('images/otworlds-doodads.png') }}}" alt="OTWorlds UI" />
          <div class="caption">
            <h4>Single page app</h4>
            <p>I built a level editor for a game to explore the fundamentals of single-page apps as well as push my frontend performance optimization skills to the limit.</p>
            <p>
              <a href="https://otworlds.com" class="btn btn-embossed btn-primary">See it in action</a>
              <a href="https://github.com/Sleavely/OTWorlds" class="btn btn-default" style="margin-left: 10px;">View on Github</a>
            </p>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="thumbnail thumbnail-caption">
          <img src="{{{ asset('images/4665905531_3c54137c0d_z.jpg') }}}" alt="Photo by Hermann Kaser" />
          <div class="caption">
            <h4>Performance optimization</h4>
            <p>I'm a big fan of New Relic and the flame charts in Chrome's Developer Tools. Few things make me feel as bad-ass as cutting load times in half by implementing caches in just the right places and refactoring heavy bits of business logic.</p>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="thumbnail thumbnail-caption thumbnail-bordered">
          <img src="{{{ asset('images/bostadroid.png') }}}" alt="Android app" style="max-height: 300px; padding: 10px 109px; width: auto;" />
          <div class="caption">
            <h4>Android app</h4>
            <p>I wrote an app to search the Stockholm apartment rental queue. It was built with Phonegap Build so that I could use the frameworks I know and love.</p>
            <p>The app featured a localStorage cache, a serverside API, and realtime filtering of search results.</p>
          </div>
        </div>
      </div>

    </div>
    <div class="row">

      <div class="col-sm-4">
        <div class="thumbnail thumbnail-caption thumbnail-bordered">
          <img src="{{{ asset('images/batutb.png') }}}" alt="Svensk Båtutbildning" style="padding: 20px;" />
          <div class="caption">
            <h4>Laravel</h4>
            <p>Svensk Båtutbildning needed a new booking system and wanted it to eliminate the manual chores of handling payments.</p>
            <p>
              <a href="http://www.svenskbatutbildning.se/" class="btn btn-embossed btn-primary">See it in action</a>
            </p>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="thumbnail thumbnail-caption">
          <img src="{{{ asset('images/social-feed.png') }}}" alt="Screenshot of the social feed in action" />
          <div class="caption">
            <h4>Social feed aggregation</h4>
            <p>We were tasked with showing the company's activity on social networks. I ended up writing a library in PHP for fetching, processing, and caching the data.</p>
            <p>On top of the cached data we refreshed it with Javascript in the client's browser, in realtime, for a smooth experience.</p>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="thumbnail thumbnail-caption">
          <img src="{{{ asset('images/8437956869_66d8b38f1b_z.jpg') }}}" alt="Photo by Norlando Pobre" />
          <div class="caption">
            <h4>Infrastructure</h4>
            <p>I've dabbled with enough servers to feel comfortable around setting up production-grade firewalls, Redis, NFS, HAProxy, CDNs and all those other tidbits you'd expect a kickass website to use.</p>
          </div>
        </div>
      </div>

    </div>
    <div class="row">

      <div class="col-sm-4">
        <div class="thumbnail thumbnail-caption thumbnail-bordered">
          <img src="{{{ asset('images/klarna.png') }}}" alt="Klarna logo" style="padding: 20px;" />
          <div class="caption">
            <h4>Drupal</h4>
            <p>I have extensive Drupal experience from my time in Klarna. Their needs for a scalable and multilingual platform led us to migrate their main website from Joomla and rebuild it entirely in Drupal.</p>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h4 class="panel-title">ElasticSearch</h4>
          </div>
          <div class="panel-body">
            <p>Managing an e-store is tricky. I built a blazing fast search engine that indexes orders and shows additional information from various integrated services such as the payment provider, the shipping company and our customer support tool HelpScout.</p>
          </div>
        </div>
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h4 class="panel-title">Returns portal</h4>
          </div>
          <div class="panel-body">
            <p>We needed a tailormade system for RMA to handle all of our edge cases, I ended up building a (mostly) single page app in a blended combo of Laravel and Handlebars.</p>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="thumbnail thumbnail-caption thumbnail-bordered">
          <img src="{{{ asset('images/2683653952_c9064f0899_z.jpg') }}}" alt="Photo by Valerie Everett" style="padding: 12px;" />
          <div class="caption">
            <h4>Barcode scanner web app</h4>
            <p>With a bit of JS and backend APIs the warehouse staff is now able to quickly look up shipment labels and product storage locations.</p>
          </div>
        </div>
      </div>

    </div>
    <div class="row">

      <div class="col-sm-4">
        <div class="thumbnail thumbnail-caption">
          <img src="{{{ asset('images/world7-thumb.png') }}}" alt="Screenshot from World 7" />
          <div class="caption">
            <h4>vBulletin</h4>
            <p>I built account management, highscores, character statistics, guild administration and much more to integrate an OpenTibia server with vBulletin.</p>
          </div>
        </div>
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
