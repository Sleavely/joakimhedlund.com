<?php namespace App;

use \Parsedown;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class BlogPost extends Model implements SluggableInterface {

  use SluggableTrait;
  use SoftDeletes;
  protected $dates = ['deleted_at', 'published_at'];

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['title', 'markdown'];

  /**
   * Configure the sluggable trait for URLs
   *
   * @var array
   */
  protected $sluggable = array(
		'build_from' => 'title',
		'save_to'    => 'slug',
	);

  public function getHtmlAttribute()
  {
    $Parsedown = new Parsedown();
    $html = $Parsedown->text( $this->markdown );
    return $html;
  }

  public function getPreviewAttribute()
  {
    $Parsedown = new Parsedown();
    $html = $Parsedown->text( $this->markdown );
    preg_match("/<p>(.*)<\/p>/", $html, $matches);
    $intro = strip_tags($matches[1]);
    return $intro;
  }
}
