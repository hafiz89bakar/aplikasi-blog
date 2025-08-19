{{-- <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head> --}}
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplikasi Blog</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
    body { background-color: #f8f9fa; }

    /* Navbar */
    .navbar {
      background: linear-gradient(90deg, #001f5c, #003399);
      box-shadow: 0 3px 10px rgba(255, 215, 0, 0.4);
    }
    .navbar .nav-link, .navbar-brand { color: #fff !important; }
    .navbar .nav-link:hover { color: #FFD700 !important; }

    /* Header Hero */
    header {
      background: linear-gradient(rgba(0, 51, 153, 0.8), rgba(0, 31, 92, 0.9)),
                  url("https://picsum.photos/1600/600?blur=3") center/cover no-repeat;
      color: white; padding: 100px 20px; text-align: center;
    }
    header h1 {
      font-size: 3rem; font-weight: 700;
      text-shadow: 2px 2px 8px rgba(0,0,0,0.7);
    }
    .btn-fancy {
      background-color: #FFD700; color: #003399;
      font-weight: bold; padding: 12px 25px;
      border-radius: 30px; transition: all 0.3s;
      box-shadow: 0 0 15px rgba(255, 215, 0, 0.7);
    }
    .btn-fancy:hover {
      background-color: #003399; color: #FFD700;
      box-shadow: 0 0 25px rgba(255, 215, 0, 1);
    }

    /* Card Artikel */
    .card {
      border: none; transition: transform 0.3s;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .card:hover {
      transform: translateY(-7px);
      box-shadow: 0 8px 20px rgba(255, 215, 0, 0.6);
    }
    .card-title { color: #003399; font-weight: 600; }
    .card-img-top { height: 200px; object-fit: cover; }

    /* Footer */
    footer {
      background: linear-gradient(90deg, #003399, #001f5c);
      color: white; padding: 40px 0; margin-top: 50px;
    }
    footer a { color: #FFD700; text-decoration: none; }
    footer a:hover { text-decoration: underline; }
    .social-icons a {
      color: white; font-size: 22px; margin: 0 10px;
      transition: 0.3s;
    }
    .social-icons a:hover { color: #FFD700; transform: scale(1.2); }
  </style>
</head>
