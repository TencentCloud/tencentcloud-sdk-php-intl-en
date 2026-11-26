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
 * Site configuration.
 *
 * @method string getZoneName() Obtain Site name.
 * @method void setZoneName(string $ZoneName) Set Site name.
 * @method string getArea() Obtain Site acceleration region info. Valid values:
<li>mainland: domestic acceleration in China;</li>
<li> overseas: acceleration outside the Chinese mainland.</li>
 * @method void setArea(string $Area) Set Site acceleration region info. Valid values:
<li>mainland: domestic acceleration in China;</li>
<li> overseas: acceleration outside the Chinese mainland.</li>
 * @method CacheKey getCacheKey() Obtain Node cache key configuration.
 * @method void setCacheKey(CacheKey $CacheKey) Set Node cache key configuration.
 * @method Quic getQuic() Obtain Quic access configuration.
 * @method void setQuic(Quic $Quic) Set Quic access configuration.
 * @method PostMaxSize getPostMaxSize() Obtain HTTP POST request transmission configuration.
 * @method void setPostMaxSize(PostMaxSize $PostMaxSize) Set HTTP POST request transmission configuration.
 * @method Compression getCompression() Obtain Intelligent compression configuration.
 * @method void setCompression(Compression $Compression) Set Intelligent compression configuration.
 * @method UpstreamHttp2 getUpstreamHttp2() Obtain Http/2 origin-pull configuration.
 * @method void setUpstreamHttp2(UpstreamHttp2 $UpstreamHttp2) Set Http/2 origin-pull configuration.
 * @method ForceRedirect getForceRedirect() Obtain Access protocol mandatory Https redirection configuration.
 * @method void setForceRedirect(ForceRedirect $ForceRedirect) Set Access protocol mandatory Https redirection configuration.
 * @method CacheConfig getCacheConfig() Obtain Cache expiration time configuration.
 * @method void setCacheConfig(CacheConfig $CacheConfig) Set Cache expiration time configuration.
 * @method Origin getOrigin() Obtain Origin server configuration.
 * @method void setOrigin(Origin $Origin) Set Origin server configuration.
 * @method SmartRouting getSmartRouting() Obtain Smart acceleration configuration.
 * @method void setSmartRouting(SmartRouting $SmartRouting) Set Smart acceleration configuration.
 * @method MaxAge getMaxAge() Obtain Browser cache configuration.
 * @method void setMaxAge(MaxAge $MaxAge) Set Browser cache configuration.
 * @method OfflineCache getOfflineCache() Obtain Offline cache configuration.
 * @method void setOfflineCache(OfflineCache $OfflineCache) Set Offline cache configuration.
 * @method WebSocket getWebSocket() Obtain WebSocket configuration.
 * @method void setWebSocket(WebSocket $WebSocket) Set WebSocket configuration.
 * @method ClientIpHeader getClientIpHeader() Obtain Client IP HTTP Request Headers configuration.
 * @method void setClientIpHeader(ClientIpHeader $ClientIpHeader) Set Client IP HTTP Request Headers configuration.
 * @method CachePrefresh getCachePrefresh() Obtain Cache pre-refresh configuration.
 * @method void setCachePrefresh(CachePrefresh $CachePrefresh) Set Cache pre-refresh configuration.
 * @method Ipv6 getIpv6() Obtain Ipv6 access configuration.
 * @method void setIpv6(Ipv6 $Ipv6) Set Ipv6 access configuration.
 * @method Https getHttps() Obtain Https acceleration configuration.
 * @method void setHttps(Https $Https) Set Https acceleration configuration.
 * @method ClientIpCountry getClientIpCountry() Obtain Configuration of whether to carry the regional information of the client IP during origin-pull.
 * @method void setClientIpCountry(ClientIpCountry $ClientIpCountry) Set Configuration of whether to carry the regional information of the client IP during origin-pull.
 * @method Grpc getGrpc() Obtain Grpc protocol supports configuration.
 * @method void setGrpc(Grpc $Grpc) Set Grpc protocol supports configuration.
 * @method NetworkErrorLogging getNetworkErrorLogging() Obtain Network error log configuration.
 * @method void setNetworkErrorLogging(NetworkErrorLogging $NetworkErrorLogging) Set Network error log configuration.
 * @method ImageOptimize getImageOptimize() Obtain Image optimization configuration.
 * @method void setImageOptimize(ImageOptimize $ImageOptimize) Set Image optimization configuration.
 * @method AccelerateMainland getAccelerateMainland() Obtain Acceleration optimization configuration for the Chinese mainland.
 * @method void setAccelerateMainland(AccelerateMainland $AccelerateMainland) Set Acceleration optimization configuration for the Chinese mainland.
 * @method StandardDebug getStandardDebug() Obtain Standard Debug configuration.
 * @method void setStandardDebug(StandardDebug $StandardDebug) Set Standard Debug configuration.
 * @method JITVideoProcess getJITVideoProcess() Obtain Just-in-time media processing configuration.
 * @method void setJITVideoProcess(JITVideoProcess $JITVideoProcess) Set Just-in-time media processing configuration.
 */
