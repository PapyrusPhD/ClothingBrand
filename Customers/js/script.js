function populateCities() {
    const regionSelect = document.getElementById("region");
    const citySelect = document.getElementById("city");

    // Clear the city dropdown
    citySelect.innerHTML = ''; // Remove the default "Select City" option

    const selectedRegion = regionSelect.value;

    // Define city options based on selected region
    const cityOptions = {
        'NCR': ['Caloocan', 'Las Piñas', 'Makati', 'Malabon', 'Mandaluyong', 'Manila', 'Marikina', 'Muntilupa', 'Navotas', 'Parañaque', 'Pasay', 'Pasig', 'Pateros', 'Quezon City', 'San Juan', 'Taguig', 'Valenzuela'],
        'CAR': ['Baguio', 'Benguet', 'Kalinga'],
        'Region III': ['Angeles City', 'Aurora', 'Bataan', 'Bulacan', 'Nueva Ecija', 'Olongapo', 'Pampanga', 'Tarlac', 'Zambales'],
        // Add more regions and cities as needed
    };

    if (selectedRegion in cityOptions) {
        // Populate the city dropdown based on the selected region
        cityOptions[selectedRegion].forEach(city => {
            const option = document.createElement("option");
            option.value = city;
            option.text = city;
            citySelect.appendChild(option);
        });
    }
}
