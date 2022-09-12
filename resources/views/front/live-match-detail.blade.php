@extends('front.master')
@section('css')
    <style>
        body {
            font: 15px arial, sans-serif;
            background-color: #d9d9d9;
            padding-top: 15px;
            padding-bottom: 15px;
        }

        #bodybox {
            margin: auto;
            max-width: 550px;
            font: 15px arial, sans-serif;
            background-color: white;
            border-style: solid;
            border-width: 1px;
            padding-top: 20px;
            padding-bottom: 25px;
            padding-right: 25px;
            padding-left: 25px;
            box-shadow: 5px 5px 5px grey;
            border-radius: 15px;
        }

        #chatborder {
            border-style: solid;
            background-color: #f6f9f6;
            border-width: 3px;
            margin-top: 20px;
            margin-bottom: 20px;
            margin-left: 20px;
            margin-right: 20px;
            padding-top: 10px;
            padding-bottom: 15px;
            padding-right: 20px;
            padding-left: 15px;
            border-radius: 15px;
        }

        .chatlog {
            font: 15px arial, sans-serif;
        }

        #chatbox {
            font: 17px arial, sans-serif;
            height: 22px;
            width: 100%;
        }

        h1 {
            margin: auto;
        }

        pre {
            background-color: #f0f0f0;
            margin-left: 20px;
        }
    </style>
@endsection

