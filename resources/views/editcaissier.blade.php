
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container mt-2">
    <p class="text-start "><a href="{{'dashboard'}}" class="btn  fs-1 text-success">dashboard</a>/Nouveau caissier</p>

    <p class="text-start fs-4">Ajouter un nouveau  Caissier</p>
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
                                    <form action="{{route('updatecaissier')}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$caissier->id}}"> 
                                        <label for="nomCaisse" class="form-label"  >nom caissier:</label>
                                        <input id="nomCaisse" class="form-control mt-1 w-full" type="text" name="nomCaisse" value="{{$caissier->nomCaisse}}" required autofocus />

                                        <label for="prenomCaisse" class="form-label"  >prenom caissier:</label>
                                        <input id="prenomCaisse" class="form-control mt-1 w-full" type="text" name="prenomCaisse" value="{{$caissier->prenomCaisse}}" required autofocus />

                                        <label for="niveau" class="form-label"  >niveau:</label>
                                        <select name="niveau" id="niveau" class="form-control">
                                                <option value="{{$caissier->niveau}}" selected>{{$caissier->niveau}}</option>
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
