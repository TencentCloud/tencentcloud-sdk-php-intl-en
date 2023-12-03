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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateDomainConfig request structure.
 *
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method Origin getOrigin() Obtain Origin server configuration
 * @method void setOrigin(Origin $Origin) Set Origin server configuration
 * @method IpFilter getIpFilter() Obtain IP blocklist/allowlist configuration
 * @method void setIpFilter(IpFilter $IpFilter) Set IP blocklist/allowlist configuration
 * @method IpFreqLimit getIpFreqLimit() Obtain IP access limit configuration
 * @method void setIpFreqLimit(IpFreqLimit $IpFreqLimit) Set IP access limit configuration
 * @method StatusCodeCache getStatusCodeCache() Obtain Status code cache configuration
 * @method void setStatusCodeCache(StatusCodeCache $StatusCodeCache) Set Status code cache configuration
 * @method Compression getCompression() Obtain Smart compression configuration
 * @method void setCompression(Compression $Compression) Set Smart compression configuration
 * @method BandwidthAlert getBandwidthAlert() Obtain Bandwidth cap configuration
 * @method void setBandwidthAlert(BandwidthAlert $BandwidthAlert) Set Bandwidth cap configuration
 * @method RangeOriginPull getRangeOriginPull() Obtain Range GETs configuration
 * @method void setRangeOriginPull(RangeOriginPull $RangeOriginPull) Set Range GETs configuration
 * @method FollowRedirect getFollowRedirect() Obtain 301/302 origin-pull follow-redirect configuration
 * @method void setFollowRedirect(FollowRedirect $FollowRedirect) Set 301/302 origin-pull follow-redirect configuration
 * @method ErrorPage getErrorPage() Obtain Error code redirect configuration (This feature is in beta and not generally available yet.)
 * @method void setErrorPage(ErrorPage $ErrorPage) Set Error code redirect configuration (This feature is in beta and not generally available yet.)
 * @method RequestHeader getRequestHeader() Obtain Origin-pull request header configuration.
 * @method void setRequestHeader(RequestHeader $RequestHeader) Set Origin-pull request header configuration.
 * @method ResponseHeader getResponseHeader() Obtain Response header configuration
 * @method void setResponseHeader(ResponseHeader $ResponseHeader) Set Response header configuration
 * @method DownstreamCapping getDownstreamCapping() Obtain Download speed configuration
 * @method void setDownstreamCapping(DownstreamCapping $DownstreamCapping) Set Download speed configuration
 * @method CacheKey getCacheKey() Obtain Node cache key configuration
 * @method void setCacheKey(CacheKey $CacheKey) Set Node cache key configuration
 * @method ResponseHeaderCache getResponseHeaderCache() Obtain Header cache configuration
 * @method void setResponseHeaderCache(ResponseHeaderCache $ResponseHeaderCache) Set Header cache configuration
 * @method VideoSeek getVideoSeek() Obtain Video dragging configuration
 * @method void setVideoSeek(VideoSeek $VideoSeek) Set Video dragging configuration
 * @method Cache getCache() Obtain Cache expiration time configuration
 * @method void setCache(Cache $Cache) Set Cache expiration time configuration
 * @method OriginPullOptimization getOriginPullOptimization() Obtain (Disused) Cross-border linkage optimization\
 * @method void setOriginPullOptimization(OriginPullOptimization $OriginPullOptimization) Set (Disused) Cross-border linkage optimization\
 * @method Https getHttps() Obtain HTTPS acceleration configuration
 * @method void setHttps(Https $Https) Set HTTPS acceleration configuration
 * @method Authentication getAuthentication() Obtain Timestamp hotlink protection configuration
 * @method void setAuthentication(Authentication $Authentication) Set Timestamp hotlink protection configuration
 * @method Seo getSeo() Obtain SEO configuration
 * @method void setSeo(Seo $Seo) Set SEO configuration
 * @method ForceRedirect getForceRedirect() Obtain Protocol redirect configuration
 * @method void setForceRedirect(ForceRedirect $ForceRedirect) Set Protocol redirect configuration
 * @method Referer getReferer() Obtain Referer configuration
 * @method void setReferer(Referer $Referer) Set Referer configuration
 * @method MaxAge getMaxAge() Obtain Browser cache configuration (This feature is in beta and not generally available yet.)
 * @method void setMaxAge(MaxAge $MaxAge) Set Browser cache configuration (This feature is in beta and not generally available yet.)
 * @method SpecificConfig getSpecificConfig() Obtain Specific-region special configuration
