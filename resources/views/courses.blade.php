@extends('style')
@section('topcourse')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
        <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">{{$topcourse->name}}</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">{{ $topcourse->description}}</h2>
          <div data-aos="fade-up" data-aos-delay="800">
            <a href="/details/{{$topcourse->id}}" class="btn-get-started scrollto">Details</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->
@endsection


@section('counts')
<section id="counts" class="counts">
  <div class="container">


    <div class="row">
      <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
        <img src="assets/img/counts-img.svg" alt="" class="img-fluid">
      </div>

      <div class="col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
        <div class="content d-flex flex-column justify-content-center">
          <div class="row">
            <div class="col-md-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="icofont-simple-smile"></i>
                <span data-toggle="counter-up">{{$coursepivot->count()}}</span>
                <p><strong>Excellent courses</strong> consequuntur voluptas nostrum aliquid ipsam architecto ut.</p>
              </div>
            </div>

            <div class="col-md-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="icofont-document-folder"></i>
                <span data-toggle="counter-up">{{ DB::table('users') -> count() }}</span>
                <p><strong>Docenten</strong> adipisci atque cum quia aspernatur totam laudantium et quia dere tan</p>
              </div>
            </div>

            <div class="col-md-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="icofont-clock-time"></i>
                <span data-toggle="counter-up">{{ DB::table('students') -> count() }}</span>
                <p><strong>Cursisten</strong> aut commodi quaerat modi aliquam nam ducimus aut voluptate non vel</p>
              </div>
            </div>

            <div class="col-md-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="icofont-award"></i>
                <span data-toggle="counter-up">15</span>
                <p><strong>Awards</strong> rerum asperiores dolor alias quo reprehenderit eum et nemo pad der</p>
              </div>
            </div>
          </div>
        </div><!-- End .content-->
      </div>
    </div>
  </div>
</section>
@endsection

@section('courses')
<section id="services" class="services">
  <div class="container">
       <div class="row">
      @foreach ($coursepivot as $course)
      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="bx bx-world"></i></div>
            <h4 class="title"><a href="/details/{{ $course->id}}">{{ $course->name}} (€{{ $course->price}})</a></h4>
            <h6 style="color:#3498db">Inschrijvingen: {{$course->student_count}}/20</h6>
            <p class="description">{{ $course->description}}</p>
          </div>
        </div>
  @endforeach
</div>
</section>
@endsection