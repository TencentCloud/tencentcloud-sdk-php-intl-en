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
 * Security module that refers to an IP group
 *
 * @method string getZoneId() Obtain <p>Site ID.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Site ID.</p>
 * @method string getEntityType() Obtain <p>Entity type.</p><p>Enumeration values:</p><ul><li>WebSec.ZonePolicy: site-level security policy</li><li>WebSec.HostPolicy: domain-level security policy</li><li>WebSec.Template: policy template</li><li>DDoS.L4Proxy: Layer 4 proxy DDoS protection</li><li>DDoS.L3Transit: layer-3 anycast DDoS protection</li></ul>
 * @method void setEntityType(string $EntityType) Set <p>Entity type.</p><p>Enumeration values:</p><ul><li>WebSec.ZonePolicy: site-level security policy</li><li>WebSec.HostPolicy: domain-level security policy</li><li>WebSec.Template: policy template</li><li>DDoS.L4Proxy: Layer 4 proxy DDoS protection</li><li>DDoS.L3Transit: layer-3 anycast DDoS protection</li></ul>
 * @method string getEntityId() Obtain <p>Entity identification, representing different meanings based on EntityType:</p><ul><li>WebSec.ZonePolicy: site ID;</li><li>WebSec.HostPolicy: domain name;</li><li>WebSec.Template: template ID;</li><li>DDoS.L4Proxy: instance ID;</li><li>DDoS.L3Transit: instance ID.</li></ul>
 * @method void setEntityId(string $EntityId) Set <p>Entity identification, representing different meanings based on EntityType:</p><ul><li>WebSec.ZonePolicy: site ID;</li><li>WebSec.HostPolicy: domain name;</li><li>WebSec.Template: template ID;</li><li>DDoS.L4Proxy: instance ID;</li><li>DDoS.L3Transit: instance ID.</li></ul>
 * @method string getEntityName() Obtain <p>Entity identifier. Its meaning varies based on EntityType:</p><ul><li>WebSec.ZonePolicy: empty;</li><li>WebSec.HostPolicy: empty;</li><li>WebSec.Template: Template name;</li><li>DDoS.L4Proxy: empty;</li><li>DDoS.L3Transit: empty.</li></ul>
 * @method void setEntityName(string $EntityName) Set <p>Entity identifier. Its meaning varies based on EntityType:</p><ul><li>WebSec.ZonePolicy: empty;</li><li>WebSec.HostPolicy: empty;</li><li>WebSec.Template: Template name;</li><li>DDoS.L4Proxy: empty;</li><li>DDoS.L3Transit: empty.</li></ul>
 * @method string getSubEntityType() Obtain <p>Sub-entity type.</p><p>Enumeration values:</p><ul><li>WebSec.ExceptionRule: protection exception rule</li><li>WebSec.BasicAccessRule: basic access control</li><li>WebSec.PreciseMatchRule: exact match rule</li><li>WebSec.RateLimitRule: precision rate limiting</li><li>WebSec.BotCustomRule: advanced bot management - custom rule</li><li>DDoS.L4Proxy.IpAccessControl: Layer 4 proxy DDoS protection - IP blocklist/allowlist</li><li>DDoS.L3Transit.IpAccessControl: layer-3 transit DDoS protection - IP blocklist/allowlist</li></ul>
 * @method void setSubEntityType(string $SubEntityType) Set <p>Sub-entity type.</p><p>Enumeration values:</p><ul><li>WebSec.ExceptionRule: protection exception rule</li><li>WebSec.BasicAccessRule: basic access control</li><li>WebSec.PreciseMatchRule: exact match rule</li><li>WebSec.RateLimitRule: precision rate limiting</li><li>WebSec.BotCustomRule: advanced bot management - custom rule</li><li>DDoS.L4Proxy.IpAccessControl: Layer 4 proxy DDoS protection - IP blocklist/allowlist</li><li>DDoS.L3Transit.IpAccessControl: layer-3 transit DDoS protection - IP blocklist/allowlist</li></ul>
 * @method string getSubEntityId() Obtain <p>Sub-entity identifier. It represents different meanings based on SubEntityType:</p><ul><li>WebSec.ExceptionRule: rule ID;</li><li>WebSec.BasicAccessRule: rule ID;</li><li>WebSec.PreciseMatchRule: rule ID;</li><li>WebSec.RateLimitRule: rule ID;</li><li>WebSec.BotCustomRule: rule ID;</li><li>DDoS.L4Proxy.IpAccessControl: empty;</li><li>DDoS.L3Transit.IpAccessControl: empty.</li></ul><p>EntityType corresponds to SubEntityType. Different EntityType supports different SubEntityType.<br>WebSec.ZonePolicy, WebSec.HostPolicy, and WebSec.Template support the following SubEntityType:</p><ul><li>WebSec.ExceptionRule;</li><li>WebSec.BasicAccessRule;</li><li>WebSec.PreciseMatchRule;</li><li>WebSec.RateLimitRule;</li><li>WebSec.BotCustomRule.</li></ul>DDoS.L4Proxy supports the following SubEntityType:<ul><li>DDoS.L4Proxy.IpAccessControl;</li></ul>DDoS.L3Transit supports the following SubEntityType:<ul><li>DDoS.L3Transit.IpAccessControl.</li></ul>
 * @method void setSubEntityId(string $SubEntityId) Set <p>Sub-entity identifier. It represents different meanings based on SubEntityType:</p><ul><li>WebSec.ExceptionRule: rule ID;</li><li>WebSec.BasicAccessRule: rule ID;</li><li>WebSec.PreciseMatchRule: rule ID;</li><li>WebSec.RateLimitRule: rule ID;</li><li>WebSec.BotCustomRule: rule ID;</li><li>DDoS.L4Proxy.IpAccessControl: empty;</li><li>DDoS.L3Transit.IpAccessControl: empty.</li></ul><p>EntityType corresponds to SubEntityType. Different EntityType supports different SubEntityType.<br>WebSec.ZonePolicy, WebSec.HostPolicy, and WebSec.Template support the following SubEntityType:</p><ul><li>WebSec.ExceptionRule;</li><li>WebSec.BasicAccessRule;</li><li>WebSec.PreciseMatchRule;</li><li>WebSec.RateLimitRule;</li><li>WebSec.BotCustomRule.</li></ul>DDoS.L4Proxy supports the following SubEntityType:<ul><li>DDoS.L4Proxy.IpAccessControl;</li></ul>DDoS.L3Transit supports the following SubEntityType:<ul><li>DDoS.L3Transit.IpAccessControl.</li></ul>
 * @method string getSubEntityName() Obtain <p>Sub-entity name, which represents different meanings according to SubEntityType:</p><ul><li>WebSec.ExceptionRule: rule name;</li><li>WebSec.BasicAccessRule: rule name;</li><li>WebSec.PreciseMatchRule: rule name;</li><li>WebSec.RateLimitRule: rule name;</li><li>WebSec.BotCustomRule: rule name;</li><li>DDoS.L4Proxy.IpAccessControl: rule name, where block means blocklist and allow means allowlist;</li><li>DDoS.L3Transit.IpAccessControl: rule name, where block means blocklist and allow means allowlist.</li></ul>
 * @method void setSubEntityName(string $SubEntityName) Set <p>Sub-entity name, which represents different meanings according to SubEntityType:</p><ul><li>WebSec.ExceptionRule: rule name;</li><li>WebSec.BasicAccessRule: rule name;</li><li>WebSec.PreciseMatchRule: rule name;</li><li>WebSec.RateLimitRule: rule name;</li><li>WebSec.BotCustomRule: rule name;</li><li>DDoS.L4Proxy.IpAccessControl: rule name, where block means blocklist and allow means allowlist;</li><li>DDoS.L3Transit.IpAccessControl: rule name, where block means blocklist and allow means allowlist.</li></ul>
 */
