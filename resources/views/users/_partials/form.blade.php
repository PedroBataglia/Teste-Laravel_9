@csrf
<input class="md:w-1/6 bg-gray-200 appearance-nome" type="text" name="name" placeholder="Nome: " value="{{ $user->name ?? old('name')}}">
<input class="md:w-1/6 bg-gray-200 appearance-nome" type="email" name="email" placeholder="E-mail: " value="{{ $user->email ?? old('email')}}">
<input class="md:w-1/6 bg-gray-200 appearance-nome" type="password" name="password" placeholder="password: ">
<button class="px-1 py-2 shadow bg-blue-500 focus:shadow-outline focus:outline-nome text-white rounded-full" type="submit">
    Enviar
</button>
