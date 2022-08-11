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
namespace TencentCloud\Ciam\V20220331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Imported user information
1. One of the eight attributes of `UserName`, `PhoneNumber`, `Email`, `WechatOpenId`, `WechatUnionId`, `AlipayUserId`, `QqOpenId`, and `QqUnionId` must be included during import and comply with the regular expression rules for initializing custom attributes. The regular expressions for `UserName`, `PhoneNumber`, and `Email` can be queried in the custom attributes in the console.
2. For password import, the imported password supports plaintext import, MD5 ciphertext import, SHA1 ciphertext import, and BCRYPT ciphertext import. This needs to be specified in the `PasswordEncryptTypeEnum` field.
3. `IdentityVerified` and `IdentityVerificationMethod` can be imported.
If `IdentityVerified` is `true`, `IdentityVerificationMethod` is required.
If `IdentityVerificationMethod` is `nameAndIdCard`, `Name` and `ResidentIdentityCard` are required.
If `IdentityVerificationMethod` is `nameIdCardAndPhone`, `Name`, `PhoneNumber`, and `ResidentIdentityCard` are required.
 *
 * @method string getUserName() Obtain Username
 * @method void setUserName(string $UserName) Set Username
 * @method string getPhoneNumber() Obtain Mobile number
 * @method void setPhoneNumber(string $PhoneNumber) Set Mobile number
 * @method string getEmail() Obtain Email address
 * @method void setEmail(string $Email) Set Email address
 * @method string getResidentIdentityCard() Obtain ID card number
 * @method void setResidentIdentityCard(string $ResidentIdentityCard) Set ID card number
 * @method string getNickname() Obtain Nickname
 * @method void setNickname(string $Nickname) Set Nickname
 * @method string getAddress() Obtain Address
 * @method void setAddress(string $Address) Set Address
 * @method array getUserGroup() Obtain User group ID
 * @method void setUserGroup(array $UserGroup) Set User group ID
 * @method string getQqOpenId() Obtain `qqOpenId` on QQ
 * @method void setQqOpenId(string $QqOpenId) Set `qqOpenId` on QQ
 * @method string getQqUnionId() Obtain `qqUnionId` on QQ
 * @method void setQqUnionId(string $QqUnionId) Set `qqUnionId` on QQ
 * @method string getWechatOpenId() Obtain `wechatOpenId` on WeChat
 * @method void setWechatOpenId(string $WechatOpenId) Set `wechatOpenId` on WeChat
 * @method string getWechatUnionId() Obtain `wechatUnionId` on WeChat
 * @method void setWechatUnionId(string $WechatUnionId) Set `wechatUnionId` on WeChat
 * @method string getAlipayUserId() Obtain `alipayUserId` on Alipay
 * @method void setAlipayUserId(string $AlipayUserId) Set `alipayUserId` on Alipay
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 * @method string getBirthdate() Obtain Date of birth
 * @method void setBirthdate(string $Birthdate) Set Date of birth
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method string getLocale() Obtain Coordinate
 * @method void setLocale(string $Locale) Set Coordinate
 * @method string getGender() Obtain Gender. Valid values: `MALE`, `FEMALE`, `UNKNOWN`.
 * @method void setGender(string $Gender) Set Gender. Valid values: `MALE`, `FEMALE`, `UNKNOWN`.
 * @method string getIdentityVerificationMethod() Obtain Identity verification method
 * @method void setIdentityVerificationMethod(string $IdentityVerificationMethod) Set Identity verification method
 * @method boolean getIdentityVerified() Obtain Whether the identity is verified
 * @method void setIdentityVerified(boolean $IdentityVerified) Set Whether the identity is verified
 * @method string getJob() Obtain Job
 * @method void setJob(string $Job) Set Job
 * @method string getNationality() Obtain Country/Region
 * @method void setNationality(string $Nationality) Set Country/Region
 * @method string getZone() Obtain Time zone
 * @method void setZone(string $Zone) Set Time zone
 * @method string getPassword() Obtain Password ciphertext
 * @method void setPassword(string $Password) Set Password ciphertext
 * @method array getCustomizationAttributes() Obtain Custom attribute
 * @method void setCustomizationAttributes(array $CustomizationAttributes) Set Custom attribute
 * @method Salt getSalt() Obtain Password salt
 * @method void setSalt(Salt $Salt) Set Password salt
 * @method string getPasswordEncryptTypeEnum() Obtain Password encryption method. Valid values: `SHA1`, `BCRYPT`.
 * @method void setPasswordEncryptTypeEnum(string $PasswordEncryptTypeEnum) Set Password encryption method. Valid values: `SHA1`, `BCRYPT`.
 */
class ImportUser extends AbstractModel
{
    /**
     * @var string Username
     */
    public $UserName;

    /**
     * @var string Mobile number
     */
    public $PhoneNumber;

    /**
     * @var string Email address
     */
    public $Email;

    /**
     * @var string ID card number
     */
    public $ResidentIdentityCard;

    /**
     * @var string Nickname
     */
    public $Nickname;

    /**
     * @var string Address
     */
    public $Address;

    /**
     * @var array User group ID
     */
    public $UserGroup;

    /**
     * @var string `qqOpenId` on QQ
     */
    public $QqOpenId;

    /**
     * @var string `qqUnionId` on QQ
     */
    public $QqUnionId;

