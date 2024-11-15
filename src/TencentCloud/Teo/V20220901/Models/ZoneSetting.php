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
 * The site configuration.
 *
 * @method string getZoneName() Obtain Name of the site
 * @method void setZoneName(string $ZoneName) Set Name of the site
 * @method string getArea() Obtain Site acceleration region. Values:
<li>`mainland`: Acceleration in the Chinese mainland.</li>
<li>`overseas`: Acceleration outside the Chinese mainland.</li>
 * @method void setArea(string $Area) Set Site acceleration region. Values:
<li>`mainland`: Acceleration in the Chinese mainland.</li>
<li>`overseas`: Acceleration outside the Chinese mainland.</li>
 * @method CacheKey getCacheKey() Obtain Node cache key configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCacheKey(CacheKey $CacheKey) Set Node cache key configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method Quic getQuic() Obtain The QUIC access configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQuic(Quic $Quic) Set The QUIC access configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method PostMaxSize getPostMaxSize() Obtain The POST transport configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPostMaxSize(PostMaxSize $PostMaxSize) Set The POST transport configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method Compression getCompression() Obtain Smart compression configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCompression(Compression $Compression) Set Smart compression configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method UpstreamHttp2 getUpstreamHttp2() Obtain HTTP2 origin-pull configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpstreamHttp2(UpstreamHttp2 $UpstreamHttp2) Set HTTP2 origin-pull configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ForceRedirect getForceRedirect() Obtain Force HTTPS redirect configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setForceRedirect(ForceRedirect $ForceRedirect) Set Force HTTPS redirect configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method CacheConfig getCacheConfig() Obtain Cache expiration time configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCacheConfig(CacheConfig $CacheConfig) Set Cache expiration time configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method Origin getOrigin() Obtain Origin server configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOrigin(Origin $Origin) Set Origin server configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method SmartRouting getSmartRouting() Obtain Smart acceleration configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSmartRouting(SmartRouting $SmartRouting) Set Smart acceleration configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method MaxAge getMaxAge() Obtain Browser cache configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxAge(MaxAge $MaxAge) Set Browser cache configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method OfflineCache getOfflineCache() Obtain The offline cache configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOfflineCache(OfflineCache $OfflineCache) Set The offline cache configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method WebSocket getWebSocket() Obtain WebSocket configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWebSocket(WebSocket $WebSocket) Set WebSocket configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ClientIpHeader getClientIpHeader() Obtain Origin-pull client IP header configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClientIpHeader(ClientIpHeader $ClientIpHeader) Set Origin-pull client IP header configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method CachePrefresh getCachePrefresh() Obtain Cache prefresh configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCachePrefresh(CachePrefresh $CachePrefresh) Set Cache prefresh configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method Ipv6 getIpv6() Obtain IPv6 access configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIpv6(Ipv6 $Ipv6) Set IPv6 access configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method Https getHttps() Obtain HTTPS acceleration configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHttps(Https $Https) Set HTTPS acceleration configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ClientIpCountry getClientIpCountry() Obtain Whether to carry the location information of the client IP during origin-pull.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setClientIpCountry(ClientIpCountry $ClientIpCountry) Set Whether to carry the location information of the client IP during origin-pull.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method Grpc getGrpc() Obtain Configuration of gRPC support
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setGrpc(Grpc $Grpc) Set Configuration of gRPC support
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method ImageOptimize getImageOptimize() Obtain Image optimization configuration. 
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setImageOptimize(ImageOptimize $ImageOptimize) Set Image optimization configuration. 
Note: This field may return `null`, indicating that no valid value was found.
 * @method AccelerateMainland getAccelerateMainland() Obtain Cross-MLC-border acceleration. 
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setAccelerateMainland(AccelerateMainland $AccelerateMainland) Set Cross-MLC-border acceleration. 
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method StandardDebug getStandardDebug() Obtain Standard debugging configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStandardDebug(StandardDebug $StandardDebug) Set Standard debugging configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method JITVideoProcess getJITVideoProcess() Obtain Just-in-time media processing configuration.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method void setJITVideoProcess(JITVideoProcess $JITVideoProcess) Set Just-in-time media processing configuration.
Note: This field may return null, which indicates a failure to obtain a valid value.
 */
class ZoneSetting extends AbstractModel
{
    /**
     * @var string Name of the site
     */
    public $ZoneName;

    /**
     * @var string Site acceleration region. Values:
<li>`mainland`: Acceleration in the Chinese mainland.</li>
<li>`overseas`: Acceleration outside the Chinese mainland.</li>
     */
    public $Area;

