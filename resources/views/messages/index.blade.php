@extends('layouts.app')


@section('content')
    <style>
        input::placeholder {
            font-size: 0.9rem;
            color: #999;
        }

    </style>



    <div
        style=" background-color: #424242; background-image: linear-gradient(90deg, #383838 0%, #3b3b3b 100%);min-height: 85vh;">
        <br>
        <div class="container py-5 px-4">
            <!-- For demo purpose-->

            <div class="row rounded-lg overflow-hidden shadow" style="border-radius: 0.5rem;">
                <!-- Users box-->
                <div class="col-5 px-0">
                    <div class="bg-white">

                        <div class="bg-gray px-4 py-2 bg-light">
                            <p class="h5 mb-0 py-1">Recent</p>
                        </div>

                        <div class="messages-box" style="height: 510px; overflow-y: scroll;">
                            <div class="list-group rounded-0">

                                <a class="list-group-item list-group-item-action active text-white rounded-0">
                                    <div class="media"><img
                                            src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user"
                                            width="50" class="rounded-circle">
                                        <div class="media-body ml-4">
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <h6 class="mb-0">Ahmed Ashraf</h6> <small
                                                    class="small font-weight-bold">25 Dec</small>
                                            </div>
                                            <p class="font-italic mb-0 text-small" style="font-size: 0.9rem;">Lorem ipsum
                                                dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                                incididunt ut labore.</p>
                                        </div>
                                    </div>
                                </a>

                                <br>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0">
                                    <div class="media"><img
                                            src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user"
                                            width="50" class="rounded-circle">
                                        <div class="media-body ml-4">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <h6 class="mb-0">Ahmed Ashraf</h6><small
                                                    class="small font-weight-bold">21 Aug</small>
                                            </div>
                                            <p class="font-italic text-muted mb-0 text-small" style="font-size: 0.9rem;">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore.</p>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Chat Box-->




                <div class="col-7 px-0">
                    <div class="px-4 py-5 chat-box bg-white" style="height: 510px; overflow-y: scroll;">


                        @foreach ($messages as $message)
                            <!-- Sender Message-->
                            <div class="media w-50 mb-3">
                                <img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50"
                                    class="rounded-circle">
                                <div class="media-body ml-3">
                                    <p class="small text-muted">{{ auth()->user()->name }}</p>
                                    <div class="bg-light  rounded py-2 px-3 mb-2">
                                        <p class="text-small mb-0 text-muted " style="font-size: 0.9rem;">
                                            {{ $message->message }}</p>
                                    </div>
                                    <p class="small text-muted">{{ $message->created_at }}</p>
                                </div>
                            </div>



                            <div class="media w-50 ml-auto mb-3">
                                <img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50"
                                    class="rounded-circle">
                                <div class="media-body">
                                    <p class="small text-muted">{{ auth()->user()->name }}</p>
                                    <div class="bg-primary rounded py-2 px-3 mb-2">
                                        <p class="text-small mb-0 text-white" style="font-size: 0.9rem;">
                                            {{ $message->message }}</p>

                                    </div>
                                    <p class="small text-muted">{{ $message->created_at }}</p>
                                </div>
                            </div>





                    </div>
                    @endforeach




                    <!-- Typing area -->

                    {{-- <form action="{{ route('messages.store') }}" class="bg-light" method="post">
                        @csrf
                        <div class="input-group">
                            <input type="hidden" name="conversation_id" value="{{ $conversation_id }}">
                            <input type="text" name="message" placeholder="Type a message" aria-describedby="button-addon2"
                                class="form-control rounded-0 border-0 py-4 bg-light">
                            <div class="input-group-append">
                                <button id="button-addon2" type="submit" class="btn btn-link"> <i
                                        class="fa fa-paper-plane "> ارسال </i> </button>
                            </div>
                        </div>
                    </form> --}}




                </div>
            </div>
        </div>
    </div>
@endsection
