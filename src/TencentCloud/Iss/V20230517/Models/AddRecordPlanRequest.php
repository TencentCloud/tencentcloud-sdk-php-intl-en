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
 * AddRecordPlan request structure.
 *
 * @method string getPlanName() Obtain Real-time cloud migration plan name. It supports Chinese, English, digits, _, and -, with a length not exceeding 32 characters. The plan name must be globally unique and cannot be empty or repeated.
 * @method void setPlanName(string $PlanName) Set Real-time cloud migration plan name. It supports Chinese, English, digits, _, and -, with a length not exceeding 32 characters. The plan name must be globally unique and cannot be empty or repeated.
 * @method string getTemplateId() Obtain Real-time cloud template ID
 * @method void setTemplateId(string $TemplateId) Set Real-time cloud template ID
 * @method LifeCycleData getLifeCycle() Obtain Lifecycle
 * @method void setLifeCycle(LifeCycleData $LifeCycle) Set Lifecycle
 * @method string getDescribe() Obtain Cloud plan description. Supports only Chinese, English, digits, _, and -. Length not exceeding 128 characters.
 * @method void setDescribe(string $Describe) Set Cloud plan description. Supports only Chinese, English, digits, _, and -. Length not exceeding 128 characters.
 * @method string getStreamType() Obtain Stream type. default: The stream type is not specified, and the default push type of the device is used. main: Main stream. sub: Substream. Other values are customized based on the device capacity. If not specified, the default type is used. The length cannot exceed 32 bytes.
 * @method void setStreamType(string $StreamType) Set Stream type. default: The stream type is not specified, and the default push type of the device is used. main: Main stream. sub: Substream. Other values are customized based on the device capacity. If not specified, the default type is used. The length cannot exceed 32 bytes.
 * @method array getChannels() Obtain Channel information of the device to which video recording is added. You can add no more than 5000 channels only once, including the number of channels under the organizational unit directory.
 * @method void setChannels(array $Channels) Set Channel information of the device to which video recording is added. You can add no more than 5000 channels only once, including the number of channels under the organizational unit directory.
 * @method array getOrganizationId() Obtain Add all device channels under the organization. Json array, can be empty. The total number of channels cannot exceed 5,000 (including the number of Channel fields).
 * @method void setOrganizationId(array $OrganizationId) Set Add all device channels under the organization. Json array, can be empty. The total number of channels cannot exceed 5,000 (including the number of Channel fields).
 * @method integer getRepairMode() Obtain Video recording supplement mode (0: disabled, 1: enabled). If this field is not specified, it is not enabled by default.
 * @method void setRepairMode(integer $RepairMode) Set Video recording supplement mode (0: disabled, 1: enabled). If this field is not specified, it is not enabled by default.
 */
class AddRecordPlanRequest extends AbstractModel
{
    /**
     * @var string Real-time cloud migration plan name. It supports Chinese, English, digits, _, and -, with a length not exceeding 32 characters. The plan name must be globally unique and cannot be empty or repeated.
     */
    public $PlanName;

    /**
     * @var string Real-time cloud template ID
     */
    public $TemplateId;

    /**
     * @var LifeCycleData Lifecycle
     */
    public $LifeCycle;

    /**
     * @var string Cloud plan description. Supports only Chinese, English, digits, _, and -. Length not exceeding 128 characters.
     */
    public $Describe;

    /**
     * @var string Stream type. default: The stream type is not specified, and the default push type of the device is used. main: Main stream. sub: Substream. Other values are customized based on the device capacity. If not specified, the default type is used. The length cannot exceed 32 bytes.
     */
    public $StreamType;

    /**
     * @var array Channel information of the device to which video recording is added. You can add no more than 5000 channels only once, including the number of channels under the organizational unit directory.
     */
    public $Channels;

    /**
     * @var array Add all device channels under the organization. Json array, can be empty. The total number of channels cannot exceed 5,000 (including the number of Channel fields).
     */
    public $OrganizationId;

    /**
     * @var integer Video recording supplement mode (0: disabled, 1: enabled). If this field is not specified, it is not enabled by default.
     */
    public $RepairMode;

    /**
     * @param string $PlanName Real-time cloud migration plan name. It supports Chinese, English, digits, _, and -, with a length not exceeding 32 characters. The plan name must be globally unique and cannot be empty or repeated.
     * @param string $TemplateId Real-time cloud template ID
     * @param LifeCycleData $LifeCycle Lifecycle
     * @param string $Describe Cloud plan description. Supports only Chinese, English, digits, _, and -. Length not exceeding 128 characters.
     * @param string $StreamType Stream type. default: The stream type is not specified, and the default push type of the device is used. main: Main stream. sub: Substream. Other values are customized based on the device capacity. If not specified, the default type is used. The length cannot exceed 32 bytes.
     * @param array $Channels Channel information of the device to which video recording is added. You can add no more than 5000 channels only once, including the number of channels under the organizational unit directory.
     * @param array $OrganizationId Add all device channels under the organization. Json array, can be empty. The total number of channels cannot exceed 5,000 (including the number of Channel fields).
     * @param integer $RepairMode Video recording supplement mode (0: disabled, 1: enabled). If this field is not specified, it is not enabled by default.
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
        if (array_key_exists("PlanName",$param) and $param["PlanName"] !== null) {
            $this->PlanName = $param["PlanName"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("LifeCycle",$param) and $param["LifeCycle"] !== null) {
            $this->LifeCycle = new LifeCycleData();
            $this->LifeCycle->deserialize($param["LifeCycle"]);
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }

        if (array_key_exists("StreamType",$param) and $param["StreamType"] !== null) {
            $this->StreamType = $param["StreamType"];
        }

        if (array_key_exists("Channels",$param) and $param["Channels"] !== null) {
            $this->Channels = [];
            foreach ($param["Channels"] as $key => $value){
                $obj = new ChannelInfo();
                $obj->deserialize($value);
                array_push($this->Channels, $obj);
            }
        }

        if (array_key_exists("OrganizationId",$param) and $param["OrganizationId"] !== null) {
            $this->OrganizationId = $param["OrganizationId"];
        }

        if (array_key_exists("RepairMode",$param) and $param["RepairMode"] !== null) {
            $this->RepairMode = $param["RepairMode"];
        }
    }
}
