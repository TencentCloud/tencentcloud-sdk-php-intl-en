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
 * ModifyApplication request structure.
 *
 * @method string getApplicationId() Obtain Application ID, which is globally unique.
 * @method void setApplicationId(string $ApplicationId) Set Application ID, which is globally unique.
 * @method string getSecureLevel() Obtain Security level.
 * @method void setSecureLevel(string $SecureLevel) Set Security level.
 * @method string getDisplayName() Obtain Displayed application name, which can contain up to 32 characters and is the same as the application name by default.
 * @method void setDisplayName(string $DisplayName) Set Displayed application name, which can contain up to 32 characters and is the same as the application name by default.
 * @method boolean getAppStatus() Obtain Application status. Valid values: true: enabled; false: disabled.
 * @method void setAppStatus(boolean $AppStatus) Set Application status. Valid values: true: enabled; false: disabled.
 * @method string getIconUrl() Obtain Access address of the application icon image.
 * @method void setIconUrl(string $IconUrl) Set Access address of the application icon image.
 * @method string getDescription() Obtain Description, which can contain up to 128 characters.
 * @method void setDescription(string $Description) Set Description, which can contain up to 128 characters.
 */
class ModifyApplicationRequest extends AbstractModel
{
    /**
     * @var string Application ID, which is globally unique.
     */
    public $ApplicationId;

    /**
     * @var string Security level.
     */
    public $SecureLevel;

    /**
     * @var string Displayed application name, which can contain up to 32 characters and is the same as the application name by default.
     */
    public $DisplayName;

    /**
     * @var boolean Application status. Valid values: true: enabled; false: disabled.
     */
    public $AppStatus;

    /**
     * @var string Access address of the application icon image.
     */
    public $IconUrl;

    /**
     * @var string Description, which can contain up to 128 characters.
     */
    public $Description;

    /**
     * @param string $ApplicationId Application ID, which is globally unique.
     * @param string $SecureLevel Security level.
     * @param string $DisplayName Displayed application name, which can contain up to 32 characters and is the same as the application name by default.
     * @param boolean $AppStatus Application status. Valid values: true: enabled; false: disabled.
     * @param string $IconUrl Access address of the application icon image.
     * @param string $Description Description, which can contain up to 128 characters.
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

        if (array_key_exists("SecureLevel",$param) and $param["SecureLevel"] !== null) {
            $this->SecureLevel = $param["SecureLevel"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("AppStatus",$param) and $param["AppStatus"] !== null) {
            $this->AppStatus = $param["AppStatus"];
        }

        if (array_key_exists("IconUrl",$param) and $param["IconUrl"] !== null) {
            $this->IconUrl = $param["IconUrl"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
