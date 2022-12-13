
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container mt-2">
    <p class="text-start "><a href="{{'dashboard'}}" class="btn  fs-1 text-success">dashboard</a>/nouvelle marque</p>

    <p class="text-start fs-4">Ajouter une nouvelle Classe</p>
</div>
<main class="">
    <section class="section ">
        <center>
            <div class="container">
                <div class="card o-hidden border-0 shadow-lg my-1" style="width:600px;">
                    <div class="container" style="width:90%;">
                        <br>
                        <div class="row">
                            <div class="container" style="width:400px;">
                                <br>
                                <div class="mb-3">
                                    <form action="{{route('postcaissier')}}" method="POST">
                                        @csrf
                                        <label for="nomCaisse" class="form-label"  >nom caissier:</label>
                                        <input id="nomCaisse" class="form-control mt-1 w-full" type="text" name="nomCaisse" required autofocus />

                                        <label for="prenomCaisse" class="form-label"  >prenom caissier:</label>
                                        <input id="prenomCaisse" class="form-control mt-1 w-full" type="text" name="prenomCaisse" required autofocus />

                                        <label for="niveau" class="form-label"  >niveau:</label>
                                        <select name="niveau" id="niveau" class="form-control">
                                                <option value="plein">plein</option>
                                                <option value="plein">intermediaire</option>
                                                <option value="plein">debutant</option>
                                        </select>
                                        
                                        
                                        <button type="submit" class="btn btn-primary mt-2">sauvegarder</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </center>
    </section>
</main>
