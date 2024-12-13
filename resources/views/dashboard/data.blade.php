@extends('../layouts.main')
@section('conten')
<div class="main p-3">
    <div class="text-center">
        <h1>Welcome</h1>
        <div class="container my-2">
            <!-- Bagian atas (konten besar) -->
            <div class="row justify-content-center align-items-center mb-4" style="height: 100vh;">
                <div class="mb-4 col-12 d-flex justify-content-center">
                    <div class="card" style="width: 70%;">
                        <img src="img/naruto.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="/view" class="btn btn-primary">view</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bagian bawah (3 kolom) -->
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="img/naruto.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Judulnya</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="img/naruto.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Judulnya</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">view</a>
                        </div>
                      </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="img/naruto.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Judulnya</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
