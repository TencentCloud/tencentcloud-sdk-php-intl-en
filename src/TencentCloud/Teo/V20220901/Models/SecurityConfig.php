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
 * Security configuration
 *
 * @method WafConfig getWafConfig() Obtain The settings of the managed rule. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWafConfig(WafConfig $WafConfig) Set The settings of the managed rule. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method RateLimitConfig getRateLimitConfig() Obtain The settings of the rate limiting rule. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRateLimitConfig(RateLimitConfig $RateLimitConfig) Set The settings of the rate limiting rule. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AclConfig getAclConfig() Obtain The settings of the custom rule. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAclConfig(AclConfig $AclConfig) Set The settings of the custom rule. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method BotConfig getBotConfig() Obtain The settings of the bot configuration. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBotConfig(BotConfig $BotConfig) Set The settings of the bot configuration. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method SwitchConfig getSwitchConfig() Obtain The switch setting of the layer-7 protection. If it is null, the setting that was last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSwitchConfig(SwitchConfig $SwitchConfig) Set The switch setting of the layer-7 protection. If it is null, the setting that was last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method IpTableConfig getIpTableConfig() Obtain The settings of the basic access control rule. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIpTableConfig(IpTableConfig $IpTableConfig) Set The settings of the basic access control rule. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ExceptConfig getExceptConfig() Obtain The settings of the exception rule. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExceptConfig(ExceptConfig $ExceptConfig) Set The settings of the exception rule. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method DropPageConfig getDropPageConfig() Obtain The settings of the custom block page. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDropPageConfig(DropPageConfig $DropPageConfig) Set The settings of the custom block page. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SecurityConfig extends AbstractModel
{
    /**
     * @var WafConfig The settings of the managed rule. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WafConfig;

    /**
     * @var RateLimitConfig The settings of the rate limiting rule. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RateLimitConfig;

    /**
     * @var AclConfig The settings of the custom rule. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AclConfig;

    /**
     * @var BotConfig The settings of the bot configuration. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BotConfig;

    /**
     * @var SwitchConfig The switch setting of the layer-7 protection. If it is null, the setting that was last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SwitchConfig;

    /**
     * @var IpTableConfig The settings of the basic access control rule. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IpTableConfig;

    /**
     * @var ExceptConfig The settings of the exception rule. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExceptConfig;

    /**
     * @var DropPageConfig The settings of the custom block page. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DropPageConfig;

    /**
     * @param WafConfig $WafConfig The settings of the managed rule. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param RateLimitConfig $RateLimitConfig The settings of the rate limiting rule. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AclConfig $AclConfig The settings of the custom rule. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param BotConfig $BotConfig The settings of the bot configuration. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param SwitchConfig $SwitchConfig The switch setting of the layer-7 protection. If it is null, the setting that was last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param IpTableConfig $IpTableConfig The settings of the basic access control rule. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ExceptConfig $ExceptConfig The settings of the exception rule. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param DropPageConfig $DropPageConfig The settings of the custom block page. If it is null, the settings that were last configured will be used.
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
    }
}
