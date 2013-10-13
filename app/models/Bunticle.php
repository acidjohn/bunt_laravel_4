<?php

class Bunticle extends Eloquent
{
   	public function playlist()
    {
        return $this->belongsToMany('Bunticle', 'bunticles_playlists' , 'bunticle_id' , 'playlist_id');
    }

    public function category()
    {
    	return $this->belongsTo('Category','category_id');
    }
    public static function add()
    {
    	$data = Input::all();
        if(Input::has('id')){
            //yparxei to hidden input id stin forma, elenkse pos einai to idio me to url

            $bunticle = Bunticle::find($data['id']);

            $validator = Validator::make(
                array(
                    "title"=>$data["title"]
                ),
                array(
                    "title"=>array('min:2','max:300','required','unique:bunticles,title,'.$data['id'])
                )
            );

        }else{
            $bunticle= new Bunticle;
            $validator = Validator::make(
                array(
                    "title"=>$data["title"]
                ),
                array(
                    "title"=>array('min:2','max:300','required','unique:bunticles,title')
                )
            );      
        }
        if($validator->fails())
        {
            $messages = $validator->messages();
            $class = 'error';
            $message = '';
            foreach ($messages->all() as $msg)
            {
                $message .= $msg.'<br>';
            }
        }else{
            $bunticle->title=$data['title'];
            $bunticle->text=$data['content'];
            $bunticle->category_id=$data['category'];
            $class = 'success';
            $bunticle->save();
            $message = "bunticle with id ".$bunticle->id." saved!";
            // if(isset($data['editors'])){
            //     $message .= "Editor ids: ".implode(',',$data['editors']);
            //     $category->editors()->sync($data['editors']);
            // }else{
            //     $message .=" No editors assigned!";
            // }
            
            
        }
        $ret = '<div class="alert alert-'.$class.' hide" style="display: block;">
                              <button class="close" data-dismiss="alert"></button>
                              '.$message.'
                           </div>';
        return Redirect::to('admin/bunticles/add-bunticle')->with('messages',$ret);
    }

    

}