# PROJECT_RULES.md

AI harus menjaga agar fitur lama tetap berjalan saat fitur baru ditambahkan.

# GENERAL RULES

## 1. Jelaskan Perubahan Terlebih Dahulu
Sebelum memberi kode, jelaskan:
- file yang akan diubah
- tujuan perubahan
- efek terhadap sistem

Contoh:
- menambah Livewire component
- mengubah layout
- menambah route
- mengaktifkan wire:navigate

---

## 2. Hindari Perubahan Tidak Perlu
Jangan mengubah file lain jika tidak diperlukan.

Fokus hanya pada file yang berkaitan dengan fitur yang diminta.

---

## 3. Error Handling
Jika muncul error:
AI wajib:
1. menjelaskan kemungkinan penyebab error
2. menunjukkan file terkait
3. memberi solusi paling kecil terlebih dahulu
4. tidak langsung menyarankan rewrite project

---

## 4. Format Jawaban AI
Jawaban AI sebaiknya:
1. Penjelasan singkat
2. File yang diubah
3. Kode
4. Cara menjalankan
5. Kemungkinan error

---

## 5. Prioritas Project
Prioritas utama:
- project stabil
- mudah dipahami
- mudah dikembangkan untuk praktikum berikutnya
- tetap mengikuti standar Laravel dan Livewire