    /**
     * @var CacheKey Node cache key configuration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CacheKey;

    /**
     * @var Quic The QUIC access configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Quic;

    /**
     * @var PostMaxSize The POST transport configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PostMaxSize;

    /**
     * @var Compression Smart compression configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Compression;

    /**
     * @var UpstreamHttp2 HTTP2 origin-pull configuration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpstreamHttp2;

    /**
     * @var ForceRedirect Force HTTPS redirect configuration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ForceRedirect;

    /**
     * @var CacheConfig Cache expiration time configuration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CacheConfig;

    /**
     * @var Origin Origin server configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Origin;

    /**
     * @var SmartRouting Smart acceleration configuration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SmartRouting;

    /**
     * @var MaxAge Browser cache configuration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxAge;

    /**
     * @var OfflineCache The offline cache configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OfflineCache;

    /**
     * @var WebSocket WebSocket configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WebSocket;

    /**
     * @var ClientIpHeader Origin-pull client IP header configuration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClientIpHeader;

    /**
     * @var CachePrefresh Cache prefresh configuration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CachePrefresh;

    /**
     * @var Ipv6 IPv6 access configuration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Ipv6;

    /**
     * @var Https HTTPS acceleration configuration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Https;

    /**
     * @var ClientIpCountry Whether to carry the location information of the client IP during origin-pull.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ClientIpCountry;

    /**
     * @var Grpc Configuration of gRPC support
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Grpc;

    /**
     * @var ImageOptimize Image optimization configuration. 
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $ImageOptimize;

    /**
     * @var AccelerateMainland Cross-MLC-border acceleration. 
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $AccelerateMainland;

    /**
     * @var StandardDebug Standard debugging configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StandardDebug;

    /**
     * @var JITVideoProcess Just-in-time media processing configuration.
Note: This field may return null, which indicates a failure to obtain a valid value.
     */
    public $JITVideoProcess;

