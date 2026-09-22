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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cdn domain configuration information
 *
 * @method string getArea() Obtain Domain acceleration region:
<li>mainland: domestic acceleration in China;</li>
<li>overseas: acceleration outside China;</li>
<li>global: global acceleration.</li>
 * @method void setArea(string $Area) Set Domain acceleration region:
<li>mainland: domestic acceleration in China;</li>
<li>overseas: acceleration outside China;</li>
<li>global: global acceleration.</li>
 * @method Origin getOrigin() Obtain Origin server configuration.
 * @method void setOrigin(Origin $Origin) Set Origin server configuration.
 * @method IpFilter getIpFilter() Obtain IP allowlist/blocklist configuration.
 * @method void setIpFilter(IpFilter $IpFilter) Set IP allowlist/blocklist configuration.
 * @method UserAgentFilter getUserAgentFilter() Obtain UA Blocklist/Allowlist Configuration.
 * @method void setUserAgentFilter(UserAgentFilter $UserAgentFilter) Set UA Blocklist/Allowlist Configuration.
 * @method FollowRedirect getFollowRedirect() Obtain 301/302 origin-pull follow configuration.
 * @method void setFollowRedirect(FollowRedirect $FollowRedirect) Set 301/302 origin-pull follow configuration.
 * @method RequestHeader getRequestHeader() Obtain Request header configuration.
 * @method void setRequestHeader(RequestHeader $RequestHeader) Set Request header configuration.
 * @method ResponseHeader getResponseHeader() Obtain header configuration.
 * @method void setResponseHeader(ResponseHeader $ResponseHeader) Set header configuration.
 * @method Cache getCache() Obtain Cache expiration time configuration.
 * @method void setCache(Cache $Cache) Set Cache expiration time configuration.
 * @method Https getHttps() Obtain Https configuration.
 * @method void setHttps(Https $Https) Set Https configuration.
 * @method Authentication getAuthentication() Obtain Timestamp hotlink protection configuration.
 * @method void setAuthentication(Authentication $Authentication) Set Timestamp hotlink protection configuration.
 * @method ForceRedirect getForceRedirect() Obtain Forced redirect configuration for access protocols.
 * @method void setForceRedirect(ForceRedirect $ForceRedirect) Set Forced redirect configuration for access protocols.
 * @method Referer getReferer() Obtain Referer anti-leech configuration.
 * @method void setReferer(Referer $Referer) Set Referer anti-leech configuration.
 * @method MaxAge getMaxAge() Obtain Browser cache configuration.
 * @method void setMaxAge(MaxAge $MaxAge) Set Browser cache configuration.
 * @method Ipv6Access getIpv6Access() Obtain Ipv6 access configuration.
 * @method void setIpv6Access(Ipv6Access $Ipv6Access) Set Ipv6 access configuration.
 * @method Quic getQuic() Obtain Quic access configuration.
 * @method void setQuic(Quic $Quic) Set Quic access configuration.
 * @method AwsPrivateAccess getAwsPrivateAccess() Obtain Authentication configuration for AWS S3 origin-pull.
 * @method void setAwsPrivateAccess(AwsPrivateAccess $AwsPrivateAccess) Set Authentication configuration for AWS S3 origin-pull.
 * @method OssPrivateAccess getOssPrivateAccess() Obtain Authentication configuration for origin-pull from Alibaba Cloud OSS.
 * @method void setOssPrivateAccess(OssPrivateAccess $OssPrivateAccess) Set Authentication configuration for origin-pull from Alibaba Cloud OSS.
 * @method HwPrivateAccess getHwPrivateAccess() Obtain Huawei Cloud object storage origin-pull authentication configuration.
 * @method void setHwPrivateAccess(HwPrivateAccess $HwPrivateAccess) Set Huawei Cloud object storage origin-pull authentication configuration.
 * @method OthersPrivateAccess getOthersPrivateAccess() Obtain Authentication configuration for origin-pull from other vendors' object storage.
 * @method void setOthersPrivateAccess(OthersPrivateAccess $OthersPrivateAccess) Set Authentication configuration for origin-pull from other vendors' object storage.
 */
