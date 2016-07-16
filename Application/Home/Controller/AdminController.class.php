<?php
namespace Home\Controller;

use Think\Controller;

class AdminController extends Controller
{
    public function index()
    {
        if(empty($_SESSION['is_login']))$this->redirect('Admin/login',0);
        $this->display();
    }
    public function gallery()
    {
        if(empty($_SESSION['is_login']))$this->redirect('Admin/login',0);
        $galleryList=M('blog')->select();
        $this->assign("info",$galleryList);
        $this->display();
    }
    public function gallery_show($id)
    {
        if(empty($_SESSION['is_login']))$this->redirect('Admin/login',0);
        $data=M('blog')->where("id=$id")->select();
        $this->assign("info",$data[0]);
        $this->display();
    }
    public function gallery_add()
    {
        if(empty($_SESSION['is_login']))$this->redirect('Admin/login',0);
        $this->display();
    }
    public function gallery_add_post()
    {
        if(empty($_SESSION['is_login']))$this->redirect('Admin/login',0);
        $data['create_time']=date('y-m-d h:i:s');
        $data['name']=I("post.name");
        $data['abstract']=htmlspecialchars_decode(I("post.abstract"));
        $data['contant']=htmlspecialchars_decode(I("post.contant"));
        M('blog')->add($data);
        $this->redirect('Admin/gallery',0);
    }
    public function gallery_edit($id)
    {
        if(empty($_SESSION['is_login']))$this->redirect('Admin/login',0);
        $info=M('blog')->where("id=$id")->select();
        $this->assign("info",$info[0]);
        $this->display();
    }
    public function gallery_edit_post($id)
    {
        if(empty($_SESSION['is_login']))$this->redirect('Admin/login',0);
        $data['name']=I("post.name");
        $data['abstract']=htmlspecialchars_decode(I("post.abstract"));
        $data['contant']=htmlspecialchars_decode(I("post.contant"));
        M('blog')->where("id=$id")->save($data);
        $this->redirect('Admin/gallery',0);
    }
    public function gallery_delete($id)
    {
        if(empty($_SESSION['is_login']))$this->redirect('Admin/login',0);
        M('blog')->where("id=$id")->delete();
        $this->redirect('Admin/gallery',0);
    }
    public function contact()
    {
        if(empty($_SESSION['is_login']))$this->redirect('Admin/login',0);
        $data=M('contact')->select();
        $this->assign("info",$data);
        $this->display();
    }
    public function contact_delete($id)
    {
        if(empty($_SESSION['is_login']))$this->redirect('Admin/login',0);
        M('contact')->where('id='.$id)->delete();
        $this->success("删除成功",U("admin/contact"));
    }
    public function login()
    {
        date_default_timezone_set('PRC');
        $this->display();
    }
    public function login_handle()
    {
        $name=I("post.name");
        $password=I("post.password");
        $admin=M('admin');
        $adminList=$admin->select();
        foreach($adminList as $vo)
        {
            if($vo['name']==$name && $vo['password']==$password)
            {
                $_SESSION['is_login']=true;
                $this->success("登录成功",U("Admin/index"));
            }
            else{
                $this->error("登录失败",U("Admin/login"));
            }
        }
    }

}