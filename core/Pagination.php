<?php

class Pagination
{
    public static function paginate() {
        try {
            $total = App::get('pdo')->query('
                SELECT COUNT(*) FROM users
            ')->fetchColumn();

            $limit = 9;
            $pages = ceil($total / $limit);

            $page = min($pages, filter_input(INPUT_GET, 'page', FILTER_VALIDATE_INT, array(
                'options' => array(
                    'default'   => 1,
                    'min_range' => 1,
                ),
            )));

            $offset = ($page - 1)  * $limit;

            $stmt = App::get('pdo')->prepare('
                SELECT * FROM users
                    ORDER BY created_at DESC
                    LIMIT :limit
                    OFFSET :offset
            ');

            $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
            $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $users= new IteratorIterator($stmt);

                return view('home', compact('users', 'pages', 'page'));

            } else {
                echo '<p>No results could be displayed.</p>';
            }

        } catch (Exception $e) {
            echo '<p>', $e->getMessage(), '</p>';
        }
    }
}