    /**
     * @param string $ZoneName Name of the site
     * @param string $Area Site acceleration region. Values:
<li>`mainland`: Acceleration in the Chinese mainland.</li>
<li>`overseas`: Acceleration outside the Chinese mainland.</li>
     * @param CacheKey $CacheKey Node cache key configuration
Note: This field may return null, indicating that no valid values can be obtained.
     * @param Quic $Quic The QUIC access configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param PostMaxSize $PostMaxSize The POST transport configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param Compression $Compression Smart compression configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param UpstreamHttp2 $UpstreamHttp2 HTTP2 origin-pull configuration
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ForceRedirect $ForceRedirect Force HTTPS redirect configuration
Note: This field may return null, indicating that no valid values can be obtained.
     * @param CacheConfig $CacheConfig Cache expiration time configuration
Note: This field may return null, indicating that no valid values can be obtained.
     * @param Origin $Origin Origin server configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param SmartRouting $SmartRouting Smart acceleration configuration
Note: This field may return null, indicating that no valid values can be obtained.
     * @param MaxAge $MaxAge Browser cache configuration
Note: This field may return null, indicating that no valid values can be obtained.
     * @param OfflineCache $OfflineCache The offline cache configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param WebSocket $WebSocket WebSocket configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ClientIpHeader $ClientIpHeader Origin-pull client IP header configuration
Note: This field may return null, indicating that no valid values can be obtained.
     * @param CachePrefresh $CachePrefresh Cache prefresh configuration
Note: This field may return null, indicating that no valid values can be obtained.
     * @param Ipv6 $Ipv6 IPv6 access configuration
Note: This field may return null, indicating that no valid values can be obtained.
     * @param Https $Https HTTPS acceleration configuration
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ClientIpCountry $ClientIpCountry Whether to carry the location information of the client IP during origin-pull.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param Grpc $Grpc Configuration of gRPC support
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param ImageOptimize $ImageOptimize Image optimization configuration. 
Note: This field may return `null`, indicating that no valid value was found.
     * @param AccelerateMainland $AccelerateMainland Cross-MLC-border acceleration. 
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param StandardDebug $StandardDebug Standard debugging configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param JITVideoProcess $JITVideoProcess Just-in-time media processing configuration.
Note: This field may return null, which indicates a failure to obtain a valid value.
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
        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("CacheKey",$param) and $param["CacheKey"] !== null) {
            $this->CacheKey = new CacheKey();
            $this->CacheKey->deserialize($param["CacheKey"]);
        }

        if (array_key_exists("Quic",$param) and $param["Quic"] !== null) {
            $this->Quic = new Quic();
            $this->Quic->deserialize($param["Quic"]);
        }

        if (array_key_exists("PostMaxSize",$param) and $param["PostMaxSize"] !== null) {
            $this->PostMaxSize = new PostMaxSize();
            $this->PostMaxSize->deserialize($param["PostMaxSize"]);
        }

        if (array_key_exists("Compression",$param) and $param["Compression"] !== null) {
            $this->Compression = new Compression();
            $this->Compression->deserialize($param["Compression"]);
        }

        if (array_key_exists("UpstreamHttp2",$param) and $param["UpstreamHttp2"] !== null) {
            $this->UpstreamHttp2 = new UpstreamHttp2();
            $this->UpstreamHttp2->deserialize($param["UpstreamHttp2"]);
        }

        if (array_key_exists("ForceRedirect",$param) and $param["ForceRedirect"] !== null) {
            $this->ForceRedirect = new ForceRedirect();
            $this->ForceRedirect->deserialize($param["ForceRedirect"]);
        }

        if (array_key_exists("CacheConfig",$param) and $param["CacheConfig"] !== null) {
            $this->CacheConfig = new CacheConfig();
            $this->CacheConfig->deserialize($param["CacheConfig"]);
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = new Origin();
            $this->Origin->deserialize($param["Origin"]);
        }

        if (array_key_exists("SmartRouting",$param) and $param["SmartRouting"] !== null) {
            $this->SmartRouting = new SmartRouting();
            $this->SmartRouting->deserialize($param["SmartRouting"]);
        }

        if (array_key_exists("MaxAge",$param) and $param["MaxAge"] !== null) {
            $this->MaxAge = new MaxAge();
            $this->MaxAge->deserialize($param["MaxAge"]);
        }

        if (array_key_exists("OfflineCache",$param) and $param["OfflineCache"] !== null) {
            $this->OfflineCache = new OfflineCache();
            $this->OfflineCache->deserialize($param["OfflineCache"]);
        }

        if (array_key_exists("WebSocket",$param) and $param["WebSocket"] !== null) {
            $this->WebSocket = new WebSocket();
            $this->WebSocket->deserialize($param["WebSocket"]);
        }

        if (array_key_exists("ClientIpHeader",$param) and $param["ClientIpHeader"] !== null) {
            $this->ClientIpHeader = new ClientIpHeader();
            $this->ClientIpHeader->deserialize($param["ClientIpHeader"]);
        }

        if (array_key_exists("CachePrefresh",$param) and $param["CachePrefresh"] !== null) {
            $this->CachePrefresh = new CachePrefresh();
            $this->CachePrefresh->deserialize($param["CachePrefresh"]);
        }

        if (array_key_exists("Ipv6",$param) and $param["Ipv6"] !== null) {
            $this->Ipv6 = new Ipv6();
            $this->Ipv6->deserialize($param["Ipv6"]);
        }

        if (array_key_exists("Https",$param) and $param["Https"] !== null) {
            $this->Https = new Https();
            $this->Https->deserialize($param["Https"]);
        }

        if (array_key_exists("ClientIpCountry",$param) and $param["ClientIpCountry"] !== null) {
            $this->ClientIpCountry = new ClientIpCountry();
            $this->ClientIpCountry->deserialize($param["ClientIpCountry"]);
        }

        if (array_key_exists("Grpc",$param) and $param["Grpc"] !== null) {
            $this->Grpc = new Grpc();
            $this->Grpc->deserialize($param["Grpc"]);
        }

        if (array_key_exists("ImageOptimize",$param) and $param["ImageOptimize"] !== null) {
            $this->ImageOptimize = new ImageOptimize();
            $this->ImageOptimize->deserialize($param["ImageOptimize"]);
        }

        if (array_key_exists("AccelerateMainland",$param) and $param["AccelerateMainland"] !== null) {
            $this->AccelerateMainland = new AccelerateMainland();
            $this->AccelerateMainland->deserialize($param["AccelerateMainland"]);
        }

        if (array_key_exists("StandardDebug",$param) and $param["StandardDebug"] !== null) {
            $this->StandardDebug = new StandardDebug();
            $this->StandardDebug->deserialize($param["StandardDebug"]);
        }

        if (array_key_exists("JITVideoProcess",$param) and $param["JITVideoProcess"] !== null) {
            $this->JITVideoProcess = new JITVideoProcess();
            $this->JITVideoProcess->deserialize($param["JITVideoProcess"]);
        }
    }
}
