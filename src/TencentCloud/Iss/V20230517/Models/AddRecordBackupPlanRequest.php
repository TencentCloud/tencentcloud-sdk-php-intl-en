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
 * AddRecordBackupPlan request structure.
 *
 * @method string getTemplateId() Obtain Recording template ID (template ID associated with the recording schedule, obtained from the ListRecordBackupTemplates API for querying the video cloud template list)
 * @method void setTemplateId(string $TemplateId) Set Recording template ID (template ID associated with the recording schedule, obtained from the ListRecordBackupTemplates API for querying the video cloud template list)
 * @method string getPlanName() Obtain Recording schedule name (supports Chinese, English, digits, _ and -. The length cannot exceed 32 characters. The plan name must be globally unique and cannot be empty or duplicated.)
 * @method void setPlanName(string $PlanName) Set Recording schedule name (supports Chinese, English, digits, _ and -. The length cannot exceed 32 characters. The plan name must be globally unique and cannot be empty or duplicated.)
 * @method string getDescribe() Obtain Video recording plan description (only supports Chinese, English, digits, _, -, length not exceeding 128 characters)
 * @method void setDescribe(string $Describe) Set Video recording plan description (only supports Chinese, English, digits, _, -, length not exceeding 128 characters)
 * @method LifeCycleData getLifeCycle() Obtain Lifecycle (video recording file lifecycle settings, the time when cold and hot storage is managed for files)
 * @method void setLifeCycle(LifeCycleData $LifeCycle) Set Lifecycle (video recording file lifecycle settings, the time when cold and hot storage is managed for files)
 * @method array getChannels() Obtain Channel and the device to which the channel belongs (channel information of the device to which a video recording is added. Add no more than 5,000 channels at a time, including the number of channels under the organizational unit directory).
 * @method void setChannels(array $Channels) Set Channel and the device to which the channel belongs (channel information of the device to which a video recording is added. Add no more than 5,000 channels at a time, including the number of channels under the organizational unit directory).
 * @method array getOrganizationId() Obtain Add all device channels under the organizational unit directory (Json array, can be empty, total number of channels no more than 5000, including the number of Channel fields)
 * @method void setOrganizationId(array $OrganizationId) Set Add all device channels under the organizational unit directory (Json array, can be empty, total number of channels no more than 5000, including the number of Channel fields)
 */
class AddRecordBackupPlanRequest extends AbstractModel
{
    /**
     * @var string Recording template ID (template ID associated with the recording schedule, obtained from the ListRecordBackupTemplates API for querying the video cloud template list)
     */
    public $TemplateId;

    /**
     * @var string Recording schedule name (supports Chinese, English, digits, _ and -. The length cannot exceed 32 characters. The plan name must be globally unique and cannot be empty or duplicated.)
     */
    public $PlanName;

    /**
     * @var string Video recording plan description (only supports Chinese, English, digits, _, -, length not exceeding 128 characters)
     */
    public $Describe;

    /**
     * @var LifeCycleData Lifecycle (video recording file lifecycle settings, the time when cold and hot storage is managed for files)
     */
    public $LifeCycle;

    /**
     * @var array Channel and the device to which the channel belongs (channel information of the device to which a video recording is added. Add no more than 5,000 channels at a time, including the number of channels under the organizational unit directory).
     */
    public $Channels;

    /**
     * @var array Add all device channels under the organizational unit directory (Json array, can be empty, total number of channels no more than 5000, including the number of Channel fields)
     */
    public $OrganizationId;

    /**
     * @param string $TemplateId Recording template ID (template ID associated with the recording schedule, obtained from the ListRecordBackupTemplates API for querying the video cloud template list)
     * @param string $PlanName Recording schedule name (supports Chinese, English, digits, _ and -. The length cannot exceed 32 characters. The plan name must be globally unique and cannot be empty or duplicated.)
     * @param string $Describe Video recording plan description (only supports Chinese, English, digits, _, -, length not exceeding 128 characters)
     * @param LifeCycleData $LifeCycle Lifecycle (video recording file lifecycle settings, the time when cold and hot storage is managed for files)
     * @param array $Channels Channel and the device to which the channel belongs (channel information of the device to which a video recording is added. Add no more than 5,000 channels at a time, including the number of channels under the organizational unit directory).
     * @param array $OrganizationId Add all device channels under the organizational unit directory (Json array, can be empty, total number of channels no more than 5000, including the number of Channel fields)
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("PlanName",$param) and $param["PlanName"] !== null) {
            $this->PlanName = $param["PlanName"];
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }

        if (array_key_exists("LifeCycle",$param) and $param["LifeCycle"] !== null) {
            $this->LifeCycle = new LifeCycleData();
            $this->LifeCycle->deserialize($param["LifeCycle"]);
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
    }
}
