
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
                                    <form action="{{route('postencaisser')}}" method="POST">
                                        @csrf
                                        <label for="caissier_id" class="form-label"  >id caissier:</label>
                                        <select name="caissier_id" id="caissier_id" class="form-control mb-3">
                                            <option value="selectionnez l'id du caissier" selected>
                                                selectionnez l'id du caissier
                                            </option>
                                            @foreach ($caissier as $une_encaisse)
                                                <option value="{{$une_encaisse->id}}">
                                                    {{$une_encaisse->id}}
                                                </option>
                                            @endforeach
                                        </select>

                                        <label for="etudiant_id" class="form-label"  >id de l'etudiant:</label>
                                        <select name="etudiant_id" id="etudiant_id" class="form-control mb-3">
                                            <option value="selectionnez l'id l'etudiant" selected>
                                                selectionnez l'id l'etudiant
                                            </option>
                                            @foreach ($etudiant as $un_etudiant)
                                                <option value="{{$un_etudiant->id}}">
                                                    {{$un_etudiant->id}}
                                                </option>
                                            @endforeach
                                        </select>  
                                        
                                        <label for="nom_etudiant" class="form-label"  >nom de l'etudiant:</label>
                                        <select name="nom_etudiant" id="nom_etudiant" class="form-control mb-3">
                                            <option value="selectionnez le nom de l'etudiant" selected>
                                                selectionnez le nom  de l'etudiant
                                            </option>
                                            @foreach ($etudiant as $un_etudiant)
                                                <option value="{{$un_etudiant->nom}}">
                                                    {{$un_etudiant->nom}}
                                                </option>
                                            @endforeach
                                        </select>  

                                        <label for="prenom_etudiant" class="form-label"  >prenom de l'etudiant:</label>
                                        <select name="prenom_etudiant" id="prenom_etudiant" class="form-control mb-3">
                                            <option value="selectionnez le prenom de l'etudiant" selected>
                                                selectionnez le prenom  de l'etudiant
                                            </option>
                                            @foreach ($etudiant as $un_etudiant)
                                                <option value="{{$un_etudiant->prenom}}">
                                                    {{$un_etudiant->prenom}}
                                                </option>
                                            @endforeach
                                        </select> 
                                        
                                        <label for="nomTuteur_etudiant" class="form-label"  >nom du Tuteur de l'etudiant:</label>
                                        <select name="nomTuteur_etudiant" id="nomTuteur_etudiant" class="form-control mb-3">
                                            <option value="selectionnez le tuteur" selected>
                                                selectionnez le tuteur
                                            </option>
                                            @foreach ($etudiant as $un_etudiant)
                                                <option value="{{$un_etudiant->nomTuteur}}">
                                                    {{$un_etudiant->nomTuteur}}
                                                </option>
                                            @endforeach
                                        </select> 

                                        <label for="dateDebut" class="form-label"  >date debut :</label>
                                        <input id="dateDebut" class="form-control mt-1 w-full" type="date" name="dateDebut" required autofocus />

                                        <label for="dateFin" class="form-label"  >date fin :</label>
                                        <input id="dateFin" class="form-control mt-1 w-full" type="date" name="dateFin" required autofocus />

                                        <label for="heureEncaisse" class="form-label"  >heure encaissement:</label>
                                        <input id="heureEncaisse" class="form-control mt-1 w-full" type="number" name="heureEncaisse" required autofocus />                                        
                            
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

