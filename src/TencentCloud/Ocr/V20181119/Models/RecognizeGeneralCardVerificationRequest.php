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
 * RecognizeGeneralCardVerification request structure.
 *
 * @method string getImageBase64() Obtain Base64 value of the front document image. Supported formats: PNG, JPG, JPEG. The Base64 encoded size shall not exceed 7 MB. One of ImageUrl, ImageBase64, BackImageUrl, BackImageBase64 must be provided. If both URL and Base64 are passed, URL will be used preferentially. Image download timeout is 3 seconds.
 * @method void setImageBase64(string $ImageBase64) Set Base64 value of the front document image. Supported formats: PNG, JPG, JPEG. The Base64 encoded size shall not exceed 7 MB. One of ImageUrl, ImageBase64, BackImageUrl, BackImageBase64 must be provided. If both URL and Base64 are passed, URL will be used preferentially. Image download timeout is 3 seconds.
 * @method string getImageUrl() Obtain URL address of the front side image of the card. Refer to the description of ImageBase64 for image requirements.
 * @method void setImageUrl(string $ImageUrl) Set URL address of the front side image of the card. Refer to the description of ImageBase64 for image requirements.
 * @method string getBackImageBase64() Obtain Base64-encoded value of the back side image of the card. Refer to the description of ImageBase64 for image requirements.
 * @method void setBackImageBase64(string $BackImageBase64) Set Base64-encoded value of the back side image of the card. Refer to the description of ImageBase64 for image requirements.
 * @method string getBackImageUrl() Obtain URL address of the back side image of the card. Refer to the description of ImageBase64 for image requirements.
 * @method void setBackImageUrl(string $BackImageUrl) Set URL address of the back side image of the card. Refer to the description of ImageBase64 for image requirements.
 * @method array getCardTypes() Obtain Specifies the target document type for this verification. Each element is a full card type enum in the format {CountryOrRegionCode}_{CardType}, such as THA_ID_CARD and PHL_UMID. For passports, use the single value PASSPORT regardless of the issuing country. Wildcards are supported: * indicates all supported card types, and {CountryCode}_* indicates all card types of a country/region, such as PHL_*. If this parameter is not specified or an empty array is passed, the server performs automatic classification across all supported card types. An unsupported card type returns InvalidParameterValueLimit, and the unsupported values are listed in the error message.
 * @method void setCardTypes(array $CardTypes) Set Specifies the target document type for this verification. Each element is a full card type enum in the format {CountryOrRegionCode}_{CardType}, such as THA_ID_CARD and PHL_UMID. For passports, use the single value PASSPORT regardless of the issuing country. Wildcards are supported: * indicates all supported card types, and {CountryCode}_* indicates all card types of a country/region, such as PHL_*. If this parameter is not specified or an empty array is passed, the server performs automatic classification across all supported card types. An unsupported card type returns InvalidParameterValueLimit, and the unsupported values are listed in the error message.
 * @method boolean getReturnHeadImage() Obtain Whether to return the Base64-encoded portrait image of the card. Default: false.
 * @method void setReturnHeadImage(boolean $ReturnHeadImage) Set Whether to return the Base64-encoded portrait image of the card. Default: false.
 * @method CardVerificationConfig getVerificationConfig() Obtain Card verification configuration.
 * @method void setVerificationConfig(CardVerificationConfig $VerificationConfig) Set Card verification configuration.
 */
class RecognizeGeneralCardVerificationRequest extends AbstractModel
{
    /**
     * @var string Base64 value of the front document image. Supported formats: PNG, JPG, JPEG. The Base64 encoded size shall not exceed 7 MB. One of ImageUrl, ImageBase64, BackImageUrl, BackImageBase64 must be provided. If both URL and Base64 are passed, URL will be used preferentially. Image download timeout is 3 seconds.
     */
    public $ImageBase64;

    /**
     * @var string URL address of the front side image of the card. Refer to the description of ImageBase64 for image requirements.
     */
    public $ImageUrl;

    /**
     * @var string Base64-encoded value of the back side image of the card. Refer to the description of ImageBase64 for image requirements.
     */
    public $BackImageBase64;

    /**
     * @var string URL address of the back side image of the card. Refer to the description of ImageBase64 for image requirements.
     */
    public $BackImageUrl;

    /**
     * @var array Specifies the target document type for this verification. Each element is a full card type enum in the format {CountryOrRegionCode}_{CardType}, such as THA_ID_CARD and PHL_UMID. For passports, use the single value PASSPORT regardless of the issuing country. Wildcards are supported: * indicates all supported card types, and {CountryCode}_* indicates all card types of a country/region, such as PHL_*. If this parameter is not specified or an empty array is passed, the server performs automatic classification across all supported card types. An unsupported card type returns InvalidParameterValueLimit, and the unsupported values are listed in the error message.
     */
    public $CardTypes;

    /**
     * @var boolean Whether to return the Base64-encoded portrait image of the card. Default: false.
     */
    public $ReturnHeadImage;

    /**
     * @var CardVerificationConfig Card verification configuration.
     */
    public $VerificationConfig;

    /**
     * @param string $ImageBase64 Base64 value of the front document image. Supported formats: PNG, JPG, JPEG. The Base64 encoded size shall not exceed 7 MB. One of ImageUrl, ImageBase64, BackImageUrl, BackImageBase64 must be provided. If both URL and Base64 are passed, URL will be used preferentially. Image download timeout is 3 seconds.
     * @param string $ImageUrl URL address of the front side image of the card. Refer to the description of ImageBase64 for image requirements.
     * @param string $BackImageBase64 Base64-encoded value of the back side image of the card. Refer to the description of ImageBase64 for image requirements.
     * @param string $BackImageUrl URL address of the back side image of the card. Refer to the description of ImageBase64 for image requirements.
     * @param array $CardTypes Specifies the target document type for this verification. Each element is a full card type enum in the format {CountryOrRegionCode}_{CardType}, such as THA_ID_CARD and PHL_UMID. For passports, use the single value PASSPORT regardless of the issuing country. Wildcards are supported: * indicates all supported card types, and {CountryCode}_* indicates all card types of a country/region, such as PHL_*. If this parameter is not specified or an empty array is passed, the server performs automatic classification across all supported card types. An unsupported card type returns InvalidParameterValueLimit, and the unsupported values are listed in the error message.
     * @param boolean $ReturnHeadImage Whether to return the Base64-encoded portrait image of the card. Default: false.
     * @param CardVerificationConfig $VerificationConfig Card verification configuration.
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
        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("BackImageBase64",$param) and $param["BackImageBase64"] !== null) {
            $this->BackImageBase64 = $param["BackImageBase64"];
        }

        if (array_key_exists("BackImageUrl",$param) and $param["BackImageUrl"] !== null) {
            $this->BackImageUrl = $param["BackImageUrl"];
        }

        if (array_key_exists("CardTypes",$param) and $param["CardTypes"] !== null) {
            $this->CardTypes = $param["CardTypes"];
        }

        if (array_key_exists("ReturnHeadImage",$param) and $param["ReturnHeadImage"] !== null) {
            $this->ReturnHeadImage = $param["ReturnHeadImage"];
        }

        if (array_key_exists("VerificationConfig",$param) and $param["VerificationConfig"] !== null) {
            $this->VerificationConfig = new CardVerificationConfig();
            $this->VerificationConfig->deserialize($param["VerificationConfig"]);
        }
    }
}
