CREATE VIEW VMHS_KHS AS 
    SELECT
        M.STUDENTID,
        KD.kode_matakuliah,
        KH.kode_term,
        MK.nama_matakuliah,
        MK.sks,
        KHD.NilaiHuruf
    FROM mahasiswa M
        JOIN krs K ON K.StudentID = M.StudentID
        JOIN khs KH ON KH.kode_term = K.kode_term
        JOIN krs_detail KD ON K.kode_krs = KD.kode_krs
        JOIN khs_detail KHD ON KD.kode_krsdetail = KHD.kode_krsdetail
        JOIN matakuliah MK ON KD.kode_matakuliah = MK.kode_matakuliah;