Applicable to cases where the acceleration domain name configuration differs for regions in and outside the Chinese mainland.
 * @method void setSpecificConfig(SpecificConfig $SpecificConfig) Set Specific-region special configuration
Applicable to cases where the acceleration domain name configuration differs for regions in and outside the Chinese mainland.
 * @method string getServiceType() Obtain Domain name service type
`web`: Static acceleration
`download`: Download acceleration
`media`: Streaming media VOD acceleration
 * @method void setServiceType(string $ServiceType) Set Domain name service type
`web`: Static acceleration
`download`: Download acceleration
`media`: Streaming media VOD acceleration
 * @method string getArea() Obtain Domain name acceleration region
`mainland`: Acceleration inside the Chinese mainland
`overseas`: Acceleration outside the Chinese mainland
`global`: Acceleration over the globe
After switching to global acceleration, configurations of the domain name will be deployed to the region inside or outside the Chinese mainland. The deployment will take some time as this domain name has special settings.
 * @method void setArea(string $Area) Set Domain name acceleration region
`mainland`: Acceleration inside the Chinese mainland
`overseas`: Acceleration outside the Chinese mainland
`global`: Acceleration over the globe
After switching to global acceleration, configurations of the domain name will be deployed to the region inside or outside the Chinese mainland. The deployment will take some time as this domain name has special settings.
 * @method OriginPullTimeout getOriginPullTimeout() Obtain Origin-pull timeout configuration
 * @method void setOriginPullTimeout(OriginPullTimeout $OriginPullTimeout) Set Origin-pull timeout configuration
 * @method AwsPrivateAccess getAwsPrivateAccess() Obtain Access authentication for S3 origin
 * @method void setAwsPrivateAccess(AwsPrivateAccess $AwsPrivateAccess) Set Access authentication for S3 origin
 * @method UserAgentFilter getUserAgentFilter() Obtain UA blocklist/allowlist configuration
 * @method void setUserAgentFilter(UserAgentFilter $UserAgentFilter) Set UA blocklist/allowlist configuration
 * @method AccessControl getAccessControl() Obtain Access control
 * @method void setAccessControl(AccessControl $AccessControl) Set Access control
 * @method UrlRedirect getUrlRedirect() Obtain URL rewriting configuration
 * @method void setUrlRedirect(UrlRedirect $UrlRedirect) Set URL rewriting configuration
 * @method array getAccessPort() Obtain Access port configuration
 * @method void setAccessPort(array $AccessPort) Set Access port configuration
 * @method AdvancedAuthentication getAdvancedAuthentication() Obtain Timestamp hotlink protection advanced configuration (allowlist feature)
 * @method void setAdvancedAuthentication(AdvancedAuthentication $AdvancedAuthentication) Set Timestamp hotlink protection advanced configuration (allowlist feature)
 * @method OriginAuthentication getOriginAuthentication() Obtain Origin-pull authentication advanced configuration (allowlist feature)
 * @method void setOriginAuthentication(OriginAuthentication $OriginAuthentication) Set Origin-pull authentication advanced configuration (allowlist feature)
 * @method Ipv6Access getIpv6Access() Obtain IPv6 access configuration
 * @method void setIpv6Access(Ipv6Access $Ipv6Access) Set IPv6 access configuration
 * @method OfflineCache getOfflineCache() Obtain Offline cache
 * @method void setOfflineCache(OfflineCache $OfflineCache) Set Offline cache
 * @method OriginCombine getOriginCombine() Obtain Merging pull requests
 * @method void setOriginCombine(OriginCombine $OriginCombine) Set Merging pull requests
 * @method PostSize getPostMaxSize() Obtain Post transport configuration
 * @method void setPostMaxSize(PostSize $PostMaxSize) Set Post transport configuration
 * @method Quic getQuic() Obtain QUIC access, which is a paid service. You can check the product document and Billing Overview for more information.
 * @method void setQuic(Quic $Quic) Set QUIC access, which is a paid service. You can check the product document and Billing Overview for more information.
 * @method OssPrivateAccess getOssPrivateAccess() Obtain Access authentication for OSS origin
 * @method void setOssPrivateAccess(OssPrivateAccess $OssPrivateAccess) Set Access authentication for OSS origin
 * @method WebSocket getWebSocket() Obtain WebSocket configuration
 * @method void setWebSocket(WebSocket $WebSocket) Set WebSocket configuration
 * @method RemoteAuthentication getRemoteAuthentication() Obtain Remote authentication configuration
 * @method void setRemoteAuthentication(RemoteAuthentication $RemoteAuthentication) Set Remote authentication configuration
 * @method ShareCname getShareCname() Obtain Shared CNAME configuration (only available to beta users)
 * @method void setShareCname(ShareCname $ShareCname) Set Shared CNAME configuration (only available to beta users)
 * @method HwPrivateAccess getHwPrivateAccess() Obtain Access authentication for Huawei Cloud OBS origin
 * @method void setHwPrivateAccess(HwPrivateAccess $HwPrivateAccess) Set Access authentication for Huawei Cloud OBS origin
 * @method QnPrivateAccess getQnPrivateAccess() Obtain Access authentication for QiNiu Cloud Kodo origin
 * @method void setQnPrivateAccess(QnPrivateAccess $QnPrivateAccess) Set Access authentication for QiNiu Cloud Kodo origin
 * @method OthersPrivateAccess getOthersPrivateAccess() Obtain Origin-pull authentication for other origins
 * @method void setOthersPrivateAccess(OthersPrivateAccess $OthersPrivateAccess) Set Origin-pull authentication for other origins
 * @method HttpsBilling getHttpsBilling() Obtain HTTPS, which is a paid service. You can check the product document and Billing Overview for more information.
 * @method void setHttpsBilling(HttpsBilling $HttpsBilling) Set HTTPS, which is a paid service. You can check the product document and Billing Overview for more information.
 */
