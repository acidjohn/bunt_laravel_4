<?php

class Category extends Eloquent
{
	protected $table = "bunticle_categories";
	
	public function bunticles()
	{
		return $this->hasMany('Bunticle');
	}
	public function editors()
	{
		return $this->belongsToMany('User','bunticle_categories_users','bunticle_category_id','user_id');
	}

	public static function add()
    {
    	$data = Input::all();
    	if(Input::has('id')){
    		//yparxei to hidden input id stin forma, elenkse pos einai to idio me to url

    		$category = Category::find($data['id']);
    		// $category->name=Input::get('name');
    		// $category->description=Input::get('description');
    		// $category->save();
    		// $category->editors()->sync(Input::get('editors'));

    		$validator = Validator::make(
				array(
					"name"=>$data["name"]
				),
				array(
					"name"=>array('min:2','max:300','required','unique:bunticle_categories,name,'.$data['id'])
				)
			);

    	}else{
    		$category= new Category;
    		$validator = Validator::make(
				array(
					"name"=>$data["name"]
				),
				array(
					"name"=>array('min:2','max:300','required','unique:bunticle_categories,name')
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
			$category_data=array(
				'name' => $data["name"],
				'description' => $data['description'],

				);
			$category->name=$data['name'];
			$category->description=$data['description'];
			$class = 'success';
			$category->save();
			$message = "Category with id ".$category->id." saved!";
			if(isset($data['editors'])){
				$message .= "Editor ids: ".implode(',',$data['editors']);
				$category->editors()->sync($data['editors']);
			}else{
				$message .=" No editors assigned!";
			}
			
			
		}
		$ret = '<div class="alert alert-'.$class.' hide" style="display: block;">
                              <button class="close" data-dismiss="alert"></button>
                              '.$message.'
                           </div>';
		return Redirect::to('admin/bunticles/add-category')->with('messages',$ret);
    } 
}