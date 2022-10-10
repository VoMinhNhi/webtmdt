<!--Important link source from https://bootsnipp.com/snippets/ooa9M-->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;1,300;1,600&display=swap');

body {

  font-family: 'Montserrat', sans-serif;
  /* background: #eee; */

}

div.l-footer-container.ml-auto.mr-auto {
  border-top: 1px solid rgba(17, 17, 17, 0.2);
  box-sizing: border-box;
  color: #212529;
  font-family: 'Montserrat', sans-serif;
  line-height: 24px;
  margin-left: auto;
  margin-right: auto;
  padding: 30px 0 0;
  text-align: left;
  width: 100%;
}

section.row.brands {
  box-sizing: border-box;
  color: #212529;
  display: flex;
  flex-wrap: wrap;
  font-family: 'Montserrat', sans-serif;
  height: auto;
  line-height: 24px;
  margin-left: -15px;
  margin-right: -15px;
  padding-bottom: 0;
  text-align: left;
}

section.col-12.col-lg.brands-site-logo {
  align-items: center;
  box-sizing: border-box;
  color: #212529;
  display: flex;
  flex: 1 0 0;
  font-family: 'Montserrat', sans-serif;
  justify-content: flex-start;
  line-height: 24px;
  margin-bottom: 0;
  max-width: 100%;
  padding-left: 45px;
  padding-right: 15px;
  position: relative;
  text-align: left;
  width: 100%;
}

a.brands-logo {
  background-color: transparent;
  box-sizing: border-box;
  color: #185F7D;
  display: inline-block;
  font-family: 'Montserrat', sans-serif;
  height: 33px;
  line-height: 24px;
  margin: 0;
  text-align: left;
  text-decoration: none currentcolor solid;
  text-decoration-thickness: auto;
  width: 103px;
}

a.brands-logo:hover {
  color: #299ECC;
}

a.brands-logo:not([href]):not([class]) {
  color: inherit;
}

a.brands-logo:not([href]):not([class]):hover {
  color: inherit;
}

a.brands-logo:active {
  color: #299ECC;
}

div.lazy-holder.has-transparency {
  background-attachment: scroll;
  background-clip: border-box;
  background-color: transparent;
  background-image: none;
  background-origin: padding-box;
  background-position: 0 0;
  background-repeat: repeat;
  background-size: auto;
  box-sizing: border-box;
  color: #185F7D;
  font-family: 'Montserrat', sans-serif;
  height: 0;
  line-height: 24px;
  overflow: hidden;
  padding-top: calc(100%*33/100);
  position: relative;
  text-align: left;
  width: 100%;
}

img.lazy-image.has-transparency.js-queued.js-rendered {
  border-style: none;
  box-sizing: border-box;
  color: #185F7D;
  cursor: default;
  font-family: 'Montserrat', sans-serif;
  height: auto;
  left: 50%;
  line-height: 24px;
  max-width: none;
  opacity: 1;
  position: absolute;
  text-align: left;
  top: 50%;
  transform: translate3d(-50%, -50%, 0);
  transition: opacity .3s linear;
  vertical-align: middle;
  width: 99.5%;
  z-index: 1;
}

noscript {
  box-sizing: border-box;
  color: #185F7D;
  font-family: 'Montserrat', sans-serif;
  line-height: 24px;
  text-align: left;
}

section.col-12.col-lg.brands-social {
  box-sizing: border-box;
  color: #212529;
  display: block;
  flex: 1 0 0;
  font-family: 'Montserrat', sans-serif;
  line-height: 24px;
  max-width: 100%;
  padding-left: 15px;
  padding-right: 15px;
  position: relative;
  text-align: left;
  width: 100%;
}

section.social.social-wide.deferred {
  box-sizing: border-box;
  color: #212529;
  display: flex;
  font-family: 'Montserrat', sans-serif;
  font-size: 0;
  height: 42px;
  justify-content: center;
  line-height: 0;
  list-style: none;
  margin: 0;
  padding: 0;
  text-align: center;
  white-space: nowrap;
}

span.brands-label {
  box-sizing: border-box;
  color: #FFFFFF;
  display: none;
  font-family: 'Montserrat', sans-serif;
  font-size: 13px;
  line-height: 33px;
  padding-right: 24px;
  text-align: center;
  vertical-align: bottom;
  white-space: nowrap;
}

a.social-link.facebook.deferred {
  align-items: center;
  background-color: transparent;
  border: 1px solid #C3C4C5;
  border-image: none 100% 1 0 stretch;
  border-radius: 50%;
  box-sizing: border-box;
  color: #185F7D;
  display: inline-flex;
  font-family: 'Montserrat', sans-serif;
  font-size: 16px;
  height: 42px;
  justify-content: center;
  line-height: 45px;
  margin: 0 2%;
  padding: 15.85px;
  text-align: center;
  text-decoration: none currentcolor solid;
  text-decoration-thickness: auto;
  white-space: nowrap;
  width: 42px;
}

a.social-link.facebook.deferred:hover {
  color: #299ECC;
}

a.social-link.facebook.deferred:not([href]):not([class]) {
  color: inherit;
}

a.social-link.facebook.deferred:not([href]):not([class]):hover {
  color: inherit;
}

a.social-link.facebook.deferred:active {
  color: #299ECC;
}

a.social-link.twitter.deferred {
  align-items: center;
  background-color: transparent;
  border: 1px solid #C3C4C5;
  border-image: none 100% 1 0 stretch;
  border-radius: 50%;
  box-sizing: border-box;
  color: #185F7D;
  display: inline-flex;
  font-family: 'Montserrat', sans-serif;
  font-size: 16px;
  height: 42px;
  justify-content: center;
  line-height: 45px;
  margin: 0 2%;
  padding: 12px;
  text-align: center;
  text-decoration: none currentcolor solid;
  text-decoration-thickness: auto;
  white-space: nowrap;
  width: 42px;
}

a.social-link.twitter.deferred:hover {
  color: #299ECC;
}

a.social-link.twitter.deferred:not([href]):not([class]) {
  color: inherit;
}

a.social-link.twitter.deferred:not([href]):not([class]):hover {
  color: inherit;
}

a.social-link.twitter.deferred:active {
  color: #299ECC;
}

