<template>
    <div class="input-group">
        <input id="btn-input" type="text" name="message" class="form-control input-sm" placeholder="Type your message here..." v-model="newMessage" @keyup.enter="sendMessage">
        
        <span class="input-group-btn">
            <button class="btn btn-primary btn-sm" id="btn-chat" @click="sendMessage">
                Send
            </button>
        </span>
    </div>
</template>

<script>
    export default {
        props: ['user'],

        data() {

            return {
                lat: '',
                lng: '',
                newMessage: ''
            }
        },
        mounted: function() {

            this.getLocation
        },

        methods: {
            sendMessage() {
                this.getLocation(),
                    //TODO does not have geolocation here??
                this.$emit('messagesent', {
                    user: this.user,
                    text: this.newMessage,
                    lat: this.lat,
                    long: this.lng
                });

                this.newMessage = ''
            },
            getLocation() {
                if (window.navigator.geolocation) {
                    window.navigator.geolocation.getCurrentPosition(this.showPosition);
                } else {
                    text = "Geolocation is not supported by this browser.";
                }
            },
            showPosition(position) {
                this.lat = position.coords.latitude,
                    this.lng = position.coords.longitude

            }
        }    
    }
</script>
