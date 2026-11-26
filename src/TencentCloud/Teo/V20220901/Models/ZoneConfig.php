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
 * Site acceleration configuration.
 *
 * @method SmartRoutingParameters getSmartRouting() Obtain Intelligent acceleration configuration.
 * @method void setSmartRouting(SmartRoutingParameters $SmartRouting) Set Intelligent acceleration configuration.
 * @method CacheConfigParameters getCache() Obtain Cache expiration time configuration.
 * @method void setCache(CacheConfigParameters $Cache) Set Cache expiration time configuration.
 * @method MaxAgeParameters getMaxAge() Obtain Browser cache configuration.
 * @method void setMaxAge(MaxAgeParameters $MaxAge) Set Browser cache configuration.
 * @method CacheKeyConfigParameters getCacheKey() Obtain Node cache key configuration.
 * @method void setCacheKey(CacheKeyConfigParameters $CacheKey) Set Node cache key configuration.
 * @method CachePrefreshParameters getCachePrefresh() Obtain Cache pre-refresh configuration.
 * @method void setCachePrefresh(CachePrefreshParameters $CachePrefresh) Set Cache pre-refresh configuration.
 * @method OfflineCacheParameters getOfflineCache() Obtain Offline cache configuration.
 * @method void setOfflineCache(OfflineCacheParameters $OfflineCache) Set Offline cache configuration.
 * @method CompressionParameters getCompression() Obtain Intelligent compression configuration.
 * @method void setCompression(CompressionParameters $Compression) Set Intelligent compression configuration.
 * @method ForceRedirectHTTPSParameters getForceRedirectHTTPS() Obtain Forced HTTPS redirect configuration for access protocols.
 * @method void setForceRedirectHTTPS(ForceRedirectHTTPSParameters $ForceRedirectHTTPS) Set Forced HTTPS redirect configuration for access protocols.
 * @method HSTSParameters getHSTS() Obtain HSTS configuration.
 * @method void setHSTS(HSTSParameters $HSTS) Set HSTS configuration.
 * @method TLSConfigParameters getTLSConfig() Obtain TLS configuration.
 * @method void setTLSConfig(TLSConfigParameters $TLSConfig) Set TLS configuration.
 * @method OCSPStaplingParameters getOCSPStapling() Obtain OCSP stapling configuration.
 * @method void setOCSPStapling(OCSPStaplingParameters $OCSPStapling) Set OCSP stapling configuration.
 * @method HTTP2Parameters getHTTP2() Obtain HTTP/2 configuration.
 * @method void setHTTP2(HTTP2Parameters $HTTP2) Set HTTP/2 configuration.
 * @method QUICParameters getQUIC() Obtain QUIC access configuration.
 * @method void setQUIC(QUICParameters $QUIC) Set QUIC access configuration.
 * @method UpstreamHTTP2Parameters getUpstreamHTTP2() Obtain HTTP/2 origin-pull configuration.
 * @method void setUpstreamHTTP2(UpstreamHTTP2Parameters $UpstreamHTTP2) Set HTTP/2 origin-pull configuration.
 * @method IPv6Parameters getIPv6() Obtain IPv6 access configuration.
 * @method void setIPv6(IPv6Parameters $IPv6) Set IPv6 access configuration.
 * @method WebSocketParameters getWebSocket() Obtain WebSocket configuration.
 * @method void setWebSocket(WebSocketParameters $WebSocket) Set WebSocket configuration.
 * @method PostMaxSizeParameters getPostMaxSize() Obtain Configuration for POST request transmission.
 * @method void setPostMaxSize(PostMaxSizeParameters $PostMaxSize) Set Configuration for POST request transmission.
 * @method ClientIPHeaderParameters getClientIPHeader() Obtain Client IP origin-pull request header configuration.
 * @method void setClientIPHeader(ClientIPHeaderParameters $ClientIPHeader) Set Client IP origin-pull request header configuration.
 * @method ClientIPCountryParameters getClientIPCountry() Obtain Configuration of whether to carry the regional information of the client IP during origin-pull.
 * @method void setClientIPCountry(ClientIPCountryParameters $ClientIPCountry) Set Configuration of whether to carry the regional information of the client IP during origin-pull.
 * @method GrpcParameters getGrpc() Obtain The gRPC protocol supports configuration.
 * @method void setGrpc(GrpcParameters $Grpc) Set The gRPC protocol supports configuration.
 * @method NetworkErrorLoggingParameters getNetworkErrorLogging() Obtain Network error log configuration.
 * @method void setNetworkErrorLogging(NetworkErrorLoggingParameters $NetworkErrorLogging) Set Network error log configuration.
 * @method AccelerateMainlandParameters getAccelerateMainland() Obtain Acceleration optimization configuration in the Chinese mainland.
 * @method void setAccelerateMainland(AccelerateMainlandParameters $AccelerateMainland) Set Acceleration optimization configuration in the Chinese mainland.
 * @method StandardDebugParameters getStandardDebug() Obtain Standard Debug configuration.
 * @method void setStandardDebug(StandardDebugParameters $StandardDebug) Set Standard Debug configuration.
 */
