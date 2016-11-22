<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Who's new ?</div>
                    <div class="panel-body">
                        <ul>
                            <li v-for="user in users">
                                {{ user.created_at }} - {{ user.name }} just joined us
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    import  Echo from 'laravel-echo';

    const echoInstance = new Echo({
        broadcaster: 'pusher',
        cluster: 'eu',
        encrypted: true,
        key: Laravel.pusherKey
    });

    export default {
        data() {
            return { users:[]};
        },
        methods : {
            newUserRegistered : function(user){
                console.log('newUserRegistered', this);
                this.users.push(user);
            }
        },
        mounted() {
            echoInstance
                .channel('users')
                .listen('UserWasRegistered', (e) => {
                    console.log('UserWasRegistered:-)', e);
                    this.newUserRegistered(e.user);
                });
        }
    }
</script>
