@extends('layouts.app')
@section('content')

    <!DOCTYPE html>

    <html>

    <head>
        <title>Game Caro Onilne</title>
        <meta name="viewport" content="width= device-width,initial-scale=1" />
        <link href="{{ asset('css/CssFile.css') }}" rel="stylesheet">
        <script type="text/javascript" src="{{ asset('js/EventFile.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/AIFile.js') }}"></script>
    </head>

    <body onLoad="Loaded()" id="bgr">
        <div id="divmain">
            <table id="table">
            </table>
        </div>
        <div id="divcontrol">
            <div id="label1"><b>CURENT PLAYER:</b></div>
            <div id="imgPlayer"></div>
            <br />
            <div class="score-center">
                Score O :<span id="scoreO">0</span>

            </div>
            <div class="score-x">
                Score X :<span id="scoreX">0</span>
            </div>
            <div id="label2"><input type="checkbox" id="chbtime" onClick="TimeReturn()" /><b>TIME:</b></div>
            <progress id="pgrTime" max="100" value="100"></progress>
            <time></time>
            <br />
            <input type="button" class="button" value="PLAYER VS PLAYER" onClick="PvsP()" />
            <input type="button" class="button" value="PLAYER VS COMPUTER" onClick="PvsM()" />
            <input type="button" class="button" value="UNDO" onClick="Undo(2)" /><br />
            <div id="divcheckbox">
                <input type="checkbox" id="chbmode" onClick="ChooseMode()" />
                <b>Block both sides</b>
            </div>
        </div>
    </body>

    </html>
@endsection
