<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS and CSS Style Sheets -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/home.css">

    <title>Home | Api</title>
    <style>
        h1{
            font-weight: bold;
            font-size: 45px;
        }
    </style>
  </head>
  <body>

    <header class="pb-5 mb-5" style="height: 250px;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand text-info font-weight-bolder" href="home.php">3ManDev*</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="Home.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Products
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="webdev.php">Web Development</a>
                            <a class="dropdown-item" href="crud.php">CRUD System</a>
                            <a class="dropdown-item" href="apidev.php">Api Development</a>
                            <a class="dropdown-item" href="seo.php">SEO Management</a>
                            <a class="dropdown-item" href="appdev.php">Application Development</a>
                            <a class="dropdown-item" href="wrdpress.php">Wordpress Development</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactus.php" tabindex="-1" aria-disabled="true">Contact Us</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    
                    <a href="signup.php" class="btn btn-outline-info  my-2 my-sm-0 border-left-0 mr-2" type="submit">Register</a>

                </form>
            </div>
        </nav>  
        
        
    </header>

    <br /> <br/ >

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 m-auto">
                    <a href="Home.php"><button class="btn btn-warning btn-block w-25">Back</button></a>
                    <h1 class="text-center">API DEVELOPMENT</h1>
                    <p class="text-center">                        
                        An application programming interface (API) is a computing interface that defines interactions between multiple software intermediaries. It defines the kinds of calls or requests that can be made, how to make them, the data formats that should be used, the conventions to follow, etc. It can also provide extension mechanisms so that users can extend existing functionality in various ways and to varying degrees. An API can be entirely custom, specific to a component, or designed based on an industry-standard to ensure interoperability. Through information hiding, APIs enable modular programming, allowing users to use the interface independently of the implementation.
                        In building applications, an API (application programming interface) simplifies programming by abstracting the underlying implementation and only exposing objects or actions the developer needs. While a graphical interface for an email client might provide a user with a button that performs all the steps for fetching and highlighting new emails, an API for file input/output might give the developer a function that copies a file from one location to another without requiring that the developer understand the file system operations occurring behind the scenes.
                        An API usually is related to a software library. The API describes and prescribes the "expected behavior" (a specification) while the library is an "actual implementation" of this set of rules. A single API can have multiple implementations (or none, being abstract) in the form of different libraries that share the same programming interface.
                        The separation of the API from its implementation can allow programs written in one language to use a library written in another. For example, because Scala and Java compile to compatible bytecode, Scala developers can take advantage of any Java API. API use can vary depending on the type of programming language involved. An API for a procedural language such as Lua could consist primarily of basic routines to execute code, manipulate data or handle errors while an API for an object-oriented language, such as Java, would provide a specification of classes and its class methods. Language bindings are also APIs. By mapping the features and capabilities of one language to an interface implemented in another language, a language binding allows a library or service written in one language to be used when developing in another language. Tools such as SWIG and F2PY, a Fortran-to-Python interface generator, facilitate the creation of such interfaces. An API can also be related to a software framework: a framework can be based on several libraries implementing several APIs, but unlike the normal use of an API, the access to the behavior built into the framework is mediated by extending its content with new classes plugged into the framework itself. Moreover, the overall program flow of control can be out of the control of the caller and in the framework's hands by inversion of control or a similar mechanism.
                        An API can specify the interface between an application and the operating system. POSIX, for example, specifies a set of common APIs that aim to enable an application written for a POSIX conformant operating system to be compiled for another POSIX conformant operating system. Linux and Berkeley Software Distribution are examples of operating systems that implement the POSIX APIs.
                        Microsoft has shown a strong commitment to a backward-compatible API, particularly within its Windows API (Win32) library, so older applications may run on newer versions of Windows using an executable-specific setting called "Compatibility Mode". An API differs from an application binary interface (ABI) in that an API is source code based while an ABI is binary based. For instance, POSIX provides APIs while the Linux Standard Base provides an ABI.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <footer class="mt-5 bg-light pt-3 pb-1">
        <p class="text-center">&copy; copyright 2021, WebApp.Inc. All right reserved.</p>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


  </body>
</html>





