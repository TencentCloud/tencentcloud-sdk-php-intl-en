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
 * ModifyZoneSetting request structure.
 *
 * @method string getZoneId() Obtain Site ID to be changed.
 * @method void setZoneId(string $ZoneId) Set Site ID to be changed.
 * @method CacheConfig getCacheConfig() Obtain Cache expiration time configuration.
Leave blank to retain the original configuration.
 * @method void setCacheConfig(CacheConfig $CacheConfig) Set Cache expiration time configuration.
Leave blank to retain the original configuration.
 * @method CacheKey getCacheKey() Obtain Node cache key configuration.
Leave blank to retain the original configuration.
 * @method void setCacheKey(CacheKey $CacheKey) Set Node cache key configuration.
Leave blank to retain the original configuration.
 * @method MaxAge getMaxAge() Obtain Browser cache configuration.
Leave blank to retain the original configuration.
 * @method void setMaxAge(MaxAge $MaxAge) Set Browser cache configuration.
Leave blank to retain the original configuration.
 * @method OfflineCache getOfflineCache() Obtain Offline cache configuration.
Leave blank to retain the original configuration.
 * @method void setOfflineCache(OfflineCache $OfflineCache) Set Offline cache configuration.
Leave blank to retain the original configuration.
 * @method Quic getQuic() Obtain Quic access configuration.
Leave blank to retain the original configuration.
 * @method void setQuic(Quic $Quic) Set Quic access configuration.
Leave blank to retain the original configuration.
 * @method PostMaxSize getPostMaxSize() Obtain Configuration for Post request transmission.
Leave blank to retain the original configuration.
 * @method void setPostMaxSize(PostMaxSize $PostMaxSize) Set Configuration for Post request transmission.
Leave blank to retain the original configuration.
 * @method Compression getCompression() Obtain Intelligent compression configuration.
Leave blank to retain the original configuration.
 * @method void setCompression(Compression $Compression) Set Intelligent compression configuration.
Leave blank to retain the original configuration.
 * @method UpstreamHttp2 getUpstreamHttp2() Obtain Http2 origin-pull configuration.
Leave blank to retain the original configuration.
 * @method void setUpstreamHttp2(UpstreamHttp2 $UpstreamHttp2) Set Http2 origin-pull configuration.
Leave blank to retain the original configuration.
 * @method ForceRedirect getForceRedirect() Obtain Access protocol forcing Https redirection configuration.
Leave blank to retain the original configuration.
 * @method void setForceRedirect(ForceRedirect $ForceRedirect) Set Access protocol forcing Https redirection configuration.
Leave blank to retain the original configuration.
 * @method Https getHttps() Obtain Https acceleration configuration.
Leave blank to retain the original configuration.
 * @method void setHttps(Https $Https) Set Https acceleration configuration.
Leave blank to retain the original configuration.
 * @method Origin getOrigin() Obtain Origin server configuration.
Leave blank to retain the original configuration.
 * @method void setOrigin(Origin $Origin) Set Origin server configuration.
Leave blank to retain the original configuration.
 * @method SmartRouting getSmartRouting() Obtain Intelligent acceleration configuration.
Leave blank to retain the original configuration.
 * @method void setSmartRouting(SmartRouting $SmartRouting) Set Intelligent acceleration configuration.
Leave blank to retain the original configuration.
 * @method WebSocket getWebSocket() Obtain WebSocket configuration.
Leave blank to retain the original configuration.
 * @method void setWebSocket(WebSocket $WebSocket) Set WebSocket configuration.
Leave blank to retain the original configuration.
 * @method ClientIpHeader getClientIpHeader() Obtain Client IP origin-pull request header configuration.
Leave blank to retain the original configuration.
 * @method void setClientIpHeader(ClientIpHeader $ClientIpHeader) Set Client IP origin-pull request header configuration.
Leave blank to retain the original configuration.
 * @method CachePrefresh getCachePrefresh() Obtain Cache pre-refresh configuration.
Leave blank to retain the original configuration.
 * @method void setCachePrefresh(CachePrefresh $CachePrefresh) Set Cache pre-refresh configuration.
Leave blank to retain the original configuration.
 * @method Ipv6 getIpv6() Obtain Ipv6 access configuration.
Leave blank to retain the original configuration.
 * @method void setIpv6(Ipv6 $Ipv6) Set Ipv6 access configuration.
