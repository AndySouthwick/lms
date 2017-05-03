
<template>
      
<div> 
<form action="/subscriptions" method="POST" >

  <!--<select name="plan" v-model="plan">
        <option v-for="plan in plans" :value="plan.id">
            {{plan.name}} &mdash; ${{plan.price / 100}}
        </option>
    </select>-->
    <br/>
    <button  class="btn btn-lg btn-primary" type="submit"  @click.prevent="subscribe">Try It Now!</button> 
    <p class="alert alert-danger" v-show="status" v-text="status"></p>
</form>
</div>

</template>
<script>
    export default {
        props: ['plans'],

        data(){
            return {
                stripeEmail: '',
                stripeToken: '',
                plan: 1,
                status: false
            };
        },
       created(){ 
        this.stripe = StripeCheckout.configure({
        key: lms.stripeKey,
        image: "https://stripe.com/img/documentation/checkout/marketplace.png",
        locale: "auto",
        panelLabel: "Subscribe For",
        token: (token) => {

                this.stripeToken = token.id;
                this.stripeEmail = token.email;

          axios.post('/subscriptions', this.$data)
.then(response => alert('Complete! Thanks for your payment!'))
.catch(error => this.status = error.response.data.status);
                
            }
           
        });

       },
       methods: {
            subscribe(){

                let plan = this.findPlanById(this.plan);

            this.stripe.open({
                name: plan.name,
                description: plan.name,
                zipCode: true,
                amount: plan.price

                });
            },

            findPlanById(id){
                return this.plans.find(plan => plan.id == id);
            }
        }
    }
</script>