    /**
     * @var string `wechatOpenId` on WeChat
     */
    public $WechatOpenId;

    /**
     * @var string `wechatUnionId` on WeChat
     */
    public $WechatUnionId;

    /**
     * @var string `alipayUserId` on Alipay
     */
    public $AlipayUserId;

    /**
     * @var string Description
     */
    public $Description;

    /**
     * @var string Date of birth
     */
    public $Birthdate;

    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var string Coordinate
     */
    public $Locale;

    /**
     * @var string Gender. Valid values: `MALE`, `FEMALE`, `UNKNOWN`.
     */
    public $Gender;

    /**
     * @var string Identity verification method
     */
    public $IdentityVerificationMethod;

    /**
     * @var boolean Whether the identity is verified
     */
    public $IdentityVerified;

    /**
     * @var string Job
     */
    public $Job;

    /**
     * @var string Country/Region
     */
    public $Nationality;

    /**
     * @var string Time zone
     */
    public $Zone;

    /**
     * @var string Password ciphertext
     */
    public $Password;

    /**
     * @var array Custom attribute
     */
    public $CustomizationAttributes;

    /**
     * @var Salt Password salt
     */
    public $Salt;

    /**
     * @var string Password encryption method. Valid values: `SHA1`, `BCRYPT`.
     */
    public $PasswordEncryptTypeEnum;

    /**
     * @param string $UserName Username
     * @param string $PhoneNumber Mobile number
     * @param string $Email Email address
     * @param string $ResidentIdentityCard ID card number
     * @param string $Nickname Nickname
     * @param string $Address Address
     * @param array $UserGroup User group ID
     * @param string $QqOpenId `qqOpenId` on QQ
     * @param string $QqUnionId `qqUnionId` on QQ
     * @param string $WechatOpenId `wechatOpenId` on WeChat
     * @param string $WechatUnionId `wechatUnionId` on WeChat
     * @param string $AlipayUserId `alipayUserId` on Alipay
     * @param string $Description Description
     * @param string $Birthdate Date of birth
     * @param string $Name Name
     * @param string $Locale Coordinate
     * @param string $Gender Gender. Valid values: `MALE`, `FEMALE`, `UNKNOWN`.
     * @param string $IdentityVerificationMethod Identity verification method
     * @param boolean $IdentityVerified Whether the identity is verified
     * @param string $Job Job
     * @param string $Nationality Country/Region
     * @param string $Zone Time zone
     * @param string $Password Password ciphertext
     * @param array $CustomizationAttributes Custom attribute
     * @param Salt $Salt Password salt
     * @param string $PasswordEncryptTypeEnum Password encryption method. Valid values: `SHA1`, `BCRYPT`.
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("ResidentIdentityCard",$param) and $param["ResidentIdentityCard"] !== null) {
            $this->ResidentIdentityCard = $param["ResidentIdentityCard"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("UserGroup",$param) and $param["UserGroup"] !== null) {
            $this->UserGroup = $param["UserGroup"];
        }

        if (array_key_exists("QqOpenId",$param) and $param["QqOpenId"] !== null) {
            $this->QqOpenId = $param["QqOpenId"];
        }

        if (array_key_exists("QqUnionId",$param) and $param["QqUnionId"] !== null) {
            $this->QqUnionId = $param["QqUnionId"];
        }

        if (array_key_exists("WechatOpenId",$param) and $param["WechatOpenId"] !== null) {
            $this->WechatOpenId = $param["WechatOpenId"];
        }

        if (array_key_exists("WechatUnionId",$param) and $param["WechatUnionId"] !== null) {
            $this->WechatUnionId = $param["WechatUnionId"];
        }

        if (array_key_exists("AlipayUserId",$param) and $param["AlipayUserId"] !== null) {
            $this->AlipayUserId = $param["AlipayUserId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Birthdate",$param) and $param["Birthdate"] !== null) {
            $this->Birthdate = $param["Birthdate"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Locale",$param) and $param["Locale"] !== null) {
            $this->Locale = $param["Locale"];
        }

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("IdentityVerificationMethod",$param) and $param["IdentityVerificationMethod"] !== null) {
            $this->IdentityVerificationMethod = $param["IdentityVerificationMethod"];
        }

        if (array_key_exists("IdentityVerified",$param) and $param["IdentityVerified"] !== null) {
            $this->IdentityVerified = $param["IdentityVerified"];
        }

        if (array_key_exists("Job",$param) and $param["Job"] !== null) {
            $this->Job = $param["Job"];
        }

        if (array_key_exists("Nationality",$param) and $param["Nationality"] !== null) {
            $this->Nationality = $param["Nationality"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("CustomizationAttributes",$param) and $param["CustomizationAttributes"] !== null) {
            $this->CustomizationAttributes = [];
            foreach ($param["CustomizationAttributes"] as $key => $value){
                $obj = new MemberMap();
                $obj->deserialize($value);
                array_push($this->CustomizationAttributes, $obj);
            }
        }

        if (array_key_exists("Salt",$param) and $param["Salt"] !== null) {
            $this->Salt = new Salt();
            $this->Salt->deserialize($param["Salt"]);
        }

        if (array_key_exists("PasswordEncryptTypeEnum",$param) and $param["PasswordEncryptTypeEnum"] !== null) {
            $this->PasswordEncryptTypeEnum = $param["PasswordEncryptTypeEnum"];
        }
    }
}
