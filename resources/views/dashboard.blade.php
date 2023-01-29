@extends('layouts.app')
@section('content')
<div class="main_content_iner ">
    <div class="container-fluid p-0">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="single_element">
                    <div class="quick_activity">
                        <div class="row">
                            <div class="col-12">
                                <div class="quick_activity_wrap">
                                    <div class="single_quick_activity d-flex">
                                        <div class="icon">
                                            <img src="asset/img/icon/man.svg" alt="">
                                        </div>
                                        <div class="count_content">
                                            <h3><span class="counter">0</span> </h3>
                                            <p>Students</p>
                                        </div>
                                    </div>
                                    <div class="single_quick_activity d-flex">
                                        <div class="icon">
                                            <img src="asset/img/icon/cap.svg" alt="">
                                        </div>
                                        <div class="count_content">
                                            <h3><span class="counter">0</span> </h3>
                                            <p>Books</p>
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
</div>
@endsection
