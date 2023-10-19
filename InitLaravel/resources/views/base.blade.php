{{-- template de base pour laravel --}}

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    {{-- je recupére le contenu de title --}}
    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container-fluid">
          <a class="navbar-brand" href="/"> Accueil</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">

                {{-- class dynamique  --}}
                <a @class(['nav-link', 'active' => Request::route()->getName() == 'blog.index']) aria-current="page" href=" {{ route('blog.index')}} ">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


    <div class="container">
        {{-- recupérer route en cours :
            @dump(Request::route()->getName()) --}}

       {{-- j'ajoute le contenu de content  --}}
        @yield('content')
    </div>
</body>

</html>