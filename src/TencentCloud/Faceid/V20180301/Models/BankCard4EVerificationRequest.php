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
 * BankCard4EVerification request structure.
 *
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method string getBankCard() Obtain Bank card.
 * @method void setBankCard(string $BankCard) Set Bank card.
 * @method string getPhone() Obtain Mobile number.
 * @method void setPhone(string $Phone) Set Mobile number.
 * @method string getIdCard() Obtain ID number for account opening.
-The document type must match the Type parameter, for example: input the ID card number for an identity card.
 * @method void setIdCard(string $IdCard) Set ID number for account opening.
-The document type must match the Type parameter, for example: input the ID card number for an identity card.
 * @method integer getCertType() Obtain Document type.
-Please confirm this document is the document type used when opening an account. Document information not used for account opening is not supported for verification.
-Currently defaults to 0: ID card. Other document types are not currently supported.
 * @method void setCertType(integer $CertType) Set Document type.
-Please confirm this document is the document type used when opening an account. Document information not used for account opening is not supported for verification.
-Currently defaults to 0: ID card. Other document types are not currently supported.
 * @method Encryption getEncryption() Obtain Sensitive data encryption info.
-Users with encryption requirements for incoming information (name, identity card number, mobile number, bank card number) can use this parameter. For details, please click the left-side link.
 * @method void setEncryption(Encryption $Encryption) Set Sensitive data encryption info.
-Users with encryption requirements for incoming information (name, identity card number, mobile number, bank card number) can use this parameter. For details, please click the left-side link.
 */
class BankCard4EVerificationRequest extends AbstractModel
{
    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var string Bank card.
     */
    public $BankCard;

    /**
     * @var string Mobile number.
     */
    public $Phone;

    /**
     * @var string ID number for account opening.
-The document type must match the Type parameter, for example: input the ID card number for an identity card.
     */
    public $IdCard;

    /**
     * @var integer Document type.
-Please confirm this document is the document type used when opening an account. Document information not used for account opening is not supported for verification.
-Currently defaults to 0: ID card. Other document types are not currently supported.
     */
    public $CertType;

    /**
     * @var Encryption Sensitive data encryption info.
-Users with encryption requirements for incoming information (name, identity card number, mobile number, bank card number) can use this parameter. For details, please click the left-side link.
     */
    public $Encryption;

    /**
     * @param string $Name Name
     * @param string $BankCard Bank card.
     * @param string $Phone Mobile number.
     * @param string $IdCard ID number for account opening.
-The document type must match the Type parameter, for example: input the ID card number for an identity card.
     * @param integer $CertType Document type.
-Please confirm this document is the document type used when opening an account. Document information not used for account opening is not supported for verification.
-Currently defaults to 0: ID card. Other document types are not currently supported.
     * @param Encryption $Encryption Sensitive data encryption info.
-Users with encryption requirements for incoming information (name, identity card number, mobile number, bank card number) can use this parameter. For details, please click the left-side link.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("BankCard",$param) and $param["BankCard"] !== null) {
            $this->BankCard = $param["BankCard"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("IdCard",$param) and $param["IdCard"] !== null) {
            $this->IdCard = $param["IdCard"];
        }

        if (array_key_exists("CertType",$param) and $param["CertType"] !== null) {
            $this->CertType = $param["CertType"];
        }

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = new Encryption();
            $this->Encryption->deserialize($param["Encryption"]);
        }
    }
}
