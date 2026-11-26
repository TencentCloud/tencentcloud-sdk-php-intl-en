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
 * Proactive feature recognition check results for Bot.
 *
 * @method string getResult() Obtain Check results. Valid values:
<li>invalid: invalid Cookie;</li>
<li>cookie_empty: No cookie carried or the cookie has expired;</li>
<li>js_empty: JS is not enabled on the client (test not completed);</li>
<li>low: low risk in session rate and periodic feature verification;</li>
<li>middle: medium-risk in session rate and periodic feature verification;</li>
<li>high: high-risk session rate and periodic feature verification;</li>
<li>timeout: Timeout duration for detection;</li>
<li>not_browser: invalid browser;</li>
<li>is_bot: Bot Client.</li>
 * @method void setResult(string $Result) Set Check results. Valid values:
<li>invalid: invalid Cookie;</li>
<li>cookie_empty: No cookie carried or the cookie has expired;</li>
<li>js_empty: JS is not enabled on the client (test not completed);</li>
<li>low: low risk in session rate and periodic feature verification;</li>
<li>middle: medium-risk in session rate and periodic feature verification;</li>
<li>high: high-risk session rate and periodic feature verification;</li>
<li>timeout: Timeout duration for detection;</li>
<li>not_browser: invalid browser;</li>
<li>is_bot: Bot Client.</li>
 * @method string getAction() Obtain Penalty action. Valid values:
<li>drop: block;</li>
<li>monitor: observation;</li>
<li>silence: silence;</li>
<li>shortdelay: respond after a short time;</li>
<li>longdelay: respond after a long wait.</li>
 * @method void setAction(string $Action) Set Penalty action. Valid values:
<li>drop: block;</li>
<li>monitor: observation;</li>
<li>silence: silence;</li>
<li>shortdelay: respond after a short time;</li>
<li>longdelay: respond after a long wait.</li>
 */
class AlgDetectResult extends AbstractModel
{
    /**
     * @var string Check results. Valid values:
<li>invalid: invalid Cookie;</li>
<li>cookie_empty: No cookie carried or the cookie has expired;</li>
<li>js_empty: JS is not enabled on the client (test not completed);</li>
<li>low: low risk in session rate and periodic feature verification;</li>
<li>middle: medium-risk in session rate and periodic feature verification;</li>
<li>high: high-risk session rate and periodic feature verification;</li>
<li>timeout: Timeout duration for detection;</li>
<li>not_browser: invalid browser;</li>
<li>is_bot: Bot Client.</li>
     */
    public $Result;

    /**
     * @var string Penalty action. Valid values:
<li>drop: block;</li>
<li>monitor: observation;</li>
<li>silence: silence;</li>
<li>shortdelay: respond after a short time;</li>
<li>longdelay: respond after a long wait.</li>
     */
    public $Action;

    /**
     * @param string $Result Check results. Valid values:
<li>invalid: invalid Cookie;</li>
<li>cookie_empty: No cookie carried or the cookie has expired;</li>
<li>js_empty: JS is not enabled on the client (test not completed);</li>
<li>low: low risk in session rate and periodic feature verification;</li>
<li>middle: medium-risk in session rate and periodic feature verification;</li>
<li>high: high-risk session rate and periodic feature verification;</li>
<li>timeout: Timeout duration for detection;</li>
<li>not_browser: invalid browser;</li>
<li>is_bot: Bot Client.</li>
     * @param string $Action Penalty action. Valid values:
<li>drop: block;</li>
<li>monitor: observation;</li>
<li>silence: silence;</li>
<li>shortdelay: respond after a short time;</li>
<li>longdelay: respond after a long wait.</li>
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
