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
 * GetFlowStatistic request structure.
 *
 * @method string getDeviceId() Obtain device ID
 * @method void setDeviceId(string $DeviceId) Set device ID
 * @method integer getBeginTime() Obtain Search start time
 * @method void setBeginTime(integer $BeginTime) Set Search start time
 * @method integer getEndTime() Obtain end time
 * @method void setEndTime(integer $EndTime) Set end time
 * @method integer getType() Obtain Traffic type (1: uplink traffic, 2: downstream traffic, 3: sum of upstream and downstream)
 * @method void setType(integer $Type) Set Traffic type (1: uplink traffic, 2: downstream traffic, 3: sum of upstream and downstream)
 * @method integer getTimeGranularity() Obtain Time granularity (1: hourly statistics, 2: daily statistics)
 * @method void setTimeGranularity(integer $TimeGranularity) Set Time granularity (1: hourly statistics, 2: daily statistics)
 * @method string getAccessRegion() Obtain Access region. Value ranges from 'MC' to 'AM'. MC=Chinese mainland AP=Asia Pacific EU=Europe AM=Americas. Leave it blank to represent all regions.
 * @method void setAccessRegion(string $AccessRegion) Set Access region. Value ranges from 'MC' to 'AM'. MC=Chinese mainland AP=Asia Pacific EU=Europe AM=Americas. Leave it blank to represent all regions.
 * @method integer getGatewayType() Obtain Gateway type. 0: public cloud gateway; 1: private gateway. Default is 0 if not specified.
 * @method void setGatewayType(integer $GatewayType) Set Gateway type. 0: public cloud gateway; 1: private gateway. Default is 0 if not specified.
 * @method array getDeviceList() Obtain Device ID list. Used for querying traffic volume across devices. When this field is enabled, DeviceId can be "-1".
 * @method void setDeviceList(array $DeviceList) Set Device ID list. Used for querying traffic volume across devices. When this field is enabled, DeviceId can be "-1".
 */
class GetFlowStatisticRequest extends AbstractModel
{
    /**
     * @var string device ID
     */
    public $DeviceId;

    /**
     * @var integer Search start time
     */
    public $BeginTime;

    /**
     * @var integer end time
     */
    public $EndTime;

    /**
     * @var integer Traffic type (1: uplink traffic, 2: downstream traffic, 3: sum of upstream and downstream)
     */
    public $Type;

    /**
     * @var integer Time granularity (1: hourly statistics, 2: daily statistics)
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
     * @var array Device ID list. Used for querying traffic volume across devices. When this field is enabled, DeviceId can be "-1".
     */
    public $DeviceList;

    /**
     * @param string $DeviceId device ID
     * @param integer $BeginTime Search start time
     * @param integer $EndTime end time
     * @param integer $Type Traffic type (1: uplink traffic, 2: downstream traffic, 3: sum of upstream and downstream)
     * @param integer $TimeGranularity Time granularity (1: hourly statistics, 2: daily statistics)
     * @param string $AccessRegion Access region. Value ranges from 'MC' to 'AM'. MC=Chinese mainland AP=Asia Pacific EU=Europe AM=Americas. Leave it blank to represent all regions.
     * @param integer $GatewayType Gateway type. 0: public cloud gateway; 1: private gateway. Default is 0 if not specified.
     * @param array $DeviceList Device ID list. Used for querying traffic volume across devices. When this field is enabled, DeviceId can be "-1".
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
        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
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

        if (array_key_exists("DeviceList",$param) and $param["DeviceList"] !== null) {
            $this->DeviceList = $param["DeviceList"];
        }
    }
}
