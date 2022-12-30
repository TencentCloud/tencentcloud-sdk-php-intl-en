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
 * ModifyZoneSetting request structure.
 *
 * @method string getZoneId() Obtain The site ID to be modified.
 * @method void setZoneId(string $ZoneId) Set The site ID to be modified.
 * @method CacheConfig getCacheConfig() Obtain Cache expiration time configuration
The original configuration will apply if this field is not specified.
 * @method void setCacheConfig(CacheConfig $CacheConfig) Set Cache expiration time configuration
The original configuration will apply if this field is not specified.
 * @method CacheKey getCacheKey() Obtain The node cache key configuration.
The original configuration will apply if this field is not specified.
 * @method void setCacheKey(CacheKey $CacheKey) Set The node cache key configuration.
The original configuration will apply if this field is not specified.
 * @method MaxAge getMaxAge() Obtain The browser cache configuration.
The original configuration will apply if this field is not specified.
 * @method void setMaxAge(MaxAge $MaxAge) Set The browser cache configuration.
The original configuration will apply if this field is not specified.
 * @method OfflineCache getOfflineCache() Obtain The offline cache configuration.
The original configuration will apply if this field is not specified.
 * @method void setOfflineCache(OfflineCache $OfflineCache) Set The offline cache configuration.
The original configuration will apply if this field is not specified.
 * @method Quic getQuic() Obtain The QUIC access configuration.
The original configuration will apply if this field is not specified.
 * @method void setQuic(Quic $Quic) Set The QUIC access configuration.
The original configuration will apply if this field is not specified.
 * @method PostMaxSize getPostMaxSize() Obtain The POST transport configuration.
The original configuration will apply if this field is not specified.
 * @method void setPostMaxSize(PostMaxSize $PostMaxSize) Set The POST transport configuration.
The original configuration will apply if this field is not specified.
 * @method Compression getCompression() Obtain The smart compression configuration.
The original configuration will apply if this field is not specified.
 * @method void setCompression(Compression $Compression) Set The smart compression configuration.
The original configuration will apply if this field is not specified.
 * @method UpstreamHttp2 getUpstreamHttp2() Obtain The HTTP2 origin-pull configuration.
The original configuration will apply if this field is not specified.
 * @method void setUpstreamHttp2(UpstreamHttp2 $UpstreamHttp2) Set The HTTP2 origin-pull configuration.
The original configuration will apply if this field is not specified.
 * @method ForceRedirect getForceRedirect() Obtain The force HTTPS redirect configuration.
The original configuration will apply if this field is not specified.
 * @method void setForceRedirect(ForceRedirect $ForceRedirect) Set The force HTTPS redirect configuration.
The original configuration will apply if this field is not specified.
 * @method Https getHttps() Obtain The HTTPS acceleration configuration.
The original configuration will apply if this field is not specified.
 * @method void setHttps(Https $Https) Set The HTTPS acceleration configuration.
The original configuration will apply if this field is not specified.
 * @method Origin getOrigin() Obtain The origin server configuration.
The original configuration will apply if this field is not specified.
 * @method void setOrigin(Origin $Origin) Set The origin server configuration.
The original configuration will apply if this field is not specified.
 * @method SmartRouting getSmartRouting() Obtain The smart acceleration configuration.
The original configuration will apply if this field is not specified.
 * @method void setSmartRouting(SmartRouting $SmartRouting) Set The smart acceleration configuration.
The original configuration will apply if this field is not specified.
 * @method WebSocket getWebSocket() Obtain The WebSocket configuration.
The original configuration will apply if this field is not specified.
 * @method void setWebSocket(WebSocket $WebSocket) Set The WebSocket configuration.
The original configuration will apply if this field is not specified.
 * @method ClientIpHeader getClientIpHeader() Obtain The origin-pull client IP header configuration.
The original configuration will apply if this field is not specified.
 * @method void setClientIpHeader(ClientIpHeader $ClientIpHeader) Set The origin-pull client IP header configuration.
The original configuration will apply if this field is not specified.
 * @method CachePrefresh getCachePrefresh() Obtain The cache prefresh configuration.
The original configuration will apply if this field is not specified.
 * @method void setCachePrefresh(CachePrefresh $CachePrefresh) Set The cache prefresh configuration.
The original configuration will apply if this field is not specified.
 * @method Ipv6 getIpv6() Obtain The IPv6 access configuration.
The original configuration will apply if this field is not specified.
 * @method void setIpv6(Ipv6 $Ipv6) Set The IPv6 access configuration.
The original configuration will apply if this field is not specified.
 * @method ClientIpCountry getClientIpCountry() Obtain Whether to carry the location information of the client IP during origin-pull.
The original configuration will apply if this field is not specified.
 * @method void setClientIpCountry(ClientIpCountry $ClientIpCountry) Set Whether to carry the location information of the client IP during origin-pull.
The original configuration will apply if this field is not specified.
 * @method Grpc getGrpc() Obtain Configuration of gRPC support