a.social-link.linkedin.deferred {
  align-items: center;
  background-color: transparent;
  border: 1px solid #C3C4C5;
  border-image: none 100% 1 0 stretch;
  border-radius: 50%;
  box-sizing: border-box;
  color: #185F7D;
  display: inline-flex;
  font-family: 'Montserrat', sans-serif;
  font-size: 16px;
  height: 42px;
  justify-content: center;
  line-height: 45px;
  margin: 0 2%;
  padding: 12px;
  text-align: center;
  text-decoration: none currentcolor solid;
  text-decoration-thickness: auto;
  white-space: nowrap;
  width: 42px;
}

a.social-link.linkedin.deferred:hover {
  color: #299ECC;
}

a.social-link.linkedin.deferred:not([href]):not([class]) {
  color: inherit;
}

a.social-link.linkedin.deferred:not([href]):not([class]):hover {
  color: inherit;
}

a.social-link.linkedin.deferred:active {
  color: #299ECC;
}

a.social-link.youtube.deferred {
  align-items: center;
  background-color: transparent;
  border: 1px solid #C3C4C5;
  border-image: none 100% 1 0 stretch;
  border-radius: 50%;
  box-sizing: border-box;
  color: #185F7D;
  display: inline-flex;
  font-family: 'Montserrat', sans-serif;
  font-size: 16px;
  height: 42px;
  justify-content: center;
  line-height: 45px;
  margin: 0 2%;
  padding: 12px;
  text-align: center;
  text-decoration: none currentcolor solid;
  text-decoration-thickness: auto;
  white-space: nowrap;
  width: 42px;
}

a.social-link.youtube.deferred:hover {
  color: #299ECC;
}

a.social-link.youtube.deferred:not([href]):not([class]) {
  color: inherit;
}

a.social-link.youtube.deferred:not([href]):not([class]):hover {
  color: inherit;
}

a.social-link.youtube.deferred:active {
  color: #299ECC;
}

a.social-link.instagram.deferred.last {
  align-items: center;
  background-color: transparent;
  border: 1px solid #C3C4C5;
  border-image: none 100% 1 0 stretch;
  border-radius: 50%;
  box-sizing: border-box;
  color: #185F7D;
  display: inline-flex;
  font-family: 'Montserrat', sans-serif;
  font-size: 16px;
  height: 42px;
  justify-content: center;
  line-height: 45px;
  margin: 0 2%;
  padding: 12px;
  text-align: center;
  text-decoration: none currentcolor solid;
  text-decoration-thickness: auto;
  white-space: nowrap;
  width: 42px;
}

a.social-link.instagram.deferred.last:hover {
  color: #299ECC;
}

a.social-link.instagram.deferred.last:not([href]):not([class]) {
  color: inherit;
}

a.social-link.instagram.deferred.last:not([href]):not([class]):hover {
  color: inherit;
}

a.social-link.instagram.deferred.last:active {
  color: #299ECC;
}

section.col-lg.app-badges {
  box-sizing: border-box;
  color: #212529;
  display: flex;
  flex-basis: 0;
  flex-grow: 1;
  font-family: 'Montserrat', sans-serif;
  justify-content: flex-end;
  line-height: 24px;
  margin: 0;
  max-width: 100%;
  padding-left: 15px;
  padding-right: 45px;
  position: relative;
  text-align: left;
  width: 100%;
}

div.app-badges-wrapper {
  box-sizing: border-box;
  color: #212529;
  display: flex;
  font-family: 'Montserrat', sans-serif;
  line-height: 24px;
  text-align: left;
}

a.app-badge {
  background-color: transparent;
  box-sizing: border-box;
  color: #185F7D;
  font-family: 'Montserrat', sans-serif;
  height: 32px;
  line-height: 24px;
  position: relative;
  text-align: left;
  text-decoration: none currentcolor solid;
  text-decoration-thickness: auto;
  top: 50%;
  transform: translateY(-50%);
  width: 109px;
}

a.app-badge:hover {
  color: #299ECC;
}

a.app-badge:not([href]):not([class]) {
  color: inherit;
}

a.app-badge:not([href]):not([class]):hover {
  color: inherit;
}

a.app-badge:active {
  color: #299ECC;
}

a.app-badge:first-child {
  margin-right: 10px;
}

section.col-md.brands-sisters {
  align-items: center;
  box-sizing: border-box;
  color: #212529;
  display: flex;
  flex: 0 0 100%;
  font-family: 'Montserrat', sans-serif;
  justify-content: flex-end;
  line-height: 24px;
  margin: 29px 0 0;
  max-width: 100%;
  padding-left: 15px;
  padding-right: 15px;
  position: relative;
  text-align: center;
  width: 100%;
}

span.brands-label.sisters {
  box-sizing: border-box;
  color: #FFFFFF;
  display: none;
  font-family: 'Montserrat', sans-serif;
  font-size: 13px;
  line-height: 33px;
  padding-right: 21px;
  text-align: center;
  vertical-align: bottom;
}

section.brands-sisters-wrapper {
  align-items: center;
  border-bottom: 1px solid rgba(17, 17, 17, 0.2);
  border-top: 1px solid rgba(17, 17, 17, 0.2);
  box-sizing: border-box;
  color: #212529;
  display: flex;
  flex-direction: row;
  font-family: 'Montserrat', sans-serif;
  line-height: 24px;
  padding: 28px 0 0;
  text-align: center;
  width: 100%;
}

a.brands-sister-logo-1.brands-sister-logo {
  align-items: center;
  background-color: transparent;
  box-sizing: border-box;
  color: #185F7D;
  display: flex;
  font-family: 'Montserrat', sans-serif;
  height: 33px;
  line-height: 24px;
  margin: 0 auto 28px;
  order: 1;
  text-align: center;
  text-decoration: none currentcolor solid;
  text-decoration-thickness: auto;
  vertical-align: middle;
  width: 100px;
}

a.brands-sister-logo-1.brands-sister-logo:hover {
  color: #299ECC;
}

a.brands-sister-logo-1.brands-sister-logo:not([href]):not([class]) {
  color: inherit;
}

a.brands-sister-logo-1.brands-sister-logo:not([href]):not([class]):hover {
  color: inherit;
}

a.brands-sister-logo-1.brands-sister-logo:active {
  color: #299ECC;
}

