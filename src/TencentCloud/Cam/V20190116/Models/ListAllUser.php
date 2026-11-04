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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Account details
 *
 * @method integer getUin() Obtain <p>Sub-account account ID.</p>
 * @method void setUin(integer $Uin) Set <p>Sub-account account ID.</p>
 * @method string getName() Obtain <p>Username of sub-account.</p>
 * @method void setName(string $Name) Set <p>Username of sub-account.</p>
 * @method integer getUid() Obtain <p>Sub-account UID.</p>
 * @method void setUid(integer $Uid) Set <p>Sub-account UID.</p>
 * @method string getRemark() Obtain <p>Sub-account remark.</p>
 * @method void setRemark(string $Remark) Set <p>Sub-account remark.</p>
 * @method integer getConsoleLogin() Obtain <p>Whether or not the sub-account can log in to the console.</p>
 * @method void setConsoleLogin(integer $ConsoleLogin) Set <p>Whether or not the sub-account can log in to the console.</p>
 * @method string getPhoneNum() Obtain <p>Phone number.</p>
 * @method void setPhoneNum(string $PhoneNum) Set <p>Phone number.</p>
 * @method string getCountryCode() Obtain <p>Area code.</p>
 * @method void setCountryCode(string $CountryCode) Set <p>Area code.</p>
 * @method string getEmail() Obtain <p>Mailbox.</p>
 * @method void setEmail(string $Email) Set <p>Mailbox.</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method string getUserType() Obtain <p>Account type</p><p>Enumeration values:</p><ul><li>Owner: root account</li><li>SubUser: sub-user</li><li>CICUser: CIC user</li><li>WechatCorpUser: WeCom sub-user</li><li>AgentIdentity: AgentIdentity user</li><li>Collaborator: collaborator</li><li>MessageReceiver: message recipient</li><li>Unknown: unknown</li></ul>
 * @method void setUserType(string $UserType) Set <p>Account type</p><p>Enumeration values:</p><ul><li>Owner: root account</li><li>SubUser: sub-user</li><li>CICUser: CIC user</li><li>WechatCorpUser: WeCom sub-user</li><li>AgentIdentity: AgentIdentity user</li><li>Collaborator: collaborator</li><li>MessageReceiver: message recipient</li><li>Unknown: unknown</li></ul>
 */
class ListAllUser extends AbstractModel
{
    /**
     * @var integer <p>Sub-account account ID.</p>
     */
    public $Uin;

    /**
     * @var string <p>Username of sub-account.</p>
     */
    public $Name;

    /**
     * @var integer <p>Sub-account UID.</p>
     */
    public $Uid;

    /**
     * @var string <p>Sub-account remark.</p>
     */
    public $Remark;

    /**
     * @var integer <p>Whether or not the sub-account can log in to the console.</p>
     */
    public $ConsoleLogin;

    /**
     * @var string <p>Phone number.</p>
     */
    public $PhoneNum;

    /**
     * @var string <p>Area code.</p>
     */
    public $CountryCode;

    /**
     * @var string <p>Mailbox.</p>
     */
    public $Email;

    /**
     * @var string <p>Creation time.</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Account type</p><p>Enumeration values:</p><ul><li>Owner: root account</li><li>SubUser: sub-user</li><li>CICUser: CIC user</li><li>WechatCorpUser: WeCom sub-user</li><li>AgentIdentity: AgentIdentity user</li><li>Collaborator: collaborator</li><li>MessageReceiver: message recipient</li><li>Unknown: unknown</li></ul>
     */
    public $UserType;

    /**
     * @param integer $Uin <p>Sub-account account ID.</p>
     * @param string $Name <p>Username of sub-account.</p>
     * @param integer $Uid <p>Sub-account UID.</p>
     * @param string $Remark <p>Sub-account remark.</p>
     * @param integer $ConsoleLogin <p>Whether or not the sub-account can log in to the console.</p>
     * @param string $PhoneNum <p>Phone number.</p>
     * @param string $CountryCode <p>Area code.</p>
     * @param string $Email <p>Mailbox.</p>
     * @param string $CreateTime <p>Creation time.</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     * @param string $UserType <p>Account type</p><p>Enumeration values:</p><ul><li>Owner: root account</li><li>SubUser: sub-user</li><li>CICUser: CIC user</li><li>WechatCorpUser: WeCom sub-user</li><li>AgentIdentity: AgentIdentity user</li><li>Collaborator: collaborator</li><li>MessageReceiver: message recipient</li><li>Unknown: unknown</li></ul>
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ConsoleLogin",$param) and $param["ConsoleLogin"] !== null) {
            $this->ConsoleLogin = $param["ConsoleLogin"];
        }

        if (array_key_exists("PhoneNum",$param) and $param["PhoneNum"] !== null) {
            $this->PhoneNum = $param["PhoneNum"];
        }

        if (array_key_exists("CountryCode",$param) and $param["CountryCode"] !== null) {
            $this->CountryCode = $param["CountryCode"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }
    }
}
