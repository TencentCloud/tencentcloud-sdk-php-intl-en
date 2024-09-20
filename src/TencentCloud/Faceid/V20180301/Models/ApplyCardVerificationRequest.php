<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApplyCardVerification request structure.
 *
 * @method string getNationality() Obtain Please select the country code of ID document.
IDN: Indonesia
HKG: Hong Kong
THA: Thailand
MYS: Malaysia
SGP: Singapore
JPN: Japan
TWN:Taiwan
AUTO: Automatic Identification
 * @method void setNationality(string $Nationality) Set Please select the country code of ID document.
IDN: Indonesia
HKG: Hong Kong
THA: Thailand
MYS: Malaysia
SGP: Singapore
JPN: Japan
TWN:Taiwan
AUTO: Automatic Identification
 * @method string getCardType() Obtain Please select the type of ID document. The supported options are:
ID_CARD
PASSPORT
DRIVING_LICENSE
AUTO
 * @method void setCardType(string $CardType) Set Please select the type of ID document. The supported options are:
ID_CARD
PASSPORT
DRIVING_LICENSE
AUTO
 * @method string getImageBase64Front() Obtain Base64 value for the front of the document. Supported image formats: PNG, JPEG. 
GIF format is not supported yet. Supported image size: The downloaded image cannot exceed 5M after Base64 encoding.
The image download takes no more than 3 seconds. Supported image resolution: 8000*8000. One of ImageUrlFront and ImageBase64 Front of the image must be provided. If both are provided, only ImageUrlFront will be used.
 * @method void setImageBase64Front(string $ImageBase64Front) Set Base64 value for the front of the document. Supported image formats: PNG, JPEG. 
GIF format is not supported yet. Supported image size: The downloaded image cannot exceed 5M after Base64 encoding.
The image download takes no more than 3 seconds. Supported image resolution: 8000*8000. One of ImageUrlFront and ImageBase64 Front of the image must be provided. If both are provided, only ImageUrlFront will be used.
 * @method string getImageBase64Back() Obtain Base64 value of the reverse side of the document. Supported image formats: PNG, JPEG. 
GIF format is not supported yet. Supported image size: The downloaded image cannot exceed 5M after Base64 encoding. The image download takes no more than 3 seconds. Maximum supported image resolution: 8000*8000. For some certificates, one of ImageUrlBack and ImageBase64Back must be provided. If both are provided, only ImageUrlBack will be used.
 * @method void setImageBase64Back(string $ImageBase64Back) Set Base64 value of the reverse side of the document. Supported image formats: PNG, JPEG. 
GIF format is not supported yet. Supported image size: The downloaded image cannot exceed 5M after Base64 encoding. The image download takes no more than 3 seconds. Maximum supported image resolution: 8000*8000. For some certificates, one of ImageUrlBack and ImageBase64Back must be provided. If both are provided, only ImageUrlBack will be used.
 * @method string getImageUrlFront() Obtain The URL value on the back of the certificate. Supported image formats: PNG, JPEG. 
GIF format is not supported yet. Supported image size: The downloaded image cannot exceed 5M after Base64 encoding. The image download takes no more than 3 seconds. Maximum supported image resolution: 8000*8000. One of ImageUrlFront and ImageBase64Front of the image must be provided. If both are provided, only ImageUrlFront will be used.
 * @method void setImageUrlFront(string $ImageUrlFront) Set The URL value on the back of the certificate. Supported image formats: PNG, JPEG. 
GIF format is not supported yet. Supported image size: The downloaded image cannot exceed 5M after Base64 encoding. The image download takes no more than 3 seconds. Maximum supported image resolution: 8000*8000. One of ImageUrlFront and ImageBase64Front of the image must be provided. If both are provided, only ImageUrlFront will be used.
 * @method string getImageUrlBack() Obtain The URL value on the back of the certificate. Supported image formats: PNG, JPEG. 
GIF format is not supported yet. Supported image size: The downloaded image cannot exceed 5M after Base64 encoding. The image download takes no more than 3 seconds. Maximum supported image resolution: 8000*8000. For some certificates, one of ImageUrlBack and ImageBase64Back must be provided. If both are provided, only ImageUrlBack will be used.
 * @method void setImageUrlBack(string $ImageUrlBack) Set The URL value on the back of the certificate. Supported image formats: PNG, JPEG. 
GIF format is not supported yet. Supported image size: The downloaded image cannot exceed 5M after Base64 encoding. The image download takes no more than 3 seconds. Maximum supported image resolution: 8000*8000. For some certificates, one of ImageUrlBack and ImageBase64Back must be provided. If both are provided, only ImageUrlBack will be used.
 */
class ApplyCardVerificationRequest extends AbstractModel
{
    /**
     * @var string Please select the country code of ID document.
IDN: Indonesia
HKG: Hong Kong
THA: Thailand
MYS: Malaysia
SGP: Singapore
JPN: Japan
TWN:Taiwan
AUTO: Automatic Identification
     */
    public $Nationality;

