<nav class="navbar navbar-expand-lg bg-lp fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('homepage') }}">
        <img src="/media/logo.png" alt="Logo del sito" class="logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto text-uppercase fs-5">
        <li class="nav-item mx-3 mx-md-0">
          <a class="nav-link" aria-current="page" href="{{ route('homepage') }}">Home</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="{{ route('aboutUs') }}">Chi Siamo</a>
        </li>
        <li class="nav-item mx-3 mx-md-0">
          <a class="nav-link" href="{{ route('anime') }}">Più Visti</a>
        </li>
      </ul>
    </div>
  </div>
</nav>