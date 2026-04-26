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
 * CheckIdNameDate request structure.
 *
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method string getIdCard() Obtain Identity card number.
 * @method void setIdCard(string $IdCard) Set Identity card number.
 * @method string getValidityBegin() Obtain ID card validity start time.
-Format: YYYYMMDD, for example: 20210701.
 * @method void setValidityBegin(string $ValidityBegin) Set ID card validity start time.
-Format: YYYYMMDD, for example: 20210701.
 * @method string getValidityEnd() Obtain ID card expiration time.
Format: YYYYMMDD, use "00000000" for long-term, for example: 20210701.
 * @method void setValidityEnd(string $ValidityEnd) Set ID card expiration time.
Format: YYYYMMDD, use "00000000" for long-term, for example: 20210701.
 * @method Encryption getEncryption() Obtain Sensitive data encryption info.
-Users with encryption requirements for incoming information (name, identity card number) can use this parameter. For details, please click the left-side link.
 * @method void setEncryption(Encryption $Encryption) Set Sensitive data encryption info.
-Users with encryption requirements for incoming information (name, identity card number) can use this parameter. For details, please click the left-side link.
 */
class CheckIdNameDateRequest extends AbstractModel
{
    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var string Identity card number.
     */
    public $IdCard;

    /**
     * @var string ID card validity start time.
-Format: YYYYMMDD, for example: 20210701.
     */
    public $ValidityBegin;

    /**
     * @var string ID card expiration time.
Format: YYYYMMDD, use "00000000" for long-term, for example: 20210701.
     */
    public $ValidityEnd;

    /**
     * @var Encryption Sensitive data encryption info.
-Users with encryption requirements for incoming information (name, identity card number) can use this parameter. For details, please click the left-side link.
     */
    public $Encryption;

    /**
     * @param string $Name Name
     * @param string $IdCard Identity card number.
     * @param string $ValidityBegin ID card validity start time.
-Format: YYYYMMDD, for example: 20210701.
     * @param string $ValidityEnd ID card expiration time.
Format: YYYYMMDD, use "00000000" for long-term, for example: 20210701.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IdCard",$param) and $param["IdCard"] !== null) {
            $this->IdCard = $param["IdCard"];
        }

        if (array_key_exists("ValidityBegin",$param) and $param["ValidityBegin"] !== null) {
            $this->ValidityBegin = $param["ValidityBegin"];
        }

        if (array_key_exists("ValidityEnd",$param) and $param["ValidityEnd"] !== null) {
            $this->ValidityEnd = $param["ValidityEnd"];
        }

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = new Encryption();
            $this->Encryption->deserialize($param["Encryption"]);
        }
    }
}
