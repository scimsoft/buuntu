<template>
    <ul class="chat">
        <li class="left clearfix" v-for="message in messages">
            <div class="chat-body clearfix">
                <div class="header">
                    <strong class="primary-font" >
                        {{ message.user.name }} -- ({{ getDistanceFromLatLonInKm( message.lat,message.long)}}km.)
                    </strong>
                </div>
                <p >
                    {{ message.message }} //
                </p>
            </div>
        </li>
    </ul>
</template>

<script>
export default {
  props: ['messages'],
    data: {
        error: '',
        curlat:'',
        curlon:''
    },
    mounted:function() {
      this.myFunction()
        },
    methods: {
      myFunction: function () {
        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(this.showPosition);
        }else{
            this.error = "Geolocation is not supported.";

        }
    },
        showPosition:function (position) {
            this.curlat = position.coords.latitude;
            this.curlon = position.coords.longitude;
        },



        getDistanceFromLatLonInKm( lat2, lon2) {
            var R = 6371; // Radius of the earth in km
            var dLat = (lat2 - this.curlat)* (Math.PI / 180);  // deg2rad below
            var dLon = (lon2 - this.curlon)* (Math.PI / 180);
            var a =
                Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                Math.cos((this.curlat)* (Math.PI / 180)) * Math.cos(lat2* (Math.PI / 180)) *
                Math.sin(dLon / 2) * Math.sin(dLon / 2)
            ;
            var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
            var d = R * c; // Distance in km
            return d.toFixed(3);
        },

    }

}

</script>