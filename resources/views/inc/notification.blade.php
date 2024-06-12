@if(session()->has('message'))
<div class="alert alert-primary alert-sm p-1 rounded-0 text-uppercase    fw-bold fs-6 w-100 ">
  {{ session()->get('message') }}
</div>
@endif
