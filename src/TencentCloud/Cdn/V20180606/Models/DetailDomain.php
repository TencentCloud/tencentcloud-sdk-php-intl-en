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
 * Complete acceleration domain configuration information
 *
 * @method string getResourceId() Obtain Domain name ID
 * @method void setResourceId(string $ResourceId) Set Domain name ID
 * @method integer getAppId() Obtain Tencent Cloud account ID
 * @method void setAppId(integer $AppId) Set Tencent Cloud account ID
 * @method string getDomain() Obtain Accelerated domain name.
 * @method void setDomain(string $Domain) Set Accelerated domain name.
 * @method string getCname() Obtain CNAME address of domain name
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setCname(string $Cname) Set CNAME address of domain name
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Acceleration service status
`rejected`: The domain name is rejected due to expiration/deregistration of its ICP filing
`processing`: Deploying
`closing`: Disabling
`online`: Enabled
`offline`: Disabled
 * @method void setStatus(string $Status) Set Acceleration service status
`rejected`: The domain name is rejected due to expiration/deregistration of its ICP filing
`processing`: Deploying
`closing`: Disabling
`online`: Enabled
`offline`: Disabled
 * @method integer getProjectId() Obtain Project ID, which can be viewed on the Tencent Cloud project management page
 * @method void setProjectId(integer $ProjectId) Set Project ID, which can be viewed on the Tencent Cloud project management page
 * @method string getServiceType() Obtain Acceleration domain name service type
`web`: Webpage file downloads
`download`: Large file downloads
`media`: Audio and video on demand acceleration
`hybrid`: Dynamic and static content acceleration
`dynamic`: Dynamic content acceleration
 * @method void setServiceType(string $ServiceType) Set Acceleration domain name service type
