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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CDN domain config for update
 *
 * @method string getArea() Obtain Domain name acceleration areas: <li>mainland: acceleration within China; </li> <li>overseas: acceleration outside China; </li> <li>global: global acceleration. </li>
 * @method void setArea(string $Area) Set Domain name acceleration areas: <li>mainland: acceleration within China; </li> <li>overseas: acceleration outside China; </li> <li>global: global acceleration. </li>
 * @method Origin getOrigin() Obtain Origin Server Configuration.
 * @method void setOrigin(Origin $Origin) Set Origin Server Configuration.
 * @method IpFilter getIpFilter() Obtain IP blocklist/allowlist configuration. This is disabled by default.
 * @method void setIpFilter(IpFilter $IpFilter) Set IP blocklist/allowlist configuration. This is disabled by default.
 * @method UserAgentFilter getUserAgentFilter() Obtain UserAgent:blacklist/whitelist configuration.
 * @method void setUserAgentFilter(UserAgentFilter $UserAgentFilter) Set UserAgent:blacklist/whitelist configuration.
 * @method FollowRedirect getFollowRedirect() Obtain Back to the source 301/302 status code automatically follows the configuration, the default is off
 * @method void setFollowRedirect(FollowRedirect $FollowRedirect) Set Back to the source 301/302 status code automatically follows the configuration, the default is off
 * @method RequestHeader getRequestHeader() Obtain Custom request header configuration. This is disabled by default.
 * @method void setRequestHeader(RequestHeader $RequestHeader) Set Custom request header configuration. This is disabled by default.
 * @method ResponseHeader getResponseHeader() Obtain Custom response header configuration. This is disabled by default.
 * @method void setResponseHeader(ResponseHeader $ResponseHeader) Set Custom response header configuration. This is disabled by default.
 * @method Cache getCache() Obtain Node cache expiration time configuration.
 * @method void setCache(Cache $Cache) Set Node cache expiration time configuration.
 * @method Https getHttps() Obtain Domain name HTTPS acceleration configuration. This is disabled by default.
 * @method void setHttps(Https $Https) Set Domain name HTTPS acceleration configuration. This is disabled by default.
 * @method Authentication getAuthentication() Obtain Timestamp hotlink protection configuration.
 * @method void setAuthentication(Authentication $Authentication) Set Timestamp hotlink protection configuration.
 * @method ForceRedirect getForceRedirect() Obtain Access protocol forced redirect configuration. This is disabled by default.
 * @method void setForceRedirect(ForceRedirect $ForceRedirect) Set Access protocol forced redirect configuration. This is disabled by default.
 * @method Referer getReferer() Obtain Referer blacklist/whitelist configuration. This is disabled by default.
 * @method void setReferer(Referer $Referer) Set Referer blacklist/whitelist configuration. This is disabled by default.
 * @method MaxAge getMaxAge() Obtain Browser cache rule configuration, which is used to set the default value of MaxAge and is disabled by default.
 * @method void setMaxAge(MaxAge $MaxAge) Set Browser cache rule configuration, which is used to set the default value of MaxAge and is disabled by default.
 * @method Ipv6Access getIpv6Access() Obtain IPv6 access configuration.
 * @method void setIpv6Access(Ipv6Access $Ipv6Access) Set IPv6 access configuration.
 * @method Quic getQuic() Obtain QUIC configuration item.
 * @method void setQuic(Quic $Quic) Set QUIC configuration item.
 * @method AwsPrivateAccess getAwsPrivateAccess() Obtain Origin access authentication for S3 bucket.
 * @method void setAwsPrivateAccess(AwsPrivateAccess $AwsPrivateAccess) Set Origin access authentication for S3 bucket.
 * @method OssPrivateAccess getOssPrivateAccess() Obtain Access authentication configuration for OSS origin.
 * @method void setOssPrivateAccess(OssPrivateAccess $OssPrivateAccess) Set Access authentication configuration for OSS origin.
 * @method HwPrivateAccess getHwPrivateAccess() Obtain Access authentication for Huawei Cloud OBS origin
 * @method void setHwPrivateAccess(HwPrivateAccess $HwPrivateAccess) Set Access authentication for Huawei Cloud OBS origin
 * @method OthersPrivateAccess getOthersPrivateAccess() Obtain Origin-pull authentication for other origins.
 * @method void setOthersPrivateAccess(OthersPrivateAccess $OthersPrivateAccess) Set Origin-pull authentication for other origins.
 */
