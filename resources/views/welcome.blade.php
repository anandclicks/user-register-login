    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <div class="h-[100vh] w-[100vw]  flex items-center justify-center">
        <form  onsubmit="createUser(event)" id="signUpForm" class="flex flex-col  gap-2 shadow-2xl p-4">
            <h2 class="text-xl">Sign Up</h2>
            @csrf
            <input name="name" class="text h-[40px] w-[350px] border-[1px] outline-0 border-stone-400 p-2 rounded-sm text-sm" placeholder="Name" type="text">
            <input name="email" class="text h-[40px] w-[350px] border-[1px] outline-0 border-stone-400 p-2 rounded-sm text-sm" placeholder="Email" type="text">
            <input name="number" class="text h-[40px] w-[350px] border-[1px] outline-0 border-stone-400 p-2 rounded-sm text-sm" placeholder="Number" type="text">
            <input name="password" class="text h-[40px] w-[350px] border-[1px] outline-0 border-stone-400 p-2 rounded-sm text-sm" placeholder="Password" type="text">
          <div>
            <input name="role" id="admin" type="radio" value="1"> <label for="admin">Admin</label>
            <input name="role" id="user" type="radio" value="2"> <label for="user">User</label>
          </div>
            <button type="submit" class="h-[40px] w-[100%] cursor-pointer bg-blue-700 rounded-sm text-white flex justify-center items-center">Sumit</button>
        </form>
    </div>


    <script>
        function createUser(evt){
            evt.preventDefault()
            const form = $("#signUpForm")
            const formData = new FormData(form[0])

            $.ajax({
                url :"/create-user",
                type : 'post',
                data : formData,
                processData : false,
                contentType : false,
                success : function(res){
                    if(res.success){
                        console.log(res.data)
                        window.location.href = '/login'
                    }
                },
                error : function(xhr){
                    console.log(xhr)
                }
            })
      
        }
    </script>