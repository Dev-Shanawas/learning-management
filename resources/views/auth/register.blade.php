<x-nav  />

<x-header> Register </x-header>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet">

<x-main>
<form method="POST" action="/register">
@csrf
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base/7 font-semibold text-gray-900">Personal Information</h2>
        <p class="mt-1 text-sm/6 text-gray-600">Use a permanent address where you can receive mail.</p>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

          <div class="sm:col-span-3">
            <label for="firstname" class="block text-sm/6 font-medium text-gray-900">First name</label>
            <div class="mt-2">
              <x-input type="text" name="first_name" id="firstname" :value="old('first_name')" required/>
            </div>
            <x-error error="first_name" />
          </div>

          <div class="sm:col-span-3">
            <label for="lastname" class="block text-sm/6 font-medium text-gray-900">Last name</label>
            <div class="mt-2">
              <x-input type="text" name="last_name" id="lastname" :value="old('last_name')" required/>
            </div>
            <x-error error="last_name" />

          </div>

          <div class="sm:col-span-4">
            <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
            <div class="mt-2">
              <x-input type="email" name="email" id="email" :value="old('email')" required/>
            </div>
            <x-error error="email" />

          </div>

          <div class="sm:col-span-3">
            <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
            <div class="mt-2">
              <x-input type="password" name="password" id="password" :value="old('password')" required />
            </div>
            <x-error error="password" />

          </div>

          <div class="sm:col-span-3">
            <label for="password_confirmation" class="block text-sm/6 font-medium text-gray-900">Comfirm password</label>
            <div class="mt-2">
              <x-input type="password" name="password_confirmation" id="password_confirmation" :value="old('password_confirmation')" required />
            </div>
            <x-error error="password_confirmation" />

          </div>



        </div>



    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
    </div>
  </form>


</x-main>
