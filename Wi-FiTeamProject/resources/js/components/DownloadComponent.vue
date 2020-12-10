<template>
<v-main class="grey lighten-4">
  <v-sheet rounded="lg" class="spacing-playground pa-6">
      <h1 class="h4 text-center">
      最新インストーラーをダウンロード
    </h1>
      <v-container>
          <v-row justify="center">
              <v-col>
                  <v-card class="spacing-playground pa-6">
                    <v-list-item three-line>
                        <v-list-item-content>
                            <v-list-item-title class="headline mb-1">Windows</v-list-item-title>
                            <v-list-item-subtitle>Windows 10またはそれ以降</v-list-item-subtitle>
                        </v-list-item-content>

                        <v-list-item-avatar
                            tile
                            size="80"
                        >
                        <v-icon size='6em'>
                            mdi-microsoft-windows
                        </v-icon>
                        </v-list-item-avatar>
                    </v-list-item>

                    <v-card-actions>
                    <v-btn
                    class="ma-2"
                    :loading="loading"
                    :disabled="loading"
                    color="secondary"
                    @click="loader = 'loading'"
                    nuxt href="/sample/download/windows">
                        ダウンロード
                    </v-btn>
                    </v-card-actions>
                  </v-card>
                </v-col>
                <v-col>
                <v-card class="spacing-playground pa-6">
                    <v-btn>
                    </v-btn>
                </v-card>    
              </v-col>
          </v-row>
      </v-container>
  </v-sheet>
</v-main>
</template>

<script>
export default {
    data(){
        return{
            loader : null,
            loading: false,
        }
    },
    methods:{
        WindowsDownload:function(){
            axios.get('http://192.168.10.163/sample/download/windows')
                .then(response => {
                    if (response.status === 200 && response.data.status === 'ok') {
                        commit("download success")
                    } else {
                        throw new Error('レスポンスエラー')
                    }
                })
        }
    },
    watch: {
      loader () {
        const l = this.loader
        this[l] = !this[l]

        setTimeout(() => (this[l] = false), 1000)

        this.loader = null
      },
    },
}
</script>

<style>

</style>