class UpdateDomainConfigRequest extends AbstractModel
{
    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var Origin Origin server configuration
     */
    public $Origin;

    /**
     * @var IpFilter IP blocklist/allowlist configuration
     */
    public $IpFilter;

    /**
     * @var IpFreqLimit IP access limit configuration
     */
    public $IpFreqLimit;

    /**
     * @var StatusCodeCache Status code cache configuration
     */
    public $StatusCodeCache;

    /**
     * @var Compression Smart compression configuration
     */
    public $Compression;

    /**
     * @var BandwidthAlert Bandwidth cap configuration
     */
    public $BandwidthAlert;

    /**
     * @var RangeOriginPull Range GETs configuration
     */
    public $RangeOriginPull;

    /**
     * @var FollowRedirect 301/302 origin-pull follow-redirect configuration
     */
    public $FollowRedirect;

    /**
     * @var ErrorPage Error code redirect configuration (This feature is in beta and not generally available yet.)
     */
    public $ErrorPage;

    /**
     * @var RequestHeader Origin-pull request header configuration.
     */
    public $RequestHeader;

    /**
     * @var ResponseHeader Response header configuration
     */
    public $ResponseHeader;

    /**
     * @var DownstreamCapping Download speed configuration
     */
    public $DownstreamCapping;

    /**
     * @var CacheKey Node cache key configuration
     */
    public $CacheKey;

    /**
     * @var ResponseHeaderCache Header cache configuration
     */
    public $ResponseHeaderCache;

    /**
     * @var VideoSeek Video dragging configuration
     */
    public $VideoSeek;

    /**
     * @var Cache Cache expiration time configuration
     */
    public $Cache;

    /**
     * @var OriginPullOptimization (Disused) Cross-border linkage optimization\
     */
    public $OriginPullOptimization;

    /**
     * @var Https HTTPS acceleration configuration
     */
    public $Https;

    /**
     * @var Authentication Timestamp hotlink protection configuration
     */
    public $Authentication;

    /**
     * @var Seo SEO configuration
     */
    public $Seo;

    /**
     * @var ForceRedirect Protocol redirect configuration
     */
    public $ForceRedirect;

    /**
     * @var Referer Referer configuration
     */
    public $Referer;

    /**
     * @var MaxAge Browser cache configuration (This feature is in beta and not generally available yet.)
     */
    public $MaxAge;

