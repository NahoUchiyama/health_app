@extends('layouts.app')

@section('content')
<header class="navbar navbar-expand-lg bg-light px-4 py-2 shadow-sm">
  <div class="container-fluid d-flex justify-content-between align-items-center">
    <h1 class="h4 mb-0">Stay Healthy</h1>

    <div class="d-flex align-items-center gap-3">
      <span class="fw-bold">{{ Auth::user()->name }}</span>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-outline-danger btn-sm">ログアウト</button>
      </form>
    </div>
  </div>
</header>

<body>
    <div class="max-w-xl mx-auto mt-10 p-6 bg-white rounded shadow">
    <h2 class="text-xl font-semibold mb-4">マイページ</h2>

    <div class="space-y-4">
        <div>
            <label class="text-gray-600">ニックネーム</label>
            <p class="text-lg">{{ $user->nickname }}</p>
        </div>

        <div>
            <label class="text-gray-600">メールアドレス</label>
            <p>{{ $user->email }}</p>
        </div>

        <div>
            <label class="text-gray-600">氏名</label>
            <p>{{ $user->name }}</p>
        </div>

        <div>
            <label class="text-gray-600">フリガナ</label>
            <p>{{ $user->kana }}</p>
        </div>

        <div>
            <label class="text-gray-600">生年月日</label>
            <p>{{ $user->birthday }}</p>
        </div>

        <div>
            <label class="text-gray-600">性別</label>
            <p>{{ $user->gender }}</p>
        </div>

        <div>
            <label class="text-gray-600">身長</label>
            <p>{{ $user->height }}</p>
        </div>

        <div>
            <label class="text-gray-600">体重</label>
            <p>{{ $user->weight }}</p>
        </div>

        <div>
            <label class="text-gray-600">生理記録</label>
            <p>{{ $user->menstruation_use }}</p>
        </div>
    </div>

    <div class="mt-6 text-right">
        <a href="{{ route('profile.edit') }}" class="text-blue-500 hover:underline">編集する</a>
    </div>
</div>
</body>

@endsection