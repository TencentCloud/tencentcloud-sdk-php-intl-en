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
 * AddCdnDomain request structure.
 *
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
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
 * @method Origin getOrigin() Obtain Origin server configuration
 * @method void setOrigin(Origin $Origin) Set Origin server configuration
 * @method integer getProjectId() Obtain Project ID. Default value: 0, indicating `Default Project`
 * @method void setProjectId(integer $ProjectId) Set Project ID. Default value: 0, indicating `Default Project`
 * @method IpFilter getIpFilter() Obtain IP blocklist/allowlist
 * @method void setIpFilter(IpFilter $IpFilter) Set IP blocklist/allowlist
 * @method IpFreqLimit getIpFreqLimit() Obtain IP rate limiting
 * @method void setIpFreqLimit(IpFreqLimit $IpFreqLimit) Set IP rate limiting
 * @method StatusCodeCache getStatusCodeCache() Obtain Status code cache
 * @method void setStatusCodeCache(StatusCodeCache $StatusCodeCache) Set Status code cache
 * @method Compression getCompression() Obtain Smart compression
 * @method void setCompression(Compression $Compression) Set Smart compression
 * @method BandwidthAlert getBandwidthAlert() Obtain Bandwidth cap configuration
 * @method void setBandwidthAlert(BandwidthAlert $BandwidthAlert) Set Bandwidth cap configuration
 * @method RangeOriginPull getRangeOriginPull() Obtain Range GETs configuration
 * @method void setRangeOriginPull(RangeOriginPull $RangeOriginPull) Set Range GETs configuration
 * @method FollowRedirect getFollowRedirect() Obtain 301/302 origin-pull follow-redirect configuration
 * @method void setFollowRedirect(FollowRedirect $FollowRedirect) Set 301/302 origin-pull follow-redirect configuration
 * @method ErrorPage getErrorPage() Obtain Error code redirection (in beta)
 * @method void setErrorPage(ErrorPage $ErrorPage) Set Error code redirection (in beta)
 * @method RequestHeader getRequestHeader() Obtain Request header configuration
 * @method void setRequestHeader(RequestHeader $RequestHeader) Set Request header configuration
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
 * @method Cache getCache() Obtain Cache validity configuration
 * @method void setCache(Cache $Cache) Set Cache validity configuration
 * @method OriginPullOptimization getOriginPullOptimization() Obtain Cross-MLC-border origin-pull optimization
 * @method void setOriginPullOptimization(OriginPullOptimization $OriginPullOptimization) Set Cross-MLC-border origin-pull optimization
 * @method Https getHttps() Obtain HTTPS acceleration
 * @method void setHttps(Https $Https) Set HTTPS acceleration
 * @method Authentication getAuthentication() Obtain Timestamp hotlink protection
 * @method void setAuthentication(Authentication $Authentication) Set Timestamp hotlink protection
 * @method Seo getSeo() Obtain SEO optimization
 * @method void setSeo(Seo $Seo) Set SEO optimization
 * @method ForceRedirect getForceRedirect() Obtain Force redirect by access protocol
 * @method void setForceRedirect(ForceRedirect $ForceRedirect) Set Force redirect by access protocol
 * @method Referer getReferer() Obtain Referer hotlink protection
 * @method void setReferer(Referer $Referer) Set Referer hotlink protection
 * @method MaxAge getMaxAge() Obtain Browser caching (in beta)
 * @method void setMaxAge(MaxAge $MaxAge) Set Browser caching (in beta)
 * @method Ipv6 getIpv6() Obtain IPv6 configuration (This feature is in beta and not generally available yet.)
 * @method void setIpv6(Ipv6 $Ipv6) Set IPv6 configuration (This feature is in beta and not generally available yet.)
 * @method SpecificConfig getSpecificConfig() Obtain Specific region configuration
Applicable to cases where the acceleration domain name configuration differs for regions in and outside mainland China.
 * @method void setSpecificConfig(SpecificConfig $SpecificConfig) Set Specific region configuration
Applicable to cases where the acceleration domain name configuration differs for regions in and outside mainland China.
 * @method string getArea() Obtain Domain name acceleration region
mainland: acceleration inside mainland China
overseas: acceleration outside mainland China
global: global acceleration
Overseas acceleration service must be enabled to use overseas acceleration and global acceleration.
 * @method void setArea(string $Area) Set Domain name acceleration region
