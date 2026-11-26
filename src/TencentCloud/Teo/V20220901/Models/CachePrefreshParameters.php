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
 * Cache pre-refresh configuration parameters.
 *
 * @method string getSwitch() Obtain Cache pre-refresh switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method void setSwitch(string $Switch) Set Cache pre-refresh switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method integer getCacheTimePercent() Obtain The pre-refresh time is set to a percentage value of the node cache time. Value range: 1–99.<br>Note: When Switch is on, this field is required. When Switch is off, no need to specify this field. If specified, it does not take effect.
 * @method void setCacheTimePercent(integer $CacheTimePercent) Set The pre-refresh time is set to a percentage value of the node cache time. Value range: 1–99.<br>Note: When Switch is on, this field is required. When Switch is off, no need to specify this field. If specified, it does not take effect.
 */
class CachePrefreshParameters extends AbstractModel
{
    /**
     * @var string Cache pre-refresh switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     */
    public $Switch;

    /**
     * @var integer The pre-refresh time is set to a percentage value of the node cache time. Value range: 1–99.<br>Note: When Switch is on, this field is required. When Switch is off, no need to specify this field. If specified, it does not take effect.
     */
    public $CacheTimePercent;

    /**
     * @param string $Switch Cache pre-refresh switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     * @param integer $CacheTimePercent The pre-refresh time is set to a percentage value of the node cache time. Value range: 1–99.<br>Note: When Switch is on, this field is required. When Switch is off, no need to specify this field. If specified, it does not take effect.
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

        if (array_key_exists("CacheTimePercent",$param) and $param["CacheTimePercent"] !== null) {
            $this->CacheTimePercent = $param["CacheTimePercent"];
        }
    }
}
