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
 * Rate limit template
 *
 * @method string getMode() Obtain The mode. Values:
<li>`sup_loose`: Super loose</li>
<li>`loose`: Loose</li>
<li>`emergency`: Emergency</li>
<li>`normal`: Moderate</li>
<li>`strict`: Strict</li>
<li>`close`: Off</li>
 * @method void setMode(string $Mode) Set The mode. Values:
<li>`sup_loose`: Super loose</li>
<li>`loose`: Loose</li>
<li>`emergency`: Emergency</li>
<li>`normal`: Moderate</li>
<li>`strict`: Strict</li>
<li>`close`: Off</li>
 * @method string getAction() Obtain The action. Values:
<li>`alg`: JavaScript challenge</li>
<li>`monitor`: Observe</li>If it is left empty, the default value `alg` is used.
 * @method void setAction(string $Action) Set The action. Values:
<li>`alg`: JavaScript challenge</li>
<li>`monitor`: Observe</li>If it is left empty, the default value `alg` is used.
 * @method RateLimitTemplateDetail getRateLimitTemplateDetail() Obtain The settings of the rate limiting template. It is only used as an output parameter.
 * @method void setRateLimitTemplateDetail(RateLimitTemplateDetail $RateLimitTemplateDetail) Set The settings of the rate limiting template. It is only used as an output parameter.
 */
class RateLimitTemplate extends AbstractModel
{
    /**
     * @var string The mode. Values:
<li>`sup_loose`: Super loose</li>
<li>`loose`: Loose</li>
<li>`emergency`: Emergency</li>
<li>`normal`: Moderate</li>
<li>`strict`: Strict</li>
<li>`close`: Off</li>
     */
    public $Mode;

    /**
     * @var string The action. Values:
<li>`alg`: JavaScript challenge</li>
<li>`monitor`: Observe</li>If it is left empty, the default value `alg` is used.
     */
    public $Action;

    /**
     * @var RateLimitTemplateDetail The settings of the rate limiting template. It is only used as an output parameter.
     */
    public $RateLimitTemplateDetail;

    /**
     * @param string $Mode The mode. Values:
<li>`sup_loose`: Super loose</li>
<li>`loose`: Loose</li>
<li>`emergency`: Emergency</li>
<li>`normal`: Moderate</li>
<li>`strict`: Strict</li>
<li>`close`: Off</li>
     * @param string $Action The action. Values:
<li>`alg`: JavaScript challenge</li>
<li>`monitor`: Observe</li>If it is left empty, the default value `alg` is used.
     * @param RateLimitTemplateDetail $RateLimitTemplateDetail The settings of the rate limiting template. It is only used as an output parameter.
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("RateLimitTemplateDetail",$param) and $param["RateLimitTemplateDetail"] !== null) {
            $this->RateLimitTemplateDetail = new RateLimitTemplateDetail();
            $this->RateLimitTemplateDetail->deserialize($param["RateLimitTemplateDetail"]);
        }
    }
}
