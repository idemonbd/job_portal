<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/owl.carousel.min.css') }}" />
    <!-- Site favicon -->
    <link rel="shortcut icon" href="{{ asset('public/admin/assets/images/favicon.ico') }}">
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/bootstrap.min.css') }}" />
    <!-- Main Css -->
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/style.css') }}" />

</head>
<body>

    <div class="view_right">

        <div class="profile_des">
            <div class="single_profile_box flex2">
                <div class="single_profile_box_left">
                    <img src="{{ url('public/storage/'.Auth::user()->picture) }}">
                </div>
                <div class="single_profile_box_right">
                    <h4>{{ Auth::user()->name }}</h4>
                    <p><i class="fas fa-home"></i>{{ Auth::user()->address }}</p>
                    <p><i class="far fa-envelope"></i>{{ Auth::user()->email }}</p>
                    <p><i class="fas fa-phone"></i>{{ Auth::user()->mobile }}</p>
                </div>
            </div>
            <div class="single_profile_box">
                <h6>OBJECTIVE</h6>
                <p>{{ Auth::user()->objective }}</p>
            </div>
            <div class="single_profile_box">
                <h6>WORK EXPERIENCE</h6>
                @foreach (\App\Experience::where('user_id',Auth::id())->get() as $item)
                <div class="single_child_box">
                    <span class="ex-title">{{ $item->designation }}</span>
                    <span>{{ $item->company }}</span>
                    <span>{{$item->start->format('d M, Y')}} to {{ $item->end->format('d M, Y') }}</span>
                    <p>{{ $item->responsibility }}</p>
                </div>
                @endforeach
            </div>
            <div class="single_profile_box">
                <h6>EDUCATION</h6>
                <div class="single_child_box">
                    <span class="ex-title">{{ Auth::user()->degree_institute }}</span>
                    <span>{{ Auth::user()->degree_title }}</span>
                    <span>{{ Auth::user()->degree_passed_year }}</span>
                    <span>{{ Auth::user()->degree_result }} ({{ Auth::user()->degree_major }})</span>
                </div>
                @foreach (Auth::user()->degrees as $degree)
                <div class="single_child_box">
                    <span class="ex-title">{{ $degree->institute }}</span>
                    <span>{{ $degree->title }}</span>
                    <span>{{ $degree->passed }}</span>
                    <span>{{ $degree->result }} ({{ $degree->major }})</span>
                </div>
                @endforeach

            </div>

            @foreach (\App\Training::where('user_id',Auth::id())->get() as $training)
            <h6>TRAINING</h6>
            <div class="single_child_box">
                <span class="ex-title">{{ $training->title }}</span>
                <p>{{ $training->details }}</p>
                <span>{{ $training->inst }}</span>
                <span>{{ $training->duration }}</span>
            </div>
            @endforeach

            @foreach (\App\Achivement::where('user_id',Auth::id())->get() as $item)
            <h6>ACHIEVMENT</h6>
            <div class="single_child_box">
                <div class="single_child_box">
                    <p>{{$item->name}}</p>
                </div>
            </div>
            @endforeach

            <div class="single_profile_box">
                <h6>PERSONAL</h6>
                <div class="single_child_box">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="col">Fathers Name</th>
                                <td>{{ Auth::user()->father}}</td>
                            </tr>
                            <tr>
                                <th scope="col">Mothers Name</th>
                                <td>{{ Auth::user()->father}}</td>
                            </tr>
                            <tr>
                                <th scope="col">Date of Birth</th>
                                <td>{{ Auth::user()->date_of_birth}}</td>
                            </tr>
                            <tr>
                                <th scope="col">Gender</th>
                                <td>{{ Auth::user()->gender}}</td>
                            </tr>
                            <tr>
                                <th scope="col">Marital Status</th>
                                <td>{{ Auth::user()->marital_status}}</td>
                            </tr>
                            <tr>
                                <th scope="col">Religion</th>
                                <td>{{ Auth::user()->religion}}</td>
                            </tr>
                            <tr>
                                <th scope="col">NID No</th>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>



