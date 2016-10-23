<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_model');
		$this->load->library('pagination');
		$offset = end($this->uri->segments);
		if($offset == false)
			$offset =0;
		$config['per_page'] = 1; 

		$data['news'] = $this->admin_model->get_news(NULL, $config['per_page'], $offset);
		$config['base_url'] = base_url('home/index');
		$config['total_rows'] = count($this->admin_model->get_news());
		$config['per_page'] = 1; 

		$config['full_tag_open'] = '<ul id="news-nav-num">';
		$config['full_tag_close'] = '</ul>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li id="sn">';
		$config['cur_tag_close'] = '</li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['next_link'] = '';
		$config['prev_link'] = '';

		$this->pagination->initialize($config); 

		$data['pagination'] = $this->pagination->create_links();
		$this->load->view('home/inc/header');
		$this->load->view('home/index', $data);
		$this->load->view('home/inc/footer');
	}

	public function reviews()
	{
		$this->load->model('admin_model');
		$data['reviews'] = $this->admin_model->get_reviews();
		$this->load->view('home/inc/header');
		$this->load->view('home/reviews', $data);
		$this->load->view('home/inc/footer');
	}

	public function review($id = NULL)
	{
		if($id != NULL && is_numeric($id))
		{
			$this->load->model('admin_model');
			$review = $this->admin_model->get_reviews($id);
			$votes = $this->admin_model->votes($id);
			$data['review'] = $review[0];
			$data['review']['votes'] = $votes['votes'];

			$this->load->view('home/inc/header');
			$this->load->view('home/review', $data);
			$this->load->view('home/inc/footer');
		}
		else
		{
			redirect(base_url());
		}
	}

	public function voteup($id = NULL)
	{
		if($id != NULL && is_numeric($id))
		{
			$this->load->model('admin_model');
			$ip = $_SERVER['REMOTE_ADDR'];
			$has_voted = $this->admin_model->has_voted($ip, $id);
			if($has_voted)
			{
				redirect(base_url('home/review/'.$id));
			}
			else
			{
				$add_vote = $this->admin_model->add_vote($ip, $id, 'up');
				redirect(base_url('home/review/'.$id));
			}
		}
		else
		{
			redirect(base_url());
		}
	}

	public function votedown($id = NULL)
	{
		if($id != NULL && is_numeric($id))
		{
			$this->load->model('admin_model');
			$ip = $_SERVER['REMOTE_ADDR'];
			$has_voted = $this->admin_model->has_voted($ip, $id);
			if($has_voted)
			{
				redirect(base_url('home/review/'.$id));
			}
			else
			{
				$add_vote = $this->admin_model->add_vote($ip, $id, 'down');
				redirect(base_url('home/review/'.$id));
			}
		}
		else
		{
			redirect(base_url());
		}
	}

	public function contacts()
	{
		$this->load->view('home/inc/header');
		$this->load->view('home/contacts');
		$this->load->view('home/inc/footer');
	}

	public function news()
	{
		$this->load->view('home/inc/header');
		$this->load->view('home/news');
		$this->load->view('home/inc/footer');
	}
}