mainland: acceleration inside mainland China
overseas: acceleration outside mainland China
global: global acceleration
Overseas acceleration service must be enabled to use overseas acceleration and global acceleration.
 * @method OriginPullTimeout getOriginPullTimeout() Obtain Origin-pull timeout configuration
 * @method void setOriginPullTimeout(OriginPullTimeout $OriginPullTimeout) Set Origin-pull timeout configuration
 * @method array getTag() Obtain Tag configuration
 * @method void setTag(array $Tag) Set Tag configuration
 * @method Ipv6Access getIpv6Access() Obtain Ipv6 access configuration
 * @method void setIpv6Access(Ipv6Access $Ipv6Access) Set Ipv6 access configuration
 * @method OfflineCache getOfflineCache() Obtain Offline cache
 * @method void setOfflineCache(OfflineCache $OfflineCache) Set Offline cache
 * @method Quic getQuic() Obtain QUIC access, which is a paid service. You can check the product document and Billing Overview for more information.
 * @method void setQuic(Quic $Quic) Set QUIC access, which is a paid service. You can check the product document and Billing Overview for more information.
 * @method AwsPrivateAccess getAwsPrivateAccess() Obtain Access authentication for S3 origin
 * @method void setAwsPrivateAccess(AwsPrivateAccess $AwsPrivateAccess) Set Access authentication for S3 origin
 * @method OssPrivateAccess getOssPrivateAccess() Obtain Access authentication for OSS origin
 * @method void setOssPrivateAccess(OssPrivateAccess $OssPrivateAccess) Set Access authentication for OSS origin
 * @method HwPrivateAccess getHwPrivateAccess() Obtain Origin-pull authentication for Huawei Cloud OBS origin
 * @method void setHwPrivateAccess(HwPrivateAccess $HwPrivateAccess) Set Origin-pull authentication for Huawei Cloud OBS origin
 * @method QnPrivateAccess getQnPrivateAccess() Obtain Origin-pull authentication for Qiniu Cloud Kodo origin
 * @method void setQnPrivateAccess(QnPrivateAccess $QnPrivateAccess) Set Origin-pull authentication for Qiniu Cloud Kodo origin
 * @method OthersPrivateAccess getOthersPrivateAccess() Obtain Origin-pull authentication for other origins
 * @method void setOthersPrivateAccess(OthersPrivateAccess $OthersPrivateAccess) Set Origin-pull authentication for other origins
 * @method HttpsBilling getHttpsBilling() Obtain HTTPS (enabled by default), which is a paid service. You can check the product document and Billing Overview for more information.
 * @method void setHttpsBilling(HttpsBilling $HttpsBilling) Set HTTPS (enabled by default), which is a paid service. You can check the product document and Billing Overview for more information.
 */
class AddCdnDomainRequest extends AbstractModel
{
    /**
     * @var string Domain name
     */
    public $Domain;

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
     * @var Origin Origin server configuration
     */
    public $Origin;

    /**
     * @var integer Project ID. Default value: 0, indicating `Default Project`
     */
    public $ProjectId;

    /**
     * @var IpFilter IP blocklist/allowlist
     */
    public $IpFilter;

    /**
     * @var IpFreqLimit IP rate limiting
     */
    public $IpFreqLimit;

    /**
     * @var StatusCodeCache Status code cache
     */
    public $StatusCodeCache;

    /**
     * @var Compression Smart compression
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
     * @var ErrorPage Error code redirection (in beta)
     */
    public $ErrorPage;

    /**
     * @var RequestHeader Request header configuration
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
     * @var Cache Cache validity configuration
     */
    public $Cache;

    /**
     * @var OriginPullOptimization Cross-MLC-border origin-pull optimization
     */
    public $OriginPullOptimization;

    /**
     * @var Https HTTPS acceleration
     */
    public $Https;

    /**
     * @var Authentication Timestamp hotlink protection
     */
    public $Authentication;

    /**
     * @var Seo SEO optimization
     */
    public $Seo;

    /**
     * @var ForceRedirect Force redirect by access protocol
     */
    public $ForceRedirect;

    /**
     * @var Referer Referer hotlink protection
     */
    public $Referer;

    /**
     * @var MaxAge Browser caching (in beta)
     */
    public $MaxAge;

    /**
     * @var Ipv6 IPv6 configuration (This feature is in beta and not generally available yet.)
     */
    public $Ipv6;

    /**
     * @var SpecificConfig Specific region configuration
Applicable to cases where the acceleration domain name configuration differs for regions in and outside mainland China.
     */
    public $SpecificConfig;

    /**
     * @var string Domain name acceleration region
mainland: acceleration inside mainland China
overseas: acceleration outside mainland China
global: global acceleration
Overseas acceleration service must be enabled to use overseas acceleration and global acceleration.
     */
    public $Area;

    /**
     * @var OriginPullTimeout Origin-pull timeout configuration
     */
    public $OriginPullTimeout;

    /**
     * @var array Tag configuration
     */
    public $Tag;

    /**
     * @var Ipv6Access Ipv6 access configuration
     */
    public $Ipv6Access;

    /**
     * @var OfflineCache Offline cache
     */
    public $OfflineCache;

    /**
     * @var Quic QUIC access, which is a paid service. You can check the product document and Billing Overview for more information.
     */
    public $Quic;

    /**
     * @var AwsPrivateAccess Access authentication for S3 origin
     */
    public $AwsPrivateAccess;

    /**
     * @var OssPrivateAccess Access authentication for OSS origin
     */
    public $OssPrivateAccess;

    /**
     * @var HwPrivateAccess Origin-pull authentication for Huawei Cloud OBS origin
     */
    public $HwPrivateAccess;

