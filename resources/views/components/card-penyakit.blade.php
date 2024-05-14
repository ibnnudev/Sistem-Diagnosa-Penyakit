@props(['title', 'description', 'solutions', 'id'])

<div class="">
    <div class="card-header bg-success mb-4 rounded-top">
        <h5 class="text-center text-white py-2 font-alt">
            {{ $title }}
        </h5>
    </div>
    <div class="card-body">
        <div style="text-align: justify">
            <p class="font-alt">{{ $description }}</p>
        </div>
        <div class="collapse mb-3 font-alt" id="collapseWidthExample{{ $id }}" style="text-align: justify">
            {!! $solutions !!}
        </div>
        <button class="btn btn-success mt-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseWidthExample{{ $id }}" aria-expanded="false"
            aria-controls="collapseWidthExample" onclick="expandText('{{ $id }}')">Cara Pengendalian</button>
    </div>
</div>
