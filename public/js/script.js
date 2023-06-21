<script>
    document.addEventListener('DOMContentLoaded', function() {
        const topUpCards = document.querySelectorAll('.card');

        topUpCards.forEach(function(card) {
            card.addEventListener('click', function() {
                const nominal = card.dataset.nominal;
                const price = card.dataset.price;
                const ringkasanPembelianContainer = document.getElementById('ringkasan-pembelian-container');

                ringkasanPembelianContainer.innerHTML = `Nominal: ${nominal} | Price: ${price}`;
            });
        });
    });
</script>
