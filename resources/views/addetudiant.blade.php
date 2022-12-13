
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container mt-2">
    <p class="text-start "><a href="{{'dashboard'}}" class="btn  fs-1 text-success">dashboard</a>/nouveau etudiant</p>

    <p class="text-start fs-4">Ajouter un nouveau Etudiant</p>
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
                                    <form action="{{route('postetudiant')}}" method="POST">
                                        @csrf
                                        <label for="nom" class="form-label"  >nom :</label>
                                        <input id="nom" class="form-control mt-1 w-full" type="text" name="nom" required autofocus />

                                        <label for="prenom" class="form-label"  >prenom:</label>
                                        <input id="prenom" class="form-control mt-1 w-full" type="text" name="prenom" required autofocus />

                                        <label for="naissance" class="form-label"  >naissance:</label>
                                        <input id="naissance" class="form-control mt-1 w-full" type="date" name="naissance" required autofocus />

                                        <label for="lieu" class="form-label"  >lieu:</label>
                                        <input id="lieu" class="form-control mt-1 w-full" type="text" name="lieu" required autofocus />                                        

                                        <label for="sexe" class="form-label"  >sexe:</label>
                                        <input id="sexe" class="form-control mt-1 w-full" type="text" name="sexe" required autofocus />                                         

                                        <label for="diplome" class="form-label"  >diplome:</label>
                                        <input id="diplome" class="form-control mt-1 w-full" type="text" name="diplome" required autofocus />                                         
                                        
                                        <label for="nomTuteur" class="form-label"  >nom Tuteur:</label>
                                        <input id="nomTuteur" class="form-control mt-1 w-full" type="text" name="nomTuteur" required autofocus />

                                        <label for="classe_id" class="form-label"  >classe de l'etudiant:</label>
                                        <select name="classe_id" id="classe_id" class="form-control">
                                            @foreach ($classe as $une_classe)
                                                <option value="{{$une_classe->id}}">
                                                    {{$une_classe->nomClasse}}
                                                </option>
                                            @endforeach
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
