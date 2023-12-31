<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Restaurants</title>
    <link rel="icon" href="{{ asset('image/cutlery.png') }}" type="image/png">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio"></script>
    <script src="https://kit.fontawesome.com/59074ffc1b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    {{-- blade-formatter-disable --}}
  <style type="text/tailwindcss">
    .btn {
      @apply bg-white rounded-md px-4 py-2 text-center font-medium text-slate-500 shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50 h-10;
    }

    .input {
      @apply shadow-sm appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none rounded-md border-slate-300;
    }

    .filter-container {
      @apply mb-4 flex space-x-2 rounded-md bg-slate-100 p-2;
    }

    .filter-item {
      @apply flex w-full items-center justify-center rounded-md px-4 py-2 text-center text-sm font-medium text-slate-500;
    }

    .filter-item-active {
      @apply bg-white shadow-sm text-slate-800 flex w-full items-center justify-center rounded-md px-4 py-2 text-center text-sm font-medium;
    }

    .diner-item {
      @apply text-sm rounded-md bg-white p-4 leading-6 text-slate-900 shadow-md shadow-black/5 ring-1 ring-slate-700/10;
    }

    .diner-title {
      @apply text-lg font-semibold text-slate-800 hover:text-slate-600;
    }

    .diner-address {
      @apply block text-slate-600;
    }

    .diner-rating {
      @apply text-sm font-medium text-slate-700;
    }

    .diner-review-count {
      @apply text-xs text-slate-500;
    }

    .empty-diner-item {
      @apply text-sm rounded-md bg-white py-10 px-4 text-center leading-6 text-slate-900 shadow-md shadow-black/5 ring-1 ring-slate-700/10;
    }

    .empty-text {
      @apply font-medium text-slate-500;
    }

    .reset-link {
      @apply text-slate-700 no-underline;
    }

    .star.selected {
        color:#f6d813;
    }
  </style>
  {{-- blade-formatter-enable --}}
</head>

<body class="container mx-auto mt-10 mb-10 max-w-3xl">
    @yield('content')
</body>

</html>