class CDNDomainConfigForUpdate extends AbstractModel
{
    /**
     * @var string Domain name acceleration areas: <li>mainland: acceleration within China; </li> <li>overseas: acceleration outside China; </li> <li>global: global acceleration. </li>
     */
    public $Area;

    /**
     * @var Origin Origin Server Configuration.
     */
    public $Origin;

    /**
     * @var IpFilter IP blocklist/allowlist configuration. This is disabled by default.
     */
    public $IpFilter;

    /**
     * @var UserAgentFilter UserAgent:blacklist/whitelist configuration.
     */
    public $UserAgentFilter;

    /**
     * @var FollowRedirect Back to the source 301/302 status code automatically follows the configuration, the default is off
     */
    public $FollowRedirect;

    /**
     * @var RequestHeader Custom request header configuration. This is disabled by default.
     */
    public $RequestHeader;

    /**
     * @var ResponseHeader Custom response header configuration. This is disabled by default.
     */
    public $ResponseHeader;

    /**
     * @var Cache Node cache expiration time configuration.
     */
    public $Cache;

    /**
     * @var Https Domain name HTTPS acceleration configuration. This is disabled by default.
     */
    public $Https;

    /**
     * @var Authentication Timestamp hotlink protection configuration.
     */
    public $Authentication;

    /**
     * @var ForceRedirect Access protocol forced redirect configuration. This is disabled by default.
     */
    public $ForceRedirect;

    /**
     * @var Referer Referer blacklist/whitelist configuration. This is disabled by default.
     */
    public $Referer;

    /**
     * @var MaxAge Browser cache rule configuration, which is used to set the default value of MaxAge and is disabled by default.
     */
    public $MaxAge;

    /**
     * @var Ipv6Access IPv6 access configuration.
     */
    public $Ipv6Access;

    /**
     * @var Quic QUIC configuration item.
     */
    public $Quic;

    /**
     * @var AwsPrivateAccess Origin access authentication for S3 bucket.
     */
    public $AwsPrivateAccess;

    /**
     * @var OssPrivateAccess Access authentication configuration for OSS origin.
     */
    public $OssPrivateAccess;

    /**
     * @var HwPrivateAccess Access authentication for Huawei Cloud OBS origin
     */
    public $HwPrivateAccess;

    /**
     * @var OthersPrivateAccess Origin-pull authentication for other origins.
     */
    public $OthersPrivateAccess;

    /**
     * @param string $Area Domain name acceleration areas: <li>mainland: acceleration within China; </li> <li>overseas: acceleration outside China; </li> <li>global: global acceleration. </li>
     * @param Origin $Origin Origin Server Configuration.
     * @param IpFilter $IpFilter IP blocklist/allowlist configuration. This is disabled by default.
     * @param UserAgentFilter $UserAgentFilter UserAgent:blacklist/whitelist configuration.
     * @param FollowRedirect $FollowRedirect Back to the source 301/302 status code automatically follows the configuration, the default is off
     * @param RequestHeader $RequestHeader Custom request header configuration. This is disabled by default.
     * @param ResponseHeader $ResponseHeader Custom response header configuration. This is disabled by default.
     * @param Cache $Cache Node cache expiration time configuration.
     * @param Https $Https Domain name HTTPS acceleration configuration. This is disabled by default.
     * @param Authentication $Authentication Timestamp hotlink protection configuration.
     * @param ForceRedirect $ForceRedirect Access protocol forced redirect configuration. This is disabled by default.
     * @param Referer $Referer Referer blacklist/whitelist configuration. This is disabled by default.
     * @param MaxAge $MaxAge Browser cache rule configuration, which is used to set the default value of MaxAge and is disabled by default.
     * @param Ipv6Access $Ipv6Access IPv6 access configuration.
     * @param Quic $Quic QUIC configuration item.
     * @param AwsPrivateAccess $AwsPrivateAccess Origin access authentication for S3 bucket.
     * @param OssPrivateAccess $OssPrivateAccess Access authentication configuration for OSS origin.
     * @param HwPrivateAccess $HwPrivateAccess Access authentication for Huawei Cloud OBS origin
     * @param OthersPrivateAccess $OthersPrivateAccess Origin-pull authentication for other origins.
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
