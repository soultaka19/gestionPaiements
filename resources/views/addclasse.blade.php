
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
                                    <form action="{{route('postclasse')}}" method="POST">
                                        @csrf
                                        <label for="nomClasse" class="form-label"  >nom classe:</label>
                                        <input id="nomClasse" class="form-control mt-1 w-full" type="text" name="nomClasse" required autofocus />

                                        <label for="fraisInscription" class="form-label"  >frais inscription:</label>
                                        <input id="fraisInscription" class="form-control mt-1 w-full" type="number" name="fraisInscription" required autofocus />

                                        <label for="mensualite" class="form-label"  >mensualite:</label>
                                        <input id="mensualite" class="form-control mt-1 w-full" type="number" name="mensualite" required autofocus />

                                        <label for="fraisTenue" class="form-label"  >frais tenue:</label>
                                        <input id="fraisTenue" class="form-control mt-1 w-full" type="number" name="fraisTenue" required autofocus />                                        

                                        <label for="fraisAmicale" class="form-label"  >frais amicale:</label>
                                        <input id="fraisAmicale" class="form-control mt-1 w-full" type="number" name="fraisAmicale" required autofocus />                                         
                                        
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
