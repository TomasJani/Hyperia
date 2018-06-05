<?php if ($page > 1): ?>
    <li class="page-item">
        <a class="page-link" href="/home?page=1" tabindex="-1">First</a>
    </li>
    <li class="page-item"><a class="page-link" href="/home?page=<?php echo ($page - 1); ?>"><?php echo ($page - 1); ?></a></li>
<?php else: ?>
    <li class="page-item disabled">
        <a class="page-link" href="/home?page=1" tabindex="-1">First</a>
    </li>
    <li class="page-item disabled"><a class="page-link" href="/home?page=<?php echo ($page - 1); ?>"><?php echo ($page - 1); ?></a></li>
<?php endif; ?>
