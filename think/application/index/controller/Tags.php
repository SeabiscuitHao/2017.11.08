<?php
namespace app\index\controller;
use think\Controller;
class Tags extends Controller
{
  public function index()
  {
    return $this -> fetch('tags');
  }
}