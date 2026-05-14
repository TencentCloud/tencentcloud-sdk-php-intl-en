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
 * GetStatisticData request structure.
 *
 * @method string getDeviceId() Obtain Device ID. If not specified, pass "-1".
 * @method void setDeviceId(string $DeviceId) Set Device ID. If not specified, pass "-1".
 * @method integer getBeginTime() Obtain Start time of statistics (seconds).
 * @method void setBeginTime(integer $BeginTime) Set Start time of statistics (seconds).
 * @method integer getEndTime() Obtain Statistics end time (s).
 * @method void setEndTime(integer $EndTime) Set Statistics end time (s).
 * @method integer getTimeGranularity() Obtain Aggregation granularity:
Hourly statistics
2: Daily statistics
 * @method void setTimeGranularity(integer $TimeGranularity) Set Aggregation granularity:
Hourly statistics
2: Daily statistics
 * @method string getAccessRegion() Obtain Access region. Value ranges from 'MC' to 'AM'. MC=Chinese mainland AP=Asia Pacific EU=Europe AM=Americas. Leave it blank to represent all regions.
 * @method void setAccessRegion(string $AccessRegion) Set Access region. Value ranges from 'MC' to 'AM'. MC=Chinese mainland AP=Asia Pacific EU=Europe AM=Americas. Leave it blank to represent all regions.
 * @method integer getGatewayType() Obtain Gateway type. 0: public cloud gateway; 1: private gateway. Default is 0 if not specified.
 * @method void setGatewayType(integer $GatewayType) Set Gateway type. 0: public cloud gateway; 1: private gateway. Default is 0 if not specified.
 * @method array getDeviceList() Obtain Device ID list. Up to 10 devices. Used when downloading total traffic of multiple devices. At this point, DeviceId can be "-1".
 * @method void setDeviceList(array $DeviceList) Set Device ID list. Up to 10 devices. Used when downloading total traffic of multiple devices. At this point, DeviceId can be "-1".
 * @method string getGroupId() Obtain Device group ID. If not specified, do not pass it. Used when downloading data by grouping.
 * @method void setGroupId(string $GroupId) Set Device group ID. If not specified, do not pass it. Used when downloading data by grouping.
 */
class GetStatisticDataRequest extends AbstractModel
{
    /**
     * @var string Device ID. If not specified, pass "-1".
     */
    public $DeviceId;

    /**
     * @var integer Start time of statistics (seconds).
     */
    public $BeginTime;

    /**
     * @var integer Statistics end time (s).
     */
    public $EndTime;

    /**
     * @var integer Aggregation granularity:
Hourly statistics
2: Daily statistics
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
     * @var array Device ID list. Up to 10 devices. Used when downloading total traffic of multiple devices. At this point, DeviceId can be "-1".
     */
    public $DeviceList;

    /**
     * @var string Device group ID. If not specified, do not pass it. Used when downloading data by grouping.
     */
    public $GroupId;

    /**
     * @param string $DeviceId Device ID. If not specified, pass "-1".
     * @param integer $BeginTime Start time of statistics (seconds).
     * @param integer $EndTime Statistics end time (s).
     * @param integer $TimeGranularity Aggregation granularity:
Hourly statistics
2: Daily statistics
     * @param string $AccessRegion Access region. Value ranges from 'MC' to 'AM'. MC=Chinese mainland AP=Asia Pacific EU=Europe AM=Americas. Leave it blank to represent all regions.
     * @param integer $GatewayType Gateway type. 0: public cloud gateway; 1: private gateway. Default is 0 if not specified.
     * @param array $DeviceList Device ID list. Up to 10 devices. Used when downloading total traffic of multiple devices. At this point, DeviceId can be "-1".
     * @param string $GroupId Device group ID. If not specified, do not pass it. Used when downloading data by grouping.
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

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}
