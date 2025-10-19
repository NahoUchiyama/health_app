@extends('layouts.app')

@section('content')
<header class="navbar navbar-expand-lg bg-light px-4 py-2 shadow-sm">
  <div class="container-fluid d-flex justify-content-between align-items-center">
    <h1 class="h4 mb-0">Stay Healthy</h1>

    <div class="d-flex align-items-center gap-3">
        <a href="{{ route('profile') }}" class="text-blue-500 hover:underline"><span class="fw-bold">{{ Auth::user()->name }}</span></a>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-outline-danger btn-sm">ログアウト</button>
      </form>
    </div>
  </div>
</header>

<body>
    <div class="container">
    <div id='calendar'></div>
    </div>
@endsection

<!-- FullCalendar CSS -->
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">

<!-- FullCalendar JS -->
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>

<!-- 初期化スクリプト -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth'
  });
  calendar.render();
});
</script>
</body>
