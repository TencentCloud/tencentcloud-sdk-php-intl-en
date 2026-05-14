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
 * GetFlowStatisticByGroup request structure.
 *
 * @method string getGroupId() Obtain group ID
 * @method void setGroupId(string $GroupId) Set group ID
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
 * @method string getMpApplicationId() Obtain Application ID. No need to use when querying group traffic. When querying application traffic, this field is the application ID. Fill "-1" for GroupId.
 * @method void setMpApplicationId(string $MpApplicationId) Set Application ID. No need to use when querying group traffic. When querying application traffic, this field is the application ID. Fill "-1" for GroupId.
 */
class GetFlowStatisticByGroupRequest extends AbstractModel
{
    /**
     * @var string group ID
     */
    public $GroupId;

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
     * @var string Application ID. No need to use when querying group traffic. When querying application traffic, this field is the application ID. Fill "-1" for GroupId.
     */
    public $MpApplicationId;

    /**
     * @param string $GroupId group ID
     * @param integer $BeginTime Search start time
     * @param integer $EndTime end time
     * @param integer $Type Traffic type (1: uplink traffic, 2: downstream traffic, 3: sum of upstream and downstream)
     * @param integer $TimeGranularity Time granularity (1: hourly statistics, 2: daily statistics)
     * @param string $AccessRegion Access region. Value ranges from 'MC' to 'AM'. MC=Chinese mainland AP=Asia Pacific EU=Europe AM=Americas. Leave it blank to represent all regions.
     * @param integer $GatewayType Gateway type. 0: public cloud gateway; 1: private gateway. Default is 0 if not specified.
     * @param string $MpApplicationId Application ID. No need to use when querying group traffic. When querying application traffic, this field is the application ID. Fill "-1" for GroupId.
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
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

        if (array_key_exists("MpApplicationId",$param) and $param["MpApplicationId"] !== null) {
            $this->MpApplicationId = $param["MpApplicationId"];
        }
    }
}
