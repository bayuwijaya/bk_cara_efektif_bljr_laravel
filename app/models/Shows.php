<?php

class Shows extends Eloquent
{
	
	public function getTopShows() 
	{
		return $this->where('rating', '>', 5)->orderBy('rating', 'DESC')->get();
	}
	
	/*
	public function allShows($order_by = FALSE, $direction = 'ASC')
	{
		$shows = DB::table('shows');
		return $shows->get();
	}
	
	public function allShows($order_by = FALSE,$direction = 'ASC')
	{
		$sql = 'SELECT * FROM shows';
		$sql .= $order_by ? ' ORDER BY ' . $order_by. ' ' . $direction : '';
			return DB::select($sql);
	}
	*/
}
