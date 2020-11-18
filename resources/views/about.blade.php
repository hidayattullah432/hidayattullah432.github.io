@extends('layouts.master')
@section('title','About Us')
@section('content')
    

<div id="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-sm-6">
				<img class="img-fluid img-responsive" src="{{asset('img/gg.jpg')}}" alt="">
			</div>
			<div class="col-lg-6 col-sm-6">
				<h1 class="title">PROTOKOL DAN KOMUNIKASI PIMPINAN</h1>
                <p class="text1 text-justify">Bagian Humas dan Protokol merupakan salahsatu bagian di Sekretariat Daerah yang mempunyai tugas membantu Asisten Administrasi dan umum dalam melaksanakan penyiapan perumusan kebijakan Pemerintah Daerah di bidang hubungan masyarakat dan fasilitasi pelaksanaan koordinasi dan evaluasi penyelenggaraan pemberitaan, informasi, komunikasi, protokol dan dokumentasi KDH/WKDH.</p>
                
			</div>
            <div class="col-lg-6 col-sm-12">
                
				<h1 class="title">Tugas</h1>
				<p>Melaksanakan perumusan bahan penyusunan kebijakan dan pengoordinasian administratif pelaksanaan tugas Perangkat Daerah, serta pelayanan administratif bidang keprotokolan, kehumasan, komunikasi, informatika, perpustakaan dan kearsipan.</p>
            </div>
		</div>
	</div>
</div>
    
    
<div id="team">
    <div class="container">
        <h1 class="title text-center color-white">ANGGOTA</h1>
        <hr style="width: 170px;">
        
        <div class="col-lg-4 col-sm-4">
            <img class="img-responsive img-center img-circle" style="height: 35%;" src="{{asset('img/rahmat.jpeg')}}" alt="team">
            <div class="team-name">
                <p class="text-center"><strong>PENYUSUN</strong></p>
                <p class="text-center"><strong>RAHMAD RIADI, S.AB</strong></p>
            </div>
        </div>

        <div class="col-lg-4 col-sm-4">
            <img class="img-responsive img-center img-circle" style="height: 35%;" src="{{asset('img/udin.jpeg')}}" alt="team">
            <div class="team-name">
                <p class="text-center"><strong>KABAG PROTOKOL DAN KOMUNIKASI PIMPINAN</strong></p>
                <p class="text-center"><strong>H. SYAIFUDDIN TAILAH, S. Pd, MM</strong></p>
            </div>
        </div>
        
        <div class="col-lg-4 col-sm-4">
            <img class="img-responsive img-center img-circle" style="height: 35%;" src="{{asset('img/yoyok.jpg')}}" alt="team">
            <div class="team-name">
                <p class="text-center"><strong>KASUBAG KOMUNIKASI PIMPINAN</strong></p>
                <p class="text-center"><strong>YOYOK SAPUTRO, SIP</strong></p>
            </div>
        </div>
        
    </div>
</div> 
        

<section class="portfolio" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">	
                <h1 class="title text-center color-white">Galeri</h1>
                <hr style="width: 80px;">
            </div>
        </div>
        <div class="row">

            <div id="g1" class=" col-lg-12  col-sm-12">
                <img  class="thumbnail img-responsive" src="{{asset('img/gg.jpg')}}" alt="projects">
                </div>		

    </div>
        <div class="row">
            <div class=" col-md-4 col-sm-4">
                <img class="thumbnail dua img-responsive" src="{{asset('img/gg.jpg')}}" alt="projects">
            </div>
            
            
            <div class=" col-md-4 col-sm-4">
                <img class="thumbnail dua img-responsive" src="{{asset('img/gg.jpg')}}" alt="projects">
            </div>		
                <div class=" col-md-4 col-sm-4">
                <img class="thumbnail dua img-responsive" src="{{asset('img/gg.jpg')}}" alt="projects">
            </div>
            </div>
        </div>
    </div>
</section>	

<div id="contact" class="kontak">

    <div class="container">
        <h1 class="title text-center">Contact</h1>
        <hr style="width: 100px;">  
        
        <div class="row">
            <div class="col-md-8 head">
                <h2>About Us</h2>
                    <p class="text1 text-justify">Bagian Humas dan Protokol mempunyai tugas pokok melaksanakan sebagian tugas pokok Asisten Administrasi  Perekonomian dan Pembangunan dalam pengkoordinasian, penyiapan, pengumpulan informasi, pemberitaan, kehumasan dan protokol serta bahan-bahan lainnya yg berhubungan dengan bidang tugasnya.</p>
            
                <h3>Head Office</h3>
                    <p class="text1 text-justify"><br> Telp/Fax : (0526) 2028408</p>
                    <p class="text1 text-justify">Email : <a href="humas.balangan@gmail.com">humas.balangan@gmail.com</a></p>
                    <p class="text1 text-justify">Website Resmi : <a href="http://www.balangankab.go.id/">http://www.balangankab.go.id/</a></p>
                    <p class="text1 text-justify">Alamat : Batu Piring, Paringin Sel., Kabupaten Balangan, Kalimantan Selatan 71662</p>
                
            </div>
            <div class="col-md-4 col-sm-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.4232806410973!2d115.46888281433105!3d-2.3638194384163516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de54fff99f6c1af%3A0xd83a9feb0d899452!2sKantor%20Bupati%20Balangan!5e0!3m2!1sid!2sid!4v1604498519409!5m2!1sid!2sid" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>


@endsection