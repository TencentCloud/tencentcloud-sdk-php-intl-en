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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Application information list.
 *
 * @method string getApplicationId() Obtain Application ID, which is globally unique.
 * @method void setApplicationId(string $ApplicationId) Set Application ID, which is globally unique.
 * @method string getDisplayName() Obtain Displayed application name, which can contain up to 64 characters and is the same as the application name by default.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDisplayName(string $DisplayName) Set Displayed application name, which can contain up to 64 characters and is the same as the application name by default.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedDate() Obtain Application creation time in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedDate(string $CreatedDate) Set Application creation time in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getLastModifiedDate() Obtain Last update time in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLastModifiedDate(string $LastModifiedDate) Set Last update time in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getAppStatus() Obtain Application status.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAppStatus(boolean $AppStatus) Set Application status.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getIcon() Obtain Application icon.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIcon(string $Icon) Set Application icon.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationType() Obtain Application type.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationType(string $ApplicationType) Set Application type.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getClientId() Obtain Client ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setClientId(string $ClientId) Set Client ID.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class ApplicationInformation extends AbstractModel
{
    /**
     * @var string Application ID, which is globally unique.
     */
    public $ApplicationId;

    /**
     * @var string Displayed application name, which can contain up to 64 characters and is the same as the application name by default.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DisplayName;

    /**
     * @var string Application creation time in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedDate;

    /**
     * @var string Last update time in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LastModifiedDate;

    /**
     * @var boolean Application status.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AppStatus;

    /**
     * @var string Application icon.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Icon;

    /**
     * @var string Application type.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationType;

    /**
     * @var string Client ID.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ClientId;

    /**
     * @param string $ApplicationId Application ID, which is globally unique.
     * @param string $DisplayName Displayed application name, which can contain up to 64 characters and is the same as the application name by default.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedDate Application creation time in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $LastModifiedDate Last update time in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $AppStatus Application status.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Icon Application icon.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationType Application type.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ClientId Client ID.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("CreatedDate",$param) and $param["CreatedDate"] !== null) {
            $this->CreatedDate = $param["CreatedDate"];
        }

        if (array_key_exists("LastModifiedDate",$param) and $param["LastModifiedDate"] !== null) {
            $this->LastModifiedDate = $param["LastModifiedDate"];
        }

        if (array_key_exists("AppStatus",$param) and $param["AppStatus"] !== null) {
            $this->AppStatus = $param["AppStatus"];
        }

        if (array_key_exists("Icon",$param) and $param["Icon"] !== null) {
            $this->Icon = $param["Icon"];
        }

        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }

        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }
    }
}
