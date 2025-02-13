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
 * Number purchase information.
 *
 * @method string getPhoneNum() Obtain Telephone number.
 * @method void setPhoneNum(string $PhoneNum) Set Telephone number.
 * @method integer getType() Obtain Number type, 0 - landline | 1 - virtual business number | 2 - ISP number | 3 - 400 number.
 * @method void setType(integer $Type) Set Number type, 0 - landline | 1 - virtual business number | 2 - ISP number | 3 - 400 number.
 * @method integer getCallType() Obtain Call type of the number, 1 - inbound | 2 - outbound | 3 - inbound and outbound.
 * @method void setCallType(integer $CallType) Set Call type of the number, 1 - inbound | 2 - outbound | 3 - inbound and outbound.
 * @method integer getBuyTime() Obtain Purchased timestamp.
 * @method void setBuyTime(integer $BuyTime) Set Purchased timestamp.
 * @method integer getEndTime() Obtain Deadline timestamp.
 * @method void setEndTime(integer $EndTime) Set Deadline timestamp.
 * @method integer getState() Obtain Number status, 1-normal | 2-suspended due to non-payment | 4-admin suspended | 5-suspended due to violation.
 * @method void setState(integer $State) Set Number status, 1-normal | 2-suspended due to non-payment | 4-admin suspended | 5-suspended due to violation.
 */
class PhoneNumBuyInfo extends AbstractModel
{
    /**
     * @var string Telephone number.
     */
    public $PhoneNum;

    /**
     * @var integer Number type, 0 - landline | 1 - virtual business number | 2 - ISP number | 3 - 400 number.
     */
    public $Type;

    /**
     * @var integer Call type of the number, 1 - inbound | 2 - outbound | 3 - inbound and outbound.
     */
    public $CallType;

    /**
     * @var integer Purchased timestamp.
     */
    public $BuyTime;

    /**
     * @var integer Deadline timestamp.
     */
    public $EndTime;

    /**
     * @var integer Number status, 1-normal | 2-suspended due to non-payment | 4-admin suspended | 5-suspended due to violation.
     */
    public $State;

    /**
     * @param string $PhoneNum Telephone number.
     * @param integer $Type Number type, 0 - landline | 1 - virtual business number | 2 - ISP number | 3 - 400 number.
     * @param integer $CallType Call type of the number, 1 - inbound | 2 - outbound | 3 - inbound and outbound.
     * @param integer $BuyTime Purchased timestamp.
     * @param integer $EndTime Deadline timestamp.
     * @param integer $State Number status, 1-normal | 2-suspended due to non-payment | 4-admin suspended | 5-suspended due to violation.
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
        if (array_key_exists("PhoneNum",$param) and $param["PhoneNum"] !== null) {
            $this->PhoneNum = $param["PhoneNum"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CallType",$param) and $param["CallType"] !== null) {
            $this->CallType = $param["CallType"];
        }

        if (array_key_exists("BuyTime",$param) and $param["BuyTime"] !== null) {
            $this->BuyTime = $param["BuyTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }
    }
}
