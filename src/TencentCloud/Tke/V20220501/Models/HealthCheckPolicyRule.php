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
 * Health check rules
 *
 * @method string getName() Obtain Health check rules
 * @method void setName(string $Name) Set Health check rules
 * @method boolean getEnabled() Obtain Whether to check this item
 * @method void setEnabled(boolean $Enabled) Set Whether to check this item
 * @method boolean getAutoRepairEnabled() Obtain Whether to enable repair
 * @method void setAutoRepairEnabled(boolean $AutoRepairEnabled) Set Whether to enable repair
 */
class HealthCheckPolicyRule extends AbstractModel
{
    /**
     * @var string Health check rules
     */
    public $Name;

    /**
     * @var boolean Whether to check this item
     */
    public $Enabled;

    /**
     * @var boolean Whether to enable repair
     */
    public $AutoRepairEnabled;

    /**
     * @param string $Name Health check rules
     * @param boolean $Enabled Whether to check this item
     * @param boolean $AutoRepairEnabled Whether to enable repair
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("AutoRepairEnabled",$param) and $param["AutoRepairEnabled"] !== null) {
            $this->AutoRepairEnabled = $param["AutoRepairEnabled"];
        }
    }
}
