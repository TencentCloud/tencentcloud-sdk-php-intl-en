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
 * Site acceleration configuration.
 *
 * @method SmartRoutingParameters getSmartRouting() Obtain <Intelligent acceleration configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setSmartRouting(SmartRoutingParameters $SmartRouting) Set <Intelligent acceleration configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method CacheConfigParameters getCache() Obtain Node cache expiration time configuration.
.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setCache(CacheConfigParameters $Cache) Set Node cache expiration time configuration.
.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method MaxAgeParameters getMaxAge() Obtain Browser cache rule configuration, which is used to set the default value of maxage and is disabled by default.
.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setMaxAge(MaxAgeParameters $MaxAge) Set Browser cache rule configuration, which is used to set the default value of maxage and is disabled by default.
.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method CacheKeyConfigParameters getCacheKey() Obtain The node cache key configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setCacheKey(CacheKeyConfigParameters $CacheKey) Set The node cache key configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method CachePrefreshParameters getCachePrefresh() Obtain Cache prefresh configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setCachePrefresh(CachePrefreshParameters $CachePrefresh) Set Cache prefresh configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method OfflineCacheParameters getOfflineCache() Obtain Offline cache configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setOfflineCache(OfflineCacheParameters $OfflineCache) Set Offline cache configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method CompressionParameters getCompression() Obtain Smart compression configuration.
.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setCompression(CompressionParameters $Compression) Set Smart compression configuration.
.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method ForceRedirectHTTPSParameters getForceRedirectHTTPS() Obtain Forced https redirect configuration for access protocols.
.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setForceRedirectHTTPS(ForceRedirectHTTPSParameters $ForceRedirectHTTPS) Set Forced https redirect configuration for access protocols.
.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method HSTSParameters getHSTS() Obtain HSTS configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setHSTS(HSTSParameters $HSTS) Set HSTS configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method TLSConfigParameters getTLSConfig() Obtain TLS configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setTLSConfig(TLSConfigParameters $TLSConfig) Set TLS configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method OCSPStaplingParameters getOCSPStapling() Obtain OCSP stapling configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setOCSPStapling(OCSPStaplingParameters $OCSPStapling) Set OCSP stapling configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method HTTP2Parameters getHTTP2() Obtain HTTP/2 configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setHTTP2(HTTP2Parameters $HTTP2) Set HTTP/2 configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method QUICParameters getQUIC() Obtain QUIC access configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setQUIC(QUICParameters $QUIC) Set QUIC access configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method UpstreamHTTP2Parameters getUpstreamHTTP2() Obtain HTTP2 origin-pull configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setUpstreamHTTP2(UpstreamHTTP2Parameters $UpstreamHTTP2) Set HTTP2 origin-pull configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method IPv6Parameters getIPv6() Obtain IPv6 access configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setIPv6(IPv6Parameters $IPv6) Set IPv6 access configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method WebSocketParameters getWebSocket() Obtain WebSocket configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setWebSocket(WebSocketParameters $WebSocket) Set WebSocket configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method PostMaxSizeParameters getPostMaxSize() Obtain POST request transport configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setPostMaxSize(PostMaxSizeParameters $PostMaxSize) Set POST request transport configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method ClientIPHeaderParameters getClientIPHeader() Obtain Client ip origin-pull request header configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setClientIPHeader(ClientIPHeaderParameters $ClientIPHeader) Set Client ip origin-pull request header configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method ClientIPCountryParameters getClientIPCountry() Obtain Whether to carry the region information of the client ip during origin-pull.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setClientIPCountry(ClientIPCountryParameters $ClientIPCountry) Set Whether to carry the region information of the client ip during origin-pull.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method GrpcParameters getGrpc() Obtain Configuration of grpc support.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setGrpc(GrpcParameters $Grpc) Set Configuration of grpc support.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method AccelerateMainlandParameters getAccelerateMainland() Obtain Accelerate optimization and configuration in mainland china.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setAccelerateMainland(AccelerateMainlandParameters $AccelerateMainland) Set Accelerate optimization and configuration in mainland china.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method StandardDebugParameters getStandardDebug() Obtain Standard debugging configuration.
.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setStandardDebug(StandardDebugParameters $StandardDebug) Set Standard debugging configuration.
.
Note: this field may return null, which indicates a failure to obtain a valid value.
 */
