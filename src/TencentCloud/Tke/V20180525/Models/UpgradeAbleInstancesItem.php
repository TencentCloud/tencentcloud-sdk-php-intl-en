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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Upgradeable node information
 *
 * @method string getInstanceId() Obtain Node ID
 * @method void setInstanceId(string $InstanceId) Set Node ID
 * @method string getVersion() Obtain The current version of the node
 * @method void setVersion(string $Version) Set The current version of the node
 * @method string getLatestVersion() Obtain The latest minor version of the current version
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setLatestVersion(string $LatestVersion) Set The latest minor version of the current version
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getRuntimeVersion() Obtain RuntimeVersion
 * @method void setRuntimeVersion(string $RuntimeVersion) Set RuntimeVersion
 * @method string getRuntimeLatestVersion() Obtain RuntimeLatestVersion
 * @method void setRuntimeLatestVersion(string $RuntimeLatestVersion) Set RuntimeLatestVersion
 */
class UpgradeAbleInstancesItem extends AbstractModel
{
    /**
     * @var string Node ID
     */
    public $InstanceId;

    /**
     * @var string The current version of the node
     */
    public $Version;

    /**
     * @var string The latest minor version of the current version
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $LatestVersion;

    /**
     * @var string RuntimeVersion
     */
    public $RuntimeVersion;

    /**
     * @var string RuntimeLatestVersion
     */
    public $RuntimeLatestVersion;

    /**
     * @param string $InstanceId Node ID
     * @param string $Version The current version of the node
     * @param string $LatestVersion The latest minor version of the current version
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $RuntimeVersion RuntimeVersion
     * @param string $RuntimeLatestVersion RuntimeLatestVersion
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("LatestVersion",$param) and $param["LatestVersion"] !== null) {
            $this->LatestVersion = $param["LatestVersion"];
        }

        if (array_key_exists("RuntimeVersion",$param) and $param["RuntimeVersion"] !== null) {
            $this->RuntimeVersion = $param["RuntimeVersion"];
        }

        if (array_key_exists("RuntimeLatestVersion",$param) and $param["RuntimeLatestVersion"] !== null) {
            $this->RuntimeLatestVersion = $param["RuntimeLatestVersion"];
        }
    }
}
