<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExtractDocMulti request structure.
 *
 * @method string getImageUrl() Obtain The Url address of the image. supported image formats: PNG, JPG, JPEG, WORD, EXCEL. GIF format is not currently supported. supported image size: no more than 10M after Base64 encoding. image download time should not exceed 3 seconds. supported image pixels: between 20-10000px. images stored in tencent cloud's Url ensure higher download speed and stability. it is recommended to store images in tencent cloud. the speed and stability of non-tencent cloud storage urls may be impacted.
 * @method void setImageUrl(string $ImageUrl) Set The Url address of the image. supported image formats: PNG, JPG, JPEG, WORD, EXCEL. GIF format is not currently supported. supported image size: no more than 10M after Base64 encoding. image download time should not exceed 3 seconds. supported image pixels: between 20-10000px. images stored in tencent cloud's Url ensure higher download speed and stability. it is recommended to store images in tencent cloud. the speed and stability of non-tencent cloud storage urls may be impacted.
 * @method string getImageBase64() Obtain The Base64 value of the image. supported image formats: PNG, JPG, JPEG, WORD, EXCEL. GIF format is not currently supported. supported image size: no more than 10M after encoding the downloaded image with Base64. image download time: no more than 3 seconds. supported image pixels: between 20-10000px. either ImageUrl or ImageBase64 must be provided. if both are provided, only use ImageUrl.
 * @method void setImageBase64(string $ImageBase64) Set The Base64 value of the image. supported image formats: PNG, JPG, JPEG, WORD, EXCEL. GIF format is not currently supported. supported image size: no more than 10M after encoding the downloaded image with Base64. image download time: no more than 3 seconds. supported image pixels: between 20-10000px. either ImageUrl or ImageBase64 must be provided. if both are provided, only use ImageUrl.
 * @method integer getPdfPageNumber() Obtain Specifies the page number of the PDF to be recognized. only single page recognition is supported. valid when uploading a PDF file with the IsPdf parameter set to true. default value is the first 3 pages.
 * @method void setPdfPageNumber(integer $PdfPageNumber) Set Specifies the page number of the PDF to be recognized. only single page recognition is supported. valid when uploading a PDF file with the IsPdf parameter set to true. default value is the first 3 pages.
 * @method array getItemNames() Obtain Specifies the field names to be returned by the customized structuring feature. for example, if the customer wants to add the recognition result of two fields, name and gender, manually input ItemNames=["name","gender"].
 * @method void setItemNames(array $ItemNames) Set Specifies the field names to be returned by the customized structuring feature. for example, if the customer wants to add the recognition result of two fields, name and gender, manually input ItemNames=["name","gender"].
 * @method boolean getItemNamesShowMode() Obtain true: only custom field.
False: default value field + custom field.
Default true.
 * @method void setItemNamesShowMode(boolean $ItemNamesShowMode) Set true: only custom field.
False: default value field + custom field.
Default true.
 * @method boolean getReturnFullText() Obtain Whether the full-text field recognition is enabled.
 * @method void setReturnFullText(boolean $ReturnFullText) Set Whether the full-text field recognition is enabled.
 * @method string getConfigId() Obtain Configuration ID support: 
-- General
-- InvoiceEng
-- WayBillEng
-- CustomsDeclaration
-- WeightNote
-- MedicalMeter
-- BillOfLading
-- EntrustmentBook
-- Statement
-- BookingConfirmation
-- AirWayBill
-- Table
-- SteelLabel
-- CarInsurance
-- MultiRealEstateCertificate
-- MultiRealEstateMaterial
-- HongKongUtilityBill
 * @method void setConfigId(string $ConfigId) Set Configuration ID support: 
-- General
-- InvoiceEng
-- WayBillEng
-- CustomsDeclaration
-- WeightNote
-- MedicalMeter
-- BillOfLading
-- EntrustmentBook
-- Statement
-- BookingConfirmation
-- AirWayBill
-- Table
-- SteelLabel
-- CarInsurance
-- MultiRealEstateCertificate
-- MultiRealEstateMaterial
-- HongKongUtilityBill
 * @method boolean getEnableCoord() Obtain Whether the full-text field coordinate value recognition is enabled.
 * @method void setEnableCoord(boolean $EnableCoord) Set Whether the full-text field coordinate value recognition is enabled.
 * @method boolean getOutputParentKey() Obtain Whether parent-child key recognition is enabled. the option is selected by default.
 * @method void setOutputParentKey(boolean $OutputParentKey) Set Whether parent-child key recognition is enabled. the option is selected by default.
 * @method ConfigAdvanced getConfigAdvanced() Obtain Single attribute configuration of a template.
 * @method void setConfigAdvanced(ConfigAdvanced $ConfigAdvanced) Set Single attribute configuration of a template.
 * @method string getOutputLanguage() Obtain When cn, the added key is chinese.  
When set to en, the added key is english.
 * @method void setOutputLanguage(string $OutputLanguage) Set When cn, the added key is chinese.  
When set to en, the added key is english.
 */
class ExtractDocMultiRequest extends AbstractModel
{
    /**
     * @var string The Url address of the image. supported image formats: PNG, JPG, JPEG, WORD, EXCEL. GIF format is not currently supported. supported image size: no more than 10M after Base64 encoding. image download time should not exceed 3 seconds. supported image pixels: between 20-10000px. images stored in tencent cloud's Url ensure higher download speed and stability. it is recommended to store images in tencent cloud. the speed and stability of non-tencent cloud storage urls may be impacted.
     */
    public $ImageUrl;

