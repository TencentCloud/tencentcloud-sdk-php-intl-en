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
 * Security configuration
 *
 * @method WafConfig getWafConfig() Obtain WAF configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setWafConfig(WafConfig $WafConfig) Set WAF configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method RateLimitConfig getRateLimitConfig() Obtain Rate limit configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setRateLimitConfig(RateLimitConfig $RateLimitConfig) Set Rate limit configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method DDoSConfig getDdosConfig() Obtain DDoS mitigation configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setDdosConfig(DDoSConfig $DdosConfig) Set DDoS mitigation configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method AclConfig getAclConfig() Obtain ACL configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setAclConfig(AclConfig $AclConfig) Set ACL configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method BotConfig getBotConfig() Obtain Bot configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setBotConfig(BotConfig $BotConfig) Set Bot configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method SwitchConfig getSwitchConfig() Obtain Switch that controls all web security configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setSwitchConfig(SwitchConfig $SwitchConfig) Set Switch that controls all web security configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method IpTableConfig getIpTableConfig() Obtain IP blocklist/allowlist
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIpTableConfig(IpTableConfig $IpTableConfig) Set IP blocklist/allowlist
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SecurityConfig extends AbstractModel
{
    /**
     * @var WafConfig WAF configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $WafConfig;

    /**
     * @var RateLimitConfig Rate limit configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $RateLimitConfig;

    /**
     * @var DDoSConfig DDoS mitigation configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $DdosConfig;

    /**
     * @var AclConfig ACL configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $AclConfig;

    /**
     * @var BotConfig Bot configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $BotConfig;

    /**
     * @var SwitchConfig Switch that controls all web security configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $SwitchConfig;

    /**
     * @var IpTableConfig IP blocklist/allowlist
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IpTableConfig;

    /**
     * @param WafConfig $WafConfig WAF configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param RateLimitConfig $RateLimitConfig Rate limit configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param DDoSConfig $DdosConfig DDoS mitigation configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param AclConfig $AclConfig ACL configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param BotConfig $BotConfig Bot configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param SwitchConfig $SwitchConfig Switch that controls all web security configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param IpTableConfig $IpTableConfig IP blocklist/allowlist
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

        if (array_key_exists("DdosConfig",$param) and $param["DdosConfig"] !== null) {
            $this->DdosConfig = new DDoSConfig();
            $this->DdosConfig->deserialize($param["DdosConfig"]);
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
    }
}
