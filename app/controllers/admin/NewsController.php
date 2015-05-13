<?php
class Admin_NewsController extends Controller{
	public function getIndex(){
		$data = array(
			'news' => News::paginate(5)
			);
		return View::make('admin.news.index', $data);
	}

	public function getCreate(){
		return View::make('admin.news.form');
	}

	public function postCreate(){
		$inputs = Input::all();

		$validate = News::validate($inputs);

		if($validate->fails()){
			return Redirect::back()
			->withErrors($validate->messages())
			->withInput();
		}else{
			$news = new News;
			$news->title = $inputs['title'];
			$news->detail = $inputs['detail'];
			$news->save();

			return Redirect::back()->with('message', 'Save Completed');
		}
	}

	public function getUpdate($id){
		$data = array(
			'news' => News::find($id)
			);
		return View::make('admin.news.form', $data);
	}

	public function postUpdate(){
		$inputs = Input::all();

		$news = News::find($inputs['id']);

		if(is_object($news)){
			$news->title = $inputs['title'];
			$news->detail = $inputs['detail'];
			$news->save();

			return Redirect::to('admin/news/index')->with('message', 'Update Completed');
		}
	}
	public function getDelete($id){
		$news = news::find($id);

		if(is_object($news)){
			$news->delete();
		}
		return Redirect::to('admin/news/index')->with('message', 'Delete Completed');
	}
}
?>