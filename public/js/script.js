function getJadwalSholat() {
    fetch('https://api.myquran.com/v2/sholat/jadwal/1632/2024-06-23')
    .then(response => response.json())
    .then(data => {
        const jadwal = data.jadwal.data;
        document.querySelector('.imsak').textContent = jadwal.imsak;
        // document.querySelector('.subuh').textContent = jadwal.subuh;
        // document.querySelector('.dzuhur').textContent = jadwal.dzuhur;
        // document.querySelector('.ashar').textContent = jadwal.ashar;
        // document.querySelector('.maghrib').textContent = jadwal.maghrib;
        // document.querySelector('.isya').textContent = jadwal.isya;
    });


}

getJadwalSholat();
