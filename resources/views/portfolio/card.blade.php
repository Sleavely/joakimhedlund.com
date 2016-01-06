<div class="portfoliowork panel panel-default">
  <div class="panel-body">
    @if(!empty($entry->coverphoto_url))
      <img src="{{{ $entry->coverphoto_url }}}" />
    @endif
    <h4>{{{ $entry->title }}}</h4>
    {{ $entry->html }}
    @if(!empty($entry->demo_url))
      <p>
        <a href="{{{ $entry->demo_url }}}" class="btn btn-embossed btn-primary">See it in action</a>
      </p>
    @endif
  </div>
</div>
