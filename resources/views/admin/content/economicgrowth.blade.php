@extends('admin.index')

@section('content')

<div class="title">
    <h4>Economic Growth</h4>
</div>

<div class="content-wrapper">
    <div class="row same-height">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Growth</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="colFormLabel" placeholder="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">GDPn</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="colFormLabel" placeholder="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">GDPn-1</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="colFormLabel" placeholder="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="container">
                            <button class="btn btn-primary">
                                Backpropagation Neural Network
                            </button>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Growth in Year n</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="colFormLabel" placeholder="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection