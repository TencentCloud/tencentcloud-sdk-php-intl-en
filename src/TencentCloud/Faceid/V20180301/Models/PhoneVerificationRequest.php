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
 * PhoneVerification request structure.
 *
 * @method string getIdCard() Obtain Identity card number.
 * @method void setIdCard(string $IdCard) Set Identity card number.
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method string getPhone() Obtain Mobile number.
 * @method void setPhone(string $Phone) Set Mobile number.
 * @method string getCiphertextBlob() Obtain Users with encryption requirements can import the CiphertextBlob of kms. Read the <a href="https://www.tencentcloud.com/document/product/1007/47180?from_cn_redirect=1">data encryption</a> document about encrypting data.
 * @method void setCiphertextBlob(string $CiphertextBlob) Set Users with encryption requirements can import the CiphertextBlob of kms. Read the <a href="https://www.tencentcloud.com/document/product/1007/47180?from_cn_redirect=1">data encryption</a> document about encrypting data.
 * @method array getEncryptList() Obtain When using the encryption service, fill in the field to be encrypted.
-This API can fill in one or more of encrypted IdCard, Name, and Phone.
 * @method void setEncryptList(array $EncryptList) Set When using the encryption service, fill in the field to be encrypted.
-This API can fill in one or more of encrypted IdCard, Name, and Phone.
 * @method string getIv() Obtain Users with encryption requirements import the initial vector for CBC encryption.
 * @method void setIv(string $Iv) Set Users with encryption requirements import the initial vector for CBC encryption.
 */
class PhoneVerificationRequest extends AbstractModel
{
    /**
     * @var string Identity card number.
     */
    public $IdCard;

    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var string Mobile number.
     */
    public $Phone;

    /**
     * @var string Users with encryption requirements can import the CiphertextBlob of kms. Read the <a href="https://www.tencentcloud.com/document/product/1007/47180?from_cn_redirect=1">data encryption</a> document about encrypting data.
     */
    public $CiphertextBlob;

    /**
     * @var array When using the encryption service, fill in the field to be encrypted.
-This API can fill in one or more of encrypted IdCard, Name, and Phone.
     */
    public $EncryptList;

    /**
     * @var string Users with encryption requirements import the initial vector for CBC encryption.
     */
    public $Iv;

    /**
     * @param string $IdCard Identity card number.
     * @param string $Name Name
     * @param string $Phone Mobile number.
     * @param string $CiphertextBlob Users with encryption requirements can import the CiphertextBlob of kms. Read the <a href="https://www.tencentcloud.com/document/product/1007/47180?from_cn_redirect=1">data encryption</a> document about encrypting data.
     * @param array $EncryptList When using the encryption service, fill in the field to be encrypted.
-This API can fill in one or more of encrypted IdCard, Name, and Phone.
     * @param string $Iv Users with encryption requirements import the initial vector for CBC encryption.
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

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("CiphertextBlob",$param) and $param["CiphertextBlob"] !== null) {
            $this->CiphertextBlob = $param["CiphertextBlob"];
        }

        if (array_key_exists("EncryptList",$param) and $param["EncryptList"] !== null) {
            $this->EncryptList = $param["EncryptList"];
        }

        if (array_key_exists("Iv",$param) and $param["Iv"] !== null) {
            $this->Iv = $param["Iv"];
        }
    }
}
