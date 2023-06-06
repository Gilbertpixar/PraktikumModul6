<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>

<body>
@extends('layouts.app')

@section('content')
    <div class="container-sm my-5">
        <form action="{{ route('employees.update', ['employee' => $employee->id]) }}" method="POST">
            @csrf
            @method('put')
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">

                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible fade show" style="display: none;">
                                {{ $error }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endforeach
                    @endif

                    <div class="mb-3 text-center">
                        <i class="bi-person-circle fs-1"></i>
                        <h4>Edit Item</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nameItem" class="form-label">Name</label>
                            <input class="form-control @error('nameItem') is-invalid @enderror" type="text"
                                name="nameItem" id="nameItem" value="{{ $employee->nameitem }}">
                            @error('nameItem')
                                <div class="alert-danger text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="priceItem" class="form-label">Price</label>
                            <input class="form-control @error('priceItem') is-invalid @enderror" type="text"
                                name="priceItem" id="priceItem" value="{{ $employee->priceitem }}">
                            @error('priceItem')
                                <div class="alert-danger text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="descriptionItem" class="form-label">Description Item</label>
                            <input class="form-control @error('descriptionItem') is-invalid @enderror" type="text"
                                name="descriptionItem" id="descriptionItem" value="{{ $employee->descriptionitem }}">
                            @error('descriptionItem')
                                <div class="alert-danger text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="amount" class="form-label">Amount</label>
                            <input class="form-control @error('amount') is-invalid @enderror" type="text" name="amount"
                                id="amount" value="{{ $employee->amount }}">
                            @error('amount')
                                <div class="alert-danger text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="position" class="form-label">Position</label>
                            <select name="position" id="position" class="form-select">
                                @foreach ($positions as $position)
                                    <option value="{{ $position->id }}" {{ $employee->position_id == $position->id ? 'selected' : '' }}>{{ $position->code.' - '.$position->name }}</option>
                                @endforeach
                            </select>
                            @error('position')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('employees.index') }}" class="btn btn-outline-secondary btn-lg mt-3"><i
                                    class="bi-arrow-left-circle me-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-secondary btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                                Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

    @vite('resources/js/app.js')
</body>

</html>