a.brands-sister-logo-2.brands-sister-logo {
  align-items: center;
  background-color: transparent;
  box-sizing: border-box;
  color: #185F7D;
  display: flex;
  font-family: 'Montserrat', sans-serif;
  height: 33px;
  line-height: 24px;
  margin: 0 auto 28px 0;
  order: 2;
  text-align: center;
  text-decoration: none currentcolor solid;
  text-decoration-thickness: auto;
  vertical-align: middle;
  width: 100px;
}

a.brands-sister-logo-2.brands-sister-logo:hover {
  color: #299ECC;
}

a.brands-sister-logo-2.brands-sister-logo:not([href]):not([class]) {
  color: inherit;
}

a.brands-sister-logo-2.brands-sister-logo:not([href]):not([class]):hover {
  color: inherit;
}

a.brands-sister-logo-2.brands-sister-logo:active {
  color: #299ECC;
}

a.brands-sister-logo-3.brands-sister-logo {
  align-items: center;
  background-color: transparent;
  box-sizing: border-box;
  color: #185F7D;
  display: flex;
  font-family: 'Montserrat', sans-serif;
  height: 33px;
  line-height: 24px;
  margin: 0 auto 28px 0;
  order: 3;
  text-align: center;
  text-decoration: none currentcolor solid;
  text-decoration-thickness: auto;
  vertical-align: middle;
  width: 100px;
}

a.brands-sister-logo-3.brands-sister-logo:hover {
  color: #299ECC;
}

a.brands-sister-logo-3.brands-sister-logo:not([href]):not([class]) {
  color: inherit;
}

a.brands-sister-logo-3.brands-sister-logo:not([href]):not([class]):hover {
  color: inherit;
}

a.brands-sister-logo-3.brands-sister-logo:active {
  color: #299ECC;
}

section.l-footer-bottom-shim.row.copy.headline-regular {
  border-top: 1px solid rgba(255, 255, 255, 0.2);
  box-sizing: border-box;
  color: #212529;
  display: flex;
  flex-wrap: wrap;
  font-family: LabGrotesque, Helvetica, Arial, sans-serif;
  font-weight: 400;
  line-height: 24px;
  margin: 0;
  padding-top: 23px;
  text-align: left;
}

section.col-12 {
  box-sizing: border-box;
  color: #212529;
  display: block;
  flex: 0 0 100%;
  font-family: LabGrotesque, Helvetica, Arial, sans-serif;
  line-height: 24px;
  max-width: 100%;
  padding-left: 15px;
  padding-right: 15px;
  position: relative;
  text-align: left;
  width: 100%;
}

ul.copy-listgroup {
  box-sizing: border-box;
  color: #111111;
  font-family: LabGrotesque, Helvetica, Arial, sans-serif;
  font-size: 11px;
  line-height: 20px;
  list-style: none;
  margin: 0;
  padding: 1px 0 0;
  text-align: center;
}

a.copy-link {
  background-color: transparent;
  box-sizing: border-box;
  color: #111111;
  font-family: LabGrotesque, Helvetica, Arial, sans-serif;
  font-size: 11px;
  line-height: 20px;
  text-align: center;
  text-decoration: none currentcolor solid;
  text-decoration-thickness: auto;
}

a.copy-link:not([href]):not([class]) {
  color: inherit;
}

a.copy-link:not([href]):not([class]):hover {
  color: inherit;
}

li.copy-listitem {
  border-left: medium none currentcolor;
  box-sizing: border-box;
  color: #111111;
  display: inline-flex;
  font-family: LabGrotesque, Helvetica, Arial, sans-serif;
  font-size: 11px;
  line-height: 9px;
  list-style: none;
  margin: 0;
  text-align: center;
}

span.copy-comma {
  box-sizing: border-box;
  color: #111111;
  font-family: LabGrotesque, Helvetica, Arial, sans-serif;
  font-size: 11px;
  line-height: 9px;
  text-align: center;
}

span.copy-and {
  box-sizing: border-box;
  color: #111111;
  font-family: LabGrotesque, Helvetica, Arial, sans-serif;
  font-size: 11px;
  line-height: 9px;
  margin: 0 3px;
  text-align: center;
}

a.copy-link.copy-policy-link {
  background-color: transparent;
  box-sizing: border-box;
  color: #111111;
  display: inline-block;
  font-family: LabGrotesque, Helvetica, Arial, sans-serif;
  font-size: 11px;
  line-height: 9px;
  text-align: center;
  text-decoration: none currentcolor solid;
  text-decoration-thickness: auto;
}

a.copy-link.copy-policy-link:not([href]):not([class]) {
  color: inherit;
}

a.copy-link.copy-policy-link:not([href]):not([class]):hover {
  color: inherit;
}

li.last.copy-listitem {
  border-left: 1px solid #111111;
  box-sizing: border-box;
  color: #111111;
  display: inline-flex;
  font-family: LabGrotesque, Helvetica, Arial, sans-serif;
  font-size: 11px;
  line-height: 9px;
  list-style: none;
  margin: 0 2px 4px;
  padding: 0 0 0 4px;
  text-align: center;
}

a.copy-link.copy-external-link {
  background-color: transparent;
  box-sizing: border-box;
  color: #111111;
  display: inline-block;
  font-family: LabGrotesque, Helvetica, Arial, sans-serif;
  font-size: 11px;
  line-height: 9px;
  padding-left: 3px;
  text-align: center;
  text-decoration: none currentcolor solid;
  text-decoration-thickness: auto;
}

a.copy-link.copy-external-link:not([href]):not([class]) {
  color: inherit;
}

a.copy-link.copy-external-link:not([href]):not([class]):hover {
  color: inherit;
}

section.editions-list-inline {
  box-sizing: border-box;
  color: #212529;
  display: block;
  font-family: 'Montserrat', sans-serif;
  line-height: 24px;
  text-align: left;
}

section.editions-list.headline-regular {
  box-sizing: border-box;
  color: #212529;
  display: block;
  font-family: LabGrotesque, Helvetica, Arial, sans-serif;
  font-weight: 400;
  line-height: 24px;
  text-align: left;
}

ul.editions-listgroup {
  box-sizing: border-box;
  color: #111111;
  font-family: LabGrotesque, Helvetica, Arial, sans-serif;
  font-size: 11px;
  line-height: 20px;
  list-style: none;
  margin: 0;
  padding: 0;
  text-align: center;
}