@section('content')
    <section class="property mt-5 ">
        <div class="container">
            <div class="row gx-5 gy-5">
                <div class="d-flex justify-content-between owner-detail my-3">
                    <div class="title">
                        <h2>{{ $game->title }}</h2>
                    </div>

                    <div class="owner">
                        <div>
                            <p class="pb-2">posted by <span class="owner-post"></span></p>
                            <button class="btn-price btn d-flex align-items-center justify-content-center ">
                                <h6>{{ $game->user->name }}</h6>
                            </button>
                            {{-- <p class="mt-2"> <img src="./assets/img/Icon awesome-clock.svg" alt=""> 10hrs ago</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row gx-3">
                        <div class="media">
                            <div class="media-body">
                                {!! $game->video_html !!}
                                {{-- convertYoutube --}}
                                {{-- <iframe src="http://www.youtube.com/embed/{{ $game->video_url }}" width="660" height="415"
                                    frameborder="0" allowfullscreen="" sandbox="allow-scripts"></iframe> --}}
                                {{-- <iframe src="{{ convertYoutube($game->video_url) }}" width="660" height="415"
                                        frameborder="0" allowfullscreen="" sandbox="allow-scripts"></iframe> --}}
                            </div>
                        </div>

                    </div>

                    <div class="property-detail mt-5">
                        <div class="container">
                            <div class="row mt-4">
                                <div class="col-sm-3">
                                    <h5>description</h5>
                                </div>
                                <div class="col-sm-9 ">
                                    <p class="description">
                                        {!! $game->description !!}
                                    </p>
                                    {{-- <a href="" class="see">see more</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>




                </div>

                <div class=" col-lg-4 display-hide-mobile1">
                    <div class="row">
                        <div class=" col-md-6  col-lg-12">
                          <iframe width=”350px” height=”500px” src=”https://www.youtube.com/live_chat?v=5RyV-R_5WmM&embed_domain=127.0.0.1:8000” ></iframe>
                            <div id='bodybox'>
                                <div id='chatborder'>
                                    <p id="chatlog7" class="chatlog">&nbsp;</p>
                                    <p id="chatlog6" class="chatlog">&nbsp;</p>
                                    <p id="chatlog5" class="chatlog">&nbsp;</p>
                                    <p id="chatlog4" class="chatlog">&nbsp;</p>
                                    <p id="chatlog3" class="chatlog">&nbsp;</p>
                                    <p id="chatlog2" class="chatlog">&nbsp;</p>
                                    <p id="chatlog1" class="chatlog">&nbsp;</p>
                                    <input type="text" name="chat" id="chatbox"
                                        placeholder="Hi there! Type here to talk to me." onfocus="placeHolder()">
                                </div>
                                <br>
                                <br>

                            </div>
                            {{-- <form class="form-detail">
                                <h3 class="pb-3">Chat Section</h3>
                                <div class="mb-4">
                                    <div class="user-input">

                                        <input type="textarea" class="form-control text-field plogin-name"
                                            id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>

                                </div>

                                <button type="submit" class="btn email_agent">
                                    <h6 class="d-flex align-items-center ">Chat</h6>
                                </button>
                            </form> --}}

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('scripts')
    <script>
        //links
        //http://eloquentjavascript.net/09_regexp.html
        //https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Regular_Expressions


        var messages = [], //array that hold the record of each string in chat
            lastUserMessage = "", //keeps track of the most recent input string from the user
            botMessage = "", //var keeps track of what the chatbot is going to say
            botName = 'Chatbot', //name of the chatbot
            talking = true; //when false the speach function doesn't work
        //
        //
        //****************************************************************
        //****************************************************************
        //****************************************************************
        //****************************************************************
        //****************************************************************
        //****************************************************************
        //****************************************************************
        //edit this function to change what the chatbot says
        function chatbotResponse() {
            talking = true;
            botMessage = "I'm confused"; //the default message

            if (lastUserMessage === 'hi' || lastUserMessage == 'hello') {
                const hi = ['hi', 'howdy', 'hello']
                botMessage = hi[Math.floor(Math.random() * (hi.length))];;
            }

            if (lastUserMessage === 'name') {
                botMessage = 'My name is ' + botName;
            }
        }
        //****************************************************************
        //****************************************************************
        //****************************************************************
        //****************************************************************
        //****************************************************************
        //****************************************************************
        //****************************************************************
        //
        //
        //
        //this runs each time enter is pressed.
        //It controls the overall input and output
        function newEntry() {
            //if the message from the user isn't empty then run 
            if (document.getElementById("chatbox").value != "") {
                //pulls the value from the chatbox ands sets it to lastUserMessage
                lastUserMessage = document.getElementById("chatbox").value;
                //sets the chat box to be clear
                document.getElementById("chatbox").value = "";
                //adds the value of the chatbox to the array messages
                messages.push(lastUserMessage);
                //Speech(lastUserMessage);  //says what the user typed outloud
                //sets the variable botMessage in response to lastUserMessage
                chatbotResponse();
                //add the chatbot's name and message to the array messages
                messages.push("<b>" + botName + ":</b> " + botMessage);
                // says the message using the text to speech function written below
                Speech(botMessage);
                //outputs the last few array elements of messages to html
                for (var i = 1; i < 8; i++) {
                    if (messages[messages.length - i])
                        document.getElementById("chatlog" + i).innerHTML = messages[messages.length - i];
                }
            }
        }

        //text to Speech
        //https://developers.google.com/web/updates/2014/01/Web-apps-that-talk-Introduction-to-the-Speech-Synthesis-API
        function Speech(say) {
            if ('speechSynthesis' in window && talking) {
                var utterance = new SpeechSynthesisUtterance(say);
                //msg.voice = voices[10]; // Note: some voices don't support altering params
                //msg.voiceURI = 'native';
                //utterance.volume = 1; // 0 to 1
                //utterance.rate = 0.1; // 0.1 to 10
                //utterance.pitch = 1; //0 to 2
                //utterance.text = 'Hello World';
                //utterance.lang = 'en-US';
                speechSynthesis.speak(utterance);
            }
        }

        //runs the keypress() function when a key is pressed
        document.onkeypress = keyPress;
        //if the key pressed is 'enter' runs the function newEntry()
        function keyPress(e) {
          console.log('hi')

            var x = e || window.event;
            var key = (x.keyCode || x.which);
            if (key == 13 || key == 3) {
                //runs this function when enter is pressed
                newEntry();
            }
            if (key == 38) {
                console.log('hi')
                //document.getElementById("chatbox").value = lastUserMessage;
            }
        }

        //clears the placeholder text ion the chatbox
        //this function is set to run when the users brings focus to the chatbox, by clicking on it
        function placeHolder() {
            document.getElementById("chatbox").placeholder = "";
        }
    </script>
@endsection
