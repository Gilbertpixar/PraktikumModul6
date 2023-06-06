@extends("layouts.app")
@section("content")

    <div class="container-sm my-2">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-4 border">
                <div class="mb-3 text-center">
                    <i class="bi-person-circle fs-1"></i>
                    <h4>Detail Item</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="nameItem" class="form-label">Name</label>
                        <h5>{{ $employee->nameitem }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="priceItem" class="form-label">Price</label>
                        <h5>{{ $employee->priceitem }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="descriptionItem" class="form-label">Description</label>
                        <h5>{{ $employee->descriptionitem }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="amount" class="form-label">Amount</label>
                        <h5>{{ $employee->amount }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="amount" class="form-label">Name Unit</label>
                        <h5>{{ $employee->position->name }}</h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 d-grid">
                        <a href="{{ route('employees.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
