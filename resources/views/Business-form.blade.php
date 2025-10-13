@extends('layouts.app')

@section('title', 'Register Business')

@section('content')
<style>
    body {
        background-color:#f8f7f4; /* apna desired color */
    }
</style>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card p-4 shadow-sm">
                <h2 class="mb-4 text-center text-primary">Register Your Business</h2>

                <form method="POST" action="{{ route('business.store') }}" enctype="multipart/form-data">
                    @csrf

                   <input type="text" name="name" class="form-control mb-3" placeholder="Business Name *" required>
                   <input type="text" name="owner_name" class="form-control mb-3" placeholder="Owner Name *" required>
                    <input type="text" name="category" class="form-control mb-3" placeholder="Business Category *" required>
                    <textarea name="description" class="form-control mb-3" placeholder="Description"></textarea>
                    <input type="email" name="email" class="form-control mb-3" placeholder="Email *" required>
                    <input type="text" name="phone" class="form-control mb-3" placeholder="Phone *" required>
                    <input type="text" name="city" class="form-control mb-3" placeholder="City *" required>
                    <input type="text" name="state" class="form-control mb-3" placeholder="State *" required>
                    <input type="text" name="country" class="form-control mb-3" placeholder="Country *" required>
                    <input type="url" name="website" class="form-control mb-3" placeholder="Website">

                    <div class="mb-3">
                        <label>Business Logo * (max 100KB)</label>
                        <input type="file" name="logo" class="form-control" accept="image/*" required>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" name="is_active" value="1" class="form-check-input" id="isActive" required>
                        <label class="form-check-label" for="isActive">Activate Business *</label>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@include('partials.toast')
