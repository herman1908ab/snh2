@echo off
title Deploy ruang-fashion ke Vercel
echo.
echo ============================================
echo    DEPLOY RUANG-FASHION KE VERCEL
echo ============================================
echo.
echo Mengirim versi terbaru ke https://ruang-fashion.vercel.app
echo Jangan tutup jendela ini sampai selesai...
echo.

call vercel --prod --yes

echo.
echo ============================================
echo    SELESAI!
echo    Cek hasilnya: https://ruang-fashion.vercel.app
echo    (tekan Ctrl+F5 di browser kalau belum berubah)
echo ============================================
echo.
pause
