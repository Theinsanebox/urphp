<link rel="stylesheet" href="{{asset('public/assets/css/tailwind.css')}}">
<link rel="stylesheet" href="{{asset('public/assets/css/myapp.css')}}">
<link rel="stylesheet" href="{{asset('public/assets/css/myapp.css')}}">
<link rel="stylesheet" href="{{asset('public/assets/css/bootstrapcss.css')}}">

<nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <!-- Mobile menu button-->
          <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <!--
              Icon when menu is closed.
  
              Heroicon name: outline/menu
  
              Menu open: "hidden", Menu closed: "block"
            -->
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <!--
              Icon when menu is open.
  
              Heroicon name: outline/x
  
              Menu open: "block", Menu closed: "hidden"
            -->
            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
          <div class="flex-shrink-0 flex items-center">
            {{-- <img class="block lg:hidden h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow"> --}}
            {{-- <img class="hidden lg:block h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg" alt="Workflow"> --}}
            <h2 style="color: white"></h2>
          </div>
          <div class="hidden sm:block sm:ml-6">
            <div class="flex space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->

          <?php $nvar1 = DB::select("SELECT * FROM `role` WHERE email='".session('useremail')."'"); ?>

      @foreach($nvar1 as $nvarx)

      @if($nvarx->dashboard == 1)
      <a href="{{url('dashboard')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Dashboard</a>
      @else
      @endif

              @if($nvarx->setting == 1)
              <a href="{{url('setting')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Setting</a>
              @else
              @endif
              
              @if($nvarx->user == 1)
              <a href="{{url('user')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">User</a>
              @else
              
              @endif

              @if($nvarx->about == 1)
              <a href="{{url('about')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">About</a>
              @else
              
              @endif

              @if($nvarx->contact == 1)
              <a href="{{url('contact')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contact</a>
              @else
              
              @endif

              @if($nvarx->news == 1)
              <a href="{{url('news')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Activity</a>
              @else
              
              @endif

              @if($nvarx->support == 1)
              <a href="{{url('support')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">support</a>
              @else
              
              @endif
      @endforeach

  
            
            </div>
          </div>
        </div>
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <div style="color:white;">{{session('useremail')}}</div>
          <div class="ml-3 relative">
            <span>
              <a href="{{url('logOutuser')}}" style="color: white;font-weight:600;font-size:20px;" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Log out</a>
            </span>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Mobile menu, show/hide based on menu state. -->
    
  </nav>
  <script src="{{asset('public/assets/js/tailwind.js')}}"></script>
  <script src="{{asset('public/assets/js/tailwind2.js')}}"></script>
  <script src="{{asset('public/assets/js/myapp.js')}}"></script>

  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>


