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
 * Web security configuration.
 *
 * @method WafConfig getWafConfig() Obtain Managed rule. if the parameter is null or not filled, use the last set configuration by default.
 * @method void setWafConfig(WafConfig $WafConfig) Set Managed rule. if the parameter is null or not filled, use the last set configuration by default.
 * @method RateLimitConfig getRateLimitConfig() Obtain Rate limiting. if the parameter is null or not filled, the configuration last set will be used by default.
 * @method void setRateLimitConfig(RateLimitConfig $RateLimitConfig) Set Rate limiting. if the parameter is null or not filled, the configuration last set will be used by default.
 * @method AclConfig getAclConfig() Obtain Custom rule. specifies if the parameter is null or not filled, use the last set configuration by default.
 * @method void setAclConfig(AclConfig $AclConfig) Set Custom rule. specifies if the parameter is null or not filled, use the last set configuration by default.
 * @method BotConfig getBotConfig() Obtain Bot configuration. if the parameter is null or not filled, use the last set configuration by default.
 * @method void setBotConfig(BotConfig $BotConfig) Set Bot configuration. if the parameter is null or not filled, use the last set configuration by default.
 * @method SwitchConfig getSwitchConfig() Obtain Switch setting of the 7-layer protection. if the parameter is null or not filled, use the last set configuration by default.
 * @method void setSwitchConfig(SwitchConfig $SwitchConfig) Set Switch setting of the 7-layer protection. if the parameter is null or not filled, use the last set configuration by default.
 * @method IpTableConfig getIpTableConfig() Obtain Basic access control. if the parameter is null or not filled, use the last set configuration by default.
 * @method void setIpTableConfig(IpTableConfig $IpTableConfig) Set Basic access control. if the parameter is null or not filled, use the last set configuration by default.
 * @method ExceptConfig getExceptConfig() Obtain Exception rule configuration. if the parameter is null or not filled, use the last set configuration by default.
 * @method void setExceptConfig(ExceptConfig $ExceptConfig) Set Exception rule configuration. if the parameter is null or not filled, use the last set configuration by default.
 * @method DropPageConfig getDropPageConfig() Obtain Custom block page settings. if the parameter is null or not filled, use the last set configuration by default.
 * @method void setDropPageConfig(DropPageConfig $DropPageConfig) Set Custom block page settings. if the parameter is null or not filled, use the last set configuration by default.
 * @method TemplateConfig getTemplateConfig() Obtain Template configuration. specifies parameter usage for output only.
 * @method void setTemplateConfig(TemplateConfig $TemplateConfig) Set Template configuration. specifies parameter usage for output only.
 * @method SlowPostConfig getSlowPostConfig() Obtain Slow attack configuration. if the parameter is null or not filled, use the last set configuration by default.
 * @method void setSlowPostConfig(SlowPostConfig $SlowPostConfig) Set Slow attack configuration. if the parameter is null or not filled, use the last set configuration by default.
 * @method DetectLengthLimitConfig getDetectLengthLimitConfig() Obtain Detect length limit configuration. for output usage only.
 * @method void setDetectLengthLimitConfig(DetectLengthLimitConfig $DetectLengthLimitConfig) Set Detect length limit configuration. for output usage only.
 */
class SecurityConfig extends AbstractModel
{
    /**
     * @var WafConfig Managed rule. if the parameter is null or not filled, use the last set configuration by default.
     */
    public $WafConfig;

    /**
     * @var RateLimitConfig Rate limiting. if the parameter is null or not filled, the configuration last set will be used by default.
     */
    public $RateLimitConfig;

    /**
     * @var AclConfig Custom rule. specifies if the parameter is null or not filled, use the last set configuration by default.
     */
    public $AclConfig;

    /**
     * @var BotConfig Bot configuration. if the parameter is null or not filled, use the last set configuration by default.
     */
    public $BotConfig;

    /**
     * @var SwitchConfig Switch setting of the 7-layer protection. if the parameter is null or not filled, use the last set configuration by default.
     */
    public $SwitchConfig;

    /**
     * @var IpTableConfig Basic access control. if the parameter is null or not filled, use the last set configuration by default.
     */
    public $IpTableConfig;

    /**
     * @var ExceptConfig Exception rule configuration. if the parameter is null or not filled, use the last set configuration by default.
     */
    public $ExceptConfig;

    /**
     * @var DropPageConfig Custom block page settings. if the parameter is null or not filled, use the last set configuration by default.
     */
    public $DropPageConfig;

