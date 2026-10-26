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
 * Modify the data structure of the recording cloud migration plan
 *
 * @method string getPlanName() Obtain Recording cloud migration plan name (supports only Chinese, English, digits, _, and -, length not exceeding 32 characters. The plan name must be globally unique and cannot be empty or repeated. This field is not required if the name is not modified.)
 * @method void setPlanName(string $PlanName) Set Recording cloud migration plan name (supports only Chinese, English, digits, _, and -, length not exceeding 32 characters. The plan name must be globally unique and cannot be empty or repeated. This field is not required if the name is not modified.)
 * @method string getTemplateId() Obtain Recording template ID (obtain from the ListRecordBackupTemplates API for querying the video recording upload template list. This field is not required if the template ID is not modified)
 * @method void setTemplateId(string $TemplateId) Set Recording template ID (obtain from the ListRecordBackupTemplates API for querying the video recording upload template list. This field is not required if the template ID is not modified)
 * @method string getDescribe() Obtain Recording cloud migration plan description (only supports Chinese, English, numbers, _, -, length not exceeding 128 characters. This field is not required if the description is not modified)
 * @method void setDescribe(string $Describe) Set Recording cloud migration plan description (only supports Chinese, English, numbers, _, -, length not exceeding 128 characters. This field is not required if the description is not modified)
 * @method LifeCycleData getLifeCycle() Obtain Lifecycle (lifecycle settings for video recording files, managing the time when files are in cold or hot storage. This field is not required if you do not modify the lifecycle)
 * @method void setLifeCycle(LifeCycleData $LifeCycle) Set Lifecycle (lifecycle settings for video recording files, managing the time when files are in cold or hot storage. This field is not required if you do not modify the lifecycle)
 * @method array getAdd() Obtain Device channels to be added (Json array; not required when no channels are added; the total number of channels added at once cannot exceed 5000, including the number of channels under the organizational directory)
 * @method void setAdd(array $Add) Set Device channels to be added (Json array; not required when no channels are added; the total number of channels added at once cannot exceed 5000, including the number of channels under the organizational directory)
 * @method array getDel() Obtain Device channel to delete (Json array containing the IDs of device channels to delete. Not required if no device channel is deleted)
 * @method void setDel(array $Del) Set Device channel to delete (Json array containing the IDs of device channels to delete. Not required if no device channel is deleted)
 * @method array getOrganizationId() Obtain Add the channels of all devices under the organizational unit (Json array, can be empty, and the total number of channels no more than 5000, including the number of channels in the Add field)
 * @method void setOrganizationId(array $OrganizationId) Set Add the channels of all devices under the organizational unit (Json array, can be empty, and the total number of channels no more than 5000, including the number of channels in the Add field)
 */
class UpdateRecordBackupPlanModify extends AbstractModel
{
    /**
     * @var string Recording cloud migration plan name (supports only Chinese, English, digits, _, and -, length not exceeding 32 characters. The plan name must be globally unique and cannot be empty or repeated. This field is not required if the name is not modified.)
     */
    public $PlanName;

    /**
     * @var string Recording template ID (obtain from the ListRecordBackupTemplates API for querying the video recording upload template list. This field is not required if the template ID is not modified)
     */
    public $TemplateId;

    /**
     * @var string Recording cloud migration plan description (only supports Chinese, English, numbers, _, -, length not exceeding 128 characters. This field is not required if the description is not modified)
     */
    public $Describe;

    /**
     * @var LifeCycleData Lifecycle (lifecycle settings for video recording files, managing the time when files are in cold or hot storage. This field is not required if you do not modify the lifecycle)
     */
    public $LifeCycle;

    /**
     * @var array Device channels to be added (Json array; not required when no channels are added; the total number of channels added at once cannot exceed 5000, including the number of channels under the organizational directory)
     */
    public $Add;

    /**
     * @var array Device channel to delete (Json array containing the IDs of device channels to delete. Not required if no device channel is deleted)
     */
    public $Del;

    /**
     * @var array Add the channels of all devices under the organizational unit (Json array, can be empty, and the total number of channels no more than 5000, including the number of channels in the Add field)
     */
    public $OrganizationId;

    /**
     * @param string $PlanName Recording cloud migration plan name (supports only Chinese, English, digits, _, and -, length not exceeding 32 characters. The plan name must be globally unique and cannot be empty or repeated. This field is not required if the name is not modified.)
     * @param string $TemplateId Recording template ID (obtain from the ListRecordBackupTemplates API for querying the video recording upload template list. This field is not required if the template ID is not modified)
     * @param string $Describe Recording cloud migration plan description (only supports Chinese, English, numbers, _, -, length not exceeding 128 characters. This field is not required if the description is not modified)
     * @param LifeCycleData $LifeCycle Lifecycle (lifecycle settings for video recording files, managing the time when files are in cold or hot storage. This field is not required if you do not modify the lifecycle)
     * @param array $Add Device channels to be added (Json array; not required when no channels are added; the total number of channels added at once cannot exceed 5000, including the number of channels under the organizational directory)
     * @param array $Del Device channel to delete (Json array containing the IDs of device channels to delete. Not required if no device channel is deleted)
     * @param array $OrganizationId Add the channels of all devices under the organizational unit (Json array, can be empty, and the total number of channels no more than 5000, including the number of channels in the Add field)
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
    }
}
