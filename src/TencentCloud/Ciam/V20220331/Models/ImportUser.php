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
 * Import user information.
1. At least one of the following nine attributes should be included during the import: UserName, PhoneNumber, Email, WeChatOpenId, WeChatUnionId, AlipayUserId, QQOpenId, QQUnionId, and WeComUserId. Each of these attributes should adhere to the regular expression rules for initial custom attributes. The regular expressions for UserName, PhoneNumber, and Email can be queried in Custom Attributes on the console.
2. For the import of passwords, plaintext import, MD5 ciphertext import, SHA1 ciphertext import, and BCRYPT ciphertext import are supported. The import method should be specified in the PasswordEncryptTypeEnum field.
3. IdentityVerified and IdentityVerificationMethod can be imported.
When IdentityVerified is true, IdentityVerificationMethod should be entered.
When IdentityVerificationMethod is nameAndIdCard, Name and ResidentIdentityCard should be entered.
When IdentityVerificationMethod is nameIdCardAndPhone, Name, PhoneNumber, and ResidentIdentityCard should be entered.
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
 * @method string getWeComUserId() Obtain WeCom user ID.
 * @method void setWeComUserId(string $WeComUserId) Set WeCom user ID.
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
 * @method string getIndexedAttribute1() Obtain Index field 1
 * @method void setIndexedAttribute1(string $IndexedAttribute1) Set Index field 1
 * @method string getIndexedAttribute2() Obtain Index field 2
 * @method void setIndexedAttribute2(string $IndexedAttribute2) Set Index field 2
 * @method string getIndexedAttribute3() Obtain Index field 3
 * @method void setIndexedAttribute3(string $IndexedAttribute3) Set Index field 3
 * @method string getIndexedAttribute4() Obtain Index field 4
 * @method void setIndexedAttribute4(string $IndexedAttribute4) Set Index field 4
 * @method string getIndexedAttribute5() Obtain Index field 5
 * @method void setIndexedAttribute5(string $IndexedAttribute5) Set Index field 5
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
     * @var string WeCom user ID.
     */
    public $WeComUserId;

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
     * @var string Index field 1
     */
    public $IndexedAttribute1;

    /**
     * @var string Index field 2
     */
    public $IndexedAttribute2;

    /**
     * @var string Index field 3
     */
    public $IndexedAttribute3;

    /**
     * @var string Index field 4
     */
    public $IndexedAttribute4;

    /**
     * @var string Index field 5
     */
    public $IndexedAttribute5;

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
     * @param string $WeComUserId WeCom user ID.
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
     * @param string $IndexedAttribute1 Index field 1
     * @param string $IndexedAttribute2 Index field 2
     * @param string $IndexedAttribute3 Index field 3
     * @param string $IndexedAttribute4 Index field 4
     * @param string $IndexedAttribute5 Index field 5
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

        if (array_key_exists("WeComUserId",$param) and $param["WeComUserId"] !== null) {
            $this->WeComUserId = $param["WeComUserId"];
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

        if (array_key_exists("IndexedAttribute1",$param) and $param["IndexedAttribute1"] !== null) {
            $this->IndexedAttribute1 = $param["IndexedAttribute1"];
        }

        if (array_key_exists("IndexedAttribute2",$param) and $param["IndexedAttribute2"] !== null) {
            $this->IndexedAttribute2 = $param["IndexedAttribute2"];
        }

        if (array_key_exists("IndexedAttribute3",$param) and $param["IndexedAttribute3"] !== null) {
            $this->IndexedAttribute3 = $param["IndexedAttribute3"];
        }

        if (array_key_exists("IndexedAttribute4",$param) and $param["IndexedAttribute4"] !== null) {
            $this->IndexedAttribute4 = $param["IndexedAttribute4"];
        }

        if (array_key_exists("IndexedAttribute5",$param) and $param["IndexedAttribute5"] !== null) {
            $this->IndexedAttribute5 = $param["IndexedAttribute5"];
        }
    }
}
