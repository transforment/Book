<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Impressions extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'Impressions';
        $this->load->view('templates/header', $data);
        $this->load->model('Map');
        $q = $this->Map->getData();
        $this->load->view('home_view', array(
            'q' => $q
        ));
        $this->load->view('templates/footer');
    }
    public function listComment($id = 5)
    {
        $data['title'] = 'Testing';
        $this->load->view('templates/header', $data);
        $this->load->model('Map');
        $q        = $this->Map->getAllComment($id);
        $bookName = $this->Map->getBookName($id);
        $this->load->view('impressions_view', array(
            'bookName' => $bookName,
            'data' => $q,
            'id' => $id
        ));
        $this->load->view('templates/footer');
        
    }
    public function add($id = 5)
    {
        $data['title'] = 'Testing';
        $this->load->view('templates/header', $data);
        $this->load->model('Map');
        $bookName = $this->Map->getBookName($id);
        $this->load->view('addComment_view', array(
            'bookName' => $bookName,
            'id' => $id
        ));
        $this->load->view('templates/footer');
        
    }
    public function addCommentFun()
    {
        $id   = $this->input->post('id');
        $data = array(
            'name' => $this->input->post('comment'),
            'book_id' => $id
        );
        
        $this->db->insert('impression', $data);
        // redirect(base_url('home'));
        redirect(base_url('Impressions/listComment/' . $id));
        
    }
    public function edit($id = 1)
    {
        $data['title'] = 'Testing';
        $this->load->view('templates/header', $data);
        $this->load->model('Map');
        $bookName = $this->Map->getBookNameByComment($id);
        $q        = $this->Map->getOneComment($id);
        $this->load->view('editComment_view', array(
            'data' => $q,
            'bookName' => $bookName
        ));
        $this->load->view('templates/footer');
        
    }
    public function editCommentFun()
    {
        $id      = $this->input->post('id');
        $book_id = $this->input->post('book_id');
        $data    = array(
            'name' => $this->input->post('comment'),
            'book_id' => $book_id
        );
        $this->db->where('id', $id);
        $this->db->update('impression', $data);
        
        redirect(base_url('Impressions/listComment/' . $book_id));
        
    }
    public function deleteComment($book_id = 1, $id = 1)
    {
        
        $this->db->where('id', $id);
        $this->db->delete('impression');
        
        redirect(base_url('Impressions/listComment/' . $book_id));
    }
}