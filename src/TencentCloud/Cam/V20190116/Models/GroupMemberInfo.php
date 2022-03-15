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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * User Group user information
 *
 * @method integer getUid() Obtain Sub-user UID
 * @method void setUid(integer $Uid) Set Sub-user UID
 * @method integer getUin() Obtain Sub-user UIN
 * @method void setUin(integer $Uin) Set Sub-user UIN
 * @method string getName() Obtain Sub-user name
 * @method void setName(string $Name) Set Sub-user name
 * @method string getPhoneNum() Obtain Mobile number
 * @method void setPhoneNum(string $PhoneNum) Set Mobile number
 * @method string getCountryCode() Obtain Mobile number country/area code
 * @method void setCountryCode(string $CountryCode) Set Mobile number country/area code
 * @method integer getPhoneFlag() Obtain Whether the mobile phone has been verified. `0`: No; `1`: Yes.
 * @method void setPhoneFlag(integer $PhoneFlag) Set Whether the mobile phone has been verified. `0`: No; `1`: Yes.
 * @method string getEmail() Obtain Email address
 * @method void setEmail(string $Email) Set Email address
 * @method integer getEmailFlag() Obtain Whether the email has been verified. `0`: No; `1`: Yes.
 * @method void setEmailFlag(integer $EmailFlag) Set Whether the email has been verified. `0`: No; `1`: Yes.
 * @method integer getUserType() Obtain User type. `1`: Global collaborator; `2`: Project collaborator; `3`: Message recipient.
 * @method void setUserType(integer $UserType) Set User type. `1`: Global collaborator; `2`: Project collaborator; `3`: Message recipient.
 * @method string getCreateTime() Obtain Time policy created
 * @method void setCreateTime(string $CreateTime) Set Time policy created
 * @method integer getIsReceiverOwner() Obtain Whether the user is the primary message recipient. `0`: No; `1`: Yes.
 * @method void setIsReceiverOwner(integer $IsReceiverOwner) Set Whether the user is the primary message recipient. `0`: No; `1`: Yes.
 */
class GroupMemberInfo extends AbstractModel
{
    /**
     * @var integer Sub-user UID
     */
    public $Uid;

    /**
     * @var integer Sub-user UIN
     */
    public $Uin;

    /**
     * @var string Sub-user name
     */
    public $Name;

    /**
     * @var string Mobile number
     */
    public $PhoneNum;

    /**
     * @var string Mobile number country/area code
     */
    public $CountryCode;

    /**
     * @var integer Whether the mobile phone has been verified. `0`: No; `1`: Yes.
     */
    public $PhoneFlag;

    /**
     * @var string Email address
     */
    public $Email;

    /**
     * @var integer Whether the email has been verified. `0`: No; `1`: Yes.
     */
    public $EmailFlag;

    /**
     * @var integer User type. `1`: Global collaborator; `2`: Project collaborator; `3`: Message recipient.
     */
    public $UserType;

    /**
     * @var string Time policy created
     */
    public $CreateTime;

    /**
     * @var integer Whether the user is the primary message recipient. `0`: No; `1`: Yes.
     */
    public $IsReceiverOwner;

    /**
     * @param integer $Uid Sub-user UID
     * @param integer $Uin Sub-user UIN
     * @param string $Name Sub-user name
     * @param string $PhoneNum Mobile number
     * @param string $CountryCode Mobile number country/area code
     * @param integer $PhoneFlag Whether the mobile phone has been verified. `0`: No; `1`: Yes.
     * @param string $Email Email address
     * @param integer $EmailFlag Whether the email has been verified. `0`: No; `1`: Yes.
     * @param integer $UserType User type. `1`: Global collaborator; `2`: Project collaborator; `3`: Message recipient.
     * @param string $CreateTime Time policy created
     * @param integer $IsReceiverOwner Whether the user is the primary message recipient. `0`: No; `1`: Yes.
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
        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PhoneNum",$param) and $param["PhoneNum"] !== null) {
            $this->PhoneNum = $param["PhoneNum"];
        }

        if (array_key_exists("CountryCode",$param) and $param["CountryCode"] !== null) {
            $this->CountryCode = $param["CountryCode"];
        }

        if (array_key_exists("PhoneFlag",$param) and $param["PhoneFlag"] !== null) {
            $this->PhoneFlag = $param["PhoneFlag"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("EmailFlag",$param) and $param["EmailFlag"] !== null) {
            $this->EmailFlag = $param["EmailFlag"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("IsReceiverOwner",$param) and $param["IsReceiverOwner"] !== null) {
            $this->IsReceiverOwner = $param["IsReceiverOwner"];
        }
    }
}
