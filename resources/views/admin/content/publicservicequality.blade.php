@extends('admin.index')

@section('content')

<div class="title">
    <h4>Form Public Service Quality</h4>
</div>

<div class="content-wrapper">
    <div class="row same-height">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">People</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="colFormLabel" placeholder="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Counter</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="colFormLabel" placeholder="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Time</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="colFormLabel" placeholder="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="container">
                            <button class="btn btn-primary">
                                Discrete-event simulation
                            </button>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Number of Served Citizen</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="colFormLabel" placeholder="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
