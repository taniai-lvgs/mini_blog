<div id="statuses">
    <?php foreach ($statuses as $status): ?>
        <div class="status">
            <div class="status_content">
                <?php echo $this->escape($status['user_name']); ?>
                <?php echo $this->escape($status['body']); ?>
            </div>
            <div>
                <?php echo $this->escape($status['created_at']); ?>
            </div>
        </div>
    <?php endforeach;?>
</div>
