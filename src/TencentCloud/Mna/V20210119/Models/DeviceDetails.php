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
 * device details
 *
 * @method DeviceBaseInfo getDeviceBaseInfo() Obtain Device basic info
 * @method void setDeviceBaseInfo(DeviceBaseInfo $DeviceBaseInfo) Set Device basic info
 * @method array getDeviceNetInfo() Obtain Device network info
 * @method void setDeviceNetInfo(array $DeviceNetInfo) Set Device network info
 * @method string getGatewaySite() Obtain Aggregate server address
 * @method void setGatewaySite(string $GatewaySite) Set Aggregate server address
 * @method float getBusinessDownRate() Obtain Downlink Rate
 * @method void setBusinessDownRate(float $BusinessDownRate) Set Downlink Rate
 * @method float getBusinessUpRate() Obtain Business-wise uplink rate
 * @method void setBusinessUpRate(float $BusinessUpRate) Set Business-wise uplink rate
 */
class DeviceDetails extends AbstractModel
{
    /**
     * @var DeviceBaseInfo Device basic info
     */
    public $DeviceBaseInfo;

    /**
     * @var array Device network info
     */
    public $DeviceNetInfo;

    /**
     * @var string Aggregate server address
     */
    public $GatewaySite;

    /**
     * @var float Downlink Rate
     */
    public $BusinessDownRate;

    /**
     * @var float Business-wise uplink rate
     */
    public $BusinessUpRate;

    /**
     * @param DeviceBaseInfo $DeviceBaseInfo Device basic info
     * @param array $DeviceNetInfo Device network info
     * @param string $GatewaySite Aggregate server address
     * @param float $BusinessDownRate Downlink Rate
     * @param float $BusinessUpRate Business-wise uplink rate
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
        if (array_key_exists("DeviceBaseInfo",$param) and $param["DeviceBaseInfo"] !== null) {
            $this->DeviceBaseInfo = new DeviceBaseInfo();
            $this->DeviceBaseInfo->deserialize($param["DeviceBaseInfo"]);
        }

        if (array_key_exists("DeviceNetInfo",$param) and $param["DeviceNetInfo"] !== null) {
            $this->DeviceNetInfo = [];
            foreach ($param["DeviceNetInfo"] as $key => $value){
                $obj = new DeviceNetInfo();
                $obj->deserialize($value);
                array_push($this->DeviceNetInfo, $obj);
            }
        }

        if (array_key_exists("GatewaySite",$param) and $param["GatewaySite"] !== null) {
            $this->GatewaySite = $param["GatewaySite"];
        }

        if (array_key_exists("BusinessDownRate",$param) and $param["BusinessDownRate"] !== null) {
            $this->BusinessDownRate = $param["BusinessDownRate"];
        }

        if (array_key_exists("BusinessUpRate",$param) and $param["BusinessUpRate"] !== null) {
            $this->BusinessUpRate = $param["BusinessUpRate"];
        }
    }
}
