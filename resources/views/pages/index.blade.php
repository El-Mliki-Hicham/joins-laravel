

@forelse ($users as $item)

<h1>{{$item->name_pro}}</h1>
<h1>{{$item->id}}</h1>
<h1>{{$item->name}}</h1>
@empty
    
@endforelse


    
