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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IdCardOCRVerification request structure.
 *
 * @method string getIdCard() Obtain Identity card number.
-Name, identity card number, ImageBase64, or ImageUrl must provide one of the three.
-If both are provided, proceed to use parameters according to the priority of name and identity card number > ImageBase64 > ImageUrl.
 * @method void setIdCard(string $IdCard) Set Identity card number.
-Name, identity card number, ImageBase64, or ImageUrl must provide one of the three.
-If both are provided, proceed to use parameters according to the priority of name and identity card number > ImageBase64 > ImageUrl.
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method string getImageBase64() Obtain Base64 value of the ID card portrait side.
-Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported.
-Supported image size: The downloaded image after Base64 encoding is no more than 3M. Please use the standard Base64 encoding method (with = padding). Refer to RFC4648 for the coding specification.
 * @method void setImageBase64(string $ImageBase64) Set Base64 value of the ID card portrait side.
-Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported.
-Supported image size: The downloaded image after Base64 encoding is no more than 3M. Please use the standard Base64 encoding method (with = padding). Refer to RFC4648 for the coding specification.
 * @method string getImageUrl() Obtain Url of the ID card portrait side.
-Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported.
-Supported image size: The downloaded image is no more than 3M after Base64 encoding. Image download time is no more than 3 seconds.
-Images stored on Tencent Cloud's Url guarantee higher download speed and stability. It is advisable to store images on Tencent Cloud.
-The speed and stability of non-Tencent Cloud Storage URLs may be impacted.
 * @method void setImageUrl(string $ImageUrl) Set Url of the ID card portrait side.
-Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported.
-Supported image size: The downloaded image is no more than 3M after Base64 encoding. Image download time is no more than 3 seconds.
-Images stored on Tencent Cloud's Url guarantee higher download speed and stability. It is advisable to store images on Tencent Cloud.
-The speed and stability of non-Tencent Cloud Storage URLs may be impacted.
 * @method Encryption getEncryption() Obtain Sensitive data encryption info.
-Users with encryption requirements for incoming information (name, identity card number) can use this parameter. For details, please click the left-side link.
 * @method void setEncryption(Encryption $Encryption) Set Sensitive data encryption info.
-Users with encryption requirements for incoming information (name, identity card number) can use this parameter. For details, please click the left-side link.
 */
class IdCardOCRVerificationRequest extends AbstractModel
{
    /**
     * @var string Identity card number.
-Name, identity card number, ImageBase64, or ImageUrl must provide one of the three.
-If both are provided, proceed to use parameters according to the priority of name and identity card number > ImageBase64 > ImageUrl.
     */
    public $IdCard;

    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var string Base64 value of the ID card portrait side.
-Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported.
-Supported image size: The downloaded image after Base64 encoding is no more than 3M. Please use the standard Base64 encoding method (with = padding). Refer to RFC4648 for the coding specification.
     */
    public $ImageBase64;

    /**
     * @var string Url of the ID card portrait side.
-Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported.
-Supported image size: The downloaded image is no more than 3M after Base64 encoding. Image download time is no more than 3 seconds.
-Images stored on Tencent Cloud's Url guarantee higher download speed and stability. It is advisable to store images on Tencent Cloud.
-The speed and stability of non-Tencent Cloud Storage URLs may be impacted.
     */
    public $ImageUrl;

    /**
     * @var Encryption Sensitive data encryption info.
-Users with encryption requirements for incoming information (name, identity card number) can use this parameter. For details, please click the left-side link.
     */
    public $Encryption;

    /**
     * @param string $IdCard Identity card number.
-Name, identity card number, ImageBase64, or ImageUrl must provide one of the three.
-If both are provided, proceed to use parameters according to the priority of name and identity card number > ImageBase64 > ImageUrl.
     * @param string $Name Name
     * @param string $ImageBase64 Base64 value of the ID card portrait side.
-Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported.
-Supported image size: The downloaded image after Base64 encoding is no more than 3M. Please use the standard Base64 encoding method (with = padding). Refer to RFC4648 for the coding specification.
     * @param string $ImageUrl Url of the ID card portrait side.
-Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported.
-Supported image size: The downloaded image is no more than 3M after Base64 encoding. Image download time is no more than 3 seconds.
-Images stored on Tencent Cloud's Url guarantee higher download speed and stability. It is advisable to store images on Tencent Cloud.
-The speed and stability of non-Tencent Cloud Storage URLs may be impacted.
     * @param Encryption $Encryption Sensitive data encryption info.
-Users with encryption requirements for incoming information (name, identity card number) can use this parameter. For details, please click the left-side link.
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
        if (array_key_exists("IdCard",$param) and $param["IdCard"] !== null) {
            $this->IdCard = $param["IdCard"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = new Encryption();
            $this->Encryption->deserialize($param["Encryption"]);
        }
    }
}
