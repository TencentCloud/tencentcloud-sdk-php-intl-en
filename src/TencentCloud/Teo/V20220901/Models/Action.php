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
 * Rule engine action. Each feature supports only one of the following three action types. The `RuleAction` array can be of only one of the following types. For all details, see [DescribeRulesSetting](https://intl.cloud.tencent.com/document/product/1552/80618?from_cn_redirect=1).
 *
 * @method NormalAction getNormalAction() Obtain Common feature operations. The options for this category include:
<li> Access URL overriding (AccessUrlRedirect);</li>
<li> Origin URL overriding (UpstreamUrlRedirect);</li>
<li> QUIC;</li>
<li> WebSocket;</li>
<li> Video dragging (VideoSeek);</li>
<li> Token authentication (Authentication);</li>
<li> Custom CacheKey (CacheKey);</li>
<li> Node caching TTL (Cache);</li>
<li> Browser caching TTL (MaxAge);</li>
<li> Offline caching (OfflineCache);</li>
<li> Smart routing (SmartRouting);</li>
<li> Range-based origin pull (RangeOriginPull);</li>
<li> HTTP/2 origin pull (UpstreamHttp2);</li>
<li> Host header overriding (HostHeader);</li>
<li> Forced HTTPS (ForceRedirect);</li>
<li> HTTPS origin pull (OriginPullProtocol);</li>
<li> Cache pre-refresh (CachePrefresh);</li>
<li> Smart compression (Compression);</li>
<li> Hsts;</li>
<li> ClientIpHeader;</li>
<li> SslTlsSecureConf;</li>
<li> OcspStapling;</li>
<li> HTTP/2 access (Http2);</li>
<li> Redirection during origin pull (UpstreamFollowRedirect);</li>
<li> Modifying origin server (Origin);</li>
<li> Layer 7 origin pull timeout (HTTPUpstreamTimeout);</li>
<li> HTTP response (HttpResponse).</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNormalAction(NormalAction $NormalAction) Set Common feature operations. The options for this category include:
<li> Access URL overriding (AccessUrlRedirect);</li>
<li> Origin URL overriding (UpstreamUrlRedirect);</li>
<li> QUIC;</li>
<li> WebSocket;</li>
<li> Video dragging (VideoSeek);</li>
<li> Token authentication (Authentication);</li>
<li> Custom CacheKey (CacheKey);</li>
<li> Node caching TTL (Cache);</li>
<li> Browser caching TTL (MaxAge);</li>
<li> Offline caching (OfflineCache);</li>
<li> Smart routing (SmartRouting);</li>
<li> Range-based origin pull (RangeOriginPull);</li>
<li> HTTP/2 origin pull (UpstreamHttp2);</li>
<li> Host header overriding (HostHeader);</li>
<li> Forced HTTPS (ForceRedirect);</li>
<li> HTTPS origin pull (OriginPullProtocol);</li>
<li> Cache pre-refresh (CachePrefresh);</li>
<li> Smart compression (Compression);</li>
<li> Hsts;</li>
<li> ClientIpHeader;</li>
<li> SslTlsSecureConf;</li>
<li> OcspStapling;</li>
<li> HTTP/2 access (Http2);</li>
<li> Redirection during origin pull (UpstreamFollowRedirect);</li>
<li> Modifying origin server (Origin);</li>
<li> Layer 7 origin pull timeout (HTTPUpstreamTimeout);</li>
<li> HTTP response (HttpResponse).</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method RewriteAction getRewriteAction() Obtain Feature operation with a request/response header. Features of this type include:
<li>`RequestHeader`: HTTP request header modification.</li>
<li>`ResponseHeader`: HTTP response header modification.</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRewriteAction(RewriteAction $RewriteAction) Set Feature operation with a request/response header. Features of this type include:
<li>`RequestHeader`: HTTP request header modification.</li>
<li>`ResponseHeader`: HTTP response header modification.</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method CodeAction getCodeAction() Obtain Feature operation with a status code. Features of this type include:
<li>`ErrorPage`: Custom error page.</li>
<li>`StatusCodeCache`: Status code cache TTL.</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCodeAction(CodeAction $CodeAction) Set Feature operation with a status code. Features of this type include:
<li>`ErrorPage`: Custom error page.</li>
<li>`StatusCodeCache`: Status code cache TTL.</li>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Action extends AbstractModel
{
    /**
     * @var NormalAction Common feature operations. The options for this category include:
<li> Access URL overriding (AccessUrlRedirect);</li>
<li> Origin URL overriding (UpstreamUrlRedirect);</li>
<li> QUIC;</li>
<li> WebSocket;</li>
<li> Video dragging (VideoSeek);</li>
<li> Token authentication (Authentication);</li>
<li> Custom CacheKey (CacheKey);</li>
<li> Node caching TTL (Cache);</li>
<li> Browser caching TTL (MaxAge);</li>
<li> Offline caching (OfflineCache);</li>
<li> Smart routing (SmartRouting);</li>
<li> Range-based origin pull (RangeOriginPull);</li>
<li> HTTP/2 origin pull (UpstreamHttp2);</li>
<li> Host header overriding (HostHeader);</li>
<li> Forced HTTPS (ForceRedirect);</li>
<li> HTTPS origin pull (OriginPullProtocol);</li>
<li> Cache pre-refresh (CachePrefresh);</li>
<li> Smart compression (Compression);</li>
<li> Hsts;</li>
<li> ClientIpHeader;</li>
<li> SslTlsSecureConf;</li>
<li> OcspStapling;</li>
<li> HTTP/2 access (Http2);</li>
<li> Redirection during origin pull (UpstreamFollowRedirect);</li>
<li> Modifying origin server (Origin);</li>
<li> Layer 7 origin pull timeout (HTTPUpstreamTimeout);</li>
<li> HTTP response (HttpResponse).</li>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NormalAction;

    /**
     * @var RewriteAction Feature operation with a request/response header. Features of this type include:
<li>`RequestHeader`: HTTP request header modification.</li>
<li>`ResponseHeader`: HTTP response header modification.</li>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RewriteAction;

    /**
     * @var CodeAction Feature operation with a status code. Features of this type include:
<li>`ErrorPage`: Custom error page.</li>
<li>`StatusCodeCache`: Status code cache TTL.</li>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CodeAction;

    /**
     * @param NormalAction $NormalAction Common feature operations. The options for this category include:
<li> Access URL overriding (AccessUrlRedirect);</li>
<li> Origin URL overriding (UpstreamUrlRedirect);</li>
<li> QUIC;</li>
<li> WebSocket;</li>
<li> Video dragging (VideoSeek);</li>
<li> Token authentication (Authentication);</li>
<li> Custom CacheKey (CacheKey);</li>
<li> Node caching TTL (Cache);</li>
<li> Browser caching TTL (MaxAge);</li>
<li> Offline caching (OfflineCache);</li>
<li> Smart routing (SmartRouting);</li>
<li> Range-based origin pull (RangeOriginPull);</li>
<li> HTTP/2 origin pull (UpstreamHttp2);</li>
<li> Host header overriding (HostHeader);</li>
<li> Forced HTTPS (ForceRedirect);</li>
<li> HTTPS origin pull (OriginPullProtocol);</li>
<li> Cache pre-refresh (CachePrefresh);</li>
<li> Smart compression (Compression);</li>
<li> Hsts;</li>
<li> ClientIpHeader;</li>
<li> SslTlsSecureConf;</li>
<li> OcspStapling;</li>
<li> HTTP/2 access (Http2);</li>
<li> Redirection during origin pull (UpstreamFollowRedirect);</li>
<li> Modifying origin server (Origin);</li>
<li> Layer 7 origin pull timeout (HTTPUpstreamTimeout);</li>
<li> HTTP response (HttpResponse).</li>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param RewriteAction $RewriteAction Feature operation with a request/response header. Features of this type include:
<li>`RequestHeader`: HTTP request header modification.</li>
<li>`ResponseHeader`: HTTP response header modification.</li>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param CodeAction $CodeAction Feature operation with a status code. Features of this type include:
<li>`ErrorPage`: Custom error page.</li>
<li>`StatusCodeCache`: Status code cache TTL.</li>
Note: This field may return null, indicating that no valid values can be obtained.
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
