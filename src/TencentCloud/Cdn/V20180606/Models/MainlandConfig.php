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
 * Specific configuration for domain names in the Chinese mainland. Specific configuration by region. The `UpdateDomainConfig` API only supports modification of some region configurations. A list of differences that may exist for older configurations will be provided for a compatibility check. The supported configuration list is as follows:
+ Authentication
+ BandwidthAlert
+ ErrorPage
+ IpFilter
+ Origin
+ Referer
 *
 * @method Authentication getAuthentication() Obtain Timestamp hotlink protection configuration.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setAuthentication(Authentication $Authentication) Set Timestamp hotlink protection configuration.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method BandwidthAlert getBandwidthAlert() Obtain Bandwidth cap configuration.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setBandwidthAlert(BandwidthAlert $BandwidthAlert) Set Bandwidth cap configuration.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method Cache getCache() Obtain Cache rule configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCache(Cache $Cache) Set Cache rule configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method CacheKey getCacheKey() Obtain Cache configurations.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCacheKey(CacheKey $CacheKey) Set Cache configurations.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method Compression getCompression() Obtain Smart compression configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCompression(Compression $Compression) Set Smart compression configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method DownstreamCapping getDownstreamCapping() Obtain Download speed limit configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setDownstreamCapping(DownstreamCapping $DownstreamCapping) Set Download speed limit configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method ErrorPage getErrorPage() Obtain Error code redirect configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setErrorPage(ErrorPage $ErrorPage) Set Error code redirect configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method FollowRedirect getFollowRedirect() Obtain 301 and 302 automatic origin-pull follow-redirect configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setFollowRedirect(FollowRedirect $FollowRedirect) Set 301 and 302 automatic origin-pull follow-redirect configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method ForceRedirect getForceRedirect() Obtain Force redirect by access protocol.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setForceRedirect(ForceRedirect $ForceRedirect) Set Force redirect by access protocol.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method Https getHttps() Obtain HTTPS configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setHttps(Https $Https) Set HTTPS configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method IpFilter getIpFilter() Obtain IP blocklist/allowlist configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setIpFilter(IpFilter $IpFilter) Set IP blocklist/allowlist configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method IpFreqLimit getIpFreqLimit() Obtain IP access limiting configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setIpFreqLimit(IpFreqLimit $IpFreqLimit) Set IP access limiting configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method MaxAge getMaxAge() Obtain Browser cache rules configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setMaxAge(MaxAge $MaxAge) Set Browser cache rules configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method Origin getOrigin() Obtain Origin server configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setOrigin(Origin $Origin) Set Origin server configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method OriginPullOptimization getOriginPullOptimization() Obtain Cross-border optimization configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setOriginPullOptimization(OriginPullOptimization $OriginPullOptimization) Set Cross-border optimization configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method RangeOriginPull getRangeOriginPull() Obtain Range GETs configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setRangeOriginPull(RangeOriginPull $RangeOriginPull) Set Range GETs configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method Referer getReferer() Obtain Hotlink protection configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setReferer(Referer $Referer) Set Hotlink protection configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method RequestHeader getRequestHeader() Obtain Origin-pull request header configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setRequestHeader(RequestHeader $RequestHeader) Set Origin-pull request header configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method ResponseHeader getResponseHeader() Obtain Origin server response header configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setResponseHeader(ResponseHeader $ResponseHeader) Set Origin server response header configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method ResponseHeaderCache getResponseHeaderCache() Obtain Follows origin server cache header configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setResponseHeaderCache(ResponseHeaderCache $ResponseHeaderCache) Set Follows origin server cache header configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method Seo getSeo() Obtain SEO configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setSeo(Seo $Seo) Set SEO configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getServiceType() Obtain Domain name service type. Values: `web` (static acceleration); `download` (download acceleration); `media` (streaming media acceleration).
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setServiceType(string $ServiceType) Set Domain name service type. Values: `web` (static acceleration); `download` (download acceleration); `media` (streaming media acceleration).
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method StatusCodeCache getStatusCodeCache() Obtain Status code cache configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setStatusCodeCache(StatusCodeCache $StatusCodeCache) Set Status code cache configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method VideoSeek getVideoSeek() Obtain Video dragging configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setVideoSeek(VideoSeek $VideoSeek) Set Video dragging configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method AwsPrivateAccess getAwsPrivateAccess() Obtain Access authentication for S3 origin
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setAwsPrivateAccess(AwsPrivateAccess $AwsPrivateAccess) Set Access authentication for S3 origin
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method OssPrivateAccess getOssPrivateAccess() Obtain Access authentication for OSS origin
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setOssPrivateAccess(OssPrivateAccess $OssPrivateAccess) Set Access authentication for OSS origin
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method HwPrivateAccess getHwPrivateAccess() Obtain Access authentication for Huawei Cloud OBS origin
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setHwPrivateAccess(HwPrivateAccess $HwPrivateAccess) Set Access authentication for Huawei Cloud OBS origin
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method QnPrivateAccess getQnPrivateAccess() Obtain Access authentication for QiNiu Cloud Kodo origin
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setQnPrivateAccess(QnPrivateAccess $QnPrivateAccess) Set Access authentication for QiNiu Cloud Kodo origin
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class MainlandConfig extends AbstractModel
{
    /**
     * @var Authentication Timestamp hotlink protection configuration.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Authentication;

    /**
     * @var BandwidthAlert Bandwidth cap configuration.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $BandwidthAlert;

    /**
     * @var Cache Cache rule configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Cache;

    /**
     * @var CacheKey Cache configurations.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $CacheKey;

    /**
     * @var Compression Smart compression configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Compression;

    /**
     * @var DownstreamCapping Download speed limit configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $DownstreamCapping;

    /**
     * @var ErrorPage Error code redirect configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ErrorPage;

    /**
     * @var FollowRedirect 301 and 302 automatic origin-pull follow-redirect configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $FollowRedirect;

    /**
     * @var ForceRedirect Force redirect by access protocol.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ForceRedirect;

    /**
     * @var Https HTTPS configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Https;

    /**
     * @var IpFilter IP blocklist/allowlist configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $IpFilter;

    /**
     * @var IpFreqLimit IP access limiting configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $IpFreqLimit;

    /**
     * @var MaxAge Browser cache rules configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $MaxAge;

    /**
     * @var Origin Origin server configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Origin;

    /**
     * @var OriginPullOptimization Cross-border optimization configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $OriginPullOptimization;

    /**
     * @var RangeOriginPull Range GETs configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $RangeOriginPull;

    /**
     * @var Referer Hotlink protection configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Referer;

    /**
     * @var RequestHeader Origin-pull request header configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $RequestHeader;

    /**
     * @var ResponseHeader Origin server response header configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ResponseHeader;

    /**
     * @var ResponseHeaderCache Follows origin server cache header configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ResponseHeaderCache;

    /**
     * @var Seo SEO configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Seo;

    /**
     * @var string Domain name service type. Values: `web` (static acceleration); `download` (download acceleration); `media` (streaming media acceleration).
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ServiceType;

    /**
     * @var StatusCodeCache Status code cache configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $StatusCodeCache;

    /**
     * @var VideoSeek Video dragging configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $VideoSeek;

    /**
     * @var AwsPrivateAccess Access authentication for S3 origin
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $AwsPrivateAccess;

    /**
     * @var OssPrivateAccess Access authentication for OSS origin
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $OssPrivateAccess;

    /**
     * @var HwPrivateAccess Access authentication for Huawei Cloud OBS origin
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $HwPrivateAccess;

    /**
     * @var QnPrivateAccess Access authentication for QiNiu Cloud Kodo origin
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $QnPrivateAccess;

    /**
     * @param Authentication $Authentication Timestamp hotlink protection configuration.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param BandwidthAlert $BandwidthAlert Bandwidth cap configuration.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param Cache $Cache Cache rule configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param CacheKey $CacheKey Cache configurations.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param Compression $Compression Smart compression configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param DownstreamCapping $DownstreamCapping Download speed limit configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param ErrorPage $ErrorPage Error code redirect configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param FollowRedirect $FollowRedirect 301 and 302 automatic origin-pull follow-redirect configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param ForceRedirect $ForceRedirect Force redirect by access protocol.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param Https $Https HTTPS configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param IpFilter $IpFilter IP blocklist/allowlist configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param IpFreqLimit $IpFreqLimit IP access limiting configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param MaxAge $MaxAge Browser cache rules configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param Origin $Origin Origin server configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param OriginPullOptimization $OriginPullOptimization Cross-border optimization configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param RangeOriginPull $RangeOriginPull Range GETs configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param Referer $Referer Hotlink protection configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param RequestHeader $RequestHeader Origin-pull request header configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param ResponseHeader $ResponseHeader Origin server response header configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param ResponseHeaderCache $ResponseHeaderCache Follows origin server cache header configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param Seo $Seo SEO configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $ServiceType Domain name service type. Values: `web` (static acceleration); `download` (download acceleration); `media` (streaming media acceleration).
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param StatusCodeCache $StatusCodeCache Status code cache configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param VideoSeek $VideoSeek Video dragging configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param AwsPrivateAccess $AwsPrivateAccess Access authentication for S3 origin
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param OssPrivateAccess $OssPrivateAccess Access authentication for OSS origin
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param HwPrivateAccess $HwPrivateAccess Access authentication for Huawei Cloud OBS origin
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param QnPrivateAccess $QnPrivateAccess Access authentication for QiNiu Cloud Kodo origin
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
        if (array_key_exists("Authentication",$param) and $param["Authentication"] !== null) {
            $this->Authentication = new Authentication();
            $this->Authentication->deserialize($param["Authentication"]);
        }

        if (array_key_exists("BandwidthAlert",$param) and $param["BandwidthAlert"] !== null) {
            $this->BandwidthAlert = new BandwidthAlert();
            $this->BandwidthAlert->deserialize($param["BandwidthAlert"]);
        }

        if (array_key_exists("Cache",$param) and $param["Cache"] !== null) {
            $this->Cache = new Cache();
            $this->Cache->deserialize($param["Cache"]);
        }

        if (array_key_exists("CacheKey",$param) and $param["CacheKey"] !== null) {
            $this->CacheKey = new CacheKey();
            $this->CacheKey->deserialize($param["CacheKey"]);
        }

        if (array_key_exists("Compression",$param) and $param["Compression"] !== null) {
            $this->Compression = new Compression();
            $this->Compression->deserialize($param["Compression"]);
        }

        if (array_key_exists("DownstreamCapping",$param) and $param["DownstreamCapping"] !== null) {
            $this->DownstreamCapping = new DownstreamCapping();
            $this->DownstreamCapping->deserialize($param["DownstreamCapping"]);
        }

        if (array_key_exists("ErrorPage",$param) and $param["ErrorPage"] !== null) {
            $this->ErrorPage = new ErrorPage();
            $this->ErrorPage->deserialize($param["ErrorPage"]);
        }

        if (array_key_exists("FollowRedirect",$param) and $param["FollowRedirect"] !== null) {
            $this->FollowRedirect = new FollowRedirect();
            $this->FollowRedirect->deserialize($param["FollowRedirect"]);
        }

        if (array_key_exists("ForceRedirect",$param) and $param["ForceRedirect"] !== null) {
            $this->ForceRedirect = new ForceRedirect();
            $this->ForceRedirect->deserialize($param["ForceRedirect"]);
        }

        if (array_key_exists("Https",$param) and $param["Https"] !== null) {
            $this->Https = new Https();
            $this->Https->deserialize($param["Https"]);
        }

        if (array_key_exists("IpFilter",$param) and $param["IpFilter"] !== null) {
            $this->IpFilter = new IpFilter();
            $this->IpFilter->deserialize($param["IpFilter"]);
        }

        if (array_key_exists("IpFreqLimit",$param) and $param["IpFreqLimit"] !== null) {
            $this->IpFreqLimit = new IpFreqLimit();
            $this->IpFreqLimit->deserialize($param["IpFreqLimit"]);
        }

        if (array_key_exists("MaxAge",$param) and $param["MaxAge"] !== null) {
            $this->MaxAge = new MaxAge();
            $this->MaxAge->deserialize($param["MaxAge"]);
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = new Origin();
            $this->Origin->deserialize($param["Origin"]);
        }

        if (array_key_exists("OriginPullOptimization",$param) and $param["OriginPullOptimization"] !== null) {
            $this->OriginPullOptimization = new OriginPullOptimization();
            $this->OriginPullOptimization->deserialize($param["OriginPullOptimization"]);
        }

        if (array_key_exists("RangeOriginPull",$param) and $param["RangeOriginPull"] !== null) {
            $this->RangeOriginPull = new RangeOriginPull();
            $this->RangeOriginPull->deserialize($param["RangeOriginPull"]);
        }

        if (array_key_exists("Referer",$param) and $param["Referer"] !== null) {
            $this->Referer = new Referer();
            $this->Referer->deserialize($param["Referer"]);
        }

        if (array_key_exists("RequestHeader",$param) and $param["RequestHeader"] !== null) {
            $this->RequestHeader = new RequestHeader();
            $this->RequestHeader->deserialize($param["RequestHeader"]);
        }

        if (array_key_exists("ResponseHeader",$param) and $param["ResponseHeader"] !== null) {
            $this->ResponseHeader = new ResponseHeader();
            $this->ResponseHeader->deserialize($param["ResponseHeader"]);
        }

        if (array_key_exists("ResponseHeaderCache",$param) and $param["ResponseHeaderCache"] !== null) {
            $this->ResponseHeaderCache = new ResponseHeaderCache();
            $this->ResponseHeaderCache->deserialize($param["ResponseHeaderCache"]);
        }

        if (array_key_exists("Seo",$param) and $param["Seo"] !== null) {
            $this->Seo = new Seo();
            $this->Seo->deserialize($param["Seo"]);
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("StatusCodeCache",$param) and $param["StatusCodeCache"] !== null) {
            $this->StatusCodeCache = new StatusCodeCache();
            $this->StatusCodeCache->deserialize($param["StatusCodeCache"]);
        }

        if (array_key_exists("VideoSeek",$param) and $param["VideoSeek"] !== null) {
            $this->VideoSeek = new VideoSeek();
            $this->VideoSeek->deserialize($param["VideoSeek"]);
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

        if (array_key_exists("QnPrivateAccess",$param) and $param["QnPrivateAccess"] !== null) {
            $this->QnPrivateAccess = new QnPrivateAccess();
            $this->QnPrivateAccess->deserialize($param["QnPrivateAccess"]);
        }
    }
}
