@extends('layouts.app')

@section('content')
    @if(session("error"))
        <div class="alert alert-success">{{ session('error') }}</div>
    @endif
    <main class="m-5 d-flex justify-content-center">
        <div class="container overflow-hidden">
            <div class="row gx-5">
                <div class="col" onclick="location.href='{{ route('ads') }}';">
                    <div class="card rounded-5" style="height: 30.2rem">
                        <div class="card-header bg-pink">
                            <h1 class="m-0 text-center">Selection the location</h1>
                        </div>
                        <div class="card-body bg-card-body">
                            <blockquote class="blockquote mb-0">
                                <p class="text-indent">This menu will take you to the select a place for your ads.</p>
                                <ul class="ps-3">
                                    <li>This menu will take you to the select a place for your ads.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, libero!</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, libero!</li>
                                </ul>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col" onclick="location.href='{{ route('ads_status') }}';">
                    <div class="card" style="height: 30.2rem">
                        <div class="card-header bg-pink">
                            <h1 class="m-0 text-center">ads status</h1>
                        </div>
                        <div class="card-body bg-card-body">
                            <blockquote class="blockquote mb-0">
                                <p class="text-indent">Show your ad status that now the status of your ad has been checked yet.</p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
