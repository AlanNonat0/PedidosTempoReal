
    <nav class="navbar navbar-expand navbar-light bg-brown ">
        <div class="container-fluid text-white">
            
            <div class="col-2">
            <a href="" class="text-reset text-decoration-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                    class="bi bi-compass decoration-none" viewBox="0 0 16 16">
                    <path
                        d="M8 16.016a7.5 7.5 0 0 0 1.962-14.74A1 1 0 0 0 9 0H7a1 1 0 0 0-.962 1.276A7.5 7.5 0 0 0 8 16.016zm6.5-7.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                    <path d="m6.94 7.44 4.95-2.83-2.83 4.95-4.949 2.83 2.828-4.95z" />
                </svg>
                <span class="fw-bold fs-5 text-white">{{ $title }}</span>
            </a>
            </div>
            <div class="col-8">
            <div class="alert alert-secondary align-items-center m-auto bg-brown border-0" role="alert">
                <span class="feedback d-none text-center h4 text-white d-flex justify-content-center align-items-center"></span>
            </div>
            </div>
            <div class="col-2">
            <div class="d-flex">

                <ul class=" navbar-nav me-auto ml-auto">
                    #<span id="idOrder">{{ $order }}</span>
                </ul>
            </div>
       </div>
        </div>
    </nav>
