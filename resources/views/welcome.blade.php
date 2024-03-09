@extends('shared/index')

@section('content')
<div class="mb-3">
    <a href="#">
        <i class="fas fa-chevron-left"></i>
        <span class="ml-1">Go back</span>
    </a>
    <h5 class="font-weight-semibold">Module name</h5>
</div>

<!-- Modal -->
<div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-light shadow-sm">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="exampleModalLabel">Share link</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div>
                    <h6>HTTP</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque perspiciatis
                        quas nesciunt.</p>
                    <input type="text" class="form-control" value="http://hello.io">
                </div>
                <div class="my-4"></div>
                <div>
                    <h6>HTTPS</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque perspiciatis
                        quas nesciunt.</p>
                    <input type="text" class="form-control" value="https://hello.io">
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-link text-muted" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary font-weight-semibold">Share</button>
            </div>
        </div>
    </div>
</div>

<button type="button" class="btn btn-primary font-weight-semibold" data-toggle="modal" data-target="#exampleModal">
    Share link
</button>
@endsection