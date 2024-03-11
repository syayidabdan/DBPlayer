@php
    $no = 1;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- navbar start -->
    <div class="navbar bg-base-100">
        <div class="navbar-start">
          <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" /></svg>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
              <li><a>Homepage</a></li>
              <li><a>Portfolio</a></li>
              <li><a>About</a></li>
            </ul>
          </div>
        </div>
        <div class="navbar-center">
          <a class="btn btn-ghost text-xl">YOUR FAVORITE ML PLAYER</a>
        </div>
        <div class="navbar-end">
          <button class="btn btn-ghost btn-circle">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
          </button>
          <button class="btn btn-ghost btn-circle">
            <div class="indicator">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" /></svg>
              <span class="badge badge-xs badge-primary indicator-item"></span>
            </div>
          </button>
        </div>
      </div>
    <!-- navbar end -->

    <!-- table start -->
    <div class="overflow-x-auto">
        <table class="table">
          <!-- head -->
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama</th>
              <th>Tim</th>
              <th>Asal</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($player as $p)
            <tr class="hover">
              <th>{{ $no }}</th>
              <td>{{ $p ['Nama'] }}</td>
              <td>{{ $p ['Tim'] }}</td>
              <td>{{ $p ['Asal'] }}</td>
              <td class="flex gap-3"><a href="/{{ $p->id }}/edit" class="btn btn-outline btn-primary">Edit</a>
                <form action="/update/{{ $p->id }}" method="POST">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-error">Delete</button>
                </form>
              </td>
            </tr>
            @php
                $no++;
            @endphp
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="mt-5 p-2 text-center">
        <a href="/add" class="btn btn-outline btn-info">Add Player</a>
      </div>
    <!-- table end -->

    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>