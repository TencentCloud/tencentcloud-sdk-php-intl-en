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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Managed rule automatic update option.
 *
 * @method string getAutoUpdateToLatestVersion() Obtain Enable automatic update to the latest version or not. Values: <li>`on`: enabled</li> <li>`off`: disabled</li>.
 * @method void setAutoUpdateToLatestVersion(string $AutoUpdateToLatestVersion) Set Enable automatic update to the latest version or not. Values: <li>`on`: enabled</li> <li>`off`: disabled</li>.
 * @method string getRulesetVersion() Obtain Current version, compliant with ISO 8601 standard format, such as 2023-12-21T12:00:32Z, empty by default, output parameter only.
 * @method void setRulesetVersion(string $RulesetVersion) Set Current version, compliant with ISO 8601 standard format, such as 2023-12-21T12:00:32Z, empty by default, output parameter only.
 */
class ManagedRuleAutoUpdate extends AbstractModel
{
    /**
     * @var string Enable automatic update to the latest version or not. Values: <li>`on`: enabled</li> <li>`off`: disabled</li>.
     */
    public $AutoUpdateToLatestVersion;

    /**
     * @var string Current version, compliant with ISO 8601 standard format, such as 2023-12-21T12:00:32Z, empty by default, output parameter only.
     */
    public $RulesetVersion;

    /**
     * @param string $AutoUpdateToLatestVersion Enable automatic update to the latest version or not. Values: <li>`on`: enabled</li> <li>`off`: disabled</li>.
     * @param string $RulesetVersion Current version, compliant with ISO 8601 standard format, such as 2023-12-21T12:00:32Z, empty by default, output parameter only.
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
        if (array_key_exists("AutoUpdateToLatestVersion",$param) and $param["AutoUpdateToLatestVersion"] !== null) {
            $this->AutoUpdateToLatestVersion = $param["AutoUpdateToLatestVersion"];
        }

        if (array_key_exists("RulesetVersion",$param) and $param["RulesetVersion"] !== null) {
            $this->RulesetVersion = $param["RulesetVersion"];
        }
    }
}
