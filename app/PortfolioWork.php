<?php namespace App;

use \Parsedown;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class PortfolioWork extends Model implements SluggableInterface {

  use SluggableTrait;
  use SoftDeletes;
  protected $dates = ['deleted_at', 'published_at'];
  protected $table = 'portfolio_work';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['title', 'markdown', 'coverphoto_url', 'demo_url'];

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
}