Leave blank to retain the original configuration.
 * @method ClientIpCountry getClientIpCountry() Obtain Configuration of whether to carry the regional information of the client IP during origin-pull.
Leave blank to retain the original configuration.
 * @method void setClientIpCountry(ClientIpCountry $ClientIpCountry) Set Configuration of whether to carry the regional information of the client IP during origin-pull.
Leave blank to retain the original configuration.
 * @method Grpc getGrpc() Obtain Grpc protocol support configuration.
Leave blank to retain the original configuration.
 * @method void setGrpc(Grpc $Grpc) Set Grpc protocol support configuration.
Leave blank to retain the original configuration.
 * @method NetworkErrorLogging getNetworkErrorLogging() Obtain Network error log configuration. If this field is not specified, the original configuration will be retained.
 * @method void setNetworkErrorLogging(NetworkErrorLogging $NetworkErrorLogging) Set Network error log configuration. If this field is not specified, the original configuration will be retained.
 * @method ImageOptimize getImageOptimize() Obtain Image optimization configuration.
Not specified: disabled.
 * @method void setImageOptimize(ImageOptimize $ImageOptimize) Set Image optimization configuration.
Not specified: disabled.
 * @method StandardDebug getStandardDebug() Obtain Standard Debug configuration.
 * @method void setStandardDebug(StandardDebug $StandardDebug) Set Standard Debug configuration.
 * @method JITVideoProcess getJITVideoProcess() Obtain Just-in-time media processing configuration. The original configuration applies if this field is not specified.
 * @method void setJITVideoProcess(JITVideoProcess $JITVideoProcess) Set Just-in-time media processing configuration. The original configuration applies if this field is not specified.
 */
class ModifyZoneSettingRequest extends AbstractModel
{
    /**
     * @var string Site ID to be changed.
     */
    public $ZoneId;

    /**
     * @var CacheConfig Cache expiration time configuration.
Leave blank to retain the original configuration.
     */
    public $CacheConfig;

    /**
     * @var CacheKey Node cache key configuration.
Leave blank to retain the original configuration.
     */
    public $CacheKey;

    /**
     * @var MaxAge Browser cache configuration.
Leave blank to retain the original configuration.
     */
    public $MaxAge;

    /**
     * @var OfflineCache Offline cache configuration.
Leave blank to retain the original configuration.
     */
    public $OfflineCache;

    /**
     * @var Quic Quic access configuration.
Leave blank to retain the original configuration.
     */
    public $Quic;

    /**
     * @var PostMaxSize Configuration for Post request transmission.
Leave blank to retain the original configuration.
     */
    public $PostMaxSize;

    /**
     * @var Compression Intelligent compression configuration.
Leave blank to retain the original configuration.
     */
    public $Compression;

    /**
     * @var UpstreamHttp2 Http2 origin-pull configuration.
Leave blank to retain the original configuration.
     */
    public $UpstreamHttp2;

    /**
     * @var ForceRedirect Access protocol forcing Https redirection configuration.
Leave blank to retain the original configuration.
     */
    public $ForceRedirect;

    /**
     * @var Https Https acceleration configuration.
Leave blank to retain the original configuration.
     */
    public $Https;

    /**
     * @var Origin Origin server configuration.
Leave blank to retain the original configuration.
     */
    public $Origin;

    /**
     * @var SmartRouting Intelligent acceleration configuration.
Leave blank to retain the original configuration.
     */
    public $SmartRouting;

    /**
     * @var WebSocket WebSocket configuration.
Leave blank to retain the original configuration.
     */
    public $WebSocket;

    /**
     * @var ClientIpHeader Client IP origin-pull request header configuration.
Leave blank to retain the original configuration.
     */
    public $ClientIpHeader;

    /**
     * @var CachePrefresh Cache pre-refresh configuration.
Leave blank to retain the original configuration.
     */
    public $CachePrefresh;

    /**
     * @var Ipv6 Ipv6 access configuration.
Leave blank to retain the original configuration.
     */
    public $Ipv6;

    /**
     * @var ClientIpCountry Configuration of whether to carry the regional information of the client IP during origin-pull.
Leave blank to retain the original configuration.
     */
    public $ClientIpCountry;

    /**
     * @var Grpc Grpc protocol support configuration.
Leave blank to retain the original configuration.
     */
    public $Grpc;

