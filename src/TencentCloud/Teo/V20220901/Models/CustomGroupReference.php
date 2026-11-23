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
 * Security module that references the custom group
 *
 * @method string getZoneId() Obtain <p>Site ID.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Site ID.</p>
 * @method string getEntityType() Obtain <p>Entity type.</p><p>Valid values:</p><ul><li>WebSec.ZonePolicy: Site-level protection policy</li><li>WebSec.HostPolicy: Domain-level protection policy</li><li>WebSec.Template: Policy template</li><li>WebSec.APIResource: API resource</li><li>WebSec.JSInjectionRule: Injection rule</li><li>DDoS.L4Proxy: Layer-4 proxy DDoS protection</li><li>DDoS.L3Transit: Layer-3 transit DDoS protection</li></ul>
 * @method void setEntityType(string $EntityType) Set <p>Entity type.</p><p>Valid values:</p><ul><li>WebSec.ZonePolicy: Site-level protection policy</li><li>WebSec.HostPolicy: Domain-level protection policy</li><li>WebSec.Template: Policy template</li><li>WebSec.APIResource: API resource</li><li>WebSec.JSInjectionRule: Injection rule</li><li>DDoS.L4Proxy: Layer-4 proxy DDoS protection</li><li>DDoS.L3Transit: Layer-3 transit DDoS protection</li></ul>
 * @method string getEntityId() Obtain <p>Entity identifier, which has different meanings depending on EntityType:</p><ul><li>WebSec.ZonePolicy: Site ID</li><li>WebSec.HostPolicy: Domain</li><li>WebSec.Template: Template ID</li><li>WebSec.APIResource: API resource ID</li><li>WebSec.JSInjectionRule: JavaScript injection rule ID</li><li>DDoS.L4Proxy: Instance ID</li><li>DDoS.L3Transit: Instance ID</li></ul>
 * @method void setEntityId(string $EntityId) Set <p>Entity identifier, which has different meanings depending on EntityType:</p><ul><li>WebSec.ZonePolicy: Site ID</li><li>WebSec.HostPolicy: Domain</li><li>WebSec.Template: Template ID</li><li>WebSec.APIResource: API resource ID</li><li>WebSec.JSInjectionRule: JavaScript injection rule ID</li><li>DDoS.L4Proxy: Instance ID</li><li>DDoS.L3Transit: Instance ID</li></ul>
 * @method string getEntityName() Obtain <p>Entity identifier, which has different meanings depending on EntityType:</p><ul><li>WebSec.ZonePolicy: Empty</li><li>WebSec.HostPolicy: Empty</li><li>WebSec.Template: Template name</li><li>WebSec.APIResource: API resource name</li><li>WebSec.JSInjectionRule: JavaScript injection rule name</li><li>DDoS.L4Proxy: Empty</li><li>DDoS.L3Transit: Empty</li></ul>
 * @method void setEntityName(string $EntityName) Set <p>Entity identifier, which has different meanings depending on EntityType:</p><ul><li>WebSec.ZonePolicy: Empty</li><li>WebSec.HostPolicy: Empty</li><li>WebSec.Template: Template name</li><li>WebSec.APIResource: API resource name</li><li>WebSec.JSInjectionRule: JavaScript injection rule name</li><li>DDoS.L4Proxy: Empty</li><li>DDoS.L3Transit: Empty</li></ul>
 * @method string getSubEntityType() Obtain <p>Sub-entity type.</p><p>Valid values:</p><ul><li>WebSec.ExceptionRule: Protection exception rule</li><li>WebSec.BasicAccessRule: Basic access control</li><li>WebSec.PreciseMatchRule: Precise match rule</li><li>WebSec.RateLimitRule: Precise rate limiting</li><li>WebSec.BotCustomRule: Advanced Bot management - Custom rule</li><li>DDoS.L4Proxy.IpAccessControl: Layer-4 proxy DDoS protection - IP allowlist/blocklist</li><li>DDoS.L3Transit.IpAccessControl: Layer-3 transit DDoS protection - IP allowlist/blocklist</li></ul>
 * @method void setSubEntityType(string $SubEntityType) Set <p>Sub-entity type.</p><p>Valid values:</p><ul><li>WebSec.ExceptionRule: Protection exception rule</li><li>WebSec.BasicAccessRule: Basic access control</li><li>WebSec.PreciseMatchRule: Precise match rule</li><li>WebSec.RateLimitRule: Precise rate limiting</li><li>WebSec.BotCustomRule: Advanced Bot management - Custom rule</li><li>DDoS.L4Proxy.IpAccessControl: Layer-4 proxy DDoS protection - IP allowlist/blocklist</li><li>DDoS.L3Transit.IpAccessControl: Layer-3 transit DDoS protection - IP allowlist/blocklist</li></ul>
 * @method string getSubEntityId() Obtain <p>Sub-entity identifier, which has different meanings depending on SubEntityType:</p><ul><li>WebSec.ExceptionRule: Rule ID</li><li>WebSec.BasicAccessRule: Rule ID</li><li>WebSec.PreciseMatchRule: Rule ID</li><li>WebSec.RateLimitRule: Rule ID</li><li>WebSec.BotCustomRule: Rule ID</li><li>DDoS.L4Proxy.IpAccessControl: Empty</li><li>DDoS.L3Transit.IpAccessControl: Empty</li></ul><p>EntityType and SubEntityType are in a mapping relationship. Different EntityTypes support different SubEntityTypes.<br>WebSec.ZonePolicy, WebSec.HostPolicy, and WebSec.Template support the following SubEntityTypes:</p><ul><li>WebSec.ExceptionRule</li><li>WebSec.BasicAccessRule</li><li>WebSec.PreciseMatchRule</li><li>WebSec.RateLimitRule</li><li>WebSec.BotCustomRule</li></ul>DDoS.L4Proxy supports the following SubEntityType:<ul><li>DDoS.L4Proxy.IpAccessControl</li></ul>DDoS.L3Transit supports the following SubEntityType:<ul><li>DDoS.L3Transit.IpAccessControl</li></ul>
 * @method void setSubEntityId(string $SubEntityId) Set <p>Sub-entity identifier, which has different meanings depending on SubEntityType:</p><ul><li>WebSec.ExceptionRule: Rule ID</li><li>WebSec.BasicAccessRule: Rule ID</li><li>WebSec.PreciseMatchRule: Rule ID</li><li>WebSec.RateLimitRule: Rule ID</li><li>WebSec.BotCustomRule: Rule ID</li><li>DDoS.L4Proxy.IpAccessControl: Empty</li><li>DDoS.L3Transit.IpAccessControl: Empty</li></ul><p>EntityType and SubEntityType are in a mapping relationship. Different EntityTypes support different SubEntityTypes.<br>WebSec.ZonePolicy, WebSec.HostPolicy, and WebSec.Template support the following SubEntityTypes:</p><ul><li>WebSec.ExceptionRule</li><li>WebSec.BasicAccessRule</li><li>WebSec.PreciseMatchRule</li><li>WebSec.RateLimitRule</li><li>WebSec.BotCustomRule</li></ul>DDoS.L4Proxy supports the following SubEntityType:<ul><li>DDoS.L4Proxy.IpAccessControl</li></ul>DDoS.L3Transit supports the following SubEntityType:<ul><li>DDoS.L3Transit.IpAccessControl</li></ul>
 * @method string getSubEntityName() Obtain <p>Sub-entity name, which has different meanings depending on SubEntityType:</p><ul><li>WebSec.ExceptionRule: Rule name</li><li>WebSec.BasicAccessRule: Rule name</li><li>WebSec.PreciseMatchRule: Rule name</li><li>WebSec.RateLimitRule: Rule name</li><li>WebSec.BotCustomRule: Rule name</li><li>DDoS.L4Proxy.IpAccessControl: Empty</li><li>DDoS.L3Transit.IpAccessControl: Empty</li></ul>
 * @method void setSubEntityName(string $SubEntityName) Set <p>Sub-entity name, which has different meanings depending on SubEntityType:</p><ul><li>WebSec.ExceptionRule: Rule name</li><li>WebSec.BasicAccessRule: Rule name</li><li>WebSec.PreciseMatchRule: Rule name</li><li>WebSec.RateLimitRule: Rule name</li><li>WebSec.BotCustomRule: Rule name</li><li>DDoS.L4Proxy.IpAccessControl: Empty</li><li>DDoS.L3Transit.IpAccessControl: Empty</li></ul>
 */
