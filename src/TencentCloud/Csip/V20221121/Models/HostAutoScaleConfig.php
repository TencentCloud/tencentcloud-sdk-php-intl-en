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
 * Auto-scaling configuration for the CWP module
 *
 * @method string getSwitch() Obtain Host auto-scaling switch
Enumeration values:
ON: enable
OFF: disabled.
Supplemental description: If not passed, no modification is made. Map the underlying auto-purchase switch auto_repurchase_switch.
 * @method void setSwitch(string $Switch) Set Host auto-scaling switch
Enumeration values:
ON: enable
OFF: disabled.
Supplemental description: If not passed, no modification is made. Map the underlying auto-purchase switch auto_repurchase_switch.
 * @method string getProtectType() Obtain Scale-out version
Enumeration values:
PRO: Professional Edition
ULTIMATE: Flagship edition
Supplementary description: No modification will be made if this parameter is not passed in.
 * @method void setProtectType(string $ProtectType) Set Scale-out version
Enumeration values:
PRO: Professional Edition
ULTIMATE: Flagship edition
Supplementary description: No modification will be made if this parameter is not passed in.
 */
class HostAutoScaleConfig extends AbstractModel
{
    /**
     * @var string Host auto-scaling switch
Enumeration values:
ON: enable
OFF: disabled.
Supplemental description: If not passed, no modification is made. Map the underlying auto-purchase switch auto_repurchase_switch.
     */
    public $Switch;

    /**
     * @var string Scale-out version
Enumeration values:
PRO: Professional Edition
ULTIMATE: Flagship edition
Supplementary description: No modification will be made if this parameter is not passed in.
     */
    public $ProtectType;

    /**
     * @param string $Switch Host auto-scaling switch
Enumeration values:
ON: enable
OFF: disabled.
Supplemental description: If not passed, no modification is made. Map the underlying auto-purchase switch auto_repurchase_switch.
     * @param string $ProtectType Scale-out version
Enumeration values:
PRO: Professional Edition
ULTIMATE: Flagship edition
Supplementary description: No modification will be made if this parameter is not passed in.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("ProtectType",$param) and $param["ProtectType"] !== null) {
            $this->ProtectType = $param["ProtectType"];
        }
    }
}
