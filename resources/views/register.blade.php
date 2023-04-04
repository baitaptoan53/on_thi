<form method="POST" action="{{ route('register') }}">
    @csrf

    <div>
        <label for="name">Họ và tên</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required autofocus>
    </div>

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required>
    </div>

    <div>
        <label for="password">Mật khẩu</label>
        <input type="password" name="password" id="password" required>
    </div>

    <div>
        <label for="password_confirmation">Xác nhận mật khẩu</label>
        <input type="password" name="password_confirmation" id="password_confirmation" required>
    </div>

    <div>
        <button type="submit">Đăng ký</button>
    </div>

    @if ($errors->any())
    <div>
        @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
    </div>
    @endif
</form>