class IPGroupReference extends AbstractModel
{
    /**
     * @var string <p>Site ID.</p>
     */
    public $ZoneId;

    /**
     * @var string <p>Entity type.</p><p>Enumeration values:</p><ul><li>WebSec.ZonePolicy: site-level security policy</li><li>WebSec.HostPolicy: domain-level security policy</li><li>WebSec.Template: policy template</li><li>DDoS.L4Proxy: Layer 4 proxy DDoS protection</li><li>DDoS.L3Transit: layer-3 anycast DDoS protection</li></ul>
     */
    public $EntityType;

    /**
     * @var string <p>Entity identification, representing different meanings based on EntityType:</p><ul><li>WebSec.ZonePolicy: site ID;</li><li>WebSec.HostPolicy: domain name;</li><li>WebSec.Template: template ID;</li><li>DDoS.L4Proxy: instance ID;</li><li>DDoS.L3Transit: instance ID.</li></ul>
     */
    public $EntityId;

    /**
     * @var string <p>Entity identifier. Its meaning varies based on EntityType:</p><ul><li>WebSec.ZonePolicy: empty;</li><li>WebSec.HostPolicy: empty;</li><li>WebSec.Template: Template name;</li><li>DDoS.L4Proxy: empty;</li><li>DDoS.L3Transit: empty.</li></ul>
     */
    public $EntityName;

