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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Device traffic information
 *
 * @method array getNetDetails() Obtain Traffic data point
 * @method void setNetDetails(array $NetDetails) Set Traffic data point
 * @method string getDeviceId() Obtain device ID
 * @method void setDeviceId(string $DeviceId) Set device ID
 * @method float getMaxValue() Obtain Maximum value of traffic (measurement unit: bytes)
 * @method void setMaxValue(float $MaxValue) Set Maximum value of traffic (measurement unit: bytes)
 * @method float getAvgValue() Obtain Average traffic (unit: bytes)
 * @method void setAvgValue(float $AvgValue) Set Average traffic (unit: bytes)
 * @method float getTotalValue() Obtain Total traffic (unit: bytes)
 * @method void setTotalValue(float $TotalValue) Set Total traffic (unit: bytes)
 */
class FlowDetails extends AbstractModel
{
    /**
     * @var array Traffic data point
     */
    public $NetDetails;

    /**
     * @var string device ID
     */
    public $DeviceId;

    /**
     * @var float Maximum value of traffic (measurement unit: bytes)
     */
    public $MaxValue;

    /**
     * @var float Average traffic (unit: bytes)
     */
    public $AvgValue;

    /**
     * @var float Total traffic (unit: bytes)
     */
    public $TotalValue;

    /**
     * @param array $NetDetails Traffic data point
     * @param string $DeviceId device ID
     * @param float $MaxValue Maximum value of traffic (measurement unit: bytes)
     * @param float $AvgValue Average traffic (unit: bytes)
     * @param float $TotalValue Total traffic (unit: bytes)
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
        if (array_key_exists("NetDetails",$param) and $param["NetDetails"] !== null) {
            $this->NetDetails = [];
            foreach ($param["NetDetails"] as $key => $value){
                $obj = new NetDetails();
                $obj->deserialize($value);
                array_push($this->NetDetails, $obj);
            }
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("MaxValue",$param) and $param["MaxValue"] !== null) {
            $this->MaxValue = $param["MaxValue"];
        }

        if (array_key_exists("AvgValue",$param) and $param["AvgValue"] !== null) {
            $this->AvgValue = $param["AvgValue"];
        }

        if (array_key_exists("TotalValue",$param) and $param["TotalValue"] !== null) {
            $this->TotalValue = $param["TotalValue"];
        }
    }
}
