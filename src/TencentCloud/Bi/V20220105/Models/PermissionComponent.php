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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Business edition permission unit
 *
 * @method string getModuleId() Obtain Permission value.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setModuleId(string $ModuleId) Set Permission value.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIncludeType() Obtain Visible/Available.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIncludeType(string $IncludeType) Set Visible/Available.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpgradeVersionType() Obtain Target upgrade version.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpgradeVersionType(string $UpgradeVersionType) Set Target upgrade version.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTips() Obtain Supplemental information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTips(string $Tips) Set Supplemental information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTipsKey() Obtain Key for supplementary information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTipsKey(string $TipsKey) Set Key for supplementary information.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PermissionComponent extends AbstractModel
{
    /**
     * @var string Permission value.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ModuleId;

    /**
     * @var string Visible/Available.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IncludeType;

    /**
     * @var string Target upgrade version.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpgradeVersionType;

    /**
     * @var string Supplemental information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tips;

    /**
     * @var string Key for supplementary information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TipsKey;

    /**
     * @param string $ModuleId Permission value.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IncludeType Visible/Available.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpgradeVersionType Target upgrade version.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Tips Supplemental information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TipsKey Key for supplementary information.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ModuleId",$param) and $param["ModuleId"] !== null) {
            $this->ModuleId = $param["ModuleId"];
        }

        if (array_key_exists("IncludeType",$param) and $param["IncludeType"] !== null) {
            $this->IncludeType = $param["IncludeType"];
        }

        if (array_key_exists("UpgradeVersionType",$param) and $param["UpgradeVersionType"] !== null) {
            $this->UpgradeVersionType = $param["UpgradeVersionType"];
        }

        if (array_key_exists("Tips",$param) and $param["Tips"] !== null) {
            $this->Tips = $param["Tips"];
        }

        if (array_key_exists("TipsKey",$param) and $param["TipsKey"] !== null) {
            $this->TipsKey = $param["TipsKey"];
        }
    }
}
