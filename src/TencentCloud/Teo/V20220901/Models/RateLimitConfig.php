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
 * Rate limiting rule
 *
 * @method string getSwitch() Obtain Switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method void setSwitch(string $Switch) Set Switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method array getRateLimitUserRules() Obtain Rate limit - user rule list. If null, use the last set configuration by default.
 * @method void setRateLimitUserRules(array $RateLimitUserRules) Set Rate limit - user rule list. If null, use the last set configuration by default.
 * @method RateLimitTemplate getRateLimitTemplate() Obtain Rate limit template feature. If null, use the last set configuration by default.
 * @method void setRateLimitTemplate(RateLimitTemplate $RateLimitTemplate) Set Rate limit template feature. If null, use the last set configuration by default.
 * @method RateLimitIntelligence getRateLimitIntelligence() Obtain Intelligent client filtering. If it is null, use the last set configuration by default.
 * @method void setRateLimitIntelligence(RateLimitIntelligence $RateLimitIntelligence) Set Intelligent client filtering. If it is null, use the last set configuration by default.
 * @method array getRateLimitCustomizes() Obtain Rate limit - Managed Custom Rules. If null, use the last set configuration by default.
 * @method void setRateLimitCustomizes(array $RateLimitCustomizes) Set Rate limit - Managed Custom Rules. If null, use the last set configuration by default.
 */
class RateLimitConfig extends AbstractModel
{
    /**
     * @var string Switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     */
    public $Switch;

    /**
     * @var array Rate limit - user rule list. If null, use the last set configuration by default.
     */
    public $RateLimitUserRules;

    /**
     * @var RateLimitTemplate Rate limit template feature. If null, use the last set configuration by default.
     */
    public $RateLimitTemplate;

    /**
     * @var RateLimitIntelligence Intelligent client filtering. If it is null, use the last set configuration by default.
     */
    public $RateLimitIntelligence;

    /**
     * @var array Rate limit - Managed Custom Rules. If null, use the last set configuration by default.
     */
    public $RateLimitCustomizes;

    /**
     * @param string $Switch Switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     * @param array $RateLimitUserRules Rate limit - user rule list. If null, use the last set configuration by default.
     * @param RateLimitTemplate $RateLimitTemplate Rate limit template feature. If null, use the last set configuration by default.
     * @param RateLimitIntelligence $RateLimitIntelligence Intelligent client filtering. If it is null, use the last set configuration by default.
     * @param array $RateLimitCustomizes Rate limit - Managed Custom Rules. If null, use the last set configuration by default.
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
