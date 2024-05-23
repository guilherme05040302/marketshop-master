<!-- Menu MarketShop -->
<!-- Menu Celular -->
<div class="navbar bg-yellow-300">
  <div class="flex-1">
    <a class="btn btn-ghost text-xl text-black">MarketShop</a>
  </div>
  <div class="flex-none gap-2">
    <div class="form-control">
      <input type="text" placeholder="Pesquisar" class="input input-bordered w-24 md:w-auto" />
    </div>
    <div class="dropdown dropdown-end">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full">
          <img alt="Tailwind CSS Navbar component" src="https://static.vecteezy.com/ti/vetor-gratis/p3/11186876-simbolo-de-foto-de-perfil-masculino-vetor.jpg" />
        </div>
      </div>
      <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
        <li>
          <a class="justify-between">
            Perfil
            <span class="badge">Novo</span>
          </a>
        </li>
        <li><a>Configurações</a></li>
        <li><a>Sair</a></li>
      </ul>
    </div>
  </div>
</div>
<!-- Segundo Menu -->
<div class="navbar bg-yellow-300">
  <div class="navbar-start">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
      </div>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
         <li>
          <a>Categorias</a>
          <ul class="p-2">
            <li><a>Computadores</a></li>
            <li><a>Tecnologia</a></li>
            <li><a>Hardware</a></li>
            <li><a>Acessórios</a></li>
          </ul>
        </li>
        <li><a>Ofertas</a></li>
        <li><a>Mercado</a></li>
        <li><a>Moda</a></li>
        <li><a>Contatos</a></li>
      </ul>
    </div>
   <!-- Menu Computador -->
  </div>
  <div class="navbar-center hidden lg:flex z-40">
    <ul class="menu menu-horizontal px-1 text-black">
      <li>
        <details>
          <summary>Categoria</summary>
          <ul class="p-2">
            <li><a>Computadores</a></li>
            <li><a>Tecnologia</a></li>
            <li><a>Hardware</a></li>
            <li><a>Acessórios</a></li>
          </ul>
        </details>
      </li>
      <!-- Menu Lateral (Tela do PC) -->
      <li><a>Ofertas</a></li>
      <li><a>Mercado</a></li>
      <li><a>Moda</a></li>
      <li><a>Contato</a></li>
    </ul>
  </div>
  <div class="navbar-end">
  </div>
</div>