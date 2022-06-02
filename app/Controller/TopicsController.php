<?php


class TopicsController extends AppController {

    
    public $components= array('Session');
    public function index() {

	}
	public function generate() {
            if($this->request->is ('post')){
                $this->Topic->create();
                $this->Topic->save($this->request->data);
                $this->Session->setFlash ('Created');
                $this->redirect('index');
            }
	}
        


}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

