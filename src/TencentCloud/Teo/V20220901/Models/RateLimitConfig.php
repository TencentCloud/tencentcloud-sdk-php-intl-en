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
 * Rate limiting rules
 *
 * @method string getSwitch() Obtain Switch. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method void setSwitch(string $Switch) Set Switch. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method array getRateLimitUserRules() Obtain The settings of the custom rate limiting rule. If it is null, the settings that were last configured will be used.
 * @method void setRateLimitUserRules(array $RateLimitUserRules) Set The settings of the custom rate limiting rule. If it is null, the settings that were last configured will be used.
 * @method RateLimitTemplate getRateLimitTemplate() Obtain The rate limit template feature. if null, use the last set configuration by default.
 * @method void setRateLimitTemplate(RateLimitTemplate $RateLimitTemplate) Set The rate limit template feature. if null, use the last set configuration by default.
 * @method RateLimitIntelligence getRateLimitIntelligence() Obtain Intelligent client filtering. if null, use the last set configuration by default.
 * @method void setRateLimitIntelligence(RateLimitIntelligence $RateLimitIntelligence) Set Intelligent client filtering. if null, use the last set configuration by default.
 * @method array getRateLimitCustomizes() Obtain The custom rate limiting rules. if it is `null`, the previous settings is used.
 * @method void setRateLimitCustomizes(array $RateLimitCustomizes) Set The custom rate limiting rules. if it is `null`, the previous settings is used.
 */
class RateLimitConfig extends AbstractModel
{
    /**
     * @var string Switch. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
     */
    public $Switch;

    /**
     * @var array The settings of the custom rate limiting rule. If it is null, the settings that were last configured will be used.
     */
    public $RateLimitUserRules;

    /**
     * @var RateLimitTemplate The rate limit template feature. if null, use the last set configuration by default.
     */
    public $RateLimitTemplate;

    /**
     * @var RateLimitIntelligence Intelligent client filtering. if null, use the last set configuration by default.
     */
    public $RateLimitIntelligence;

    /**
     * @var array The custom rate limiting rules. if it is `null`, the previous settings is used.
     */
    public $RateLimitCustomizes;

    /**
     * @param string $Switch Switch. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
     * @param array $RateLimitUserRules The settings of the custom rate limiting rule. If it is null, the settings that were last configured will be used.
     * @param RateLimitTemplate $RateLimitTemplate The rate limit template feature. if null, use the last set configuration by default.
     * @param RateLimitIntelligence $RateLimitIntelligence Intelligent client filtering. if null, use the last set configuration by default.
     * @param array $RateLimitCustomizes The custom rate limiting rules. if it is `null`, the previous settings is used.
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

        if (array_key_exists("RateLimitUserRules",$param) and $param["RateLimitUserRules"] !== null) {
            $this->RateLimitUserRules = [];
            foreach ($param["RateLimitUserRules"] as $key => $value){
                $obj = new RateLimitUserRule();
                $obj->deserialize($value);
                array_push($this->RateLimitUserRules, $obj);
            }
        }

        if (array_key_exists("RateLimitTemplate",$param) and $param["RateLimitTemplate"] !== null) {
            $this->RateLimitTemplate = new RateLimitTemplate();
            $this->RateLimitTemplate->deserialize($param["RateLimitTemplate"]);
        }

        if (array_key_exists("RateLimitIntelligence",$param) and $param["RateLimitIntelligence"] !== null) {
            $this->RateLimitIntelligence = new RateLimitIntelligence();
            $this->RateLimitIntelligence->deserialize($param["RateLimitIntelligence"]);
        }

        if (array_key_exists("RateLimitCustomizes",$param) and $param["RateLimitCustomizes"] !== null) {
            $this->RateLimitCustomizes = [];
            foreach ($param["RateLimitCustomizes"] as $key => $value){
                $obj = new RateLimitUserRule();
                $obj->deserialize($value);
                array_push($this->RateLimitCustomizes, $obj);
            }
        }
    }
}
