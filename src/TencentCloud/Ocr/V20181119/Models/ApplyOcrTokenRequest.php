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
 * ApplyOcrToken request structure.
 *
 * @method string getNationality() Obtain Country code. ISO 3166-1 Alpha-3 country/region code standard.
 * @method void setNationality(string $Nationality) Set Country code. ISO 3166-1 Alpha-3 country/region code standard.
 * @method string getCardType() Obtain Supported countries/regions and document types:

Mainland China: ID_CARD, PERMIT
Hong Kong: ID_CARD
Macao: ID_CARD
Hong Kong/Macao/Taiwan: MAINLAND_PERMIT, HMT_RESIDENT_PERMIT
Thailand: ID_CARD, THA_PINK_CARD
Indonesia: ID_CARD
Malaysia: ID_CARD
Singapore: ID_CARD
Philippines: PHL_UMID, PHL_VOTE_ID, PHL_TIN_ID, PHL_SSS_ID, DRIVING_LICENSE
Any country/region: PASSPORT
 * @method void setCardType(string $CardType) Set Supported countries/regions and document types:

Mainland China: ID_CARD, PERMIT
Hong Kong: ID_CARD
Macao: ID_CARD
Hong Kong/Macao/Taiwan: MAINLAND_PERMIT, HMT_RESIDENT_PERMIT
Thailand: ID_CARD, THA_PINK_CARD
Indonesia: ID_CARD
Malaysia: ID_CARD
Singapore: ID_CARD
Philippines: PHL_UMID, PHL_VOTE_ID, PHL_TIN_ID, PHL_SSS_ID, DRIVING_LICENSE
Any country/region: PASSPORT
 * @method string getEncryptedConfig() Obtain SDK-generated device-related encryption configuration information.
 * @method void setEncryptedConfig(string $EncryptedConfig) Set SDK-generated device-related encryption configuration information.
 * @method boolean getReturnHeadImage() Obtain <p>Whether to extract the portrait image from the document. false by default</p><p>Default value: false</p>
 * @method void setReturnHeadImage(boolean $ReturnHeadImage) Set <p>Whether to extract the portrait image from the document. false by default</p><p>Default value: false</p>
 * @method integer getRetryLimit() Obtain <p>Maximum number of token retries</p><p>Value range: [1, 5]</p><p>Default value: 3</p>
 * @method void setRetryLimit(integer $RetryLimit) Set <p>Maximum number of token retries</p><p>Value range: [1, 5]</p><p>Default value: 3</p>
 * @method string getOcrModeType() Obtain <p>SDK capture mode</p><p>Enumeration values:</p><ul><li>OCR_DETECT_MANUAL: Photo recognition mode. The system performs recognition after you tap to take a photo.</li><li>OCR_DETECT_AUTO_MANUAL: Automatic recognition mode. The system recognizes automatically, and you can switch to photo recognition after a recognition timeout.</li><li>OCR_DETECT_AUTO: Pure automatic recognition mode. The system recognizes automatically, and you cannot switch to photo recognition after a recognition timeout.</li><li>OCR_DETECT_AUTO_MULTI: Pure automatic recognition mode (multiple images). The system turns on the flash and automatically collects multiple document photos.</li></ul><p>Default value: OCR_DETECT_AUTO_MANUAL</p>
 * @method void setOcrModeType(string $OcrModeType) Set <p>SDK capture mode</p><p>Enumeration values:</p><ul><li>OCR_DETECT_MANUAL: Photo recognition mode. The system performs recognition after you tap to take a photo.</li><li>OCR_DETECT_AUTO_MANUAL: Automatic recognition mode. The system recognizes automatically, and you can switch to photo recognition after a recognition timeout.</li><li>OCR_DETECT_AUTO: Pure automatic recognition mode. The system recognizes automatically, and you cannot switch to photo recognition after a recognition timeout.</li><li>OCR_DETECT_AUTO_MULTI: Pure automatic recognition mode (multiple images). The system turns on the flash and automatically collects multiple document photos.</li></ul><p>Default value: OCR_DETECT_AUTO_MANUAL</p>
 * @method boolean getAllowUploadPhoto() Obtain <p>Whether to allow uploading gallery images for recognition.</p><p>Default value: true</p>
 * @method void setAllowUploadPhoto(boolean $AllowUploadPhoto) Set <p>Whether to allow uploading gallery images for recognition.</p><p>Default value: true</p>
 * @method boolean getCropIdCard() Obtain <p>Whether to enable ID card photo cropping (remove extra edges outside the document and automatically correct the shooting angle). It is false by default and only applicable to Mainland ID cards.</p><p>Default value: false</p>
 * @method void setCropIdCard(boolean $CropIdCard) Set <p>Whether to enable ID card photo cropping (remove extra edges outside the document and automatically correct the shooting angle). It is false by default and only applicable to Mainland ID cards.</p><p>Default value: false</p>
 * @method string getSdkVersion() Obtain <p>SDK-supported recognition version mode</p><p>Enumeration values:</p><ul><li>BASIC: Basic version</li><li>ENHANCED: Enhanced version</li></ul><p>Default value: BASIC</p>
 * @method void setSdkVersion(string $SdkVersion) Set <p>SDK-supported recognition version mode</p><p>Enumeration values:</p><ul><li>BASIC: Basic version</li><li>ENHANCED: Enhanced version</li></ul><p>Default value: BASIC</p>
 * @method integer getOcrAutoDetectTimeout() Obtain OCR automatic capture mode timeout (ms).
