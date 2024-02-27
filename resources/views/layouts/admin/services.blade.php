@extends('main')

@section('content')
    

    <div class="my-3 my-md-5">
        <div class="container">
            <div class="page-header">
            <h1 class="page-title">
                Our Services
            </h1>
            </div>
            <div class="row row-cards">
            <a href="{{ route('recommandation') }}">
            
            <div class="col-6 col-sm-4 col-lg-2" @style('min-width: 300px; min-height: 300px; cursor: pointer;')>
                <div class="card">
                    <div class="card-title text-center mt-5">
                       <img src="{{ asset('assets/images/icon-1.png') }}" alt="" @style(' max-height: 100px;')>
                    </div>
                    <div class="card-body p-10 text-center " title="View our recommadation this weeks">
                        Recommandation
                        </div>
                    </div>
            </div>

            </a>
             <div class="col-6 col-sm-4 col-lg-2" @style('min-width: 300px; min-height: 300px; cursor: pointer;')>
                <div class="card">
                    <div class="card-title text-center mt-5">
                       <img src="{{ asset('assets/images/icon-5.png') }}" alt="" @style(' max-height: 100px;')>
                    </div>
                    <div class="card-body p-10 text-center " title="View our recommadation this weeks" title=" We trained on how to manage and solve ur algriculture issues ">
                        Training
                    </div>
                </div>
            </div>
            </div> 
        </div>
    </div>
    
</div>
@endsection