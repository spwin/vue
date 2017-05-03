<template>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h3>Contacts:</h3>
                    <p>For more details, some work examples or interesting offers contact me by email: <span class="my-bold">{{ email }}</span></p>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
    export default {
        props: ['email']
    }
</script>