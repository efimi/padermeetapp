import React from 'react';
import { TabNavigator } from 'react-navigation';
import { Icon } from 'react-native-elements';

import Feed from '../screens/Feed';
import Me  from '../screens/Me';

export const Tabs = TabsNavigator ({
    Feed: {
        screen: Feed,
        navigationOptions: {
            tabBar: {
                label: 'Feed',
                icon: ({ tintColor }) => <Icon name="list" size={35} color={tintColor}/>
            },
        },
    },
    Me:{
        screen: Me,
        navigationOptions: {
            tabBar: {
                label: 'Me',
                icon: ({ tintColor }) => <Icon name="account-circle" size={35} color={tintColor}/>
            },
    },
});