class CustomGroupReference extends AbstractModel
{
    /**
     * @var string <p>Site ID.</p>
     */
    public $ZoneId;

    /**
     * @var string <p>Entity type.</p><p>Valid values:</p><ul><li>WebSec.ZonePolicy: Site-level protection policy</li><li>WebSec.HostPolicy: Domain-level protection policy</li><li>WebSec.Template: Policy template</li><li>WebSec.APIResource: API resource</li><li>WebSec.JSInjectionRule: Injection rule</li><li>DDoS.L4Proxy: Layer-4 proxy DDoS protection</li><li>DDoS.L3Transit: Layer-3 transit DDoS protection</li></ul>
     */
    public $EntityType;

    /**
     * @var string <p>Entity identifier, which has different meanings depending on EntityType:</p><ul><li>WebSec.ZonePolicy: Site ID</li><li>WebSec.HostPolicy: Domain</li><li>WebSec.Template: Template ID</li><li>WebSec.APIResource: API resource ID</li><li>WebSec.JSInjectionRule: JavaScript injection rule ID</li><li>DDoS.L4Proxy: Instance ID</li><li>DDoS.L3Transit: Instance ID</li></ul>
     */
    public $EntityId;

    /**
     * @var string <p>Entity identifier, which has different meanings depending on EntityType:</p><ul><li>WebSec.ZonePolicy: Empty</li><li>WebSec.HostPolicy: Empty</li><li>WebSec.Template: Template name</li><li>WebSec.APIResource: API resource name</li><li>WebSec.JSInjectionRule: JavaScript injection rule name</li><li>DDoS.L4Proxy: Empty</li><li>DDoS.L3Transit: Empty</li></ul>
     */
    public $EntityName;

