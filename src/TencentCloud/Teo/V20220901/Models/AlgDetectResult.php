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
 * Active bot detection results.
 *
 * @method string getResult() Obtain The validation result. Values:
<li>`invalid`: Invalid Cookie</li>
<li>`cookie_empty`: No Cookie/Cookie expired</li>
<li>`js_empty`: Client JS disabled</li>
<li>`low`: Low-risk session</li>
<li>`middle`: Medium-risk session</li>
<li>`high`: High-risk session</li>
<li>`timeout`: JS validation timed out</li>
<li>`not_browser`: Invalid browser</li>
<li>`is_bot`: Bot client</li>
 * @method void setResult(string $Result) Set The validation result. Values:
<li>`invalid`: Invalid Cookie</li>
<li>`cookie_empty`: No Cookie/Cookie expired</li>
<li>`js_empty`: Client JS disabled</li>
<li>`low`: Low-risk session</li>
<li>`middle`: Medium-risk session</li>
<li>`high`: High-risk session</li>
<li>`timeout`: JS validation timed out</li>
<li>`not_browser`: Invalid browser</li>
<li>`is_bot`: Bot client</li>
 * @method string getAction() Obtain The action. Values:
<li>`drop`: Block</li>
<li>`monitor`: Observe</li>
<li>`silence`: Drop w/o response</li>
<li>`shortdelay`: Add short latency</li>
<li>`longdelay`: Add long latency</li>
 * @method void setAction(string $Action) Set The action. Values:
<li>`drop`: Block</li>
<li>`monitor`: Observe</li>
<li>`silence`: Drop w/o response</li>
<li>`shortdelay`: Add short latency</li>
<li>`longdelay`: Add long latency</li>
 */
class AlgDetectResult extends AbstractModel
{
    /**
     * @var string The validation result. Values:
<li>`invalid`: Invalid Cookie</li>
<li>`cookie_empty`: No Cookie/Cookie expired</li>
<li>`js_empty`: Client JS disabled</li>
<li>`low`: Low-risk session</li>
<li>`middle`: Medium-risk session</li>
<li>`high`: High-risk session</li>
<li>`timeout`: JS validation timed out</li>
<li>`not_browser`: Invalid browser</li>
<li>`is_bot`: Bot client</li>
     */
    public $Result;

    /**
     * @var string The action. Values:
<li>`drop`: Block</li>
<li>`monitor`: Observe</li>
<li>`silence`: Drop w/o response</li>
<li>`shortdelay`: Add short latency</li>
<li>`longdelay`: Add long latency</li>
     */
    public $Action;

    /**
     * @param string $Result The validation result. Values:
<li>`invalid`: Invalid Cookie</li>
<li>`cookie_empty`: No Cookie/Cookie expired</li>
<li>`js_empty`: Client JS disabled</li>
<li>`low`: Low-risk session</li>
<li>`middle`: Medium-risk session</li>
<li>`high`: High-risk session</li>
<li>`timeout`: JS validation timed out</li>
<li>`not_browser`: Invalid browser</li>
<li>`is_bot`: Bot client</li>
     * @param string $Action The action. Values:
<li>`drop`: Block</li>
<li>`monitor`: Observe</li>
<li>`silence`: Drop w/o response</li>
<li>`shortdelay`: Add short latency</li>
<li>`longdelay`: Add long latency</li>
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }
    }
}