class ZoneConfig extends AbstractModel
{
    /**
     * @var SmartRoutingParameters <Intelligent acceleration configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $SmartRouting;

    /**
     * @var CacheConfigParameters Node cache expiration time configuration.
.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $Cache;

    /**
     * @var MaxAgeParameters Browser cache rule configuration, which is used to set the default value of maxage and is disabled by default.
.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $MaxAge;

    /**
     * @var CacheKeyConfigParameters The node cache key configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $CacheKey;

    /**
     * @var CachePrefreshParameters Cache prefresh configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $CachePrefresh;

    /**
     * @var OfflineCacheParameters Offline cache configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $OfflineCache;

    /**
     * @var CompressionParameters Smart compression configuration.
.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $Compression;

    /**
     * @var ForceRedirectHTTPSParameters Forced https redirect configuration for access protocols.
.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $ForceRedirectHTTPS;

    /**
     * @var HSTSParameters HSTS configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $HSTS;

    /**
     * @var TLSConfigParameters TLS configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $TLSConfig;

    /**
     * @var OCSPStaplingParameters OCSP stapling configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $OCSPStapling;

    /**
     * @var HTTP2Parameters HTTP/2 configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $HTTP2;

    /**
     * @var QUICParameters QUIC access configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $QUIC;

    /**
     * @var UpstreamHTTP2Parameters HTTP2 origin-pull configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $UpstreamHTTP2;

    /**
     * @var IPv6Parameters IPv6 access configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $IPv6;

    /**
     * @var WebSocketParameters WebSocket configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $WebSocket;

    /**
     * @var PostMaxSizeParameters POST request transport configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $PostMaxSize;

    /**
     * @var ClientIPHeaderParameters Client ip origin-pull request header configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $ClientIPHeader;

    /**
     * @var ClientIPCountryParameters Whether to carry the region information of the client ip during origin-pull.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $ClientIPCountry;

    /**
     * @var GrpcParameters Configuration of grpc support.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $Grpc;

    /**
     * @var AccelerateMainlandParameters Accelerate optimization and configuration in mainland china.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $AccelerateMainland;

    /**
     * @var StandardDebugParameters Standard debugging configuration.
.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $StandardDebug;

    /**
     * @param SmartRoutingParameters $SmartRouting <Intelligent acceleration configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param CacheConfigParameters $Cache Node cache expiration time configuration.
.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param MaxAgeParameters $MaxAge Browser cache rule configuration, which is used to set the default value of maxage and is disabled by default.
.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param CacheKeyConfigParameters $CacheKey The node cache key configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param CachePrefreshParameters $CachePrefresh Cache prefresh configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param OfflineCacheParameters $OfflineCache Offline cache configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param CompressionParameters $Compression Smart compression configuration.
.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param ForceRedirectHTTPSParameters $ForceRedirectHTTPS Forced https redirect configuration for access protocols.
.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param HSTSParameters $HSTS HSTS configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param TLSConfigParameters $TLSConfig TLS configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param OCSPStaplingParameters $OCSPStapling OCSP stapling configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param HTTP2Parameters $HTTP2 HTTP/2 configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param QUICParameters $QUIC QUIC access configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param UpstreamHTTP2Parameters $UpstreamHTTP2 HTTP2 origin-pull configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param IPv6Parameters $IPv6 IPv6 access configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param WebSocketParameters $WebSocket WebSocket configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param PostMaxSizeParameters $PostMaxSize POST request transport configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param ClientIPHeaderParameters $ClientIPHeader Client ip origin-pull request header configuration.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param ClientIPCountryParameters $ClientIPCountry Whether to carry the region information of the client ip during origin-pull.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param GrpcParameters $Grpc Configuration of grpc support.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param AccelerateMainlandParameters $AccelerateMainland Accelerate optimization and configuration in mainland china.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param StandardDebugParameters $StandardDebug Standard debugging configuration.
.
Note: this field may return null, which indicates a failure to obtain a valid value.
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
