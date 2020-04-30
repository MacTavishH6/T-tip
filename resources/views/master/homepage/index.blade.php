@extends('layouts/main')

@section('title','T-tip')

@section('nama', $user->nama)

@section('style')
    <style>
    .instagram-content{
        display: flex;
        justify-content: center;
    }
    .photo-box {
        margin: 0 0 30px 0;    
    }
    .description {
        font-family: 'Montserrat', sans-serif;
        font-size: 12px;
        background: #FFF;
        color: #9b9b9b;
        letter-spacing: 1px;
        padding: 10px*1.5;
        height: 75px;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }
    .likes {
        position: absolute;
        bottom: 5px;
        left: 15px;
        padding: 10px/2;
        background: #000;
        background: rgba(#000, 0.4);
        color: #FFF;
    }
    .filter-wrap{
       float: left;
       position: absolute;
       left: 10%;
    }
    .content{
        position: absolute;
        float: left; 
        left: 39%;
        top: 10%;
    }
    </style>
@endsection

@section('filter')
    <div class="filter-wrap my-5 py-3 px-4 border">
        <h5>Filter</h5>
        <div class="insidefilter ml-3">
            <h6>Catergory</h6>
            <a href="#">> Foods & Drinks</a><br>
            <a href="#">> Fashion</a><br>
            <a href="#">> Electronic</a>
            <br>
            <a href="#">> Phone or Tablet</a><br>
            <a href="#">> Souvenir</a><br>
            <a href="#">> Health</a><br>
            <h6>Country</h6>
            <a href=""><img src="{{ URL::asset('images/belanda.svg') }}" alt="" width="30px"></a>
            <a href=""><img src="{{ URL::asset('images/China.svg') }}" alt="" width="30px"></a>
            <a href=""><img src="{{ URL::asset('images/Flag_of_israel.svg') }}" alt="" width="30px"></a>
            <a href=""><img src="{{ URL::asset('images/Indonesia.png') }}" alt="" width="30px"></a>
            <br>
            <a href=""><img src="{{ URL::asset('images/swiss.jpg') }}" alt="" width="30px"></a>
            <a href=""><img src="{{ URL::asset('images/Korea.svg') }}" alt="" width="30px"></a>
            <a href=""><img src="{{ URL::asset('images/Malaysia.svg') }}" alt="" width="30px"></a>
            <a href=""><img src="{{ URL::asset('images/Singapore.svg') }}" alt="" width="30px"></a>
            <br>
            <a href=""><img src="{{ URL::asset('images/Thailand.svg') }}" alt="" width="30px"></a>
            <img src="{{ URL::asset('images/Flag_of_Italy.svg') }}" alt="" width="30px">
            <a href=""><img src="{{ URL::asset('images/125px-Flag_of_Laos.svg.png') }}" alt="" width="30px"></a>
            <a href=""><img src="{{ URL::asset('images/Spain.png') }}" alt="" width="30px"></a>

        </div>
    </div>
@endsection

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-12">
                <div class="instagram-content">
                    <div class="row photos-wrap">
                        <!-- Instafeed target div -->
                        <div id="instafeed">
                            <!-- The following HTML will be our template inside instafeed -->
                            <div class="col-12">
                                <div class="photo-box">
                                    <div class="image-wrap text-center">
                                        <img src="{{ URL::asset('images/HumanIcon.png') }}" width="200px">
                                        <div class="likes">309 Likes</div>
                                    </div>
                                    <div class="description">
                                        Fantastic Architecture #architecture #testing
                                        <div class="date">September 16, 2014</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection