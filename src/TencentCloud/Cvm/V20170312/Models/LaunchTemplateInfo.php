<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of instance launch template.
 *
 * @method integer getLatestVersionNumber() Obtain Instance launch template version number.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setLatestVersionNumber(integer $LatestVersionNumber) Set Instance launch template version number.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getLaunchTemplateId() Obtain Instance launch template ID.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setLaunchTemplateId(string $LaunchTemplateId) Set Instance launch template ID.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getLaunchTemplateName() Obtain Instance launch template name.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setLaunchTemplateName(string $LaunchTemplateName) Set Instance launch template name.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getDefaultVersionNumber() Obtain Default instance launch template version number.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setDefaultVersionNumber(integer $DefaultVersionNumber) Set Default instance launch template version number.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getLaunchTemplateVersionCount() Obtain Total number of versions that the instance launch template contains.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setLaunchTemplateVersionCount(integer $LaunchTemplateVersionCount) Set Total number of versions that the instance launch template contains.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getCreatedBy() Obtain UIN of the user who created the template.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setCreatedBy(string $CreatedBy) Set UIN of the user who created the template.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getCreationTime() Obtain Creation time of the template.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setCreationTime(string $CreationTime) Set Creation time of the template.
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class LaunchTemplateInfo extends AbstractModel
{
    /**
     * @var integer Instance launch template version number.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $LatestVersionNumber;

    /**
     * @var string Instance launch template ID.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $LaunchTemplateId;

    /**
     * @var string Instance launch template name.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $LaunchTemplateName;

    /**
     * @var integer Default instance launch template version number.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $DefaultVersionNumber;

    /**
     * @var integer Total number of versions that the instance launch template contains.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $LaunchTemplateVersionCount;

    /**
     * @var string UIN of the user who created the template.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $CreatedBy;

    /**
     * @var string Creation time of the template.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $CreationTime;

    /**
     * @param integer $LatestVersionNumber Instance launch template version number.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $LaunchTemplateId Instance launch template ID.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $LaunchTemplateName Instance launch template name.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $DefaultVersionNumber Default instance launch template version number.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $LaunchTemplateVersionCount Total number of versions that the instance launch template contains.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $CreatedBy UIN of the user who created the template.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $CreationTime Creation time of the template.
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("LatestVersionNumber",$param) and $param["LatestVersionNumber"] !== null) {
            $this->LatestVersionNumber = $param["LatestVersionNumber"];
        }

        if (array_key_exists("LaunchTemplateId",$param) and $param["LaunchTemplateId"] !== null) {
            $this->LaunchTemplateId = $param["LaunchTemplateId"];
        }

        if (array_key_exists("LaunchTemplateName",$param) and $param["LaunchTemplateName"] !== null) {
            $this->LaunchTemplateName = $param["LaunchTemplateName"];
        }

        if (array_key_exists("DefaultVersionNumber",$param) and $param["DefaultVersionNumber"] !== null) {
            $this->DefaultVersionNumber = $param["DefaultVersionNumber"];
        }

        if (array_key_exists("LaunchTemplateVersionCount",$param) and $param["LaunchTemplateVersionCount"] !== null) {
            $this->LaunchTemplateVersionCount = $param["LaunchTemplateVersionCount"];
        }

        if (array_key_exists("CreatedBy",$param) and $param["CreatedBy"] !== null) {
            $this->CreatedBy = $param["CreatedBy"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }
    }
}
