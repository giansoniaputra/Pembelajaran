function getPilihanComputer() {
  const comp = Math.random();

  if (comp < 0.34) return "gajah";
  if (comp >= 0.34 && comp < 0.67) return "orang";
  return "semut";
}

function getHasil(comp, player) {
  if (player == comp) return "SERI";
  if (player == "gajah") return comp == "orang" ? "Menang!" : "Kalah!";
  if (player == "semut") return comp == "orang" ? "Kalah!" : "Menang!";
  if (player == "orang") return comp == "semut" ? "Menang!" : "Kalah!";
}

function acak() {
  const img = document.querySelector(".img-komputer");
  const gambar = ["gajah", "semut", "orang"];
  let i = 0;
  const waktuMulai = new Date().getTime();
  setInterval(function () {
    if (new Date().getTime() - waktuMulai > 1000) {
      clearInterval;
      return;
    }
    img.setAttribute("src", "img/" + gambar[i++] + ".png");
    if (i == gambar.length) {
      i = 0;
    }
  }, 100);
}

const pilihan = document.querySelectorAll("li img");

pilihan.forEach(function (item) {
  item.addEventListener("click", function () {
    const pKomputer = getPilihanComputer();
    const pOrang = item.className;

    const hasil = getHasil(pKomputer, pOrang);
    acak();

    setTimeout(function () {
      const img = document.querySelector(".img-komputer");
      img.setAttribute("src", "img/" + pKomputer + ".png");

      const info = document.querySelector(".info");
      info.innerHTML = hasil;
    }, 1000);
  });
});
