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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Application purchase information.
 *
 * @method integer getSdkAppId() Obtain Application id.
 * @method void setSdkAppId(integer $SdkAppId) Set Application id.
 * @method string getName() Obtain Application name.
 * @method void setName(string $Name) Set Application name.
 * @method integer getStaffBuyNum() Obtain Agent purchase count (still within the validity period).
 * @method void setStaffBuyNum(integer $StaffBuyNum) Set Agent purchase count (still within the validity period).
 * @method array getStaffBuyList() Obtain Agent purchase list (still within the validity period).
 * @method void setStaffBuyList(array $StaffBuyList) Set Agent purchase list (still within the validity period).
 * @method array getPhoneNumBuyList() Obtain List of numbers purchased.
 * @method void setPhoneNumBuyList(array $PhoneNumBuyList) Set List of numbers purchased.
 * @method integer getSipBuyNum() Obtain Number of office telephones purchased (still within the validity period).
 * @method void setSipBuyNum(integer $SipBuyNum) Set Number of office telephones purchased (still within the validity period).
 */
class SdkAppIdBuyInfo extends AbstractModel
{
    /**
     * @var integer Application id.
     */
    public $SdkAppId;

    /**
     * @var string Application name.
     */
    public $Name;

    /**
     * @var integer Agent purchase count (still within the validity period).
     */
    public $StaffBuyNum;

    /**
     * @var array Agent purchase list (still within the validity period).
     */
    public $StaffBuyList;

    /**
     * @var array List of numbers purchased.
     */
    public $PhoneNumBuyList;

    /**
     * @var integer Number of office telephones purchased (still within the validity period).
     */
    public $SipBuyNum;

    /**
     * @param integer $SdkAppId Application id.
     * @param string $Name Application name.
     * @param integer $StaffBuyNum Agent purchase count (still within the validity period).
     * @param array $StaffBuyList Agent purchase list (still within the validity period).
     * @param array $PhoneNumBuyList List of numbers purchased.
     * @param integer $SipBuyNum Number of office telephones purchased (still within the validity period).
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("StaffBuyNum",$param) and $param["StaffBuyNum"] !== null) {
            $this->StaffBuyNum = $param["StaffBuyNum"];
        }

        if (array_key_exists("StaffBuyList",$param) and $param["StaffBuyList"] !== null) {
            $this->StaffBuyList = [];
            foreach ($param["StaffBuyList"] as $key => $value){
                $obj = new StaffBuyInfo();
                $obj->deserialize($value);
                array_push($this->StaffBuyList, $obj);
            }
        }

        if (array_key_exists("PhoneNumBuyList",$param) and $param["PhoneNumBuyList"] !== null) {
            $this->PhoneNumBuyList = [];
            foreach ($param["PhoneNumBuyList"] as $key => $value){
                $obj = new PhoneNumBuyInfo();
                $obj->deserialize($value);
                array_push($this->PhoneNumBuyList, $obj);
            }
        }

        if (array_key_exists("SipBuyNum",$param) and $param["SipBuyNum"] !== null) {
            $this->SipBuyNum = $param["SipBuyNum"];
        }
    }
}
