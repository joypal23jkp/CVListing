@extends('front-end.master')

@section('main-body')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                @if($jobs_list != null )
{{--                    {{ \Illuminate\Support\Facades\Auth::guard('admin')->user() }}--}}
                    @foreach($jobs_list as $jobs)
                        <div class="post-preview">
                            <a href="post.html">
                                <h2 class="post-title">
                                    {{ $jobs->job_title }}
                                </h2>
                                <h3 class="post-subtitle">
                                    {{$jobs->company_name}}
                                </h3>
                            </a>
                            <p class="post-preview">
                                {{ $jobs->job_responsibilities }}
                            </p>
                            <p class="post-preview">
                                {{ $jobs->employee_status }}
                            </p>
                            <p class="post-preview">
                                {{ $jobs->educational_requirement }}
                            </p>
                            <p class="post-preview">
                                {{ $jobs->experience_requirement }}
                            </p>
                            <p class="post-preview">
                                {{ $jobs->additional_requirement }}
                            </p>
                            <p class="post-preview">
                                {{ $jobs->job_location }}
                            </p>
                            <p class="post-preview">
                                {{ $jobs->salary }}
                            </p>
                            <p class="post-preview">
                                {{ $jobs->category_id }}
                            </p>
                            <a type="button" class="btn btn-primary btn-sm text-white" href="{{ route('apply.job', ['id' => $jobs->id ]) }}">Apply</a>
                        </div>
                        <hr>
                    @endforeach
                    <h5 class="text-secondary">No Available Jobs!</h5>
                @endif
                <!-- Pager -->
            </div>
        </div>
    </div>
    @endsection
