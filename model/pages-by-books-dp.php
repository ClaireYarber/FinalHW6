<?php
function selectPagesByBooks($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT c.booke_id, book_number, book_description, year, momth, day FROM `book` c join section s on s.book_id = c.book_id where s.book_id=?");
        $stmt->bind_param("i", $cid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
