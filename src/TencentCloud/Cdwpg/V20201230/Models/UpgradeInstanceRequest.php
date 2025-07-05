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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeInstance request structure.
 *
 * @method string getInstanceId() Obtain InstanceId.
 * @method void setInstanceId(string $InstanceId) Set InstanceId.
 * @method string getPackageVersion() Obtain Installation package version.
 * @method void setPackageVersion(string $PackageVersion) Set Installation package version.
 */
class UpgradeInstanceRequest extends AbstractModel
{
    /**
     * @var string InstanceId.
     */
    public $InstanceId;

    /**
     * @var string Installation package version.
     */
    public $PackageVersion;

    /**
     * @param string $InstanceId InstanceId.
     * @param string $PackageVersion Installation package version.
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

        if (array_key_exists("PackageVersion",$param) and $param["PackageVersion"] !== null) {
            $this->PackageVersion = $param["PackageVersion"];
        }
    }
}
