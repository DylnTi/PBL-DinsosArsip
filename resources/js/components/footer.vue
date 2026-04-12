<template>
  <footer class="footer">
    <div class="container">

      <!-- Kiri -->
      <div class="section">
        <h3>Sistem Arsip Digital</h3>
        <p>
          Platform digital untuk pengelolaan arsip dokumen pemerintahan
          yang aman, efisien, dan terintegrasi.
        </p>
      </div>

      <!-- Tengah -->
      <div class="section">
        <h3>Sistem Arsip Digital</h3>

        <div class="item">
          <span>📍</span>
          <p>Jl. xxxx No. 123, Kota, Provinsi Kode pos</p>
        </div>

        <div class="item">
          <span>📞</span>
          <p>(0276) 321047</p>
        </div>

        <div class="item">
          <span>✉️</span>
          <p>dinsos@boyolali.go.id</p>
        </div>

        <div class="item">
          <span>🕒</span>
          <p>
            Senin - Kamis: xx.xx - xx.xx <br>
            Jumat: xx.xx - xx.xx <br>
            Sabtu - Minggu: Tutup
          </p>
        </div>
      </div>

      <!-- Kanan -->
      <div class="section">
        <h3>Lokasi Kami</h3>
        <img 
          src="https://maps.googleapis.com/maps/api/staticmap?center=-7.5333,110.5958&zoom=15&size=300x200"
          alt="Map"
        />
      </div>

    </div>
  </footer>
</template>

<style scoped>
.footer {
  background-color: #3f5ba9;
  color: white;
  padding: 40px 60px;
}

.container {
  display: flex;
  justify-content: space-between;
  gap: 40px;
}

.section {
  flex: 1;
}

.section h3 {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 15px;
}

.section p {
  font-size: 14px;
  line-height: 1.6;
}

.item {
  display: flex;
  align-items: flex-start;
  gap: 10px;
  margin-bottom: 10px;
}

.item span {
  font-size: 16px;
  margin-top: 3px;
}

.section img {
  width: 100%;
  max-width: 250px;
  border-radius: 4px;
}
</style>