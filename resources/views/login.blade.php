<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('/images/f.jpg');
            background-size: cover;
            background-position: center;
        }

        form {
            max-width: 400px;
            background-color: #fff;
            border-radius: 8px;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 6px 10px rgba(0, 0, 0, 0.1);
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #d2d6dc;
            border-radius: 0.25rem;
            margin-bottom: 1rem;
        }

        button[type="submit"] {
            background-color: #2563eb;
            color: #fff;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <form method="POST" action="{{route('login') }}">
        @csrf
        <h1 class="text-center text-2xl font-bold mb-4 text-black">Login</h1>
        <div>
            <label class="block text-gray-700 font-bold mb-2" for="email">Email</label>
            <input id="email" placeholder='Enter Email' type="email" name="email" value="{{ old('email') }}" required autofocus>
            @error('email')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label class="block text-gray-700 font-bold mb-2" for="password">Password</label>
            <input id="password" placeholder='Enter Password' type="password" name="password" required>
            @error('password')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex items-center justify-between">
            <button type="submit">Login</button>
            <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{url('/forgot-password')}}">Forgot Password?</a>
        </div>
        <br>
        @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
    </form>

</body> 

</html>