    /**
     * @var SpecificConfig Specific-region special configuration
Applicable to cases where the acceleration domain name configuration differs for regions in and outside the Chinese mainland.
     */
    public $SpecificConfig;

    /**
     * @var string Domain name service type
`web`: Static acceleration
`download`: Download acceleration
`media`: Streaming media VOD acceleration
     */
    public $ServiceType;

    /**
     * @var string Domain name acceleration region
`mainland`: Acceleration inside the Chinese mainland
`overseas`: Acceleration outside the Chinese mainland
`global`: Acceleration over the globe
After switching to global acceleration, configurations of the domain name will be deployed to the region inside or outside the Chinese mainland. The deployment will take some time as this domain name has special settings.
     */
    public $Area;

    /**
     * @var OriginPullTimeout Origin-pull timeout configuration
     */
    public $OriginPullTimeout;

    /**
     * @var AwsPrivateAccess Access authentication for S3 origin
     */
    public $AwsPrivateAccess;

    /**
     * @var UserAgentFilter UA blocklist/allowlist configuration
     */
    public $UserAgentFilter;

    /**
     * @var AccessControl Access control
     */
    public $AccessControl;

    /**
     * @var UrlRedirect URL rewriting configuration
     */
    public $UrlRedirect;

    /**
     * @var array Access port configuration
     */
    public $AccessPort;

    /**
     * @var AdvancedAuthentication Timestamp hotlink protection advanced configuration (allowlist feature)
     */
    public $AdvancedAuthentication;

    /**
     * @var OriginAuthentication Origin-pull authentication advanced configuration (allowlist feature)
     */
    public $OriginAuthentication;

    /**
     * @var Ipv6Access IPv6 access configuration
     */
    public $Ipv6Access;

    /**
     * @var OfflineCache Offline cache
     */
    public $OfflineCache;

    /**
     * @var OriginCombine Merging pull requests
     */
    public $OriginCombine;

    /**
     * @var PostSize Post transport configuration
     */
    public $PostMaxSize;

    /**
     * @var Quic QUIC access, which is a paid service. You can check the product document and Billing Overview for more information.
     */
    public $Quic;

    /**
     * @var OssPrivateAccess Access authentication for OSS origin
     */
    public $OssPrivateAccess;

    /**
     * @var WebSocket WebSocket configuration
     */
    public $WebSocket;

    /**
     * @var RemoteAuthentication Remote authentication configuration
     */
    public $RemoteAuthentication;

    /**
     * @var ShareCname Shared CNAME configuration (only available to beta users)
     */
    public $ShareCname;

    /**
     * @var HwPrivateAccess Access authentication for Huawei Cloud OBS origin
     */
    public $HwPrivateAccess;

    /**
     * @var QnPrivateAccess Access authentication for QiNiu Cloud Kodo origin
     */
    public $QnPrivateAccess;

    /**
     * @var OthersPrivateAccess Origin-pull authentication for other origins
     */
    public $OthersPrivateAccess;

    /**
     * @var HttpsBilling HTTPS, which is a paid service. You can check the product document and Billing Overview for more information.
     */
    public $HttpsBilling;