span.editions-listitem-label {
  box-sizing: border-box;
  color: #111111;
  display: inline-block;
  font-family: LabGrotesque, Helvetica, Arial, sans-serif;
  font-size: 11px;
  line-height: 20px;
  text-align: center;
}

li.editions-listitem.us.is-active {
  box-sizing: border-box;
  color: #111111;
  display: none;
  font-family: LabGrotesque, Helvetica, Arial, sans-serif;
  font-size: 11px;
  height: auto;
  letter-spacing: normal;
  line-height: 9px;
  list-style: none;
  padding: 0;
  position: relative;
  text-align: center;
  text-transform: uppercase;
}

a.editions-link {
  background-color: transparent;
  box-sizing: border-box;
  color: #111111;
  display: inline-block;
  font-family: LabGrotesque, Helvetica, Arial, sans-serif;
  font-size: 11px;
  line-height: 9px;
  text-align: center;
  text-decoration: none currentcolor solid;
  text-decoration-thickness: auto;
  text-transform: uppercase;
}

a.editions-link:hover {
  text-decoration: underline;
}

a.editions-link:not([href]):not([class]) {
  color: inherit;
}

a.editions-link:not([href]):not([class]):hover {
  color: inherit;
}

span.editions-link-name {
  box-sizing: border-box;
  color: #111111;
  display: none;
  font-family: LabGrotesque, Helvetica, Arial, sans-serif;
  font-size: 11px;
  line-height: 9px;
  text-align: center;
  text-transform: uppercase;
}

span.editions-link-name:hover {
  text-decoration: underline currentcolor solid;
  text-decoration-thickness: auto;
}

span.editions-link-abbr {
  box-sizing: border-box;
  color: #111111;
  display: block;
  font-family: LabGrotesque, Helvetica, Arial, sans-serif;
  font-size: 11px;
  line-height: 9px;
  text-align: center;
  text-transform: uppercase;
}

li.editions-listitem.uk {
  border-left: medium none currentcolor;
  box-sizing: border-box;
  color: #111111;
  display: inline-block;
  font-family: LabGrotesque, Helvetica, Arial, sans-serif;
  font-size: 11px;
  height: auto;
  letter-spacing: normal;
  line-height: 9px;
  list-style: none;
  margin: 0 2px 4px;
  padding: 0 0 0 4px;
  position: relative;
  text-align: center;
  text-transform: uppercase;
}

li.editions-listitem.at {
  border-left: 1px solid #111111;
  box-sizing: border-box;
  color: #111111;
  display: inline-block;
  font-family: LabGrotesque, Helvetica, Arial, sans-serif;
  font-size: 11px;
  height: auto;
  letter-spacing: normal;
  line-height: 9px;
  list-style: none;
  margin: 0 2px 4px;
  padding: 0 0 0 4px;
  position: relative;
  text-align: center;
  text-transform: uppercase;
}

li.editions-listitem.aus {
  border-left: 1px solid #111111;
  box-sizing: border-box;
  color: #111111;
  display: inline-block;
  font-family: LabGrotesque, Helvetica, Arial, sans-serif;
  font-size: 11px;
  height: auto;
  letter-spacing: normal;
  line-height: 9px;
  list-style: none;
  margin: 0 2px 4px;
  padding: 0 0 0 4px;
  position: relative;
  text-align: center;
  text-transform: uppercase;
}

li.editions-listitem.de {
  border-left: 1px solid #111111;
  box-sizing: border-box;
  color: #111111;
  display: inline-block;
  font-family: LabGrotesque, Helvetica, Arial, sans-serif;
  font-size: 11px;
  height: auto;
  letter-spacing: normal;
  line-height: 9px;
  list-style: none;
  margin: 0 2px 4px;
  padding: 0 0 0 4px;
  position: relative;
  text-align: center;
  text-transform: uppercase;
}

li.editions-listitem.es {
  border-left: 1px solid #111111;
  box-sizing: border-box;
  color: #111111;
  display: inline-block;
  font-family: LabGrotesque, Helvetica, Arial, sans-serif;
  font-size: 11px;
  height: auto;
  letter-spacing: normal;
  line-height: 9px;
  list-style: none;
  margin: 0 2px 4px;
  padding: 0 0 0 4px;
  position: relative;
  text-align: center;
  text-transform: uppercase;
}

li.editions-listitem.fr {
  border-left: 1px solid #111111;
  box-sizing: border-box;
  color: #111111;
  display: inline-block;
  font-family: LabGrotesque, Helvetica, Arial, sans-serif;
  font-size: 11px;
  height: auto;
  letter-spacing: normal;
  line-height: 9px;
  list-style: none;
  margin: 0 2px 4px;
  padding: 0 0 0 4px;
  position: relative;
  text-align: center;
  text-transform: uppercase;
}

li.editions-listitem.in {
  border-left: 1px solid #111111;
  box-sizing: border-box;
  color: #111111;
  display: inline-block;
  font-family: LabGrotesque, Helvetica, Arial, sans-serif;
  font-size: 11px;
  height: auto;
  letter-spacing: normal;
  line-height: 9px;
  list-style: none;
  margin: 0 2px 4px;
  padding: 0 0 0 4px;
  position: relative;
  text-align: center;
  text-transform: uppercase;
}

li.editions-listitem.it {
  border-left: 1px solid #111111;
  box-sizing: border-box;
  color: #111111;
  display: inline-block;
  font-family: LabGrotesque, Helvetica, Arial, sans-serif;
  font-size: 11px;
  height: auto;
  letter-spacing: normal;
  line-height: 9px;
  list-style: none;
  margin: 0 2px 4px;
  padding: 0 0 0 4px;
  position: relative;
  text-align: center;
  text-transform: uppercase;
}

li.editions-listitem.jp {
  border-left: 1px solid #111111;
  box-sizing: border-box;
  color: #111111;
  display: inline-block;
  font-family: LabGrotesque, Helvetica, Arial, sans-serif;
  font-size: 11px;
  height: auto;
  letter-spacing: normal;
  line-height: 9px;
  list-style: none;
  margin: 0 2px 4px;
  padding: 0 0 0 4px;
  position: relative;
  text-align: center;
  text-transform: uppercase;
}