    /**
     * @var string The Base64 value of the image. supported image formats: PNG, JPG, JPEG, WORD, EXCEL. GIF format is not currently supported. supported image size: no more than 10M after encoding the downloaded image with Base64. image download time: no more than 3 seconds. supported image pixels: between 20-10000px. either ImageUrl or ImageBase64 must be provided. if both are provided, only use ImageUrl.
     */
    public $ImageBase64;

    /**
     * @var integer Specifies the page number of the PDF to be recognized. only single page recognition is supported. valid when uploading a PDF file with the IsPdf parameter set to true. default value is the first 3 pages.
     */
    public $PdfPageNumber;

    /**
     * @var array Specifies the field names to be returned by the customized structuring feature. for example, if the customer wants to add the recognition result of two fields, name and gender, manually input ItemNames=["name","gender"].
     */
    public $ItemNames;

    /**
     * @var boolean true: only custom field.
False: default value field + custom field.
Default true.
     */
    public $ItemNamesShowMode;

    /**
     * @var boolean Whether the full-text field recognition is enabled.
     */
    public $ReturnFullText;

    /**
     * @var string Configuration ID support: 
-- General
-- InvoiceEng
-- WayBillEng
-- CustomsDeclaration
-- WeightNote
-- MedicalMeter
-- BillOfLading
-- EntrustmentBook
-- Statement
-- BookingConfirmation
-- AirWayBill
-- Table
-- SteelLabel
-- CarInsurance
-- MultiRealEstateCertificate
-- MultiRealEstateMaterial
-- HongKongUtilityBill
     */
    public $ConfigId;

    /**
     * @var boolean Whether the full-text field coordinate value recognition is enabled.
     */
    public $EnableCoord;

    /**
     * @var boolean Whether parent-child key recognition is enabled. the option is selected by default.
     */
    public $OutputParentKey;

    /**
     * @var ConfigAdvanced Single attribute configuration of a template.
     */
    public $ConfigAdvanced;

    /**
     * @var string When cn, the added key is chinese.  
When set to en, the added key is english.
     */
    public $OutputLanguage;

    /**
     * @param string $ImageUrl The Url address of the image. supported image formats: PNG, JPG, JPEG, WORD, EXCEL. GIF format is not currently supported. supported image size: no more than 10M after Base64 encoding. image download time should not exceed 3 seconds. supported image pixels: between 20-10000px. images stored in tencent cloud's Url ensure higher download speed and stability. it is recommended to store images in tencent cloud. the speed and stability of non-tencent cloud storage urls may be impacted.
     * @param string $ImageBase64 The Base64 value of the image. supported image formats: PNG, JPG, JPEG, WORD, EXCEL. GIF format is not currently supported. supported image size: no more than 10M after encoding the downloaded image with Base64. image download time: no more than 3 seconds. supported image pixels: between 20-10000px. either ImageUrl or ImageBase64 must be provided. if both are provided, only use ImageUrl.
     * @param integer $PdfPageNumber Specifies the page number of the PDF to be recognized. only single page recognition is supported. valid when uploading a PDF file with the IsPdf parameter set to true. default value is the first 3 pages.
     * @param array $ItemNames Specifies the field names to be returned by the customized structuring feature. for example, if the customer wants to add the recognition result of two fields, name and gender, manually input ItemNames=["name","gender"].
     * @param boolean $ItemNamesShowMode true: only custom field.
False: default value field + custom field.
Default true.
     * @param boolean $ReturnFullText Whether the full-text field recognition is enabled.
     * @param string $ConfigId Configuration ID support: 
-- General
-- InvoiceEng
-- WayBillEng
-- CustomsDeclaration
-- WeightNote
-- MedicalMeter
-- BillOfLading
-- EntrustmentBook
-- Statement
-- BookingConfirmation
-- AirWayBill
-- Table
-- SteelLabel
-- CarInsurance
-- MultiRealEstateCertificate
-- MultiRealEstateMaterial
-- HongKongUtilityBill
     * @param boolean $EnableCoord Whether the full-text field coordinate value recognition is enabled.
     * @param boolean $OutputParentKey Whether parent-child key recognition is enabled. the option is selected by default.
     * @param ConfigAdvanced $ConfigAdvanced Single attribute configuration of a template.
     * @param string $OutputLanguage When cn, the added key is chinese.  
When set to en, the added key is english.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("PdfPageNumber",$param) and $param["PdfPageNumber"] !== null) {
            $this->PdfPageNumber = $param["PdfPageNumber"];
        }

        if (array_key_exists("ItemNames",$param) and $param["ItemNames"] !== null) {
            $this->ItemNames = $param["ItemNames"];
        }

        if (array_key_exists("ItemNamesShowMode",$param) and $param["ItemNamesShowMode"] !== null) {
            $this->ItemNamesShowMode = $param["ItemNamesShowMode"];
        }

        if (array_key_exists("ReturnFullText",$param) and $param["ReturnFullText"] !== null) {
            $this->ReturnFullText = $param["ReturnFullText"];
        }

        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("EnableCoord",$param) and $param["EnableCoord"] !== null) {
            $this->EnableCoord = $param["EnableCoord"];
        }

        if (array_key_exists("OutputParentKey",$param) and $param["OutputParentKey"] !== null) {
            $this->OutputParentKey = $param["OutputParentKey"];
        }

        if (array_key_exists("ConfigAdvanced",$param) and $param["ConfigAdvanced"] !== null) {
            $this->ConfigAdvanced = new ConfigAdvanced();
            $this->ConfigAdvanced->deserialize($param["ConfigAdvanced"]);
        }

        if (array_key_exists("OutputLanguage",$param) and $param["OutputLanguage"] !== null) {
            $this->OutputLanguage = $param["OutputLanguage"];
        }
    }
}
