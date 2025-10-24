<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Proyecto Laravel: Filtramas</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen text-slate-100"
      style="background-image:url('{{ voyager_asset('images/bg.jpg') }}');background-size:cover;background-position:center;background-attachment:fixed;">
  <div class="min-h-screen backdrop-brightness-[.35]">
    <div class="max-w-4xl mx-auto px-6 py-14">
      <header class="mb-10 text-center">
        <h1 class="text-3xl md:text-4xl font-bold tracking-tight">Proyecto Laravel: Filtramas</h1>
        <p class="mt-2 text-slate-200/80">si lo puede importar estaría súper</p>
      </header>

      <section class="grid sm:grid-cols-2 gap-6">
        <div class="rounded-2xl bg-slate-900/70 p-6 shadow">
          <h2 class="text-sm uppercase tracking-wide text-slate-300/80">Autor</h2>
          <p class="mt-2 text-xl font-semibold">YISUS MURILLO 😎</p>
        </div>

        <div class="rounded-2xl bg-slate-900/70 p-6 shadow">
          <h2 class="text-sm uppercase tracking-wide text-slate-300/80">Carrera</h2>
          <p class="mt-2 text-lg">Ingeniería de Sistemas UAB</p>
        </div>

        <div class="rounded-2xl bg-slate-900/70 p-6 shadow">
          <h2 class="text-sm uppercase tracking-wide text-slate-300/80">Materia</h2>
          <p class="mt-2 text-lg">Tecnologías de Internet</p>
        </div>

        <div class="rounded-2xl bg-slate-900/70 p-6 shadow">
          <h2 class="text-sm uppercase tracking-wide text-slate-300/80">Docente</h2>
          <p class="mt-2 text-lg">Víctor Hugo Pérez Rojas</p>
        </div>

        <div class="rounded-2xl bg-slate-900/70 p-6 shadow sm:col-span-2">
          <h2 class="text-sm uppercase tracking-wide text-slate-300/80">Fecha</h2>
          <p class="mt-2 text-lg">{{ now()->format('d/m/Y') }}</p>
        </div>
      </section>

      <footer class="mt-12 text-sm text-slate-200/90 text-center">
        <a href="/admin" class="inline-block rounded-xl bg-sky-600 px-4 py-2 hover:bg-sky-500">Administrar con Voyager</a>
      </footer>
    </div>
  </div>
</body>
</html>