li.editions-listitem.mx {
  border-left: 1px solid #111111;
  box-sizing: border-box;
  color: #111111;
  display: inline-block;
  font-family: LabGrotesque, Helvetica, Arial, sans-serif;
  font-size: 11px;
  height: auto;
  letter-spacing: normal;
  line-height: 9px;
  list-style: none;
  margin: 0 2px 4px;
  padding: 0 0 0 4px;
  position: relative;
  text-align: center;
  text-transform: uppercase;
}

li.editions-listitem.nl {
  border-left: 1px solid #111111;
  box-sizing: border-box;
  color: #111111;
  display: inline-block;
  font-family: LabGrotesque, Helvetica, Arial, sans-serif;
  font-size: 11px;
  height: auto;
  letter-spacing: normal;
  line-height: 9px;
  list-style: none;
  margin: 0 2px 4px;
  padding: 0 0 0 4px;
  position: relative;
  text-align: center;
  text-transform: uppercase;
}

li.editions-listitem.se {
  border-left: 1px solid #111111;
  box-sizing: border-box;
  color: #111111;
  display: inline-block;
  font-family: LabGrotesque, Helvetica, Arial, sans-serif;
  font-size: 11px;
  height: auto;
  letter-spacing: normal;
  line-height: 9px;
  list-style: none;
  margin: 0 2px 4px;
  padding: 0 0 0 4px;
  position: relative;
  text-align: center;
  text-transform: uppercase;
}

li.editions-listitem.pl {
  border-left: 1px solid #111111;
  box-sizing: border-box;
  color: #111111;
  display: inline-block;
  font-family: LabGrotesque, Helvetica, Arial, sans-serif;
  font-size: 11px;
  height: auto;
  letter-spacing: normal;
  line-height: 9px;
  list-style: none;
  margin: 0 2px 4px;
  padding: 0 0 0 4px;
  position: relative;
  text-align: center;
  text-transform: uppercase;
}

li.editions-listitem.za {
  border-left: 1px solid #111111;
  box-sizing: border-box;
  color: #111111;
  display: inline-block;
  font-family: LabGrotesque, Helvetica, Arial, sans-serif;
  font-size: 11px;
  height: auto;
  letter-spacing: normal;
  line-height: 9px;
  list-style: none;
  margin: 0 2px 4px;
  padding: 0 0 0 4px;
  position: relative;
  text-align: center;
  text-transform: uppercase;
}

ul#ca-privacy-rights.copy-listgroup {
  box-sizing: border-box;
  color: #111111;
  font-family: 'Montserrat', sans-serif;
  font-size: 11px;
  line-height: 20px;
  list-style: none;
  margin: 0;
  padding: 1px 0 0;
  text-align: center;
}
</style>

