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
 * Bot extension handling method, a composite of multiple disposal actions.
 *
 * @method string getAction() Obtain Disposal actions. Valid values:
<li>monitor: observation;</li>
<li>alg: JavaScript challenge;</li>
<li>captcha: hosted challenge;</li>
<li>random: random, allocate handling actions and proportions according to ExtendActions;</li>
<li>silence: silence;</li>
<li>shortdelay: short-term response;</li>
<li>longdelay: long-time response.</li>
 * @method void setAction(string $Action) Set Disposal actions. Valid values:
<li>monitor: observation;</li>
<li>alg: JavaScript challenge;</li>
<li>captcha: hosted challenge;</li>
<li>random: random, allocate handling actions and proportions according to ExtendActions;</li>
<li>silence: silence;</li>
<li>shortdelay: short-term response;</li>
<li>longdelay: long-time response.</li>
 * @method integer getPercent() Obtain Probability for triggering the handling method. Value range: 0-100.
 * @method void setPercent(integer $Percent) Set Probability for triggering the handling method. Value range: 0-100.
 */
class BotExtendAction extends AbstractModel
{
    /**
     * @var string Disposal actions. Valid values:
<li>monitor: observation;</li>
<li>alg: JavaScript challenge;</li>
<li>captcha: hosted challenge;</li>
<li>random: random, allocate handling actions and proportions according to ExtendActions;</li>
<li>silence: silence;</li>
<li>shortdelay: short-term response;</li>
<li>longdelay: long-time response.</li>
     */
    public $Action;

    /**
     * @var integer Probability for triggering the handling method. Value range: 0-100.
     */
    public $Percent;

    /**
     * @param string $Action Disposal actions. Valid values:
<li>monitor: observation;</li>
<li>alg: JavaScript challenge;</li>
<li>captcha: hosted challenge;</li>
<li>random: random, allocate handling actions and proportions according to ExtendActions;</li>
<li>silence: silence;</li>
<li>shortdelay: short-term response;</li>
<li>longdelay: long-time response.</li>
     * @param integer $Percent Probability for triggering the handling method. Value range: 0-100.
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

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }
    }
}
