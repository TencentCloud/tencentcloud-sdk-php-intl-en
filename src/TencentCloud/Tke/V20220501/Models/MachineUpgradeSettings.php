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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Managed node pool automatic upgrade configuration
 *
 * @method boolean getAutoUpgrade() Obtain Whether to enable automatic upgrade
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setAutoUpgrade(boolean $AutoUpgrade) Set Whether to enable automatic upgrade
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method AutoUpgradeOptions getUpgradeOptions() Obtain Ops window
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setUpgradeOptions(AutoUpgradeOptions $UpgradeOptions) Set Ops window
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method array getComponents() Obtain Upgrade item
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setComponents(array $Components) Set Upgrade item
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method IntOrString getMaxUnavailable() Obtain Maximum number of nodes that cannot be upgraded during upgrade
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setMaxUnavailable(IntOrString $MaxUnavailable) Set Maximum number of nodes that cannot be upgraded during upgrade
Note: This field may return "null", indicating that no valid value can be obtained.
 */
class MachineUpgradeSettings extends AbstractModel
{
    /**
     * @var boolean Whether to enable automatic upgrade
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $AutoUpgrade;

    /**
     * @var AutoUpgradeOptions Ops window
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $UpgradeOptions;

    /**
     * @var array Upgrade item
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Components;

    /**
     * @var IntOrString Maximum number of nodes that cannot be upgraded during upgrade
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $MaxUnavailable;

    /**
     * @param boolean $AutoUpgrade Whether to enable automatic upgrade
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param AutoUpgradeOptions $UpgradeOptions Ops window
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param array $Components Upgrade item
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param IntOrString $MaxUnavailable Maximum number of nodes that cannot be upgraded during upgrade
Note: This field may return "null", indicating that no valid value can be obtained.
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
        if (array_key_exists("AutoUpgrade",$param) and $param["AutoUpgrade"] !== null) {
            $this->AutoUpgrade = $param["AutoUpgrade"];
        }

        if (array_key_exists("UpgradeOptions",$param) and $param["UpgradeOptions"] !== null) {
            $this->UpgradeOptions = new AutoUpgradeOptions();
            $this->UpgradeOptions->deserialize($param["UpgradeOptions"]);
        }

        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            $this->Components = $param["Components"];
        }

        if (array_key_exists("MaxUnavailable",$param) and $param["MaxUnavailable"] !== null) {
            $this->MaxUnavailable = new IntOrString();
            $this->MaxUnavailable->deserialize($param["MaxUnavailable"]);
        }
    }
}
