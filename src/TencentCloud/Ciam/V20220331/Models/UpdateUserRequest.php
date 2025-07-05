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
namespace TencentCloud\Ciam\V20220331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateUser request structure.
 *
 * @method string getUserId() Obtain User ID
 * @method void setUserId(string $UserId) Set User ID
 * @method string getUserStoreId() Obtain User directory ID
 * @method void setUserStoreId(string $UserStoreId) Set User directory ID
 * @method string getUserName() Obtain Username
 * @method void setUserName(string $UserName) Set Username
 * @method string getPhoneNumber() Obtain Mobile number
 * @method void setPhoneNumber(string $PhoneNumber) Set Mobile number
 * @method string getEmail() Obtain Email address
 * @method void setEmail(string $Email) Set Email address
 * @method string getNickname() Obtain Nickname
 * @method void setNickname(string $Nickname) Set Nickname
 * @method string getAddress() Obtain Address
 * @method void setAddress(string $Address) Set Address
 * @method array getUserGroup() Obtain User group
 * @method void setUserGroup(array $UserGroup) Set User group
 * @method integer getBirthdate() Obtain Date of birth
 * @method void setBirthdate(integer $Birthdate) Set Date of birth
 * @method array getCustomizationAttributes() Obtain Custom attribute
 * @method void setCustomizationAttributes(array $CustomizationAttributes) Set Custom attribute
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
class UpdateUserRequest extends AbstractModel
{
    /**
     * @var string User ID
     */
    public $UserId;

    /**
     * @var string User directory ID
     */
    public $UserStoreId;

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
     * @var string Nickname
     */
    public $Nickname;

    /**
     * @var string Address
     */
    public $Address;

    /**
     * @var array User group
     */
    public $UserGroup;

    /**
     * @var integer Date of birth
     */
    public $Birthdate;

    /**
     * @var array Custom attribute
     */
    public $CustomizationAttributes;

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
     * @param string $UserId User ID
     * @param string $UserStoreId User directory ID
     * @param string $UserName Username
     * @param string $PhoneNumber Mobile number
     * @param string $Email Email address
     * @param string $Nickname Nickname
     * @param string $Address Address
     * @param array $UserGroup User group
     * @param integer $Birthdate Date of birth
     * @param array $CustomizationAttributes Custom attribute
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserStoreId",$param) and $param["UserStoreId"] !== null) {
            $this->UserStoreId = $param["UserStoreId"];
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

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("UserGroup",$param) and $param["UserGroup"] !== null) {
            $this->UserGroup = $param["UserGroup"];
        }

        if (array_key_exists("Birthdate",$param) and $param["Birthdate"] !== null) {
            $this->Birthdate = $param["Birthdate"];
        }

        if (array_key_exists("CustomizationAttributes",$param) and $param["CustomizationAttributes"] !== null) {
            $this->CustomizationAttributes = [];
            foreach ($param["CustomizationAttributes"] as $key => $value){
                $obj = new MemberMap();
                $obj->deserialize($value);
                array_push($this->CustomizationAttributes, $obj);
            }
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
