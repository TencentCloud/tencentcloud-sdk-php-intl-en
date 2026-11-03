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
 * Security policy configuration.
 *
 * @method CustomRules getCustomRules() Obtain <p>Custom rule configuration.</p>
 * @method void setCustomRules(CustomRules $CustomRules) Set <p>Custom rule configuration.</p>
 * @method ManagedRules getManagedRules() Obtain <p>Managed rule configuration.</p>
 * @method void setManagedRules(ManagedRules $ManagedRules) Set <p>Managed rule configuration.</p>
 * @method HttpDDoSProtection getHttpDDoSProtection() Obtain <p>HTTP DDoS protection configuration.</p>
 * @method void setHttpDDoSProtection(HttpDDoSProtection $HttpDDoSProtection) Set <p>HTTP DDoS protection configuration.</p>
 * @method RateLimitingRules getRateLimitingRules() Obtain <p>Rate limiting rule configuration.</p>
 * @method void setRateLimitingRules(RateLimitingRules $RateLimitingRules) Set <p>Rate limiting rule configuration.</p>
 * @method ExceptionRules getExceptionRules() Obtain <p>Exception rule configuration.</p>
 * @method void setExceptionRules(ExceptionRules $ExceptionRules) Set <p>Exception rule configuration.</p>
 * @method BotManagement getBotManagement() Obtain <p>Bot management configuration.</p>
 * @method void setBotManagement(BotManagement $BotManagement) Set <p>Bot management configuration.</p>
 * @method BotManagementLite getBotManagementLite() Obtain <p>Basic Bot management configuration.</p>
 * @method void setBotManagementLite(BotManagementLite $BotManagementLite) Set <p>Basic Bot management configuration.</p>
 * @method DefaultDenySecurityActionParameters getDefaultDenySecurityActionParameters() Obtain <p>Default block action configuration.</p>
 * @method void setDefaultDenySecurityActionParameters(DefaultDenySecurityActionParameters $DefaultDenySecurityActionParameters) Set <p>Default block action configuration.</p>
 * @method SecurityHeadersToOrigin getSecurityHeadersToOrigin() Obtain <p>Security headers to include in requests to the origin. After the configuration takes effect, request headers with the corresponding `keyname` will be sent to the origin.</p>
 * @method void setSecurityHeadersToOrigin(SecurityHeadersToOrigin $SecurityHeadersToOrigin) Set <p>Security headers to include in requests to the origin. After the configuration takes effect, request headers with the corresponding `keyname` will be sent to the origin.</p>
 */
class SecurityPolicy extends AbstractModel
{
    /**
     * @var CustomRules <p>Custom rule configuration.</p>
     */
    public $CustomRules;

    /**
     * @var ManagedRules <p>Managed rule configuration.</p>
     */
    public $ManagedRules;

    /**
     * @var HttpDDoSProtection <p>HTTP DDoS protection configuration.</p>
     */
    public $HttpDDoSProtection;

    /**
     * @var RateLimitingRules <p>Rate limiting rule configuration.</p>
     */
    public $RateLimitingRules;

    /**
     * @var ExceptionRules <p>Exception rule configuration.</p>
     */
    public $ExceptionRules;

    /**
     * @var BotManagement <p>Bot management configuration.</p>
     */
    public $BotManagement;

    /**
     * @var BotManagementLite <p>Basic Bot management configuration.</p>
     */
    public $BotManagementLite;

    /**
     * @var DefaultDenySecurityActionParameters <p>Default block action configuration.</p>
     */
    public $DefaultDenySecurityActionParameters;

    /**
     * @var SecurityHeadersToOrigin <p>Security headers to include in requests to the origin. After the configuration takes effect, request headers with the corresponding `keyname` will be sent to the origin.</p>
     */
    public $SecurityHeadersToOrigin;

    /**
     * @param CustomRules $CustomRules <p>Custom rule configuration.</p>
     * @param ManagedRules $ManagedRules <p>Managed rule configuration.</p>
     * @param HttpDDoSProtection $HttpDDoSProtection <p>HTTP DDoS protection configuration.</p>
     * @param RateLimitingRules $RateLimitingRules <p>Rate limiting rule configuration.</p>
     * @param ExceptionRules $ExceptionRules <p>Exception rule configuration.</p>
     * @param BotManagement $BotManagement <p>Bot management configuration.</p>
     * @param BotManagementLite $BotManagementLite <p>Basic Bot management configuration.</p>
     * @param DefaultDenySecurityActionParameters $DefaultDenySecurityActionParameters <p>Default block action configuration.</p>
     * @param SecurityHeadersToOrigin $SecurityHeadersToOrigin <p>Security headers to include in requests to the origin. After the configuration takes effect, request headers with the corresponding `keyname` will be sent to the origin.</p>
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

        if (array_key_exists("BotManagementLite",$param) and $param["BotManagementLite"] !== null) {
            $this->BotManagementLite = new BotManagementLite();
            $this->BotManagementLite->deserialize($param["BotManagementLite"]);
        }

        if (array_key_exists("DefaultDenySecurityActionParameters",$param) and $param["DefaultDenySecurityActionParameters"] !== null) {
            $this->DefaultDenySecurityActionParameters = new DefaultDenySecurityActionParameters();
            $this->DefaultDenySecurityActionParameters->deserialize($param["DefaultDenySecurityActionParameters"]);
        }

        if (array_key_exists("SecurityHeadersToOrigin",$param) and $param["SecurityHeadersToOrigin"] !== null) {
            $this->SecurityHeadersToOrigin = new SecurityHeadersToOrigin();
            $this->SecurityHeadersToOrigin->deserialize($param["SecurityHeadersToOrigin"]);
        }
    }
}
