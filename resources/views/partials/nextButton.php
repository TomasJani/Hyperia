<?php if ($page < $pages): ?>
    <li class="page-item"><a class="page-link" href="/home?page=<?php echo ($page + 1); ?>"><?php echo ($page + 1); ?></a></li>
    <li class="page-item">
        <a class="page-link" href="/home?page=<?php echo ($pages); ?>">Last</a>
    </li>
<?php else: ?>
    <li class="page-item disabled"><a class="page-link" href="/home?page=<?php echo ($page + 1); ?>"><?php echo ($page + 1); ?></a></li>
    <li class="page-item disabled">
        <a class="page-link" href="/home?page=<?php echo ($pages); ?>">Last</a>
    </li>
<?php endif; ?>
