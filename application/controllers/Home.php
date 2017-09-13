<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'Library project';
        $this->load->view('templates/header', $data);
        $this->load->model('Map');
        $q = $this->Map->getData();
        $this->load->view('home_view', array(
            'q' => $q
        ));
        $this->load->view('templates/footer');
        
    }
    public function add()
    {
        $data['title'] = 'Library project';
        $this->load->view('templates/header', $data);
        
        $this->load->view('addBook_view');
        $this->load->view('templates/footer');
        
    }
    
    
    public function addBookFun()
    {
        $this->form_validation->set_message('required', '%s not enter.');
        
        $this->form_validation->set_rules('Bookname', 'Bookname', 'required');
        $this->form_validation->set_rules('Publisher', 'Publisher', 'required');
        $this->form_validation->set_rules('Page', 'Page', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Add book';
            $this->load->view('templates/header', $data);
            
            $this->load->view('addBook_view');
            $this->load->view('templates/footer');
        } else {
            $data = array(
                'name' => $this->input->post('Bookname'),
                'publisher' => $this->input->post('Publisher'),
                'page' => $this->input->post('Page')
            );
            
            $this->db->insert('book', $data);
            
            redirect(base_url('home'));
        }
        
        
    }
    public function edit($id = 1)
    {
        $data['title'] = 'Edit book';
        $this->load->view('templates/header', $data);
        $this->load->model('Map');
        $q = $this->Map->getOne($id);
        
        $this->load->view('editBook_view', array(
            'data' => $q,
            'id' => $id
        ));
        $this->load->view('templates/footer');
        
    }
    public function editBookFun()
    {
        $id   = $this->input->post('id');
        $data = array(
            'name' => $this->input->post('Bookname'),
            'publisher' => $this->input->post('Publisher'),
            'page' => $this->input->post('Page')
        );
        
        $this->db->where('id', $id);
        $this->db->update('book', $data);
        
        redirect(base_url('home'));
        
        
        
    }
    public function deleteBook($id = 1)
    {
        
        $this->db->where('id', $id);
        $this->db->delete('book');
        
        redirect(base_url('home'));
    }
    
}