    /**
     * @var string <p>Sub-entity type.</p><p>Valid values:</p><ul><li>WebSec.ExceptionRule: Protection exception rule</li><li>WebSec.BasicAccessRule: Basic access control</li><li>WebSec.PreciseMatchRule: Precise match rule</li><li>WebSec.RateLimitRule: Precise rate limiting</li><li>WebSec.BotCustomRule: Advanced Bot management - Custom rule</li><li>DDoS.L4Proxy.IpAccessControl: Layer-4 proxy DDoS protection - IP allowlist/blocklist</li><li>DDoS.L3Transit.IpAccessControl: Layer-3 transit DDoS protection - IP allowlist/blocklist</li></ul>
     */
    public $SubEntityType;

    /**
     * @var string <p>Sub-entity identifier, which has different meanings depending on SubEntityType:</p><ul><li>WebSec.ExceptionRule: Rule ID</li><li>WebSec.BasicAccessRule: Rule ID</li><li>WebSec.PreciseMatchRule: Rule ID</li><li>WebSec.RateLimitRule: Rule ID</li><li>WebSec.BotCustomRule: Rule ID</li><li>DDoS.L4Proxy.IpAccessControl: Empty</li><li>DDoS.L3Transit.IpAccessControl: Empty</li></ul><p>EntityType and SubEntityType are in a mapping relationship. Different EntityTypes support different SubEntityTypes.<br>WebSec.ZonePolicy, WebSec.HostPolicy, and WebSec.Template support the following SubEntityTypes:</p><ul><li>WebSec.ExceptionRule</li><li>WebSec.BasicAccessRule</li><li>WebSec.PreciseMatchRule</li><li>WebSec.RateLimitRule</li><li>WebSec.BotCustomRule</li></ul>DDoS.L4Proxy supports the following SubEntityType:<ul><li>DDoS.L4Proxy.IpAccessControl</li></ul>DDoS.L3Transit supports the following SubEntityType:<ul><li>DDoS.L3Transit.IpAccessControl</li></ul>
     */
    public $SubEntityId;

    /**
     * @var string <p>Sub-entity name, which has different meanings depending on SubEntityType:</p><ul><li>WebSec.ExceptionRule: Rule name</li><li>WebSec.BasicAccessRule: Rule name</li><li>WebSec.PreciseMatchRule: Rule name</li><li>WebSec.RateLimitRule: Rule name</li><li>WebSec.BotCustomRule: Rule name</li><li>DDoS.L4Proxy.IpAccessControl: Empty</li><li>DDoS.L3Transit.IpAccessControl: Empty</li></ul>
     */
    public $SubEntityName;

