<header class="bg-white border-bottom border-2 flex items-center justify-between p-4">
   <div>Logo</div>

   <div>GitHub</div>

   @auth
      <form action="{{route('auth.logout')}}" method="post">
      @csrf


      <button type="submit" class="bg-white p-2 border-2">Sair</button>
      </form>
      
   @endauth

   @guest
       <a href="{{route('site.login')}}" class="bg-white p-2 border-2">Entrar</a>
   @endguest
</header>