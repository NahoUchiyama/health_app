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
    <h2 class="text-xl font-semibold mb-4">プロフィール編集</h2>
    <form method="POST" action="{{ route('profile.update') }}">
        @csrf

        <div class="space-y-4">
           <div>
                <label for="nickname" class="block text-gray-700">ニックネーム</label>
                <input type="text" name="nickname" id="nickname" value="{{ old('nickname', $user->nickname) }}"
                class="w-full border rounded px-3 py-2 mt-1">
            </div>

            <div>
                <label for="email" class="block text-gray-700">メールアドレス</label>
                <input type="text" name="email" id="email" value="{{ old('email', $user->email) }}"
                class="w-full border rounded px-3 py-2 mt-1">
            </div>

            <div>
                <label for="name" class="block text-gray-700">氏名</label>
                <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}"
                class="w-full border rounded px-3 py-2 mt-1">
            </div>

            <div>
                <label for="kana" class="block text-gray-700">フリガナ</label>
                <input type="text" name="kana" id="kana" value="{{ old('kana', $user->kana) }}"
                class="w-full border rounded px-3 py-2 mt-1">
            </div>

            <div>
                <label for="birthday" class="block text-gray-700">生年月日</label>
                <input type="text" name="birthday" id="birthday" value="{{ old('birthday', $user->birthday) }}"
                class="w-full border rounded px-3 py-2 mt-1">
            </div>

            <div>
                <label for="gender" class="block text-gray-700">性別</label>
                <div class="mt-2 space-x-4">
                    @foreach (['male' => '男性', 'female' => '女性', 'none' => '無回答'] as $value => $label)
                    <label>
                        <input type="radio" name="gender" value="{{ $value }}"
                            {{ old('gender', $user->gender) === $value ? 'checked' : '' }}>
                        {{ $label }}
                    </label>
                    @endforeach
                </div>
            </div>

            <div>
                <label for="height" class="block text-gray-700">身長</label>
                <input type="text" name="height" id="height" value="{{ old('height', $user->height) }}"
                class="w-full border rounded px-3 py-2 mt-1">
            </div>

            <div>
                <label for="weight" class="block text-gray-700">体重</label>
                <input type="text" name="weight" id="weight" value="{{ old('weight', $user->weight) }}"
                class="w-full border rounded px-3 py-2 mt-1">
            </div>

            <div>
                <label for="menstruation_use" class="block text-gray-700">生理記録</label>
                <div class="mt-2 space-x-4">
                    @foreach ([0 => '使わない', 1 => '使う'] as $value => $label)
                        <label class="inline-flex items-center">
                            <input type="radio" name="menstruation_use" value="{{ $value }}"
                                {{ old('menstruation_use', $user->menstruation_use) == $value ? 'checked' : '' }}
                                class="form-radio text-blue-500">
                            <span class="ml-2">{{ $label }}</span>
                        </label>
                    @endforeach
                </div>

            </div>
        </div>

        <div class="mt-6 text-right">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">更新する</button>
        </div>
    </div>

    </form>
</body>

@endsection