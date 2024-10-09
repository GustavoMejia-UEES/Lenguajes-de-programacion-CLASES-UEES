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
        
        @include('css-components.style')
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
        </header>
        <main>

           <section id="intro">

            <div class="container-lg">
                <div class="row justify-content-center align-items-center">
                   <div class="co-md-5 text-center text-md-start">
                    <h1>
                        <div class="display-2">Proyecto Laravel</div>
                        <div class="display-5 text-muted">Un framework de PHP</div>
                    </h1>
                    <p class="lead my-4 text-muted">Trabajo en clase de laravel utilizando Bootstrap para crear un estilo css</p>
                    <a href="{{route('proyecto.create')}}" class="btn btn-outline-primary btn-lg "> Crear nuevo proyecto</a>
                    </div> 

                    <div class="col-md-5 p-3 text-center d-none d-md-block">
                        <div id="carouselExampleIndicators" class="carousel slide">
                            <div class="carousel-indicators">
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="https://www.globbit.com/wp-content/uploads/2016/04/HPE_centrodatos.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="https://4.bp.blogspot.com/--c8AkKwtIxk/WA9ocpKyf6I/AAAAAAAAACU/s9OdIiWOO4ghR7_z0i7WWqO7mzCg7u7ZgCLcB/s1600/oky.png" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="https://fiverr-res.cloudinary.com/images/t_main1,q_auto,f_auto,q_auto,f_auto/gigs/304530043/original/72559cc2cdb31ba31587118eba2074b3e1780b0f/sviluppatore-laravel-professionale-per-progetti-web.png" class="d-block w-100" alt="...">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>

                    </div> <br><br>

                </div>
            </div>

            <div>
                @if(session()->has('success'))
                    
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <div>{{ session('success') }}</div>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                

                @endif
            </div>

            <div class="container-fluid">
                <div class="table-responsive-sm table-bordered">
                   <table class="table table-striped table-light table-hover">
                       <thead>
                           <tr class="table-light">
                               <th scope="col">Id </th>
                               <th scope="col">Nombre </th>
                               <th scope="col">Descripcion </th>
                               <th scope="col">Editar</th>
                               <th scope="col">Eliminar</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr class="">
                               @foreach($proyectos as $proyecto)
                           <tr class="table-light">
                               <td>{{$proyecto->id}}</td>
                               <td>{{$proyecto->Nombre}}</td>
                               <td>{{$proyecto->Descripcion}}</td>
   
                               <td>
                                   <a href="{{route('proyecto.edit',['proyecto'=>$proyecto])}}" class="btn btn-success">Edit</a>
                               </td>
   
                               <td>
                                   <form method="post" action="{{route('proyecto.destroy',['proyecto'=>$proyecto])}}">
                                       @csrf
                                       @method('delete')
                                       <input type="submit" value="Delete" class="btn btn-danger">
                                   </form>
                               </td>
                           </tr>
                       @endforeach
                              
                           </tr>
                       </tbody>
                   </table>
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
