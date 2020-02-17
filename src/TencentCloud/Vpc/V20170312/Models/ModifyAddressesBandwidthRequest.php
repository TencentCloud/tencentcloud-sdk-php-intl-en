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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getAddressIds() Obtain The unique ID of the EIP, such as 'eip-xxxx'.
 * @method void setAddressIds(array $AddressIds) Set The unique ID of the EIP, such as 'eip-xxxx'.
 * @method integer getInternetMaxBandwidthOut() Obtain Target bandwidth value adjustment
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set Target bandwidth value adjustment
 * @method string getStartTime() Obtain The monthly bandwidth start time
 * @method void setStartTime(string $StartTime) Set The monthly bandwidth start time
 * @method string getEndTime() Obtain The monthly bandwidth end time
 * @method void setEndTime(string $EndTime) Set The monthly bandwidth end time
 */

/**
 *ModifyAddressesBandwidth request structure.
 */
class ModifyAddressesBandwidthRequest extends AbstractModel
{
    /**
     * @var array The unique ID of the EIP, such as 'eip-xxxx'.
     */
    public $AddressIds;

    /**
     * @var integer Target bandwidth value adjustment
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string The monthly bandwidth start time
     */
    public $StartTime;

    /**
     * @var string The monthly bandwidth end time
     */
    public $EndTime;
    /**
     * @param array $AddressIds The unique ID of the EIP, such as 'eip-xxxx'.
     * @param integer $InternetMaxBandwidthOut Target bandwidth value adjustment
     * @param string $StartTime The monthly bandwidth start time
     * @param string $EndTime The monthly bandwidth end time
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
        if (array_key_exists("AddressIds",$param) and $param["AddressIds"] !== null) {
            $this->AddressIds = $param["AddressIds"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
