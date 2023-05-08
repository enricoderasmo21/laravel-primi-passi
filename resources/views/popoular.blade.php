<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Bebas+Neue&family=Blinker:wght@400;600&family=Bungee+Inline&family=Emilys+Candy&family=Fjalla+One&family=Fredoka:wght@300;700&family=Gugi&family=Lato:ital@0;1&family=Libre+Baskerville:ital@1&family=Montserrat:wght@400;600&family=Mynerve&family=Mystery+Quest&family=Noto+Sans:wght@400;700&family=Open+Sans:wght@400;700&family=Roboto:wght@400;500&family=Rowdies:wght@300&family=Rubik+Iso&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    <title>Laravel primi passi</title>
</head>
<body>
    
    <div class="container">
        <x-header/>
    
        <div class="container-main">
            <img src="{{$back}}" alt="">
            <div class="text">
                Popoular
            </div>
        </div>
    
        <x-footer/>
    </div>
    
</body>
</html>