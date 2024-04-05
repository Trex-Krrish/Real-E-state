<form action="{{ route('sell.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <label for="propertyType">Property Type:</label><br>
    <select id="propertyType" name="propertyType" required>
        <option value="">Select Property Type</option>
        <option value="House">House</option>
        <option value="Apartment">Apartment</option>
        <option value="Condo">Condo</option>
        <!-- Add more options as needed -->
    </select><br><br>

    <label for="sellingType">Selling Type:</label><br>
    <select id="sellingType" name="sellingType" required>
        <option value="sale">For Sale</option>
        <option value="rent">For Rent</option>
    </select><br><br>

    <label for="squareFootage">Square Footage:</label><br>
    <input type="number" id="squareFootage" name="squareFootage" required><br><br>


    <label for="bedrooms">Number of Bedrooms:</label><br>
    <input type="number" id="bedrooms" name="bedrooms" required><br><br>

    <label for="bathrooms">Number of Bathrooms:</label><br>
    <input type="number" id="bathrooms" name="bathrooms" required><br><br>

    <label for="yearBuilt">Year Built:</label><br>
    <input type="number" id="yearBuilt" name="yearBuilt" required><br><br>

    <label for="propertyDescription">Property Description:</label><br>
    <textarea id="propertyDescription" name="propertyDescription" rows="4" cols="50" required></textarea><br><br>

    <label for="streetAddress">Street Address:</label><br>
    <input type="text" id="streetAddress" name="streetAddress" required><br><br>

    <label for="city">City:</label><br>
    <input type="text" id="city" name="city" required><br><br>

    <label for="state">State:</label><br>
    <input type="text" id="state" name="state" required><br><br>

    <label for="zip">ZIP Code:</label><br>
    <input type="text" id="zip" name="zip" required><br><br>


    <!-- Add more location fields as needed -->

    <label for="listingPrice">Listing Price:</label><br>
    <input type="number" id="listingPrice" name="listingPrice" required><br><br>

    <!-- Add more pricing fields as needed -->

    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="phone">Phone:</label><br>
    <input type="tel" id="phone" name="phone"><br><br>

    <!-- Add more contact fields as needed -->

    <label for="propertyPhotos">Property Photos:</label><br>
    <input type="file" id="propertyPhotos" name="propertyPhotos[]" accept="image/*" multiple><br><br>

    <input type="submit" value="Submit">
</form>
@error('propertyType')
    <div>{{ $message }}</div>
@enderror
@error('bedrooms')
    <div>{{ $message }}</div>
@enderror
@error('bathrooms')
    <div>{{ $message }}</div>
@enderror
@error('yearBuilt')
    <div>{{ $message }}</div>
@enderror
@error('propertyDescription')
    <div>{{ $message }}</div>
@enderror
@error('streetAddress')
    <div>{{ $message }}</div>
@enderror
@error('city')
    <div>{{ $message }}</div>
@enderror
@error('state')
    <div>{{ $message }}</div>
@enderror
@error('zip')
    <div>{{ $message }}</div>
@enderror
@error('listingPrice')
    <div>{{ $message }}</div>
@enderror

@error('name')
    <div>{{ $message }}</div>
@enderror
@error('email')
    <div>{{ $message }}</div>
@enderror
@error('phone')
    <div>{{ $message }}</div>
@enderror
@error('propertyPhotos')
    <div>{{ $message }}</div>
@enderror
@error('specialInstructions')
    <div>{{ $message }}</div>
@enderror
@error('propertyPhotos')
    <div>{{ $message }}</div>
@enderror