    /**
     * @var QnPrivateAccess Origin-pull authentication for Qiniu Cloud Kodo origin
     */
    public $QnPrivateAccess;

    /**
     * @var OthersPrivateAccess Origin-pull authentication for other origins
     */
    public $OthersPrivateAccess;

    /**
     * @var HttpsBilling HTTPS (enabled by default), which is a paid service. You can check the product document and Billing Overview for more information.
     */
    public $HttpsBilling;

    /**
     * @param string $Domain Domain name
     * @param string $ServiceType Acceleration domain name service type
`web`: Webpage file downloads
`download`: Large file downloads
`media`: Audio and video on demand acceleration
`hybrid`: Dynamic and static content acceleration
`dynamic`: Dynamic content acceleration
     * @param Origin $Origin Origin server configuration
     * @param integer $ProjectId Project ID. Default value: 0, indicating `Default Project`
     * @param IpFilter $IpFilter IP blocklist/allowlist
     * @param IpFreqLimit $IpFreqLimit IP rate limiting
     * @param StatusCodeCache $StatusCodeCache Status code cache
     * @param Compression $Compression Smart compression
     * @param BandwidthAlert $BandwidthAlert Bandwidth cap configuration
     * @param RangeOriginPull $RangeOriginPull Range GETs configuration
     * @param FollowRedirect $FollowRedirect 301/302 origin-pull follow-redirect configuration
     * @param ErrorPage $ErrorPage Error code redirection (in beta)
     * @param RequestHeader $RequestHeader Request header configuration
     * @param ResponseHeader $ResponseHeader Response header configuration
     * @param DownstreamCapping $DownstreamCapping Download speed configuration
     * @param CacheKey $CacheKey Node cache key configuration
     * @param ResponseHeaderCache $ResponseHeaderCache Header cache configuration
     * @param VideoSeek $VideoSeek Video dragging configuration
     * @param Cache $Cache Cache validity configuration
     * @param OriginPullOptimization $OriginPullOptimization Cross-MLC-border origin-pull optimization
     * @param Https $Https HTTPS acceleration
     * @param Authentication $Authentication Timestamp hotlink protection
     * @param Seo $Seo SEO optimization
     * @param ForceRedirect $ForceRedirect Force redirect by access protocol
     * @param Referer $Referer Referer hotlink protection
     * @param MaxAge $MaxAge Browser caching (in beta)
     * @param Ipv6 $Ipv6 IPv6 configuration (This feature is in beta and not generally available yet.)
     * @param SpecificConfig $SpecificConfig Specific region configuration
Applicable to cases where the acceleration domain name configuration differs for regions in and outside mainland China.
     * @param string $Area Domain name acceleration region
mainland: acceleration inside mainland China
overseas: acceleration outside mainland China
global: global acceleration
Overseas acceleration service must be enabled to use overseas acceleration and global acceleration.
     * @param OriginPullTimeout $OriginPullTimeout Origin-pull timeout configuration
     * @param array $Tag Tag configuration
     * @param Ipv6Access $Ipv6Access Ipv6 access configuration
     * @param OfflineCache $OfflineCache Offline cache
     * @param Quic $Quic QUIC access, which is a paid service. You can check the product document and Billing Overview for more information.
     * @param AwsPrivateAccess $AwsPrivateAccess Access authentication for S3 origin
     * @param OssPrivateAccess $OssPrivateAccess Access authentication for OSS origin
     * @param HwPrivateAccess $HwPrivateAccess Origin-pull authentication for Huawei Cloud OBS origin
     * @param QnPrivateAccess $QnPrivateAccess Origin-pull authentication for Qiniu Cloud Kodo origin
     * @param OthersPrivateAccess $OthersPrivateAccess Origin-pull authentication for other origins
     * @param HttpsBilling $HttpsBilling HTTPS (enabled by default), which is a paid service. You can check the product document and Billing Overview for more information.
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

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = new Origin();
            $this->Origin->deserialize($param["Origin"]);
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
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

        if (array_key_exists("Ipv6",$param) and $param["Ipv6"] !== null) {
            $this->Ipv6 = new Ipv6();
            $this->Ipv6->deserialize($param["Ipv6"]);
        }

        if (array_key_exists("SpecificConfig",$param) and $param["SpecificConfig"] !== null) {
            $this->SpecificConfig = new SpecificConfig();
            $this->SpecificConfig->deserialize($param["SpecificConfig"]);
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("OriginPullTimeout",$param) and $param["OriginPullTimeout"] !== null) {
            $this->OriginPullTimeout = new OriginPullTimeout();
            $this->OriginPullTimeout->deserialize($param["OriginPullTimeout"]);
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }

        if (array_key_exists("Ipv6Access",$param) and $param["Ipv6Access"] !== null) {
            $this->Ipv6Access = new Ipv6Access();
            $this->Ipv6Access->deserialize($param["Ipv6Access"]);
        }

        if (array_key_exists("OfflineCache",$param) and $param["OfflineCache"] !== null) {
            $this->OfflineCache = new OfflineCache();
            $this->OfflineCache->deserialize($param["OfflineCache"]);
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