class CDNDomainConfig extends AbstractModel
{
    /**
     * @var string Domain acceleration region:
<li>mainland: domestic acceleration in China;</li>
<li>overseas: acceleration outside China;</li>
<li>global: global acceleration.</li>
     */
    public $Area;

    /**
     * @var Origin Origin server configuration.
     */
    public $Origin;

    /**
     * @var IpFilter IP allowlist/blocklist configuration.
     */
    public $IpFilter;

    /**
     * @var UserAgentFilter UA Blocklist/Allowlist Configuration.
     */
    public $UserAgentFilter;

    /**
     * @var FollowRedirect 301/302 origin-pull follow configuration.
     */
    public $FollowRedirect;

    /**
     * @var RequestHeader Request header configuration.
     */
    public $RequestHeader;

    /**
     * @var ResponseHeader header configuration.
     */
    public $ResponseHeader;

    /**
     * @var Cache Cache expiration time configuration.
     */
    public $Cache;

    /**
     * @var Https Https configuration.
     */
    public $Https;

    /**
     * @var Authentication Timestamp hotlink protection configuration.
     */
    public $Authentication;

    /**
     * @var ForceRedirect Forced redirect configuration for access protocols.
     */
    public $ForceRedirect;

    /**
     * @var Referer Referer anti-leech configuration.
     */
    public $Referer;

    /**
     * @var MaxAge Browser cache configuration.
     */
    public $MaxAge;

    /**
     * @var Ipv6Access Ipv6 access configuration.
     */
    public $Ipv6Access;

    /**
     * @var Quic Quic access configuration.
     */
    public $Quic;

    /**
     * @var AwsPrivateAccess Authentication configuration for AWS S3 origin-pull.
     */
    public $AwsPrivateAccess;

    /**
     * @var OssPrivateAccess Authentication configuration for origin-pull from Alibaba Cloud OSS.
     */
    public $OssPrivateAccess;

    /**
     * @var HwPrivateAccess Huawei Cloud object storage origin-pull authentication configuration.
     */
    public $HwPrivateAccess;

    /**
     * @var OthersPrivateAccess Authentication configuration for origin-pull from other vendors' object storage.
     */
    public $OthersPrivateAccess;

