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
 * Domain name configuration information
 *
 * @method string getZoneId() Obtain The site ID.
 * @method void setZoneId(string $ZoneId) Set The site ID.
 * @method string getStatus() Obtain The acceleration status. Values:
<li>`process`: In progress</li>
<li>`online`: Enabled</li>
<li>`offline`: Disabled</li>
 * @method void setStatus(string $Status) Set The acceleration status. Values:
<li>`process`: In progress</li>
<li>`online`: Enabled</li>
<li>`offline`: Disabled</li>
 * @method string getHost() Obtain The domain name.
 * @method void setHost(string $Host) Set The domain name.
 * @method string getZoneName() Obtain Name of the site
 * @method void setZoneName(string $ZoneName) Set Name of the site
 * @method string getCname() Obtain The assigned CNAME
 * @method void setCname(string $Cname) Set The assigned CNAME
 * @method string getId() Obtain The resource ID.
 * @method void setId(string $Id) Set The resource ID.
 * @method string getInstanceId() Obtain The instance ID.
 * @method void setInstanceId(string $InstanceId) Set The instance ID.
 * @method integer getLock() Obtain The lock status.
 * @method void setLock(integer $Lock) Set The lock status.
 * @method integer getMode() Obtain The domain name status.
 * @method void setMode(integer $Mode) Set The domain name status.
 * @method string getArea() Obtain The acceleration area of the domain name. Values:
<li>`global`: Global.</li>
<li>`mainland`: Chinese mainland.</li>
<li>`overseas`: Outside the Chinese mainland.</li>
 * @method void setArea(string $Area) Set The acceleration area of the domain name. Values:
