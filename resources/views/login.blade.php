<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<div class="h-[100vh] w-[100vw]  flex items-center justify-center">
    <form  onsubmit="loginUser(event)" id="logiNForm" class="flex flex-col  gap-2 shadow-2xl p-4">
        <h2 class="text-xl">Login Up</h2>
        @csrf
        <input name="email" class="text h-[40px] w-[350px] border-[1px] outline-0 border-stone-400 p-2 rounded-sm text-sm" placeholder="Email" type="text">
        <input name="password" class="text h-[40px] w-[350px] border-[1px] outline-0 border-stone-400 p-2 rounded-sm text-sm" placeholder="password" type="text">
      <div>
      </div>
        <button type="submit" class="h-[40px] w-[100%] cursor-pointer bg-blue-700 rounded-sm text-white flex justify-center items-center">Login</button>
    </form>
</div>

<script>
  function loginUser(evt){
    evt.preventDefault();
    const formData = $("#logiNForm");
    const finalData = new FormData(formData[0])

    $.ajax({
      url : "/login-user",
      type : 'post',
      data : finalData,
      processData : false,
      contentType : false,
      success : function(res){
        if(res.success){
          window.open('/createPost', '_self')
        }
      },
      error : function(xhr){
        console.log(xhr.error)
      }
    })
  }
</script>
