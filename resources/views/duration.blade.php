<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Page View Duration</title>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.min.js"></script>
</head>

<body>

    <h1>Page View Duration Test</h1>
    <p><strong>close this page</strong> when you are done.</p>

    <iframe width="560" height="315" src="https://www.youtube.com/embed/w6sFNAG-2WM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

    <script>
        let startTime;
        window.onload = function() {
            startTime = new Date();
        };
    
        window.onbeforeunload = function() {
            let endTime = new Date();
            let duration = (endTime - startTime) / 1000;
    
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
    
            $.ajax({
                type: "POST",
                url: "/store",
                data: {
                    duration: duration
                }
            });
        };
    </script>
        
</body>

</html>
