# Cawl Online Payments

## Graph QL

[![M2 Coding Standard](https://github.com/Worldline-Plugins/cawl-plugin-magento-graph-ql/actions/workflows/coding-standard.yml/badge.svg?branch=develop)](https://github.com/Worldline-Plugins/cawl-plugin-magento-graph-ql/actions/workflows/coding-standard.yml)
[![M2 Mess Detector](https://github.com/Worldline-Plugins/cawl-plugin-magento-graph-ql/actions/workflows/mess-detector.yml/badge.svg?branch=develop)](https://github.com/Worldline-Plugins/cawl-plugin-magento-graph-ql/actions/workflows/mess-detector.yml)

This is a Graph QL addon for cawl payment solutions.

This addon is included into:
- [main plugin for adobe commerce](https://github.com/Worldline-Plugins/cawl-plugin-magento)

### Change log:

#### 1.1.21
- Add configuration for automatic registration of webhook URLs

#### 1.1.20
- Manage exemptions for french markets

#### 1.1.19
- Add new payment method: Pledg

#### 1.1.18
- Remove MealVouchers configuration from hosted checkout
- Fix mobile payment method information not being shown in order details

#### 1.1.17
- Fix print invoice issue
- Update payment brand logos

#### 1.1.16
- Allow order creation on amount discrepancies

#### 1.1.15
- Add quote ID to request payload
- Fix wrong IP address being sent on checkout
- Decrease maximum payment method logos
- Add compatibility with 2.4.8-p2

#### 1.1.14
- Fix issue with sending email

#### 1.1.13
- Fix wrong handling of payment specific information on order page

#### 1.1.12
- Fix comma separated email validation in notification settings

#### 1.1.11
- Fix issue with showing split payment amounts on order details page for Mealvoucher transactions
- Fix issue with showing Mealvoucher in full redirect

#### 1.1.10
- Fix logo issue for CB on checkout page
- Fix PHP >= 8.2 issue with not sending parameter by reference

#### 1.1.9
- Update the redirect-payment CAWL module to version 1.1.9
- Update the credit-card CAWL module to version 1.1.8

#### 1.1.8
- Update the redirect-payment CAWL module to version 1.1.8
- Update the credit-card CAWL module to version 1.1.7

#### 1.1.7
- Update the redirect-payment CAWL module to version 1.1.7
- Update the credit-card CAWL module to version 1.1.6

#### 1.1.6
- Update the redirect-payment CAWL module to version 1.1.6
- Update the credit-card CAWL module to version 1.1.5

#### 1.1.5
- Update plugin translations

#### 1.1.4
- Add 3DS exemption types to the plugin

#### 1.1.3
- Update the redirect-payment CAWL module to version 1.1.3
- Update the credit-card CAWL module to version 1.1.2

#### 1.1.2
- Update the redirect-payment CAWL module to version 1.1.2
- Update the credit-card CAWL module to version 1.1.1

#### 1.1.1
- Update the redirect-payment CAWL module to version 1.1.1

#### 1.1.0
- Fixed validation for HTML template ID configuration. It is no longer required to have extension on HTML templates.
- Fixed issue where items quantities in decimals were not taken into account.
- Improved handling of orders where the total amount does not match the sum of line items amount due to the rounding.

#### 1.0.0
- Initial version.