    /**
     * @var string <p>Sub-entity type.</p><p>Enumeration values:</p><ul><li>WebSec.ExceptionRule: protection exception rule</li><li>WebSec.BasicAccessRule: basic access control</li><li>WebSec.PreciseMatchRule: exact match rule</li><li>WebSec.RateLimitRule: precision rate limiting</li><li>WebSec.BotCustomRule: advanced bot management - custom rule</li><li>DDoS.L4Proxy.IpAccessControl: Layer 4 proxy DDoS protection - IP blocklist/allowlist</li><li>DDoS.L3Transit.IpAccessControl: layer-3 transit DDoS protection - IP blocklist/allowlist</li></ul>
     */
    public $SubEntityType;

    /**
     * @var string <p>Sub-entity identifier. It represents different meanings based on SubEntityType:</p><ul><li>WebSec.ExceptionRule: rule ID;</li><li>WebSec.BasicAccessRule: rule ID;</li><li>WebSec.PreciseMatchRule: rule ID;</li><li>WebSec.RateLimitRule: rule ID;</li><li>WebSec.BotCustomRule: rule ID;</li><li>DDoS.L4Proxy.IpAccessControl: empty;</li><li>DDoS.L3Transit.IpAccessControl: empty.</li></ul><p>EntityType corresponds to SubEntityType. Different EntityType supports different SubEntityType.<br>WebSec.ZonePolicy, WebSec.HostPolicy, and WebSec.Template support the following SubEntityType:</p><ul><li>WebSec.ExceptionRule;</li><li>WebSec.BasicAccessRule;</li><li>WebSec.PreciseMatchRule;</li><li>WebSec.RateLimitRule;</li><li>WebSec.BotCustomRule.</li></ul>DDoS.L4Proxy supports the following SubEntityType:<ul><li>DDoS.L4Proxy.IpAccessControl;</li></ul>DDoS.L3Transit supports the following SubEntityType:<ul><li>DDoS.L3Transit.IpAccessControl.</li></ul>
     */
    public $SubEntityId;

    /**
     * @var string <p>Sub-entity name, which represents different meanings according to SubEntityType:</p><ul><li>WebSec.ExceptionRule: rule name;</li><li>WebSec.BasicAccessRule: rule name;</li><li>WebSec.PreciseMatchRule: rule name;</li><li>WebSec.RateLimitRule: rule name;</li><li>WebSec.BotCustomRule: rule name;</li><li>DDoS.L4Proxy.IpAccessControl: rule name, where block means blocklist and allow means allowlist;</li><li>DDoS.L3Transit.IpAccessControl: rule name, where block means blocklist and allow means allowlist.</li></ul>
     */
    public $SubEntityName;

