import React from 'react';
import { StyleSheet, Text, View } from 'react-native';

export default class App extends React.Component {
  render() {
    return (
        <View style={styles.container}>
          <View style={styles.header}>
            <Text>icon</Text>
            <Text style={styles.temp}>24°C</Text>
          </View>
          <View style={styles.body}>
            <Text style={styles.title}>Building a f## WheaterApp!</Text>
            <Text style={styles.subtitle}>Let s make it rain. </Text>
          </View>
      </View>
    );
  }
}

const styles = StyleSheet.create({
    container: {
        flex: 1,
        backgroundColor: '#FFD017',
    },
  header: {
    flex: 1,
    flexDirection: 'row',
    // backgroundColor: 'darkgrey',
    alignItems: 'center',
    justifyContent: 'space-around',
  },
  temp:{
      fontFamily: 'HelveticaNeue-Bold',
      fontSize: 45,
      color: 'white',
  },
  body: {
    flex: 5,
    // backgroundColor: 'blue',
    alignItems: 'flex-start', //left
    justifyContent: 'flex-end', // bottom
    margin: 10,
  },
  title:{
      fontFamily: 'HelveticaNeue-Bold',
      fontSize: 78,
      color: 'white',
      marginBottom: 5,
  },
  subtitle:{
      fontFamily: 'HelveticaNeue-Medium',
      fontSize: 16,
      color: 'white',
  },
});
