<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        date_default_timezone_set('PRC');
        $this->display();
    }
    public function contact()
    {
        $data=M('contact')->select();
        $this->assign("info",$data);
        $this->display();
    }
    public function gallery()
    {
        $galleryList=M('blog')->select();
        $this->assign("info",$galleryList);
        $this->display();
    }
    public function gallery_show($id)
    {
        $data=M('blog')->where("id=$id")->select();
        $this->assign("info",$data[0]);
        $this->display();
    }
    public function contact_submit()
    {
        $data['name']=I("post.name");
        $data['email']=I("post.email");
        $data['telephone']=I("post.telephone");
        $data['message']=htmlspecialchars_decode(I("post.message"));
        $data['create_time']=date('y-m-d h:i:s');
        $contact=M("contact");
        $contact->add($data);
        $this->redirect('index/contact',0);
    }
}