`web`: Webpage file downloads
`download`: Large file downloads
`media`: Audio and video on demand acceleration
`hybrid`: Dynamic and static content acceleration
`dynamic`: Dynamic content acceleration
 * @method string getCreateTime() Obtain Domain name creation time
 * @method void setCreateTime(string $CreateTime) Set Domain name creation time
 * @method string getUpdateTime() Obtain Domain name update time
 * @method void setUpdateTime(string $UpdateTime) Set Domain name update time
 * @method Origin getOrigin() Obtain Origin server configuration.
 * @method void setOrigin(Origin $Origin) Set Origin server configuration.
 * @method IpFilter getIpFilter() Obtain IP blocklist/allowlist configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setIpFilter(IpFilter $IpFilter) Set IP blocklist/allowlist configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method IpFreqLimit getIpFreqLimit() Obtain IP access limit configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setIpFreqLimit(IpFreqLimit $IpFreqLimit) Set IP access limit configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method StatusCodeCache getStatusCodeCache() Obtain Status code cache configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setStatusCodeCache(StatusCodeCache $StatusCodeCache) Set Status code cache configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method Compression getCompression() Obtain Smart compression configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCompression(Compression $Compression) Set Smart compression configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method BandwidthAlert getBandwidthAlert() Obtain Bandwidth cap configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setBandwidthAlert(BandwidthAlert $BandwidthAlert) Set Bandwidth cap configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method RangeOriginPull getRangeOriginPull() Obtain Range GETs configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setRangeOriginPull(RangeOriginPull $RangeOriginPull) Set Range GETs configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method FollowRedirect getFollowRedirect() Obtain 301/302 origin-pull follow-redirect configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setFollowRedirect(FollowRedirect $FollowRedirect) Set 301/302 origin-pull follow-redirect configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method ErrorPage getErrorPage() Obtain Custom error page configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setErrorPage(ErrorPage $ErrorPage) Set Custom error page configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method RequestHeader getRequestHeader() Obtain Custom request header configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setRequestHeader(RequestHeader $RequestHeader) Set Custom request header configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method ResponseHeader getResponseHeader() Obtain Custom response header configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setResponseHeader(ResponseHeader $ResponseHeader) Set Custom response header configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method DownstreamCapping getDownstreamCapping() Obtain Single-link downstream speed limit configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setDownstreamCapping(DownstreamCapping $DownstreamCapping) Set Single-link downstream speed limit configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method CacheKey getCacheKey() Obtain Configuration of cache with/without parameter
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCacheKey(CacheKey $CacheKey) Set Configuration of cache with/without parameter
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method ResponseHeaderCache getResponseHeaderCache() Obtain Origin server header cache configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setResponseHeaderCache(ResponseHeaderCache $ResponseHeaderCache) Set Origin server header cache configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method VideoSeek getVideoSeek() Obtain Video dragging configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setVideoSeek(VideoSeek $VideoSeek) Set Video dragging configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method Cache getCache() Obtain Node cache expiration rule configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCache(Cache $Cache) Set Node cache expiration rule configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method OriginPullOptimization getOriginPullOptimization() Obtain Cross-border linkage optimization configuration (in beta)
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setOriginPullOptimization(OriginPullOptimization $OriginPullOptimization) Set Cross-border linkage optimization configuration (in beta)
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method Https getHttps() Obtain HTTPS Acceleration Configuration Guide
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setHttps(Https $Https) Set HTTPS Acceleration Configuration Guide
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method Authentication getAuthentication() Obtain Timestamp hotlink protection configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setAuthentication(Authentication $Authentication) Set Timestamp hotlink protection configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method Seo getSeo() Obtain SEO configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setSeo(Seo $Seo) Set SEO configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getDisable() Obtain Domain name block status
`normal`: Normal
`overdue`: The domain name has been disabled due to account arrears. The acceleration service can be resumed after the account is topped up.
`malicious`: The acceleration service has been forcibly disabled due to detection of malicious behavior.
`ddos`: The acceleration service has been disabled due to large-scale DDoS attacks to the domain name
`idle`: No operations or data has been detected for more than 90 days. The domain name is determined to be inactive which automatically disables the acceleration service. You can restart the service.
`unlicensed`: The acceleration service has been automatically disabled as the domain name has no ICP filing or its ICP filing is deregistered. Service can be resumed after an ICP filing is obtained.
`capping`: The configured upper limit for bandwidth has been reached.
`readonly`: The domain name has a special configuration and has been locked.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setDisable(string $Disable) Set Domain name block status
`normal`: Normal
`overdue`: The domain name has been disabled due to account arrears. The acceleration service can be resumed after the account is topped up.
`malicious`: The acceleration service has been forcibly disabled due to detection of malicious behavior.
`ddos`: The acceleration service has been disabled due to large-scale DDoS attacks to the domain name
`idle`: No operations or data has been detected for more than 90 days. The domain name is determined to be inactive which automatically disables the acceleration service. You can restart the service.
`unlicensed`: The acceleration service has been automatically disabled as the domain name has no ICP filing or its ICP filing is deregistered. Service can be resumed after an ICP filing is obtained.
`capping`: The configured upper limit for bandwidth has been reached.
`readonly`: The domain name has a special configuration and has been locked.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method ForceRedirect getForceRedirect() Obtain Access protocol forced redirect configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setForceRedirect(ForceRedirect $ForceRedirect) Set Access protocol forced redirect configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method Referer getReferer() Obtain Referer configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setReferer(Referer $Referer) Set Referer configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method MaxAge getMaxAge() Obtain Browser cache expiration rule configuration (in beta)
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setMaxAge(MaxAge $MaxAge) Set Browser cache expiration rule configuration (in beta)
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method Ipv6 getIpv6() Obtain IPv6 origin-pull configuration (in beta)
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setIpv6(Ipv6 $Ipv6) Set IPv6 origin-pull configuration (in beta)
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method Compatibility getCompatibility() Obtain Backwards compatibility configuration (compatibility field for internal use)
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCompatibility(Compatibility $Compatibility) Set Backwards compatibility configuration (compatibility field for internal use)
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method SpecificConfig getSpecificConfig() Obtain Region-specific configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setSpecificConfig(SpecificConfig $SpecificConfig) Set Region-specific configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getArea() Obtain Acceleration region
`mainland`: Acceleration inside the Chinese mainland
`overseas`: Acceleration outside the Chinese mainland
`global`: Acceleration over the globe
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setArea(string $Area) Set Acceleration region
`mainland`: Acceleration inside the Chinese mainland
`overseas`: Acceleration outside the Chinese mainland
`global`: Acceleration over the globe
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getReadonly() Obtain Domain name lock status
`normal`: Not locked
`mainland`: Locked in the Chinese mainland
`overseas`: Locked outside the Chinese mainland
global: Locked globally
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setReadonly(string $Readonly) Set Domain name lock status
`normal`: Not locked
`mainland`: Locked in the Chinese mainland
`overseas`: Locked outside the Chinese mainland
global: Locked globally
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method OriginPullTimeout getOriginPullTimeout() Obtain Origin-pull timeout configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setOriginPullTimeout(OriginPullTimeout $OriginPullTimeout) Set Origin-pull timeout configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method AwsPrivateAccess getAwsPrivateAccess() Obtain S3 bucket origin access authentication configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setAwsPrivateAccess(AwsPrivateAccess $AwsPrivateAccess) Set S3 bucket origin access authentication configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method SecurityConfig getSecurityConfig() Obtain SCDN configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setSecurityConfig(SecurityConfig $SecurityConfig) Set SCDN configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method ImageOptimization getImageOptimization() Obtain Image optimization configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setImageOptimization(ImageOptimization $ImageOptimization) Set Image optimization configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method UserAgentFilter getUserAgentFilter() Obtain UA blocklist/allowlist configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setUserAgentFilter(UserAgentFilter $UserAgentFilter) Set UA blocklist/allowlist configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method AccessControl getAccessControl() Obtain Access control
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setAccessControl(AccessControl $AccessControl) Set Access control
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getAdvance() Obtain Whether to support advanced configuration items
`on`: Supported
`off`: Not supported
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setAdvance(string $Advance) Set Whether to support advanced configuration items
`on`: Supported
`off`: Not supported
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method UrlRedirect getUrlRedirect() Obtain URL redirect configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setUrlRedirect(UrlRedirect $UrlRedirect) Set URL redirect configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getAccessPort() Obtain Access port configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setAccessPort(array $AccessPort) Set Access port configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getTag() Obtain Tag configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setTag(array $Tag) Set Tag configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method AdvancedAuthentication getAdvancedAuthentication() Obtain Timestamp hotlink protection advanced configuration (allowlist feature)
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setAdvancedAuthentication(AdvancedAuthentication $AdvancedAuthentication) Set Timestamp hotlink protection advanced configuration (allowlist feature)
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method OriginAuthentication getOriginAuthentication() Obtain Origin-pull authentication advanced configuration (allowlist feature)
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setOriginAuthentication(OriginAuthentication $OriginAuthentication) Set Origin-pull authentication advanced configuration (allowlist feature)
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method Ipv6Access getIpv6Access() Obtain IPv6 access configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setIpv6Access(Ipv6Access $Ipv6Access) Set IPv6 access configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getAdvanceSet() Obtain Advanced configuration settings
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setAdvanceSet(array $AdvanceSet) Set Advanced configuration settings
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method OfflineCache getOfflineCache() Obtain Offline cache (only available to beta users)
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setOfflineCache(OfflineCache $OfflineCache) Set Offline cache (only available to beta users)
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method OriginCombine getOriginCombine() Obtain Merging origin-pull requests (only available to beta users)
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setOriginCombine(OriginCombine $OriginCombine) Set Merging origin-pull requests (only available to beta users)
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method PostSize getPostMaxSize() Obtain POST request configuration item
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setPostMaxSize(PostSize $PostMaxSize) Set POST request configuration item
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method Quic getQuic() Obtain QUIC configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setQuic(Quic $Quic) Set QUIC configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method OssPrivateAccess getOssPrivateAccess() Obtain Access authentication for OSS origin
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setOssPrivateAccess(OssPrivateAccess $OssPrivateAccess) Set Access authentication for OSS origin
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method WebSocket getWebSocket() Obtain WebSocket configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setWebSocket(WebSocket $WebSocket) Set WebSocket configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method RemoteAuthentication getRemoteAuthentication() Obtain Remote authentication configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setRemoteAuthentication(RemoteAuthentication $RemoteAuthentication) Set Remote authentication configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method ShareCname getShareCname() Obtain Shared CNAME configuration (only available to beta users)
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setShareCname(ShareCname $ShareCname) Set Shared CNAME configuration (only available to beta users)
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method RuleEngine getRuleEngine() Obtain Rule engine
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setRuleEngine(RuleEngine $RuleEngine) Set Rule engine
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getParentHost() Obtain Primary domain name
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setParentHost(string $ParentHost) Set Primary domain name
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method HwPrivateAccess getHwPrivateAccess() Obtain Access authentication for Huawei Cloud OBS origin
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setHwPrivateAccess(HwPrivateAccess $HwPrivateAccess) Set Access authentication for Huawei Cloud OBS origin
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method QnPrivateAccess getQnPrivateAccess() Obtain Access authentication for QiNiu Cloud Kodo origin
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setQnPrivateAccess(QnPrivateAccess $QnPrivateAccess) Set Access authentication for QiNiu Cloud Kodo origin
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method HttpsBilling getHttpsBilling() Obtain HTTPS (enabled by default)
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setHttpsBilling(HttpsBilling $HttpsBilling) Set HTTPS (enabled by default)
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method OthersPrivateAccess getOthersPrivateAccess() Obtain Origin-pull authentication for other origins
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setOthersPrivateAccess(OthersPrivateAccess $OthersPrivateAccess) Set Origin-pull authentication for other origins
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class DetailDomain extends AbstractModel
{
    /**
     * @var string Domain name ID
     */
    public $ResourceId;

    /**
     * @var integer Tencent Cloud account ID
     */
    public $AppId;

    /**
     * @var string Accelerated domain name.
     */
    public $Domain;

    /**
     * @var string CNAME address of domain name
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Cname;

    /**
     * @var string Acceleration service status
`rejected`: The domain name is rejected due to expiration/deregistration of its ICP filing
`processing`: Deploying
`closing`: Disabling
`online`: Enabled
`offline`: Disabled
     */
    public $Status;

    /**
     * @var integer Project ID, which can be viewed on the Tencent Cloud project management page
     */
    public $ProjectId;

    /**
     * @var string Acceleration domain name service type
`web`: Webpage file downloads
`download`: Large file downloads
`media`: Audio and video on demand acceleration
`hybrid`: Dynamic and static content acceleration
`dynamic`: Dynamic content acceleration
     */
    public $ServiceType;

    /**
     * @var string Domain name creation time
     */
    public $CreateTime;

    /**
     * @var string Domain name update time
     */
    public $UpdateTime;

    /**
     * @var Origin Origin server configuration.
     */
    public $Origin;

    /**
     * @var IpFilter IP blocklist/allowlist configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $IpFilter;

    /**
     * @var IpFreqLimit IP access limit configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $IpFreqLimit;

    /**
     * @var StatusCodeCache Status code cache configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $StatusCodeCache;

    /**
     * @var Compression Smart compression configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Compression;

    /**
     * @var BandwidthAlert Bandwidth cap configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $BandwidthAlert;

    /**
     * @var RangeOriginPull Range GETs configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $RangeOriginPull;

    /**
     * @var FollowRedirect 301/302 origin-pull follow-redirect configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $FollowRedirect;

    /**
     * @var ErrorPage Custom error page configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ErrorPage;

    /**
     * @var RequestHeader Custom request header configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $RequestHeader;

    /**
     * @var ResponseHeader Custom response header configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ResponseHeader;

    /**
     * @var DownstreamCapping Single-link downstream speed limit configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $DownstreamCapping;

    /**
     * @var CacheKey Configuration of cache with/without parameter
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $CacheKey;

    /**
     * @var ResponseHeaderCache Origin server header cache configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ResponseHeaderCache;

    /**
     * @var VideoSeek Video dragging configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $VideoSeek;

    /**
     * @var Cache Node cache expiration rule configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Cache;

    /**
     * @var OriginPullOptimization Cross-border linkage optimization configuration (in beta)
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $OriginPullOptimization;

    /**
     * @var Https HTTPS Acceleration Configuration Guide
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Https;

    /**
     * @var Authentication Timestamp hotlink protection configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Authentication;

    /**
     * @var Seo SEO configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Seo;

    /**
     * @var string Domain name block status
`normal`: Normal
`overdue`: The domain name has been disabled due to account arrears. The acceleration service can be resumed after the account is topped up.
`malicious`: The acceleration service has been forcibly disabled due to detection of malicious behavior.
`ddos`: The acceleration service has been disabled due to large-scale DDoS attacks to the domain name
`idle`: No operations or data has been detected for more than 90 days. The domain name is determined to be inactive which automatically disables the acceleration service. You can restart the service.
`unlicensed`: The acceleration service has been automatically disabled as the domain name has no ICP filing or its ICP filing is deregistered. Service can be resumed after an ICP filing is obtained.
`capping`: The configured upper limit for bandwidth has been reached.
`readonly`: The domain name has a special configuration and has been locked.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Disable;

    /**
     * @var ForceRedirect Access protocol forced redirect configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ForceRedirect;

    /**
     * @var Referer Referer configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Referer;

    /**
     * @var MaxAge Browser cache expiration rule configuration (in beta)
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $MaxAge;

    /**
     * @var Ipv6 IPv6 origin-pull configuration (in beta)
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Ipv6;

    /**
     * @var Compatibility Backwards compatibility configuration (compatibility field for internal use)
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Compatibility;

    /**
     * @var SpecificConfig Region-specific configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $SpecificConfig;

    /**
     * @var string Acceleration region
`mainland`: Acceleration inside the Chinese mainland
`overseas`: Acceleration outside the Chinese mainland
`global`: Acceleration over the globe
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Area;

    /**
     * @var string Domain name lock status
`normal`: Not locked
`mainland`: Locked in the Chinese mainland
`overseas`: Locked outside the Chinese mainland
global: Locked globally
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Readonly;

    /**
     * @var OriginPullTimeout Origin-pull timeout configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $OriginPullTimeout;

    /**
     * @var AwsPrivateAccess S3 bucket origin access authentication configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $AwsPrivateAccess;

    /**
     * @var SecurityConfig SCDN configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $SecurityConfig;

    /**
     * @var ImageOptimization Image optimization configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ImageOptimization;

    /**
     * @var UserAgentFilter UA blocklist/allowlist configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $UserAgentFilter;

    /**
     * @var AccessControl Access control
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $AccessControl;

    /**
     * @var string Whether to support advanced configuration items
`on`: Supported
`off`: Not supported
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Advance;

    /**
     * @var UrlRedirect URL redirect configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $UrlRedirect;

    /**
     * @var array Access port configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $AccessPort;

    /**
     * @var array Tag configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Tag;

    /**
     * @var AdvancedAuthentication Timestamp hotlink protection advanced configuration (allowlist feature)
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $AdvancedAuthentication;

    /**
     * @var OriginAuthentication Origin-pull authentication advanced configuration (allowlist feature)
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $OriginAuthentication;

    /**
     * @var Ipv6Access IPv6 access configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Ipv6Access;

    /**
     * @var array Advanced configuration settings
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $AdvanceSet;

    /**
     * @var OfflineCache Offline cache (only available to beta users)
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $OfflineCache;

    /**
     * @var OriginCombine Merging origin-pull requests (only available to beta users)
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $OriginCombine;

    /**
     * @var PostSize POST request configuration item
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $PostMaxSize;

    /**
     * @var Quic QUIC configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Quic;

    /**
     * @var OssPrivateAccess Access authentication for OSS origin
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $OssPrivateAccess;

    /**
     * @var WebSocket WebSocket configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $WebSocket;

    /**
     * @var RemoteAuthentication Remote authentication configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $RemoteAuthentication;

    /**
     * @var ShareCname Shared CNAME configuration (only available to beta users)
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ShareCname;

    /**
     * @var RuleEngine Rule engine
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $RuleEngine;

    /**
     * @var string Primary domain name
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ParentHost;

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
     * @var HttpsBilling HTTPS (enabled by default)
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $HttpsBilling;

    /**
     * @var OthersPrivateAccess Origin-pull authentication for other origins
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $OthersPrivateAccess;

    /**
     * @param string $ResourceId Domain name ID
     * @param integer $AppId Tencent Cloud account ID
     * @param string $Domain Accelerated domain name.
     * @param string $Cname CNAME address of domain name
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Status Acceleration service status
`rejected`: The domain name is rejected due to expiration/deregistration of its ICP filing
`processing`: Deploying
`closing`: Disabling
`online`: Enabled
`offline`: Disabled
     * @param integer $ProjectId Project ID, which can be viewed on the Tencent Cloud project management page
     * @param string $ServiceType Acceleration domain name service type
`web`: Webpage file downloads
`download`: Large file downloads
`media`: Audio and video on demand acceleration
`hybrid`: Dynamic and static content acceleration
`dynamic`: Dynamic content acceleration
     * @param string $CreateTime Domain name creation time
     * @param string $UpdateTime Domain name update time
     * @param Origin $Origin Origin server configuration.
     * @param IpFilter $IpFilter IP blocklist/allowlist configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param IpFreqLimit $IpFreqLimit IP access limit configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param StatusCodeCache $StatusCodeCache Status code cache configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param Compression $Compression Smart compression configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param BandwidthAlert $BandwidthAlert Bandwidth cap configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param RangeOriginPull $RangeOriginPull Range GETs configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param FollowRedirect $FollowRedirect 301/302 origin-pull follow-redirect configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param ErrorPage $ErrorPage Custom error page configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param RequestHeader $RequestHeader Custom request header configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param ResponseHeader $ResponseHeader Custom response header configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param DownstreamCapping $DownstreamCapping Single-link downstream speed limit configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param CacheKey $CacheKey Configuration of cache with/without parameter
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param ResponseHeaderCache $ResponseHeaderCache Origin server header cache configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param VideoSeek $VideoSeek Video dragging configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param Cache $Cache Node cache expiration rule configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param OriginPullOptimization $OriginPullOptimization Cross-border linkage optimization configuration (in beta)
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param Https $Https HTTPS Acceleration Configuration Guide
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param Authentication $Authentication Timestamp hotlink protection configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param Seo $Seo SEO configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $Disable Domain name block status
`normal`: Normal
`overdue`: The domain name has been disabled due to account arrears. The acceleration service can be resumed after the account is topped up.
`malicious`: The acceleration service has been forcibly disabled due to detection of malicious behavior.
`ddos`: The acceleration service has been disabled due to large-scale DDoS attacks to the domain name
`idle`: No operations or data has been detected for more than 90 days. The domain name is determined to be inactive which automatically disables the acceleration service. You can restart the service.
`unlicensed`: The acceleration service has been automatically disabled as the domain name has no ICP filing or its ICP filing is deregistered. Service can be resumed after an ICP filing is obtained.
`capping`: The configured upper limit for bandwidth has been reached.
`readonly`: The domain name has a special configuration and has been locked.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param ForceRedirect $ForceRedirect Access protocol forced redirect configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param Referer $Referer Referer configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param MaxAge $MaxAge Browser cache expiration rule configuration (in beta)
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param Ipv6 $Ipv6 IPv6 origin-pull configuration (in beta)
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param Compatibility $Compatibility Backwards compatibility configuration (compatibility field for internal use)
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param SpecificConfig $SpecificConfig Region-specific configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $Area Acceleration region
`mainland`: Acceleration inside the Chinese mainland
`overseas`: Acceleration outside the Chinese mainland
`global`: Acceleration over the globe
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $Readonly Domain name lock status
`normal`: Not locked
`mainland`: Locked in the Chinese mainland
`overseas`: Locked outside the Chinese mainland
global: Locked globally
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param OriginPullTimeout $OriginPullTimeout Origin-pull timeout configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param AwsPrivateAccess $AwsPrivateAccess S3 bucket origin access authentication configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param SecurityConfig $SecurityConfig SCDN configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param ImageOptimization $ImageOptimization Image optimization configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param UserAgentFilter $UserAgentFilter UA blocklist/allowlist configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param AccessControl $AccessControl Access control
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $Advance Whether to support advanced configuration items
`on`: Supported
`off`: Not supported
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param UrlRedirect $UrlRedirect URL redirect configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $AccessPort Access port configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $Tag Tag configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param AdvancedAuthentication $AdvancedAuthentication Timestamp hotlink protection advanced configuration (allowlist feature)
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param OriginAuthentication $OriginAuthentication Origin-pull authentication advanced configuration (allowlist feature)
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param Ipv6Access $Ipv6Access IPv6 access configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $AdvanceSet Advanced configuration settings
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param OfflineCache $OfflineCache Offline cache (only available to beta users)
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param OriginCombine $OriginCombine Merging origin-pull requests (only available to beta users)
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param PostSize $PostMaxSize POST request configuration item
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param Quic $Quic QUIC configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param OssPrivateAccess $OssPrivateAccess Access authentication for OSS origin
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param WebSocket $WebSocket WebSocket configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param RemoteAuthentication $RemoteAuthentication Remote authentication configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param ShareCname $ShareCname Shared CNAME configuration (only available to beta users)
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param RuleEngine $RuleEngine Rule engine
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $ParentHost Primary domain name
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param HwPrivateAccess $HwPrivateAccess Access authentication for Huawei Cloud OBS origin
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param QnPrivateAccess $QnPrivateAccess Access authentication for QiNiu Cloud Kodo origin
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param HttpsBilling $HttpsBilling HTTPS (enabled by default)
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param OthersPrivateAccess $OthersPrivateAccess Origin-pull authentication for other origins
Note: this field may return `null`, indicating that no valid values can be obtained.
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

        if (array_key_exists("AwsPrivateAccess",$param) and $param["AwsPrivateAccess"] !== null) {
            $this->AwsPrivateAccess = new AwsPrivateAccess();
            $this->AwsPrivateAccess->deserialize($param["AwsPrivateAccess"]);
        }

        if (array_key_exists("SecurityConfig",$param) and $param["SecurityConfig"] !== null) {
            $this->SecurityConfig = new SecurityConfig();
            $this->SecurityConfig->deserialize($param["SecurityConfig"]);
        }

        if (array_key_exists("ImageOptimization",$param) and $param["ImageOptimization"] !== null) {
            $this->ImageOptimization = new ImageOptimization();
            $this->ImageOptimization->deserialize($param["ImageOptimization"]);
        }

        if (array_key_exists("UserAgentFilter",$param) and $param["UserAgentFilter"] !== null) {
            $this->UserAgentFilter = new UserAgentFilter();
            $this->UserAgentFilter->deserialize($param["UserAgentFilter"]);
        }

        if (array_key_exists("AccessControl",$param) and $param["AccessControl"] !== null) {
            $this->AccessControl = new AccessControl();
            $this->AccessControl->deserialize($param["AccessControl"]);
        }

        if (array_key_exists("Advance",$param) and $param["Advance"] !== null) {
            $this->Advance = $param["Advance"];
        }

        if (array_key_exists("UrlRedirect",$param) and $param["UrlRedirect"] !== null) {
            $this->UrlRedirect = new UrlRedirect();
            $this->UrlRedirect->deserialize($param["UrlRedirect"]);
        }

        if (array_key_exists("AccessPort",$param) and $param["AccessPort"] !== null) {
            $this->AccessPort = $param["AccessPort"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
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

        if (array_key_exists("AdvanceSet",$param) and $param["AdvanceSet"] !== null) {
            $this->AdvanceSet = [];
            foreach ($param["AdvanceSet"] as $key => $value){
                $obj = new AdvanceConfig();
                $obj->deserialize($value);
                array_push($this->AdvanceSet, $obj);
            }
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

        if (array_key_exists("RuleEngine",$param) and $param["RuleEngine"] !== null) {
            $this->RuleEngine = new RuleEngine();
            $this->RuleEngine->deserialize($param["RuleEngine"]);
        }

        if (array_key_exists("ParentHost",$param) and $param["ParentHost"] !== null) {
            $this->ParentHost = $param["ParentHost"];
        }

        if (array_key_exists("HwPrivateAccess",$param) and $param["HwPrivateAccess"] !== null) {
            $this->HwPrivateAccess = new HwPrivateAccess();
            $this->HwPrivateAccess->deserialize($param["HwPrivateAccess"]);
        }

        if (array_key_exists("QnPrivateAccess",$param) and $param["QnPrivateAccess"] !== null) {
            $this->QnPrivateAccess = new QnPrivateAccess();
            $this->QnPrivateAccess->deserialize($param["QnPrivateAccess"]);
        }

        if (array_key_exists("HttpsBilling",$param) and $param["HttpsBilling"] !== null) {
            $this->HttpsBilling = new HttpsBilling();
            $this->HttpsBilling->deserialize($param["HttpsBilling"]);
        }

        if (array_key_exists("OthersPrivateAccess",$param) and $param["OthersPrivateAccess"] !== null) {
            $this->OthersPrivateAccess = new OthersPrivateAccess();
            $this->OthersPrivateAccess->deserialize($param["OthersPrivateAccess"]);
        }
    }
}
