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
 * Rate limit template
 *
 * @method string getMode() Obtain Template level name. Valid values:
<li>sup_loose: super loose;</li>
<li>loose: loose;</li>
<li>emergency: emergency;</li>
<li>normal: moderate;</li>
<li>strict: strict;</li>
<li>close: disabled, effective only for precise rate limiting.</li>
 * @method void setMode(string $Mode) Set Template level name. Valid values:
<li>sup_loose: super loose;</li>
<li>loose: loose;</li>
<li>emergency: emergency;</li>
<li>normal: moderate;</li>
<li>strict: strict;</li>
<li>close: disabled, effective only for precise rate limiting.</li>
 * @method string getAction() Obtain Template action. Valid values:
<li>alg: JavaScript challenge;</li>
<li>monitor: observe.</li>Default value: alg if not specified.
 * @method void setAction(string $Action) Set Template action. Valid values:
<li>alg: JavaScript challenge;</li>
<li>monitor: observe.</li>Default value: alg if not specified.
 * @method RateLimitTemplateDetail getRateLimitTemplateDetail() Obtain Description of the template value. Returned only as an output parameter.
 * @method void setRateLimitTemplateDetail(RateLimitTemplateDetail $RateLimitTemplateDetail) Set Description of the template value. Returned only as an output parameter.
 */
class RateLimitTemplate extends AbstractModel
{
    /**
     * @var string Template level name. Valid values:
<li>sup_loose: super loose;</li>
<li>loose: loose;</li>
<li>emergency: emergency;</li>
<li>normal: moderate;</li>
<li>strict: strict;</li>
<li>close: disabled, effective only for precise rate limiting.</li>
     */
    public $Mode;

    /**
     * @var string Template action. Valid values:
<li>alg: JavaScript challenge;</li>
<li>monitor: observe.</li>Default value: alg if not specified.
     */
    public $Action;

    /**
     * @var RateLimitTemplateDetail Description of the template value. Returned only as an output parameter.
     */
    public $RateLimitTemplateDetail;

    /**
     * @param string $Mode Template level name. Valid values:
<li>sup_loose: super loose;</li>
<li>loose: loose;</li>
<li>emergency: emergency;</li>
<li>normal: moderate;</li>
<li>strict: strict;</li>
<li>close: disabled, effective only for precise rate limiting.</li>
     * @param string $Action Template action. Valid values:
<li>alg: JavaScript challenge;</li>
<li>monitor: observe.</li>Default value: alg if not specified.
     * @param RateLimitTemplateDetail $RateLimitTemplateDetail Description of the template value. Returned only as an output parameter.
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
