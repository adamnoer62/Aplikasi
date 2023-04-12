@extends('master')
@section('title')
<title>Dashboard</title>
@endsection
@section('body')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active col-50 col-md-10 offset-md-3 ml-md-auto" >
      <img class="d-block w-100" style="animation-duration: 2s; padding-left:400px ;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQE91gu-X4G-Erj7U2EX7dguHs8yJZVfmYe08UW7l2FmVJwfrD4" alt="First slide">
    </div>
    <div class="carousel-item col-50 col-md-10 offset-md-3 ml-md-auto">
      <img class="d-block w-100" style="animation-duration: 2s; padding-left:250px" src="https://malahidecu.ie/wp-content/uploads/2023/02/MCU-JOB-VACANCY.png" alt="Second slide">
    </div>
    <div class="carousel-item col-50 col-md-10 offset-md-3 ml-md-auto">
      <img class="d-block w-100" style="animation-duration: 2s; padding-left:250px" src="https://www.acte.in/wp-content/uploads/2020/10/SalesForce.png" alt="Third slide">
    </div>
    <div class="carousel-item col-50 col-md-10 offset-md-3 ml-md-auto">
        <img class="d-block w-100" style="animation-duration: 2s; padding-left:250px" src="https://almamate.in/wp-content/uploads/2021/02/role-of-salesforce-developer.png" alt="Four slide">
      </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only bg-dark">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only bg-dark">Next</span>
  </a>
</div>

<div class="container-fluid jumbotron Text-center mt-3" style="background-color:white">
    <h1 class="col mx-auto" style="text-align: center">Our Cooperating Companies:</h1>
    <div class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="https://i.pinimg.com/originals/35/d9/39/35d9395931158eea3aef20130c0f52d9.png" alt="..." aria-label="Tokopedia Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="https://solusiprinting.com/wp-content/uploads/2020/08/Logo-Telkom-1280px-x-720px-1024x576.jpg" alt="..." aria-label="Telkom Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="https://solusiprinting.com/wp-content/uploads/2020/08/Logo-Pertamina-1280px-x-720px-1024x576.jpg" alt="..." aria-label=" " /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="https://solusiprinting.com/wp-content/uploads/2020/08/Logo-Gojek-1280px-x-720px-1024x576.jpg" alt="..." aria-label=" " /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="https://solusiprinting.com/wp-content/uploads/2020/08/Logo-Djarum-1280px-x-720px-1024x576.jpg" alt="..." aria-label=" " /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="https://img.tek.id/img/content/2022/01/17/48481/tahun-2022-alibaba-cloud-fokus-berkomitmen-pada-pengembangan-talenta-dan-program-kemitraan-lokal-di-indonesia-hks2IDBEIX.jpg" alt="..." aria-label=" " /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="https://akcdn.detik.net.id/visual/2015/01/04/a2c5f53f-bf4b-4eff-9e4f-773e879068d8_169.jpg?w=650" alt="..." aria-label=" " /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="https://www.educationlabs.it/wp-content/themes/yootheme/cache/oracle-4e8814da.png" alt="..." aria-label=" " /></a>
                </div>
            </div>
        </div>
    </div>
</div>
 <div
  id="carouselMultiItemExample"
  class="carousel slide carousel-dark text-center"
  data-mdb-ride="carousel"
>
  <!-- Controls -->

  <!-- Inner -->
  <div class="carousel-inner py-4">
    <!-- Single item -->
    <div class="carousel-item active">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="card">
              <img
                src="https://v1.bakrie.ac.id/images/RTV.png"
                class="card-img-top"
                alt="Waterfall"
              />
              <div class="card-body">
                <h5 class="card-title col-10 mx-auto" >We Looking for Multimedia</h5>
                <p class="card-text">
                </p>
                <a href="/" class="btn btn-primary">View</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
              <img
                src="https://pbs.twimg.com/media/EQ5wEP8VAAEIira.jpg"
                class="card-img-top"
                alt="Sunset Over the Sea"
              />
              <div class="card-body">
                <h5 class="card-title col-10 mx-auto">We Are Hiring for all college Majors</h5>
                <p class="card-text">
                </p>
                <a href="#!" class="btn btn-primary">view</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
              <img
                src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/8c7441125812357.6120beff1f2f0.png"
                class="card-img-top"
                alt="Sunset over the Sea"
              />
              <div class="card-body">
                <h5 class="card-title col-10 mx-auto">Job Vacancy for Graphic Disigner</h5>
                <p class="card-text">
                </p>
                <a href="#!" class="btn btn-primary">view</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12">
            <div class="card">
              <img
                src="https://www.nesabamedia.com/wp-content/uploads/2019/10/poster-job-vacancy-Marketing-Trainee-e1570797329639.png"
                class="card-img-top"
                alt="Fissure in Sandstone"
              />
              <div class="card-body">
                <h5 class="card-title col-10 mx-auto">>We Are Hiring for Accounting</h5>
                <p class="card-text">
                </p>
                <a href="#!" class="btn btn-primary">view</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Inner -->
