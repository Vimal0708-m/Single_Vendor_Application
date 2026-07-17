<script>
document.addEventListener('alpine:init', () => {
    Alpine.store('cart', {
        items: JSON.parse(localStorage.getItem('bloom_cart') || '[]'),

        save() {
            localStorage.setItem('bloom_cart', JSON.stringify(this.items));
        },

        count() {
            return this.items.reduce((total, item) => total + item.quantity, 0);
        },

        subtotal() {
            return this.items.reduce((sum, item) => sum + (item.price * item.quantity), 0);
        },

        shipping() {
            return this.subtotal() > 50 ? 0 : 9.99;
        },

        tax() {
            return this.subtotal() * 0.08;
        },

        total() {
            return this.subtotal() + this.shipping() + this.tax();
        },

        add(item) {
            const existing = this.items.find(i => i.id === item.id);
            if (existing) {
                existing.quantity += 1;
            } else {
                this.items.push({ ...item, quantity: 1 });
            }
            this.save();
        },

        addToCartQty(item, qty) {
            for (let i = 0; i < qty; i++) {
                this.add(item);
            }
        },

        remove(id) {
            this.items = this.items.filter(i => i.id !== id);
            this.save();
        },

        updateQuantity(id, quantity) {
            const item = this.items.find(i => i.id === id);
            if (item) {
                item.quantity = Math.max(1, quantity);
                this.save();
            }
        },

        clear() {
            this.items = [];
            this.save();
        }
    });

    Alpine.store('wishlist', {
        items: JSON.parse(localStorage.getItem('bloom_wishlist') || '[]'),

        save() {
            localStorage.setItem('bloom_wishlist', JSON.stringify(this.items));
        },

        toggle(id) {
            const index = this.items.indexOf(id);
            if (index > -1) {
                this.items.splice(index, 1);
            } else {
                this.items.push(id);
            }
            this.save();
        },

        has(id) {
            return this.items.includes(id);
        }
    });
});
</script>
