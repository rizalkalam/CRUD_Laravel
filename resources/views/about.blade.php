

@extends('layouts.main')
@section('content')
    <!-- Jumbotron -->
    <section class="jumbotron text-center">
      <img src="img/klm1.1.jpg" alt="Rizal Kalam" width="200" class="rounded-circle img-thumbnail" />
      <h1 class="display-4">Rizal Kalam</h1>
      <p class="lead">Student</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffff"
          fill-opacity="1"
          d="M0,224L0,64L120,64L120,256L240,256L240,128L360,128L360,224L480,224L480,32L600,32L600,160L720,160L720,256L840,256L840,128L960,128L960,32L1080,32L1080,64L1200,64L1200,128L1320,128L1320,224L1440,224L1440,320L1320,320L1320,320L1200,320L1200,320L1080,320L1080,320L960,320L960,320L840,320L840,320L720,320L720,320L600,320L600,320L480,320L480,320L360,320L360,320L240,320L240,320L120,320L120,320L0,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>About-Me</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-4">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut obcaecati cumque repellat incidunt sed consequuntur doloremque ad atque eligendi facere.</p>
          </div>
          <div class="col-md-4">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati non id iure, doloribus corrupti, sunt maiores cumque fugiat eos perferendis offic.</p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#e2edff"
          fill-opacity="1"
          d="M0,96L0,96L120,96L120,96L240,96L240,64L360,64L360,64L480,64L480,160L600,160L600,192L720,192L720,64L840,64L840,288L960,288L960,128L1080,128L1080,128L1200,128L1200,224L1320,224L1320,0L1440,0L1440,320L1320,320L1320,320L1200,320L1200,320L1080,320L1080,320L960,320L960,320L840,320L840,320L720,320L720,320L600,320L600,320L480,320L480,320L360,320L360,320L240,320L240,320L120,320L120,320L0,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir About -->

    <!-- Galery -->
    <section id="galery">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>My Galery</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/13.png" class="card-img-top" alt="galery1" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/a3.png" class="card-img-top" alt="galery2" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/a4.png" class="card-img-top" alt="galery3" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/a1.png" class="card-img-top" alt="galery4" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/a2.png" class="card-img-top" alt="galery5" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffff"
          fill-opacity="1"
          d="M0,192L0,96L120,96L120,32L240,32L240,288L360,288L360,128L480,128L480,288L600,288L600,128L720,128L720,256L840,256L840,64L960,64L960,224L1080,224L1080,96L1200,96L1200,128L1320,128L1320,192L1440,192L1440,320L1320,320L1320,320L1200,320L1200,320L1080,320L1080,320L960,320L960,320L840,320L840,320L720,320L720,320L600,320L600,320L480,320L480,320L360,320L360,320L240,320L240,320L120,320L120,320L0,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Galery -->

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Contact-Me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <form>
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="email" class="form-control" id="name" aria-describedby="name" />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email" />
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="pesan" rows="3"></textarea>
              </div>

              <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#0d6efd"
          fill-opacity="1"
          d="M0,224L0,288L120,288L120,128L240,128L240,256L360,256L360,256L480,256L480,160L600,160L600,224L720,224L720,160L840,160L840,288L960,288L960,224L1080,224L1080,96L1200,96L1200,320L1320,320L1320,160L1440,160L1440,320L1320,320L1320,320L1200,320L1200,320L1080,320L1080,320L960,320L960,320L840,320L840,320L720,320L720,320L600,320L600,320L480,320L480,320L360,320L360,320L240,320L240,320L120,320L120,320L0,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Contact -->

    <!-- Footer -->
    <footer class="bg-primary text-white text-center pb-5">
      <p>Created with <i class="bi bi-heart-fill text-danger"></i> by <a href="" class="text-white fw-bold">Rizal Kalam</a></p>
    </footer>
    <!-- Akhir Footer -->


@endsection
    