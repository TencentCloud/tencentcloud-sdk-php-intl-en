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
 * Custom Cache Key query string configuration parameters
 *
 * @method string getSwitch() Obtain Query string retain/ignore specified parameter switch. valid values are:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
 * @method void setSwitch(string $Switch) Set Query string retain/ignore specified parameter switch. valid values are:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
 * @method string getAction() Obtain Actions to retain/ignore specified parameters in the query string. values:.
<Li>`IncludeCustom`: retain partial parameters.</li>.
<Li>`ExcludeCustom`: ignore partial parameters.</li> note: this field is required when `switch` is on. when `switch` is off, this field is not required and will not take effect if filled.
 * @method void setAction(string $Action) Set Actions to retain/ignore specified parameters in the query string. values:.
<Li>`IncludeCustom`: retain partial parameters.</li>.
<Li>`ExcludeCustom`: ignore partial parameters.</li> note: this field is required when `switch` is on. when `switch` is off, this field is not required and will not take effect if filled.
 * @method array getValues() Obtain List of parameter names to be retained/ignored in the query string. <br>note: this field is required when `switch` is on. when `switch` is off, this field is not required and will not take effect if filled.
 * @method void setValues(array $Values) Set List of parameter names to be retained/ignored in the query string. <br>note: this field is required when `switch` is on. when `switch` is off, this field is not required and will not take effect if filled.
 */
class CacheKeyQueryString extends AbstractModel
{
    /**
     * @var string Query string retain/ignore specified parameter switch. valid values are:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
     */
    public $Switch;

    /**
     * @var string Actions to retain/ignore specified parameters in the query string. values:.
<Li>`IncludeCustom`: retain partial parameters.</li>.
<Li>`ExcludeCustom`: ignore partial parameters.</li> note: this field is required when `switch` is on. when `switch` is off, this field is not required and will not take effect if filled.
     */
    public $Action;

    /**
     * @var array List of parameter names to be retained/ignored in the query string. <br>note: this field is required when `switch` is on. when `switch` is off, this field is not required and will not take effect if filled.
     */
    public $Values;

    /**
     * @param string $Switch Query string retain/ignore specified parameter switch. valid values are:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
     * @param string $Action Actions to retain/ignore specified parameters in the query string. values:.
<Li>`IncludeCustom`: retain partial parameters.</li>.
<Li>`ExcludeCustom`: ignore partial parameters.</li> note: this field is required when `switch` is on. when `switch` is off, this field is not required and will not take effect if filled.
     * @param array $Values List of parameter names to be retained/ignored in the query string. <br>note: this field is required when `switch` is on. when `switch` is off, this field is not required and will not take effect if filled.
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
