@if(session('message'))
<div class="alert alert-{{ session('type') ?? 'info' }} pl-4">{{ session('message')}}</div>
@endif