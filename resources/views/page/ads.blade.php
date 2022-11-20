@extends('layouts.app')

@section('content')
    <main class="m-5">

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            </div>
        @endif

        <form action="{{route('ads_create')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row gx-4">
                <div class="col-8">
                    <div class="p-3 bg-light rounded">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d45759.65978840073!2d102.14204150841176!3d14.965420042913816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31194e91954e7791%3A0x98752ad18d152221!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4LmA4LiX4LiE4LmC4LiZ4LmC4Lil4Lii4Li14Lij4Liy4LiK4Lih4LiH4LiE4Lil4Lit4Li14Liq4Liy4LiZIOC4qOC4ueC4meC4ouC5jOC4geC4suC4o-C4qOC4tuC4geC4qeC4suC4q-C4meC4reC4h-C4o-C4sOC5gOC4p-C4teC4ouC4hw!5e0!3m2!1sth!2sth!4v1668799328335!5m2!1sth!2sth"
                            width="100%"
                            height="400"
                            style="border: 0"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                        ></iframe>
                    </div>
                </div>
                <div class="col-4">
                    <div class="p-4 bg-cyan rounded">
                        <h3 class="text-center mb-4">Select the location</h3>

                        <div class="mb-4 row" id="TextLocation">
                        </div>

                        <div class="mb-4 d-flex justify-content-center align-items-center">
                            <button type="button" id="plus" class="btn mb-0 fs-1">
                                <img src="{{ asset('assets/images/plus.svg') }}" alt="plus" class="rounded-circle bg-gray-300" width="65px" onclick="AddTextBox();" />
                            </button>
                        </div>
                        <div class="d-flex justify-content-center align-items-center">
                            <button type="button" id="save" onclick="saveDisbled()" class="btn btn-success shadow mb-0 fs-3 fw-bold rounded-pill px-4 text-center">
                                save
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-4 px-5 mt-5 rounded" style="margin-bottom: 8rem; background: #efece6">
                <div class="mb-4">
                    <label for="file" class="form-label d-flex align-items-center"
                    ><img src="{{ asset('assets/images/file.png') }}" alt="file" width="55px" />
                        <h3 class="my-0 mx-3">File</h3>
                    </label>
                    <input
                        type="file"
                        id="file"
                        name="file"
                        class="form-control form-control-lg rounded-pill"
                        placeholder="You can drag and drop your file here"
                        aria-describedby="addon-wrapping"
                    />
                </div>
                <div class="mb-5">
                    <label for="ads_type" class="form-label">
                        <h3 class="my-0">Ads type</h3>
                    </label>

                    <select name="ads_type" id="ads_type" class="form-select form-select-lg rounded-pill">
                        <option value="">-- Select Category --</option>
                        @foreach($adsType as $adsItem)
                            <option value="{{ $adsItem->name }}">{{ $adsItem->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="d-flex justify-content-center align-items-center">
                    <button type="button" id="submit" onclick="submitDisbled()" class="btn bg-orange-500 shadow mb-0 fs-3 fw-bold rounded-pill px-5 text-center">
                        submit
                    </button>
                </div>
            </div>
            <div>
                <div class="row row-cols-4 border border-warning border-0 bg-card-body rounded">
                    <div class="col border border-warning border-2 text-center p-5" style="border-top-left-radius: 1.6rem">
                        <h4 class="m-0">Price</h4>
                    </div>
                    <div class="col border border-warning border-2 text-center p-5 position-relative">
                        <div
                            class="position-absolute bottom-100 start-50 translate-middle-x px-5 py-2"
                            style="background: #f5d788; border-top-left-radius: 1.6rem; border-top-right-radius: 1.6rem"
                        >
                            <h1>Day</h1>
                        </div>
                        <h3>3$</h3>
                    </div>
                    <div class="col border border-warning border-2 text-center p-5 position-relative">
                        <div
                            class="position-absolute bottom-100 start-50 translate-middle-x px-5 py-2"
                            style="background: #f6cd64; border-top-left-radius: 1.6rem; border-top-right-radius: 1.6rem"
                        >
                            <h1>Week</h1>
                        </div>
                        <h3>16$</h3>
                    </div>
                    <div
                        class="col border border-warning border-2 text-center p-5 position-relative"
                        style="border-top-right-radius: 1.6rem"
                    >
                        <div
                            class="position-absolute bottom-100 start-50 translate-middle-x px-5 py-2"
                            style="background: #f4b921; border-top-left-radius: 1.6rem; border-top-right-radius: 1.6rem"
                        >
                            <h1>Mount</h1>
                        </div>
                        <h3>27$</h3>
                    </div>

                    <div class="col border border-warning border-2 text-center p-5"><h4>Duration</h4></div>
                    <div class="col border border-warning border-2 text-center p-5"><h3>1 Day</h3></div>
                    <div class="col border border-warning border-2 text-center p-5"><h3>1 Week</h3></div>
                    <div class="col border border-warning border-2 text-center p-5"><h3>1 Month</h3></div>

                    <div class="col border border-warning border-2 text-center p-5" style="border-bottom-left-radius: 1.6rem">
                        <h4>Service and content curation</h4>
                    </div>
                    <div class="col border border-warning border-2 text-center p-5 d-flex flex-column">
                        <div class="mb-5">
                            <img src="{{ asset('assets/images/x.svg') }}" alt="x" class="rounded-circle bg-danger p-2" width="90px" />
                        </div>
                        <button type="submit" class="btn bg-pink rounded-pill shadow fs-3 px-0 py-2 fw-bold">selection</button>
                    </div>
                    <div class="col border border-warning border-2 text-center p-5 d-flex flex-column">
                        <div class="mb-5">
                            <img src="{{ asset('assets/images/x.svg') }}" alt="x" class="rounded-circle bg-danger p-2" width="90px" />
                        </div>
                        <button type="submit" class="btn bg-pink rounded-pill shadow fs-3 px-0 py-2 fw-bold">selection</button>
                    </div>
                    <div
                        class="col border border-warning border-2 text-center p-5 d-flex flex-column"
                        style="border-bottom-right-radius: 1.6rem"
                    >
                        <div class="mb-5">
                            <img src="{{ asset('assets/images/check.svg') }}" alt="check" class="rounded-circle bg-success p-2" width="90px" />
                        </div>
                        <button type="submit" class="btn bg-pink rounded-pill shadow fs-3 px-0 py-2 fw-bold">selection</button>
                    </div>
                </div>
            </div>
        </form>
    </main>
@endsection
