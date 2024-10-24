<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edu Path</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/styles.css">
  </head>
  <body>
    
    {{-- Body --}}
    <main>
        <div class="container login-container">
        <div class="edu-path">
            <a href="/"><img src="../../images/edu-path.jpg" alt=""></a>
        </div>
        <div class="form-container">
            <form action="{{ route('login_to_system') }}" method="post">
              @csrf
              <div class="form-el">
                  <div class="label">Email</div>
                  <input type="text" class="form-control" name="email" id="email">
              </div>
              <div class="form-el">
                  <div class="label">Password</div>
                  <input type="password" class="form-control" name="password" id="password">
              </div>
              <button type="submit" class="btn btn-primary">Masuk</button>
            </form>
            <p>Belum mempunyai akun? <a href="register">Daftar</a></p>
        </div>
        <div class="edu-path">
            <a href="/"><img src="../../images/edu-path.jpg" alt=""></a>
            <p>EduPath adalah platform kursus online yang dirancang untuk membantu pengguna mengakses pengetahuan dan keterampilan baru dengan mudah dan fleksibel</p>
        </div>
        </div>
    </main>
    {{-- End of body --}}

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../../js/scripts.js"></script>
    @include('sweetalert::alert')
  </body>
</html>