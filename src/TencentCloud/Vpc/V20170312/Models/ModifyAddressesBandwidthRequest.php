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
 * ModifyAddressesBandwidth request structure.
 *
 * @method array getAddressIds() Obtain List of EIP IDs, such as “eip-xxxx”.
 * @method void setAddressIds(array $AddressIds) Set List of EIP IDs, such as “eip-xxxx”.
 * @method integer getInternetMaxBandwidthOut() Obtain Target bandwidth value adjustment
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set Target bandwidth value adjustment
 * @method string getStartTime() Obtain (Disused) The start time of the monthly bandwidth subscription
 * @method void setStartTime(string $StartTime) Set (Disused) The start time of the monthly bandwidth subscription
 * @method string getEndTime() Obtain (Disused) The end time of the monthly bandwidth subscription
 * @method void setEndTime(string $EndTime) Set (Disused) The end time of the monthly bandwidth subscription
 */
class ModifyAddressesBandwidthRequest extends AbstractModel
{
    /**
     * @var array List of EIP IDs, such as “eip-xxxx”.
     */
    public $AddressIds;

    /**
     * @var integer Target bandwidth value adjustment
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string (Disused) The start time of the monthly bandwidth subscription
     */
    public $StartTime;

    /**
     * @var string (Disused) The end time of the monthly bandwidth subscription
     */
    public $EndTime;

    /**
     * @param array $AddressIds List of EIP IDs, such as “eip-xxxx”.
     * @param integer $InternetMaxBandwidthOut Target bandwidth value adjustment
     * @param string $StartTime (Disused) The start time of the monthly bandwidth subscription
     * @param string $EndTime (Disused) The end time of the monthly bandwidth subscription
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
