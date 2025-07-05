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
 * Module settings of the exception rule
 *
 * @method string getModule() Obtain The module. Values:
<li>`waf`: Managed rules</li>
 * @method void setModule(string $Module) Set The module. Values:
<li>`waf`: Managed rules</li>
 * @method array getInclude() Obtain List of managed rule IDs to be skipped.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setInclude(array $Include) Set List of managed rule IDs to be skipped.
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class PartialModule extends AbstractModel
{
    /**
     * @var string The module. Values:
<li>`waf`: Managed rules</li>
     */
    public $Module;

    /**
     * @var array List of managed rule IDs to be skipped.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Include;

    /**
     * @param string $Module The module. Values:
<li>`waf`: Managed rules</li>
     * @param array $Include List of managed rule IDs to be skipped.
Note: This field may return `null`, indicating that no valid value can be obtained.
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
