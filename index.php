<!DOCTYPE html>
<html lang="cs" data-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Simona Koucká – můj web</title>

  
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet">
  
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-base-100">

  
  <div class="navbar bg-base-200 sticky top-0 z-50 shadow-sm">
    <div class="navbar-start">
      
      <div class="dropdown">
        <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">☰</div>
        <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-10 mt-3 w-52 p-2 shadow">
          <li><a href="#o-mne">O mně</a></li>
          <li><a href="#umim">Co umím</a></li>
          <li><a href="#galerie">Galerie</a></li>
          <li><a href="#kontakt">Kontakt</a></li>
        </ul>
      </div>
      <a href="#" class="btn btn-ghost text-xl">Simona Koucká</a>
    </div>

    
    <div class="navbar-center hidden lg:flex">
      <ul class="menu menu-horizontal px-1">
        <li><a href="#o-mne">O mně</a></li>
        <li><a href="#umim">Co umím</a></li>
        <li><a href="#galerie">Galerie</a></li>
        <li><a href="#kontakt">Kontakt</a></li>
      </ul>
    </div>
  </div>

  
  <div class="hero min-h-[75vh]"
       style="background-image: url('https://picsum.photos/seed/simona-hero/1600/900');">
    <div class="hero-overlay bg-opacity-60"></div>
    <div class="hero-content text-center text-neutral-content">
      <div class="max-w-xl">
        <h1 class="text-5xl font-bold">Ahoj, jsem Simona Koucká</h1>
        <p class="py-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <a href="#o-mne" class="btn btn-primary">Více o mně</a>
      </div>
    </div>
  </div>

  
  <section id="o-mne" class="py-20 px-6">
    <div class="max-w-4xl mx-auto flex flex-col md:flex-row items-center gap-10">
      <div class="avatar">
        <div class="w-48 rounded-full ring ring-primary ring-offset-base-100 ring-offset-4">

          <img src="https://picsum.photos/seed/simona-avatar/300/300" alt="Fotka">
        </div>
      </div>
      <div>
        <h2 class="text-3xl font-bold mb-4">O mně</h2>
        <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        <div class="flex gap-2 flex-wrap">
          <span class="badge badge-primary">Lorem</span>
          <span class="badge badge-secondary">Ipsum</span>
          <span class="badge badge-accent">Dolor</span>
        </div>
      </div>
    </div>
  </section>

  
  <section id="umim" class="py-20 px-6 bg-base-200">
    <div class="max-w-2xl mx-auto">
      <h2 class="text-3xl font-bold mb-6 text-center">Co umím</h2>

      <div class="collapse collapse-arrow bg-base-100 mb-2">
        <input type="radio" name="umim" checked>
        <div class="collapse-title text-lg font-medium">Lorem ipsum dolor sit amet</div>
        <div class="collapse-content"><p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p></div>
      </div>

      <div class="collapse collapse-arrow bg-base-100 mb-2">
        <input type="radio" name="umim">
        <div class="collapse-title text-lg font-medium">Ut enim ad minim veniam</div>
        <div class="collapse-content"><p>Quis nostrud exercitation ullamco laboris nisi ut aliquip.</p></div>
      </div>

      <div class="collapse collapse-arrow bg-base-100">
        <input type="radio" name="umim">
        <div class="collapse-title text-lg font-medium">Duis aute irure dolor</div>
        <div class="collapse-content"><p>In reprehenderit in voluptate velit esse cillum dolore.</p></div>
      </div>
    </div>
  </section>

  
  <section id="galerie" class="py-20 px-6">
    <h2 class="text-3xl font-bold mb-8 text-center">Galerie</h2>
    <div class="max-w-3xl mx-auto">
      <div class="carousel w-full rounded-box">
      <div id="slide1" class="carousel-item relative w-full">
        <img src="https://picsum.photos/seed/galerie1/900/600" class="w-full h-96 object-cover" alt="Fotka 1">
        <div class="absolute left-4 right-4 top-1/2 flex -translate-y-1/2 justify-between">
          <a href="#slide5" class="btn btn-circle">❮</a>
          <a href="#slide2" class="btn btn-circle">❯</a>
        </div>
      </div>
      <div id="slide2" class="carousel-item relative w-full">
        <img src="https://picsum.photos/seed/galerie2/900/600" class="w-full h-96 object-cover" alt="Fotka 2">
        <div class="absolute left-4 right-4 top-1/2 flex -translate-y-1/2 justify-between">
          <a href="#slide1" class="btn btn-circle">❮</a>
          <a href="#slide3" class="btn btn-circle">❯</a>
        </div>
      </div>
      <div id="slide3" class="carousel-item relative w-full">
        <img src="https://picsum.photos/seed/galerie3/900/600" class="w-full h-96 object-cover" alt="Fotka 3">
        <div class="absolute left-4 right-4 top-1/2 flex -translate-y-1/2 justify-between">
          <a href="#slide2" class="btn btn-circle">❮</a>
          <a href="#slide4" class="btn btn-circle">❯</a>
        </div>
      </div>
      <div id="slide4" class="carousel-item relative w-full">
        <img src="https://picsum.photos/seed/galerie4/900/600" class="w-full h-96 object-cover" alt="Fotka 4">
        <div class="absolute left-4 right-4 top-1/2 flex -translate-y-1/2 justify-between">
          <a href="#slide3" class="btn btn-circle">❮</a>
          <a href="#slide5" class="btn btn-circle">❯</a>
        </div>
      </div>
      <div id="slide5" class="carousel-item relative w-full">
        <img src="https://picsum.photos/seed/galerie5/900/600" class="w-full h-96 object-cover" alt="Fotka 5">
        <div class="absolute left-4 right-4 top-1/2 flex -translate-y-1/2 justify-between">
          <a href="#slide4" class="btn btn-circle">❮</a>
          <a href="#slide1" class="btn btn-circle">❯</a>
        </div>
      </div>
      </div>
    </div>
  </section>

  
  <section id="kontakt" class="py-20 px-6 bg-base-200">
    <div class="card bg-base-100 shadow-xl max-w-lg mx-auto">
      <div class="card-body">
        <h2 class="card-title text-2xl">Napiš mi</h2>
        <form class="space-y-4">
          <input type="text" placeholder="Jméno" class="input input-bordered w-full">
          <input type="email" placeholder="E-mail" class="input input-bordered w-full">
          <textarea placeholder="Zpráva" rows="4" class="textarea textarea-bordered w-full"></textarea>
          <div class="card-actions justify-end">
            <button type="button" class="btn btn-primary">Odeslat</button>
          </div>
        </form>
      </div>
    </div>
  </section>

  
  <footer class="footer footer-center p-6 bg-base-300 text-base-content">
    <p>© 2026 Simona Koucká</p>
  </footer>

</body>
</html>