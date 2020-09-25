@extends('front-end.master')
@section('main-body')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 ">
            @foreach($jobs as $job)
            <div class="post-preview">
                <a href="">
                    <h2 class="post-title">
                        {{ $job->job_title }}
                    </h2>
                    <h3 class="post-subtitle">
                        {{ $job->company_name }}
                    </h3>
                </a>
                <p class="post-meta">
                    {{ $job->job_responsibilities }}
                </p>
                <p class="post-meta">
                    {{ $job->employee_status }}
                </p>
                <p class="post-meta">
                    {{ $job->educational_requirement }}
                </p>
                <p class="post-meta">
                    {{ $job->experience_requirement }}
                </p>
                <p class="post-meta">
                    {{ $job->additional_requirement }}
                </p>
                <p class="post-meta">
                    {{ $job->job_location }}
                </p>
                <p class="post-meta">
                    {{ $job->salary }}
                </p>
                <p class="post-meta">
                    {{ $job->category_id }}
                </p>
                <hr>
                @endforeach
            </div>
        </div>

</body>
</html>
@endsection
