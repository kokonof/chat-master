<?php
require_once BASE_PATH . 'views/header.php';
?>

<div class="container justify-content-center align-items-center mt-4" style="min-height: 80vh;">
    <div class="row">
        <div class="col-md-4">
            <!-- Форма для введення повідомлення -->
            <form method="post" action="/chat/addMessage">
                <div class="mb-3">
                    <label for="username" class="form-label">Ваше ім'я</label>
                    <input type="text" class="form-control" id="username" name="username"
                           value="<?= !empty($_SESSION['email']) ? $_SESSION['email']: ''?>">
                </div>
                <div class="mb-3">
                    <label for="header" class="form-label">Заголовок</label>
                    <textarea class="form-control" id="header" name="header" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Повідомлення</label>
                    <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Надіслати</button>
            </form>
        </div>
        <div class="col-md-8">
            <!-- Список повідомлень -->
            <?php if (!empty($messages)): ?>
                <?php foreach($messages as $message): ?>
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <strong><?=$message['username']?></strong>
                                    <h5 class="card-title"><?=$message['header']?></h5>
                                    <p class="card-text"><?=$message['message']?></p>
                                </div>
                                <div>
                                    <a href="/chat/removeMessage?id=<?=$message['id']?>" class="btn-close" aria-label="Close"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Повідомлень ще немає.</p>
            <?php endif; ?>
        </div>
    </div>
</div>
