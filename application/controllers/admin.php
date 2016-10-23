<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function index()
	{
		if($this->session->userdata('logged_in'))
		{
			$this->load->helper('form');
			$this->load->library('form_validation');
			if($_POST)
			{
				$this->form_validation->set_error_delimiters('<p style="padding: 5px; margin: 5px">', '</p>');
				$this->form_validation->set_rules('title', 'Заглавие', 'required|trim|xss_clean|max_length[50]');
				$this->form_validation->set_rules('content', 'Съдържание', 'required|trim|xss_clean');

				if($this->form_validation->run() === false)
				{
					$this->load->view('admin/inc/header');
					$this->load->view('admin/index');
					$this->load->view('admin/inc/footer');
				}
				else
				{
					$data['title'] 		= $this->input->post('title');
					$data['content'] 	= $this->input->post('content');
					if(!empty($_FILES['userfile']['size']))
					{
						$config['upload_path'] = './uploads/';
						$config['allowed_types'] = 'gif|jpg|png';
						$config['max_size']	= '100000000';
						$config['max_width']  = '1440';
						$config['max_height']  = '12280';

						$this->load->library('upload', $config);

						$this->upload->do_upload();
						$img = $this->upload->data();
                    	$data['img'] = 'uploads/'.$img['orig_name'];
					}
					else
					{
						$data['img'] = '';
					}

					$data['date'] = $mysqldate = date( 'Y-m-d H:i:s', time() );

					$this->load->model('admin_model');
					$this->admin_model->add_news($data);
					redirect(base_url('admin/index'));
				}

			}
			else
			{
				$this->load->view('admin/inc/header');
				$this->load->view('admin/index');
				$this->load->view('admin/inc/footer');
			}
		}
		else
		{
			redirect(base_url('admin/login'));
		}
	}

	public function news()
	{
		$this->load->model('admin_model');
		$data['news'] = $this->admin_model->get_news();
		$this->load->view('admin/inc/header');
		$this->load->view('admin/news',$data);
		$this->load->view('admin/inc/footer');
	}

	public function edit($id = NULL)
	{
		if($id == NULL || !is_numeric($id))
			redirect(base_url('admin/news'));
		$this->load->model('admin_model');
		$news = $this->admin_model->get_news($id);
		$not_data['news'] = $news[0];

		if($this->session->userdata('logged_in'))
		{
			$this->load->helper('form');
			$this->load->library('form_validation');
			if($_POST)
			{
				$this->form_validation->set_error_delimiters('<p style="padding: 5px; margin: 5px">', '</p>');
				$this->form_validation->set_rules('title', 'Заглавие', 'required|trim|xss_clean|max_length[50]');
				$this->form_validation->set_rules('content', 'Съдържание', 'required|trim|xss_clean');

				if($this->form_validation->run() === false)
				{
					$this->load->view('admin/inc/header');
					$this->load->view('admin/edit', $not_data);
					$this->load->view('admin/inc/footer');
				}
				else
				{
					$data['title'] 		= $this->input->post('title');
					$data['content'] 	= $this->input->post('content');
					if(!empty($_FILES['userfile']['size']))
					{
						$config['upload_path'] = './uploads/';
						$config['allowed_types'] = 'gif|jpg|png';
						$config['max_size']	= '100000000';
						$config['max_width']  = '10240';
						$config['max_height']  = '7680';

						$this->load->library('upload', $config);

						$this->upload->do_upload();
						$img = $this->upload->data();
                    	$data['img'] = 'uploads/'.$img['orig_name'];
					}

					$this->load->model('admin_model');
					$this->admin_model->edit_news($id, $data);
					redirect(base_url('admin/news'));
				}

			}
			else
			{
				$this->load->view('admin/inc/header');
				$this->load->view('admin/edit', $not_data);
				$this->load->view('admin/inc/footer');
			}
		}
		else
		{
			redirect(base_url('admin/login'));
		}

	}

	public function delete($id = NULL)
	{
		if($id != NULL)
		{
			if(end($this->uri->segments) == 'review')
			{
				$this->load->model('admin_model');
				$this->admin_model->delete_review($id);
				redirect('admin/reviews');
			}
			else
			{
				$this->load->model('admin_model');
				$this->admin_model->delete_news($id);
				redirect('admin/news');
			}
		}
		else
		{
			redirect('admin/news');
		}
	}

	public function login()
	{
		if($this->session->userdata('logged_in'))
		{
			redirect(base_url('admin/index'));
		}
		else
		{
			$this->load->helper('form');
			if($_POST)
			{
				if($this->input->post('username') == 'webloz' && $this->input->post('password') == 'truecars')
				{
					$this->session->set_userdata('logged_in', true);
					redirect(base_url('admin/index'));
				}
				else
				{
					$this->load->view('admin/login');
				}
			}
			else
			{
				$this->load->view('admin/login');
			}
		}
	}

	public function logout()
	{
        $this->session->sess_destroy();
        redirect(base_url());
	}

	public function make_thumb($fileName)
    {
        $config['source_image'] = './uploads/pictures/'.$fileName; 
        $config['new_image']    = './uploads/pictures/thumbs/'.$fileName;
        $config['create_thumb'] = FALSE;
        $config['maintain_ratio'] = FALSE;
        $config['width'] = 290;
        $config['height'] = 185;
        $this->image_lib->initialize($config); 
        if(!$this->image_lib->resize()) 
        { 
            redirect(base_url());
       }
    }

	public function review()
	{
		if($this->session->userdata('logged_in'))
		{
			$this->load->helper('form');
			$this->load->library('form_validation');
			if($_POST)
			{
				$this->form_validation->set_error_delimiters('<p style="padding: 5px; margin: 5px">', '</p>');
				$this->form_validation->set_rules('title', 'Заглавие', 'required|trim|xss_clean|max_length[250]');

				if($this->form_validation->run() === false)
				{
					$this->load->view('admin/inc/header');
					$this->load->view('admin/review');
					$this->load->view('admin/inc/footer');
				}
				else
				{
					$this->load->library('upload');

                    $file_config =   array(  
                        'allowed_types' =>  '*',
                        'upload_path'   =>  './uploads/pictures/',
                        'max_size'      => 50000,
                    );

                    $this->upload->initialize($file_config);

                    if($this->upload->do_upload("file"))
                    {
                        $file = $this->upload->file_name;
                    }
                    $arr_files  =   @$_FILES['images'];

                    $_FILES     =   array();
                    foreach(array_keys($arr_files['name']) as $h)
                    {
                        $_FILES["file_{$h}"]    =   array(  
                            'name'      =>  $arr_files['name'][$h],
                            'type'      =>  $arr_files['type'][$h],
                            'tmp_name'  =>  $arr_files['tmp_name'][$h],
                            'error'     =>  $arr_files['error'][$h],
                            'size'      =>  $arr_files['size'][$h]
                        );
                    }

                    $arr_config =   array(  
                        'allowed_types' =>  'gif|jpg|png',
                        'file_name'     =>  substr(str_shuffle('qwertyuiosdfghjklzxcvbnm'.time()), 0, 10),
                        'upload_path'   =>  './uploads/pictures/',
                        'max_size'      => 10000,
                        'max_width'     => 5000,
                        'max_height'    => 5000
                    );

                    foreach(array_keys($_FILES) as $h)
                    {
                        $this->upload->initialize($arr_config);
                        if ($this->upload->do_upload($h)) 
                        {
                            $images[] = $this->upload->file_name;
                            $config['image_library']    = 'gd2';
                            $config['source_image']     = './uploads/pictures/'.$this->upload->file_name;
                            $config['create_thumb']     = FALSE;
                            $config['maintain_ratio']   = TRUE;
                            $config['width']            = 600;
                            $config['height']           = 400;
                            $this->load->library('image_lib'); 

                            if($this->upload->image_width > 600 || $this->upload->image_height > 400)
                            {
                                $this->image_lib->clear();
                                $this->image_lib->initialize($config);

                                if($this->image_lib->resize())
                                {
                                    unset($config);
                                    $this->make_thumb($this->upload->file_name);
                                }
                            }
                            else
                            {
                                unset($config);
                                $this->make_thumb($this->upload->file_name);
                            }
                        }
                    }
                    if(isset($images))
                    {
                    	$data['imgs']     = serialize($images);
                    }
                    else
                    {
                    	$data['imgs'] = '';
                    }
                    $data['features'] = serialize($this->input->post('features'));
                    $data['title']	  = $this->input->post('title');
                    if(isset($file))
                    $data['main']	  = $file;
                    $data['video']	  = $this->input->post('video');
                    $data['content']  = $this->input->post('content');
                    $this->load->model('admin_model');
                    $this->admin_model->add_review($data);
                    redirect(base_url('admin/reviews'));
				}

			}
			else
			{
				$this->load->view('admin/inc/header');
				$this->load->view('admin/review');
				$this->load->view('admin/inc/footer');
			}
		}
		else
		{
			redirect(base_url('admin/login'));
		}
	}

	public function reviewedit($id = NULL)
	{
		if($id == NULL || !is_numeric($id))
			redirect(base_url('admin/reviews'));
		$this->load->model('admin_model');
		$review = $this->admin_model->get_reviews($id);
		$not_data['review'] = $review[0];

		if($this->session->userdata('logged_in'))
		{
			$this->load->helper('form');
			$this->load->library('form_validation');
			if($_POST)
			{
				$this->load->library('upload');

                    $file_config =   array(  
                        'allowed_types' =>  '*',
                        'upload_path'   =>  './uploads/pictures/',
                        'max_size'      => 50000,
                    );

                    $this->upload->initialize($file_config);

                    if($this->upload->do_upload("file"))
                    {
                        $file = $this->upload->file_name;
                    }

                    $arr_files  =   @$_FILES['images'];

                    $_FILES     =   array();
                    foreach(array_keys($arr_files['name']) as $h)
                    {
                        $_FILES["file_{$h}"]    =   array(  
                            'name'      =>  $arr_files['name'][$h],
                            'type'      =>  $arr_files['type'][$h],
                            'tmp_name'  =>  $arr_files['tmp_name'][$h],
                            'error'     =>  $arr_files['error'][$h],
                            'size'      =>  $arr_files['size'][$h]
                        );
                    }

                    $arr_config =   array(  
                        'allowed_types' =>  'gif|jpg|png',
                        'file_name'     =>  substr(str_shuffle('qwertyuiosdfghjklzxcvbnm'.time()), 0, 10),
                        'upload_path'   =>  './uploads/pictures/',
                        'max_size'      => 10000,
                        'max_width'     => 5000,
                        'max_height'    => 5000
                    );

                    foreach(array_keys($_FILES) as $h)
                    {
                        $this->upload->initialize($arr_config);
                        if ($this->upload->do_upload($h)) 
                        {
                            $images[] = $this->upload->file_name;
                            $config['image_library']    = 'gd2';
                            $config['source_image']     = './uploads/pictures/'.$this->upload->file_name;
                            $config['create_thumb']     = FALSE;
                            $config['maintain_ratio']   = TRUE;
                            $config['width']            = 600;
                            $config['height']           = 400;
                            $this->load->library('image_lib'); 

                            if($this->upload->image_width > 600 || $this->upload->image_height > 400)
                            {
                                $this->image_lib->clear();
                                $this->image_lib->initialize($config);

                                if($this->image_lib->resize())
                                {
                                    unset($config);
                                    $this->make_thumb($this->upload->file_name);
                                }
                            }
                            else
                            {
                                unset($config);
                                $this->make_thumb($this->upload->file_name);
                            }
                        }
                    }
                    if(isset($images))
                    {
                    	$data['imgs']     = serialize($images);
                    }

                    $data['features'] = serialize($this->input->post('features'));
                    $data['title']	  = $this->input->post('title');
                    if(isset($file))
                    	$data['main']	  = $file;
                    $data['content']  = $this->input->post('content');
                    $data['video']	  = $this->input->post('video');

                    $this->load->model('admin_model');
                    $this->admin_model->edit_review(end($this->uri->segments),$data);
                    redirect(base_url('admin/reviews'));
			}
			else
			{
				$this->load->view('admin/inc/header');
				$this->load->view('admin/editreview',$not_data);
				$this->load->view('admin/inc/footer');
			}
		}
		else
		{
			redirect(base_url('admin/login'));
		}

		 			// $this->load->library('upload');
      //               if(isset($_POST['change_file']))
      //               {

      //                   $file_config =   array(  
      //                       'allowed_types' =>  '*',
      //                       'upload_path'   =>  './uploads/files/',
      //                       'max_size'      => 50000,
      //                   );

      //                   $this->upload->initialize($file_config);

      //                   if($this->upload->do_upload("file"))
      //                   {
      //                       $file = $this->upload->file_name;
      //                   }
      //               }

      //               $images_count = $this->input->post('images_count');

      //               $arr_config =   array(  
      //                   'allowed_types' =>  'gif|jpg|png',
      //                   'file_name'     =>  substr(str_shuffle('qwertyuiosdfghjklzxcvbnm'.time()), 0, 10),
      //                   'upload_path'   =>  './uploads/pictures/',
      //                   'max_size'      => 10000,
      //                   'max_width'     => 5000,
      //                   'max_height'    => 5000
      //               );

      //               $current_images = explode('|', $data['object']->pictures);
      //               $current_images = array_combine(range(1, count($current_images)), $current_images);


      //               for($i = 1; $i <= $images_count; $i++)
      //               {
      //                   if(isset($_POST['check_image_'.$i]))
      //                   {   
      //                       $this->upload->initialize($arr_config);
      //                       if($this->upload->do_upload('image_'.$i))
      //                       {
      //                           $current_images[$i] = $this->upload->file_name;
      //                           $config['image_library']    = 'gd2';
      //                           $config['source_image']     = './uploads/pictures/'.$this->upload->file_name;
      //                           $config['create_thumb']     = FALSE;
      //                           $config['maintain_ratio']   = TRUE;
      //                           $config['width']            = 600;
      //                           $config['height']           = 400;
      //                           $this->load->library('image_lib'); 

      //                           if($this->upload->image_width > 600 || $this->upload->image_height > 400)
      //                           {
      //                               $this->image_lib->clear();
      //                               $this->image_lib->initialize($config);

      //                               if($this->image_lib->resize())
      //                               {
      //                                   unset($config);
      //                                   $this->make_thumb($this->upload->file_name);
      //                               }
      //                           }
      //                           else
      //                           {
      //                               unset($config);
      //                               $this->make_thumb($this->upload->file_name);
      //                           }
      //                       }
      //                   }
      //               }
	}

	public function reviews()
	{
		$this->load->model('admin_model');
		$data['reviews'] = $this->admin_model->get_reviews();
		$this->load->view('admin/inc/header');
		$this->load->view('admin/reviews',$data);
		$this->load->view('admin/inc/footer');
	}
}
