# OpenAPIClient-php

Billing documents collectively refer to customer invoices, credit memos, debit memos, pro forma invoices, and the related cancellation documents. This service, which offers both synchronous and asynchronous processing, makes billing document data available through its header, item, and partner entities. You can extend it with custom fields via key user extensibility. 
 
You can use this service to do the following:
 - Create billing documents with reference to billable SD documents in your system
 - Read most billing document fields at header and item level
 - Update specific billing document fields, including custom fields added through extensibility
 - Post billing documents to financial accounting to create the corresponding journal entries 


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\BillingDocumentODV4\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new BeLenka\SAP\BillingDocumentODV4\Api\BatchRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->batchPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchRequestsApi->batchPost: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://:/sap/opu/odata4/sap/api_billingdocument/srvd_a2x/sap/billingdocument/0001*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BatchRequestsApi* | [**batchPost**](docs/Api/BatchRequestsApi.md#batchpost) | **POST** /$batch | Send a group of requests
*HeaderApi* | [**billingDocumentBillingDocumentGet**](docs/Api/HeaderApi.md#billingdocumentbillingdocumentget) | **GET** /BillingDocument/{BillingDocument} | Get entity from BillingDocument by key
*HeaderApi* | [**billingDocumentBillingDocumentItemGet**](docs/Api/HeaderApi.md#billingdocumentbillingdocumentitemget) | **GET** /BillingDocument/{BillingDocument}/_Item | Get entities from related _Item
*HeaderApi* | [**billingDocumentBillingDocumentPartnerGet**](docs/Api/HeaderApi.md#billingdocumentbillingdocumentpartnerget) | **GET** /BillingDocument/{BillingDocument}/_Partner | Get entities from related _Partner
*HeaderApi* | [**billingDocumentBillingDocumentPatch**](docs/Api/HeaderApi.md#billingdocumentbillingdocumentpatch) | **PATCH** /BillingDocument/{BillingDocument} | Update entity in BillingDocument
*HeaderApi* | [**billingDocumentBillingDocumentSAPSelfPostToAccountingPost**](docs/Api/HeaderApi.md#billingdocumentbillingdocumentsapselfposttoaccountingpost) | **POST** /BillingDocument/{BillingDocument}/SAP__self.PostToAccounting | Invoke action PostToAccounting
*HeaderApi* | [**billingDocumentGet**](docs/Api/HeaderApi.md#billingdocumentget) | **GET** /BillingDocument | Get entities from BillingDocument
*HeaderApi* | [**billingDocumentItemBillingDocumentBillingDocumentItemBillingDocumentGet**](docs/Api/HeaderApi.md#billingdocumentitembillingdocumentbillingdocumentitembillingdocumentget) | **GET** /BillingDocumentItem/{BillingDocument}/{BillingDocumentItem}/_BillingDocument | Get related _BillingDocument
*HeaderApi* | [**billingDocumentItemPartnerBillingDocumentBillingDocumentItemPartnerFunctionBillingDocumentGet**](docs/Api/HeaderApi.md#billingdocumentitempartnerbillingdocumentbillingdocumentitempartnerfunctionbillingdocumentget) | **GET** /BillingDocumentItemPartner/{BillingDocument}/{BillingDocumentItem}/{PartnerFunction}/_BillingDocument | Get related _BillingDocument
*HeaderApi* | [**billingDocumentPartnerBillingDocumentPartnerFunctionBillingDocumentGet**](docs/Api/HeaderApi.md#billingdocumentpartnerbillingdocumentpartnerfunctionbillingdocumentget) | **GET** /BillingDocumentPartner/{BillingDocument}/{PartnerFunction}/_BillingDocument | Get related _BillingDocument
*HeaderApi* | [**billingDocumentSAPSelfCreateFromSDDocumentPost**](docs/Api/HeaderApi.md#billingdocumentsapselfcreatefromsddocumentpost) | **POST** /BillingDocument/SAP__self.CreateFromSDDocument | Invoke action CreateFromSDDocument
*HeaderPartnersApi* | [**billingDocumentBillingDocumentPartnerGet**](docs/Api/HeaderPartnersApi.md#billingdocumentbillingdocumentpartnerget) | **GET** /BillingDocument/{BillingDocument}/_Partner | Get entities from related _Partner
*HeaderPartnersApi* | [**billingDocumentPartnerBillingDocumentPartnerFunctionBillingDocumentGet**](docs/Api/HeaderPartnersApi.md#billingdocumentpartnerbillingdocumentpartnerfunctionbillingdocumentget) | **GET** /BillingDocumentPartner/{BillingDocument}/{PartnerFunction}/_BillingDocument | Get related _BillingDocument
*HeaderPartnersApi* | [**billingDocumentPartnerBillingDocumentPartnerFunctionGet**](docs/Api/HeaderPartnersApi.md#billingdocumentpartnerbillingdocumentpartnerfunctionget) | **GET** /BillingDocumentPartner/{BillingDocument}/{PartnerFunction} | Get entity from BillingDocumentPartner by key
*HeaderPartnersApi* | [**billingDocumentPartnerGet**](docs/Api/HeaderPartnersApi.md#billingdocumentpartnerget) | **GET** /BillingDocumentPartner | Get entities from BillingDocumentPartner
*ItemPartnersApi* | [**billingDocumentItemBillingDocumentBillingDocumentItemItemPartnerGet**](docs/Api/ItemPartnersApi.md#billingdocumentitembillingdocumentbillingdocumentitemitempartnerget) | **GET** /BillingDocumentItem/{BillingDocument}/{BillingDocumentItem}/_ItemPartner | Get entities from related _ItemPartner
*ItemPartnersApi* | [**billingDocumentItemPartnerBillingDocumentBillingDocumentItemPartnerFunctionBillingDocumentGet**](docs/Api/ItemPartnersApi.md#billingdocumentitempartnerbillingdocumentbillingdocumentitempartnerfunctionbillingdocumentget) | **GET** /BillingDocumentItemPartner/{BillingDocument}/{BillingDocumentItem}/{PartnerFunction}/_BillingDocument | Get related _BillingDocument
*ItemPartnersApi* | [**billingDocumentItemPartnerBillingDocumentBillingDocumentItemPartnerFunctionGet**](docs/Api/ItemPartnersApi.md#billingdocumentitempartnerbillingdocumentbillingdocumentitempartnerfunctionget) | **GET** /BillingDocumentItemPartner/{BillingDocument}/{BillingDocumentItem}/{PartnerFunction} | Get entity from BillingDocumentItemPartner by key
*ItemPartnersApi* | [**billingDocumentItemPartnerBillingDocumentBillingDocumentItemPartnerFunctionItemGet**](docs/Api/ItemPartnersApi.md#billingdocumentitempartnerbillingdocumentbillingdocumentitempartnerfunctionitemget) | **GET** /BillingDocumentItemPartner/{BillingDocument}/{BillingDocumentItem}/{PartnerFunction}/_Item | Get related _Item
*ItemPartnersApi* | [**billingDocumentItemPartnerGet**](docs/Api/ItemPartnersApi.md#billingdocumentitempartnerget) | **GET** /BillingDocumentItemPartner | Get entities from BillingDocumentItemPartner
*ItemsApi* | [**billingDocumentBillingDocumentItemGet**](docs/Api/ItemsApi.md#billingdocumentbillingdocumentitemget) | **GET** /BillingDocument/{BillingDocument}/_Item | Get entities from related _Item
*ItemsApi* | [**billingDocumentItemBillingDocumentBillingDocumentItemBillingDocumentGet**](docs/Api/ItemsApi.md#billingdocumentitembillingdocumentbillingdocumentitembillingdocumentget) | **GET** /BillingDocumentItem/{BillingDocument}/{BillingDocumentItem}/_BillingDocument | Get related _BillingDocument
*ItemsApi* | [**billingDocumentItemBillingDocumentBillingDocumentItemGet**](docs/Api/ItemsApi.md#billingdocumentitembillingdocumentbillingdocumentitemget) | **GET** /BillingDocumentItem/{BillingDocument}/{BillingDocumentItem} | Get entity from BillingDocumentItem by key
*ItemsApi* | [**billingDocumentItemBillingDocumentBillingDocumentItemItemPartnerGet**](docs/Api/ItemsApi.md#billingdocumentitembillingdocumentbillingdocumentitemitempartnerget) | **GET** /BillingDocumentItem/{BillingDocument}/{BillingDocumentItem}/_ItemPartner | Get entities from related _ItemPartner
*ItemsApi* | [**billingDocumentItemBillingDocumentBillingDocumentItemPatch**](docs/Api/ItemsApi.md#billingdocumentitembillingdocumentbillingdocumentitempatch) | **PATCH** /BillingDocumentItem/{BillingDocument}/{BillingDocumentItem} | Update entity in BillingDocumentItem
*ItemsApi* | [**billingDocumentItemGet**](docs/Api/ItemsApi.md#billingdocumentitemget) | **GET** /BillingDocumentItem | Get entities from BillingDocumentItem
*ItemsApi* | [**billingDocumentItemPartnerBillingDocumentBillingDocumentItemPartnerFunctionItemGet**](docs/Api/ItemsApi.md#billingdocumentitempartnerbillingdocumentbillingdocumentitempartnerfunctionitemget) | **GET** /BillingDocumentItemPartner/{BillingDocument}/{BillingDocumentItem}/{PartnerFunction}/_Item | Get related _Item

## Models

- [AbsExchRateAcct](docs/Model/AbsExchRateAcct.md)
- [AbsExchRatePrc](docs/Model/AbsExchRatePrc.md)
- [AbsExchRateStats](docs/Model/AbsExchRateStats.md)
- [BillingDocumentSAPSelfCreateFromSDDocumentPostRequest](docs/Model/BillingDocumentSAPSelfCreateFromSDDocumentPostRequest.md)
- [BillingQtyInSKU](docs/Model/BillingQtyInSKU.md)
- [CashDiscBas](docs/Model/CashDiscBas.md)
- [CollectionOfBillingDocumentItemPartnerType](docs/Model/CollectionOfBillingDocumentItemPartnerType.md)
- [CollectionOfBillingDocumentItemType](docs/Model/CollectionOfBillingDocumentItemType.md)
- [CollectionOfBillingDocumentPartnerType](docs/Model/CollectionOfBillingDocumentPartnerType.md)
- [CollectionOfBillingDocumentType](docs/Model/CollectionOfBillingDocumentType.md)
- [ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentItemPartnerType](docs/Model/ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentItemPartnerType.md)
- [ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentItemPartnerTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentItemPartnerTypeCreate.md)
- [ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentItemPartnerTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentItemPartnerTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentItemType](docs/Model/ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentItemType.md)
- [ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentItemTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentItemTypeCreate.md)
- [ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentItemTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentItemTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentPartnerType](docs/Model/ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentPartnerType.md)
- [ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentPartnerTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentPartnerTypeCreate.md)
- [ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentPartnerTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentPartnerTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentType](docs/Model/ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentType.md)
- [ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentTypeCreate](docs/Model/ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentTypeCreate.md)
- [ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentTypeUpdate](docs/Model/ComSapGatewaySrvdA2xApiBillingdocumentV0001BillingDocumentTypeUpdate.md)
- [ComSapGatewaySrvdA2xApiBillingdocumentV0001DBillgDocCrteFrmSDDocCtrlPP](docs/Model/ComSapGatewaySrvdA2xApiBillingdocumentV0001DBillgDocCrteFrmSDDocCtrlPP.md)
- [ComSapGatewaySrvdA2xApiBillingdocumentV0001DBillgDocCrteFrmSDDocCtrlPPCreate](docs/Model/ComSapGatewaySrvdA2xApiBillingdocumentV0001DBillgDocCrteFrmSDDocCtrlPPCreate.md)
- [ComSapGatewaySrvdA2xApiBillingdocumentV0001DBillgDocCrteFrmSDDocCtrlPPUpdate](docs/Model/ComSapGatewaySrvdA2xApiBillingdocumentV0001DBillgDocCrteFrmSDDocCtrlPPUpdate.md)
- [ComSapGatewaySrvdA2xApiBillingdocumentV0001DBillgDocCrteFrmSDDocRefPP](docs/Model/ComSapGatewaySrvdA2xApiBillingdocumentV0001DBillgDocCrteFrmSDDocRefPP.md)
- [ComSapGatewaySrvdA2xApiBillingdocumentV0001DBillgDocCrteFrmSDDocRefPPCreate](docs/Model/ComSapGatewaySrvdA2xApiBillingdocumentV0001DBillgDocCrteFrmSDDocRefPPCreate.md)
- [ComSapGatewaySrvdA2xApiBillingdocumentV0001DBillgDocCrteFrmSDDocRefPPUpdate](docs/Model/ComSapGatewaySrvdA2xApiBillingdocumentV0001DBillgDocCrteFrmSDDocRefPPUpdate.md)
- [ComSapGatewaySrvdA2xApiBillingdocumentV0001SAPMessage](docs/Model/ComSapGatewaySrvdA2xApiBillingdocumentV0001SAPMessage.md)
- [ComSapGatewaySrvdA2xApiBillingdocumentV0001SAPMessageCreate](docs/Model/ComSapGatewaySrvdA2xApiBillingdocumentV0001SAPMessageCreate.md)
- [ComSapGatewaySrvdA2xApiBillingdocumentV0001SAPMessageUpdate](docs/Model/ComSapGatewaySrvdA2xApiBillingdocumentV0001SAPMessageUpdate.md)
- [Cost](docs/Model/Cost.md)
- [Count](docs/Model/Count.md)
- [CreditPrice](docs/Model/CreditPrice.md)
- [Denominator](docs/Model/Denominator.md)
- [Error](docs/Model/Error.md)
- [ErrorError](docs/Model/ErrorError.md)
- [ErrorErrorDetailsInner](docs/Model/ErrorErrorDetailsInner.md)
- [GrossValue](docs/Model/GrossValue.md)
- [GrossWeight](docs/Model/GrossWeight.md)
- [InvoicedQuantity](docs/Model/InvoicedQuantity.md)
- [NetValue](docs/Model/NetValue.md)
- [NetValue1](docs/Model/NetValue1.md)
- [NetWeight](docs/Model/NetWeight.md)
- [Numerator](docs/Model/Numerator.md)
- [RequiredQuantity](docs/Model/RequiredQuantity.md)
- [ScaleQuantity](docs/Model/ScaleQuantity.md)
- [Subtotal1](docs/Model/Subtotal1.md)
- [Subtotal2](docs/Model/Subtotal2.md)
- [Subtotal3](docs/Model/Subtotal3.md)
- [Subtotal4](docs/Model/Subtotal4.md)
- [Subtotal5](docs/Model/Subtotal5.md)
- [Subtotal6](docs/Model/Subtotal6.md)
- [TaxAmount](docs/Model/TaxAmount.md)
- [TotalAmount](docs/Model/TotalAmount.md)
- [Volume](docs/Model/Volume.md)

## Authorization

Authentication schemes defined for the API:
### BasicAuth

- **Type**: HTTP basic authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