    /**
     * @param string $ZoneId <p>Site ID.</p>
     * @param string $EntityType <p>Entity type.</p><p>Valid values:</p><ul><li>WebSec.ZonePolicy: Site-level protection policy</li><li>WebSec.HostPolicy: Domain-level protection policy</li><li>WebSec.Template: Policy template</li><li>WebSec.APIResource: API resource</li><li>WebSec.JSInjectionRule: Injection rule</li><li>DDoS.L4Proxy: Layer-4 proxy DDoS protection</li><li>DDoS.L3Transit: Layer-3 transit DDoS protection</li></ul>
     * @param string $EntityId <p>Entity identifier, which has different meanings depending on EntityType:</p><ul><li>WebSec.ZonePolicy: Site ID</li><li>WebSec.HostPolicy: Domain</li><li>WebSec.Template: Template ID</li><li>WebSec.APIResource: API resource ID</li><li>WebSec.JSInjectionRule: JavaScript injection rule ID</li><li>DDoS.L4Proxy: Instance ID</li><li>DDoS.L3Transit: Instance ID</li></ul>
     * @param string $EntityName <p>Entity identifier, which has different meanings depending on EntityType:</p><ul><li>WebSec.ZonePolicy: Empty</li><li>WebSec.HostPolicy: Empty</li><li>WebSec.Template: Template name</li><li>WebSec.APIResource: API resource name</li><li>WebSec.JSInjectionRule: JavaScript injection rule name</li><li>DDoS.L4Proxy: Empty</li><li>DDoS.L3Transit: Empty</li></ul>
     * @param string $SubEntityType <p>Sub-entity type.</p><p>Valid values:</p><ul><li>WebSec.ExceptionRule: Protection exception rule</li><li>WebSec.BasicAccessRule: Basic access control</li><li>WebSec.PreciseMatchRule: Precise match rule</li><li>WebSec.RateLimitRule: Precise rate limiting</li><li>WebSec.BotCustomRule: Advanced Bot management - Custom rule</li><li>DDoS.L4Proxy.IpAccessControl: Layer-4 proxy DDoS protection - IP allowlist/blocklist</li><li>DDoS.L3Transit.IpAccessControl: Layer-3 transit DDoS protection - IP allowlist/blocklist</li></ul>
     * @param string $SubEntityId <p>Sub-entity identifier, which has different meanings depending on SubEntityType:</p><ul><li>WebSec.ExceptionRule: Rule ID</li><li>WebSec.BasicAccessRule: Rule ID</li><li>WebSec.PreciseMatchRule: Rule ID</li><li>WebSec.RateLimitRule: Rule ID</li><li>WebSec.BotCustomRule: Rule ID</li><li>DDoS.L4Proxy.IpAccessControl: Empty</li><li>DDoS.L3Transit.IpAccessControl: Empty</li></ul><p>EntityType and SubEntityType are in a mapping relationship. Different EntityTypes support different SubEntityTypes.<br>WebSec.ZonePolicy, WebSec.HostPolicy, and WebSec.Template support the following SubEntityTypes:</p><ul><li>WebSec.ExceptionRule</li><li>WebSec.BasicAccessRule</li><li>WebSec.PreciseMatchRule</li><li>WebSec.RateLimitRule</li><li>WebSec.BotCustomRule</li></ul>DDoS.L4Proxy supports the following SubEntityType:<ul><li>DDoS.L4Proxy.IpAccessControl</li></ul>DDoS.L3Transit supports the following SubEntityType:<ul><li>DDoS.L3Transit.IpAccessControl</li></ul>
     * @param string $SubEntityName <p>Sub-entity name, which has different meanings depending on SubEntityType:</p><ul><li>WebSec.ExceptionRule: Rule name</li><li>WebSec.BasicAccessRule: Rule name</li><li>WebSec.PreciseMatchRule: Rule name</li><li>WebSec.RateLimitRule: Rule name</li><li>WebSec.BotCustomRule: Rule name</li><li>DDoS.L4Proxy.IpAccessControl: Empty</li><li>DDoS.L3Transit.IpAccessControl: Empty</li></ul>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("EntityType",$param) and $param["EntityType"] !== null) {
            $this->EntityType = $param["EntityType"];
        }

        if (array_key_exists("EntityId",$param) and $param["EntityId"] !== null) {
            $this->EntityId = $param["EntityId"];
        }

        if (array_key_exists("EntityName",$param) and $param["EntityName"] !== null) {
            $this->EntityName = $param["EntityName"];
        }

        if (array_key_exists("SubEntityType",$param) and $param["SubEntityType"] !== null) {
            $this->SubEntityType = $param["SubEntityType"];
        }

        if (array_key_exists("SubEntityId",$param) and $param["SubEntityId"] !== null) {
            $this->SubEntityId = $param["SubEntityId"];
        }

        if (array_key_exists("SubEntityName",$param) and $param["SubEntityName"] !== null) {
            $this->SubEntityName = $param["SubEntityName"];
        }
    }
}
