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
 * Access URL redirect path configuration parameters.
 *
 * @method string getAction() Obtain Action to be executed. values:.
<Li>`Follow`: follow the request;</li>.
<Li>`Custom`: custom;</li>.
<Li>`Regex`: regular expression matching.</li>.
 * @method void setAction(string $Action) Set Action to be executed. values:.
<Li>`Follow`: follow the request;</li>.
<Li>`Custom`: custom;</li>.
<Li>`Regex`: regular expression matching.</li>.
 * @method string getRegex() Obtain Regular expression matching expression, length range is 1-1024.<br>note: when action is regex, this field is required; when action is follow or custom, this field is not required and will not take effect if filled.
 * @method void setRegex(string $Regex) Set Regular expression matching expression, length range is 1-1024.<br>note: when action is regex, this field is required; when action is follow or custom, this field is not required and will not take effect if filled.
 * @method string getValue() Obtain Redirect target url, length range is 1-1024.<br>note: when action is regex or custom, this field is required; when action is follow, this field is not required and will not take effect if filled.
 * @method void setValue(string $Value) Set Redirect target url, length range is 1-1024.<br>note: when action is regex or custom, this field is required; when action is follow, this field is not required and will not take effect if filled.
 */
class URLPath extends AbstractModel
{
    /**
     * @var string Action to be executed. values:.
<Li>`Follow`: follow the request;</li>.
<Li>`Custom`: custom;</li>.
<Li>`Regex`: regular expression matching.</li>.
     */
    public $Action;

    /**
     * @var string Regular expression matching expression, length range is 1-1024.<br>note: when action is regex, this field is required; when action is follow or custom, this field is not required and will not take effect if filled.
     */
    public $Regex;

    /**
     * @var string Redirect target url, length range is 1-1024.<br>note: when action is regex or custom, this field is required; when action is follow, this field is not required and will not take effect if filled.
     */
    public $Value;

    /**
     * @param string $Action Action to be executed. values:.
<Li>`Follow`: follow the request;</li>.
<Li>`Custom`: custom;</li>.
<Li>`Regex`: regular expression matching.</li>.
     * @param string $Regex Regular expression matching expression, length range is 1-1024.<br>note: when action is regex, this field is required; when action is follow or custom, this field is not required and will not take effect if filled.
     * @param string $Value Redirect target url, length range is 1-1024.<br>note: when action is regex or custom, this field is required; when action is follow, this field is not required and will not take effect if filled.
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Regex",$param) and $param["Regex"] !== null) {
            $this->Regex = $param["Regex"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
