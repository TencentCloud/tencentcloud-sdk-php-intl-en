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
 * Domain configuration information
 *
 * @method string getZoneId() Obtain Site ID.
 * @method void setZoneId(string $ZoneId) Set Site ID.
 * @method string getStatus() Obtain Acceleration service status. Valid values:
<li> process: deploying;</li>
<li> online: started;</li>
<li>offline: closed.</li>
 * @method void setStatus(string $Status) Set Acceleration service status. Valid values:
<li> process: deploying;</li>
<li> online: started;</li>
<li>offline: closed.</li>
 * @method string getHost() Obtain Domain name.
 * @method void setHost(string $Host) Set Domain name.
 * @method string getZoneName() Obtain Site name.
 * @method void setZoneName(string $ZoneName) Set Site name.
 * @method string getCname() Obtain Assigned Cname domain name
 * @method void setCname(string $Cname) Set Assigned Cname domain name
 * @method string getId() Obtain Resource ID.
 * @method void setId(string $Id) Set Resource ID.
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method integer getLock() Obtain Lock status.
 * @method void setLock(integer $Lock) Set Lock status.
 * @method integer getMode() Obtain Domain name status type.
 * @method void setMode(integer $Mode) Set Domain name status type.
 * @method string getArea() Obtain Domain name acceleration area. Valid values:
<li> global: global;</li>
<li> mainland: Chinese mainland;</li>
<li> overseas: outside the Chinese mainland.</li>
 * @method void setArea(string $Area) Set Domain name acceleration area. Valid values:
<li> global: global;</li>
<li> mainland: Chinese mainland;</li>
<li> overseas: outside the Chinese mainland.</li>
 * @method AccelerateType getAccelerateType() Obtain Acceleration type configuration item.
 * @method void setAccelerateType(AccelerateType $AccelerateType) Set Acceleration type configuration item.
 * @method Https getHttps() Obtain Https configuration item.
 * @method void setHttps(Https $Https) Set Https configuration item.
 * @method CacheConfig getCacheConfig() Obtain Cache configuration item.
 * @method void setCacheConfig(CacheConfig $CacheConfig) Set Cache configuration item.
 * @method Origin getOrigin() Obtain Origin server configuration item.
 * @method void setOrigin(Origin $Origin) Set Origin server configuration item.
 * @method SecurityType getSecurityType() Obtain Security type.
 * @method void setSecurityType(SecurityType $SecurityType) Set Security type.
 * @method CacheKey getCacheKey() Obtain Cache key configuration item.
 * @method void setCacheKey(CacheKey $CacheKey) Set Cache key configuration item.
 * @method Compression getCompression() Obtain Intelligent compression configuration item.
 * @method void setCompression(Compression $Compression) Set Intelligent compression configuration item.
 * @method Waf getWaf() Obtain Waf protection configuration item.
 * @method void setWaf(Waf $Waf) Set Waf protection configuration item.
 * @method CC getCC() Obtain CC protection configuration item.
 * @method void setCC(CC $CC) Set CC protection configuration item.
 * @method DDoS getDDoS() Obtain DDoS protection configuration.
 * @method void setDDoS(DDoS $DDoS) Set DDoS protection configuration.
 * @method SmartRouting getSmartRouting() Obtain Intelligent routing configuration item.
 * @method void setSmartRouting(SmartRouting $SmartRouting) Set Intelligent routing configuration item.
 * @method Ipv6 getIpv6() Obtain Ipv6 access configuration item.
 * @method void setIpv6(Ipv6 $Ipv6) Set Ipv6 access configuration item.
 * @method ClientIpCountry getClientIpCountry() Obtain Configuration of whether to carry the region of the client IP during origin-pull.
 * @method void setClientIpCountry(ClientIpCountry $ClientIpCountry) Set Configuration of whether to carry the region of the client IP during origin-pull.
 */
class DetailHost extends AbstractModel
{
    /**
     * @var string Site ID.
     */
    public $ZoneId;

    /**
     * @var string Acceleration service status. Valid values:
<li> process: deploying;</li>
<li> online: started;</li>
<li>offline: closed.</li>
     */
    public $Status;

    /**
     * @var string Domain name.
     */
    public $Host;

    /**
     * @var string Site name.
     */
    public $ZoneName;

    /**
     * @var string Assigned Cname domain name
     */
    public $Cname;

    /**
     * @var string Resource ID.
     */
    public $Id;

    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var integer Lock status.
     */
    public $Lock;

    /**
     * @var integer Domain name status type.
     */
    public $Mode;

    /**
     * @var string Domain name acceleration area. Valid values:
<li> global: global;</li>
<li> mainland: Chinese mainland;</li>
<li> overseas: outside the Chinese mainland.</li>
     */
    public $Area;

    /**
     * @var AccelerateType Acceleration type configuration item.
     */
    public $AccelerateType;

    /**
     * @var Https Https configuration item.
     */
    public $Https;

    /**
     * @var CacheConfig Cache configuration item.
     */
    public $CacheConfig;

    /**
     * @var Origin Origin server configuration item.
     */
    public $Origin;

    /**
     * @var SecurityType Security type.
     */
    public $SecurityType;

    /**
     * @var CacheKey Cache key configuration item.
     */
    public $CacheKey;

    /**
     * @var Compression Intelligent compression configuration item.
     */
    public $Compression;

    /**
     * @var Waf Waf protection configuration item.
     */
    public $Waf;

    /**
     * @var CC CC protection configuration item.
     */
    public $CC;

    /**
     * @var DDoS DDoS protection configuration.
     */
    public $DDoS;

    /**
     * @var SmartRouting Intelligent routing configuration item.
     */
    public $SmartRouting;

    /**
     * @var Ipv6 Ipv6 access configuration item.
     */
    public $Ipv6;

    /**
     * @var ClientIpCountry Configuration of whether to carry the region of the client IP during origin-pull.
     */
    public $ClientIpCountry;

    /**
     * @param string $ZoneId Site ID.
     * @param string $Status Acceleration service status. Valid values:
<li> process: deploying;</li>
<li> online: started;</li>
<li>offline: closed.</li>
     * @param string $Host Domain name.
     * @param string $ZoneName Site name.
     * @param string $Cname Assigned Cname domain name
     * @param string $Id Resource ID.
     * @param string $InstanceId Instance ID.
     * @param integer $Lock Lock status.
     * @param integer $Mode Domain name status type.
     * @param string $Area Domain name acceleration area. Valid values:
<li> global: global;</li>
<li> mainland: Chinese mainland;</li>
<li> overseas: outside the Chinese mainland.</li>
     * @param AccelerateType $AccelerateType Acceleration type configuration item.
     * @param Https $Https Https configuration item.
     * @param CacheConfig $CacheConfig Cache configuration item.
     * @param Origin $Origin Origin server configuration item.
     * @param SecurityType $SecurityType Security type.
     * @param CacheKey $CacheKey Cache key configuration item.
     * @param Compression $Compression Intelligent compression configuration item.
     * @param Waf $Waf Waf protection configuration item.
     * @param CC $CC CC protection configuration item.
     * @param DDoS $DDoS DDoS protection configuration.
     * @param SmartRouting $SmartRouting Intelligent routing configuration item.
     * @param Ipv6 $Ipv6 Ipv6 access configuration item.
     * @param ClientIpCountry $ClientIpCountry Configuration of whether to carry the region of the client IP during origin-pull.
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
