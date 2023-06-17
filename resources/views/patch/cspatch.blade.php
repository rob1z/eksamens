<!DOCTYPE html>
<style>
    .announcement {
        background-color: darkgrey;
        color: white;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #FFB300;
        border-radius: 4px;
    }

    .announcement-body {
        font-size: 16px;
        line-height: 1.5;
    }

    .separator {
        margin-top: 20px;
        border: none;
        border-top: 3px solid #FFB300;
    }
    body{
        background-color: grey;
    }
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="announcement">

@php
    $count = 0;
@endphp
@foreach ($data['events'] as $item)
    @if ($count < 5)
        @php
            $body = strip_tags($item['announcement_body']['body']);
            $body = str_replace('string_to_remove', '', $body); 

        @endphp
        <div class="seperate">
        {{ $body }}
</div>
        @php
            $count++;
        @endphp
        @if ($count < 5)
            <hr> 
        @endif
    @else
        @break
    @endif
@endforeach

</div>

<h1>test</h1>
</body>

</html>