</div>
<div
  id="carouselMultiItemExample"
  class="carousel slide carousel-dark text-center"
  data-mdb-ride="carousel"
>
  <!-- Controls -->

  <!-- Inner -->
  <div class="carousel-inner py-4">
    <!-- Single item -->
    <div class="carousel-item active">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="card">
              <img
                src="https://s.kaskus.id/images/2020/02/04/3500256_20200204102712.jpg"
                class="card-img-top"
                alt="Waterfall"
              />
              <div class="card-body">
                <h5 class="card-title col-10 mx-auto">We Are Hiring for IT Majors</h5>
                <p class="card-text">
                </p>
                <a href="#!" class="btn btn-primary">View</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card">
              <img
                src="https://www.lokerbumiayu.id/images/loker/060c2008a0c65cde08edf24263976ffb.jpg"
                class="card-img-top"
                alt="Waterfall"
              />
              <div class="card-body">
                <h5 class="card-title col-10 mx-auto">We Are Hiring for IT Majors</h5>
                <p class="card-text">
                </p>
                <a href="#!" class="btn btn-primary">View</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
              <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_9fg2z2b6URjphi3pqmxz5F0lHU1GpYEsbmez5nq8S8EId1aryRxdcKzm8AD_uFgSwf0&usqp=CAU"
                class="card-img-top"
                alt="Sunset Over the Sea"
              />
              <div class="card-body">
                <h5 class="card-title col-10 mx-auto">We Looking for IT Support</h5>
                <p class="card-text">
                </p>
                <a href="#!" class="btn btn-primary">view</a>
              </div>
            </div>
          </div>
  </div>
  <!-- Inner -->
</div>
<div
  id="carouselMultiItemExample"
  class="carousel slide carousel-dark text-center"
  data-mdb-ride="carousel"
>
  <!-- Controls -->

  <!-- Inner -->
  <div class="carousel-inner py-4">
    <!-- Single item -->
    <div class="carousel-item active">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="card">
              <img
                src="https://www.its.ac.id/tindustri/wp-content/uploads/sites/25/2018/03/jv01.png"
                class="card-img-top"
                alt="Waterfall"
              />
              <div class="card-body">
                <h5 class="card-title" >Job Vancancy for Marketing shiping</h5>
                <p class="card-text">
                </p>
                <a href="#!" class="btn btn-primary">View</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
              <img
                src="https://1.bp.blogspot.com/-QowMMeZ_Hn0/YTaiqOU4XsI/AAAAAAAACoU/TkddGcDgKwMir22yYkV0lNw1lmJKpHtyQCLcBGAsYHQ/s1251/Lowongan%2BKerja%2BBandung%2BCom_7%2BSeptember%2B2021_7.jpg"
                class="card-img-top"
                alt="Sunset Over the Sea"
              />
              <div class="card-body">
                <h5 class="card-title">We looking for Branding Disigner</h5>
                <p class="card-text">
                </p>
                <a href="#!" class="btn btn-primary">view</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
              <img
                src="https://www.rsmardirahayu.com/wp-content/uploads/2022/01/Ahli-Teknologi-Laboratorium-Medik-Feed-IG-Fix-Web-1024x1024.jpg"
                class="card-img-top"
                alt="Sunset over the Sea"
              />
              <div class="card-body">
                <h5 class="card-title">Job Vacancy For medical technology expert</h5>
                <p class="card-text">
                </p>
                <a href="#!" class="btn btn-primary">view</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Inner -->
</div>
    <div class="p-3 text-center bg-image rounded-6" style=" background-image: url('https://lh3.googleusercontent.com/YJ-5NmFg68K8yK54le0jmtEUqpoGSJVyRe_1Oq45qcy_lx4AmElquHrrKRYlwn8SH4Nb8KhksagG-tYH-E7dWQ_I_eQb8ku5Ujh_9f2J');height: 400px;">
  <div class="mask" style="border:5px; padding: 150px; padding-left:55px ;padding-rigth: 55px; background-color: rgba(0, 0, 0, 0.6);">
    <div class="d-flex justify-content-center align-items-center h-700">
      <div class="text-white">
        <h1 class="mb-3">Peluang Karir Anda Sedang Menunggu</h1>
        <h4 class="mb-3">Jangan sia-siakan Kesempatan Anda Mengemkembang Pengalaman Anda di Dunia pekerjaan Menjadi Usai Karna masa depan ada di Pilihan Anda</h4>
      </div>
    </div>
    <a href="#!" class="btn btn-outline-dark" style="padding:20px ;">Join Now</a>
  </div>
</div>

@endsection