Value range: [5000, 180000].
Default value: 20000.
If the value is below 5000, it is set to 5000; if above 180000, it is set to 180000.
 * @method void setOcrAutoDetectTimeout(integer $OcrAutoDetectTimeout) Set OCR automatic capture mode timeout (ms).
Value range: [5000, 180000].
Default value: 20000.
If the value is below 5000, it is set to 5000; if above 180000, it is set to 180000.
 */
class ApplyOcrTokenRequest extends AbstractModel
{
    /**
     * @var string Country code. ISO 3166-1 Alpha-3 country/region code standard.
     */
    public $Nationality;

    /**
     * @var string Supported countries/regions and document types:

Mainland China: ID_CARD, PERMIT
Hong Kong: ID_CARD
Macao: ID_CARD
Hong Kong/Macao/Taiwan: MAINLAND_PERMIT, HMT_RESIDENT_PERMIT
Thailand: ID_CARD, THA_PINK_CARD
Indonesia: ID_CARD
Malaysia: ID_CARD
Singapore: ID_CARD
Philippines: PHL_UMID, PHL_VOTE_ID, PHL_TIN_ID, PHL_SSS_ID, DRIVING_LICENSE
Any country/region: PASSPORT
     */
    public $CardType;

    /**
     * @var string SDK-generated device-related encryption configuration information.
     */
    public $EncryptedConfig;

    /**
     * @var boolean <p>Whether to extract the portrait image from the document. false by default</p><p>Default value: false</p>
     */
    public $ReturnHeadImage;

    /**
     * @var integer <p>Maximum number of token retries</p><p>Value range: [1, 5]</p><p>Default value: 3</p>
     */
    public $RetryLimit;

    /**
     * @var string <p>SDK capture mode</p><p>Enumeration values:</p><ul><li>OCR_DETECT_MANUAL: Photo recognition mode. The system performs recognition after you tap to take a photo.</li><li>OCR_DETECT_AUTO_MANUAL: Automatic recognition mode. The system recognizes automatically, and you can switch to photo recognition after a recognition timeout.</li><li>OCR_DETECT_AUTO: Pure automatic recognition mode. The system recognizes automatically, and you cannot switch to photo recognition after a recognition timeout.</li><li>OCR_DETECT_AUTO_MULTI: Pure automatic recognition mode (multiple images). The system turns on the flash and automatically collects multiple document photos.</li></ul><p>Default value: OCR_DETECT_AUTO_MANUAL</p>
     */
    public $OcrModeType;

    /**
     * @var boolean <p>Whether to allow uploading gallery images for recognition.</p><p>Default value: true</p>
     */
    public $AllowUploadPhoto;

    /**
     * @var boolean <p>Whether to enable ID card photo cropping (remove extra edges outside the document and automatically correct the shooting angle). It is false by default and only applicable to Mainland ID cards.</p><p>Default value: false</p>
     */
    public $CropIdCard;

    /**
     * @var string <p>SDK-supported recognition version mode</p><p>Enumeration values:</p><ul><li>BASIC: Basic version</li><li>ENHANCED: Enhanced version</li></ul><p>Default value: BASIC</p>
     */
    public $SdkVersion;

    /**
     * @var integer OCR automatic capture mode timeout (ms).
Value range: [5000, 180000].
Default value: 20000.
If the value is below 5000, it is set to 5000; if above 180000, it is set to 180000.
     */
    public $OcrAutoDetectTimeout;