    /**
     * @var TemplateConfig Template configuration. specifies parameter usage for output only.
     */
    public $TemplateConfig;

    /**
     * @var SlowPostConfig Slow attack configuration. if the parameter is null or not filled, use the last set configuration by default.
     */
    public $SlowPostConfig;

    /**
     * @var DetectLengthLimitConfig Detect length limit configuration. for output usage only.
     */
    public $DetectLengthLimitConfig;

    /**
     * @param WafConfig $WafConfig Managed rule. if the parameter is null or not filled, use the last set configuration by default.
     * @param RateLimitConfig $RateLimitConfig Rate limiting. if the parameter is null or not filled, the configuration last set will be used by default.
     * @param AclConfig $AclConfig Custom rule. specifies if the parameter is null or not filled, use the last set configuration by default.
     * @param BotConfig $BotConfig Bot configuration. if the parameter is null or not filled, use the last set configuration by default.
     * @param SwitchConfig $SwitchConfig Switch setting of the 7-layer protection. if the parameter is null or not filled, use the last set configuration by default.
     * @param IpTableConfig $IpTableConfig Basic access control. if the parameter is null or not filled, use the last set configuration by default.
     * @param ExceptConfig $ExceptConfig Exception rule configuration. if the parameter is null or not filled, use the last set configuration by default.
     * @param DropPageConfig $DropPageConfig Custom block page settings. if the parameter is null or not filled, use the last set configuration by default.
     * @param TemplateConfig $TemplateConfig Template configuration. specifies parameter usage for output only.
     * @param SlowPostConfig $SlowPostConfig Slow attack configuration. if the parameter is null or not filled, use the last set configuration by default.
     * @param DetectLengthLimitConfig $DetectLengthLimitConfig Detect length limit configuration. for output usage only.
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
        if (array_key_exists("WafConfig",$param) and $param["WafConfig"] !== null) {
            $this->WafConfig = new WafConfig();
            $this->WafConfig->deserialize($param["WafConfig"]);
        }

        if (array_key_exists("RateLimitConfig",$param) and $param["RateLimitConfig"] !== null) {
            $this->RateLimitConfig = new RateLimitConfig();
            $this->RateLimitConfig->deserialize($param["RateLimitConfig"]);
        }

        if (array_key_exists("AclConfig",$param) and $param["AclConfig"] !== null) {
            $this->AclConfig = new AclConfig();
            $this->AclConfig->deserialize($param["AclConfig"]);
        }

        if (array_key_exists("BotConfig",$param) and $param["BotConfig"] !== null) {
            $this->BotConfig = new BotConfig();
            $this->BotConfig->deserialize($param["BotConfig"]);
        }

        if (array_key_exists("SwitchConfig",$param) and $param["SwitchConfig"] !== null) {
            $this->SwitchConfig = new SwitchConfig();
            $this->SwitchConfig->deserialize($param["SwitchConfig"]);
        }

        if (array_key_exists("IpTableConfig",$param) and $param["IpTableConfig"] !== null) {
            $this->IpTableConfig = new IpTableConfig();
            $this->IpTableConfig->deserialize($param["IpTableConfig"]);
        }

        if (array_key_exists("ExceptConfig",$param) and $param["ExceptConfig"] !== null) {
            $this->ExceptConfig = new ExceptConfig();
            $this->ExceptConfig->deserialize($param["ExceptConfig"]);
        }

        if (array_key_exists("DropPageConfig",$param) and $param["DropPageConfig"] !== null) {
            $this->DropPageConfig = new DropPageConfig();
            $this->DropPageConfig->deserialize($param["DropPageConfig"]);
        }

        if (array_key_exists("TemplateConfig",$param) and $param["TemplateConfig"] !== null) {
            $this->TemplateConfig = new TemplateConfig();
            $this->TemplateConfig->deserialize($param["TemplateConfig"]);
        }

        if (array_key_exists("SlowPostConfig",$param) and $param["SlowPostConfig"] !== null) {
            $this->SlowPostConfig = new SlowPostConfig();
            $this->SlowPostConfig->deserialize($param["SlowPostConfig"]);
        }

        if (array_key_exists("DetectLengthLimitConfig",$param) and $param["DetectLengthLimitConfig"] !== null) {
            $this->DetectLengthLimitConfig = new DetectLengthLimitConfig();
            $this->DetectLengthLimitConfig->deserialize($param["DetectLengthLimitConfig"]);
        }
    }
}
