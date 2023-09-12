
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.scss','resources/js/app.js'])   
    
        @if(session('mensaje'))
            <script type="module">
                Swal.fire({
                            icon:"success",     
                            title:"{{session('mensaje')}}"
                        });
            </script>
        @endif
            
</head>
<body>
    <x-navegation/>
    <main class="container">  
        {{$slot}}
    </main>,,
    <footer>
        <script type="module">
            let table = new DataTable('#table_id', {"pageLength":3,
                lengthMenu:[
                    [3,10,25,50],
                    [3,10,25,50]
                ],
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json"
                }});
        </script>

    </footer>
</body>
</html>