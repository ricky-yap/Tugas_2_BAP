-- Active: 1665823937570@@127.0.0.1@3306@KRS
-- CREATE VIEW VMHS_TERM AS 
--     SELECT
--         M.STUDENTID,
--         M.NAMA,
--         K.kode_term,
--         T.semester
--     FROM mahasiswa M
--         JOIN krs K ON K.StudentID = M.StudentID
--         JOIN term T ON T.kode_term = K.kode_term;

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

CREATE VIEW vmhskrs AS
SELECT
mhs.StudentID,mhs.Nama,krs.kode_krs,krs.kode_term,mtk.kode_matakuliah,
mtk.nama_matakuliah,mtk.sks,B.totalsks
FROM mahasiswa mhs
INNER JOIN 'KRS' krs ON mhs.StudentID=krs.StudentID
INNER JOIN krs_detail krd ON krd.kode_krs=krs.kode_krs
INNER JOIN Matakuliah mtk ON mtk.kode_matakuliah=krd.kode_matakuliah
INNER JOIN
(SELECT krs. kode_krs, SUM(mtk.sks) totalsks
FROM mahasiswa mhs
INNER JOIN 'KRS' krs ON mhs.StudentID=krs.StudentID
INNER JOIN krs_detail krd ON krd.kode_krs=krs.kode_krs
INNER JOIN Matakuliah mtk ON mtk.kode_matakuliah=krd.kode_matakuliah
GROUP BY krs.kode_krs) as B ON B.kode_krs=krs.kode_krs
WHERE mhs.StudentID-'100000001' and krs.kode_term='1213';