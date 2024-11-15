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
 * User information
 *
 * @method string getUserId() Obtain User ID
 * @method void setUserId(string $UserId) Set User ID
 * @method string getUserName() Obtain Username
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserName(string $UserName) Set Username
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPhoneNumber() Obtain Mobile number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPhoneNumber(string $PhoneNumber) Set Mobile number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEmail() Obtain Email address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEmail(string $Email) Set Email address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getLastSignOn() Obtain Last login time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastSignOn(integer $LastSignOn) Set Last login time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCreatedDate() Obtain Creation time
 * @method void setCreatedDate(integer $CreatedDate) Set Creation time
 * @method string getStatus() Obtain Status
 * @method void setStatus(string $Status) Set Status
 * @method string getUserDataSourceEnum() Obtain User source
 * @method void setUserDataSourceEnum(string $UserDataSourceEnum) Set User source
 * @method string getNickname() Obtain Nickname
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNickname(string $Nickname) Set Nickname
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAddress() Obtain Address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAddress(string $Address) Set Address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBirthdate() Obtain Date of birth
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBirthdate(integer $Birthdate) Set Date of birth
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getUserGroups() Obtain User group ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserGroups(array $UserGroups) Set User group ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getLastModifiedDate() Obtain Last modified time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastModifiedDate(integer $LastModifiedDate) Set Last modified time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getCustomAttributes() Obtain Custom attribute
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCustomAttributes(array $CustomAttributes) Set Custom attribute
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getResidentIdentityCard() Obtain ID card number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResidentIdentityCard(string $ResidentIdentityCard) Set ID card number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getQqOpenId() Obtain `OpenId` on QQ
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQqOpenId(string $QqOpenId) Set `OpenId` on QQ
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getQqUnionId() Obtain `UnionId` on QQ
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQqUnionId(string $QqUnionId) Set `UnionId` on QQ
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWechatOpenId() Obtain `WechatOpenId` on WeChat
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWechatOpenId(string $WechatOpenId) Set `WechatOpenId` on WeChat
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWechatUnionId() Obtain `WechatUnionId` on WeChat
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWechatUnionId(string $WechatUnionId) Set `WechatUnionId` on WeChat
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAlipayUserId() Obtain `AlipayUserId` on Alipay
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAlipayUserId(string $AlipayUserId) Set `AlipayUserId` on Alipay
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWeComUserId() Obtain WeCom user ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWeComUserId(string $WeComUserId) Set WeCom user ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain Name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLocale() Obtain Coordinate
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLocale(string $Locale) Set Coordinate
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGender() Obtain Gender
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGender(string $Gender) Set Gender
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIdentityVerificationMethod() Obtain Identity verification method
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIdentityVerificationMethod(string $IdentityVerificationMethod) Set Identity verification method
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIdentityVerified() Obtain Whether the identity is verified
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIdentityVerified(boolean $IdentityVerified) Set Whether the identity is verified
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getJob() Obtain Job
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setJob(string $Job) Set Job
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNationality() Obtain Country/Region
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNationality(string $Nationality) Set Country/Region
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getPrimary() Obtain Whether the account is the primary account (after account merge, this parameter is `true` for primary accounts and `false` for secondary account).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPrimary(boolean $Primary) Set Whether the account is the primary account (after account merge, this parameter is `true` for primary accounts and `false` for secondary account).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getZone() Obtain Time zone
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZone(string $Zone) Set Time zone
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getAlreadyFirstLogin() Obtain Whether the account has ever logged in.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAlreadyFirstLogin(boolean $AlreadyFirstLogin) Set Whether the account has ever logged in.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTenantId() Obtain Tenant ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTenantId(string $TenantId) Set Tenant ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserStoreId() Obtain User directory ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserStoreId(string $UserStoreId) Set User directory ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getVersion() Obtain Version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVersion(integer $Version) Set Version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLockType() Obtain Lock type (locked by admin or locked by login policy)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLockType(string $LockType) Set Lock type (locked by admin or locked by login policy)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getLockTime() Obtain Lock time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLockTime(integer $LockTime) Set Lock time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIndexedAttribute1() Obtain Index field 1
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIndexedAttribute1(string $IndexedAttribute1) Set Index field 1
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getIndexedAttribute2() Obtain Index field 2
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIndexedAttribute2(string $IndexedAttribute2) Set Index field 2
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getIndexedAttribute3() Obtain Index field 3
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIndexedAttribute3(string $IndexedAttribute3) Set Index field 3
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getIndexedAttribute4() Obtain Index field 4
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIndexedAttribute4(string $IndexedAttribute4) Set Index field 4
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getIndexedAttribute5() Obtain Index field 5
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIndexedAttribute5(string $IndexedAttribute5) Set Index field 5
Note: this field may return null, indicating that no valid values can be obtained.
 */
class User extends AbstractModel
{
    /**
     * @var string User ID
     */
    public $UserId;

    /**
     * @var string Username
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserName;

    /**
     * @var string Mobile number
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PhoneNumber;

    /**
     * @var string Email address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Email;

    /**
     * @var integer Last login time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastSignOn;

    /**
     * @var integer Creation time
     */
    public $CreatedDate;

    /**
     * @var string Status
     */
    public $Status;

    /**
     * @var string User source
     */
    public $UserDataSourceEnum;

