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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rate limit configuration
 *
 * @method string getSwitch() Obtain Switch
 * @method void setSwitch(string $Switch) Set Switch
 * @method array getUserRules() Obtain Rate limit rule
 * @method void setUserRules(array $UserRules) Set Rate limit rule
 * @method RateLimitTemplate getTemplate() Obtain Default template
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setTemplate(RateLimitTemplate $Template) Set Default template
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method RateLimitIntelligence getIntelligence() Obtain Client filtering
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIntelligence(RateLimitIntelligence $Intelligence) Set Client filtering
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RateLimitConfig extends AbstractModel
{
    /**
     * @var string Switch
     */
    public $Switch;

    /**
     * @var array Rate limit rule
     */
    public $UserRules;

    /**
     * @var RateLimitTemplate Default template
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Template;

    /**
     * @var RateLimitIntelligence Client filtering
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Intelligence;

    /**
     * @param string $Switch Switch
     * @param array $UserRules Rate limit rule
     * @param RateLimitTemplate $Template Default template
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param RateLimitIntelligence $Intelligence Client filtering
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("UserRules",$param) and $param["UserRules"] !== null) {
            $this->UserRules = [];
            foreach ($param["UserRules"] as $key => $value){
                $obj = new RateLimitUserRule();
                $obj->deserialize($value);
                array_push($this->UserRules, $obj);
            }
        }

        if (array_key_exists("Template",$param) and $param["Template"] !== null) {
            $this->Template = new RateLimitTemplate();
            $this->Template->deserialize($param["Template"]);
        }

        if (array_key_exists("Intelligence",$param) and $param["Intelligence"] !== null) {
            $this->Intelligence = new RateLimitIntelligence();
            $this->Intelligence->deserialize($param["Intelligence"]);
        }
    }
}
