Function index (){
	//echo "Hello Haiiii";
	$this->load->view('menu');
	$this->load->view('Hai');
	}
	
	Function Prodi (){
	//echo "Hello Haiiii";
	$data=array('title'=>'Surat Tugas',
	
		 'isi' =>'Prodi'
		 
		 );
	$this->load->view('PLJ/prodi');
	}
	
	Function Golongan (){
	//echo "Hello Haiiii";
	$this->load->view('menu');
	$this->load->view('Golongan');

	}
	
	Function Semester (){
	//echo "Hello Haiiii";
	$this->load->view('menu');
	$this->load->view('Semester');
	}	
	}