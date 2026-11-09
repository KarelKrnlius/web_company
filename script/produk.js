document.addEventListener("DOMContentLoaded", () => {
  const items = document.querySelectorAll(".sub-kategori li");
  const navbar = document.querySelector(".navbar");
  const navbarHeight = navbar ? navbar.offsetHeight : 0;

  items.forEach((item) => {
    item.addEventListener("click", async () => {
      const file = item.getAttribute("data-file");
      const next = item.nextElementSibling;

      // Kalau detailBox berikut item sama dengan item yang diklik → tutup dan stop
      if (next && next.classList.contains("detail-box")) {
        next.classList.remove("active");
        next.style.maxHeight = "0";
        setTimeout(() => next.remove(), 300);
        return;
      }

      // Tutup detailBox lain yang terbuka
      const activeBoxes = Array.from(document.querySelectorAll(".detail-box.active"));
      for (const box of activeBoxes) {
        box.classList.remove("active");
        box.style.maxHeight = "0";
        await new Promise(resolve => setTimeout(resolve, 300));
        box.remove();
      }

      // Tambahkan detailBox baru
      const detailBox = document.createElement("div");
      detailBox.classList.add("detail-box");
      detailBox.innerHTML = "<p class='loading'>Memuat detail...</p>";
      item.insertAdjacentElement("afterend", detailBox);

      // Tunggu layout stabil
      await new Promise(resolve => requestAnimationFrame(resolve));

      // Scroll ke item
      const itemTop = item.getBoundingClientRect().top + window.pageYOffset;
      window.scrollTo({ top: itemTop - navbarHeight, behavior: "smooth" });

      // Load konten
      const basePath = window.location.pathname.split("/").slice(0, -1).join("/");
      const filePath = `${basePath}/detail/${file}.php`;

      try {
        const res = await fetch(filePath);
        if (!res.ok) throw new Error("File tidak ditemukan.");
        const data = await res.text();

        detailBox.innerHTML = data;
        detailBox.classList.add("active");
        detailBox.style.maxHeight = detailBox.scrollHeight + "px";

        // Scroll ke detailBox setelah konten terpasang
        await new Promise(resolve => requestAnimationFrame(resolve));
        const detailTop = detailBox.getBoundingClientRect().top + window.pageYOffset;
        window.scrollTo({ top: detailTop - navbarHeight, behavior: "smooth" });

      } catch (err) {
        detailBox.innerHTML = `<p class='error'>${err.message}</p>`;
        detailBox.classList.add("active");
        detailBox.style.maxHeight = "100px";
        await new Promise(resolve => requestAnimationFrame(resolve));
        const detailTop = detailBox.getBoundingClientRect().top + window.pageYOffset;
        window.scrollTo({ top: detailTop - navbarHeight, behavior: "smooth" });
      }
    });
  });
});
