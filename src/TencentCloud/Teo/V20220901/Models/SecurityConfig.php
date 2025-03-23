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
 * Web security configuration.
 *
 * @method WafConfig getWafConfig() Obtain Managed rule. If the parameter is null or not filled, the configuration last set will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setWafConfig(WafConfig $WafConfig) Set Managed rule. If the parameter is null or not filled, the configuration last set will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method RateLimitConfig getRateLimitConfig() Obtain Rate limiting. If the parameter is null or not filled, the configuration last set will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRateLimitConfig(RateLimitConfig $RateLimitConfig) Set Rate limiting. If the parameter is null or not filled, the configuration last set will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method AclConfig getAclConfig() Obtain Custom rule. If the parameter is null or not filled, the configuration last set will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setAclConfig(AclConfig $AclConfig) Set Custom rule. If the parameter is null or not filled, the configuration last set will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method BotConfig getBotConfig() Obtain Bot configuration. If the parameter is null or not filled, the configuration last set will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setBotConfig(BotConfig $BotConfig) Set Bot configuration. If the parameter is null or not filled, the configuration last set will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method SwitchConfig getSwitchConfig() Obtain Switch setting of the 7-layer protection. If the parameter is null or not filled, the configuration last set will be used by default.Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSwitchConfig(SwitchConfig $SwitchConfig) Set Switch setting of the 7-layer protection. If the parameter is null or not filled, the configuration last set will be used by default.Note: This field may return null, indicating that no valid value can be obtained.
 * @method IpTableConfig getIpTableConfig() Obtain Basic access control. If the parameter is null or not filled, the configuration last set will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setIpTableConfig(IpTableConfig $IpTableConfig) Set Basic access control. If the parameter is null or not filled, the configuration last set will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method ExceptConfig getExceptConfig() Obtain Exception rule configuration. If the parameter is null or not filled, the configuration last set will be used by default.Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExceptConfig(ExceptConfig $ExceptConfig) Set Exception rule configuration. If the parameter is null or not filled, the configuration last set will be used by default.Note: This field may return null, indicating that no valid value can be obtained.
 * @method DropPageConfig getDropPageConfig() Obtain Custom block page settings. If the parameter is null or not filled, the configuration last set will be used by default.Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDropPageConfig(DropPageConfig $DropPageConfig) Set Custom block page settings. If the parameter is null or not filled, the configuration last set will be used by default.Note: This field may return null, indicating that no valid value can be obtained.
 * @method TemplateConfig getTemplateConfig() Obtain Security template settings
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setTemplateConfig(TemplateConfig $TemplateConfig) Set Security template settings
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method SlowPostConfig getSlowPostConfig() Obtain Settings for slow attack defense. If the parameter is null or not filled, the configuration last set will be used by default.Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSlowPostConfig(SlowPostConfig $SlowPostConfig) Set Settings for slow attack defense. If the parameter is null or not filled, the configuration last set will be used by default.Note: This field may return null, indicating that no valid value can be obtained.
 * @method DetectLengthLimitConfig getDetectLengthLimitConfig() Obtain Detect the length limit configuration, output parameter only.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method void setDetectLengthLimitConfig(DetectLengthLimitConfig $DetectLengthLimitConfig) Set Detect the length limit configuration, output parameter only.
Note: This field may return null, which indicates a failure to obtain a valid value.
 */
class SecurityConfig extends AbstractModel
{
    /**
     * @var WafConfig Managed rule. If the parameter is null or not filled, the configuration last set will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $WafConfig;

    /**
     * @var RateLimitConfig Rate limiting. If the parameter is null or not filled, the configuration last set will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RateLimitConfig;

    /**
     * @var AclConfig Custom rule. If the parameter is null or not filled, the configuration last set will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $AclConfig;

    /**
     * @var BotConfig Bot configuration. If the parameter is null or not filled, the configuration last set will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $BotConfig;

    /**
     * @var SwitchConfig Switch setting of the 7-layer protection. If the parameter is null or not filled, the configuration last set will be used by default.Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SwitchConfig;

    /**
     * @var IpTableConfig Basic access control. If the parameter is null or not filled, the configuration last set will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $IpTableConfig;

    /**
     * @var ExceptConfig Exception rule configuration. If the parameter is null or not filled, the configuration last set will be used by default.Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExceptConfig;

    /**
     * @var DropPageConfig Custom block page settings. If the parameter is null or not filled, the configuration last set will be used by default.Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DropPageConfig;

    /**
     * @var TemplateConfig Security template settings
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $TemplateConfig;

    /**
     * @var SlowPostConfig Settings for slow attack defense. If the parameter is null or not filled, the configuration last set will be used by default.Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SlowPostConfig;

    /**
     * @var DetectLengthLimitConfig Detect the length limit configuration, output parameter only.
Note: This field may return null, which indicates a failure to obtain a valid value.
     */
    public $DetectLengthLimitConfig;

    /**
     * @param WafConfig $WafConfig Managed rule. If the parameter is null or not filled, the configuration last set will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param RateLimitConfig $RateLimitConfig Rate limiting. If the parameter is null or not filled, the configuration last set will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param AclConfig $AclConfig Custom rule. If the parameter is null or not filled, the configuration last set will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param BotConfig $BotConfig Bot configuration. If the parameter is null or not filled, the configuration last set will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param SwitchConfig $SwitchConfig Switch setting of the 7-layer protection. If the parameter is null or not filled, the configuration last set will be used by default.Note: This field may return null, indicating that no valid value can be obtained.
     * @param IpTableConfig $IpTableConfig Basic access control. If the parameter is null or not filled, the configuration last set will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param ExceptConfig $ExceptConfig Exception rule configuration. If the parameter is null or not filled, the configuration last set will be used by default.Note: This field may return null, indicating that no valid value can be obtained.
     * @param DropPageConfig $DropPageConfig Custom block page settings. If the parameter is null or not filled, the configuration last set will be used by default.Note: This field may return null, indicating that no valid value can be obtained.
     * @param TemplateConfig $TemplateConfig Security template settings
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param SlowPostConfig $SlowPostConfig Settings for slow attack defense. If the parameter is null or not filled, the configuration last set will be used by default.Note: This field may return null, indicating that no valid value can be obtained.
     * @param DetectLengthLimitConfig $DetectLengthLimitConfig Detect the length limit configuration, output parameter only.
Note: This field may return null, which indicates a failure to obtain a valid value.
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
