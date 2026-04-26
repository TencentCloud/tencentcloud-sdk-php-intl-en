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
 * ImageRecognitionV2 request structure.
 *
 * @method string getIdCard() Obtain <p>Identity card number.</p>
 * @method void setIdCard(string $IdCard) Set <p>Identity card number.</p>
 * @method string getName() Obtain <p>Name.</p><ul><li>For Chinese, please use UTF-8 encode.</li></ul>
 * @method void setName(string $Name) Set <p>Name.</p><ul><li>For Chinese, please use UTF-8 encode.</li></ul>
 * @method string getImageBase64() Obtain <p>Image for face comparison, the Base64 value of the image.<br>The size of the Base64-encoded image data should be no more than 3M. Only jpg and png formats are supported.<br>Please use the standard Base64 encoding type (with = padding). Refer to RFC4648 for the coding specification.</p>
 * @method void setImageBase64(string $ImageBase64) Set <p>Image for face comparison, the Base64 value of the image.<br>The size of the Base64-encoded image data should be no more than 3M. Only jpg and png formats are supported.<br>Please use the standard Base64 encoding type (with = padding). Refer to RFC4648 for the coding specification.</p>
 * @method string getOptional() Obtain <p>This parameter is not required for this API.</p>
 * @method void setOptional(string $Optional) Set <p>This parameter is not required for this API.</p>
 * @method Encryption getEncryption() Obtain <p>Sensitive data encryption information.</p><ul><li>Users with encryption requirements for incoming information (name, identity card number) can use this parameter. For details, please click the left-side link.</li></ul>
 * @method void setEncryption(Encryption $Encryption) Set <p>Sensitive data encryption information.</p><ul><li>Users with encryption requirements for incoming information (name, identity card number) can use this parameter. For details, please click the left-side link.</li></ul>
 * @method string getExtra() Obtain <p>Customized description field.</p><ul><li>For description of invoke business info. This description field will return in the output.</li><li>Each customized description field supports [1,10] characters.</li></ul>
 * @method void setExtra(string $Extra) Set <p>Customized description field.</p><ul><li>For description of invoke business info. This description field will return in the output.</li><li>Each customized description field supports [1,10] characters.</li></ul>
 */
class ImageRecognitionV2Request extends AbstractModel
{
    /**
     * @var string <p>Identity card number.</p>
     */
    public $IdCard;

    /**
     * @var string <p>Name.</p><ul><li>For Chinese, please use UTF-8 encode.</li></ul>
     */
    public $Name;

    /**
     * @var string <p>Image for face comparison, the Base64 value of the image.<br>The size of the Base64-encoded image data should be no more than 3M. Only jpg and png formats are supported.<br>Please use the standard Base64 encoding type (with = padding). Refer to RFC4648 for the coding specification.</p>
     */
    public $ImageBase64;

    /**
     * @var string <p>This parameter is not required for this API.</p>
     */
    public $Optional;

    /**
     * @var Encryption <p>Sensitive data encryption information.</p><ul><li>Users with encryption requirements for incoming information (name, identity card number) can use this parameter. For details, please click the left-side link.</li></ul>
     */
    public $Encryption;

    /**
     * @var string <p>Customized description field.</p><ul><li>For description of invoke business info. This description field will return in the output.</li><li>Each customized description field supports [1,10] characters.</li></ul>
     */
    public $Extra;

    /**
     * @param string $IdCard <p>Identity card number.</p>
     * @param string $Name <p>Name.</p><ul><li>For Chinese, please use UTF-8 encode.</li></ul>
     * @param string $ImageBase64 <p>Image for face comparison, the Base64 value of the image.<br>The size of the Base64-encoded image data should be no more than 3M. Only jpg and png formats are supported.<br>Please use the standard Base64 encoding type (with = padding). Refer to RFC4648 for the coding specification.</p>
     * @param string $Optional <p>This parameter is not required for this API.</p>
     * @param Encryption $Encryption <p>Sensitive data encryption information.</p><ul><li>Users with encryption requirements for incoming information (name, identity card number) can use this parameter. For details, please click the left-side link.</li></ul>
     * @param string $Extra <p>Customized description field.</p><ul><li>For description of invoke business info. This description field will return in the output.</li><li>Each customized description field supports [1,10] characters.</li></ul>
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

        if (array_key_exists("Optional",$param) and $param["Optional"] !== null) {
            $this->Optional = $param["Optional"];
        }

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = new Encryption();
            $this->Encryption->deserialize($param["Encryption"]);
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }
    }
}
