<style>
	/* Базовые стили */
body {
    background: linear-gradient(to right, #6FA0B4, #895a85);
    margin: 0;
    font-family: 'Roboto', sans-serif;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    text-align: center;
}

.container {
    max-width: 600px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 10px;
    padding: 30px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
}

h1 {
    font-family: 'Anton', sans-serif;
    font-size: 72px;
    margin: 0 0 10px;
}

h2 {
    font-size: 24px;
    margin: 0 0 20px;
}

p {
    font-size: 18px;
    margin: 0 0 20px;
}

.button {
    background-color: #1486B3;
    color: white;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 5px;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.button:hover {
    background-color: #2ca8da;
}

#image {
    margin-top: 20px;
    width: 50%;
    max-width: 300px;
    height: auto;
}

/* Адаптивный дизайн */
@media (max-width: 768px) {
    h1 {
        font-size: 64px;
    }

    h2 {
        font-size: 20px;
    }

    p {
        font-size: 16px;
    }
}

@media (max-width: 480px) {
    h1 {
        font-size: 48px;
    }

    h2 {
        font-size: 18px;
    }

    p {
        font-size: 14px;
    }
}
</style>

<div class="container">
        <h1>404</h1>
        <h2>Ой! Страница не найдена</h2>
        <p>К сожалению, запрашиваемая вами страница не существует.<br> Пожалуйста, проверьте URL или вернитесь на главную страницу.</p>
        <a href="/" class="button">Вернуться на главную</a>
        <img id="image" src="http://newsite/wp-content/uploads/2024/12/404image.png" alt="404 Image" class="error-image">
    </div><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

