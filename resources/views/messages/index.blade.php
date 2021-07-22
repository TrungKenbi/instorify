@extends('layouts.app')

@section('content')
    <section style="padding-top: 60px">
        <div class="gap gray-bg">
            <div class="col-lg-12" style="margin-top: -30px; margin-bottom: -60px">
                <div class="central-meta">
                    <div class="messages">
                        <div class="f-title">
                            <i class="fab fa-facebook-messenger" style="font-size: 26px; color: #5271ff"></i>
                            <h4 style="margin-left: 40px; margin-top: -30px"><strong> Tin nhắn </strong></h4>
                            <div class="message-btn-group" style="margin-left: 250px; margin-top: -33px">
                                <button><i class="far fa-plus-square" style="font-size: 20px; color: #5271ff"></i>
                                </button>
                                <button><i class="fas fa-user-friends" style="font-size: 20px; color: #5271ff"></i>
                                </button>
                            </div>
                        </div>
                        <div class="message-box" style="margin-top: 30px">
                            <ul class="peoples" style="width: 350px">
                                @foreach(auth()->user()->conversations as $conversation)
                                    @php
                                        $user = $conversation->users()->where('users.id', '!=', auth()->id())->first();
                                        $lastMessage = $conversation->messages->last();
                                    @endphp
                                    <li class="msg-list-item d-flex justify-content-between dropdown-msg-list" data-id="{{ $conversation->id }}">
                                        <!-- profile picture -->
                                        <div class="profile-thumb">
                                            <figure style="margin-left: -15px">
                                                <img src="{{ $user->avatar_url }}" alt="profile picture"
                                                     style="width: 100%">
                                            </figure>
                                        </div>

                                        <!-- message content -->
                                        <div class="msg-content" style="margin-left: -50px; width: 200px">
                                            <h6 class="author"><a href="#"
                                                                  style="text-decoration: none">{{ $user->fullname }}</a>
                                            </h6>
                                            <p class="msg-property">
                                                {{ $lastMessage->message }}
                                            </p>
                                        </div>

                                        <!-- message time -->
                                        <div class="msg-time" style="margin-left: -70px;margin-right: 5px; width: 80px">
                                            <p>{{ Carbon\Carbon::parse($lastMessage->created_at)->diffForHumans() }}</p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="peoples-mesg-box" style="width: 1083px; margin-top: -67px">
                                <div id="chat-container">
                                </div>
                                <div class="message-text-container" style="margin-top: 20px">
                                    <form>
                                        <textarea class="chat-input-text" rows="2"></textarea>
                                        <button class="chat-input-button" title="send">
                                            <i class="fas fa-paper-plane" style="color: #5271ff; font-size: 30px; margin-left: -30px"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        var timer;
        var conversationId;

        jQuery(document).ready(async ($) => {
            conversationId = await $('.peoples li:first').data('id');
            setEventChatBox();
            window.clearTimeout(timer);
            timer = window.setInterval(function () {
                if (conversationId != undefined) {
                    fetch(`/messages/${conversationId}`)
                        .then(response => response.json())
                        .then(data => {
                            renderChatBox(data.profile, data.messages);
                        });
                }
            }, 1000);
        });

        function setEventChatBox() {
            $(".chat-input-text").on('keydown', function (event) {
                if (event.keyCode == 13) {
                    let message = $(this).val();

                    $.ajax({
                        type: 'POST',
                        url: `/messages`,
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data: {
                            conversation_id: conversationId,
                            message: message
                        },
                        success: function (data) {
                            console.log(data);
                        }
                    }).then(() => $(this).val(''));
                }
            });

            $(".chat-input-button").on('click', function (event) {
                event.preventDefault();
                console.log('click send');
            });
        }

        function renderChatBox(profile, messages) {
            let messageHTML = messages.map((message) => {
                return `
                    <li class="${message.user_id === USER_DATA.id ? 'me' : 'you'}">
                        <figure><img src="${message.user_id === USER_DATA.id ? USER_DATA.avatar : profile.avatar_url}" alt="" style="width: 90%; margin-left: -0.08px"></figure>
                        <p>${message.message}</p>
                    </li>`;
            });

            let chatBoxHTML = `
                <div class="conversation-head" style="margin-left: -25px">
                    <figure><img src="${profile.avatar_url}" alt="" style="width: 100%"></figure>
                    <span style="margin-left: 20px">${profile.fullname} <i>${profile.is_online ? 'Đang hoạt động' : 'Ngoại tuyến'}</i></span>
                </div>
                <ul class="chatting-area">
                    ${messageHTML}
                </ul>
            `;
            $('#chat-container').html(chatBoxHTML).animate({scrollTop: $('.chatting-area').prop("scrollHeight")});
            // let container = $('.chatting-area');
            // container.scrollTop = container.scrollHeight;
        }
    </script>
@endpush
