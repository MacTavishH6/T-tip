@extends('/layouts.main')

@section('title', 'user\'s profile')

@section('style')
    <style>
.content{
    position: absolute;
    left: 39%;
}
.card {
    padding-top: 10px;
    margin: 5px 0 20px 0;
    border: none;
}

.card .card-body {
    padding: 0 20px;    
}

.card.hovercard {
    position: relative;
    padding-top: 0;
    overflow: hidden;
    text-align: center;
}

.card.hovercard .avatar img {
    width: 200px;
    height: 200px;
    max-width: 200px;
    max-height: 200px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 5px solid rgba(255,255,255,0.5);
}



    </style>
@endsection

@section('content')
<div class="container content">
    <div class="row">
        <div class="">
            <div class="card hovercard">
                <div class="cardheader">
    
                </div>
                <div class="avatar">
                    <img alt="" src="{{ URL::asset('images/ProfilePictures/default.png') }}">
                </div>
                <div class="info">
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-6">
                                        <label>User Id</label>
                                    </div>
                                    <div class="col-6">
                                        <p>Kshiti123</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label>Name</label>
                                    </div>
                                    <div class="col-6">
                                        <p>Kshiti Ghelani</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-6">
                                        <p>kshitighelani@gmail.com</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label>Phone</label>
                                    </div>
                                    <div class="col-6">
                                        <p>123 456 7890</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label>Profession</label>
                                    </div>
                                    <div class="col-6">
                                        <p>Web Developer and Designer</p>
                                    </div>
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