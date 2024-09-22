<?php include('header.php'); ?>
<div class="container mt-5">
    <section>
        
        <h2 class="text-center">تواصل معي</h2>
        <form action="contact.php" method="POST" class="mt-4">
            <div class="form-group">
                <label for="name">الاسم:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">البريد الإلكتروني:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message">الرسالة:</label>
                <textarea id="message" name="message" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">إرسال</button>
        </form>
    </section>
</div>
<?php include('footer.php'); ?>