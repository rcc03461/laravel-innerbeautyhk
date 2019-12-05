let app = new Vue({
    data:{
        sideCart : false,
        productQty : 1,
        selling_products :[],
        cart_products: JSON.parse(localStorage.cart_products) || []
    },
    computed:{
        totalQty(){
            if (this.cart_products.length > 0){
                return this.cart_products.reduce(function (accumulator, currentValue){
                    return accumulator + currentValue.qty
                }, 0)
            }else{
                return 0;
            }
        },
        totalPrice(){
            return this.cart_products.reduce(function (accumulator, currentValue){

                // let

                return accumulator + currentValue.qty
            }, 0)
        }
    },
    watch:{
        cart_products: {
            handler(newValue, oldValue) {
                localStorage.cart_products = JSON.stringify(newValue);
                console.log(localStorage.cart_products);
            },
            immediate: true,
            deep: true
        }
    },
    methods:{
        toggleCart(){
            this.sideCart = !this.sideCart;
        },
        addQty:function(){
            this.productQty++;
        },
        minusQty:function(){
            if (this.productQty > 1) {
                this.productQty--;
            }
        },
        addToCart(idProduct, Qty = 1){
            // let prod = this.selling_products.find(function(p){
            //     return p.id == idProduct
            // })
            let cartProduct = this.cart_products.find(function (p) {
                return p.idproduct == idProduct
            })

            if (cartProduct) {

                this.cart_products.map(function (p) {
                    if (p.idproduct == idProduct) {
                        p.qty += Qty
                    }
                })
                // cartProduct.qty += Qty
            }else{
                this.cart_products.push({
                    idproduct: idProduct,
                    qty: Qty
                })
            }

            // console.log(this.cart_products);
            // this.sideCart = !this.sideCart;
        }
    },
    created:function(){
        console.log(1);
        let self = this;
        axios.get('api/getproduct')
        .then(function (response) {
            // console.log(
            //     response.data
            //     );
            self.selling_products = response.data;
        })
        .catch(function (error) {
            console.log(error);
        })
        .finally(function () {
            // always executed
        });
    },
    beforeCreate:function(){
        if (localStorage.getItem("cart_products")) {
            this.cart_products = JSON.parse(localStorage.cart_products);
        }
    }
});
app.$mount('#app');
