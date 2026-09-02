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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Recommended protection configuration item
 *
 * @method string getConfigId() Obtain Configuration item ID
 * @method void setConfigId(string $ConfigId) Set Configuration item ID
 * @method string getConfigName() Obtain Configuration item name.
 * @method void setConfigName(string $ConfigName) Set Configuration item name.
 * @method string getConfigDescription() Obtain Configuration item description
 * @method void setConfigDescription(string $ConfigDescription) Set Configuration item description
 * @method string getConfigGroup() Obtain Configuration group
Enumeration value:
auto_risk_discovery: auto risk discovery
auto-defense
client_hardening: Client hardening
 * @method void setConfigGroup(string $ConfigGroup) Set Configuration group
Enumeration value:
auto_risk_discovery: auto risk discovery
auto-defense
client_hardening: Client hardening
 * @method boolean getEnabled() Obtain Whether enabled
 * @method void setEnabled(boolean $Enabled) Set Whether enabled
 */
class ProtectionConfigItem extends AbstractModel
{
    /**
     * @var string Configuration item ID
     */
    public $ConfigId;

    /**
     * @var string Configuration item name.
     */
    public $ConfigName;

    /**
     * @var string Configuration item description
     */
    public $ConfigDescription;

    /**
     * @var string Configuration group
Enumeration value:
auto_risk_discovery: auto risk discovery
auto-defense
client_hardening: Client hardening
     */
    public $ConfigGroup;

    /**
     * @var boolean Whether enabled
     */
    public $Enabled;

    /**
     * @param string $ConfigId Configuration item ID
     * @param string $ConfigName Configuration item name.
     * @param string $ConfigDescription Configuration item description
     * @param string $ConfigGroup Configuration group
Enumeration value:
auto_risk_discovery: auto risk discovery
auto-defense
client_hardening: Client hardening
     * @param boolean $Enabled Whether enabled
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
        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("ConfigName",$param) and $param["ConfigName"] !== null) {
            $this->ConfigName = $param["ConfigName"];
        }

        if (array_key_exists("ConfigDescription",$param) and $param["ConfigDescription"] !== null) {
            $this->ConfigDescription = $param["ConfigDescription"];
        }

        if (array_key_exists("ConfigGroup",$param) and $param["ConfigGroup"] !== null) {
            $this->ConfigGroup = $param["ConfigGroup"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
