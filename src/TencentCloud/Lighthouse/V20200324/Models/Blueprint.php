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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Image information.
 *
 * @method string getBlueprintId() Obtain Image ID, which is the unique identifier of `Blueprint`.
 * @method void setBlueprintId(string $BlueprintId) Set Image ID, which is the unique identifier of `Blueprint`.
 * @method string getDisplayTitle() Obtain Image title to be displayed.
 * @method void setDisplayTitle(string $DisplayTitle) Set Image title to be displayed.
 * @method string getDisplayVersion() Obtain Image version to be displayed.
 * @method void setDisplayVersion(string $DisplayVersion) Set Image version to be displayed.
 * @method string getDescription() Obtain Image description information.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Image description information.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getOsName() Obtain OS name.
 * @method void setOsName(string $OsName) Set OS name.
 * @method string getPlatform() Obtain OS type.
 * @method void setPlatform(string $Platform) Set OS type.
 * @method string getPlatformType() Obtain OS type, such as LINUX_UNIX and WINDOWS.
 * @method void setPlatformType(string $PlatformType) Set OS type, such as LINUX_UNIX and WINDOWS.
 * @method string getBlueprintType() Obtain Image type, such as APP_OS, PURE_OS, and PRIVATE.
 * @method void setBlueprintType(string $BlueprintType) Set Image type, such as APP_OS, PURE_OS, and PRIVATE.
 * @method string getImageUrl() Obtain Image picture URL.
 * @method void setImageUrl(string $ImageUrl) Set Image picture URL.
 * @method integer getRequiredSystemDiskSize() Obtain System disk size required by image in GB.
 * @method void setRequiredSystemDiskSize(integer $RequiredSystemDiskSize) Set System disk size required by image in GB.
 * @method string getBlueprintState() Obtain Image status.
 * @method void setBlueprintState(string $BlueprintState) Set Image status.
 * @method string getCreatedTime() Obtain Creation time according to ISO 8601 standard. UTC time is used. 
