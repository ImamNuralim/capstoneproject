const container = document.getElementById("container");
const surahdetails = document.getElementById("surah");
const loader = document.getElementById("loader");
const englishName = document.getElementById("englishName");
const arabicName = document.getElementById("arabicName");
const revelation = document.getElementById("revelation");
const englishNameTranslation = document.getElementById("englishNameTranslation");

// Fetching Lists of Surah
const getSurahLists = () => {
  let url = "https://api.alquran.cloud/v1/surah";
  loader.style.display = "block";

  fetch(url)
    .then(response => response.json())
    .then(response => {
      loader.style.display = "none";

      const surahListHTML = response.data.map(data => {
        const { number, englishName, name, revelationType, englishNameTranslation, numberOfAyahs } = data;
        return `<div class="card px-3 bg-light shadow-sm text-dark-emphasis">
          <div class="card-body p-0 pt-2">
            <h5 class="text-dark-emphasis">Chapter-${number}</h5>
            <div class="d-flex justify-content-between">
              <h6>${englishName}</h6>
              <h6>${name}</h6>
            </div>
            <div class="d-flex justify-content-between">
              <p>${revelationType}</p>
              <p>${englishNameTranslation}</p>
            </div>
            <div class="d-flex justify-content-between align-items-baseline">
              <p class="text-secondary">Verses: ${numberOfAyahs}</p>
              <button class="btn btn-outline-primary btn-sm" onclick="getSurahNumber(${number})">Read Now</button>
            </div>
          </div>
        </div>`;
      }).join("")

      container.innerHTML = surahListHTML;
    })
    .catch(err => console.error(err));
};

getSurahLists();


// Fetching data for a single surah on click
const getSurahNumber = (number) => {
  let url = `https://api.alquran.cloud/v1/surah/${number}/editions/quran-uthmani,en.sahih`;

  container.innerHTML = "";
  loader.style.display = "block";  // Show loader while fetching data

  fetch(url)
    .then(response => response.json())
    .then(response => {
      const data = response.data;

      const arabicVerses = data[0].ayahs;
      const translationsVerses = data[1].ayahs;

      document.title = `${data[0].englishName} - ${data[0].name}`;  // Change title of the Surah
      loader.style.display = "none";  // Hide loader when data is fetched

      englishName.innerHTML = `Surah ${data[0].englishName}`;
      arabicName.innerHTML = data[0].name;
      revelation.innerHTML = data[0].revelationType;
      englishNameTranslation.innerHTML = data[0].englishNameTranslation;

      const surahVersesHTML = arabicVerses.map((arabic, index) => {
        const translation = translationsVerses[index];

        return `<li class="list-group-item bg-light">
          <span>[${data[0].number}:${arabic.numberInSurah}]</span>
          <p class="verse pt-1">${arabic.text}</p>
          <p>${translation.text}</p>
        </li>`;
      }).join("");

      surahdetails.innerHTML = surahVersesHTML;
    })
    .catch(err => console.error(err));
};
