<template>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Se Connecter</div>

            <div class="card-body">

                <form action="/action_page.php">
                    <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Votre Email" name="email">
                    </div>
                    <div class="form-group">
                    <label for="password">Mot de Passe</label>
                    <input type="password" class="form-control" id="password" placeholder="Votre password" name="password">
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="remember">se souvenir</label>
                    </div>
                    <button type="submit" class="btn btn-danger">valider</button>
                </form>
                
            </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
    
}
</script>