    /**
     * @var NetworkErrorLogging Network error log configuration. If this field is not specified, the original configuration will be retained.
     */
    public $NetworkErrorLogging;

    /**
     * @var ImageOptimize Image optimization configuration.
Not specified: disabled.
     */
    public $ImageOptimize;

    /**
     * @var StandardDebug Standard Debug configuration.
     */
    public $StandardDebug;

    /**
     * @var JITVideoProcess Just-in-time media processing configuration. The original configuration applies if this field is not specified.
     */
    public $JITVideoProcess;

    /**
     * @param string $ZoneId Site ID to be changed.
     * @param CacheConfig $CacheConfig Cache expiration time configuration.
Leave blank to retain the original configuration.
     * @param CacheKey $CacheKey Node cache key configuration.
Leave blank to retain the original configuration.
     * @param MaxAge $MaxAge Browser cache configuration.
Leave blank to retain the original configuration.
     * @param OfflineCache $OfflineCache Offline cache configuration.
Leave blank to retain the original configuration.
     * @param Quic $Quic Quic access configuration.
Leave blank to retain the original configuration.
     * @param PostMaxSize $PostMaxSize Configuration for Post request transmission.
Leave blank to retain the original configuration.
     * @param Compression $Compression Intelligent compression configuration.
Leave blank to retain the original configuration.
     * @param UpstreamHttp2 $UpstreamHttp2 Http2 origin-pull configuration.
Leave blank to retain the original configuration.
     * @param ForceRedirect $ForceRedirect Access protocol forcing Https redirection configuration.
Leave blank to retain the original configuration.
     * @param Https $Https Https acceleration configuration.
Leave blank to retain the original configuration.
     * @param Origin $Origin Origin server configuration.
Leave blank to retain the original configuration.
     * @param SmartRouting $SmartRouting Intelligent acceleration configuration.
Leave blank to retain the original configuration.
     * @param WebSocket $WebSocket WebSocket configuration.
Leave blank to retain the original configuration.
     * @param ClientIpHeader $ClientIpHeader Client IP origin-pull request header configuration.
Leave blank to retain the original configuration.
     * @param CachePrefresh $CachePrefresh Cache pre-refresh configuration.
Leave blank to retain the original configuration.
     * @param Ipv6 $Ipv6 Ipv6 access configuration.
Leave blank to retain the original configuration.
     * @param ClientIpCountry $ClientIpCountry Configuration of whether to carry the regional information of the client IP during origin-pull.
Leave blank to retain the original configuration.
     * @param Grpc $Grpc Grpc protocol support configuration.
Leave blank to retain the original configuration.
     * @param NetworkErrorLogging $NetworkErrorLogging Network error log configuration. If this field is not specified, the original configuration will be retained.
     * @param ImageOptimize $ImageOptimize Image optimization configuration.
Not specified: disabled.
     * @param StandardDebug $StandardDebug Standard Debug configuration.
     * @param JITVideoProcess $JITVideoProcess Just-in-time media processing configuration. The original configuration applies if this field is not specified.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("CacheConfig",$param) and $param["CacheConfig"] !== null) {
            $this->CacheConfig = new CacheConfig();
            $this->CacheConfig->deserialize($param["CacheConfig"]);
        }

        if (array_key_exists("CacheKey",$param) and $param["CacheKey"] !== null) {
            $this->CacheKey = new CacheKey();
            $this->CacheKey->deserialize($param["CacheKey"]);
        }

        if (array_key_exists("MaxAge",$param) and $param["MaxAge"] !== null) {
            $this->MaxAge = new MaxAge();
            $this->MaxAge->deserialize($param["MaxAge"]);
        }

        if (array_key_exists("OfflineCache",$param) and $param["OfflineCache"] !== null) {
            $this->OfflineCache = new OfflineCache();
            $this->OfflineCache->deserialize($param["OfflineCache"]);
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

        if (array_key_exists("Https",$param) and $param["Https"] !== null) {
            $this->Https = new Https();
            $this->Https->deserialize($param["Https"]);
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = new Origin();
            $this->Origin->deserialize($param["Origin"]);
        }

        if (array_key_exists("SmartRouting",$param) and $param["SmartRouting"] !== null) {
            $this->SmartRouting = new SmartRouting();
            $this->SmartRouting->deserialize($param["SmartRouting"]);
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
