<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
        alert(msg);
    }
  </script>
  <!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <style>
        body{
            background-color: #7b858e;
        }
            
        .card{
  margin-bottom: 10px;
} 
        </style>
  
      <title>Pengaduan Masyareakat</title>
    </head>
    <body>
      <nav class="navbar navbar-dark bg-dark" >
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-item nav-link active" href="/">Home<span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link" href="/search">Search</a>
              <a class="nav-item nav-link" href="/feedbackpage">Feedback</a>
              <a class="nav-item nav-link" href="/about">About</a>
            </div>
          </div>
          <a class="navbar-brand ml-auto" href="/loginpage">
            Aspirasi
          </a>
      </nav>
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Aspirasi Jakbar!</h1>
          <p class="lead">Kami adalah website yang disediakan pemerintah Jakarta Barat<br>
            untuk warga sekitar Jakarta Barat melaporkan keluhan-keluhan masalah <br>
            Keamanan, Kebersihan, dan Sarana Parasana di sekitar wilayah Jakarta Barat.</p>
        </div>
      </div>
       <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="card-img-top" src="https://jatimnow.com/po-content/uploads/medium/medium_Gotong_Royong_Lawan_Sampah_Trenggalek.jpg" alt="">
            <div class="card-body">
              <p class="card-text">Kegiatan gotong royong agar membudidayakan budaya kebersihan di daerah Jakarta Barat adalah salah satu program pemkot Jakarta Barat</p>
              <div class="d-flex justify-content-between align-items-center">
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="card-img-top" src="https://static.republika.co.id/uploads/images/inpicture_slide/pekerja-menyelesaikan-pemasangan-turap-sungai-mookervart-di-jalan-_131107183659-226.jpg" alt="">
            <div class="card-body">
              <p class="card-text">Infrastruktur adalah bagian penting dari development kota Jakarta Barat.Fokus kami terhadap pengembangan Infrastruktur Jakarta Barat adalah agar bisa membantu warga-warganya</p>
              <div class="d-flex justify-content-between align-items-center">
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="card-img-top" src="https://cdn1-production-images-kly.akamaized.net/ByLwYVMjaBzLzhGsZCphUJX_Yyk=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/1796143/original/088925700_1512874174-Upacara_bendera_di_jambi.jpg" alt="">
            <div class="card-body">
              <p class="card-text">Fasilitas Pendidikan termasuk salah satu tanggung jawab pemerintahan kota Jakarta Barat. Oleh karena itu orangtua bisa menyampaikan aspirasinya melalui website kami ini</p>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="card-img-top" src="https://cdns.klimg.com/merdeka.com/i/w/news/2020/02/05/1145599/540x270/anggota-tni-di-garut-ikut-sergap-begal-jalanan.jpg" alt="">
            <div class="card-body">
              <p class="card-text">Keamanan dan kenyamanan warga Jakarta Barat juga merupakan tanggung jawab yang kami pemkot jakbar junjung tinggi</p>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="card-img-top" src="https://4.bp.blogspot.com/-vQL3aOD07S0/WPf7YBAWK-I/AAAAAAAAXLI/dF_yn4FR1HICV05vCLWYYl2rTDTTWjDOQCLcB/s1600/cat1.jpg" alt="">
            <div class="card-body">
              <p class="card-text">Kenyamanan berarti rasa kebersihan juga. kami ingin warga-warga Jakarta Barat merasa bahwa kebersihan lingkungannya selalu tertangani</p>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="card-img-top" src="https://4.bp.blogspot.com/-E1yq_vTC9Do/VTeQlB62fhI/AAAAAAAAAKw/u5e5FBiF8WE/s1600/IMG_0480.JPG" alt="">
            <div class="card-body">
              <p class="card-text">Keamanan,Kebersihan, dan Infrastruktur di pusat-pusat kultural kita sangat penting. Oleh karena itu PemKot Jakbar akan menjaganya dan website ini akan membantu</p>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>
        </div>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
  </html>