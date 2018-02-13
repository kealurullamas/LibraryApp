<template>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
            Notification  <span class="badge"  aria-hidden="true">{{notifications.length}}</span>
        </a>
        <ul class="dropdown-menu" role="menu">
            <li v-for="notification in notifications">
                someasdadadasda
                <a href="#" v-on:click="MarkAsRead(notification)">
                    <small>{{notification.data.bookreq.id}}</small>
                </a>
            </li>
            <li v-if="notifications.length==0">
                There is no new Notification
            </li>
        </ul>
    </li>
</template>

<script>
    export default {
        props:['notifications'],
        methods: {
            MarkAsRead: function(notification){
                var data={
                    id: notification.id
                };
                axios.post("http://localhost:8080/LibraryApp/public/notification/read",data).then(response=>{
                    window.location.href="http://localhost:8080/LibraryApp/public/dashboard";
                });
            }
        }
    }
</script>
