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
 * GetStatisticDataByName request structure.
 *
 * @method string getDeviceName() Obtain <p>Device name. If no device is specified, you can pass "-1"</p>
 * @method void setDeviceName(string $DeviceName) Set <p>Device name. If no device is specified, you can pass "-1"</p>
 * @method integer getBeginTime() Obtain <p>Start time of statistics, unit: s</p>
 * @method void setBeginTime(integer $BeginTime) Set <p>Start time of statistics, unit: s</p>
 * @method integer getEndTime() Obtain <p>Statistics end time, unit: s</p>
 * @method void setEndTime(integer $EndTime) Set <p>Statistics end time, unit: s</p>
 * @method integer getTimeGranularity() Obtain <p>Time granularity</p><p>Enumeration values:</p><ul><li>1: hourly statistics</li><li>2: daily statistics</li><li>3: per minute</li><li>4: every 5 minutes</li></ul>
 * @method void setTimeGranularity(integer $TimeGranularity) Set <p>Time granularity</p><p>Enumeration values:</p><ul><li>1: hourly statistics</li><li>2: daily statistics</li><li>3: per minute</li><li>4: every 5 minutes</li></ul>
 * @method string getAccessRegion() Obtain <p>Access region. Value range: ['MC','AP','EU','AM'] MC=Chinese mainland AP=Asia Pacific EU=Europe AM=Americas. If not specified, it represents all regions.</p>
 * @method void setAccessRegion(string $AccessRegion) Set <p>Access region. Value range: ['MC','AP','EU','AM'] MC=Chinese mainland AP=Asia Pacific EU=Europe AM=Americas. If not specified, it represents all regions.</p>
 * @method integer getGatewayType() Obtain <p>Gateway type. 0: public cloud gateway; 1: private gateway. Defaults to 0 if not passed.</p>
 * @method void setGatewayType(integer $GatewayType) Set <p>Gateway type. 0: public cloud gateway; 1: private gateway. Defaults to 0 if not passed.</p>
 * @method array getDeviceList() Obtain <p>Device name list, up to 10 devices. Used when downloading traffic for multiple devices. At this point, DeviceName can be set to "-1"</p>
 * @method void setDeviceList(array $DeviceList) Set <p>Device name list, up to 10 devices. Used when downloading traffic for multiple devices. At this point, DeviceName can be set to "-1"</p>
 * @method string getGroupId() Obtain <p>Device group ID. Do not pass it if no group is specified. Used when downloading data by group</p>
 * @method void setGroupId(string $GroupId) Set <p>Device group ID. Do not pass it if no group is specified. Used when downloading data by group</p>
 * @method string getMpApplicationId() Obtain <p>Application ID. If not specified, leave it blank. Used when downloading data by application</p>
 * @method void setMpApplicationId(string $MpApplicationId) Set <p>Application ID. If not specified, leave it blank. Used when downloading data by application</p>
 */
class GetStatisticDataByNameRequest extends AbstractModel
{
    /**
     * @var string <p>Device name. If no device is specified, you can pass "-1"</p>
     */
    public $DeviceName;

    /**
     * @var integer <p>Start time of statistics, unit: s</p>
     */
    public $BeginTime;

    /**
     * @var integer <p>Statistics end time, unit: s</p>
     */
    public $EndTime;

    /**
     * @var integer <p>Time granularity</p><p>Enumeration values:</p><ul><li>1: hourly statistics</li><li>2: daily statistics</li><li>3: per minute</li><li>4: every 5 minutes</li></ul>
     */
    public $TimeGranularity;

    /**
     * @var string <p>Access region. Value range: ['MC','AP','EU','AM'] MC=Chinese mainland AP=Asia Pacific EU=Europe AM=Americas. If not specified, it represents all regions.</p>
     */
    public $AccessRegion;

    /**
     * @var integer <p>Gateway type. 0: public cloud gateway; 1: private gateway. Defaults to 0 if not passed.</p>
     */
    public $GatewayType;

    /**
     * @var array <p>Device name list, up to 10 devices. Used when downloading traffic for multiple devices. At this point, DeviceName can be set to "-1"</p>
     */
    public $DeviceList;

    /**
     * @var string <p>Device group ID. Do not pass it if no group is specified. Used when downloading data by group</p>
     */
    public $GroupId;

    /**
     * @var string <p>Application ID. If not specified, leave it blank. Used when downloading data by application</p>
     */
    public $MpApplicationId;

    /**
     * @param string $DeviceName <p>Device name. If no device is specified, you can pass "-1"</p>
     * @param integer $BeginTime <p>Start time of statistics, unit: s</p>
     * @param integer $EndTime <p>Statistics end time, unit: s</p>
     * @param integer $TimeGranularity <p>Time granularity</p><p>Enumeration values:</p><ul><li>1: hourly statistics</li><li>2: daily statistics</li><li>3: per minute</li><li>4: every 5 minutes</li></ul>
     * @param string $AccessRegion <p>Access region. Value range: ['MC','AP','EU','AM'] MC=Chinese mainland AP=Asia Pacific EU=Europe AM=Americas. If not specified, it represents all regions.</p>
     * @param integer $GatewayType <p>Gateway type. 0: public cloud gateway; 1: private gateway. Defaults to 0 if not passed.</p>
     * @param array $DeviceList <p>Device name list, up to 10 devices. Used when downloading traffic for multiple devices. At this point, DeviceName can be set to "-1"</p>
     * @param string $GroupId <p>Device group ID. Do not pass it if no group is specified. Used when downloading data by group</p>
     * @param string $MpApplicationId <p>Application ID. If not specified, leave it blank. Used when downloading data by application</p>
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
        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
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

        if (array_key_exists("MpApplicationId",$param) and $param["MpApplicationId"] !== null) {
            $this->MpApplicationId = $param["MpApplicationId"];
        }
    }
}
