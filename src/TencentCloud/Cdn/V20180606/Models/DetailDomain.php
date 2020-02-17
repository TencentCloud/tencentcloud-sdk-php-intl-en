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
 * @method string getResourceId() Obtain Domain name ID.
 * @method void setResourceId(string $ResourceId) Set Domain name ID.
 * @method integer getAppId() Obtain Tencent Cloud account ID.
 * @method void setAppId(integer $AppId) Set Tencent Cloud account ID.
 * @method string getDomain() Obtain Accelerated domain name.
 * @method void setDomain(string $Domain) Set Accelerated domain name.
 * @method string getCname() Obtain Domain name CNAME.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCname(string $Cname) Set Domain name CNAME.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Domain name status. pending: under review; rejected: review failed; processing: review succeeded and under deployment; online: enabled; offline: disabled; deleted: deleted.
 * @method void setStatus(string $Status) Set Domain name status. pending: under review; rejected: review failed; processing: review succeeded and under deployment; online: enabled; offline: disabled; deleted: deleted.
 * @method integer getProjectId() Obtain Project ID.
 * @method void setProjectId(integer $ProjectId) Set Project ID.
 * @method string getServiceType() Obtain Domain name business type. web: static acceleration; download: download acceleration; media: streaming media acceleration.
 * @method void setServiceType(string $ServiceType) Set Domain name business type. web: static acceleration; download: download acceleration; media: streaming media acceleration.
 * @method string getCreateTime() Obtain Domain name creation time.
 * @method void setCreateTime(string $CreateTime) Set Domain name creation time.
 * @method string getUpdateTime() Obtain Domain name update time.
 * @method void setUpdateTime(string $UpdateTime) Set Domain name update time.
 * @method Origin getOrigin() Obtain Origin server configuration.
 * @method void setOrigin(Origin $Origin) Set Origin server configuration.
 * @method IpFilter getIpFilter() Obtain IP blacklist/whitelist configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIpFilter(IpFilter $IpFilter) Set IP blacklist/whitelist configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method IpFreqLimit getIpFreqLimit() Obtain IP access limit configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIpFreqLimit(IpFreqLimit $IpFreqLimit) Set IP access limit configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method StatusCodeCache getStatusCodeCache() Obtain Status code cache configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStatusCodeCache(StatusCodeCache $StatusCodeCache) Set Status code cache configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method Compression getCompression() Obtain Smart compression configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCompression(Compression $Compression) Set Smart compression configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method BandwidthAlert getBandwidthAlert() Obtain Bandwidth cap configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setBandwidthAlert(BandwidthAlert $BandwidthAlert) Set Bandwidth cap configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method RangeOriginPull getRangeOriginPull() Obtain Range origin-pull configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRangeOriginPull(RangeOriginPull $RangeOriginPull) Set Range origin-pull configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method FollowRedirect getFollowRedirect() Obtain 301 and 302 automatic origin-pull follow-redirect configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFollowRedirect(FollowRedirect $FollowRedirect) Set 301 and 302 automatic origin-pull follow-redirect configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method ErrorPage getErrorPage() Obtain Error code redirect configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setErrorPage(ErrorPage $ErrorPage) Set Error code redirect configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method RequestHeader getRequestHeader() Obtain Origin-pull request header configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRequestHeader(RequestHeader $RequestHeader) Set Origin-pull request header configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method ResponseHeader getResponseHeader() Obtain Origin server response header configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setResponseHeader(ResponseHeader $ResponseHeader) Set Origin server response header configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method DownstreamCapping getDownstreamCapping() Obtain Download speed configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDownstreamCapping(DownstreamCapping $DownstreamCapping) Set Download speed configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method CacheKey getCacheKey() Obtain Node cache configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCacheKey(CacheKey $CacheKey) Set Node cache configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method ResponseHeaderCache getResponseHeaderCache() Obtain Follows origin server cache header configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setResponseHeaderCache(ResponseHeaderCache $ResponseHeaderCache) Set Follows origin server cache header configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method VideoSeek getVideoSeek() Obtain Video dragging configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVideoSeek(VideoSeek $VideoSeek) Set Video dragging configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method Cache getCache() Obtain Cache rules configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCache(Cache $Cache) Set Cache rules configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method OriginPullOptimization getOriginPullOptimization() Obtain Cross-border optimization configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOriginPullOptimization(OriginPullOptimization $OriginPullOptimization) Set Cross-border optimization configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method Https getHttps() Obtain HTTPS configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setHttps(Https $Https) Set HTTPS configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method Authentication getAuthentication() Obtain Timestamp hotlink protection configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAuthentication(Authentication $Authentication) Set Timestamp hotlink protection configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method Seo getSeo() Obtain SEO configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSeo(Seo $Seo) Set SEO configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDisable() Obtain Domain name block status, including normal, overdue, quota, malicious, ddos, idle, unlicensed, capping, and readonly.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDisable(string $Disable) Set Domain name block status, including normal, overdue, quota, malicious, ddos, idle, unlicensed, capping, and readonly.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method ForceRedirect getForceRedirect() Obtain Access protocol forced redirect configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setForceRedirect(ForceRedirect $ForceRedirect) Set Access protocol forced redirect configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method Referer getReferer() Obtain Hotlink protection configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setReferer(Referer $Referer) Set Hotlink protection configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method MaxAge getMaxAge() Obtain Browser cache rules configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMaxAge(MaxAge $MaxAge) Set Browser cache rules configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method Ipv6 getIpv6() Obtain IPv6 configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIpv6(Ipv6 $Ipv6) Set IPv6 configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method Compatibility getCompatibility() Obtain Whether it is compatible with configurations in old versions.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCompatibility(Compatibility $Compatibility) Set Whether it is compatible with configurations in old versions.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method SpecificConfig getSpecificConfig() Obtain Specific configuration by region.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSpecificConfig(SpecificConfig $SpecificConfig) Set Specific configuration by region.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getArea() Obtain Acceleration region, including mainland, overseas, and global.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setArea(string $Area) Set Acceleration region, including mainland, overseas, and global.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getReadonly() Obtain Domain name lock status. normal: not locked; mainland: locked in mainland China; overseas: locked outside mainland China; global: locked globally.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setReadonly(string $Readonly) Set Domain name lock status. normal: not locked; mainland: locked in mainland China; overseas: locked outside mainland China; global: locked globally.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method OriginPullTimeout getOriginPullTimeout() Obtain Origin-pull timeout configuration
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOriginPullTimeout(OriginPullTimeout $OriginPullTimeout) Set Origin-pull timeout configuration
Note: this field may return null, indicating that no valid values can be obtained.
 */

