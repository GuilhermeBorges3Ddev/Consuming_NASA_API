import React from 'react';
import HomeNavbar from '../Components/HomeNavbar';

export default class Home extends React.Component {
  render() {
    return (
        <React.Fragment>
        <HomeNavbar />
        <h1 className="d-flex justify-content-center align-items-center mt-5">
          NASA Consumer Applicattion has his 'Home'... Welcome!
        </h1>
        </React.Fragment>
    );
  }
}
