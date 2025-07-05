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
 * Cache prefresh configuration parameters
 *
 * @method string getSwitch() Obtain Whether to enable cache prefresh. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
 * @method void setSwitch(string $Switch) Set Whether to enable cache prefresh. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
 * @method integer getCacheTimePercent() Obtain Prefresh interval set as a percentage of the node cache time. value range: 1-99.<br>note: this field is required when switch is on; when switch is off, this field is not required and will not take effect if filled.
 * @method void setCacheTimePercent(integer $CacheTimePercent) Set Prefresh interval set as a percentage of the node cache time. value range: 1-99.<br>note: this field is required when switch is on; when switch is off, this field is not required and will not take effect if filled.
 */
class CachePrefreshParameters extends AbstractModel
{
    /**
     * @var string Whether to enable cache prefresh. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
     */
    public $Switch;

    /**
     * @var integer Prefresh interval set as a percentage of the node cache time. value range: 1-99.<br>note: this field is required when switch is on; when switch is off, this field is not required and will not take effect if filled.
     */
    public $CacheTimePercent;

    /**
     * @param string $Switch Whether to enable cache prefresh. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
     * @param integer $CacheTimePercent Prefresh interval set as a percentage of the node cache time. value range: 1-99.<br>note: this field is required when switch is on; when switch is off, this field is not required and will not take effect if filled.
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
