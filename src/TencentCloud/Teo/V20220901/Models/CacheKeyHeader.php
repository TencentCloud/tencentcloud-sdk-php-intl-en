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
 * Custom Cache Key HTTP request header configuration parameters.
 *
 * @method string getSwitch() Obtain Whether to enable feature. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
 * @method void setSwitch(string $Switch) Set Whether to enable feature. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
 * @method array getValues() Obtain Custom cache key http request header list.<br>note: this field is required when switch is on; when switch is off, this field is not required and will not take effect if filled.
 * @method void setValues(array $Values) Set Custom cache key http request header list.<br>note: this field is required when switch is on; when switch is off, this field is not required and will not take effect if filled.
 */
class CacheKeyHeader extends AbstractModel
{
    /**
     * @var string Whether to enable feature. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
     */
    public $Switch;

    /**
     * @var array Custom cache key http request header list.<br>note: this field is required when switch is on; when switch is off, this field is not required and will not take effect if filled.
     */
    public $Values;

    /**
     * @param string $Switch Whether to enable feature. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
     * @param array $Values Custom cache key http request header list.<br>note: this field is required when switch is on; when switch is off, this field is not required and will not take effect if filled.
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

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
