@extends('layouts.main')
<!-- ========================= SECTION CONTENT ========================= -->
@section('content')
<section class="section-content bg py-5 border-top">
<div class="container col-xl-10 col-sm-12 col-md-10">
    <section class="my-2">
      <!-- Section heading -->
      <h1 class="h1-responsive font-weight-bold text-center my-1">Contacteaz&#259;-ne</h1>
      <!-- Section description -->
      <p class="text-center w-responsive mx-auto pb-2">Suntem la dispozi&#355;ia dvs. Pentru servicii calitative nu ezita&#355;i s&#259; ne suna&#355;i
			s&#259; afla&#355;i mai multe despre comand&#259; sau alte necesit&#259;&#355;i.</p>
      @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif 
        @if($message=Session::get('message'))
        <div class="alert-success">
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{{$message}}</strong>
            </div>
        </div>
        @endif  
      <!-- Grid row -->
      <div class="row d-flex justify-content-center">
        <!-- Grid column -->
        <div class="col-lg-6 mb-lg-0 mb-4">
          <!-- Form with header -->
          <div class="card">
            <div class="card-body bg-secondary">
              <!-- Header -->
              <div class="form-header blue accent-1">
                <h3 class="mt-2 text-dark"><i class="fas fa-envelope text-dark"></i> Trimite un mesaj:</h3>
              </div>
              <p class="text-dark">Suntem bucuro&#351;i s&#259; v&#259; r&#259;spundem.</p>
              <!-- Body -->
              <form method="POST" action="{{route('mesaj.store')}}">
                {{csrf_field()}}
              <div class="md-form input-group flex-nowrap mb-3 shadow-sm">
                <input type="text" id="form-name" name="name" class="form-control text-dark" placeholder="Nume Prenume" required>
              </div>
              <div class="md-form input-group flex-nowrap mb-3 shadow-sm">
                <input type="text" id="form-email" name="email" class="form-control text-dark" placeholder="Email" required>
              </div>
              <div class="md-form input-group flex-nowrap mb-3 shadow-sm">
                <textarea id="form-text" name="message" class="form-control md-textarea text-dark" rows="3" placeholder="Mesaj" required></textarea>
              </div>
              <div class="text-center">
                <button type="submit" name="send" class="btn btn-primary" onClick="this.form.submit(); this.disabled=true; " value=" ">Trimite</button>
              </div>
              </form>
            </div>
          </div><!-- Form with header -->
        </div><!-- Grid column -->     
        
      </div><!-- Grid row -->
    </section><!-- Section: Contact v.1 -->
	</div>
</section>

    <!-- ========================= SECTION CONTENT END// ========================= -->
@endsection
