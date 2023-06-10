
<h1>ajouter une nouvelle annonce</h1>

<form action="{{ route('car.store') }}" method="POST">
@csrf
<label for="">vitesse</label>
    <input type="number" name="speed">
    <label for="">prix</label>
    <input type="text" name="pricing">
    <label for="">modele</label>
    <input type="text" name="model">
<button type="submit">creer</button>
</form>
