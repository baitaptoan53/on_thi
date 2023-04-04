<form method="POST" action="{{ route('login') }}">
    @csrf

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus>
    </div>

    <div>
        <label for="password">Mật khẩu</label>
        <input type="password" name="password" id="password" required>
    </div>

    <div>
        <button type="submit">Đăng nhập</button>
    </div>

    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
</form>