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
 * Custom Cache Key Cookie configuration parameters
 *
 * @method string getSwitch() Obtain Whether to enable feature. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
 * @method void setSwitch(string $Switch) Set Whether to enable feature. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
 * @method string getAction() Obtain Cache action. values:.
<Li>`Full`: retain all</li>.
<Li> `ignore`: ignore all;</li>.
<Li> `includecustom`: retain specified parameters;</li>.
<Li> `excludecustom`: ignore specified parameters.</li> **note**: when `switch` is on, this field is required. when `switch` is off, this field is not required and will not take effect if filled.
 * @method void setAction(string $Action) Set Cache action. values:.
<Li>`Full`: retain all</li>.
<Li> `ignore`: ignore all;</li>.
<Li> `includecustom`: retain specified parameters;</li>.
<Li> `excludecustom`: ignore specified parameters.</li> **note**: when `switch` is on, this field is required. when `switch` is off, this field is not required and will not take effect if filled.
 * @method array getValues() Obtain Custom cache key cookie name list.<br>note: this field is required when action is includecustom or excludecustom; when action is full or ignore, this field is not required and will not take effect if filled.
 * @method void setValues(array $Values) Set Custom cache key cookie name list.<br>note: this field is required when action is includecustom or excludecustom; when action is full or ignore, this field is not required and will not take effect if filled.
 */
class CacheKeyCookie extends AbstractModel
{
    /**
     * @var string Whether to enable feature. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
     */
    public $Switch;

    /**
     * @var string Cache action. values:.
<Li>`Full`: retain all</li>.
<Li> `ignore`: ignore all;</li>.
<Li> `includecustom`: retain specified parameters;</li>.
<Li> `excludecustom`: ignore specified parameters.</li> **note**: when `switch` is on, this field is required. when `switch` is off, this field is not required and will not take effect if filled.
     */
    public $Action;

    /**
     * @var array Custom cache key cookie name list.<br>note: this field is required when action is includecustom or excludecustom; when action is full or ignore, this field is not required and will not take effect if filled.
     */
    public $Values;

    /**
     * @param string $Switch Whether to enable feature. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
     * @param string $Action Cache action. values:.
<Li>`Full`: retain all</li>.
<Li> `ignore`: ignore all;</li>.
<Li> `includecustom`: retain specified parameters;</li>.
<Li> `excludecustom`: ignore specified parameters.</li> **note**: when `switch` is on, this field is required. when `switch` is off, this field is not required and will not take effect if filled.
     * @param array $Values Custom cache key cookie name list.<br>note: this field is required when action is includecustom or excludecustom; when action is full or ignore, this field is not required and will not take effect if filled.
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

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
