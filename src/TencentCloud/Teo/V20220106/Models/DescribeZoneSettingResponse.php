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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeZoneSetting response structure.
 *
 * @method CacheConfig getCache() Obtain Cache expiration time configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCache(CacheConfig $Cache) Set Cache expiration time configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method CacheKey getCacheKey() Obtain Node cache key configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCacheKey(CacheKey $CacheKey) Set Node cache key configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method MaxAge getMaxAge() Obtain Browser cache configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setMaxAge(MaxAge $MaxAge) Set Browser cache configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method OfflineCache getOfflineCache() Obtain Offline cache
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setOfflineCache(OfflineCache $OfflineCache) Set Offline cache
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method Quic getQuic() Obtain QUIC access
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setQuic(Quic $Quic) Set QUIC access
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method PostMaxSize getPostMaxSize() Obtain POST transport configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setPostMaxSize(PostMaxSize $PostMaxSize) Set POST transport configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method Compression getCompression() Obtain Smart compression configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCompression(Compression $Compression) Set Smart compression configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method UpstreamHttp2 getUpstreamHttp2() Obtain HTTP2 origin-pull configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setUpstreamHttp2(UpstreamHttp2 $UpstreamHttp2) Set HTTP2 origin-pull configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method ForceRedirect getForceRedirect() Obtain Force HTTPS redirect configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setForceRedirect(ForceRedirect $ForceRedirect) Set Force HTTPS redirect configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method Https getHttps() Obtain HTTPS acceleration configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setHttps(Https $Https) Set HTTPS acceleration configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method Origin getOrigin() Obtain Origin server configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setOrigin(Origin $Origin) Set Origin server configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method SmartRouting getSmartRouting() Obtain Dynamic acceleration configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setSmartRouting(SmartRouting $SmartRouting) Set Dynamic acceleration configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getZoneId() Obtain Site ID
 * @method void setZoneId(string $ZoneId) Set Site ID
 * @method string getZone() Obtain Domain name of the site
 * @method void setZone(string $Zone) Set Domain name of the site
 * @method WebSocket getWebSocket() Obtain WebSocket configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setWebSocket(WebSocket $WebSocket) Set WebSocket configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method ClientIp getClientIpHeader() Obtain Origin-pull client IP header configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setClientIpHeader(ClientIp $ClientIpHeader) Set Origin-pull client IP header configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method CachePrefresh getCachePrefresh() Obtain Cache prefresh configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCachePrefresh(CachePrefresh $CachePrefresh) Set Cache prefresh configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeZoneSettingResponse extends AbstractModel
{
    /**
     * @var CacheConfig Cache expiration time configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Cache;

    /**
     * @var CacheKey Node cache key configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $CacheKey;

    /**
     * @var MaxAge Browser cache configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $MaxAge;

    /**
     * @var OfflineCache Offline cache
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $OfflineCache;

    /**
     * @var Quic QUIC access
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Quic;

    /**
     * @var PostMaxSize POST transport configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $PostMaxSize;

    /**
     * @var Compression Smart compression configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Compression;

    /**
     * @var UpstreamHttp2 HTTP2 origin-pull configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $UpstreamHttp2;

    /**
     * @var ForceRedirect Force HTTPS redirect configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ForceRedirect;

    /**
     * @var Https HTTPS acceleration configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Https;

    /**
     * @var Origin Origin server configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Origin;

    /**
     * @var SmartRouting Dynamic acceleration configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $SmartRouting;

    /**
     * @var string Site ID
     */
    public $ZoneId;

    /**
     * @var string Domain name of the site
     */
    public $Zone;

    /**
     * @var WebSocket WebSocket configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $WebSocket;

    /**
     * @var ClientIp Origin-pull client IP header configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ClientIpHeader;

    /**
     * @var CachePrefresh Cache prefresh configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $CachePrefresh;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param CacheConfig $Cache Cache expiration time configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param CacheKey $CacheKey Node cache key configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param MaxAge $MaxAge Browser cache configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param OfflineCache $OfflineCache Offline cache
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param Quic $Quic QUIC access
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param PostMaxSize $PostMaxSize POST transport configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param Compression $Compression Smart compression configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param UpstreamHttp2 $UpstreamHttp2 HTTP2 origin-pull configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param ForceRedirect $ForceRedirect Force HTTPS redirect configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param Https $Https HTTPS acceleration configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param Origin $Origin Origin server configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param SmartRouting $SmartRouting Dynamic acceleration configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $ZoneId Site ID
     * @param string $Zone Domain name of the site
     * @param WebSocket $WebSocket WebSocket configuration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param ClientIp $ClientIpHeader Origin-pull client IP header configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param CachePrefresh $CachePrefresh Cache prefresh configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("Cache",$param) and $param["Cache"] !== null) {
            $this->Cache = new CacheConfig();
            $this->Cache->deserialize($param["Cache"]);
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

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("WebSocket",$param) and $param["WebSocket"] !== null) {
            $this->WebSocket = new WebSocket();
            $this->WebSocket->deserialize($param["WebSocket"]);
        }

        if (array_key_exists("ClientIpHeader",$param) and $param["ClientIpHeader"] !== null) {
            $this->ClientIpHeader = new ClientIp();
            $this->ClientIpHeader->deserialize($param["ClientIpHeader"]);
        }

        if (array_key_exists("CachePrefresh",$param) and $param["CachePrefresh"] !== null) {
            $this->CachePrefresh = new CachePrefresh();
            $this->CachePrefresh->deserialize($param["CachePrefresh"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
