function cariwisata() {
	// body...
	var wisata = (document.fform.iwisata.value);
	var harga = 0.0;

	if (wisata == "Pantai Menganti") {
		harga = 10000;
	} else if ( wisata == "Bukit Pentulu Indah Karangsambung") {
		harga = 7000;
	} else if ( wisata == "Curug Silancur") {
		harga = 5000;
	}

	document.fform.oharga.value = eval(harga);
}