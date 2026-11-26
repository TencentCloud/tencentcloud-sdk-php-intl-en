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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Detailed module configuration of the exception rule.
 *
 * @method string getModule() Obtain Module name. Valid values:
<li>managed-rule: managed rule Id;</li>
<li>managed-group: managed rule group;</li>
<li>waf: to be deprecated, managed rule.</li>
 * @method void setModule(string $Module) Set Module name. Valid values:
<li>managed-rule: managed rule Id;</li>
<li>managed-group: managed rule group;</li>
<li>waf: to be deprecated, managed rule.</li>
 * @method array getInclude() Obtain List of specific rule IDs that require exceptions under the module.
 * @method void setInclude(array $Include) Set List of specific rule IDs that require exceptions under the module.
 */
class PartialModule extends AbstractModel
{
    /**
     * @var string Module name. Valid values:
<li>managed-rule: managed rule Id;</li>
<li>managed-group: managed rule group;</li>
<li>waf: to be deprecated, managed rule.</li>
     */
    public $Module;

    /**
     * @var array List of specific rule IDs that require exceptions under the module.
     */
    public $Include;

    /**
     * @param string $Module Module name. Valid values:
<li>managed-rule: managed rule Id;</li>
<li>managed-group: managed rule group;</li>
<li>waf: to be deprecated, managed rule.</li>
     * @param array $Include List of specific rule IDs that require exceptions under the module.
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

        if (array_key_exists("Include",$param) and $param["Include"] !== null) {
            $this->Include = $param["Include"];
        }
    }
}