    /**
     * @var string Nickname
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Nickname;

    /**
     * @var string Address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Address;

    /**
     * @var integer Date of birth
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Birthdate;

    /**
     * @var array User group ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserGroups;

    /**
     * @var integer Last modified time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastModifiedDate;

    /**
     * @var array Custom attribute
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CustomAttributes;

    /**
     * @var string ID card number
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResidentIdentityCard;

    /**
     * @var string `OpenId` on QQ
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $QqOpenId;

    /**
     * @var string `UnionId` on QQ
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $QqUnionId;

    /**
     * @var string `WechatOpenId` on WeChat
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WechatOpenId;

    /**
     * @var string `WechatUnionId` on WeChat
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WechatUnionId;

    /**
     * @var string `AlipayUserId` on Alipay
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AlipayUserId;

    /**
     * @var string WeCom user ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WeComUserId;

    /**
     * @var string Description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Coordinate
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Locale;

    /**
     * @var string Gender
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Gender;

    /**
     * @var string Identity verification method
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IdentityVerificationMethod;

    /**
     * @var boolean Whether the identity is verified
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IdentityVerified;

    /**
     * @var string Job
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Job;

    /**
     * @var string Country/Region
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Nationality;

    /**
     * @var boolean Whether the account is the primary account (after account merge, this parameter is `true` for primary accounts and `false` for secondary account).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Primary;

    /**
     * @var string Time zone
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Zone;

    /**
     * @var boolean Whether the account has ever logged in.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AlreadyFirstLogin;

    /**
     * @var string Tenant ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TenantId;

    /**
     * @var string User directory ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserStoreId;

    /**
     * @var integer Version
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Version;

    /**
     * @var string Lock type (locked by admin or locked by login policy)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LockType;

    /**
     * @var integer Lock time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LockTime;

    /**
     * @var string Index field 1
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IndexedAttribute1;

    /**
     * @var string Index field 2
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IndexedAttribute2;

    /**
     * @var string Index field 3
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IndexedAttribute3;

    /**
     * @var string Index field 4
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IndexedAttribute4;

    /**
     * @var string Index field 5
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IndexedAttribute5;

    /**
     * @param string $UserId User ID
     * @param string $UserName Username
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PhoneNumber Mobile number
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Email Email address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $LastSignOn Last login time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CreatedDate Creation time
     * @param string $Status Status
     * @param string $UserDataSourceEnum User source
     * @param string $Nickname Nickname
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Address Address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Birthdate Date of birth
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $UserGroups User group ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $LastModifiedDate Last modified time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $CustomAttributes Custom attribute
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ResidentIdentityCard ID card number
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $QqOpenId `OpenId` on QQ
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $QqUnionId `UnionId` on QQ
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WechatOpenId `WechatOpenId` on WeChat
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WechatUnionId `WechatUnionId` on WeChat
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AlipayUserId `AlipayUserId` on Alipay
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WeComUserId WeCom user ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Description Description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name Name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Locale Coordinate
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Gender Gender
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IdentityVerificationMethod Identity verification method
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IdentityVerified Whether the identity is verified
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Job Job
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Nationality Country/Region
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $Primary Whether the account is the primary account (after account merge, this parameter is `true` for primary accounts and `false` for secondary account).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Zone Time zone
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $AlreadyFirstLogin Whether the account has ever logged in.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TenantId Tenant ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserStoreId User directory ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Version Version
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LockType Lock type (locked by admin or locked by login policy)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $LockTime Lock time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IndexedAttribute1 Index field 1
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $IndexedAttribute2 Index field 2
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $IndexedAttribute3 Index field 3
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $IndexedAttribute4 Index field 4
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $IndexedAttribute5 Index field 5
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
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

        if (array_key_exists("LastSignOn",$param) and $param["LastSignOn"] !== null) {
            $this->LastSignOn = $param["LastSignOn"];
        }

        if (array_key_exists("CreatedDate",$param) and $param["CreatedDate"] !== null) {
            $this->CreatedDate = $param["CreatedDate"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UserDataSourceEnum",$param) and $param["UserDataSourceEnum"] !== null) {
            $this->UserDataSourceEnum = $param["UserDataSourceEnum"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Birthdate",$param) and $param["Birthdate"] !== null) {
            $this->Birthdate = $param["Birthdate"];
        }

        if (array_key_exists("UserGroups",$param) and $param["UserGroups"] !== null) {
            $this->UserGroups = $param["UserGroups"];
        }

        if (array_key_exists("LastModifiedDate",$param) and $param["LastModifiedDate"] !== null) {
            $this->LastModifiedDate = $param["LastModifiedDate"];
        }

        if (array_key_exists("CustomAttributes",$param) and $param["CustomAttributes"] !== null) {
            $this->CustomAttributes = [];
            foreach ($param["CustomAttributes"] as $key => $value){
                $obj = new MemberMap();
                $obj->deserialize($value);
                array_push($this->CustomAttributes, $obj);
            }
        }

        if (array_key_exists("ResidentIdentityCard",$param) and $param["ResidentIdentityCard"] !== null) {
            $this->ResidentIdentityCard = $param["ResidentIdentityCard"];
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

        if (array_key_exists("Primary",$param) and $param["Primary"] !== null) {
            $this->Primary = $param["Primary"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("AlreadyFirstLogin",$param) and $param["AlreadyFirstLogin"] !== null) {
            $this->AlreadyFirstLogin = $param["AlreadyFirstLogin"];
        }

        if (array_key_exists("TenantId",$param) and $param["TenantId"] !== null) {
            $this->TenantId = $param["TenantId"];
        }

        if (array_key_exists("UserStoreId",$param) and $param["UserStoreId"] !== null) {
            $this->UserStoreId = $param["UserStoreId"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("LockType",$param) and $param["LockType"] !== null) {
            $this->LockType = $param["LockType"];
        }

        if (array_key_exists("LockTime",$param) and $param["LockTime"] !== null) {
            $this->LockTime = $param["LockTime"];
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
