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
 * CheckIdCardInformation request structure.
 *
 * @method string getImageBase64() Obtain <p>Base64 value of the ID card portrait side.</p><ul><li>Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported.</li><li>Supported image size: the downloaded image should be no more than 7M after Base64 encoding.</li><li>Please use the standard Base64 encoding method (with = padding). Refer to RFC4648 for coding specification.</li><li>Either ImageBase64 or ImageUrl must be provided. If both are provided, proceed to use parameters according to the priority of ImageUrl > ImageBase64.</li></ul>
 * @method void setImageBase64(string $ImageBase64) Set <p>Base64 value of the ID card portrait side.</p><ul><li>Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported.</li><li>Supported image size: the downloaded image should be no more than 7M after Base64 encoding.</li><li>Please use the standard Base64 encoding method (with = padding). Refer to RFC4648 for coding specification.</li><li>Either ImageBase64 or ImageUrl must be provided. If both are provided, proceed to use parameters according to the priority of ImageUrl > ImageBase64.</li></ul>
 * @method string getImageUrl() Obtain <p>Url address of the ID card portrait side</p><ul><li>Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported.</li><li>Supported image size: The downloaded image after Base64 encoding is no more than 3M. Image download time is no more than 3 seconds.</li><li>Images stored in Tencent Cloud's Url can guarantee higher download speed and stability. It is recommended to store images in Tencent Cloud.</li><li>Speed and stability of non-Tencent Cloud Storage URLs may be impacted to a certain extent.</li></ul>
 * @method void setImageUrl(string $ImageUrl) Set <p>Url address of the ID card portrait side</p><ul><li>Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported.</li><li>Supported image size: The downloaded image after Base64 encoding is no more than 3M. Image download time is no more than 3 seconds.</li><li>Images stored in Tencent Cloud's Url can guarantee higher download speed and stability. It is recommended to store images in Tencent Cloud.</li><li>Speed and stability of non-Tencent Cloud Storage URLs may be impacted to a certain extent.</li></ul>
 * @method string getConfig() Obtain <p>Configuration.</p><ul><li><p>All the following optional fields are bool type, default false.<br>CopyWarn, alarm for photocopy.<br>BorderCheckWarn, border and frame block alarm.<br>ReshootWarn, alarm for rephotographing.<br>DetectPsWarn, PS detection alarm (suspected PS traces).<br>TempIdWarn, temporary ID card alarm.<br>Quality, image Quality alarm (evaluates blurriness).</p></li><li><p>SDK configuration method for reference:<br>Config = Json.stringify({"CopyWarn":true,"ReshootWarn":true}).</p></li><li><p>API 3.0 Explorer setting method for reference:<br>Config = {"CopyWarn":true,"ReshootWarn":true}.</p></li></ul>
 * @method void setConfig(string $Config) Set <p>Configuration.</p><ul><li><p>All the following optional fields are bool type, default false.<br>CopyWarn, alarm for photocopy.<br>BorderCheckWarn, border and frame block alarm.<br>ReshootWarn, alarm for rephotographing.<br>DetectPsWarn, PS detection alarm (suspected PS traces).<br>TempIdWarn, temporary ID card alarm.<br>Quality, image Quality alarm (evaluates blurriness).</p></li><li><p>SDK configuration method for reference:<br>Config = Json.stringify({"CopyWarn":true,"ReshootWarn":true}).</p></li><li><p>API 3.0 Explorer setting method for reference:<br>Config = {"CopyWarn":true,"ReshootWarn":true}.</p></li></ul>
 * @method boolean getIsEncrypt() Obtain <p>Whether required to encrypt sensitive information in the response.</p><ul><li>Default false.</li><li>Sensitive information includes Response.IdNum and Response.Name.</li></ul>
 * @method void setIsEncrypt(boolean $IsEncrypt) Set <p>Whether required to encrypt sensitive information in the response.</p><ul><li>Default false.</li><li>Sensitive information includes Response.IdNum and Response.Name.</li></ul>
 * @method boolean getIsEncryptResponse() Obtain <p>Whether required to encrypt the response body.</p>
 * @method void setIsEncryptResponse(boolean $IsEncryptResponse) Set <p>Whether required to encrypt the response body.</p>
 * @method Encryption getEncryption() Obtain <p>Whether required to encrypt sensitive information in the response, need to be specified encryption algorithm Algorithm, initial vector for CBC encryption, and encrypted symmetric key.</p>
 * @method void setEncryption(Encryption $Encryption) Set <p>Whether required to encrypt sensitive information in the response, need to be specified encryption algorithm Algorithm, initial vector for CBC encryption, and encrypted symmetric key.</p>
 */
