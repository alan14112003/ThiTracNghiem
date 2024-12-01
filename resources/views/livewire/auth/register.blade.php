<div class="container mt-5">
    <form wire:submit.prevent="register" class="card shadow-sm p-4">
        <h2 class="mb-4 text-center">Đăng Ký</h2>

        <div class="form-group">
            <label for="name">Tên</label>
            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" wire:model="name" placeholder="Nhập tên của bạn">
            @error('name') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>

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

        <div class="form-group">
            <label for="password_confirmation">Xác nhận mật khẩu</label>
            <input type="password" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" wire:model="password_confirmation" placeholder="Xác nhận mật khẩu của bạn">
            @error('password_confirmation') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="class_id">Lớp học</label>
            <select id="class_id" class="form-control @error('class_id') is-invalid @enderror" wire:model="class_id">
                <option value="">-- Chọn lớp học --</option>
                @foreach($classrooms as $classroom)
                    <option value="{{ $classroom->id }}">{{ $classroom->name }}</option>
                @endforeach
            </select>
            @error('class_id') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary btn-block mt-4">Đăng Ký</button>

        <div class="text-center mt-3">
            <span>Đã có tài khoản?</span> <a href="{{ route('login') }}">Đăng nhập ngay</a>
        </div>
    </form>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</div>
