<?php


class TopicsController extends AppController
{


    public $components = array('Session');



    public function index()
    {
        $data = $this->Topic->find('all');
        $this->set('topics', $data);
    }

    public function generate()
    {
        if ($this->request->is('post')) {
            $this->Topic->create();
            $this->Topic->save($this->request->data);
            $this->redirect('index');
        }
    }
    public function Get()
    {
        $data = $this->Topic->find('all');
        $this->set('topics', $data);
    }
    public function view($id)
    {
        $data = $this->Topic->findById($id);
        $this->set('topic', $data);
    }
    public function edit($id)
    {
        $data = $this->Topic->findById($id);
        if ($this->request->is(array('post', 'put'))) {
            $this->Topic->id = $id;
            if ($this->Topic->save($this->request->data)) {
                $this->Session->setFlash('Updated Successfully');
                $this->redirect('index');
            }
        }
        $this->request->data = $data;
    }
    public function Delete($id)
    {
        $this->Topic->id = $id;
        if ($this->request->is(array('post', 'put'))) {
            $this->Topic->id = $id;
            if ($this->Topic->delete($this->request->data)) {
                $this->Session->setFlash('Deleted Successfully');
                $this->redirect('index');
            }
        }
    }
}
