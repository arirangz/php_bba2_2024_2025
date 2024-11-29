<?php

$mainMenu = [
    ["name" => "Home", "link" => "index.php"],
    ["name" => "Contact", "link" => "contact.php"],
];

$footerMenu = [
    ["name" => "Terms", "link" => "terms.php"],
    ["name" => "Legal", "link" => "legal.php"],
];

function generateMenu($menu): void
{ ?>
    <nav>
        <ul>
            <?php foreach ($menu as $item): ?>
                <li><a href="<?= $item["link"] ?>"><?= $item["name"] ?></a></li>
            <?php endforeach; ?>
        </ul>
    </nav>
<?php }
