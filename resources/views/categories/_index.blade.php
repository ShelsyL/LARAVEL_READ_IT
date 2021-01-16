{{--
./resources/view/categories/_index.blade.php
Variables disponibles
--}}


<div class="categories">
  <h3>Categories</h3>
  @foreach ($categories as $categorie)
    <li>
      <a href="#">{{ $categorie->name }}
        <span class="ion-ios-arrow-forward"></span>
      </a>
    </li>
  @endforeach
</div>
