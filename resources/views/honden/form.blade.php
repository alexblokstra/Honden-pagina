<div>
        <label for="name">Naam</label>
        <input type="text" name="name" autocomplete="off" value="{{ old('name') ?? $dog->name }}">
        @error('name') <p style="color: red;" >{{ $message }}</p> @enderror
</div>

<div>
        <label for="age">Leeftijd</label>
        <input type="text" name="age" autocomplete="off" value="{{ old('age') ?? $dog->age }}">
        @error('age') <p style="color: red;" >{{ $message }}</p> @enderror
</div>

<div>
        <label for="gender">Geslacht</label>
        <input type="text" name="gender" autocomplete="off" value="{{ old('gender') ?? $dog->gender }}">
        @error('gender') <p style="color: red;" >{{ $message }}</p> @enderror
</div>

<div>
        <label for="description">Beschrijving</label>
        <input type="text" name="description" autocomplete="off" value="{{ old('description') ?? $dog->description }}">
        @error('description') <p style="color: red;" >{{ $message }}</p> @enderror
</div>

@csrf