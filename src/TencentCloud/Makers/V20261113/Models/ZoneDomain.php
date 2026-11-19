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
namespace TencentCloud\Makers\V20261113\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Custom domain name under the site
 *
 * @method string getType() Obtain <p>Custom or Preset</p>
 * @method void setType(string $Type) Set <p>Custom or Preset</p>
 * @method string getDomain() Obtain <p>Domain name.</p>
 * @method void setDomain(string $Domain) Set <p>Domain name.</p>
 * @method string getStatus() Obtain <p>Domain name status</p>
 * @method void setStatus(string $Status) Set <p>Domain name status</p>
 * @method string getEnv() Obtain <p>Bound environment slug. Default value: Production</p>
 * @method void setEnv(string $Env) Set <p>Bound environment slug. Default value: Production</p>
 * @method string getZoneId() Obtain <p>Site ID</p>
 * @method void setZoneId(string $ZoneId) Set <p>Site ID</p>
 * @method string getArea() Obtain <p>Acceleration region</p>
 * @method void setArea(string $Area) Set <p>Acceleration region</p>
 * @method string getCname() Obtain <p>CNAME</p>
 * @method void setCname(string $Cname) Set <p>CNAME</p>
 * @method string getMainDomain() Obtain <p>Primary domain name.</p>
 * @method void setMainDomain(string $MainDomain) Set <p>Primary domain name.</p>
 * @method SwitchConfig getIpv6() Obtain <p>IPv6</p>
 * @method void setIpv6(SwitchConfig $Ipv6) Set <p>IPv6</p>
 * @method SwitchConfig getHttp2() Obtain <p>HTTP/2</p>
 * @method void setHttp2(SwitchConfig $Http2) Set <p>HTTP/2</p>
 * @method SwitchConfig getOcspStapling() Obtain <p>OCSP</p>
 * @method void setOcspStapling(SwitchConfig $OcspStapling) Set <p>OCSP</p>
 * @method ForceRedirectConfig getForceRedirect() Obtain <p>Force HTTPS</p>
 * @method void setForceRedirect(ForceRedirectConfig $ForceRedirect) Set <p>Force HTTPS</p>
 * @method HstsConfig getHsts() Obtain <p>HSTS</p>
 * @method void setHsts(HstsConfig $Hsts) Set <p>HSTS</p>
 * @method OwnershipVerification getOwnershipVerification() Obtain <p>Ownership verification</p>
 * @method void setOwnershipVerification(OwnershipVerification $OwnershipVerification) Set <p>Ownership verification</p>
 */
class ZoneDomain extends AbstractModel
{
    /**
     * @var string <p>Custom or Preset</p>
     */
    public $Type;

    /**
     * @var string <p>Domain name.</p>
     */
    public $Domain;

    /**
     * @var string <p>Domain name status</p>
     */
    public $Status;

    /**
     * @var string <p>Bound environment slug. Default value: Production</p>
     */
    public $Env;

    /**
     * @var string <p>Site ID</p>
     */
    public $ZoneId;

    /**
     * @var string <p>Acceleration region</p>
     */
    public $Area;

    /**
     * @var string <p>CNAME</p>
     */
    public $Cname;

    /**
     * @var string <p>Primary domain name.</p>
     */
    public $MainDomain;

    /**
     * @var SwitchConfig <p>IPv6</p>
     */
    public $Ipv6;

    /**
     * @var SwitchConfig <p>HTTP/2</p>
     */
    public $Http2;

    /**
     * @var SwitchConfig <p>OCSP</p>
     */
    public $OcspStapling;

    /**
     * @var ForceRedirectConfig <p>Force HTTPS</p>
     */
    public $ForceRedirect;

    /**
     * @var HstsConfig <p>HSTS</p>
     */
    public $Hsts;

    /**
     * @var OwnershipVerification <p>Ownership verification</p>
     */
    public $OwnershipVerification;

    /**
     * @param string $Type <p>Custom or Preset</p>
     * @param string $Domain <p>Domain name.</p>
     * @param string $Status <p>Domain name status</p>
     * @param string $Env <p>Bound environment slug. Default value: Production</p>
     * @param string $ZoneId <p>Site ID</p>
     * @param string $Area <p>Acceleration region</p>
     * @param string $Cname <p>CNAME</p>
     * @param string $MainDomain <p>Primary domain name.</p>
     * @param SwitchConfig $Ipv6 <p>IPv6</p>
     * @param SwitchConfig $Http2 <p>HTTP/2</p>
     * @param SwitchConfig $OcspStapling <p>OCSP</p>
     * @param ForceRedirectConfig $ForceRedirect <p>Force HTTPS</p>
     * @param HstsConfig $Hsts <p>HSTS</p>
     * @param OwnershipVerification $OwnershipVerification <p>Ownership verification</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = $param["Env"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("MainDomain",$param) and $param["MainDomain"] !== null) {
            $this->MainDomain = $param["MainDomain"];
        }

        if (array_key_exists("Ipv6",$param) and $param["Ipv6"] !== null) {
            $this->Ipv6 = new SwitchConfig();
            $this->Ipv6->deserialize($param["Ipv6"]);
        }

        if (array_key_exists("Http2",$param) and $param["Http2"] !== null) {
            $this->Http2 = new SwitchConfig();
            $this->Http2->deserialize($param["Http2"]);
        }

        if (array_key_exists("OcspStapling",$param) and $param["OcspStapling"] !== null) {
            $this->OcspStapling = new SwitchConfig();
            $this->OcspStapling->deserialize($param["OcspStapling"]);
        }

        if (array_key_exists("ForceRedirect",$param) and $param["ForceRedirect"] !== null) {
            $this->ForceRedirect = new ForceRedirectConfig();
            $this->ForceRedirect->deserialize($param["ForceRedirect"]);
        }

        if (array_key_exists("Hsts",$param) and $param["Hsts"] !== null) {
            $this->Hsts = new HstsConfig();
            $this->Hsts->deserialize($param["Hsts"]);
        }

        if (array_key_exists("OwnershipVerification",$param) and $param["OwnershipVerification"] !== null) {
            $this->OwnershipVerification = new OwnershipVerification();
            $this->OwnershipVerification->deserialize($param["OwnershipVerification"]);
        }
    }
}
