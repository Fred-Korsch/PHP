<div class="titulo">Interação cao CSS</div>

<h1>
    <?php
        echo 'Olá';
        echo "</br>";
        echo "<small> PHP </small>";
    ?>
</h1>

<?= "<div center azul >Esta e outra forma de imprimir texto no PHP </div>" ?>

<br>

<div><button><?php echo "Legal"?></button></div>

<style>
    button {
        padding:5px 20px;
        background-color: #4286f4;
        color:#EEE;
        font-weight: bold;
        border-radius:10px;
    }

    [center]{
        display: flex;
        justify-content: center;
    }

    [azul] {
        color: #4286f4
    }

    [dobro] {
        dont-size: 2rem;
    }
</style>