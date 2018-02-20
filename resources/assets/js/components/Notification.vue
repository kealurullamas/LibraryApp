<template>
    <li class="dropdown">
        <a href="http://localhost:8080/LibraryApp/public/notification/readAll" class="dropdown-toggle" aria-expanded="false" aria-haspopup="true">
            Notifications <span class="badge"  aria-hidden="true">{{notifications.length}}</span>
        </a>
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
