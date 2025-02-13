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
 * User-owned number approval detail data type
 *
 * @method integer getCallType() Obtain Number type: 0 - inbound | 1 - outbound | 2 - inbound and outbound.
 * @method void setCallType(integer $CallType) Set Number type: 0 - inbound | 1 - outbound | 2 - inbound and outbound.
 * @method string getPhoneNumber() Obtain Line number.
 * @method void setPhoneNumber(string $PhoneNumber) Set Line number.
 * @method integer getMaxCallCount() Obtain Maximum concurrent call number.
 * @method void setMaxCallCount(integer $MaxCallCount) Set Maximum concurrent call number.
 * @method integer getMaxCallPSec() Obtain Maximum number of concurrencies per second.
 * @method void setMaxCallPSec(integer $MaxCallPSec) Set Maximum number of concurrencies per second.
 * @method string getOutboundCalleeFormat() Obtain Outbound called number format, use {+e.164} or {e.164}. 
 * @method void setOutboundCalleeFormat(string $OutboundCalleeFormat) Set Outbound called number format, use {+e.164} or {e.164}. 
 */
class OwnNumberApplyDetailItem extends AbstractModel
{
    /**
     * @var integer Number type: 0 - inbound | 1 - outbound | 2 - inbound and outbound.
     */
    public $CallType;

    /**
     * @var string Line number.
     */
    public $PhoneNumber;

    /**
     * @var integer Maximum concurrent call number.
     */
    public $MaxCallCount;

    /**
     * @var integer Maximum number of concurrencies per second.
     */
    public $MaxCallPSec;

    /**
     * @var string Outbound called number format, use {+e.164} or {e.164}. 
     */
    public $OutboundCalleeFormat;

    /**
     * @param integer $CallType Number type: 0 - inbound | 1 - outbound | 2 - inbound and outbound.
     * @param string $PhoneNumber Line number.
     * @param integer $MaxCallCount Maximum concurrent call number.
     * @param integer $MaxCallPSec Maximum number of concurrencies per second.
     * @param string $OutboundCalleeFormat Outbound called number format, use {+e.164} or {e.164}. 
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
        if (array_key_exists("CallType",$param) and $param["CallType"] !== null) {
            $this->CallType = $param["CallType"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("MaxCallCount",$param) and $param["MaxCallCount"] !== null) {
            $this->MaxCallCount = $param["MaxCallCount"];
        }

        if (array_key_exists("MaxCallPSec",$param) and $param["MaxCallPSec"] !== null) {
            $this->MaxCallPSec = $param["MaxCallPSec"];
        }

        if (array_key_exists("OutboundCalleeFormat",$param) and $param["OutboundCalleeFormat"] !== null) {
            $this->OutboundCalleeFormat = $param["OutboundCalleeFormat"];
        }
    }
}
