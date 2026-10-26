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
 * Modify the data of the real-time Cloud Recording plan
 *
 * @method string getPlanName() Obtain Cloud migration plan name, supporting only Chinese, English, digits, _, -, with a length not exceeding 32 characters. The plan name must be globally unique and cannot be empty or duplicated. This field is not required if the name is not modified.
 * @method void setPlanName(string $PlanName) Set Cloud migration plan name, supporting only Chinese, English, digits, _, -, with a length not exceeding 32 characters. The plan name must be globally unique and cannot be empty or duplicated. This field is not required if the name is not modified.
 * @method string getTemplateId() Obtain Cloud template ID. This field is not required if the template ID is not modified.
 * @method void setTemplateId(string $TemplateId) Set Cloud template ID. This field is not required if the template ID is not modified.
 * @method string getDescribe() Obtain Usage plan description. It can contain only Chinese characters, English letters, digits, underscores (_), and hyphens (-), with a length not exceeding 128 characters. This field is not required if you do not modify the description.
 * @method void setDescribe(string $Describe) Set Usage plan description. It can contain only Chinese characters, English letters, digits, underscores (_), and hyphens (-), with a length not exceeding 128 characters. This field is not required if you do not modify the description.
 * @method string getStreamType() Obtain Stream type. default: The stream type is not specified, and the default push type of the device is used. main: main stream. sub: substream. Other: custom based on the device capability set. The length cannot exceed 32 bytes.
 * @method void setStreamType(string $StreamType) Set Stream type. default: The stream type is not specified, and the default push type of the device is used. main: main stream. sub: substream. Other: custom based on the device capability set. The length cannot exceed 32 bytes.
 * @method LifeCycleData getLifeCycle() Obtain Lifecycle, file lifecycle settings, the time when cold and hot storage of files is managed. This field is not required if lifecycle is not modified.
 * @method void setLifeCycle(LifeCycleData $LifeCycle) Set Lifecycle, file lifecycle settings, the time when cold and hot storage of files is managed. This field is not required if lifecycle is not modified.
 * @method array getAdd() Obtain Device channels to be added. Json array. This field is not required when no channels are added. The total number of channels added at once cannot exceed 5,000, including the number of channels under the organization directory.
 * @method void setAdd(array $Add) Set Device channels to be added. Json array. This field is not required when no channels are added. The total number of channels added at once cannot exceed 5,000, including the number of channels under the organization directory.
 * @method array getDel() Obtain Device channels to delete. Json array. The content is the IDs of the device channels to delete. This field is not required if no device channel is deleted.
 * @method void setDel(array $Del) Set Device channels to delete. Json array. The content is the IDs of the device channels to delete. This field is not required if no device channel is deleted.
 * @method array getOrganizationId() Obtain Organizational directory ID. Add all device channels under the organizational directory. Json array. Can be empty. And the total number of channels is no more than 5,000 (including the number of channels added in the Add field).
 * @method void setOrganizationId(array $OrganizationId) Set Organizational directory ID. Add all device channels under the organizational directory. Json array. Can be empty. And the total number of channels is no more than 5,000 (including the number of channels added in the Add field).
 * @method integer getRepairMode() Obtain Video recording supplement mode (0: not enabled, 1: enabled)
 * @method void setRepairMode(integer $RepairMode) Set Video recording supplement mode (0: not enabled, 1: enabled)
 */
class UpdateRecordPlanData extends AbstractModel
{
    /**
     * @var string Cloud migration plan name, supporting only Chinese, English, digits, _, -, with a length not exceeding 32 characters. The plan name must be globally unique and cannot be empty or duplicated. This field is not required if the name is not modified.
     */
    public $PlanName;

    /**
     * @var string Cloud template ID. This field is not required if the template ID is not modified.
     */
    public $TemplateId;

    /**
     * @var string Usage plan description. It can contain only Chinese characters, English letters, digits, underscores (_), and hyphens (-), with a length not exceeding 128 characters. This field is not required if you do not modify the description.
     */
    public $Describe;

    /**
     * @var string Stream type. default: The stream type is not specified, and the default push type of the device is used. main: main stream. sub: substream. Other: custom based on the device capability set. The length cannot exceed 32 bytes.
     */
    public $StreamType;

    /**
     * @var LifeCycleData Lifecycle, file lifecycle settings, the time when cold and hot storage of files is managed. This field is not required if lifecycle is not modified.
     */
    public $LifeCycle;

    /**
     * @var array Device channels to be added. Json array. This field is not required when no channels are added. The total number of channels added at once cannot exceed 5,000, including the number of channels under the organization directory.
     */
    public $Add;

    /**
     * @var array Device channels to delete. Json array. The content is the IDs of the device channels to delete. This field is not required if no device channel is deleted.
     */
    public $Del;

    /**
     * @var array Organizational directory ID. Add all device channels under the organizational directory. Json array. Can be empty. And the total number of channels is no more than 5,000 (including the number of channels added in the Add field).
     */
    public $OrganizationId;

    /**
     * @var integer Video recording supplement mode (0: not enabled, 1: enabled)
     */
    public $RepairMode;

    /**
     * @param string $PlanName Cloud migration plan name, supporting only Chinese, English, digits, _, -, with a length not exceeding 32 characters. The plan name must be globally unique and cannot be empty or duplicated. This field is not required if the name is not modified.
     * @param string $TemplateId Cloud template ID. This field is not required if the template ID is not modified.
     * @param string $Describe Usage plan description. It can contain only Chinese characters, English letters, digits, underscores (_), and hyphens (-), with a length not exceeding 128 characters. This field is not required if you do not modify the description.
     * @param string $StreamType Stream type. default: The stream type is not specified, and the default push type of the device is used. main: main stream. sub: substream. Other: custom based on the device capability set. The length cannot exceed 32 bytes.
     * @param LifeCycleData $LifeCycle Lifecycle, file lifecycle settings, the time when cold and hot storage of files is managed. This field is not required if lifecycle is not modified.
     * @param array $Add Device channels to be added. Json array. This field is not required when no channels are added. The total number of channels added at once cannot exceed 5,000, including the number of channels under the organization directory.
     * @param array $Del Device channels to delete. Json array. The content is the IDs of the device channels to delete. This field is not required if no device channel is deleted.
     * @param array $OrganizationId Organizational directory ID. Add all device channels under the organizational directory. Json array. Can be empty. And the total number of channels is no more than 5,000 (including the number of channels added in the Add field).
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

        if (array_key_exists("Add",$param) and $param["Add"] !== null) {
            $this->Add = [];
            foreach ($param["Add"] as $key => $value){
                $obj = new ChannelInfo();
                $obj->deserialize($value);
                array_push($this->Add, $obj);
            }
        }

        if (array_key_exists("Del",$param) and $param["Del"] !== null) {
            $this->Del = $param["Del"];
        }

        if (array_key_exists("OrganizationId",$param) and $param["OrganizationId"] !== null) {
            $this->OrganizationId = $param["OrganizationId"];
        }

        if (array_key_exists("RepairMode",$param) and $param["RepairMode"] !== null) {
            $this->RepairMode = $param["RepairMode"];
        }
    }
}
