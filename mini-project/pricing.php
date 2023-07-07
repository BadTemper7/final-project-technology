<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../links/head.php' ?>
</head>
<body>
    <?php include 'Navbar.php' ?>   
    <section class="price-container">
        <h1 class="price-header">Prices</h1>
        <div class="plan-container">
            <div class="plan-title">
                <span class="feature">First Feature</span>
                <span class="feature">Second Feature</span>
                <span class="feature">Third Feature</span>
                <span class="feature">Future Description</span>
            </div>
            <div class="plan">
                <span class="plan-header">BASIC</span>
                <span class="plan-feature plan-outline">not included</span>
                <span class="plan-feature plan-outline">not included</span>
                <span class="plan-feature plan-outline">24 months</span>
                <div class="plan-feature-container plan-outline">
                    <p class="plan-feature plan-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum aspernatur repellendus laborum cumque laboriosam dignissimos? Repudiandae?</p>
                    <span class="plan-feature plan-price">Free</span>
                    <a href="#" class="plan-feature select-plan">Select this plan</a>
                </div>
            </div>
            <div class="plan">
                <span class="plan-header">PRO</span>
                <span class="plan-feature plan-outline">included</span>
                <span class="plan-feature plan-outline">not included</span>
                <span class="plan-feature plan-outline">unlimited</span>
                <div class="plan-feature-container plan-outline">
                    <p class="plan-feature plan-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum aspernatur repellendus laborum cumque laboriosam dignissimos? Repudiandae?</p>
                    <span class="plan-feature plan-price">€ 29</span>
                    <a href="#" class="plan-feature select-plan">Select this plan</a>
                </div>
            </div>
            <div class="plan">
                <span class="plan-header">AGENCY</span>
                <span class="plan-feature plan-outline">included</span>
                <span class="plan-feature plan-outline">included</span>
                <span class="plan-feature plan-outline">unlimited</span>
                <div class="plan-feature-container plan-outline">
                    <p class="plan-feature plan-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum aspernatur repellendus laborum cumque laboriosam dignissimos? Repudiandae?</p>
                    <span class="plan-feature plan-price">€ 89</span>
                    <a href="#" class="plan-feature select-plan">Select this plan</a>
                </div>
            </div>
        </div>
    </section>
    <?php include '../links/footer.php' ?>
</body>
</html>