<?php
use app\widgets\assets\SubscribeAsset;
use yii\helpers\Url;

SubscribeAsset::register($this);
?>
<div class="col-md-6">
    <form action="<?php echo Url::toRoute('/default/subscribe'); ?>" method="post" id="subscribe-form">
        <div class="form-group">
            <label for="email">Email address</label>
            <input class="form-control" id="email" placeholder="Enter email">
            <p class="result"></p>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>