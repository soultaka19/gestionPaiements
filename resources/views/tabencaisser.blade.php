<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container mt-2">
    <p class="text-start "><a href="{{'dashboard'}}" class="btn  fs-1 text-success">dashboard</a>/liste encaissement</p>

    <p class="text-end "><a href="{{'addencaisser'}}" class="btn btn-outline-primary fs-3">Ajouter un nouveau encaissement</a></p>
</div>
<main class="">
    <section class="section ">
        <center>
            <div class="container">
                <div class="card o-hidden border-0 shadow-lg my-1" style="">
                    <div class="container" style="">
                        <div class="row">
                            <table class="table table-striped">
                                <thead>                                   
                                    <th>id caissier </th>
                                    <th>id etudiant</th>
                                    <th>nom etudiant</th>
                                    <th>prenom etudiant</th>
                                    <th>nom tuteur </th>
                                    <th>date debut</th>
                                    <th>date fin</th>
                                    <th>heure encaissement</th>
                                    <th>modifier</th>
                                    <th>supprimer</th>
                                </thead>
                                <tbody>
                                    @foreach($tabencaisser as $encaissement)
                                    <tr>
                                        <td>{{ $encaissement['caissier_id']}}</td>
                                        <td>{{ $encaissement['etudiant_id']}}</td>
                                        <td>{{ $encaissement['nom_etudiant']}}</td>
                                        <td>{{ $encaissement['prenom_etudiant']}}</td>
                                        <td>{{ $encaissement['nomTuteur_etudiant']}}</td>
                                        <td>{{ $encaissement['dateDebut']}}</td>
                                        <td>{{ $encaissement['dateFin']}}</td>
                                        <td>{{ $encaissement['heureEncaisse']}}</td>

                                        <td>
                                            <a href="{{'editencaisser/'.$encaissement->id}}" class="btn btn-outline-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                </svg>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{'deleteencaisser/'.$encaissement->id}}" class="btn btn-outline-danger" onclick="return confirm('Etes-vous sures de vouloir supprimer {{$encaissement->id}} de la liste des encaissements?')">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                                </svg>
                                            </a>
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </center>
    </section>
</main>