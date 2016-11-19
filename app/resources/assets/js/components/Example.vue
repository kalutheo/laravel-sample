<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        I'm an example component!
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    const Echo = require("laravel-echo");

    const echoInstance = new Echo({
        broadcaster: 'pusher',
        cluster: 'eu',
        encrypted: true,
        key: 'c5ef47d86332e355b128'
    });

    echoInstance
        .channel('users')
        .listen('UserWasRegistered', (e) => {
            console.log('UserWasRegistered:-)', e);
        });

    console.log('echoInstance', echoInstance);
    export default {
        mounted() {
            console.log('Component ready.')
        }
    }
</script>
