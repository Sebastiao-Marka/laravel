<x-layout>

    <main class="py-10">

    </main>
<h1 class="container mx-auto px-4 py-8">Faça login</h1>
<section class="container mx-auto px-4 py-8 mt-4">
    <form action="/login" method="POST">
        @csrf
        <input type="email" name="email" placeholder="seuemail@dominio.com" class="bg-white block border border-black-400 p-2 w-600 mb-4">
        <input type="password" name="password" placeholder="*********" class="bg-white btn accordion-button  block border border-black-400 p-2 w-300 mb-4">
        <button type="submit" class="bg-white hover:bg-blue-700 text-black  font-semibold py-2 px-4 rounded border border-black p-2 w-300 mb-4">Entrar</button>
    </form>
  
</section>
</x-layout> 