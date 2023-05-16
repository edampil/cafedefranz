<div class="sidebar-wrapper">
        <div class="sidebar">
            <div class="profile-details">
                <div class="avatar"><i class="far fa-user-circle"></i></div>
                <div class="profile-text">
                    <p class="name"><?= $this->get_session('user_name'); ?></p>
                    <p class="role">Cashier</p>
                </div>
            </div>
            <ul>
                <li><?php echo anchor("cashier_controller/mycart", "Place Order",['class'=>"active normal"])?></li>
                <!-- <li><a href="../../news_feed/1.1/news_feed.php" class="normal">News Feed</a></li> -->
                <li><?php echo anchor("cashier_controller/newsfeed", "News Feed",['class'=>"normal"])?></li>
                <!-- <li><a href="../../orders/1.1/orders.php" class="normal">Orders</a></li> -->
                <li><?php echo anchor("cashier_controller/orders", "Orders",['class'=>"normal"])?></li>
                <!-- <li><a href="food_menu.php" class="active normal">Food Menu</a></li> -->
                <li><?php echo anchor("cashier_controller/foodmenu", "Food Menu",['class'=>"normal"])?></li>
            

            </ul>
            <div><?php echo anchor("cashier_controller/logout", "Log Out",['class'=>"logout-btn normal"])?></div>
        </div>
    </div>