    /**
     * @param string $Area Domain acceleration region:
<li>mainland: domestic acceleration in China;</li>
<li>overseas: acceleration outside China;</li>
<li>global: global acceleration.</li>
     * @param Origin $Origin Origin server configuration.
     * @param IpFilter $IpFilter IP allowlist/blocklist configuration.
     * @param UserAgentFilter $UserAgentFilter UA Blocklist/Allowlist Configuration.
     * @param FollowRedirect $FollowRedirect 301/302 origin-pull follow configuration.
     * @param RequestHeader $RequestHeader Request header configuration.
     * @param ResponseHeader $ResponseHeader header configuration.
     * @param Cache $Cache Cache expiration time configuration.
     * @param Https $Https Https configuration.
     * @param Authentication $Authentication Timestamp hotlink protection configuration.
     * @param ForceRedirect $ForceRedirect Forced redirect configuration for access protocols.
     * @param Referer $Referer Referer anti-leech configuration.
     * @param MaxAge $MaxAge Browser cache configuration.
     * @param Ipv6Access $Ipv6Access Ipv6 access configuration.
     * @param Quic $Quic Quic access configuration.
     * @param AwsPrivateAccess $AwsPrivateAccess Authentication configuration for AWS S3 origin-pull.
     * @param OssPrivateAccess $OssPrivateAccess Authentication configuration for origin-pull from Alibaba Cloud OSS.
     * @param HwPrivateAccess $HwPrivateAccess Huawei Cloud object storage origin-pull authentication configuration.
     * @param OthersPrivateAccess $OthersPrivateAccess Authentication configuration for origin-pull from other vendors' object storage.
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
        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = new Origin();
            $this->Origin->deserialize($param["Origin"]);
        }

        if (array_key_exists("IpFilter",$param) and $param["IpFilter"] !== null) {
            $this->IpFilter = new IpFilter();
            $this->IpFilter->deserialize($param["IpFilter"]);
        }

        if (array_key_exists("UserAgentFilter",$param) and $param["UserAgentFilter"] !== null) {
            $this->UserAgentFilter = new UserAgentFilter();
            $this->UserAgentFilter->deserialize($param["UserAgentFilter"]);
        }

        if (array_key_exists("FollowRedirect",$param) and $param["FollowRedirect"] !== null) {
            $this->FollowRedirect = new FollowRedirect();
            $this->FollowRedirect->deserialize($param["FollowRedirect"]);
        }

        if (array_key_exists("RequestHeader",$param) and $param["RequestHeader"] !== null) {
            $this->RequestHeader = new RequestHeader();
            $this->RequestHeader->deserialize($param["RequestHeader"]);
        }

        if (array_key_exists("ResponseHeader",$param) and $param["ResponseHeader"] !== null) {
            $this->ResponseHeader = new ResponseHeader();
            $this->ResponseHeader->deserialize($param["ResponseHeader"]);
        }

        if (array_key_exists("Cache",$param) and $param["Cache"] !== null) {
            $this->Cache = new Cache();
            $this->Cache->deserialize($param["Cache"]);
        }

        if (array_key_exists("Https",$param) and $param["Https"] !== null) {
            $this->Https = new Https();
            $this->Https->deserialize($param["Https"]);
        }

        if (array_key_exists("Authentication",$param) and $param["Authentication"] !== null) {
            $this->Authentication = new Authentication();
            $this->Authentication->deserialize($param["Authentication"]);
        }

        if (array_key_exists("ForceRedirect",$param) and $param["ForceRedirect"] !== null) {
            $this->ForceRedirect = new ForceRedirect();
            $this->ForceRedirect->deserialize($param["ForceRedirect"]);
        }

        if (array_key_exists("Referer",$param) and $param["Referer"] !== null) {
            $this->Referer = new Referer();
            $this->Referer->deserialize($param["Referer"]);
        }

        if (array_key_exists("MaxAge",$param) and $param["MaxAge"] !== null) {
            $this->MaxAge = new MaxAge();
            $this->MaxAge->deserialize($param["MaxAge"]);
        }

        if (array_key_exists("Ipv6Access",$param) and $param["Ipv6Access"] !== null) {
            $this->Ipv6Access = new Ipv6Access();
            $this->Ipv6Access->deserialize($param["Ipv6Access"]);
        }

        if (array_key_exists("Quic",$param) and $param["Quic"] !== null) {
            $this->Quic = new Quic();
            $this->Quic->deserialize($param["Quic"]);
        }

        if (array_key_exists("AwsPrivateAccess",$param) and $param["AwsPrivateAccess"] !== null) {
            $this->AwsPrivateAccess = new AwsPrivateAccess();
            $this->AwsPrivateAccess->deserialize($param["AwsPrivateAccess"]);
        }

        if (array_key_exists("OssPrivateAccess",$param) and $param["OssPrivateAccess"] !== null) {
            $this->OssPrivateAccess = new OssPrivateAccess();
            $this->OssPrivateAccess->deserialize($param["OssPrivateAccess"]);
        }

        if (array_key_exists("HwPrivateAccess",$param) and $param["HwPrivateAccess"] !== null) {
            $this->HwPrivateAccess = new HwPrivateAccess();
            $this->HwPrivateAccess->deserialize($param["HwPrivateAccess"]);
        }

        if (array_key_exists("OthersPrivateAccess",$param) and $param["OthersPrivateAccess"] !== null) {
            $this->OthersPrivateAccess = new OthersPrivateAccess();
            $this->OthersPrivateAccess->deserialize($param["OthersPrivateAccess"]);
        }
    }
}
