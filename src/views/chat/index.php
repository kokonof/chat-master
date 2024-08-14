<?php require_once BASE_PATH . 'views/header.php'; ?>

<div class="container justify-content-center align-items-center mt-4" style="min-height: 80vh;">
    <div class="row">
        <div class="col-md-4">
            <!-- Form for entering messages -->
            <form method="post" action="/chat/addMessage">
                <div class="mb-3">
                    <label for="username" class="form-label">Ваше ім'я</label>
                    <input type="text" class="form-control" id="username" name="username"
                           value="<?= htmlspecialchars($formData['username'] ?? '', ENT_QUOTES) ?>">
                    <?php if (!empty($errors['username'])): ?>
                        <div class="text-danger mt-2">
                            <?php foreach ($errors['username'] as $error): ?>
                                <p><?= htmlspecialchars($error, ENT_QUOTES) ?></p>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="header" class="form-label">Заголовок</label>
                    <textarea class="form-control" id="header" name="header" rows="3"><?= htmlspecialchars($formData['header'] ?? '', ENT_QUOTES) ?></textarea>
                    <?php if (!empty($errors['header'])): ?>
                        <div class="text-danger mt-2">
                            <?php foreach ($errors['header'] as $error): ?>
                                <p><?= htmlspecialchars($error, ENT_QUOTES) ?></p>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Повідомлення</label>
                    <textarea class="form-control" id="message" name="message" rows="3"><?= htmlspecialchars($formData['message'] ?? '', ENT_QUOTES) ?></textarea>
                    <?php if (!empty($errors['message'])): ?>
                        <div class="text-danger mt-2">
                            <?php foreach ($errors['message'] as $error): ?>
                                <p><?= htmlspecialchars($error, ENT_QUOTES) ?></p>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <button type="submit" class="btn btn-primary">Надіслати</button>
            </form>
        </div>
        <div class="col-md-8">
            <!-- List of messages -->
            <?php if (!empty($messages)): ?>
                <?php foreach ($messages as $message): ?>
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <strong><?= htmlspecialchars($message['username'], ENT_QUOTES) ?></strong>
                                <a href="/chat/removeMessage?id=<?= htmlspecialchars($message['id'], ENT_QUOTES) ?>" class="btn btn-danger btn-sm">Х</a>
                            </div>
                            <h5 class="card-title"><?= htmlspecialchars($message['header'], ENT_QUOTES) ?></h5>
                            <p class="card-text"><?= htmlspecialchars($message['message'], ENT_QUOTES) ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Повідомлень ще немає.</p>
            <?php endif; ?>
        </div>
    </div>
</div>