/**
 *Detailed configuration information for CDN domain names.
 */
class DetailDomain extends AbstractModel
{
    /**
     * @var string Domain name ID.
     */
    public $ResourceId;

    /**
     * @var integer Tencent Cloud account ID.
     */
    public $AppId;

    /**
     * @var string Accelerated domain name.
     */
    public $Domain;

    /**
     * @var string Domain name CNAME.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Cname;

    /**
     * @var string Domain name status. pending: under review; rejected: review failed; processing: review succeeded and under deployment; online: enabled; offline: disabled; deleted: deleted.
     */
    public $Status;

    /**
     * @var integer Project ID.
     */
    public $ProjectId;

    /**
     * @var string Domain name business type. web: static acceleration; download: download acceleration; media: streaming media acceleration.
     */
    public $ServiceType;

    /**
     * @var string Domain name creation time.
     */
    public $CreateTime;

    /**
     * @var string Domain name update time.
     */
    public $UpdateTime;

    /**
     * @var Origin Origin server configuration.
     */
    public $Origin;

    /**
     * @var IpFilter IP blacklist/whitelist configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IpFilter;

    /**
     * @var IpFreqLimit IP access limit configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IpFreqLimit;

    /**
     * @var StatusCodeCache Status code cache configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $StatusCodeCache;

    /**
     * @var Compression Smart compression configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Compression;

    /**
     * @var BandwidthAlert Bandwidth cap configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $BandwidthAlert;

    /**
     * @var RangeOriginPull Range origin-pull configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RangeOriginPull;

    /**
     * @var FollowRedirect 301 and 302 automatic origin-pull follow-redirect configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FollowRedirect;

    /**
     * @var ErrorPage Error code redirect configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorPage;

    /**
     * @var RequestHeader Origin-pull request header configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RequestHeader;

    /**
     * @var ResponseHeader Origin server response header configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ResponseHeader;

    /**
     * @var DownstreamCapping Download speed configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DownstreamCapping;

    /**
     * @var CacheKey Node cache configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CacheKey;

    /**
     * @var ResponseHeaderCache Follows origin server cache header configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ResponseHeaderCache;

    /**
     * @var VideoSeek Video dragging configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $VideoSeek;

    /**
     * @var Cache Cache rules configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Cache;

    /**
     * @var OriginPullOptimization Cross-border optimization configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OriginPullOptimization;

    /**
     * @var Https HTTPS configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Https;

    /**
     * @var Authentication Timestamp hotlink protection configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Authentication;

    /**
     * @var Seo SEO configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Seo;

    /**
     * @var string Domain name block status, including normal, overdue, quota, malicious, ddos, idle, unlicensed, capping, and readonly.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Disable;

    /**
     * @var ForceRedirect Access protocol forced redirect configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ForceRedirect;

    /**
     * @var Referer Hotlink protection configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Referer;

    /**
     * @var MaxAge Browser cache rules configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MaxAge;

    /**
     * @var Ipv6 IPv6 configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Ipv6;

    /**
     * @var Compatibility Whether it is compatible with configurations in old versions.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Compatibility;

    /**
     * @var SpecificConfig Specific configuration by region.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SpecificConfig;

    /**
     * @var string Acceleration region, including mainland, overseas, and global.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Area;

    /**
     * @var string Domain name lock status. normal: not locked; mainland: locked in mainland China; overseas: locked outside mainland China; global: locked globally.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Readonly;

    /**
     * @var OriginPullTimeout Origin-pull timeout configuration
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OriginPullTimeout;
    /**
     * @param string $ResourceId Domain name ID.
     * @param integer $AppId Tencent Cloud account ID.
     * @param string $Domain Accelerated domain name.
     * @param string $Cname Domain name CNAME.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Status Domain name status. pending: under review; rejected: review failed; processing: review succeeded and under deployment; online: enabled; offline: disabled; deleted: deleted.
     * @param integer $ProjectId Project ID.
     * @param string $ServiceType Domain name business type. web: static acceleration; download: download acceleration; media: streaming media acceleration.
     * @param string $CreateTime Domain name creation time.
     * @param string $UpdateTime Domain name update time.
     * @param Origin $Origin Origin server configuration.
     * @param IpFilter $IpFilter IP blacklist/whitelist configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param IpFreqLimit $IpFreqLimit IP access limit configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param StatusCodeCache $StatusCodeCache Status code cache configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param Compression $Compression Smart compression configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param BandwidthAlert $BandwidthAlert Bandwidth cap configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param RangeOriginPull $RangeOriginPull Range origin-pull configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param FollowRedirect $FollowRedirect 301 and 302 automatic origin-pull follow-redirect configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param ErrorPage $ErrorPage Error code redirect configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param RequestHeader $RequestHeader Origin-pull request header configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param ResponseHeader $ResponseHeader Origin server response header configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param DownstreamCapping $DownstreamCapping Download speed configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param CacheKey $CacheKey Node cache configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param ResponseHeaderCache $ResponseHeaderCache Follows origin server cache header configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param VideoSeek $VideoSeek Video dragging configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param Cache $Cache Cache rules configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param OriginPullOptimization $OriginPullOptimization Cross-border optimization configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param Https $Https HTTPS configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param Authentication $Authentication Timestamp hotlink protection configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param Seo $Seo SEO configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Disable Domain name block status, including normal, overdue, quota, malicious, ddos, idle, unlicensed, capping, and readonly.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param ForceRedirect $ForceRedirect Access protocol forced redirect configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param Referer $Referer Hotlink protection configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param MaxAge $MaxAge Browser cache rules configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param Ipv6 $Ipv6 IPv6 configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param Compatibility $Compatibility Whether it is compatible with configurations in old versions.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param SpecificConfig $SpecificConfig Specific configuration by region.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Area Acceleration region, including mainland, overseas, and global.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Readonly Domain name lock status. normal: not locked; mainland: locked in mainland China; overseas: locked outside mainland China; global: locked globally.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param OriginPullTimeout $OriginPullTimeout Origin-pull timeout configuration
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
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

        if (array_key_exists("Disable",$param) and $param["Disable"] !== null) {
            $this->Disable = $param["Disable"];
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

        if (array_key_exists("Ipv6",$param) and $param["Ipv6"] !== null) {
            $this->Ipv6 = new Ipv6();
            $this->Ipv6->deserialize($param["Ipv6"]);
        }

        if (array_key_exists("Compatibility",$param) and $param["Compatibility"] !== null) {
            $this->Compatibility = new Compatibility();
            $this->Compatibility->deserialize($param["Compatibility"]);
        }

        if (array_key_exists("SpecificConfig",$param) and $param["SpecificConfig"] !== null) {
            $this->SpecificConfig = new SpecificConfig();
            $this->SpecificConfig->deserialize($param["SpecificConfig"]);
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Readonly",$param) and $param["Readonly"] !== null) {
            $this->Readonly = $param["Readonly"];
        }

        if (array_key_exists("OriginPullTimeout",$param) and $param["OriginPullTimeout"] !== null) {
            $this->OriginPullTimeout = new OriginPullTimeout();
            $this->OriginPullTimeout->deserialize($param["OriginPullTimeout"]);
        }
    }
}
