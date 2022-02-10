@include('include.header')

{{-- <?php// $nvar1 = DB::select("SELECT * FROM `role` WHERE email='".session('email')."'"); ?> --}}

@foreach($newDT as $x)
<ol class="border-l border-gray-300">
  <li>
    <div class="flex flex-start items-center pt-3">
      <div class="bg-gray-300 w-2 h-2 rounded-full -ml-1 mr-3"></div>
      <p class="text-gray-500 text-sm">{{$x->updated_at}}</p>
    </div>
    <div class="mt-0.5 ml-4 mb-6">
      <h4 class="text-gray-800 font-semibold text-xl mb-1.5"></h4>
      <p class="text-gray-500 mb-3">{{$x->name}} to {{$x->changedName}} updated by {{$x->sessionData1}}</p>
    </div>
  </li>
</ol>
@endforeach

@include('include.footer')
