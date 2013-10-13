<?php

class Front_MusicController extends BaseController {
	public $restful = true;


    public function index(){
        
        $this->data['bands'] = Band::all();
        $this->data['genres'] = Genre::all();
        $songs = array();
        foreach ($this->data['bands'] as $band) {
        	$songs[]=$band->songs();

        }
        // $this->data['songs'] = Song::whereRaw('id IN (select id, max(hits) from songs group by band_id)')->get();
        $this->data['songs'] = DB::select(DB::raw('SELECT tt.*
FROM songs tt
INNER JOIN
    (
    SELECT band_id, MAX(hits) AS Maxhits
    FROM songs
    GROUP BY band_id
    ) groupedtt ON tt.band_id = groupedtt.band_id AND tt.hits = groupedtt.Maxhits'));

    	return View::make('front.music')->with('data',$this->data);
    }
	// public function showProfile(){
	// 	//grab band_id, get model data, pass it on to view

	// }
    
}