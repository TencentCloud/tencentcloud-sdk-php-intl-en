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
 * Web security policy.
 *
 * @method CustomRules getCustomRules() Obtain Custom rules. If the parameter is null or not filled, the configuration last set will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCustomRules(CustomRules $CustomRules) Set Custom rules. If the parameter is null or not filled, the configuration last set will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method ManagedRules getManagedRules() Obtain Managed. If the parameter is null or not filled, the configuration last set will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setManagedRules(ManagedRules $ManagedRules) Set Managed. If the parameter is null or not filled, the configuration last set will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method HttpDDoSProtection getHttpDDoSProtection() Obtain HTTP DDOS protection configuration.
 * @method void setHttpDDoSProtection(HttpDDoSProtection $HttpDDoSProtection) Set HTTP DDOS protection configuration.
 * @method RateLimitingRules getRateLimitingRules() Obtain Configures the rate limiting rule.
 * @method void setRateLimitingRules(RateLimitingRules $RateLimitingRules) Set Configures the rate limiting rule.
 * @method ExceptionRules getExceptionRules() Obtain Exception rule configuration.
 * @method void setExceptionRules(ExceptionRules $ExceptionRules) Set Exception rule configuration.
 * @method BotManagement getBotManagement() Obtain Bot management configuration.
 * @method void setBotManagement(BotManagement $BotManagement) Set Bot management configuration.
 */
class SecurityPolicy extends AbstractModel
{
    /**
     * @var CustomRules Custom rules. If the parameter is null or not filled, the configuration last set will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CustomRules;

    /**
     * @var ManagedRules Managed. If the parameter is null or not filled, the configuration last set will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ManagedRules;

    /**
     * @var HttpDDoSProtection HTTP DDOS protection configuration.
     */
    public $HttpDDoSProtection;

    /**
     * @var RateLimitingRules Configures the rate limiting rule.
     */
    public $RateLimitingRules;

    /**
     * @var ExceptionRules Exception rule configuration.
     */
    public $ExceptionRules;

    /**
     * @var BotManagement Bot management configuration.
     */
    public $BotManagement;

    /**
     * @param CustomRules $CustomRules Custom rules. If the parameter is null or not filled, the configuration last set will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param ManagedRules $ManagedRules Managed. If the parameter is null or not filled, the configuration last set will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param HttpDDoSProtection $HttpDDoSProtection HTTP DDOS protection configuration.
     * @param RateLimitingRules $RateLimitingRules Configures the rate limiting rule.
     * @param ExceptionRules $ExceptionRules Exception rule configuration.
     * @param BotManagement $BotManagement Bot management configuration.
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
        if (array_key_exists("CustomRules",$param) and $param["CustomRules"] !== null) {
            $this->CustomRules = new CustomRules();
            $this->CustomRules->deserialize($param["CustomRules"]);
        }

        if (array_key_exists("ManagedRules",$param) and $param["ManagedRules"] !== null) {
            $this->ManagedRules = new ManagedRules();
            $this->ManagedRules->deserialize($param["ManagedRules"]);
        }

        if (array_key_exists("HttpDDoSProtection",$param) and $param["HttpDDoSProtection"] !== null) {
            $this->HttpDDoSProtection = new HttpDDoSProtection();
            $this->HttpDDoSProtection->deserialize($param["HttpDDoSProtection"]);
        }

        if (array_key_exists("RateLimitingRules",$param) and $param["RateLimitingRules"] !== null) {
            $this->RateLimitingRules = new RateLimitingRules();
            $this->RateLimitingRules->deserialize($param["RateLimitingRules"]);
        }

        if (array_key_exists("ExceptionRules",$param) and $param["ExceptionRules"] !== null) {
            $this->ExceptionRules = new ExceptionRules();
            $this->ExceptionRules->deserialize($param["ExceptionRules"]);
        }

        if (array_key_exists("BotManagement",$param) and $param["BotManagement"] !== null) {
            $this->BotManagement = new BotManagement();
            $this->BotManagement->deserialize($param["BotManagement"]);
        }
    }
}
