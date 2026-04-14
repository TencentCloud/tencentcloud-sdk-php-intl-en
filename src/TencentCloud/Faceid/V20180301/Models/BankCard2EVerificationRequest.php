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
 * BankCard2EVerification request structure.
 *
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method string getBankCard() Obtain Bank card.
 * @method void setBankCard(string $BankCard) Set Bank card.
 * @method Encryption getEncryption() Obtain Sensitive data encryption info.
- Users with encryption requirements for incoming information (name, bank card number) can use this parameter. For details, please click the left-side link.
 * @method void setEncryption(Encryption $Encryption) Set Sensitive data encryption info.
- Users with encryption requirements for incoming information (name, bank card number) can use this parameter. For details, please click the left-side link.
 */
class BankCard2EVerificationRequest extends AbstractModel
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
     * @var Encryption Sensitive data encryption info.
- Users with encryption requirements for incoming information (name, bank card number) can use this parameter. For details, please click the left-side link.
     */
    public $Encryption;

    /**
     * @param string $Name Name
     * @param string $BankCard Bank card.
     * @param Encryption $Encryption Sensitive data encryption info.
- Users with encryption requirements for incoming information (name, bank card number) can use this parameter. For details, please click the left-side link.
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

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = new Encryption();
            $this->Encryption->deserialize($param["Encryption"]);
        }
    }
}