class CheckIdCardInformationRequest extends AbstractModel
{
    /**
     * @var string <p>Base64 value of the ID card portrait side.</p><ul><li>Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported.</li><li>Supported image size: the downloaded image should be no more than 7M after Base64 encoding.</li><li>Please use the standard Base64 encoding method (with = padding). Refer to RFC4648 for coding specification.</li><li>Either ImageBase64 or ImageUrl must be provided. If both are provided, proceed to use parameters according to the priority of ImageUrl > ImageBase64.</li></ul>
     */
    public $ImageBase64;

    /**
     * @var string <p>Url address of the ID card portrait side</p><ul><li>Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported.</li><li>Supported image size: The downloaded image after Base64 encoding is no more than 3M. Image download time is no more than 3 seconds.</li><li>Images stored in Tencent Cloud's Url can guarantee higher download speed and stability. It is recommended to store images in Tencent Cloud.</li><li>Speed and stability of non-Tencent Cloud Storage URLs may be impacted to a certain extent.</li></ul>
     */
    public $ImageUrl;

    /**
     * @var string <p>Configuration.</p><ul><li><p>All the following optional fields are bool type, default false.<br>CopyWarn, alarm for photocopy.<br>BorderCheckWarn, border and frame block alarm.<br>ReshootWarn, alarm for rephotographing.<br>DetectPsWarn, PS detection alarm (suspected PS traces).<br>TempIdWarn, temporary ID card alarm.<br>Quality, image Quality alarm (evaluates blurriness).</p></li><li><p>SDK configuration method for reference:<br>Config = Json.stringify({"CopyWarn":true,"ReshootWarn":true}).</p></li><li><p>API 3.0 Explorer setting method for reference:<br>Config = {"CopyWarn":true,"ReshootWarn":true}.</p></li></ul>
     */
    public $Config;

    /**
     * @var boolean <p>Whether required to encrypt sensitive information in the response.</p><ul><li>Default false.</li><li>Sensitive information includes Response.IdNum and Response.Name.</li></ul>
     */
    public $IsEncrypt;

    /**
     * @var boolean <p>Whether required to encrypt the response body.</p>
     */
    public $IsEncryptResponse;

    /**
     * @var Encryption <p>Whether required to encrypt sensitive information in the response, need to be specified encryption algorithm Algorithm, initial vector for CBC encryption, and encrypted symmetric key.</p>
     */
    public $Encryption;

    /**
     * @param string $ImageBase64 <p>Base64 value of the ID card portrait side.</p><ul><li>Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported.</li><li>Supported image size: the downloaded image should be no more than 7M after Base64 encoding.</li><li>Please use the standard Base64 encoding method (with = padding). Refer to RFC4648 for coding specification.</li><li>Either ImageBase64 or ImageUrl must be provided. If both are provided, proceed to use parameters according to the priority of ImageUrl > ImageBase64.</li></ul>
     * @param string $ImageUrl <p>Url address of the ID card portrait side</p><ul><li>Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported.</li><li>Supported image size: The downloaded image after Base64 encoding is no more than 3M. Image download time is no more than 3 seconds.</li><li>Images stored in Tencent Cloud's Url can guarantee higher download speed and stability. It is recommended to store images in Tencent Cloud.</li><li>Speed and stability of non-Tencent Cloud Storage URLs may be impacted to a certain extent.</li></ul>
     * @param string $Config <p>Configuration.</p><ul><li><p>All the following optional fields are bool type, default false.<br>CopyWarn, alarm for photocopy.<br>BorderCheckWarn, border and frame block alarm.<br>ReshootWarn, alarm for rephotographing.<br>DetectPsWarn, PS detection alarm (suspected PS traces).<br>TempIdWarn, temporary ID card alarm.<br>Quality, image Quality alarm (evaluates blurriness).</p></li><li><p>SDK configuration method for reference:<br>Config = Json.stringify({"CopyWarn":true,"ReshootWarn":true}).</p></li><li><p>API 3.0 Explorer setting method for reference:<br>Config = {"CopyWarn":true,"ReshootWarn":true}.</p></li></ul>
     * @param boolean $IsEncrypt <p>Whether required to encrypt sensitive information in the response.</p><ul><li>Default false.</li><li>Sensitive information includes Response.IdNum and Response.Name.</li></ul>
     * @param boolean $IsEncryptResponse <p>Whether required to encrypt the response body.</p>
     * @param Encryption $Encryption <p>Whether required to encrypt sensitive information in the response, need to be specified encryption algorithm Algorithm, initial vector for CBC encryption, and encrypted symmetric key.</p>
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

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("IsEncrypt",$param) and $param["IsEncrypt"] !== null) {
            $this->IsEncrypt = $param["IsEncrypt"];
        }

        if (array_key_exists("IsEncryptResponse",$param) and $param["IsEncryptResponse"] !== null) {
            $this->IsEncryptResponse = $param["IsEncryptResponse"];
        }

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = new Encryption();
            $this->Encryption->deserialize($param["Encryption"]);
        }
    }
}