    /**
     * @param string $Domain Domain name
     * @param integer $ProjectId Project ID
     * @param Origin $Origin Origin server configuration
     * @param IpFilter $IpFilter IP blocklist/allowlist configuration
     * @param IpFreqLimit $IpFreqLimit IP access limit configuration
     * @param StatusCodeCache $StatusCodeCache Status code cache configuration
     * @param Compression $Compression Smart compression configuration
     * @param BandwidthAlert $BandwidthAlert Bandwidth cap configuration
     * @param RangeOriginPull $RangeOriginPull Range GETs configuration
     * @param FollowRedirect $FollowRedirect 301/302 origin-pull follow-redirect configuration
     * @param ErrorPage $ErrorPage Error code redirect configuration (This feature is in beta and not generally available yet.)
     * @param RequestHeader $RequestHeader Origin-pull request header configuration.
     * @param ResponseHeader $ResponseHeader Response header configuration
     * @param DownstreamCapping $DownstreamCapping Download speed configuration
     * @param CacheKey $CacheKey Node cache key configuration
     * @param ResponseHeaderCache $ResponseHeaderCache Header cache configuration
     * @param VideoSeek $VideoSeek Video dragging configuration
     * @param Cache $Cache Cache expiration time configuration
     * @param OriginPullOptimization $OriginPullOptimization (Disused) Cross-border linkage optimization\
     * @param Https $Https HTTPS acceleration configuration
     * @param Authentication $Authentication Timestamp hotlink protection configuration
     * @param Seo $Seo SEO configuration
     * @param ForceRedirect $ForceRedirect Protocol redirect configuration
     * @param Referer $Referer Referer configuration
     * @param MaxAge $MaxAge Browser cache configuration (This feature is in beta and not generally available yet.)
     * @param SpecificConfig $SpecificConfig Specific-region special configuration
Applicable to cases where the acceleration domain name configuration differs for regions in and outside the Chinese mainland.
     * @param string $ServiceType Domain name service type
`web`: Static acceleration
`download`: Download acceleration
`media`: Streaming media VOD acceleration
     * @param string $Area Domain name acceleration region
`mainland`: Acceleration inside the Chinese mainland
`overseas`: Acceleration outside the Chinese mainland
`global`: Acceleration over the globe
After switching to global acceleration, configurations of the domain name will be deployed to the region inside or outside the Chinese mainland. The deployment will take some time as this domain name has special settings.
     * @param OriginPullTimeout $OriginPullTimeout Origin-pull timeout configuration
     * @param AwsPrivateAccess $AwsPrivateAccess Access authentication for S3 origin
     * @param UserAgentFilter $UserAgentFilter UA blocklist/allowlist configuration
     * @param AccessControl $AccessControl Access control
     * @param UrlRedirect $UrlRedirect URL rewriting configuration
     * @param array $AccessPort Access port configuration
     * @param AdvancedAuthentication $AdvancedAuthentication Timestamp hotlink protection advanced configuration (allowlist feature)
     * @param OriginAuthentication $OriginAuthentication Origin-pull authentication advanced configuration (allowlist feature)
     * @param Ipv6Access $Ipv6Access IPv6 access configuration
     * @param OfflineCache $OfflineCache Offline cache
     * @param OriginCombine $OriginCombine Merging pull requests
     * @param PostSize $PostMaxSize Post transport configuration
     * @param Quic $Quic QUIC access, which is a paid service. You can check the product document and Billing Overview for more information.
     * @param OssPrivateAccess $OssPrivateAccess Access authentication for OSS origin
     * @param WebSocket $WebSocket WebSocket configuration
     * @param RemoteAuthentication $RemoteAuthentication Remote authentication configuration
     * @param ShareCname $ShareCname Shared CNAME configuration (only available to beta users)
     * @param HwPrivateAccess $HwPrivateAccess Access authentication for Huawei Cloud OBS origin
     * @param QnPrivateAccess $QnPrivateAccess Access authentication for QiNiu Cloud Kodo origin
     * @param OthersPrivateAccess $OthersPrivateAccess Origin-pull authentication for other origins
     * @param HttpsBilling $HttpsBilling HTTPS, which is a paid service. You can check the product document and Billing Overview for more information.
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = new Origin();
            $this->Origin->deserialize($param["Origin"]);
        }

        if (array_key_exists("IpFilter",$param) and $param["IpFilter"] !== null) {
            $this->IpFilter = new IpFilter();
            $this->IpFilter->deserialize($param["IpFilter"]);
        }

        if (array_key_exists("IpFreqLimit",$param) and $param["IpFreqLimit"] !== null) {
            $this->IpFreqLimit = new IpFreqLimit();
            $this->IpFreqLimit->deserialize($param["IpFreqLimit"]);
        }

        if (array_key_exists("StatusCodeCache",$param) and $param["StatusCodeCache"] !== null) {
            $this->StatusCodeCache = new StatusCodeCache();
            $this->StatusCodeCache->deserialize($param["StatusCodeCache"]);
        }

        if (array_key_exists("Compression",$param) and $param["Compression"] !== null) {
            $this->Compression = new Compression();
            $this->Compression->deserialize($param["Compression"]);
        }

        if (array_key_exists("BandwidthAlert",$param) and $param["BandwidthAlert"] !== null) {
            $this->BandwidthAlert = new BandwidthAlert();
            $this->BandwidthAlert->deserialize($param["BandwidthAlert"]);
        }

        if (array_key_exists("RangeOriginPull",$param) and $param["RangeOriginPull"] !== null) {
            $this->RangeOriginPull = new RangeOriginPull();
            $this->RangeOriginPull->deserialize($param["RangeOriginPull"]);
        }

        if (array_key_exists("FollowRedirect",$param) and $param["FollowRedirect"] !== null) {
            $this->FollowRedirect = new FollowRedirect();
            $this->FollowRedirect->deserialize($param["FollowRedirect"]);
        }

        if (array_key_exists("ErrorPage",$param) and $param["ErrorPage"] !== null) {
            $this->ErrorPage = new ErrorPage();
            $this->ErrorPage->deserialize($param["ErrorPage"]);
        }

        if (array_key_exists("RequestHeader",$param) and $param["RequestHeader"] !== null) {
            $this->RequestHeader = new RequestHeader();
            $this->RequestHeader->deserialize($param["RequestHeader"]);
        }

        if (array_key_exists("ResponseHeader",$param) and $param["ResponseHeader"] !== null) {
            $this->ResponseHeader = new ResponseHeader();
            $this->ResponseHeader->deserialize($param["ResponseHeader"]);
        }

        if (array_key_exists("DownstreamCapping",$param) and $param["DownstreamCapping"] !== null) {
            $this->DownstreamCapping = new DownstreamCapping();
            $this->DownstreamCapping->deserialize($param["DownstreamCapping"]);
        }

        if (array_key_exists("CacheKey",$param) and $param["CacheKey"] !== null) {
            $this->CacheKey = new CacheKey();
            $this->CacheKey->deserialize($param["CacheKey"]);
        }

        if (array_key_exists("ResponseHeaderCache",$param) and $param["ResponseHeaderCache"] !== null) {
            $this->ResponseHeaderCache = new ResponseHeaderCache();
            $this->ResponseHeaderCache->deserialize($param["ResponseHeaderCache"]);
        }

        if (array_key_exists("VideoSeek",$param) and $param["VideoSeek"] !== null) {
            $this->VideoSeek = new VideoSeek();
            $this->VideoSeek->deserialize($param["VideoSeek"]);
        }

        if (array_key_exists("Cache",$param) and $param["Cache"] !== null) {
            $this->Cache = new Cache();
            $this->Cache->deserialize($param["Cache"]);
        }

        if (array_key_exists("OriginPullOptimization",$param) and $param["OriginPullOptimization"] !== null) {
            $this->OriginPullOptimization = new OriginPullOptimization();
            $this->OriginPullOptimization->deserialize($param["OriginPullOptimization"]);
        }

        if (array_key_exists("Https",$param) and $param["Https"] !== null) {
            $this->Https = new Https();
            $this->Https->deserialize($param["Https"]);
        }

        if (array_key_exists("Authentication",$param) and $param["Authentication"] !== null) {
            $this->Authentication = new Authentication();
            $this->Authentication->deserialize($param["Authentication"]);
        }

        if (array_key_exists("Seo",$param) and $param["Seo"] !== null) {
            $this->Seo = new Seo();
            $this->Seo->deserialize($param["Seo"]);
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

        if (array_key_exists("SpecificConfig",$param) and $param["SpecificConfig"] !== null) {
            $this->SpecificConfig = new SpecificConfig();
            $this->SpecificConfig->deserialize($param["SpecificConfig"]);
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("OriginPullTimeout",$param) and $param["OriginPullTimeout"] !== null) {
            $this->OriginPullTimeout = new OriginPullTimeout();
            $this->OriginPullTimeout->deserialize($param["OriginPullTimeout"]);
        }

        if (array_key_exists("AwsPrivateAccess",$param) and $param["AwsPrivateAccess"] !== null) {
            $this->AwsPrivateAccess = new AwsPrivateAccess();
            $this->AwsPrivateAccess->deserialize($param["AwsPrivateAccess"]);
        }

        if (array_key_exists("UserAgentFilter",$param) and $param["UserAgentFilter"] !== null) {
            $this->UserAgentFilter = new UserAgentFilter();
            $this->UserAgentFilter->deserialize($param["UserAgentFilter"]);
        }

        if (array_key_exists("AccessControl",$param) and $param["AccessControl"] !== null) {
            $this->AccessControl = new AccessControl();
            $this->AccessControl->deserialize($param["AccessControl"]);
        }

        if (array_key_exists("UrlRedirect",$param) and $param["UrlRedirect"] !== null) {
            $this->UrlRedirect = new UrlRedirect();
            $this->UrlRedirect->deserialize($param["UrlRedirect"]);
        }

        if (array_key_exists("AccessPort",$param) and $param["AccessPort"] !== null) {
            $this->AccessPort = $param["AccessPort"];
        }

        if (array_key_exists("AdvancedAuthentication",$param) and $param["AdvancedAuthentication"] !== null) {
            $this->AdvancedAuthentication = new AdvancedAuthentication();
            $this->AdvancedAuthentication->deserialize($param["AdvancedAuthentication"]);
        }

        if (array_key_exists("OriginAuthentication",$param) and $param["OriginAuthentication"] !== null) {
            $this->OriginAuthentication = new OriginAuthentication();
            $this->OriginAuthentication->deserialize($param["OriginAuthentication"]);
        }

        if (array_key_exists("Ipv6Access",$param) and $param["Ipv6Access"] !== null) {
            $this->Ipv6Access = new Ipv6Access();
            $this->Ipv6Access->deserialize($param["Ipv6Access"]);
        }

        if (array_key_exists("OfflineCache",$param) and $param["OfflineCache"] !== null) {
            $this->OfflineCache = new OfflineCache();
            $this->OfflineCache->deserialize($param["OfflineCache"]);
        }

        if (array_key_exists("OriginCombine",$param) and $param["OriginCombine"] !== null) {
            $this->OriginCombine = new OriginCombine();
            $this->OriginCombine->deserialize($param["OriginCombine"]);
        }

        if (array_key_exists("PostMaxSize",$param) and $param["PostMaxSize"] !== null) {
            $this->PostMaxSize = new PostSize();
            $this->PostMaxSize->deserialize($param["PostMaxSize"]);
        }

        if (array_key_exists("Quic",$param) and $param["Quic"] !== null) {
            $this->Quic = new Quic();
            $this->Quic->deserialize($param["Quic"]);
        }

        if (array_key_exists("OssPrivateAccess",$param) and $param["OssPrivateAccess"] !== null) {
            $this->OssPrivateAccess = new OssPrivateAccess();
            $this->OssPrivateAccess->deserialize($param["OssPrivateAccess"]);
        }

        if (array_key_exists("WebSocket",$param) and $param["WebSocket"] !== null) {
            $this->WebSocket = new WebSocket();
            $this->WebSocket->deserialize($param["WebSocket"]);
        }

        if (array_key_exists("RemoteAuthentication",$param) and $param["RemoteAuthentication"] !== null) {
            $this->RemoteAuthentication = new RemoteAuthentication();
            $this->RemoteAuthentication->deserialize($param["RemoteAuthentication"]);
        }

        if (array_key_exists("ShareCname",$param) and $param["ShareCname"] !== null) {
            $this->ShareCname = new ShareCname();
            $this->ShareCname->deserialize($param["ShareCname"]);
        }

        if (array_key_exists("HwPrivateAccess",$param) and $param["HwPrivateAccess"] !== null) {
            $this->HwPrivateAccess = new HwPrivateAccess();
            $this->HwPrivateAccess->deserialize($param["HwPrivateAccess"]);
        }

        if (array_key_exists("QnPrivateAccess",$param) and $param["QnPrivateAccess"] !== null) {
            $this->QnPrivateAccess = new QnPrivateAccess();
            $this->QnPrivateAccess->deserialize($param["QnPrivateAccess"]);
        }

        if (array_key_exists("OthersPrivateAccess",$param) and $param["OthersPrivateAccess"] !== null) {
            $this->OthersPrivateAccess = new OthersPrivateAccess();
            $this->OthersPrivateAccess->deserialize($param["OthersPrivateAccess"]);
        }

        if (array_key_exists("HttpsBilling",$param) and $param["HttpsBilling"] !== null) {
            $this->HttpsBilling = new HttpsBilling();
            $this->HttpsBilling->deserialize($param["HttpsBilling"]);
        }
    }
}
