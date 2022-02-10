@include('include.header')

<style>
    input:focus,textarea:focus
    {
        outline: none!important;
    }
    input
    {
        padding: 10px!important;
    }
</style>

<div class="mt-10 sm:mt-0" style="width:1000px;height:440px;position: absolute;left:65%!important;top:50%!important;transform:translate(-50%,-50%)!important">
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="mt-5 md:mt-0 md:col-span-2">
        <form action="contactMail" method="POST"> @csrf
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-6">
                  <label for="first-name" class="block text-sm font-medium text-gray-700">Name</label>
                  <input type="text" name="name" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
  
                <div class="col-span-6 sm:col-span-6">
                  <label for="email-address" class="block text-sm font-medium text-gray-700">Email address</label>
                  <input type="email" name="email" id="email-address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
  
  
                <div class="col-span-6 sm:col-span-6">
                    <label for="country" class="block text-sm font-medium text-gray-700">Detail</label>
                  <textarea name="data" id="data" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                  </div>
               
              </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>


@include('include.footer')
