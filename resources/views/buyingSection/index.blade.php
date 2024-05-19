<!DOCTYPE html>
<html>

<head>
    <title>Real Estate Website</title>
</head>

<body>
    <h1>Find Your Dream Home</h1>
    <form action="{{ route('buy.search') }}" method="POST">
        @csrf
        @method('POST')
        <label for="zipcode">Enter Zipcode:</label>
        <input value="{{ $zipcode }}" type="text" id="zipcode" name="zipcode">
        <button type="submit">Search</button>
    </form>
    <div class="property-listings">

        @if ($properties->count() > 0)
            <h2>Properties Available in {{ $zipcode }} for </h2>
            <ul>
                @foreach ($properties as $property)
                    <li>
                        <h3>{{ $property->property_type }}</h3>
                        <p>{{ $property->description }}</p>
                        <p>{{ $property->listing_price }}</p>

                        @if ($property->photos->count() > 0)
                            <div class="property-photos">
                                @foreach ($property->photos as $photo)
                                    <img src="{{ asset('storage/' . $photo->path) }}" alt="Property Photo"
                                        style="width:200px; height:auto;">
                                @endforeach
                            </div>
                        @else
                            <img src="default-image.jpg" alt="No Photo Available" style="width:200px; height:auto;">
                        @endif
                    </li>
                @endforeach
            </ul>
        @else
            <p>No properties available in {{ $zipcode }}.</p>
        @endif

    </div>
</body>

</html>
