<x-main>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center display-2 ">Lasciaci un messaggio</h1>
        </div>
    </div>
    <div class="row justify-content-center ">
        <div class="col-6">
            <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Nome e Cognome</label>
                  <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px"></textarea>
                    <label for="floatingTextarea2">Lasciaci un messaggio</label>
                  </div>
                <button type="submit" class="btn btn-primary mt-2 ">Submit</button>
              </form>
        </div>
    </div>
</div>



</x-main>