<div class="l-footer-container ml-auto mr-auto mt-3">
  <section class="row brands">
    <section class="col-12 col-lg brands-site-logo">
      <a href="#" class="brands-logo" title="Visit Insider" aria-label="Click to visit Insider"
        alt="Click to visit Insider" data-e2e-name="footer-insider">
        <div class="lazy-holder lazy-holder has-transparency">


          <img class="lazy-image has-transparency js-queued js-rendered p-2" src="/../website_tmdt/assets/logoBard.png"
            data-src="/public/assets/INSIDER/US/logos/Insider-logo-dark-opt.svg" alt="">

          <noscript>
            <img src="https://www.insider.com/?width=600&format=jpeg&auto=webp" />
          </noscript>

        </div>
      </a>
    </section>

    <section class="col-12 col-lg brands-social">
      <section class="social social-wide deferred" data-e2e-name="social-links">
        <span class="brands-label">Follow us on:</span>
        <a class="social-link facebook deferred" href="#" label="facebook" title="Facebook"
          aria-label="Click to visit us on Facebook" data-follow-link="" data-track-event-label="facebook"
          data-e2e-name="facebook" target="_blank" rel="noopener">
          <div class="lazy-holder lazy-holder has-transparency" style="padding-top: calc(100% * 100 / 51.9)">


            <img class="lazy-image has-transparency js-queued js-rendered"
              src="https://www.insider.com/public/assets/BI/US/icons/facebook.svg"
              data-src="/public/assets/BI/US/icons/facebook.svg" alt="">

            <noscript>
              <img src="https://www.insider.com/?width=600&format=jpeg&auto=webp" />
            </noscript>

          </div>
        </a>
        <a class="social-link twitter deferred" href="#" label="twitter" title="Twitter"
          aria-label="Click to visit us on Twitter" data-follow-link="" data-track-event-label="twitter"
          data-e2e-name="twitter" target="_blank" rel="noopener">
          <div class="lazy-holder lazy-holder has-transparency" style="padding-top: calc(100% * 81.2 / 100)">


            <img class="lazy-image has-transparency js-queued js-rendered"
              src="https://www.insider.com/public/assets/BI/US/icons/twitter.svg"
              data-src="/public/assets/BI/US/icons/twitter.svg" alt="">

            <noscript>
              <img src="https://www.insider.com/?width=600&format=jpeg&auto=webp" />
            </noscript>

          </div>
        </a>
        <a class="social-link linkedin deferred" href="#" label="linkedin" title="Connect with us on LinkedIn"
          aria-label="Connect with us on LinkedIn" data-follow-link="" data-track-event-label="linkedin"
          data-e2e-name="linkedin" target="_blank" rel="noopener">
          <div class="lazy-holder lazy-holder has-transparency" style="padding-top: calc(100% * 95.6 / 100)">


            <img class="lazy-image has-transparency js-queued js-rendered"
              src="https://www.insider.com/public/assets/BI/US/icons/linkedin.svg"
              data-src="/public/assets/BI/US/icons/linkedin.svg" alt="">

            <noscript>
              <img src="https://www.insider.com/?width=600&format=jpeg&auto=webp" />
            </noscript>

          </div>
        </a>
        <a class="social-link youtube deferred" href="#" label="youtube" title="Subscribe to our YouTube channel"
          aria-label="Click to visit our YouTube channel" data-follow-link="" data-track-event-label="youtube"
          data-e2e-name="youtube" target="_blank" rel="noopener">
          <div class="lazy-holder lazy-holder has-transparency" style="padding-top: calc(100% * 71.4 / 100)">


            <img class="lazy-image has-transparency js-queued js-rendered"
              src="https://www.insider.com/public/assets/BI/US/icons/youtube.svg"
              data-src="/public/assets/BI/US/icons/youtube.svg" alt="">

            <noscript>
              <img src="https://www.insider.com/?width=600&format=jpeg&auto=webp" />
            </noscript>

          </div>
        </a>
        <a class="social-link instagram deferred last" href="#" label="instagram" title="Instagram"
          aria-label="Click to visit us on Instagram" data-follow-link="" data-track-event-label="instagram"
          data-e2e-name="instagram" target="_blank" rel="noopener">
          <div class="lazy-holder lazy-holder has-transparency" style="padding-top: calc(100% * 100 / 100)">


            <img class="lazy-image has-transparency js-queued js-rendered"
              src="https://www.insider.com/public/assets/BI/US/icons/instagram.svg"
              data-src="/public/assets/BI/US/icons/instagram.svg" alt="">

            <noscript>
              <img src="https://www.insider.com/?width=600&format=jpeg&auto=webp" />
            </noscript>

          </div>
        </a>
      </section>
    </section>

    <section class="col-lg app-badges">
      <div class="app-badges-wrapper">
        <a href="https://itunes.apple.com/app/apple-store/id554260576?mt=8" class="app-badge" target="_blank"
          rel="noopener">
          <div class="lazy-holder lazy-holder has-transparency" style="padding-top: calc(100% * 40 / 135)">


            <img class="lazy-image has-transparency js-queued js-rendered"
              src="https://www.insider.com/public/assets/badges/app-store-badge.svg"
              data-src="/public/assets/badges/app-store-badge.svg" alt="">

            <noscript>
              <img src="https://www.insider.com/?width=600&format=jpeg&auto=webp" />
            </noscript>

          </div>
        </a>
        <a href="https://play.google.com/store/apps/details?id=com.freerange360.mpp.businessinsider" class="app-badge"
          target="_blank" rel="noopener">
          <div class="lazy-holder lazy-holder has-transparency" style="padding-top: calc(100% * 40 / 135)">


            <img class="lazy-image has-transparency js-queued js-rendered"
              src="https://www.insider.com/public/assets/badges/google-play-badge.svg"
              data-src="/public/assets/badges/google-play-badge.svg" alt="">

            <noscript>
              <img src="https://www.insider.com/?width=600&format=jpeg&auto=webp" />
            </noscript>

          </div>
        </a>
      </div>
    </section>

    <section class="col-md brands-sisters">
      <span class="brands-label sisters">Also check out:</span>
      <section class="brands-sisters-wrapper">
        <a href="https://www.businessinsider.com/" class="brands-sister-logo-1 brands-sister-logo"
          title="Visit Business Insider" aria-label="Click to visit Business Insider"
          alt="Click to visit Business Insider" data-e2e-name="footer-businessinsider">
          <div class="lazy-holder lazy-holder has-transparency" style="padding-top: calc(100% * 33 / 100)">


            <img class="lazy-image has-transparency js-queued js-rendered" style="height: 40px;
    width: 100px;" src="/../website_tmdt/assets/fast.png" data-src="/public/assets/BI/US/logos/BI-logo-dark-opt.svg"
              alt="">

            <noscript>
              <img src="https://www.insider.com/?width=600&format=jpeg&auto=webp" />
            </noscript>

          </div>
        </a>
        <a href="https://markets.businessinsider.com/" class="brands-sister-logo-2 brands-sister-logo"
          alt="Visit Markets Insider" title="Visit Markets Insider" aria-label="Click to visit Markets Insider"
          data-e2e-name="footer-marketsinsider">
          <div class="lazy-holder lazy-holder has-transparency" style="padding-top: calc(100% * 33 / 96)">


            <img class="lazy-image has-transparency js-queued js-rendered" style="height: 40px;
    width: 100px;" src="/../website_tmdt/assets/quanlity.png" data-src="/public/assets/MI/logos/MI.svg" alt="">

            <noscript>
              <img src="https://www.insider.com/?width=600&format=jpeg&auto=webp" />
            </noscript>

          </div>
        </a>
        <a href="https://www.insider-intelligence.com/?utm_source=insider&amp;utm_medium=site_footer&amp;utm_term=ins_site_footer&amp;utm_content=ins_site_footer&amp;utm_campaign=ins_site_footer"
          class="brands-sister-logo-3 brands-sister-logo" alt="Visit Insider Intelligence"
          title="Visit Insider Intelligence" aria-label="Click to visit Insider Intelligence"
          data-e2e-name="footer-insiderintelligence">
          <div class="lazy-holder lazy-holder has-transparency" style="padding-top: calc(100% * 33 / 100)">


            <img class="lazy-image has-transparency js-queued js-rendered" style="height: 40px;
    width: 100px;" src="/../website_tmdt/assets/rep.png"
              data-src="/public/assets/BII/logos/InsiderIntelligence_Black.svg" alt="">

            <noscript>
              <img src="https://www.insider.com/?width=600&format=jpeg&auto=webp" />
            </noscript>

          </div>
        </a>
      </section>
    </section>
  </section>

  <section class="l-footer-bottom-shim row copy headline-regular">
    <section class="col-12">
      <ul class="copy-listgroup">
        * <a class="copy-link" href="https://www.insider-inc.com/terms/">Copyright © 2021</a> Công ty Cổ phần Thương mại
        <b>An Nhí Smart</b>.

        Giấy chứng nhận đăng ký kinh doanh số 0302286281, cấp ngày 22/06/2006 bởi Sở Kế hoạch và Đầu tư TP. Hồ Chí Minh.
        </br>
        <b>Địa chỉ đăng ký trụ sở chính:</b> Đường trần chiên, P. Lê Bình, TP. Cần Thơ

        <li class="copy-listitem">
          <a class="copy-link" href="https://www.insider-inc.com/terms/" data-e2e-name="footer-terms-of-service">Điều
            khoản và dịch vụ</a>

          <span class="copy-comma">,&nbsp;</span>

          <a class="copy-link" href="https://www.insider-inc.com/privacy-policy"
            data-e2e-name="footer-privacy-policy">Chính sách</a>

          <span class="copy-and">& </span>

          <a class="copy-link" href="https://www.insider-inc.com/cookie-policy"
            data-e2e-name="footer-cookies-policy">Chính Cookies</a>

          .
        </li>
      </ul>

      <!-- <ul class="copy-listgroup">
        <li class=" copy-listitem">
          <a class="copy-link copy-policy-link" href="https://www.insider.com/sitemap/index.html" title="" aria-label=""
            target="" data-e2e-name="footer-sitemap">Sitemap</a>
        </li>
        <li class=" copy-listitem">
          <a class="copy-link copy-policy-link" href="https://www.insider-inc.com/disclaimer" title="" aria-label=""
            target="" data-e2e-name="footer-disclaimer">Disclaimer</a>
        </li>
        <li class=" copy-listitem">
          <a class="copy-link copy-policy-link" href="https://www.insider-inc.com/commerce-on-insider-inc/" title=""
            aria-label="" target="" data-e2e-name="footer-commerce-policy">Commerce Policy</a>
        </li>
        <li class=" copy-listitem">
          <a class="copy-link copy-policy-link" href="https://www.insider-inc.com/privacy-policy#ccpa" title=""
            aria-label="" target="" data-e2e-name="footer-ccpa-privacy-policy">CA Privacy Rights</a>
        </li>
        <li class="last copy-listitem">
          <a class="copy-link copy-policy-link" href="https://coupons.businessinsider.com/" title="" aria-label=""
            target="" data-e2e-name="footer-coupons">Coupons</a>
        </li>
        <li class="copy-listitem">
          <a class="copy-link copy-external-link" href="https://nytm.org/made" data-e2e-name="footer-made-in-nyc">Made
            in NYC</a>
        </li>
        <li class="copy-listitem">
          <a class="copy-link copy-external-link" href="https://www.insider-inc.com/careers"
            data-e2e-name="footer-jobs">Jobs</a>
        </li>
      </ul>
      <ul class="copy-listgroup">
        <li class="copy-listitem">
          Stock quotes by
          <a class="copy-link copy-external-link" href="http://www.finanzen.net/"
            data-e2e-name="footer-finanzen.net">finanzen.net</a>
        </li>
        <li class="last copy-listitem">
          <a class="copy-link copy-policy-link" href="https://www.parsintl.com/publication/business-insider/" title=""
            aria-label="" target="" data-e2e-name="footer-reprints-permissions">Reprints &amp; Permissions</a>
        </li>
      </ul> -->
    </section>
  </section>

  <section class="editions-list-inline" data-editions-list-inline="">
    <section class="editions-list headline-regular" data-editions-list="">
      <ul class="editions-listgroup">
        <span class="editions-listitem-label">Các Phiên Bản :</span>
        <li class="editions-listitem us is-active">
          <a class="editions-link" href="#" data-e2e-name="editions-link-us is-active">
            <span class="editions-link-name">United States</span>
            <span class="editions-link-abbr">US</span>
          </a>
        </li>
        <li class="editions-listitem uk">
          <a class="editions-link" href="#" data-e2e-name="editions-link-uk">
            <span class="editions-link-name">International</span>
            <span class="editions-link-abbr">INTL</span>
          </a>
        </li>
        <li class="editions-listitem at">
          <a class="editions-link" href="#" data-e2e-name="editions-link-de">
            <span class="editions-link-name">Österreich</span>
            <span class="editions-link-abbr">AT</span>
          </a>
        </li>
        <li class="editions-listitem aus">
          <a class="editions-link" href="#" data-e2e-name="editions-link-aus">
            <span class="editions-link-name">Australia</span>
            <span class="editions-link-abbr">AUS</span>
          </a>
        </li>
        <li class="editions-listitem de">
          <a class="editions-link" href="#" data-e2e-name="editions-link-de">
            <span class="editions-link-name">Deutschland</span>
            <span class="editions-link-abbr">DE</span>
          </a>
        </li>
        <li class="editions-listitem es">
          <a class="editions-link" href="#" data-e2e-name="editions-link-es">
            <span class="editions-link-name">España</span>
            <span class="editions-link-abbr">ES</span>
          </a>
        </li>

        <li class="editions-listitem fr">
          <a class="editions-link" href="#" data-e2e-name="editions-link-fr">
            <span class="editions-link-name">France</span>
            <span class="editions-link-abbr">FR</span>
          </a>
        </li>
        <li class="editions-listitem in">
          <a class="editions-link" href="#" data-e2e-name="editions-link-in">
            <span class="editions-link-name">India</span>
            <span class="editions-link-abbr">IN</span>
          </a>
        </li>
        <li class="editions-listitem it">
          <a class="editions-link" href="#" data-e2e-name="editions-link-it">
            <span class="editions-link-name">Italy</span>
            <span class="editions-link-abbr">IT</span>
          </a>
        </li>
        <li class="editions-listitem jp">
          <a class="editions-link" href="#" data-e2e-name="editions-link-jp">
            <span class="editions-link-name">Japan</span>
            <span class="editions-link-abbr">JP</span>
          </a>
        </li>
        <li class="editions-listitem mx">
          <a class="editions-link" href="#" data-e2e-name="editions-link-mx">
            <span class="editions-link-name">México</span>
            <span class="editions-link-abbr">MX</span>
          </a>
        </li>
        <li class="editions-listitem nl">
          <a class="editions-link" href="#" data-e2e-name="editions-link-nl">
            <span class="editions-link-name">Netherlands</span>
            <span class="editions-link-abbr">NL</span>
          </a>
        </li>
        <li class="editions-listitem se">
          <a class="editions-link" href="#" data-e2e-name="editions-link-se">
            <span class="editions-link-name">Nordic</span>
            <span class="editions-link-abbr">SE</span>
          </a>
        </li>
        <li class="editions-listitem pl">
          <a class="editions-link" href="#" data-e2e-name="editions-link-pl">
            <span class="editions-link-name">Polska</span>
            <span class="editions-link-abbr">PL</span>
          </a>
        </li>
        <li class="editions-listitem za">
          <a class="editions-link" href="#" data-e2e-name="editions-link-za">
            <span class="editions-link-name">South Africa</span>
            <span class="editions-link-abbr">ZA</span>
          </a>
        </li>
      </ul>
    </section>
  </section>
  <section class="editions-list-inline">
    <ul class="copy-listgroup" id="ca-privacy-rights"></ul>
  </section>
