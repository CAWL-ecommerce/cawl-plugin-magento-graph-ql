# Cawl Online Payments

## Graph QL

[![M2 Coding Standard](https://github.com/Worldline-Plugins/cawl-plugin-magento-graph-ql/actions/workflows/coding-standard.yml/badge.svg?branch=develop)](https://github.com/Worldline-Plugins/cawl-plugin-magento-graph-ql/actions/workflows/coding-standard.yml)
[![M2 Mess Detector](https://github.com/Worldline-Plugins/cawl-plugin-magento-graph-ql/actions/workflows/mess-detector.yml/badge.svg?branch=develop)](https://github.com/Worldline-Plugins/cawl-plugin-magento-graph-ql/actions/workflows/mess-detector.yml)

This is a Graph QL addon for cawl payment solutions.

This addon is included into:
- [main plugin for adobe commerce](https://github.com/Worldline-Plugins/cawl-plugin-magento)

### Change log:

#### 1.1.0
- Fixed validation for HTML template ID configuration. It is no longer required to have extension on HTML templates.
- Fixed issue where items quantities in decimals were not taken into account.
- Improved handling of orders where the total amount does not match the sum of line items amount due to the rounding.

#### 1.0.0
- Initial version.
