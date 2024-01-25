@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://imgs.search.brave.com/MZcVw_uqMRXrrCdbi3wOUlSNxfZBENpSMzqYwLyE28c/rs:fit:500:0:0/g:ce/aHR0cHM6Ly93d3cu/aXN0b2NrcGhvdG8u/Y29tL3Jlc291cmNl/cy9pbWFnZXMvSG9t/ZVBhZ2UvRm91clBh/Y2svQzItUGhvdG9z/LWlTdG9jay0xMzU2/MTk3Njk1LmpwZw" class="d-block w-100" alt="Slide 1">
                    </div>
                    <div class="carousel-item">
                        <img src="https://imgs.search.brave.com/SNJyx1I_B2f_tQANcZk7MOav0KoBmU03JNijMPTX1ZU/rs:fit:500:0:0/g:ce/aHR0cHM6Ly93d3cu/c29mdG9yYml0cy5l/cy9hc3NldHMvaW1n/L2hvdy10by9lbi91/bmNlbnNvci1waWN0/dXJlL2JpcmQxLjUw/MDB3LmpwZw" class="d-block w-100" alt="Slide 2">
                    </div>
                    <div class="carousel-item">
                        <img src="https://imgs.search.brave.com/5DHfSczi1X831vGmipV6FfgW3FJkeuful7X4yvRW9N4/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZW4uaW8vaHMtZnMv/aHViZnMvaW1hZ2Vu/LXZpZGVvLW1hbmFn/ZW1lbnQtcGxhdGZv/cm0tc3BvcnQtbWVk/aWEud2VicD93aWR0/aD04MDAmaGVpZ2h0/PTczMiZuYW1lPWlt/YWdlbi12aWRlby1t/YW5hZ2VtZW50LXBs/YXRmb3JtLXNwb3J0/LW1lZGlhLndlYnA" class="d-block w-100" alt="Slide 3">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="card mt-4">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
