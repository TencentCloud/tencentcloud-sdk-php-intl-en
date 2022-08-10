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
 * ModifyZoneSetting request structure.
 *
 * @method string getZoneId() Obtain ID of the site to be modified
 * @method void setZoneId(string $ZoneId) Set ID of the site to be modified
 * @method CacheConfig getCache() Obtain Cache expiration time
 * @method void setCache(CacheConfig $Cache) Set Cache expiration time
 * @method CacheKey getCacheKey() Obtain Node cache key
 * @method void setCacheKey(CacheKey $CacheKey) Set Node cache key
 * @method MaxAge getMaxAge() Obtain Browser cache configuration
 * @method void setMaxAge(MaxAge $MaxAge) Set Browser cache configuration
 * @method OfflineCache getOfflineCache() Obtain Offline cache
 * @method void setOfflineCache(OfflineCache $OfflineCache) Set Offline cache
 * @method Quic getQuic() Obtain QUIC access
 * @method void setQuic(Quic $Quic) Set QUIC access
 * @method PostMaxSize getPostMaxSize() Obtain Maximum size of files transferred over POST request
 * @method void setPostMaxSize(PostMaxSize $PostMaxSize) Set Maximum size of files transferred over POST request
 * @method Compression getCompression() Obtain Smart compression configuration
 * @method void setCompression(Compression $Compression) Set Smart compression configuration
 * @method UpstreamHttp2 getUpstreamHttp2() Obtain HTTP2 origin-pull configuration
 * @method void setUpstreamHttp2(UpstreamHttp2 $UpstreamHttp2) Set HTTP2 origin-pull configuration
 * @method ForceRedirect getForceRedirect() Obtain Force HTTPS redirect configuration
 * @method void setForceRedirect(ForceRedirect $ForceRedirect) Set Force HTTPS redirect configuration
 * @method Https getHttps() Obtain HTTPS acceleration configuration
 * @method void setHttps(Https $Https) Set HTTPS acceleration configuration
 * @method Origin getOrigin() Obtain Origin server configuration
 * @method void setOrigin(Origin $Origin) Set Origin server configuration
 * @method SmartRouting getSmartRouting() Obtain Smart acceleration configuration
 * @method void setSmartRouting(SmartRouting $SmartRouting) Set Smart acceleration configuration
 * @method WebSocket getWebSocket() Obtain WebSocket configuration
 * @method void setWebSocket(WebSocket $WebSocket) Set WebSocket configuration
 * @method ClientIp getClientIpHeader() Obtain Origin-pull client IP header configuration
 * @method void setClientIpHeader(ClientIp $ClientIpHeader) Set Origin-pull client IP header configuration
 * @method CachePrefresh getCachePrefresh() Obtain Cache prefresh configuration
 * @method void setCachePrefresh(CachePrefresh $CachePrefresh) Set Cache prefresh configuration
 */
class ModifyZoneSettingRequest extends AbstractModel
{
    /**
     * @var string ID of the site to be modified
     */
    public $ZoneId;

    /**
     * @var CacheConfig Cache expiration time
     */
    public $Cache;

    /**
     * @var CacheKey Node cache key
     */
    public $CacheKey;

    /**
     * @var MaxAge Browser cache configuration
     */
    public $MaxAge;

    /**
     * @var OfflineCache Offline cache
     */
    public $OfflineCache;

    /**
     * @var Quic QUIC access
     */
    public $Quic;

    /**
     * @var PostMaxSize Maximum size of files transferred over POST request
     */
    public $PostMaxSize;

    /**
     * @var Compression Smart compression configuration
     */
    public $Compression;

    /**
     * @var UpstreamHttp2 HTTP2 origin-pull configuration
     */
    public $UpstreamHttp2;

    /**
     * @var ForceRedirect Force HTTPS redirect configuration
     */
    public $ForceRedirect;

    /**
     * @var Https HTTPS acceleration configuration
     */
    public $Https;

    /**
     * @var Origin Origin server configuration
     */
    public $Origin;

    /**
     * @var SmartRouting Smart acceleration configuration
     */
    public $SmartRouting;

    /**
     * @var WebSocket WebSocket configuration
     */
    public $WebSocket;

    /**
     * @var ClientIp Origin-pull client IP header configuration
     */
    public $ClientIpHeader;

    /**
     * @var CachePrefresh Cache prefresh configuration
     */
    public $CachePrefresh;

    /**
     * @param string $ZoneId ID of the site to be modified
     * @param CacheConfig $Cache Cache expiration time
     * @param CacheKey $CacheKey Node cache key
     * @param MaxAge $MaxAge Browser cache configuration
     * @param OfflineCache $OfflineCache Offline cache
     * @param Quic $Quic QUIC access
     * @param PostMaxSize $PostMaxSize Maximum size of files transferred over POST request
     * @param Compression $Compression Smart compression configuration
     * @param UpstreamHttp2 $UpstreamHttp2 HTTP2 origin-pull configuration
     * @param ForceRedirect $ForceRedirect Force HTTPS redirect configuration
     * @param Https $Https HTTPS acceleration configuration
     * @param Origin $Origin Origin server configuration
     * @param SmartRouting $SmartRouting Smart acceleration configuration
     * @param WebSocket $WebSocket WebSocket configuration
     * @param ClientIp $ClientIpHeader Origin-pull client IP header configuration
     * @param CachePrefresh $CachePrefresh Cache prefresh configuration
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
    }
}