class ZoneSetting extends AbstractModel
{
    /**
     * @var string Site name.
     */
    public $ZoneName;

    /**
     * @var string Site acceleration region info. Valid values:
<li>mainland: domestic acceleration in China;</li>
<li> overseas: acceleration outside the Chinese mainland.</li>
     */
    public $Area;

    /**
     * @var CacheKey Node cache key configuration.
     */
    public $CacheKey;

    /**
     * @var Quic Quic access configuration.
     */
    public $Quic;

    /**
     * @var PostMaxSize HTTP POST request transmission configuration.
     */
    public $PostMaxSize;

    /**
     * @var Compression Intelligent compression configuration.
     */
    public $Compression;

    /**
     * @var UpstreamHttp2 Http/2 origin-pull configuration.
     */
    public $UpstreamHttp2;

    /**
     * @var ForceRedirect Access protocol mandatory Https redirection configuration.
     */
    public $ForceRedirect;

    /**
     * @var CacheConfig Cache expiration time configuration.
     */
    public $CacheConfig;

    /**
     * @var Origin Origin server configuration.
     */
    public $Origin;

    /**
     * @var SmartRouting Smart acceleration configuration.
     */
    public $SmartRouting;

    /**
     * @var MaxAge Browser cache configuration.
     */
    public $MaxAge;

    /**
     * @var OfflineCache Offline cache configuration.
     */
    public $OfflineCache;

    /**
     * @var WebSocket WebSocket configuration.
     */
    public $WebSocket;

    /**
     * @var ClientIpHeader Client IP HTTP Request Headers configuration.
     */
    public $ClientIpHeader;

    /**
     * @var CachePrefresh Cache pre-refresh configuration.
     */
    public $CachePrefresh;

    /**
     * @var Ipv6 Ipv6 access configuration.
     */
    public $Ipv6;

    /**
     * @var Https Https acceleration configuration.
     */
    public $Https;

    /**
     * @var ClientIpCountry Configuration of whether to carry the regional information of the client IP during origin-pull.
     */
    public $ClientIpCountry;

    /**
     * @var Grpc Grpc protocol supports configuration.
     */
    public $Grpc;

    /**
     * @var NetworkErrorLogging Network error log configuration.
     */
    public $NetworkErrorLogging;

    /**
     * @var ImageOptimize Image optimization configuration.
     */
    public $ImageOptimize;

    /**
     * @var AccelerateMainland Acceleration optimization configuration for the Chinese mainland.
     */
    public $AccelerateMainland;

    /**
     * @var StandardDebug Standard Debug configuration.
     */
    public $StandardDebug;

    /**
     * @var JITVideoProcess Just-in-time media processing configuration.
     */
    public $JITVideoProcess;

    /**
     * @param string $ZoneName Site name.
     * @param string $Area Site acceleration region info. Valid values:
<li>mainland: domestic acceleration in China;</li>
<li> overseas: acceleration outside the Chinese mainland.</li>
     * @param CacheKey $CacheKey Node cache key configuration.
     * @param Quic $Quic Quic access configuration.
     * @param PostMaxSize $PostMaxSize HTTP POST request transmission configuration.
     * @param Compression $Compression Intelligent compression configuration.
     * @param UpstreamHttp2 $UpstreamHttp2 Http/2 origin-pull configuration.
     * @param ForceRedirect $ForceRedirect Access protocol mandatory Https redirection configuration.
     * @param CacheConfig $CacheConfig Cache expiration time configuration.
     * @param Origin $Origin Origin server configuration.
     * @param SmartRouting $SmartRouting Smart acceleration configuration.
     * @param MaxAge $MaxAge Browser cache configuration.
     * @param OfflineCache $OfflineCache Offline cache configuration.
     * @param WebSocket $WebSocket WebSocket configuration.
     * @param ClientIpHeader $ClientIpHeader Client IP HTTP Request Headers configuration.
     * @param CachePrefresh $CachePrefresh Cache pre-refresh configuration.
     * @param Ipv6 $Ipv6 Ipv6 access configuration.
     * @param Https $Https Https acceleration configuration.
     * @param ClientIpCountry $ClientIpCountry Configuration of whether to carry the regional information of the client IP during origin-pull.
     * @param Grpc $Grpc Grpc protocol supports configuration.
     * @param NetworkErrorLogging $NetworkErrorLogging Network error log configuration.
     * @param ImageOptimize $ImageOptimize Image optimization configuration.
     * @param AccelerateMainland $AccelerateMainland Acceleration optimization configuration for the Chinese mainland.
     * @param StandardDebug $StandardDebug Standard Debug configuration.
     * @param JITVideoProcess $JITVideoProcess Just-in-time media processing configuration.
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

        if (array_key_exists("NetworkErrorLogging",$param) and $param["NetworkErrorLogging"] !== null) {
            $this->NetworkErrorLogging = new NetworkErrorLogging();
            $this->NetworkErrorLogging->deserialize($param["NetworkErrorLogging"]);
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
