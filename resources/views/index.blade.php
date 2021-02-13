@extends('layouts.main')

@section('title', 'Mywedding')

@section('container')

<nav>
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="cover-tab" data-bs-toggle="tab" data-bs-target="#cover" type="button" role="tab" aria-controls="cover" aria-selected="true">Cover</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="couple-tab" data-bs-toggle="tab" data-bs-target="#couple" type="button" role="tab" aria-controls="couple" aria-selected="false">Couple</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="event-tab" data-bs-toggle="tab" data-bs-target="#event" type="button" role="tab" aria-controls="event" aria-selected="false">Event</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="moment-tab" data-bs-toggle="tab" data-bs-target="#moment" type="button" role="tab" aria-controls="moment" aria-selected="false">Moment</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="quote-tab" data-bs-toggle="tab" data-bs-target="#quote" type="button" role="tab" aria-controls="quote" aria-selected="false">Quote</button>
    </li>
  </ul>
</nav>

<div class="tab-content">
  @include('contents.cover')
  @include('contents.couple')
  @include('contents.event')
  @include('contents.moment')
  @include('contents.quote')
</div>

<script>
  var triggerTabList = [].slice.call(document.querySelectorAll('#myTab a'))
triggerTabList.forEach(function (triggerEl) {
  var tabTrigger = new bootstrap.Tab(triggerEl)

  triggerEl.addEventListener('click', function (event) {
    event.preventDefault()
    tabTrigger.show()
  })
})


</script>
   
@endsection