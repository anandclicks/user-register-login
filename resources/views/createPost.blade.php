<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<div class="h-[100vh] w-[100vw]  flex items-center justify-center">
  @dd($user)
    <form  onsubmit="createUser(event)" id="signUpForm" class="flex flex-col  gap-2 shadow-2xl p-4">
        <h2 class="text-xl">Create Post</h2>
        @csrf
        <input name="title" class="text h-[40px] w-[350px] border-[1px] outline-0 border-stone-400 p-2 rounded-sm text-sm" placeholder="Enter Title" type="text">
        <input name="deps" class="text h-[40px] w-[350px] border-[1px] outline-0 border-stone-400 p-2 rounded-sm text-sm" placeholder="Enter Deps" type="text">
        <input name="image" class="text h-[40px] w-[350px] border-[1px] outline-0 border-stone-400 p-2 rounded-sm text-sm" placeholder="Enter Image" type="file">
        <button type="submit" class="h-[40px] w-[100%] cursor-pointer bg-blue-700 rounded-sm text-white flex justify-center items-center">Sumit</button>
    </form>
</div>

