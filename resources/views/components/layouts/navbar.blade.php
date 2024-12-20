<div class="w-full container mx-auto px-4">

    <div class="navbar bg-base-100">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                    <li><a class="font-bold" href="{{url('product')}}" wire:navigate>Product</a></li>
                    <li><a class="font-bold" href="{{url('transaksi')}}" wire:navigate>Transaction</a></li>
                    <li><a class="font-bold" href="{{url('tagihan')}}" wire:navigate>Tagihan</a></li>
                    {{-- <li>
                        <a>Parent</a>
                        <ul class="p-2">
                            <li><a>Submenu 1</a></li>
                            <li><a>Submenu 2</a></li>
                        </ul>
                    </li> --}}
                </ul>
            </div>
            <a href="{{url('/dashboard')}}" wire:navigate class="btn btn-ghost text-xl">Admin</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a class="font-bold" href="{{url('produk')}}" wire:navigate>Produk</a></li>
                <li><a class="font-bold" href="{{url('transaksi')}}" wire:navigate>Transaksi</a></li>
                <li><a class="font-bold" href="{{url('tagihan')}}" wire:navigate>Tagihan</a></li>
                {{-- <li>
                    <details>
                        <summary>Parent</summary>
                        <ul class="p-2 w-60">
                            <li><a>Submenu 1</a></li>
                            <li><a>Submenu 2</a></li>
                        </ul>
                    </details>
                </li> --}}
            </ul>
        </div>
        <div class="navbar-end">
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img alt="Tailwind CSS Navbar component"
                            src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                    </div>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                    {{-- <li>
                        <a class="justify-between">
                            Profile
                            <span class="badge">New</span>
                        </a>
                    </li> --}}
                    <li><a href="{{url('/logout')}}" wire:navigate>Logout</a></li>
                </ul>
            </div>
        </div>
    </div>

</div>
