import React, { Component } from 'react'
import { View, WebView, StyleSheet }

from 'react-native'
const WebViewExample = () => {
   return (
      <View style = {styles.container}>
         <WebView
         source = {{ uri:
         'http:/192.168.0.151/webview/index.php' }}
         />
      </View>
   )
}
export default WebViewExample;

const styles = StyleSheet.create({
   container: {
      height: 710,
   }
})