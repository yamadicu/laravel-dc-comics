<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route( 'home' ) }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('comics.index')}}">Comics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('comics.create')}}">Crea il tuo fumetto</a>
        </li>
      </ul>
    </div>
  </div>
</nav>