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
 * Set of instance launch template versions.
 *
 * @method integer getLaunchTemplateVersion() Obtain Instance launch template version number.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setLaunchTemplateVersion(integer $LaunchTemplateVersion) Set Instance launch template version number.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method LaunchTemplateVersionData getLaunchTemplateVersionData() Obtain Details of instance launch template versions.
 * @method void setLaunchTemplateVersionData(LaunchTemplateVersionData $LaunchTemplateVersionData) Set Details of instance launch template versions.
 * @method string getCreationTime() Obtain Creation time of the instance launch template version.
 * @method void setCreationTime(string $CreationTime) Set Creation time of the instance launch template version.
 * @method string getLaunchTemplateId() Obtain Instance launch template ID.
 * @method void setLaunchTemplateId(string $LaunchTemplateId) Set Instance launch template ID.
 * @method boolean getIsDefaultVersion() Obtain Specifies whether it’s the default launch template version.
 * @method void setIsDefaultVersion(boolean $IsDefaultVersion) Set Specifies whether it’s the default launch template version.
 * @method string getLaunchTemplateVersionDescription() Obtain Information of instance launch template version description.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setLaunchTemplateVersionDescription(string $LaunchTemplateVersionDescription) Set Information of instance launch template version description.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getCreatedBy() Obtain Creator account
 * @method void setCreatedBy(string $CreatedBy) Set Creator account
 */
class LaunchTemplateVersionInfo extends AbstractModel
{
    /**
     * @var integer Instance launch template version number.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $LaunchTemplateVersion;

    /**
     * @var LaunchTemplateVersionData Details of instance launch template versions.
     */
    public $LaunchTemplateVersionData;

    /**
     * @var string Creation time of the instance launch template version.
     */
    public $CreationTime;

    /**
     * @var string Instance launch template ID.
     */
    public $LaunchTemplateId;

    /**
     * @var boolean Specifies whether it’s the default launch template version.
     */
    public $IsDefaultVersion;

    /**
     * @var string Information of instance launch template version description.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $LaunchTemplateVersionDescription;

    /**
     * @var string Creator account
     */
    public $CreatedBy;

    /**
     * @param integer $LaunchTemplateVersion Instance launch template version number.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param LaunchTemplateVersionData $LaunchTemplateVersionData Details of instance launch template versions.
     * @param string $CreationTime Creation time of the instance launch template version.
     * @param string $LaunchTemplateId Instance launch template ID.
     * @param boolean $IsDefaultVersion Specifies whether it’s the default launch template version.
     * @param string $LaunchTemplateVersionDescription Information of instance launch template version description.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $CreatedBy Creator account
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
        if (array_key_exists("LaunchTemplateVersion",$param) and $param["LaunchTemplateVersion"] !== null) {
            $this->LaunchTemplateVersion = $param["LaunchTemplateVersion"];
        }

        if (array_key_exists("LaunchTemplateVersionData",$param) and $param["LaunchTemplateVersionData"] !== null) {
            $this->LaunchTemplateVersionData = new LaunchTemplateVersionData();
            $this->LaunchTemplateVersionData->deserialize($param["LaunchTemplateVersionData"]);
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("LaunchTemplateId",$param) and $param["LaunchTemplateId"] !== null) {
            $this->LaunchTemplateId = $param["LaunchTemplateId"];
        }

        if (array_key_exists("IsDefaultVersion",$param) and $param["IsDefaultVersion"] !== null) {
            $this->IsDefaultVersion = $param["IsDefaultVersion"];
        }

        if (array_key_exists("LaunchTemplateVersionDescription",$param) and $param["LaunchTemplateVersionDescription"] !== null) {
            $this->LaunchTemplateVersionDescription = $param["LaunchTemplateVersionDescription"];
        }

        if (array_key_exists("CreatedBy",$param) and $param["CreatedBy"] !== null) {
            $this->CreatedBy = $param["CreatedBy"];
        }
    }
}