    /**
     * @param string $ZoneId <p>Site ID.</p>
     * @param string $EntityType <p>Entity type.</p><p>Enumeration values:</p><ul><li>WebSec.ZonePolicy: site-level security policy</li><li>WebSec.HostPolicy: domain-level security policy</li><li>WebSec.Template: policy template</li><li>DDoS.L4Proxy: Layer 4 proxy DDoS protection</li><li>DDoS.L3Transit: layer-3 anycast DDoS protection</li></ul>
     * @param string $EntityId <p>Entity identification, representing different meanings based on EntityType:</p><ul><li>WebSec.ZonePolicy: site ID;</li><li>WebSec.HostPolicy: domain name;</li><li>WebSec.Template: template ID;</li><li>DDoS.L4Proxy: instance ID;</li><li>DDoS.L3Transit: instance ID.</li></ul>
     * @param string $EntityName <p>Entity identifier. Its meaning varies based on EntityType:</p><ul><li>WebSec.ZonePolicy: empty;</li><li>WebSec.HostPolicy: empty;</li><li>WebSec.Template: Template name;</li><li>DDoS.L4Proxy: empty;</li><li>DDoS.L3Transit: empty.</li></ul>
     * @param string $SubEntityType <p>Sub-entity type.</p><p>Enumeration values:</p><ul><li>WebSec.ExceptionRule: protection exception rule</li><li>WebSec.BasicAccessRule: basic access control</li><li>WebSec.PreciseMatchRule: exact match rule</li><li>WebSec.RateLimitRule: precision rate limiting</li><li>WebSec.BotCustomRule: advanced bot management - custom rule</li><li>DDoS.L4Proxy.IpAccessControl: Layer 4 proxy DDoS protection - IP blocklist/allowlist</li><li>DDoS.L3Transit.IpAccessControl: layer-3 transit DDoS protection - IP blocklist/allowlist</li></ul>
     * @param string $SubEntityId <p>Sub-entity identifier. It represents different meanings based on SubEntityType:</p><ul><li>WebSec.ExceptionRule: rule ID;</li><li>WebSec.BasicAccessRule: rule ID;</li><li>WebSec.PreciseMatchRule: rule ID;</li><li>WebSec.RateLimitRule: rule ID;</li><li>WebSec.BotCustomRule: rule ID;</li><li>DDoS.L4Proxy.IpAccessControl: empty;</li><li>DDoS.L3Transit.IpAccessControl: empty.</li></ul><p>EntityType corresponds to SubEntityType. Different EntityType supports different SubEntityType.<br>WebSec.ZonePolicy, WebSec.HostPolicy, and WebSec.Template support the following SubEntityType:</p><ul><li>WebSec.ExceptionRule;</li><li>WebSec.BasicAccessRule;</li><li>WebSec.PreciseMatchRule;</li><li>WebSec.RateLimitRule;</li><li>WebSec.BotCustomRule.</li></ul>DDoS.L4Proxy supports the following SubEntityType:<ul><li>DDoS.L4Proxy.IpAccessControl;</li></ul>DDoS.L3Transit supports the following SubEntityType:<ul><li>DDoS.L3Transit.IpAccessControl.</li></ul>
     * @param string $SubEntityName <p>Sub-entity name, which represents different meanings according to SubEntityType:</p><ul><li>WebSec.ExceptionRule: rule name;</li><li>WebSec.BasicAccessRule: rule name;</li><li>WebSec.PreciseMatchRule: rule name;</li><li>WebSec.RateLimitRule: rule name;</li><li>WebSec.BotCustomRule: rule name;</li><li>DDoS.L4Proxy.IpAccessControl: rule name, where block means blocklist and allow means allowlist;</li><li>DDoS.L3Transit.IpAccessControl: rule name, where block means blocklist and allow means allowlist.</li></ul>
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