    /**
     * @param string $Nationality Country code. ISO 3166-1 Alpha-3 country/region code standard.
     * @param string $CardType Supported countries/regions and document types:

Mainland China: ID_CARD, PERMIT
Hong Kong: ID_CARD
Macao: ID_CARD
Hong Kong/Macao/Taiwan: MAINLAND_PERMIT, HMT_RESIDENT_PERMIT
Thailand: ID_CARD, THA_PINK_CARD
Indonesia: ID_CARD
Malaysia: ID_CARD
Singapore: ID_CARD
Philippines: PHL_UMID, PHL_VOTE_ID, PHL_TIN_ID, PHL_SSS_ID, DRIVING_LICENSE
Any country/region: PASSPORT
     * @param string $EncryptedConfig SDK-generated device-related encryption configuration information.
     * @param boolean $ReturnHeadImage <p>Whether to extract the portrait image from the document. false by default</p><p>Default value: false</p>
     * @param integer $RetryLimit <p>Maximum number of token retries</p><p>Value range: [1, 5]</p><p>Default value: 3</p>
     * @param string $OcrModeType <p>SDK capture mode</p><p>Enumeration values:</p><ul><li>OCR_DETECT_MANUAL: Photo recognition mode. The system performs recognition after you tap to take a photo.</li><li>OCR_DETECT_AUTO_MANUAL: Automatic recognition mode. The system recognizes automatically, and you can switch to photo recognition after a recognition timeout.</li><li>OCR_DETECT_AUTO: Pure automatic recognition mode. The system recognizes automatically, and you cannot switch to photo recognition after a recognition timeout.</li><li>OCR_DETECT_AUTO_MULTI: Pure automatic recognition mode (multiple images). The system turns on the flash and automatically collects multiple document photos.</li></ul><p>Default value: OCR_DETECT_AUTO_MANUAL</p>
     * @param boolean $AllowUploadPhoto <p>Whether to allow uploading gallery images for recognition.</p><p>Default value: true</p>
     * @param boolean $CropIdCard <p>Whether to enable ID card photo cropping (remove extra edges outside the document and automatically correct the shooting angle). It is false by default and only applicable to Mainland ID cards.</p><p>Default value: false</p>
     * @param string $SdkVersion <p>SDK-supported recognition version mode</p><p>Enumeration values:</p><ul><li>BASIC: Basic version</li><li>ENHANCED: Enhanced version</li></ul><p>Default value: BASIC</p>
     * @param integer $OcrAutoDetectTimeout OCR automatic capture mode timeout (ms).
Value range: [5000, 180000].
Default value: 20000.
If the value is below 5000, it is set to 5000; if above 180000, it is set to 180000.
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
        if (array_key_exists("Nationality",$param) and $param["Nationality"] !== null) {
            $this->Nationality = $param["Nationality"];
        }

        if (array_key_exists("CardType",$param) and $param["CardType"] !== null) {
            $this->CardType = $param["CardType"];
        }

        if (array_key_exists("EncryptedConfig",$param) and $param["EncryptedConfig"] !== null) {
            $this->EncryptedConfig = $param["EncryptedConfig"];
        }

        if (array_key_exists("ReturnHeadImage",$param) and $param["ReturnHeadImage"] !== null) {
            $this->ReturnHeadImage = $param["ReturnHeadImage"];
        }

        if (array_key_exists("RetryLimit",$param) and $param["RetryLimit"] !== null) {
            $this->RetryLimit = $param["RetryLimit"];
        }

        if (array_key_exists("OcrModeType",$param) and $param["OcrModeType"] !== null) {
            $this->OcrModeType = $param["OcrModeType"];
        }

        if (array_key_exists("AllowUploadPhoto",$param) and $param["AllowUploadPhoto"] !== null) {
            $this->AllowUploadPhoto = $param["AllowUploadPhoto"];
        }

        if (array_key_exists("CropIdCard",$param) and $param["CropIdCard"] !== null) {
            $this->CropIdCard = $param["CropIdCard"];
        }

        if (array_key_exists("SdkVersion",$param) and $param["SdkVersion"] !== null) {
            $this->SdkVersion = $param["SdkVersion"];
        }

        if (array_key_exists("OcrAutoDetectTimeout",$param) and $param["OcrAutoDetectTimeout"] !== null) {
            $this->OcrAutoDetectTimeout = $param["OcrAutoDetectTimeout"];
        }
    }
}
