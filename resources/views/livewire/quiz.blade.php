<div>
    <div>
        <div>
            <!DOCTYPE html>

            <html lang="vi">

            <head>
                <meta charset="UTF-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
                <meta property="og:locale" content="vi_VN" />
                <meta http-equiv="content-language" content="vi" />
                <meta name="csrf-token" content="KQXwuq6RS65vwLtwDJsZ4NwQH4zkjqH4SXsA7zAK">
                <title>{{ $quiz->title }} </title>
                <meta name="robots" content="index, follow" />
                <meta name="description"
                    content="Hệ thống sẽ giúp bạn xác định chính xác kiến thức bị hổng để tập trung đào sâu, từ cơ bản đến nâng cao, có hướng dẫn giải chi tiết bao gồm tất các môn Toán, Ngữ văn, Tiếng anh, Vật lý, Hóa học, Sinh học, Lịch sử, Địa lý, Giáo dục công dân..." />
                <meta name="keywords"
                    content="đề thi thử, thư viện đề thi, ngân hàng câu hỏi, bài kiểm tra, thi trắc nghiệm miễn phí, Toán, Lý, Hóa, Sinh, Tiếng Anh, Sử, Địa, GDCD" />
                <link rel="icon" href="https://vietjack.online/images/favicon.ico" />
                <link rel="canonical"
                    href="https://vietjack.online/luyen-thi/de-28287/15-cau-trac-nghiem-este-co-dap-an"
                    reflang="vi-vn" />
                <meta property="og:title" content="{{ $quiz->title }}" />
                <meta property="og:type" content="website" />
                <meta property="og:url"
                    content="https://vietjack.online/luyen-thi/de-28287/15-cau-trac-nghiem-este-co-dap-an" />
                <meta property="og:image" content="https://vietjack.online/images/banner_default.jpg" />
                <meta property="og:description"
                    content="Hệ thống sẽ giúp bạn xác định chính xác kiến thức bị hổng để tập trung đào sâu, từ cơ bản đến nâng cao, có hướng dẫn giải chi tiết bao gồm tất các môn Toán, Ngữ văn, Tiếng anh, Vật lý, Hóa học, Sinh học, Lịch sử, Địa lý, Giáo dục công dân..." />
                <meta property="og:site_name"
                    content="Trang web thi online miễn phí nhiều người truy cập nhất Việt Nam" />
                <meta property="fb:app_id" content="142520407857771" />
                <!-- Styles -->
                <link rel="stylesheet" href="/css/web/main.css?id=014545b0b485faa7481c" type="text/css">
                <link rel="stylesheet" href="https://vietjack.online/libs/select2/dist/css/select2.min.css" />
                <link rel="stylesheet" href="/css/web/exam.css?id=edaca8563aedebc58e19" type="text/css">
                <link rel="stylesheet" href="/css/web/start-exam.css?id=b721c75e7705f3393284" type="text/css">
                <!-- Global site tag (gtag.js) - Google Analytics -->
                <script async src="https://www.googletagmanager.com/gtag/js?id=UA-65991607-4"></script>
                <script>
                    window.dataLayer = window.dataLayer || [];

                    function gtag() {
                        dataLayer.push(arguments);
                    }
                    gtag('js', new Date());
                    gtag('config', 'UA-65991607-4');

                    window.fbAsyncInit = function() {
                        FB.init({
                            appId: '142520407857771',
                            autoLogAppEvents: true,
                            xfbml: true,
                            version: 'v6.0'
                        });
                    };
                </script>
                <script async defer src="https://connect.facebook.net/vi_VN/sdk.js"></script>
                <style>
                    /* Định dạng chung cho khung trạng thái */
                    .status-container {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        margin-top: 10px;
                        /* Khoảng cách từ trên xuống */
                    }

                    .status {
                        font-size: 16px;
                        font-weight: bold;
                        padding: 8px 16px;
                        border-radius: 8px;
                        text-align: center;
                        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                        transition: background-color 0.3s ease, color 0.3s ease;
                    }

                    /* Trạng thái bình thường */
                    .status.normal {
                        background-color: #28a745;
                        /* Xanh lá cây */
                        color: #ffffff;
                    }

                    /* Trạng thái cảnh báo */
                    .status.warning {
                        background-color: #dc3545;
                        /* Đỏ */
                        color: #ffffff;
                    }
                </style>
            </head>

            <body>
                <div id="fb-root"></div>

                <main id="app">
                    <div class="wrapper">
                        <!-- Sidebar  -->
                        <nav id="sidebar-wrapper">
                            <div class="sidebar-header">
                                <h3 class="f1-m-1 text-uppercase">
                                    Danh sách đề thi
                                </h3>
                            </div>

                            <ul class="list-unstyled components">
                                <li class="active">
                                    <a class="leave-site"
                                        href="https://vietjack.online/luyen-thi/de-28287/15-cau-trac-nghiem-este-co-dap-an">{{ $quiz->title }}</a>
                                </li>
                            </ul>

                            <ul class="list-unstyled action-more">
                                <li>
                                    <a href="#" wire:click="checkAnswers" class=" "><i
                                            class="fas fa-home"></i></a>
                                </li>
                                <li>
                                    <a href="#" wire:click="checkAnswers" class="article  ">Back</a>
                                </li>
                            </ul>
                        </nav>

                        <!-- Page Content  -->
                        <div id="content"
                            style="
                        background-image: url({{ asset('images/quiz_background.jpg') }});
                        background-repeat: no-repeat;
                            background-attachment: fixed;
                        background-size: cover;
                    ">

                            <nav class="navbar navbar-fixed fixed-top" style="padding: 0;">
                                <div
                                    style="width: 100%; display: flex; padding: 7px 10px; background-image: linear-gradient(90deg, #ff9700, #ed7237, #ff950c); color: #fff; align-items: center;">
                                    <div class=""
                                        style="display: flex; justify-content: space-between; width: 100%; align-items: center;">
                                        <button type="button" id="sidebarCollapse" class="btn btn-link text-white">
                                            <i class="fas fa-align-left"></i>
                                        </button>
                                        <span class="timer-clock"><i class="far fa-clock"></i>

                                            <span id="timer1">00:00:00</span>

                                            <script>
                                                // Nhận thời gian còn lại từ PHP (trong giây)
                                                var remainingTime = {{ $remainingTime }};

                                                function startTimer(duration, display) {
                                                    var timer = duration,
                                                        hours, minutes, seconds;
                                                    setInterval(function() {
                                                        if (timer < 0) {
                                                            display.textContent = "Time's up!";
                                                            // Gọi hàm submit bài thi khi hết giờ (nếu cần)
                                                            @this.submitQuiz();
                                                            return;
                                                        }

                                                        hours = Math.floor(timer / 3600);
                                                        minutes = Math.floor((timer % 3600) / 60);
                                                        seconds = Math.floor(timer % 60);

                                                        hours = hours < 10 ? "0" + hours : hours;
                                                        minutes = minutes < 10 ? "0" + minutes : minutes;
                                                        seconds = seconds < 10 ? "0" + seconds : seconds;

                                                        display.textContent = hours + ":" + minutes + ":" + seconds;

                                                        timer--;
                                                    }, 1000);
                                                }

                                                window.onload = function() {
                                                    var display = document.querySelector('#timer1');
                                                    startTimer(remainingTime, display);
                                                };
                                            </script>




                                        </span>
                                        <a class="submit-test" id="submit" wire:click="checkAnswers">
                                            <i class="far fa-paper-plane"></i>
                                            <span>NỘP BÀI</span>
                                        </a>

                                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                                        <a class=" " wire:click="checkAnswers" href="#">
                                            <i class="fa fa-sign-out-alt"></i>
                                            <span>Thoát</span>
                                        </a>

                                    </div>
                                </div>
                                <div class="scroll-slider scroll-off">
                                    <span class="scroll-overlay"><i class="fas fa-caret-left float-left"></i></span>
                                    <span class="scroll-overlay"><i class="fas fa-caret-right float-right"></i></span>
                                    <div class="scroll-on">
                                        <ul>
                                            @foreach ($questions as $index => $question)
                                                <li class="number-question" number-question="{{ $index + 1 }}"
                                                    question-id="{{ $question->id }}"
                                                    total-number="{{ count($questions) }}">
                                                    {{ $index + 1 }}
                                                </li>
                                            @endforeach
                                        </ul>

                                    </div>
                                </div>
                            </nav>

                            <div class="quiz-wrapper bg-white rounded" id="quiz-wrapper"></div>

                            <nav class="navbar navbar-fixed fixed-bottom" style="background: none">
                                <button type="button" class="btn btn-danger mx-auto" id="previous-question">Câu
                                    trước</button>
                                <div class="status-container">
                                    <span  class="status normal">
                                        <span id="statusMessage">Trạng thái: Bình thường</span>
                                        <span>(số lần vi phạm: <span id="count-violate">0</span>)</span>
                                    </span>

                                </div>
                                {{-- <button type="button" class="btn btn-primary mx-auto d-none" id="submit-question" data-action="https://vietjack.online/test/1807157/send-answer">Trả lời</button> --}}
                                <button type="button" class="btn btn-info mx-auto" id="next-question1">Câu tiếp
                                    theo</button>
                            </nav>
                            <script>
                                // Giả định rằng bạn có một biến JS chứa số câu hỏi
                                let currentQuestionIndex = 1; // Bắt đầu từ câu hỏi đầu tiên
                                const totalQuestions = {{ $questions->count() }}; // Tổng số câu hỏi

                                document.getElementById('next-question1').addEventListener('click', function() {
                                    // Kiểm tra nếu câu hỏi hiện tại đã là câu cuối
                                    if (currentQuestionIndex < totalQuestions) {
                                        currentQuestionIndex++;
                                        // Chuyển đến câu hỏi tiếp theo bằng cách cập nhật URL
                                        window.location.href = `http://localhost:8000/quiz/${$quizId}#cau_${currentQuestionIndex}`;
                                    } else {
                                        // Gọi phương thức Livewire nếu đã đến câu cuối
                                        document.getElementById('submit').click(); // Giả định bạn có id="submit"
                                    }
                                });
                            </script>

                            <ul id="question-numbers"></ul>


                            <div class="content-body">
                                <div class="quiz-wrapper   rounded">
                                    @foreach ($questions as $index => $question)
                                        <div class="quiz quiz-content rounded d-none"
                                            quiz-index="{{ $index + 1 }}" quiz-id="{{ $question->id }}"
                                            style="">
                                            <input value="{{ $question->id }}" class="d-none" name="question_id" />
                                            <div style="border-radius: 5px; box-shadow: 4px 4px 1rem #00000099 !important;"
                                                class="question-title bg-white p-2">
                                                <p class="text-label bg-white ">Câu {{ $index + 1 }}</p>
                                                <p class="p-2">{!! $question->question_text !!}</p>
                                            </div>

                                            <div class="options py-3">
                                                @if ($question->type === 'value')
                                                    <!-- Hiển thị input text nếu type là "value" -->
                                                    <div class="rounded option m-b-10 bg-white"
                                                        style="box-shadow: 4px 4px 1rem #00000099;">
                                                        <input type="text" name="answer_text_{{ $question->id }}"
                                                            wire:model="answers.{{ $question->id }}"
                                                            class="form-control value_answer"
                                                            placeholder="Nhập câu trả lời của bạn" />
                                                        <style>
                                                            .quiz-wrapper .option>.value_answer {
                                                                opacity: 1 !important;
                                                            }
                                                        </style>
                                                    </div>
                                                @else
                                                    <!-- Hiển thị options nếu type khác "value" -->
                                                    @foreach ($question->options as $key => $option)
                                                        <div class="rounded option m-b-10 bg-white"
                                                            style="box-shadow: 4px 4px 1rem #00000099;">

                                                            <input class="answer" id="answer_{{ $option->id }}"
                                                                type="radio" name="answer_id_{{ $question->id }}"
                                                                value="{{ $option->id }}"
                                                                wire:model="answers.{{ $question->id }}" />
                                                            <label for="answer_{{ $option->id }}">
                                                                <p><strong>{{ chr(65 + $key) }}.</strong>
                                                                    {{ $option->option_text }}</p>
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>



                                            <div class="reason js-reason-{{ $question->id }}">
                                                <!-- Khu vực giải thích, nếu cần -->
                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>
                </main>



                <script src="/js/web/main.js?id=a06dc5efa42755d0b912" type="text/javascript"></script>
                <script src="https://vietjack.online/libs/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
                <script src="/js/web/exam.js?id=c6a68b18c5acf2888818" type="text/javascript"></script>
                <script type="text/x-mathjax-config">
                MathJax.Hub.Config({
                    showProcessingMessages: true,
                    messageStyle: "none",
                    showMathMenu: false,
                    tex2jax: {
                      inlineMath: [ ['$','$'], ["\\(","\\)"], ["\\[","\\]"] ],
                      displayMath: [ ['$$','$$'] ],
                      processEscapes: true
                    },
                    "HTML-CSS": {
                        scale: 350
                    }
                });
            </script>
                <script async src="https://vietjack.online/libs/MathJax-2.7.5/MathJax.js?config=TeX-MML-AM_CHTML"></script>
                <script></script>
                <script src="/js/web/start-exam.js?id=d7586e328691661b5570" type="text/javascript"></script>

                <div>
                    <!-- Button to trigger checkAnswers (example button) -->
                    <button wire:click="checkAnswers" class="btn btn-primary">Submit Quiz</button>

                    <!-- Custom Modal -->
                    @if ($showModal)
                        <div class="custom-modal" wire:class="fade {{ $showModal ? 'show' : '' }}"
                            style="{{ $showModal ? 'display: block;' : 'display: none;' }}">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Xác nhận</h5>
                                        <button type="button" class="close" wire:click="closeModal"
                                            aria-label="Đóng">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        @if (count($unansweredQuestions) > 0)
                                            <p>Bạn chưa trả lời các câu hỏi sau:</p>
                                            <ul>
                                                @foreach ($unansweredQuestions as $questionId)
                                                    <li>Câu hỏi {{ $questionId }}</li>
                                                @endforeach
                                            </ul>
                                            <p>Bạn vẫn muốn nộp bài chứ?</p>
                                        @else
                                            <p>Tất cả các câu hỏi đã được trả lời. Bạn có chắc chắn muốn nộp bài không?
                                            </p>
                                        @endif
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            wire:click="closeModal">Hủy</button>
                                        <button type="button" class="btn btn-primary" wire:click="submitQuiz">Xác
                                            nhận</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <style>
                            figcaption {
                                display: none !important;
                            }

                            .custom-modal {
                                position: fixed;
                                top: 0;
                                left: 0;
                                width: 100%;
                                height: 100%;
                                background-color: rgba(0, 0, 0, 0.5);
                                /* Nền mờ cho modal */
                                z-index: 1050;
                                /* Đặt z-index cao hơn để nằm trên các phần tử khác */
                                display: flex;
                                justify-content: center;
                                align-items: center;
                            }

                            .modal-dialog {
                                max-width: 500px;
                                /* Chiều rộng tối đa của modal */
                                width: 90%;
                                /* Độ rộng của modal */
                            }

                            .modal-content {
                                background-color: #fff;
                                /* Nền trắng cho nội dung modal */
                                border-radius: 8px;
                                /* Bo tròn các góc */
                                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                                /* Đổ bóng cho modal */
                            }

                            .modal-header {
                                border-bottom: 1px solid #dee2e6;
                                /* Đường kẻ dưới header */
                            }

                            .modal-title {
                                margin: 0;
                                font-size: 1.25rem;
                                /* Kích thước chữ tiêu đề */
                            }

                            .close {
                                font-size: 1.5rem;
                                /* Kích thước chữ nút đóng */
                            }

                            .modal-body {
                                padding: 20px;
                                /* Khoảng cách bên trong modal */
                            }

                            .modal-footer {
                                display: flex;
                                justify-content: flex-end;
                                /* Căn chỉnh các nút ở phía bên phải */
                                padding: 15px;
                                /* Khoảng cách bên trong footer */
                            }

                            .btn-primary {
                                background: #ed7237;
                                /* Màu nền cho nút xác nhận */
                                border: none;
                                /* Không có đường viền */
                            }

                            .btn-primary:hover {
                                background: #d06633;
                                /* Màu nền khi hover */
                                transition: background 0.3s;
                                /* Hiệu ứng chuyển màu mượt mà */
                            }
                        </style>

                    @endif
                </div>

                <style>
                    /* Modal wrapper */
                    .custom-modal {
                        position: fixed;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        z-index: 1050;
                        /* Ensure it's above all other DOM elements */
                        background-color: rgba(0, 0, 0, 0.4);
                        /* Gray background with opacity */
                    }

                    /* Modal content */
                    .custom-modal .modal-dialog {
                        position: relative;
                        max-width: 500px;
                        width: 100%;
                        z-index: 1100;
                        /* Ensure content is above the gray background */
                    }

                    /* Modal overlay */
                    .custom-modal .modal-backdrop {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background-color: rgba(0, 0, 0, 0.4);
                        /* Gray background with opacity */
                        z-index: 1040;
                        /* Just below the modal dialog */
                    }
                </style>


            </body>

            <script src="https://cdn.socket.io/4.0.0/socket.io.min.js"></script>
            @script
            <script>
                (() => {
                    const ROOM_PARTICIPANT_ID = '{{ $userId }}'
                    const URL_AUDIO = '{{ asset('audios/khong_gian_lan.mp3') }}'
                    const audio = new Audio(URL_AUDIO);
                    const statusMessage = document.getElementById('statusMessage');
                    const countViolate = document.getElementById('count-violate');

                    const COUNT_VIOLATE = {
                        multiple_people: 0,
                        no_persion: 0,
                        count_violate: 0,
                    }

                    let mediaRecorder; // Để ghi video
                    let recordedChunks = []; // Lưu các phần của video

                    // Kết nối tới server Socket.IO
                    const socket = io('http://54.167.60.89:5555', {
                        transports: ['websocket']
                    });

                    // Tạo canvas và context
                    const canvas = document.createElement('canvas');

                    const ctx = canvas.getContext('2d');

                    // Hàm cập nhật trạng thái
                    function updateStatus(isWarning) {
                        if (isWarning) {
                            statusMessage.parentElement.className = 'status warning';
                            statusMessage.textContent = `Trạng thái: Cảnh báo`;
                            if (audio.paused) {
                                audio.play()
                            }
                        } else {
                            statusMessage.parentElement.className = 'status normal';
                            statusMessage.textContent = `Trạng thái: Bình thường`;
                        }
                        countViolate.textContent = COUNT_VIOLATE.count_violate
                    }

                    // Hàm lấy video từ camera
                    async function startCamera() {
                        try {
                            // Yêu cầu quyền truy cập camera
                            const stream = await navigator.mediaDevices.getUserMedia({
                                video: true,
                                audio: true,
                            });

                            // Lấy khung hình từ stream mà không dùng <video>
                            const videoTrack = stream.getVideoTracks()[0];
                            const imageCapture = new ImageCapture(videoTrack);

                            // Đặt kích thước canvas dựa trên độ phân giải video
                            const trackSettings = videoTrack.getSettings();
                            canvas.width = trackSettings.width || 640; // Mặc định là 640px nếu không có width
                            canvas.height = trackSettings.height || 480;


                            // Khởi tạo MediaRecorder để ghi video
                            const options = { mimeType: 'video/webm; codecs=vp8', videoBitsPerSecond: 2500000 };
                            mediaRecorder = new MediaRecorder(stream, options);

                            mediaRecorder.ondataavailable = (event) => {
                                if (event.data.size > 0) {
                                    recordedChunks.push(event.data); // Lưu các phần của video
                                }
                            };

                            mediaRecorder.onstop = async() => {
                                // Tạo blob từ các chunk đã ghi
                                const blob = new Blob(recordedChunks, { type: 'video/webm' });
                                const formData = new FormData();
                                formData.append('video', blob, 'video/webm');

                                const res = await fetch('/api/upload-video', {
                                    method: 'POST',
                                    body: formData,
                                })

                                const data = await res.json();
                                $wire.call('submitQuizSuccess', data.video_url, COUNT_VIOLATE.count_violate);
                            };

                            mediaRecorder.start(); // Bắt đầu ghi video
                            // Bắt đầu xử lý video
                            processVideo(imageCapture);
                        } catch (err) {
                            console.error('Lỗi khi truy cập camera:', err);
                        }
                    }

                    // Hàm xử lý video và gửi frame tới server
                    function processVideo(imageCapture) {
                        setInterval(async () => {
                            try {
                                // Lấy một khung hình từ camera
                                const bitmap = await imageCapture.grabFrame();

                                // Vẽ bitmap lên canvas
                                ctx.drawImage(bitmap, 0, 0, canvas.width, canvas.height);

                                // Lấy dữ liệu Base64 từ canvas
                                const frameBase64 = canvas.toDataURL('image/jpeg').split(',')[
                                    1]; // Loại bỏ tiền tố "data:image/jpeg;base64,"

                                // Gửi frame tới server
                                socket.emit('frame', {
                                    roomParticipantId: ROOM_PARTICIPANT_ID, // ID người dùng
                                    image: frameBase64 // Khung hình ở định dạng Base64
                                });
                            } catch (err) {
                                console.error('Lỗi khi xử lý video:', err);
                            }
                        }, 2000); // Gửi mỗi 2 giây
                    }

                    // Lắng nghe phản hồi từ server
                    socket.on('response', (data) => {
                        if (data.roomParticipantId != ROOM_PARTICIPANT_ID) {
                            return;
                        }
                        if (data.current_violations.multiple_people_count) {
                            COUNT_VIOLATE.multiple_people++
                        }
                        if (data.current_violations.no_person) {
                            COUNT_VIOLATE.no_persion++
                        }

                        if (COUNT_VIOLATE.multiple_people === 3) {
                            COUNT_VIOLATE.count_violate ++;
                            updateStatus(true);
                            COUNT_VIOLATE.multiple_people = 0;
                            return
                        }

                        if (COUNT_VIOLATE.no_persion === 3) {
                            COUNT_VIOLATE.count_violate ++;
                            updateStatus(true);
                            COUNT_VIOLATE.no_persion = 0;
                            return
                        }

                        console.log('--------------------------------');
                        console.log(COUNT_VIOLATE);

                        console.log('--------------------------------');
                        updateStatus(false);
                    });

                    // Bắt đầu camera
                    startCamera();

                    // Hàm dừng ghi video và lưu
                    function stopRecording() {
                        if (mediaRecorder && mediaRecorder.state !== 'inactive') {
                            mediaRecorder.stop();
                        }
                    }

                    $wire.on('stopRecording', function () {
                        console.log('---------------------------------- end --------------------')
                        // Gọi hàm stopRecording khi nhận được tín hiệu từ Livewire
                        stopRecording();
                    });
                })()
            </script>
            @endscript
            </html>

        </div>
    </div>
</div>