    /**
     * @var string Please select the type of ID document. The supported options are:
ID_CARD
PASSPORT
DRIVING_LICENSE
AUTO
     */
    public $CardType;

    /**
     * @var string Base64 value for the front of the document. Supported image formats: PNG, JPEG. 
GIF format is not supported yet. Supported image size: The downloaded image cannot exceed 5M after Base64 encoding.
The image download takes no more than 3 seconds. Supported image resolution: 8000*8000. One of ImageUrlFront and ImageBase64 Front of the image must be provided. If both are provided, only ImageUrlFront will be used.
     */
    public $ImageBase64Front;

    /**
     * @var string Base64 value of the reverse side of the document. Supported image formats: PNG, JPEG. 
GIF format is not supported yet. Supported image size: The downloaded image cannot exceed 5M after Base64 encoding. The image download takes no more than 3 seconds. Maximum supported image resolution: 8000*8000. For some certificates, one of ImageUrlBack and ImageBase64Back must be provided. If both are provided, only ImageUrlBack will be used.
     */
    public $ImageBase64Back;

    /**
     * @var string The URL value on the back of the certificate. Supported image formats: PNG, JPEG. 
GIF format is not supported yet. Supported image size: The downloaded image cannot exceed 5M after Base64 encoding. The image download takes no more than 3 seconds. Maximum supported image resolution: 8000*8000. One of ImageUrlFront and ImageBase64Front of the image must be provided. If both are provided, only ImageUrlFront will be used.
     */
    public $ImageUrlFront;

    /**
     * @var string The URL value on the back of the certificate. Supported image formats: PNG, JPEG. 
GIF format is not supported yet. Supported image size: The downloaded image cannot exceed 5M after Base64 encoding. The image download takes no more than 3 seconds. Maximum supported image resolution: 8000*8000. For some certificates, one of ImageUrlBack and ImageBase64Back must be provided. If both are provided, only ImageUrlBack will be used.
     */
    public $ImageUrlBack;

    /**
     * @param string $Nationality Please select the country code of ID document.
IDN: Indonesia
HKG: Hong Kong
THA: Thailand
MYS: Malaysia
SGP: Singapore
JPN: Japan
TWN:Taiwan
AUTO: Automatic Identification
     * @param string $CardType Please select the type of ID document. The supported options are:
ID_CARD
PASSPORT
DRIVING_LICENSE
AUTO
     * @param string $ImageBase64Front Base64 value for the front of the document. Supported image formats: PNG, JPEG. 
GIF format is not supported yet. Supported image size: The downloaded image cannot exceed 5M after Base64 encoding.
The image download takes no more than 3 seconds. Supported image resolution: 8000*8000. One of ImageUrlFront and ImageBase64 Front of the image must be provided. If both are provided, only ImageUrlFront will be used.
     * @param string $ImageBase64Back Base64 value of the reverse side of the document. Supported image formats: PNG, JPEG. 
GIF format is not supported yet. Supported image size: The downloaded image cannot exceed 5M after Base64 encoding. The image download takes no more than 3 seconds. Maximum supported image resolution: 8000*8000. For some certificates, one of ImageUrlBack and ImageBase64Back must be provided. If both are provided, only ImageUrlBack will be used.
     * @param string $ImageUrlFront The URL value on the back of the certificate. Supported image formats: PNG, JPEG. 
GIF format is not supported yet. Supported image size: The downloaded image cannot exceed 5M after Base64 encoding. The image download takes no more than 3 seconds. Maximum supported image resolution: 8000*8000. One of ImageUrlFront and ImageBase64Front of the image must be provided. If both are provided, only ImageUrlFront will be used.
     * @param string $ImageUrlBack The URL value on the back of the certificate. Supported image formats: PNG, JPEG. 
GIF format is not supported yet. Supported image size: The downloaded image cannot exceed 5M after Base64 encoding. The image download takes no more than 3 seconds. Maximum supported image resolution: 8000*8000. For some certificates, one of ImageUrlBack and ImageBase64Back must be provided. If both are provided, only ImageUrlBack will be used.
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

        if (array_key_exists("ImageBase64Front",$param) and $param["ImageBase64Front"] !== null) {
            $this->ImageBase64Front = $param["ImageBase64Front"];
        }

        if (array_key_exists("ImageBase64Back",$param) and $param["ImageBase64Back"] !== null) {
            $this->ImageBase64Back = $param["ImageBase64Back"];
        }

        if (array_key_exists("ImageUrlFront",$param) and $param["ImageUrlFront"] !== null) {
            $this->ImageUrlFront = $param["ImageUrlFront"];
        }

        if (array_key_exists("ImageUrlBack",$param) and $param["ImageUrlBack"] !== null) {
            $this->ImageUrlBack = $param["ImageUrlBack"];
        }
    }
}
