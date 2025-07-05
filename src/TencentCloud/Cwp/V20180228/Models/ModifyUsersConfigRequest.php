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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyUsersConfig request structure.
 *
 * @method string getConfigName() Obtain Configuration name
<li>license_monitor new authorization monitoring configuration: 0 - disable, 1 - enable</li>
 * @method void setConfigName(string $ConfigName) Set Configuration name
<li>license_monitor new authorization monitoring configuration: 0 - disable, 1 - enable</li>
 * @method string getConfigValue() Obtain Configuration value
 * @method void setConfigValue(string $ConfigValue) Set Configuration value
 */
class ModifyUsersConfigRequest extends AbstractModel
{
    /**
     * @var string Configuration name
<li>license_monitor new authorization monitoring configuration: 0 - disable, 1 - enable</li>
     */
    public $ConfigName;

    /**
     * @var string Configuration value
     */
    public $ConfigValue;

    /**
     * @param string $ConfigName Configuration name
<li>license_monitor new authorization monitoring configuration: 0 - disable, 1 - enable</li>
     * @param string $ConfigValue Configuration value
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
        if (array_key_exists("ConfigName",$param) and $param["ConfigName"] !== null) {
            $this->ConfigName = $param["ConfigName"];
        }

        if (array_key_exists("ConfigValue",$param) and $param["ConfigValue"] !== null) {
            $this->ConfigValue = $param["ConfigValue"];
        }
    }
}
