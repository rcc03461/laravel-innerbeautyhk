let app = new Vue({
    data:{
        sideCart : false,
        productQty : 1,
        selling_products :[],
        cart_products: JSON.parse(localStorage.cart_products || "[]" ),
        pickup_address: [],
        form:{
            email:"",
            name:"",
            tel:"",
            address:""
        }
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
            if (this.cart_products.length > 0) {

                return this.cart_products.reduce(function (accumulator, currentValue) {
                    return accumulator + currentValue.qty * currentValue.price_selling
                },0)

            }else{
                return 0
            }
        },
        item_list(){
            return this.cart_products.map(function(v,i){
                return {
                    "name": v.title,
                    "description": v.title,
                    "price": v.price_selling,
                    "currency": "HKD",
                    "tax": "0.00",
                    "quantity": v.qty
                }
            })
        }
    },
    watch:{
        cart_products: {
            handler(newValue, oldValue) {
                localStorage.cart_products = JSON.stringify(newValue);
                // console.log(localStorage.cart_products);
            },
            immediate: true,
            deep: true
        }
    },
    methods:{
        logorder() {
            let self = this;
            axios({
                method: 'post',
                url: '/api/logorder',
                data: {
                    total: self.totalPrice,
                    form: self.form,
                    cart_products: self.cart_products
                }
            })
            .then(function (response) {
                // console.log(
                //     response.data
                // );
                if (response.data.id > 0) {
                    localStorage.removeItem("cart_products");
                    location.href = "/thankyou/" + response.data.hash
                }
            })
            .catch(function (error) {
                console.log(error);
            })
            .finally(function () {
                // always executed
            });
        },
        validateForm() {
            console.log("validateForm");
            if ((this.form.email).trim() == "") {
                return false;
            }
            if ((this.form.name).trim() == "") {
                return false;
            }
            if ((this.form.tel).trim() == "") {
                return false;
            }
            if ((this.form.address).trim() == "") {
                return false;
            }
            return true;
        },
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
        cartAddQty: function (idProduct){
            this.cart_products.map(function (v) {
                // console.log(v.id, idProduct);

                if (v.id == idProduct) {
                    v.qty++;
                }
            });
            console.log("cartAddQty");
        },
        cartMinusQty: function (idProduct){
            this.cart_products.map(function (v) {
                // console.log(v.id, idProduct);

                if (v.id == idProduct && v.qty > 1) {
                    v.qty--;
                }
            });
            console.log("cartMinusQty");
        },
        cartRemove: function (idProduct){
            this.cart_products = this.cart_products.filter(function(v){
                return v.id != idProduct
            });
        },
        // minusQty:function(){
        //     if (this.productQty > 1) {
        //         this.productQty--;
        //     }
        // },
        addToCart(idProduct, Qty = 1){
            // let prod = this.selling_products.find(function(p){
            //     return p.id == idProduct
            // })

            let prod = this.selling_products.find(function(v){
                return v.id == idProduct
            })

            let cartProduct = this.cart_products.find(function (p) {
                return p.id == idProduct
            })

            if (cartProduct) {

                this.cart_products.map(function (p) {
                    if (p.id == idProduct) {
                        p.qty += Qty
                    }
                })
                // cartProduct.qty += Qty
            }else{

                this.cart_products.push({
                    id: prod.id,
                    url: prod.url,
                    title: prod.title,
                    excerpt: prod.excerpt,
                    price_origin: prod.price_origin,
                    price_selling: prod.price_selling,
                    files: prod.files[0].path,
                    qty: Qty
                });
            }

            // console.log(this.cart_products);
            // this.sideCart = !this.sideCart;
        },
        groupBy: function (list, name) {
            return list.reduce((obj, item) => {
                if (!obj[item[name]]) {
                    obj[item[name]] = []
                    obj[item[name]].push(item)
                } else {
                    obj[item[name]].push(item)
                }
                return obj
            }, {})
        }

    },
    created:function(){
        // console.log(1);
        let self = this;
        axios.get('/api/getproduct')
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

        axios.get('/address.json')
        .then(function (response) {
            // console.log(
            //     response.data
            //     );
            let addresslist = response.data;

            let zone = self.groupBy(addresslist, 'zone');

            self.pickup_address = zone;
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
