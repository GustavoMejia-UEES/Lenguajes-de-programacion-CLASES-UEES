<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <nav class="navbar bg-dark border-bottom border-body navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Navbar</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            <!-- place navbar here -->
        </header>
        <main>
           <section id="intro">
            <div class="container-lg">
                <div class="row justify-content-center align-items-center">
                    <div class="co-md-5 text-center text-md-start">
                     <h1>
                         <div class="display-2">Creacion</div>
                         <div class="display-5 text-muted">Crea tu proyecto de PHP</div>
                     </h1>
                     <p class="lead my-4 text-muted">Empieza a crear ya! </p>
                 </div>

            <div>
                @if($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
                @endif
            </div>
        
        
            <form action="{{route('proyecto.store')}}" method="post"  enctype="multipart/form-data"> @csrf
                @method('post')
                <div class=" p-3 border shadow">
                    <label class="fw-bold">Name</label>
                    <input class="border m-3" type="text" name="Nombre" placeholder="Nombre">
                </div> <br>
                <div class=" p-3 border shadow">
                    <label class="fw-bold">Descripcion</label> 
                    <input class="border m-3" type="text" name="Descripcion" placeholder="Descripcion">
                </div><br>
                <div>
                    <input  class="btn btn-outline-success btn-lg " type="submit" value="Crear Proyecto">
                    <a href="{{route('proyecto.index')}}" class="btn btn-outline-primary btn-lg ">Volver</a>
                </div>
            </form>
        </div>
           </section>


        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
