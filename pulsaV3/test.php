<?php

// praktenya ini diambil dari database
$hash = '$2y$10$4UD88HrROckfXaTfHddOJeose1BVlEReR.sh/M75r1pcNmYDaUeQu';
if (password_verify('harviacode', $hash)) {
    echo 'Password Benar';
} else {
    echo 'Password salah.';
}


