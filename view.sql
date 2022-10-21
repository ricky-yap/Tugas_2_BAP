-- Active: 1665823937570@@127.0.0.1@3306@KRS
CREATE VIEW VMHS_TERM AS 
    SELECT
        M.STUDENTID,
        M.NAMA,
        K.kode_term,
        T.semester
    FROM mahasiswa M
        JOIN krs K ON K.StudentID = M.StudentID
        JOIN term T ON T.kode_term = K.kode_term;

CREATE VIEW VMHS_MATKUL AS 
    SELECT
        M.STUDENTID,
        KD.kode_matakuliah,
        MK.nama_matakuliah,
        MK.sks
    FROM mahasiswa M
        JOIN krs K ON K.StudentID = M.StudentID
        JOIN krs_detail KD ON K.kode_krs = KD.kode_krs
        JOIN matakuliah MK ON KD.kode_matakuliah = MK.kode_matakuliah;