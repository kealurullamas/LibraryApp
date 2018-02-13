<template>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
            Notifications <span class="glyphicon glyphicon-envelope"  aria-hidden="true"></span>
        </a>
        <ul class="dropdown-menu" role="menu">
            <li v-for="notification in notifications">
                someasdadadasda
                <a href="#">{{JSON.parse(notification.data).bookreq.id}}</a>
            </li>
        </ul>
    </li>
</template>

<script>
    export default {
        props:['notifications']
    }
</script>
