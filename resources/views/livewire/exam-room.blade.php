<!DOCTYPE html>
<html lang="en" style="height: 100vh; background: white ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body class="">
    <div>
        <div class="pt-5 container-fluid h-100 d-flex flex-column justify-content-center align-items-center bg-light" style="height: 100vh;">
            <!-- Phần nhập mã phòng thi -->
            <div class="text-center mb-5">
                <h1 class="display-4 mb-4">Tham gia phòng thi</h1>
                <div class="input-group mb-3" style="max-width: 500px;">
                    <input type="text" id="room_code" name="room_code" class="form-control" placeholder="Nhập mã phòng thi" value="{{ $examRoom->room_code }}" readonly>
                    <button class="btn btn-outline-secondary" type="button" onclick="copyToClipboard('#room_code')">Sao chép</button>
                </div>
                <div class="input-group mb-3" style="max-width: 500px;">
                    <input type="text" id="exam_link" class="form-control" value="{{ route('exam.room', $examRoom->room_code) }}" readonly>
                    <button class="btn btn-outline-secondary" type="button" onclick="copyToClipboard('#exam_link')">Sao chép</button>
                </div>
            </div>

            <!-- Phần bắt đầu và thời gian đếm ngược -->
            <div class="text-center mb-5">
                <h3 class="text-secondary">Thời gian bắt đầu: <span class="text-success">{{ $examRoom->start_time->format('H:i d/m/Y') }}</span></h3>
                <h2 id="countdown" class="text-danger display-4"></h2>
                <button id="start-button" class="btn btn-success btn-lg mt-3" wire:click="startExam">Bắt đầu</button>
            </div>

            <!-- Phần danh sách người tham gia -->
            <div class="text-center mb-5">
                <h3>Danh sách người tham gia:</h3>
                <div class="list-group" style="max-width: 500px; margin: auto;">
                    @foreach($participants as $participant)
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <span>{{ $participant->user->name }}</span>
                            <span class="badge bg-secondary">Đang chờ</span>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>

        <!-- Thêm JavaScript để xử lý sao chép -->
        <script>
            function copyToClipboard(selector) {
                const input = document.querySelector(selector);
                input.select();
                document.execCommand('copy');
                alert('Đã sao chép: ' + input.value);
            }

            // Đếm ngược đến thời gian bắt đầu phòng thi
            function startCountdown(startTime, duration) {
                const countdownElement = document.getElementById('countdown');
                const startButton = document.getElementById('start-button'); // Tham chiếu đến nút Bắt đầu
                const countDownDate = new Date(startTime).getTime();
                const endTime = countDownDate + duration * 60 * 1000; // Chuyển duration thành milliseconds

                const x = setInterval(function() {
                    const now = new Date().getTime();
                    const distance = countDownDate - now;

                    // Tính thời gian còn lại
                    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    countdownElement.innerHTML = hours + " giờ " + minutes + " phút " + seconds + " giây";

                    // Kiểm tra xem thời gian hiện tại có vượt qua thời gian kết thúc không
                    if (now > endTime) {
                        clearInterval(x);
                        countdownElement.innerHTML = "Thời gian thi đã hết!";
                        startButton.disabled = true; // Vô hiệu hóa nút Bắt đầu
                        return;
                    }

                    // Kiểm tra nếu khoảng thời gian còn lại nhỏ hơn 0
                    if (distance < 0) {
                        clearInterval(x);
                        countdownElement.innerHTML = "Thời gian thi đã bắt đầu!";
                    }
                }, 1000);
            }

            // Khởi động đếm ngược
            window.onload = function() {
                const startTime = '{{ $examRoom->start_time }}';
                const duration = {{ $examRoom->duration }}; // Lấy duration từ phòng thi
                startCountdown(startTime, duration);
            }
        </script>



        <style>
            body {
                background-color: #f0f2f5; /* Màu nền sáng */
            }

            .input-group {
                border-radius: 0.5rem; /* Bo tròn góc cho input */
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Đổ bóng cho input */
            }

            .list-group {
                background-color: #fff; /* Nền trắng cho danh sách người tham gia */
                border-radius: 0.5rem; /* Bo tròn góc cho danh sách */
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Đổ bóng cho danh sách */
            }

            .list-group-item {
                border: none; /* Không có viền cho từng mục trong danh sách */
                transition: background-color 0.3s; /* Hiệu ứng chuyển màu nền */
            }

            .list-group-item:hover {
                background-color: #e9ecef; /* Đổi màu nền khi hover */
            }

            h1, h3 {
                font-family: 'Arial', sans-serif; /* Font chữ đẹp */
                text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); /* Đổ bóng cho tiêu đề */
            }

            .btn {
                transition: background-color 0.3s, color 0.3s; /* Hiệu ứng chuyển màu cho nút */
            }

            .btn-success {
                background-color: #28a745; /* Màu xanh lá cho nút bắt đầu */
            }

            .btn-success:hover {
                background-color: #218838; /* Tối màu hơn khi hover */
                color: white; /* Đổi màu chữ khi hover */
            }

            .display-4 {
                font-size: 3rem; /* Kích thước lớn cho đếm ngược */
            }
        </style>


    </div>

</body>
</html>
