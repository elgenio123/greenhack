@extends('main')
@section('content')

    <div class="my-3 my-md-5">
          <div class="container">

            <div class="input-icon mb-3">
                <input type="text" class="form-control" placeholder="Search for recommandation">
                <span class="input-icon-addon">
                  <i class="fe fe-search"></i>
                </span>
              </div>

            <div class="page-header">
              <h1 class="page-title">
                Learn more !
              </h1>
            </div>
            <div class="row row-cards row-deck">
              <div class="col-sm-6 col-xl-3">
                <div class="card">
                  <a href="#"><img class="card-img-top" src="{{ asset('assets/images/bg2.jpg') }}" alt="And this isn't my nose. This is a false one."></a>
                  <div class="card-body d-flex flex-column">
                    <h4><a href="#">And this isn't my nose. This is a false one.</a></h4>
                    <div class="text-muted">Look, my liege! The Knights Who Say Ni demand a sacrifice! …Are you suggesting that coconuts migr...</div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>

@endsection