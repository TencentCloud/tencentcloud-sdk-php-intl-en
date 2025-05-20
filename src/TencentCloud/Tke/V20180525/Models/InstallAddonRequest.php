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
 * InstallAddon request structure.
 *
 * @method string getClusterId() Obtain Cluster ID (only supported for standard tke clusters).
 * @method void setClusterId(string $ClusterId) Set Cluster ID (only supported for standard tke clusters).
 * @method string getAddonName() Obtain Add-on name
 * @method void setAddonName(string $AddonName) Set Add-on name
 * @method string getAddonVersion() Obtain Add-on version. If it is not specified, the latest version is installed by default.
 * @method void setAddonVersion(string $AddonVersion) Set Add-on version. If it is not specified, the latest version is installed by default.
 * @method string getRawValues() Obtain Add-on parameters in a base64-encoded JSON string. You can query add-on parameters via `DescribeAddonValues`.
 * @method void setRawValues(string $RawValues) Set Add-on parameters in a base64-encoded JSON string. You can query add-on parameters via `DescribeAddonValues`.
 * @method boolean getDryRun() Obtain Specifies whether to perform only an installation check. when set to true, only checks are performed without installing components.
 * @method void setDryRun(boolean $DryRun) Set Specifies whether to perform only an installation check. when set to true, only checks are performed without installing components.
 */
class InstallAddonRequest extends AbstractModel
{
    /**
     * @var string Cluster ID (only supported for standard tke clusters).
     */
    public $ClusterId;

    /**
     * @var string Add-on name
     */
    public $AddonName;

    /**
     * @var string Add-on version. If it is not specified, the latest version is installed by default.
     */
    public $AddonVersion;

    /**
     * @var string Add-on parameters in a base64-encoded JSON string. You can query add-on parameters via `DescribeAddonValues`.
     */
    public $RawValues;

    /**
     * @var boolean Specifies whether to perform only an installation check. when set to true, only checks are performed without installing components.
     */
    public $DryRun;

    /**
     * @param string $ClusterId Cluster ID (only supported for standard tke clusters).
     * @param string $AddonName Add-on name
     * @param string $AddonVersion Add-on version. If it is not specified, the latest version is installed by default.
     * @param string $RawValues Add-on parameters in a base64-encoded JSON string. You can query add-on parameters via `DescribeAddonValues`.
     * @param boolean $DryRun Specifies whether to perform only an installation check. when set to true, only checks are performed without installing components.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("AddonName",$param) and $param["AddonName"] !== null) {
            $this->AddonName = $param["AddonName"];
        }

        if (array_key_exists("AddonVersion",$param) and $param["AddonVersion"] !== null) {
            $this->AddonVersion = $param["AddonVersion"];
        }

        if (array_key_exists("RawValues",$param) and $param["RawValues"] !== null) {
            $this->RawValues = $param["RawValues"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }
    }
}
