<?
class Photo extends Eloquent 
{    
	/*
	protected $table = 'photos';    
	protected $fillable = array;    
	public static $upload_rules = array;
	*/

	public $timestamps = false;
	protected $fillable = array('title','image');

	
}
?>