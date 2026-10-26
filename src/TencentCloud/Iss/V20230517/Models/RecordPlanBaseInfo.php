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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Basic information of the real-time cloud migration plan
 *
 * @method string getPlanId() Obtain Cloud migration plan ID
 * @method void setPlanId(string $PlanId) Set Cloud migration plan ID
 * @method string getPlanName() Obtain Cloud migration plan name
 * @method void setPlanName(string $PlanName) Set Cloud migration plan name
 * @method string getTemplateId() Obtain Cloud template ID
 * @method void setTemplateId(string $TemplateId) Set Cloud template ID
 * @method string getDescribe() Obtain Cloud migration plan description
 * @method void setDescribe(string $Describe) Set Cloud migration plan description
 * @method string getStreamType() Obtain Stream type. default: default stream type of the device. main: main stream. sub: substream. Other stream types can be customized based on the device capacity.
 * @method void setStreamType(string $StreamType) Set Stream type. default: default stream type of the device. main: main stream. sub: substream. Other stream types can be customized based on the device capacity.
 * @method LifeCycleData getLifeCycle() Obtain Cloud file lifecycle
 * @method void setLifeCycle(LifeCycleData $LifeCycle) Set Cloud file lifecycle
 * @method integer getStatus() Obtain Recording schedule status. 1: In normal use. 0: Deleting, cannot be used.
 * @method void setStatus(integer $Status) Set Recording schedule status. 1: In normal use. 0: Deleting, cannot be used.
 * @method integer getChannelCount() Obtain Total number of channels
 * @method void setChannelCount(integer $ChannelCount) Set Total number of channels
 * @method integer getRepairMode() Obtain Video recording supplement mode (0: not enabled, 1: enabled)
 * @method void setRepairMode(integer $RepairMode) Set Video recording supplement mode (0: not enabled, 1: enabled)
 */
class RecordPlanBaseInfo extends AbstractModel
{
    /**
     * @var string Cloud migration plan ID
     */
    public $PlanId;

    /**
     * @var string Cloud migration plan name
     */
    public $PlanName;

    /**
     * @var string Cloud template ID
     */
    public $TemplateId;

    /**
     * @var string Cloud migration plan description
     */
    public $Describe;

    /**
     * @var string Stream type. default: default stream type of the device. main: main stream. sub: substream. Other stream types can be customized based on the device capacity.
     */
    public $StreamType;

    /**
     * @var LifeCycleData Cloud file lifecycle
     */
    public $LifeCycle;

    /**
     * @var integer Recording schedule status. 1: In normal use. 0: Deleting, cannot be used.
     */
    public $Status;

    /**
     * @var integer Total number of channels
     */
    public $ChannelCount;

    /**
     * @var integer Video recording supplement mode (0: not enabled, 1: enabled)
     */
    public $RepairMode;

    /**
     * @param string $PlanId Cloud migration plan ID
     * @param string $PlanName Cloud migration plan name
     * @param string $TemplateId Cloud template ID
     * @param string $Describe Cloud migration plan description
     * @param string $StreamType Stream type. default: default stream type of the device. main: main stream. sub: substream. Other stream types can be customized based on the device capacity.
     * @param LifeCycleData $LifeCycle Cloud file lifecycle
     * @param integer $Status Recording schedule status. 1: In normal use. 0: Deleting, cannot be used.
     * @param integer $ChannelCount Total number of channels
     * @param integer $RepairMode Video recording supplement mode (0: not enabled, 1: enabled)
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
        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("PlanName",$param) and $param["PlanName"] !== null) {
            $this->PlanName = $param["PlanName"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }

        if (array_key_exists("StreamType",$param) and $param["StreamType"] !== null) {
            $this->StreamType = $param["StreamType"];
        }

        if (array_key_exists("LifeCycle",$param) and $param["LifeCycle"] !== null) {
            $this->LifeCycle = new LifeCycleData();
            $this->LifeCycle->deserialize($param["LifeCycle"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ChannelCount",$param) and $param["ChannelCount"] !== null) {
            $this->ChannelCount = $param["ChannelCount"];
        }

        if (array_key_exists("RepairMode",$param) and $param["RepairMode"] !== null) {
            $this->RepairMode = $param["RepairMode"];
        }
    }
}