The original configuration will apply if this field is not specified.
 * @method void setGrpc(Grpc $Grpc) Set Configuration of gRPC support
The original configuration will apply if this field is not specified.
 */
class ModifyZoneSettingRequest extends AbstractModel
{
    /**
     * @var string The site ID to be modified.
     */
    public $ZoneId;

    /**
     * @var CacheConfig Cache expiration time configuration
The original configuration will apply if this field is not specified.
     */
    public $CacheConfig;

    /**
     * @var CacheKey The node cache key configuration.
The original configuration will apply if this field is not specified.
     */
    public $CacheKey;

    /**
     * @var MaxAge The browser cache configuration.
The original configuration will apply if this field is not specified.
     */
    public $MaxAge;

    /**
     * @var OfflineCache The offline cache configuration.
The original configuration will apply if this field is not specified.
     */
    public $OfflineCache;

    /**
     * @var Quic The QUIC access configuration.
The original configuration will apply if this field is not specified.
     */
    public $Quic;

    /**
     * @var PostMaxSize The POST transport configuration.
The original configuration will apply if this field is not specified.
     */
    public $PostMaxSize;

    /**
     * @var Compression The smart compression configuration.
The original configuration will apply if this field is not specified.
     */
    public $Compression;

    /**
     * @var UpstreamHttp2 The HTTP2 origin-pull configuration.
The original configuration will apply if this field is not specified.
     */
    public $UpstreamHttp2;

    /**
     * @var ForceRedirect The force HTTPS redirect configuration.
The original configuration will apply if this field is not specified.
     */
    public $ForceRedirect;

    /**
     * @var Https The HTTPS acceleration configuration.
The original configuration will apply if this field is not specified.
     */
    public $Https;

    /**
     * @var Origin The origin server configuration.
The original configuration will apply if this field is not specified.
     */
    public $Origin;

    /**
     * @var SmartRouting The smart acceleration configuration.
The original configuration will apply if this field is not specified.
     */
    public $SmartRouting;

    /**
     * @var WebSocket The WebSocket configuration.
The original configuration will apply if this field is not specified.
     */
    public $WebSocket;

    /**
     * @var ClientIpHeader The origin-pull client IP header configuration.
The original configuration will apply if this field is not specified.
     */
    public $ClientIpHeader;

    /**
     * @var CachePrefresh The cache prefresh configuration.
The original configuration will apply if this field is not specified.
     */
    public $CachePrefresh;

    /**
     * @var Ipv6 The IPv6 access configuration.
The original configuration will apply if this field is not specified.
     */
    public $Ipv6;

    /**
     * @var ClientIpCountry Whether to carry the location information of the client IP during origin-pull.
The original configuration will apply if this field is not specified.
     */
    public $ClientIpCountry;

    /**
     * @var Grpc Configuration of gRPC support
The original configuration will apply if this field is not specified.
     */
    public $Grpc;

    /**
     * @param string $ZoneId The site ID to be modified.
     * @param CacheConfig $CacheConfig Cache expiration time configuration
The original configuration will apply if this field is not specified.
     * @param CacheKey $CacheKey The node cache key configuration.
The original configuration will apply if this field is not specified.
     * @param MaxAge $MaxAge The browser cache configuration.
The original configuration will apply if this field is not specified.
     * @param OfflineCache $OfflineCache The offline cache configuration.
The original configuration will apply if this field is not specified.
     * @param Quic $Quic The QUIC access configuration.
The original configuration will apply if this field is not specified.
     * @param PostMaxSize $PostMaxSize The POST transport configuration.
The original configuration will apply if this field is not specified.
     * @param Compression $Compression The smart compression configuration.
The original configuration will apply if this field is not specified.
     * @param UpstreamHttp2 $UpstreamHttp2 The HTTP2 origin-pull configuration.
The original configuration will apply if this field is not specified.
     * @param ForceRedirect $ForceRedirect The force HTTPS redirect configuration.
The original configuration will apply if this field is not specified.
     * @param Https $Https The HTTPS acceleration configuration.
The original configuration will apply if this field is not specified.
     * @param Origin $Origin The origin server configuration.
The original configuration will apply if this field is not specified.
     * @param SmartRouting $SmartRouting The smart acceleration configuration.
The original configuration will apply if this field is not specified.
     * @param WebSocket $WebSocket The WebSocket configuration.
The original configuration will apply if this field is not specified.
     * @param ClientIpHeader $ClientIpHeader The origin-pull client IP header configuration.
The original configuration will apply if this field is not specified.
     * @param CachePrefresh $CachePrefresh The cache prefresh configuration.
The original configuration will apply if this field is not specified.
     * @param Ipv6 $Ipv6 The IPv6 access configuration.
The original configuration will apply if this field is not specified.
     * @param ClientIpCountry $ClientIpCountry Whether to carry the location information of the client IP during origin-pull.
The original configuration will apply if this field is not specified.
     * @param Grpc $Grpc Configuration of gRPC support
The original configuration will apply if this field is not specified.
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
    }
}
