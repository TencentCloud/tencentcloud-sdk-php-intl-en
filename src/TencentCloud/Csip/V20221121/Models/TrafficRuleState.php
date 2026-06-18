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
 * Traffic sandbox rule status
 *
 * @method string getModule() Obtain <p>Sandbox plug-in module name</p>
 * @method void setModule(string $Module) Set <p>Sandbox plug-in module name</p>
 * @method string getStatus() Obtain <p>Sandbox rule status</p><p>Enumeration value:</p><ul><li>ON: Enable</li><li>OFF: Disable</li></ul>
 * @method void setStatus(string $Status) Set <p>Sandbox rule status</p><p>Enumeration value:</p><ul><li>ON: Enable</li><li>OFF: Disable</li></ul>
 */
class TrafficRuleState extends AbstractModel
{
    /**
     * @var string <p>Sandbox plug-in module name</p>
     */
    public $Module;

    /**
     * @var string <p>Sandbox rule status</p><p>Enumeration value:</p><ul><li>ON: Enable</li><li>OFF: Disable</li></ul>
     */
    public $Status;

    /**
     * @param string $Module <p>Sandbox plug-in module name</p>
     * @param string $Status <p>Sandbox rule status</p><p>Enumeration value:</p><ul><li>ON: Enable</li><li>OFF: Disable</li></ul>
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