class ZoneConfig extends AbstractModel
{
    /**
     * @var SmartRoutingParameters Intelligent acceleration configuration.
     */
    public $SmartRouting;

    /**
     * @var CacheConfigParameters Cache expiration time configuration.
     */
    public $Cache;

    /**
     * @var MaxAgeParameters Browser cache configuration.
     */
    public $MaxAge;

    /**
     * @var CacheKeyConfigParameters Node cache key configuration.
     */
    public $CacheKey;

    /**
     * @var CachePrefreshParameters Cache pre-refresh configuration.
     */
    public $CachePrefresh;

    /**
     * @var OfflineCacheParameters Offline cache configuration.
     */
    public $OfflineCache;

    /**
     * @var CompressionParameters Intelligent compression configuration.
     */
    public $Compression;

    /**
     * @var ForceRedirectHTTPSParameters Forced HTTPS redirect configuration for access protocols.
     */
    public $ForceRedirectHTTPS;

    /**
     * @var HSTSParameters HSTS configuration.
     */
    public $HSTS;

    /**
     * @var TLSConfigParameters TLS configuration.
     */
    public $TLSConfig;

    /**
     * @var OCSPStaplingParameters OCSP stapling configuration.
     */
    public $OCSPStapling;

    /**
     * @var HTTP2Parameters HTTP/2 configuration.
     */
    public $HTTP2;

    /**
     * @var QUICParameters QUIC access configuration.
     */
    public $QUIC;

    /**
     * @var UpstreamHTTP2Parameters HTTP/2 origin-pull configuration.
     */
    public $UpstreamHTTP2;

    /**
     * @var IPv6Parameters IPv6 access configuration.
     */
    public $IPv6;

    /**
     * @var WebSocketParameters WebSocket configuration.
     */
    public $WebSocket;

    /**
     * @var PostMaxSizeParameters Configuration for POST request transmission.
     */
    public $PostMaxSize;

    /**
     * @var ClientIPHeaderParameters Client IP origin-pull request header configuration.
     */
    public $ClientIPHeader;

    /**
     * @var ClientIPCountryParameters Configuration of whether to carry the regional information of the client IP during origin-pull.
     */
    public $ClientIPCountry;

    /**
     * @var GrpcParameters The gRPC protocol supports configuration.
     */
    public $Grpc;

    /**
     * @var NetworkErrorLoggingParameters Network error log configuration.
     */
    public $NetworkErrorLogging;

    /**
     * @var AccelerateMainlandParameters Acceleration optimization configuration in the Chinese mainland.
     */
    public $AccelerateMainland;

    /**
     * @var StandardDebugParameters Standard Debug configuration.
     */
    public $StandardDebug;

