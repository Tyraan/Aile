<div>
    <h4> 添加城市标签</h4>
    <div class="input-group">
        <input type="text" class="form-control" placeholder="输入城市名" name="city">
        <span class="input-group-btn">
        <button class="btn btn-default btn-primary" type="button" onclick="addNewCity()">点击添加新城市</button>
      </span>
    </div>

    <div class="row" name="cities">
        @if( isset($cities))
            @foreach($cities as $city)
        <div class="col-md-3" id="cityDiv{{$city->id}}">
            <h4>{{ $city->name }}<button class="label label-success" onclick="deleteCity({{ $city->id }})">点击删除</button></h4>

        </div>
            @endforeach
        @endif
    </div>
</div>