<li>`global`: Global.</li>
<li>`mainland`: Chinese mainland.</li>
<li>`overseas`: Outside the Chinese mainland.</li>
 * @method AccelerateType getAccelerateType() Obtain The acceleration type configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAccelerateType(AccelerateType $AccelerateType) Set The acceleration type configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method Https getHttps() Obtain The HTTPS configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHttps(Https $Https) Set The HTTPS configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method CacheConfig getCacheConfig() Obtain The cache configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCacheConfig(CacheConfig $CacheConfig) Set The cache configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method Origin getOrigin() Obtain The origin configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOrigin(Origin $Origin) Set The origin configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method SecurityType getSecurityType() Obtain The security type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSecurityType(SecurityType $SecurityType) Set The security type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method CacheKey getCacheKey() Obtain The cache key configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCacheKey(CacheKey $CacheKey) Set The cache key configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method Compression getCompression() Obtain The smart compression configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCompression(Compression $Compression) Set The smart compression configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method Waf getWaf() Obtain The WAF protection configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWaf(Waf $Waf) Set The WAF protection configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method CC getCC() Obtain The CC protection configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCC(CC $CC) Set The CC protection configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method DDoS getDDoS() Obtain DDoS mitigation configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDDoS(DDoS $DDoS) Set DDoS mitigation configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method SmartRouting getSmartRouting() Obtain The smart routing configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSmartRouting(SmartRouting $SmartRouting) Set The smart routing configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method Ipv6 getIpv6() Obtain The IPv6 access configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIpv6(Ipv6 $Ipv6) Set The IPv6 access configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ClientIpCountry getClientIpCountry() Obtain Whether to carry the location information of the client IP during origin-pull.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setClientIpCountry(ClientIpCountry $ClientIpCountry) Set Whether to carry the location information of the client IP during origin-pull.
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class DetailHost extends AbstractModel
{
    /**
     * @var string The site ID.
     */
    public $ZoneId;

    /**
     * @var string The acceleration status. Values:
<li>`process`: In progress</li>
<li>`online`: Enabled</li>
<li>`offline`: Disabled</li>
     */
    public $Status;

    /**
     * @var string The domain name.
     */
    public $Host;

    /**
     * @var string Name of the site
     */
    public $ZoneName;

    /**
     * @var string The assigned CNAME
     */
    public $Cname;

    /**
     * @var string The resource ID.
     */
    public $Id;

    /**
     * @var string The instance ID.
     */
    public $InstanceId;

    /**
     * @var integer The lock status.
     */
    public $Lock;

    /**
     * @var integer The domain name status.
     */
    public $Mode;

    /**
     * @var string The acceleration area of the domain name. Values:
<li>`global`: Global.</li>
<li>`mainland`: Chinese mainland.</li>
<li>`overseas`: Outside the Chinese mainland.</li>
     */
    public $Area;

    /**
     * @var AccelerateType The acceleration type configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AccelerateType;

    /**
     * @var Https The HTTPS configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Https;

    /**
     * @var CacheConfig The cache configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CacheConfig;

    /**
     * @var Origin The origin configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Origin;

    /**
     * @var SecurityType The security type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SecurityType;

    /**
     * @var CacheKey The cache key configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CacheKey;

    /**
     * @var Compression The smart compression configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Compression;

    /**
     * @var Waf The WAF protection configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Waf;

    /**
     * @var CC The CC protection configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CC;

    /**
     * @var DDoS DDoS mitigation configuration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DDoS;

    /**
     * @var SmartRouting The smart routing configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SmartRouting;

    /**
     * @var Ipv6 The IPv6 access configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Ipv6;

    /**
     * @var ClientIpCountry Whether to carry the location information of the client IP during origin-pull.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ClientIpCountry;

    /**
     * @param string $ZoneId The site ID.
     * @param string $Status The acceleration status. Values:
<li>`process`: In progress</li>
<li>`online`: Enabled</li>
<li>`offline`: Disabled</li>
     * @param string $Host The domain name.
     * @param string $ZoneName Name of the site
     * @param string $Cname The assigned CNAME
     * @param string $Id The resource ID.
     * @param string $InstanceId The instance ID.
     * @param integer $Lock The lock status.
     * @param integer $Mode The domain name status.
     * @param string $Area The acceleration area of the domain name. Values:
<li>`global`: Global.</li>
<li>`mainland`: Chinese mainland.</li>
<li>`overseas`: Outside the Chinese mainland.</li>
     * @param AccelerateType $AccelerateType The acceleration type configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param Https $Https The HTTPS configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param CacheConfig $CacheConfig The cache configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param Origin $Origin The origin configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param SecurityType $SecurityType The security type.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param CacheKey $CacheKey The cache key configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param Compression $Compression The smart compression configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param Waf $Waf The WAF protection configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param CC $CC The CC protection configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param DDoS $DDoS DDoS mitigation configuration
Note: This field may return null, indicating that no valid values can be obtained.
     * @param SmartRouting $SmartRouting The smart routing configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param Ipv6 $Ipv6 The IPv6 access configuration item.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ClientIpCountry $ClientIpCountry Whether to carry the location information of the client IP during origin-pull.
Note: This field may return `null`, indicating that no valid value can be obtained.
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Lock",$param) and $param["Lock"] !== null) {
            $this->Lock = $param["Lock"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("AccelerateType",$param) and $param["AccelerateType"] !== null) {
            $this->AccelerateType = new AccelerateType();
            $this->AccelerateType->deserialize($param["AccelerateType"]);
        }

        if (array_key_exists("Https",$param) and $param["Https"] !== null) {
            $this->Https = new Https();
            $this->Https->deserialize($param["Https"]);
        }

        if (array_key_exists("CacheConfig",$param) and $param["CacheConfig"] !== null) {
            $this->CacheConfig = new CacheConfig();
            $this->CacheConfig->deserialize($param["CacheConfig"]);
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = new Origin();
            $this->Origin->deserialize($param["Origin"]);
        }

        if (array_key_exists("SecurityType",$param) and $param["SecurityType"] !== null) {
            $this->SecurityType = new SecurityType();
            $this->SecurityType->deserialize($param["SecurityType"]);
        }

        if (array_key_exists("CacheKey",$param) and $param["CacheKey"] !== null) {
            $this->CacheKey = new CacheKey();
            $this->CacheKey->deserialize($param["CacheKey"]);
        }

        if (array_key_exists("Compression",$param) and $param["Compression"] !== null) {
            $this->Compression = new Compression();
            $this->Compression->deserialize($param["Compression"]);
        }

        if (array_key_exists("Waf",$param) and $param["Waf"] !== null) {
            $this->Waf = new Waf();
            $this->Waf->deserialize($param["Waf"]);
        }

        if (array_key_exists("CC",$param) and $param["CC"] !== null) {
            $this->CC = new CC();
            $this->CC->deserialize($param["CC"]);
        }

        if (array_key_exists("DDoS",$param) and $param["DDoS"] !== null) {
            $this->DDoS = new DDoS();
            $this->DDoS->deserialize($param["DDoS"]);
        }

        if (array_key_exists("SmartRouting",$param) and $param["SmartRouting"] !== null) {
            $this->SmartRouting = new SmartRouting();
            $this->SmartRouting->deserialize($param["SmartRouting"]);
        }

        if (array_key_exists("Ipv6",$param) and $param["Ipv6"] !== null) {
            $this->Ipv6 = new Ipv6();
            $this->Ipv6->deserialize($param["Ipv6"]);
        }

        if (array_key_exists("ClientIpCountry",$param) and $param["ClientIpCountry"] !== null) {
            $this->ClientIpCountry = new ClientIpCountry();
            $this->ClientIpCountry->deserialize($param["ClientIpCountry"]);
        }
    }
}