Format: YYYY-MM-DDThh:mm:ssZ.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time according to ISO 8601 standard. UTC time is used. 
Format: YYYY-MM-DDThh:mm:ssZ.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getBlueprintName() Obtain Image name.
 * @method void setBlueprintName(string $BlueprintName) Set Image name.
 * @method boolean getSupportAutomationTools() Obtain Whether the image supports automation tools.
 * @method void setSupportAutomationTools(boolean $SupportAutomationTools) Set Whether the image supports automation tools.
 * @method integer getRequiredMemorySize() Obtain Memory size required by image in GB.
 * @method void setRequiredMemorySize(integer $RequiredMemorySize) Set Memory size required by image in GB.
 * @method string getImageId() Obtain ID of the Lighthouse image shared from a CVM image
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setImageId(string $ImageId) Set ID of the Lighthouse image shared from a CVM image
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getCommunityUrl() Obtain URL of official website of the open-source project
 * @method void setCommunityUrl(string $CommunityUrl) Set URL of official website of the open-source project
 * @method string getGuideUrl() Obtain Guide documentation URL
 * @method void setGuideUrl(string $GuideUrl) Set Guide documentation URL
 * @method array getSceneIdSet() Obtain Array of IDs of scenes associated with an image
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setSceneIdSet(array $SceneIdSet) Set Array of IDs of scenes associated with an image
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getDockerVersion() Obtain Docker version.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setDockerVersion(string $DockerVersion) Set Docker version.
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class Blueprint extends AbstractModel
{
    /**
     * @var string Image ID, which is the unique identifier of `Blueprint`.
     */
    public $BlueprintId;

    /**
     * @var string Image title to be displayed.
     */
    public $DisplayTitle;

    /**
     * @var string Image version to be displayed.
     */
    public $DisplayVersion;

    /**
     * @var string Image description information.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string OS name.
     */
    public $OsName;

    /**
     * @var string OS type.
     */
    public $Platform;

    /**
     * @var string OS type, such as LINUX_UNIX and WINDOWS.
     */
    public $PlatformType;

    /**
     * @var string Image type, such as APP_OS, PURE_OS, and PRIVATE.
     */
    public $BlueprintType;

    /**
     * @var string Image picture URL.
     */
    public $ImageUrl;

    /**
     * @var integer System disk size required by image in GB.
     */
    public $RequiredSystemDiskSize;

    /**
     * @var string Image status.
     */
    public $BlueprintState;

    /**
     * @var string Creation time according to ISO 8601 standard. UTC time is used. 
Format: YYYY-MM-DDThh:mm:ssZ.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedTime;

    /**
     * @var string Image name.
     */
    public $BlueprintName;

    /**
     * @var boolean Whether the image supports automation tools.
     */
    public $SupportAutomationTools;

    /**
     * @var integer Memory size required by image in GB.
     */
    public $RequiredMemorySize;

    /**
     * @var string ID of the Lighthouse image shared from a CVM image
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ImageId;

    /**
     * @var string URL of official website of the open-source project
     */
    public $CommunityUrl;

    /**
     * @var string Guide documentation URL
     */
    public $GuideUrl;

    /**
     * @var array Array of IDs of scenes associated with an image
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $SceneIdSet;

    /**
     * @var string Docker version.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $DockerVersion;

    /**
     * @param string $BlueprintId Image ID, which is the unique identifier of `Blueprint`.
     * @param string $DisplayTitle Image title to be displayed.
     * @param string $DisplayVersion Image version to be displayed.
     * @param string $Description Image description information.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $OsName OS name.
     * @param string $Platform OS type.
     * @param string $PlatformType OS type, such as LINUX_UNIX and WINDOWS.
     * @param string $BlueprintType Image type, such as APP_OS, PURE_OS, and PRIVATE.
     * @param string $ImageUrl Image picture URL.
     * @param integer $RequiredSystemDiskSize System disk size required by image in GB.
     * @param string $BlueprintState Image status.
     * @param string $CreatedTime Creation time according to ISO 8601 standard. UTC time is used. 
Format: YYYY-MM-DDThh:mm:ssZ.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $BlueprintName Image name.
     * @param boolean $SupportAutomationTools Whether the image supports automation tools.
     * @param integer $RequiredMemorySize Memory size required by image in GB.
     * @param string $ImageId ID of the Lighthouse image shared from a CVM image
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $CommunityUrl URL of official website of the open-source project
     * @param string $GuideUrl Guide documentation URL
     * @param array $SceneIdSet Array of IDs of scenes associated with an image
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $DockerVersion Docker version.
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
        if (array_key_exists("BlueprintId",$param) and $param["BlueprintId"] !== null) {
            $this->BlueprintId = $param["BlueprintId"];
        }

        if (array_key_exists("DisplayTitle",$param) and $param["DisplayTitle"] !== null) {
            $this->DisplayTitle = $param["DisplayTitle"];
        }

        if (array_key_exists("DisplayVersion",$param) and $param["DisplayVersion"] !== null) {
            $this->DisplayVersion = $param["DisplayVersion"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("PlatformType",$param) and $param["PlatformType"] !== null) {
            $this->PlatformType = $param["PlatformType"];
        }

        if (array_key_exists("BlueprintType",$param) and $param["BlueprintType"] !== null) {
            $this->BlueprintType = $param["BlueprintType"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("RequiredSystemDiskSize",$param) and $param["RequiredSystemDiskSize"] !== null) {
            $this->RequiredSystemDiskSize = $param["RequiredSystemDiskSize"];
        }

        if (array_key_exists("BlueprintState",$param) and $param["BlueprintState"] !== null) {
            $this->BlueprintState = $param["BlueprintState"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("BlueprintName",$param) and $param["BlueprintName"] !== null) {
            $this->BlueprintName = $param["BlueprintName"];
        }

        if (array_key_exists("SupportAutomationTools",$param) and $param["SupportAutomationTools"] !== null) {
            $this->SupportAutomationTools = $param["SupportAutomationTools"];
        }

        if (array_key_exists("RequiredMemorySize",$param) and $param["RequiredMemorySize"] !== null) {
            $this->RequiredMemorySize = $param["RequiredMemorySize"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("CommunityUrl",$param) and $param["CommunityUrl"] !== null) {
            $this->CommunityUrl = $param["CommunityUrl"];
        }

        if (array_key_exists("GuideUrl",$param) and $param["GuideUrl"] !== null) {
            $this->GuideUrl = $param["GuideUrl"];
        }

        if (array_key_exists("SceneIdSet",$param) and $param["SceneIdSet"] !== null) {
            $this->SceneIdSet = $param["SceneIdSet"];
        }

        if (array_key_exists("DockerVersion",$param) and $param["DockerVersion"] !== null) {
            $this->DockerVersion = $param["DockerVersion"];
        }
    }
}