</div>


<?php include_once(__DIR__ . '/../styles.php'); ?>
<style>
/* button active */
.fab {
  position: fixed;
  bottom: 32px;
  right: 32px;
  border-radius: 50%;
  width: 48px;
  height: 48px;
  background: #db4437;
  box-shadow: 1px 2px 4px grey;
  z-index: 5;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.edit {
  display: block;
  padding: 0;
  line-height: 65px;
  animation: shake 0.5s ease infinite alternate;
  transition-property: all;
  transition-duration: 0.3s;
  transition-timing-function: ease;
  transition-delay: 0s;
}

@keyframes shake {
  0% {
    transform: rotateZ(45deg);
  }

  100% {
    transform: rotateZ(0deg);
  }
}

.fab:hover {
  cursor: pointer;
}

.fab img {
  width: 45%;
  transform: rotate(45deg);
  transition: 0.4s;
}

.box {
  position: fixed;
  bottom: 44px;
  right: 5px;
  height: 0px;
  transition-delay: 0.3s;
  width: 80px;
  transition: 0.5s cubic-bezier(0.445, 0.05, 0.55, 0.95);
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.item {
  overflow: hidden;
  border-radius: 50%;
  transition: 0.4 ease-in;
  width: 44px;
  height: 44px;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  box-shadow: 1px 1px 3px grey;
  margin-left: 7px;
  margin-top: 15px;

}

.item1 {
  transition-delay: 0.2s;
  background: #1565c0;
}

.item2 {
  transition-delay: 0.4s;
  background: #29b6fc;
}

.item3 {
  transition-delay: 0.6s;
  background: white;
}

.item4 {
  transition-delay: 0.8s;
  background: white;
}

.item:hover {
  cursor: pointer;
}

.item:hover img {
  transform: rotate(360deg);
  transition: all 0.5s;
}

.box-active {
  height: 500px;
  z-index: 4;
}

.fab-active img {
  transform: rotate(270deg);
  width: 40%;
}

.choose-color {
  color: white;
}

.block {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-color: black;
  opacity: 0.4;
  filter: alpha(opacity=40);
  width: 100%;
  height: 100%;
  /* Not work! */
  z-index: 30;

}

.block-active {
  display: none;
}

.room {
  z-index: 31;
}

.facebook {
  position: relative;
}

.twitter {
  position: relative;
}

.google {
  position: relative;
}

.hotline {
  position: relative;
}

.zalo {
  position: relative;
}



.title-F {
  width: 120px;
  position: absolute;
  font-size: 18px;
  font-weight: 600;
  color: #1565c0;
  top: 86px;
  left: -100px;
}

.title-T {
  width: 120px;
  position: absolute;
  font-size: 18px;
  font-weight: 600;
  color: #1565c0;
  top: 158px;
  left: -100px;
}

.title-H {
  width: 120px;
  position: absolute;
  font-size: 18px;
  font-weight: 600;
  color: #1565c0;
  top: 300px;
  left: -100px;
}

.title-G {
  width: 120px;
  position: absolute;
  font-size: 18px;
  font-weight: 600;
  color: #1565c0;
  top: 232px;
  left: -100px;
}

.title-Z {
  width: 120px;
  position: absolute;
  font-size: 18px;
  font-weight: 600;
  color: #1565c0;
  top: 380px;
  left: -100px;
}

.color {
  align-items:
    center;
  color: #fff;
  display:
    inline-flex;
  flex-wrap:
    wrap;
  font-family:
    Quicksand;
  font-size:
    14px;
  font-weight:
    700;
  letter-spacing:
    0.28px;
  line-height:
    20px;
  text-transform:
    uppercase;
}

.text {
  font-weight: 600;
  font-size: 12px;
  color: white;
}
</style>
<div class="block block-active"></div>
<div class="room">
  <div class="fab">
    <img class="edit" src="https://nguyenvu.store/wp-content/uploads/2021/08/Icon-Robot.png" alt="">
  </div>
  <div class="box">
    <div class="title-F">
      <span class="color">Facebook </br>
        <div class="">
          <p class="text">Tư vấn Online</p>
        </div>
      </span>
    </div>
    <a href="https://www.facebook.com/poppy.nhat.3" class="item item1 facebook mb-3" style="text-decoration: none;">

      <img src="/website_tmdt/assets/uploads/icon/facebook.png" alt="" style="width: 40px; height: 40px;">
    </a>
    <!--  -->
    <div class="title-T">
      <span class="color">Twitter </br>
        <p class="text">Tư vấn Online</p>
      </span>
    </div>
    <a href="" class="item item2 twitter mb-3" style="text-decoration: none;">
      <img src="/website_tmdt/assets/uploads/icon/twitter.jpg" alt="" style="width: 30px; height: 30px;">
    </a>
    <!--  -->
    <div class="title-G">
      <span class="color">Google </br>
        <p class="text">Tìm kiếm</p>
      </span>
    </div>
    <a href="" class="item item3 google mb-3" style="text-decoration: none;">
      <img src="/website_tmdt/assets/uploads/icon/google.png" alt="" style="width: 30px; height: 30px;">
    </a>
    <!--  -->
    <div class="title-H">
      <span class="color">Hotline </br>
        <p class="text">Tư vấn Online</p>
      </span>
    </div>
    <a href="" class="item item4 hotline mb-3" style="text-decoration: none;">
      <img src="/website_tmdt/assets/uploads/icon/hotline.jpg" alt="" style="width: 40px; height: 40px;">
    </a>
    <div class="title-Z">
      <span class="color">Zalo </br>
        <p class="text">Tư vấn Online</p>
      </span>
    </div>
    <a href="https://chat.zalo.me/" class="item item4 zalo">
      <img src="/website_tmdt/assets/uploads/icon/zalo.png" alt="" style="width: 40px; height: 40px;">
    </a>
  </div>
</div>

<script>
document.querySelector('.fab').addEventListener('click', function(e) {
  document.querySelector('.box').classList.toggle('box-active');
  document.querySelector('.block').classList.toggle('block-active');
  document.querySelector('.fab').classList.toggle('fab-active');
})
</script>