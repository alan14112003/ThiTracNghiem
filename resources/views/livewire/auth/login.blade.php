<div class="container mt-5">
    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <form wire:submit.prevent="login" class="card shadow-sm p-4">
        <h2 class="mb-4 text-center">Đăng Nhập</h2>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" wire:model="email" placeholder="Nhập email của bạn">
            @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="password">Mật khẩu</label>
            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" wire:model="password" placeholder="Nhập mật khẩu của bạn">
            @error('password') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary btn-block mt-4">Đăng Nhập</button>

        <div class="text-center mt-3">
            <span>Chưa có tài khoản?</span> <a href="{{ route('register') }}">Đăng ký ngay</a>
        </div>
    </form>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</div>