    /**
     * @param SmartRoutingParameters $SmartRouting Intelligent acceleration configuration.
     * @param CacheConfigParameters $Cache Cache expiration time configuration.
     * @param MaxAgeParameters $MaxAge Browser cache configuration.
     * @param CacheKeyConfigParameters $CacheKey Node cache key configuration.
     * @param CachePrefreshParameters $CachePrefresh Cache pre-refresh configuration.
     * @param OfflineCacheParameters $OfflineCache Offline cache configuration.
     * @param CompressionParameters $Compression Intelligent compression configuration.
     * @param ForceRedirectHTTPSParameters $ForceRedirectHTTPS Forced HTTPS redirect configuration for access protocols.
     * @param HSTSParameters $HSTS HSTS configuration.
     * @param TLSConfigParameters $TLSConfig TLS configuration.
     * @param OCSPStaplingParameters $OCSPStapling OCSP stapling configuration.
     * @param HTTP2Parameters $HTTP2 HTTP/2 configuration.
     * @param QUICParameters $QUIC QUIC access configuration.
     * @param UpstreamHTTP2Parameters $UpstreamHTTP2 HTTP/2 origin-pull configuration.
     * @param IPv6Parameters $IPv6 IPv6 access configuration.
     * @param WebSocketParameters $WebSocket WebSocket configuration.
     * @param PostMaxSizeParameters $PostMaxSize Configuration for POST request transmission.
     * @param ClientIPHeaderParameters $ClientIPHeader Client IP origin-pull request header configuration.
     * @param ClientIPCountryParameters $ClientIPCountry Configuration of whether to carry the regional information of the client IP during origin-pull.
     * @param GrpcParameters $Grpc The gRPC protocol supports configuration.
     * @param NetworkErrorLoggingParameters $NetworkErrorLogging Network error log configuration.
     * @param AccelerateMainlandParameters $AccelerateMainland Acceleration optimization configuration in the Chinese mainland.
     * @param StandardDebugParameters $StandardDebug Standard Debug configuration.
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
        if (array_key_exists("SmartRouting",$param) and $param["SmartRouting"] !== null) {
            $this->SmartRouting = new SmartRoutingParameters();
            $this->SmartRouting->deserialize($param["SmartRouting"]);
        }

        if (array_key_exists("Cache",$param) and $param["Cache"] !== null) {
            $this->Cache = new CacheConfigParameters();
            $this->Cache->deserialize($param["Cache"]);
        }

        if (array_key_exists("MaxAge",$param) and $param["MaxAge"] !== null) {
            $this->MaxAge = new MaxAgeParameters();
            $this->MaxAge->deserialize($param["MaxAge"]);
        }

        if (array_key_exists("CacheKey",$param) and $param["CacheKey"] !== null) {
            $this->CacheKey = new CacheKeyConfigParameters();
            $this->CacheKey->deserialize($param["CacheKey"]);
        }

        if (array_key_exists("CachePrefresh",$param) and $param["CachePrefresh"] !== null) {
            $this->CachePrefresh = new CachePrefreshParameters();
            $this->CachePrefresh->deserialize($param["CachePrefresh"]);
        }

        if (array_key_exists("OfflineCache",$param) and $param["OfflineCache"] !== null) {
            $this->OfflineCache = new OfflineCacheParameters();
            $this->OfflineCache->deserialize($param["OfflineCache"]);
        }

        if (array_key_exists("Compression",$param) and $param["Compression"] !== null) {
            $this->Compression = new CompressionParameters();
            $this->Compression->deserialize($param["Compression"]);
        }

        if (array_key_exists("ForceRedirectHTTPS",$param) and $param["ForceRedirectHTTPS"] !== null) {
            $this->ForceRedirectHTTPS = new ForceRedirectHTTPSParameters();
            $this->ForceRedirectHTTPS->deserialize($param["ForceRedirectHTTPS"]);
        }

        if (array_key_exists("HSTS",$param) and $param["HSTS"] !== null) {
            $this->HSTS = new HSTSParameters();
            $this->HSTS->deserialize($param["HSTS"]);
        }

        if (array_key_exists("TLSConfig",$param) and $param["TLSConfig"] !== null) {
            $this->TLSConfig = new TLSConfigParameters();
            $this->TLSConfig->deserialize($param["TLSConfig"]);
        }

        if (array_key_exists("OCSPStapling",$param) and $param["OCSPStapling"] !== null) {
            $this->OCSPStapling = new OCSPStaplingParameters();
            $this->OCSPStapling->deserialize($param["OCSPStapling"]);
        }

        if (array_key_exists("HTTP2",$param) and $param["HTTP2"] !== null) {
            $this->HTTP2 = new HTTP2Parameters();
            $this->HTTP2->deserialize($param["HTTP2"]);
        }

        if (array_key_exists("QUIC",$param) and $param["QUIC"] !== null) {
            $this->QUIC = new QUICParameters();
            $this->QUIC->deserialize($param["QUIC"]);
        }

        if (array_key_exists("UpstreamHTTP2",$param) and $param["UpstreamHTTP2"] !== null) {
            $this->UpstreamHTTP2 = new UpstreamHTTP2Parameters();
            $this->UpstreamHTTP2->deserialize($param["UpstreamHTTP2"]);
        }

        if (array_key_exists("IPv6",$param) and $param["IPv6"] !== null) {
            $this->IPv6 = new IPv6Parameters();
            $this->IPv6->deserialize($param["IPv6"]);
        }

        if (array_key_exists("WebSocket",$param) and $param["WebSocket"] !== null) {
            $this->WebSocket = new WebSocketParameters();
            $this->WebSocket->deserialize($param["WebSocket"]);
        }

        if (array_key_exists("PostMaxSize",$param) and $param["PostMaxSize"] !== null) {
            $this->PostMaxSize = new PostMaxSizeParameters();
            $this->PostMaxSize->deserialize($param["PostMaxSize"]);
        }

        if (array_key_exists("ClientIPHeader",$param) and $param["ClientIPHeader"] !== null) {
            $this->ClientIPHeader = new ClientIPHeaderParameters();
            $this->ClientIPHeader->deserialize($param["ClientIPHeader"]);
        }

        if (array_key_exists("ClientIPCountry",$param) and $param["ClientIPCountry"] !== null) {
            $this->ClientIPCountry = new ClientIPCountryParameters();
            $this->ClientIPCountry->deserialize($param["ClientIPCountry"]);
        }

        if (array_key_exists("Grpc",$param) and $param["Grpc"] !== null) {
            $this->Grpc = new GrpcParameters();
            $this->Grpc->deserialize($param["Grpc"]);
        }

        if (array_key_exists("NetworkErrorLogging",$param) and $param["NetworkErrorLogging"] !== null) {
            $this->NetworkErrorLogging = new NetworkErrorLoggingParameters();
            $this->NetworkErrorLogging->deserialize($param["NetworkErrorLogging"]);
        }

        if (array_key_exists("AccelerateMainland",$param) and $param["AccelerateMainland"] !== null) {
            $this->AccelerateMainland = new AccelerateMainlandParameters();
            $this->AccelerateMainland->deserialize($param["AccelerateMainland"]);
        }

        if (array_key_exists("StandardDebug",$param) and $param["StandardDebug"] !== null) {
            $this->StandardDebug = new StandardDebugParameters();
            $this->StandardDebug->deserialize($param["StandardDebug"]);
        }
    }
}
