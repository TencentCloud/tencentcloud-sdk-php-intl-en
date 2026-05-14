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
 * GetMultiFlowStatistic request structure.
 *
 * @method array getDeviceIds() Obtain Device id list, up to 10 devices at a time
 * @method void setDeviceIds(array $DeviceIds) Set Device id list, up to 10 devices at a time
 * @method integer getBeginTime() Obtain 1659514436
 * @method void setBeginTime(integer $BeginTime) Set 1659514436
 * @method integer getEndTime() Obtain 1659515000
 * @method void setEndTime(integer $EndTime) Set 1659515000
 * @method integer getType() Obtain Statistics traffic type (1: uplink traffic, 2: downstream traffic, 3: sum of upstream and downstream)
 * @method void setType(integer $Type) Set Statistics traffic type (1: uplink traffic, 2: downstream traffic, 3: sum of upstream and downstream)
 * @method integer getTimeGranularity() Obtain Statistical time granularity (1: hourly statistics, 2: daily statistics).
 * @method void setTimeGranularity(integer $TimeGranularity) Set Statistical time granularity (1: hourly statistics, 2: daily statistics).
 * @method string getAccessRegion() Obtain Access region. Value ranges from 'MC' to 'AM'. MC=Chinese mainland AP=Asia Pacific EU=Europe AM=Americas. Leave it blank to represent all regions.
 * @method void setAccessRegion(string $AccessRegion) Set Access region. Value ranges from 'MC' to 'AM'. MC=Chinese mainland AP=Asia Pacific EU=Europe AM=Americas. Leave it blank to represent all regions.
 * @method integer getGatewayType() Obtain Gateway type. 0: public cloud gateway; 1: private gateway. Default is 0 if not specified.
 * @method void setGatewayType(integer $GatewayType) Set Gateway type. 0: public cloud gateway; 1: private gateway. Default is 0 if not specified.
 */
class GetMultiFlowStatisticRequest extends AbstractModel
{
    /**
     * @var array Device id list, up to 10 devices at a time
     */
    public $DeviceIds;

    /**
     * @var integer 1659514436
     */
    public $BeginTime;

    /**
     * @var integer 1659515000
     */
    public $EndTime;

    /**
     * @var integer Statistics traffic type (1: uplink traffic, 2: downstream traffic, 3: sum of upstream and downstream)
     */
    public $Type;

    /**
     * @var integer Statistical time granularity (1: hourly statistics, 2: daily statistics).
     */
    public $TimeGranularity;

    /**
     * @var string Access region. Value ranges from 'MC' to 'AM'. MC=Chinese mainland AP=Asia Pacific EU=Europe AM=Americas. Leave it blank to represent all regions.
     */
    public $AccessRegion;

    /**
     * @var integer Gateway type. 0: public cloud gateway; 1: private gateway. Default is 0 if not specified.
     */
    public $GatewayType;

    /**
     * @param array $DeviceIds Device id list, up to 10 devices at a time
     * @param integer $BeginTime 1659514436
     * @param integer $EndTime 1659515000
     * @param integer $Type Statistics traffic type (1: uplink traffic, 2: downstream traffic, 3: sum of upstream and downstream)
     * @param integer $TimeGranularity Statistical time granularity (1: hourly statistics, 2: daily statistics).
     * @param string $AccessRegion Access region. Value ranges from 'MC' to 'AM'. MC=Chinese mainland AP=Asia Pacific EU=Europe AM=Americas. Leave it blank to represent all regions.
     * @param integer $GatewayType Gateway type. 0: public cloud gateway; 1: private gateway. Default is 0 if not specified.
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
        if (array_key_exists("DeviceIds",$param) and $param["DeviceIds"] !== null) {
            $this->DeviceIds = $param["DeviceIds"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TimeGranularity",$param) and $param["TimeGranularity"] !== null) {
            $this->TimeGranularity = $param["TimeGranularity"];
        }

        if (array_key_exists("AccessRegion",$param) and $param["AccessRegion"] !== null) {
            $this->AccessRegion = $param["AccessRegion"];
        }

        if (array_key_exists("GatewayType",$param) and $param["GatewayType"] !== null) {
            $this->GatewayType = $param["GatewayType"];
        }
    }
}
