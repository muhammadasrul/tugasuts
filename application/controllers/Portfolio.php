<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {

	public function index()
	{
		$data = [
			'title' => 'Home',
			'nama' => 'Asrul',
			'deskripsi' => 'Saya memotret dengan sangat naluriah. Saya tidak mengikuti gaya, filosofi atau guru tertentu.',
			'ig' => '@asrul.png',
			'css' => $this->css(),
			'js' => $this->js(),
			'foto' => $this->foto()
		];
		$this->load->view('vportfolio',$data);
	}

    public function about()
    {
        $data = [
            'title' => 'Home',
            'nama' => 'Asrul',
            'deskripsi' => 'Saya memotret dengan sangat naluriah. Saya tidak mengikuti gaya, filosofi atau guru tertentu.',
            'ig' => '@asrul.png',
            'css' => $this->css(),
            'js' => $this->js(),
            'foto' => $this->foto()
        ];
        $this->load->view('about_view',$data);
    }

    public function gallery()
    {
        $data = [
            'title' => 'Home',
            'nama' => 'Asrul',
            'deskripsi' => 'Saya memotret dengan sangat naluriah. Saya tidak mengikuti gaya, filosofi atau guru tertentu.',
            'ig' => '@asrul.png',
            'css' => $this->css(),
            'js' => $this->js(),
            'foto' => $this->foto()
        ];
        $this->load->view('gallery_view',$data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Home',
            'nama' => 'Asrul',
            'deskripsi' => 'Saya memotret dengan sangat naluriah. Saya tidak mengikuti gaya, filosofi atau guru tertentu.',
            'ig' => '@asrul.png',
            'css' => $this->css(),
            'js' => $this->js(),
            'foto' => $this->foto()
        ];
        $this->load->view('contact_view',$data);
    }

	public function css() {
		$data='
		    <!-- Favicon -->
		    <link rel="icon" href="'.base_url().'assets./img/core-img/favicon.png">

		    <!-- Stylesheet -->
		    <link rel="stylesheet" href="'.base_url().'assets/style.css">

			</head>';
			    return $data;
	}

	public function js() {
		$data='<!-- **** All JS Files ***** -->
		    <!-- jQuery 2.2.4 -->
		    <script src="'.base_url().'assets/js/jquery.min.js"></script>
		    <!-- Popper -->
		    <script src="'.base_url().'assets/js/popper.min.js"></script>
		    <!-- Bootstrap -->
		    <script src="'.base_url().'assets/js/bootstrap.min.js"></script>
		    <!-- All Plugins -->
		    <script src="'.base_url().'assets/js/alime.bundle.js"></script>
		    <!-- Active -->
		    <script src="'.base_url().'assets/js/default-assets/active.js"></script>';

		    return $data;
	}

	public function foto() {
		$data='<div class="row alime-portfolio">
                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item nature mb-30 wow fadeInUp" data-wow-delay="100ms">
                    <div class="single-portfolio-content">
                        <img src="'.base_url().'assets/img/bg-img/3.jpg" alt="">
                        <div class="hover-content">
                            <a href="'.base_url().'assets/img/bg-img/3.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item video human mb-30 wow fadeInUp" data-wow-delay="300ms">
                    <div class="single-portfolio-content">
                        <img src="'.base_url().'assets/img/bg-img/4.jpg" alt="">
                        <div class="hover-content">
                            <a href="'.base_url().'assets/img/bg-img/4.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item country mb-30 wow fadeInUp" data-wow-delay="500ms">
                    <div class="single-portfolio-content">
                        <img src="'.base_url().'assets/img/bg-img/5.jpg" alt="">
                        <div class="hover-content">
                            <a href="'.base_url().'assets/img/bg-img/5.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item human mb-30 wow fadeInUp" data-wow-delay="700ms">
                    <div class="single-portfolio-content">
                        <img src="'.base_url().'assets/img/bg-img/6.jpg" alt="">
                        <div class="hover-content">
                            <a href="'.base_url().'assets/img/bg-img/6.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item nature mb-30 wow fadeInUp" data-wow-delay="100ms">
                    <div class="single-portfolio-content">
                        <img src="'.base_url().'assets/img/bg-img/7.jpg" alt="">
                        <div class="hover-content">
                            <a href="'.base_url().'assets/img/bg-img/7.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item video country mb-30 wow fadeInUp" data-wow-delay="300ms">
                    <div class="single-portfolio-content">
                        <img src="'.base_url().'assets/img/bg-img/8.jpg" alt="">
                        <div class="hover-content">
                            <a href="'.base_url().'assets/img/bg-img/8.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item human mb-30 wow fadeInUp" data-wow-delay="500ms">
                    <div class="single-portfolio-content">
                        <img src="'.base_url().'assets/img/bg-img/10.jpg" alt="">
                        <div class="hover-content">
                            <a href="'.base_url().'assets/img/bg-img/10.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item nature mb-30 wow fadeInUp" data-wow-delay="700ms">
                    <div class="single-portfolio-content">
                        <img src="'.base_url().'assets/img/bg-img/9.jpg" alt="">
                        <div class="hover-content">
                            <a href="'.base_url().'assets/img/bg-img/9.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-6 single_gallery_item video country mb-30 wow fadeInUp" data-wow-delay="100ms">
                    <div class="single-portfolio-content">
                        <img src="'.base_url().'assets/img/bg-img/36.jpg" alt="">
                        <div class="hover-content">
                            <a href="'.base_url().'assets/img/bg-img/36.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item human mb-30 wow fadeInUp" data-wow-delay="300ms">
                    <div class="single-portfolio-content">
                        <img src="'.base_url().'assets/img/bg-img/37.jpg" alt="">
                        <div class="hover-content">
                            <a href="'.base_url().'assets/img/bg-img/37.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item country mb-30 wow fadeInUp" data-wow-delay="500ms">
                    <div class="single-portfolio-content">
                        <img src="'.base_url().'assets/img/bg-img/5.jpg" alt="">
                        <div class="hover-content">
                            <a href="'.base_url().'assets/img/bg-img/5.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>
            </div>';
            return $data;
	}
}
