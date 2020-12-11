<template>
  <v-container>
    <v-navigation-drawer
      v-model="drawer"
      app
      width="auto"
    >
      <v-list-item>
        <v-btn icon @click.stop="drawer = !drawer">
          <v-icon>mdi-chevron-left</v-icon>
        </v-btn>
      </v-list-item>
      <v-divider />

      <v-list 
        nav 
        dense
      >
        <v-list-item
            v-for="menu in menus"
            :key="menu.title"
            :href="menu.url"
            link
          >
          <v-list-item-icon>
            <v-icon>{{ menu.icon }}</v-icon>
          </v-list-item-icon>
          <v-list-item-content>
            <v-list-item-title>{{ menu.title }}</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>
      </v-navigation-drawer>
    <v-app-bar
        app
        color="white"
        flat
        >
        <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
        <v-container class="py-0 fill-height">
            <v-avatar 
              :tile="true" 
              size="auto"
              >
              <v-img 
              width="100%"
              height="auto"
              src="/image/logo_transparent.png"/>
            </v-avatar>
            <v-spacer></v-spacer>

            <v-btn
            text
            icon
            nuxt href="/download"
            >
              <v-icon left>
                mdi-download
              </v-icon>
              ダウンロード
            </v-btn>

            <!-- <v-responsive max-width="260">
            <v-text-field
                dense
                flat
                hide-details
                rounded
                solo-inverted
            ></v-text-field>
            </v-responsive> -->
        </v-container>
    </v-app-bar>
  </v-container>
</template>

<script>
  export default {
    data: () => ({
      drawer: false,
      group: null,
      menus: [
        { title: 'ホーム', icon: 'mdi-home', url: '/' },
        { title: 'ダウンロード', icon: 'mdi-download', url: '/download' },
      ]
    }),
    watch: {
      group () {
        this.drawer = false
      },
    },
  }
</script>

<style>

</style>