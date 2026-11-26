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
 * Rule engine feature item operations. For a feature, it corresponds to only one of the following three types. Each item in the RuleAction array can only be one of these types. For more feature item completion specifications, call the API to query the rule engine parameter settings (https://www.tencentcloud.com/document/product/1552/80618?from_cn_redirect=1).
 *
 * @method NormalAction getNormalAction() Obtain Normal feature operation. Feature items of this type:
<li> Access URL rewrite (AccessUrlRedirect);</li>
<li> Origin-pull URL rewrite (UpstreamUrlRedirect);</li>
<li> QUIC(QUIC);</li>
<li> WebSocket (WebSocket);</li>
<li> Video dragging (VideoSeek);</li>
<li> Token authentication (Authentication);</li>
<li> Custom CacheKey (CacheKey);</li>
<li> Node cache TTL (Cache);</li>
<li> Browser caching TTL (MaxAge);</li>
<li> Offline caching (OfflineCache);</li>
<li> Smart acceleration (SmartRouting);</li>
<li> Range-based origin pull (RangeOriginPull);</li>
<li> HTTP/2 origin pull (UpstreamHttp2);</li>
<li> Host header overriding (HostHeader);</li>
<li> Force HTTPS (ForceRedirect);</li>
<li> HTTPS origin pull (OriginPullProtocol);</li>
<li> Single connection download speed limit (ResponseSpeedLimit);</li>
<li> Cache pre-refresh (CachePrefresh);</li>
<li> Intelligent compression (Compression);</li>
<li> Hsts;</li>
<li> ClientIpHeader;</li>
<li> SslTlsSecureConf;</li>
<li> OcspStapling;</li>
<li> HTTP/2 access (Http2);</li>
<li> Redirection during origin pull (UpstreamFollowRedirect);</li>
<li> Modifying origin server (Origin);</li>
<li> Layer 7 origin pull timeout (HTTPUpstreamTimeout).</li>
<li> HTTP response (HttpResponse).</li>
 * @method void setNormalAction(NormalAction $NormalAction) Set Normal feature operation. Feature items of this type:
<li> Access URL rewrite (AccessUrlRedirect);</li>
<li> Origin-pull URL rewrite (UpstreamUrlRedirect);</li>
<li> QUIC(QUIC);</li>
<li> WebSocket (WebSocket);</li>
<li> Video dragging (VideoSeek);</li>
<li> Token authentication (Authentication);</li>
<li> Custom CacheKey (CacheKey);</li>
<li> Node cache TTL (Cache);</li>
<li> Browser caching TTL (MaxAge);</li>
<li> Offline caching (OfflineCache);</li>
<li> Smart acceleration (SmartRouting);</li>
<li> Range-based origin pull (RangeOriginPull);</li>
<li> HTTP/2 origin pull (UpstreamHttp2);</li>
<li> Host header overriding (HostHeader);</li>
<li> Force HTTPS (ForceRedirect);</li>
<li> HTTPS origin pull (OriginPullProtocol);</li>
<li> Single connection download speed limit (ResponseSpeedLimit);</li>
<li> Cache pre-refresh (CachePrefresh);</li>
<li> Intelligent compression (Compression);</li>
<li> Hsts;</li>
<li> ClientIpHeader;</li>
<li> SslTlsSecureConf;</li>
<li> OcspStapling;</li>
<li> HTTP/2 access (Http2);</li>
<li> Redirection during origin pull (UpstreamFollowRedirect);</li>
<li> Modifying origin server (Origin);</li>
<li> Layer 7 origin pull timeout (HTTPUpstreamTimeout).</li>
<li> HTTP response (HttpResponse).</li>
 * @method RewriteAction getRewriteAction() Obtain Feature operations with request/response headers. Feature items of this type include:
<li>HTTP request header modification (RequestHeader).</li>
<li> HTTP response header modification (ResponseHeader).</li>
 * @method void setRewriteAction(RewriteAction $RewriteAction) Set Feature operations with request/response headers. Feature items of this type include:
<li>HTTP request header modification (RequestHeader).</li>
<li> HTTP response header modification (ResponseHeader).</li>
 * @method CodeAction getCodeAction() Obtain Feature operation with a status code. Feature items of this type:
<li> Custom error page (ErrorPage);</li>
<li> Status code cache TTL (StatusCodeCache).</li>
 * @method void setCodeAction(CodeAction $CodeAction) Set Feature operation with a status code. Feature items of this type:
<li> Custom error page (ErrorPage);</li>
<li> Status code cache TTL (StatusCodeCache).</li>
 */
class Action extends AbstractModel
{
    /**
     * @var NormalAction Normal feature operation. Feature items of this type:
<li> Access URL rewrite (AccessUrlRedirect);</li>
<li> Origin-pull URL rewrite (UpstreamUrlRedirect);</li>
<li> QUIC(QUIC);</li>
<li> WebSocket (WebSocket);</li>
<li> Video dragging (VideoSeek);</li>
<li> Token authentication (Authentication);</li>
<li> Custom CacheKey (CacheKey);</li>
<li> Node cache TTL (Cache);</li>
<li> Browser caching TTL (MaxAge);</li>
<li> Offline caching (OfflineCache);</li>
<li> Smart acceleration (SmartRouting);</li>
<li> Range-based origin pull (RangeOriginPull);</li>
<li> HTTP/2 origin pull (UpstreamHttp2);</li>
<li> Host header overriding (HostHeader);</li>
<li> Force HTTPS (ForceRedirect);</li>
<li> HTTPS origin pull (OriginPullProtocol);</li>
<li> Single connection download speed limit (ResponseSpeedLimit);</li>
<li> Cache pre-refresh (CachePrefresh);</li>
<li> Intelligent compression (Compression);</li>
<li> Hsts;</li>
<li> ClientIpHeader;</li>
<li> SslTlsSecureConf;</li>
<li> OcspStapling;</li>
<li> HTTP/2 access (Http2);</li>
<li> Redirection during origin pull (UpstreamFollowRedirect);</li>
<li> Modifying origin server (Origin);</li>
<li> Layer 7 origin pull timeout (HTTPUpstreamTimeout).</li>
<li> HTTP response (HttpResponse).</li>
     */
    public $NormalAction;

    /**
     * @var RewriteAction Feature operations with request/response headers. Feature items of this type include:
<li>HTTP request header modification (RequestHeader).</li>
<li> HTTP response header modification (ResponseHeader).</li>
     */
    public $RewriteAction;

    /**
     * @var CodeAction Feature operation with a status code. Feature items of this type:
<li> Custom error page (ErrorPage);</li>
<li> Status code cache TTL (StatusCodeCache).</li>
     */
    public $CodeAction;

    /**
     * @param NormalAction $NormalAction Normal feature operation. Feature items of this type:
<li> Access URL rewrite (AccessUrlRedirect);</li>
<li> Origin-pull URL rewrite (UpstreamUrlRedirect);</li>
<li> QUIC(QUIC);</li>
<li> WebSocket (WebSocket);</li>
<li> Video dragging (VideoSeek);</li>
<li> Token authentication (Authentication);</li>
<li> Custom CacheKey (CacheKey);</li>
<li> Node cache TTL (Cache);</li>
<li> Browser caching TTL (MaxAge);</li>
<li> Offline caching (OfflineCache);</li>
<li> Smart acceleration (SmartRouting);</li>
<li> Range-based origin pull (RangeOriginPull);</li>
<li> HTTP/2 origin pull (UpstreamHttp2);</li>
<li> Host header overriding (HostHeader);</li>
<li> Force HTTPS (ForceRedirect);</li>
<li> HTTPS origin pull (OriginPullProtocol);</li>
<li> Single connection download speed limit (ResponseSpeedLimit);</li>
<li> Cache pre-refresh (CachePrefresh);</li>
<li> Intelligent compression (Compression);</li>
<li> Hsts;</li>
<li> ClientIpHeader;</li>
<li> SslTlsSecureConf;</li>
<li> OcspStapling;</li>
<li> HTTP/2 access (Http2);</li>
<li> Redirection during origin pull (UpstreamFollowRedirect);</li>
<li> Modifying origin server (Origin);</li>
<li> Layer 7 origin pull timeout (HTTPUpstreamTimeout).</li>
<li> HTTP response (HttpResponse).</li>
     * @param RewriteAction $RewriteAction Feature operations with request/response headers. Feature items of this type include:
<li>HTTP request header modification (RequestHeader).</li>
<li> HTTP response header modification (ResponseHeader).</li>
     * @param CodeAction $CodeAction Feature operation with a status code. Feature items of this type:
<li> Custom error page (ErrorPage);</li>
<li> Status code cache TTL (StatusCodeCache).</li>
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
        if (array_key_exists("NormalAction",$param) and $param["NormalAction"] !== null) {
            $this->NormalAction = new NormalAction();
            $this->NormalAction->deserialize($param["NormalAction"]);
        }

        if (array_key_exists("RewriteAction",$param) and $param["RewriteAction"] !== null) {
            $this->RewriteAction = new RewriteAction();
            $this->RewriteAction->deserialize($param["RewriteAction"]);
        }

        if (array_key_exists("CodeAction",$param) and $param["CodeAction"] !== null) {
            $this->CodeAction = new CodeAction();
            $this->CodeAction->deserialize($param["CodeAction"]);
        }
    }
}
