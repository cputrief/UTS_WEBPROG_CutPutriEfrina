<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
     <title>Document</title>
    {{-- bootstrap css and js --}}
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">         
    </head>
 <body>
     
 {{-- konten --}}
 
    <div class="row">
        <div class="col s12 m3">
            <ul id="slide-out" class="sidenav sidenav-fixed">
                <li>
                    <div class="user-view">
                        {{-- <div class="background">
                            <img src="../img/back.jpg">
                        </div> --}}
                    </div>
                </li>
                <li class="center">
                        <img src="{{asset ('/img/k1.jpg')}}" class="img-thumbnail img-fluid" style="width: 100px; height: 100px;" alt="...">
                        <div class="card-body">
                        <p class="card-text">CUT PUTRI EFRINA</p>
                        </div>
                </li>
                <li><a href="#"><i class="material-icons">dashboard</i>Dashboard</a></li>
                <li><a href="#"><i class="material-icons">featured_play_list</i>Biodata</a></li>
                <li><a href="#"><i class="material-icons">report</i>Pengumuman</a></li>
                <li><a href="#"><i class="material-icons">question_answer</i>Daftar Ulang</a></li>
                <li>
                    <div class="divider"></div>
                </li>
                <li><a class="waves-effect" href="#"><i class="material-icons">logout</i>Logout</a></li>
            </ul>

            {{-- <a href="#" data-target="slide-out" class="btn sidenav-trigger"><i class="material-icons">menu</i></a> --}}
        </div>
        
    </div>
    
 

 {{-- footer --}}
       <footer class="fixed-bottom bg-dark text-white py-4 mt-4 text-center">
           Copyright &copy; Cut Putri Efrina - 2025
       </footer>
 
       {{-- <footer class="page-footer fixed-bottom py-1 " >
       <div class="container " >
         <div class="row " >
           <div class="col l2 s6">
             <h5 class="white-text">Footer Content</h5>
             <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
           </div>
           <div class="col l2 offset-l2 s6">
             <h5 class="white-text">Links</h5>
             <ul>
               <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
               <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
             </ul>
           </div>
         </div>
       </div>
       <div class="footer-copyright"  >
         <div class="container center" >
         Copyright &copy; CUT PUTRI EFRINA - 2025
         </div>
       </div>
     </footer> --}}

       <script src="{{ asset('/js/bootstrap.bundle.js') }}"></script>
       <script src="{{ asset('/js/bootstrap.js') }}"></script>
       
 </body>
 </html>