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
 * Bot intelligent analysis rule detail
 *
 * @method string getLabel() Obtain Intelligent analysis tag. Valid values:
<li>evil_bot: malicious bot;</li>
<li>suspect_bot: suspected bot;</li>
<li>good_bot: good bot;</li>
<li>normal: Normal request.</li>
 * @method void setLabel(string $Label) Set Intelligent analysis tag. Valid values:
<li>evil_bot: malicious bot;</li>
<li>suspect_bot: suspected bot;</li>
<li>good_bot: good bot;</li>
<li>normal: Normal request.</li>
 * @method string getAction() Obtain Trigger the handling method corresponding to the Intelligent Analysis tag. Valid values:
<li>drop: block;</li>
<li>trans: pass;</li>
<li>alg: Javascript challenge;</li>
<li>captcha: digit verification code;</li>
<li>monitor: observation.</li>
 * @method void setAction(string $Action) Set Trigger the handling method corresponding to the Intelligent Analysis tag. Valid values:
<li>drop: block;</li>
<li>trans: pass;</li>
<li>alg: Javascript challenge;</li>
<li>captcha: digit verification code;</li>
<li>monitor: observation.</li>
 */
class IntelligenceRuleItem extends AbstractModel
{
    /**
     * @var string Intelligent analysis tag. Valid values:
<li>evil_bot: malicious bot;</li>
<li>suspect_bot: suspected bot;</li>
<li>good_bot: good bot;</li>
<li>normal: Normal request.</li>
     */
    public $Label;

    /**
     * @var string Trigger the handling method corresponding to the Intelligent Analysis tag. Valid values:
<li>drop: block;</li>
<li>trans: pass;</li>
<li>alg: Javascript challenge;</li>
<li>captcha: digit verification code;</li>
<li>monitor: observation.</li>
     */
    public $Action;

    /**
     * @param string $Label Intelligent analysis tag. Valid values:
<li>evil_bot: malicious bot;</li>
<li>suspect_bot: suspected bot;</li>
<li>good_bot: good bot;</li>
<li>normal: Normal request.</li>
     * @param string $Action Trigger the handling method corresponding to the Intelligent Analysis tag. Valid values:
<li>drop: block;</li>
<li>trans: pass;</li>
<li>alg: Javascript challenge;</li>
<li>captcha: digit verification code;</li>
<li>monitor: observation.</li>
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
        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }
    }
}
