<template>
<div>
  <v-sheet rounded="lg" justify="center">
    <template>
      <v-select 
        v-if="$vuetify.breakpoint.mdOnly || $vuetify.breakpoint.smOnly ||$vuetify.breakpoint.xsOnly"
        class="mx-auto"
        elevation="1"
        v-model="TargetDevice"
        v-on:change="onSelectDevice"
        :items="DeviceList"
        label="Client List"
        outlined
      ></v-select>
      <v-card
        v-else
        class="mx-auto"
        max-width="500"
        elevation="1"
      >
        <v-banner 
          color="blue accent-2 white--text text--accent-4">
            クライアントを選択
        </v-banner>
        <v-list shaped>
          <v-list-item-group
            v-model="TargetDevice"
            v-on:change="onSelectDevice"
          >
            <template
            v-for="(Device, D) in DeviceList">
              <v-divider
                v-if="!Device"
                :key="`divider-${D}`"
              ></v-divider>

              <v-list-item
                v-else
                :key="`item-${D}`"
                :value="Device"
                active-class="blue--text text--accent-4"
              >
              <template v-slot:default="{ active }">
                <v-icon left>
                  mdi-access-point
                </v-icon>
                <v-list-item-content>
                  <v-list-item-title v-text="Device"></v-list-item-title>
                </v-list-item-content>
                <v-list-item-action>
                  <v-checkbox
                    :input-value="active"
                    color="blue accent-1"
                  >
                  </v-checkbox>
                </v-list-item-action>
              </template>
              </v-list-item>
            </template>
          </v-list-item-group>
        </v-list>
        
      </v-card>
    </template>
  </v-sheet>
</div>
</template>

<script>
export default {
  name: 'ClientSelectComponent',
  data: function(){
    return{
      DeviceList: [
      "未選択",
      "COMPB13",
      "COMPB16",
      "COMPB17",
      "COMPB20"
      ],
      TargetDevice: "未選択",
    }
  },
  methods:{
    //selectがchengeされた時に走るメソッド。
    //select-deviceをemitしてTaregetComponentにTargetDeviceを送ってる
    onSelectDevice: function(value){
      this.$emit('select-device', this.TargetDevice);
    },
  },
}
</script>

<style>

</style>