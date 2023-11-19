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
 * @method NormalAction getNormalAction() Obtain Common operation. Values:
<li>`AccessUrlRedirect`: Access URL rewrite</li>
<li>`UpstreamUrlRedirect`: Origin-pull URL rewrite</li>
<li>`QUIC`: QUIC</li>
<li>`WebSocket`: WebSocket</li>
<li>`VideoSeek`: Video dragging</li>
<li>`Authentication`: Token authentication</li>
<li>`CacheKey`: Custom cache key</li>
<li>`Cache`: Node cache TTL</li>
<li>`MaxAge`: Browser cache TTL</li>
<li>`OfflineCache`: Offline cache</li>
<li>`SmartRouting`: Smart acceleration</li>
<li>`RangeOriginPull`: Range GETs</li>
<li>`UpstreamHttp2`: HTTP/2 forwarding</li>
<li>`HostHeader`: Host header rewrite</li>
<li>`ForceRedirect`: Force HTTPS</li>
<li>`OriginPullProtocol`: Origin-pull HTTPS</li>
<li>`CachePrefresh`: Cache prefresh</li>
<li>`Compression`: Smart compression</li>
<li>`Hsts`</li>
<li>`ClientIpHeader`</li>
<li>`SslTlsSecureConf`</li>
<li>`OcspStapling`</li>
<li>`Http2`: HTTP/2 access</li>
<li>`UpstreamFollowRedirect`: Follow origin redirect</li>
<li>`Origin`: Origin</li>
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setNormalAction(NormalAction $NormalAction) Set Common operation. Values:
<li>`AccessUrlRedirect`: Access URL rewrite</li>
<li>`UpstreamUrlRedirect`: Origin-pull URL rewrite</li>
<li>`QUIC`: QUIC</li>
<li>`WebSocket`: WebSocket</li>
<li>`VideoSeek`: Video dragging</li>
<li>`Authentication`: Token authentication</li>
<li>`CacheKey`: Custom cache key</li>
<li>`Cache`: Node cache TTL</li>
<li>`MaxAge`: Browser cache TTL</li>
<li>`OfflineCache`: Offline cache</li>
<li>`SmartRouting`: Smart acceleration</li>
<li>`RangeOriginPull`: Range GETs</li>
<li>`UpstreamHttp2`: HTTP/2 forwarding</li>
<li>`HostHeader`: Host header rewrite</li>
<li>`ForceRedirect`: Force HTTPS</li>
<li>`OriginPullProtocol`: Origin-pull HTTPS</li>
<li>`CachePrefresh`: Cache prefresh</li>
<li>`Compression`: Smart compression</li>
<li>`Hsts`</li>
<li>`ClientIpHeader`</li>
<li>`SslTlsSecureConf`</li>
<li>`OcspStapling`</li>
<li>`Http2`: HTTP/2 access</li>
<li>`UpstreamFollowRedirect`: Follow origin redirect</li>
<li>`Origin`: Origin</li>
Note: This field may return `null`, indicating that no valid value can be obtained.
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
     * @var NormalAction Common operation. Values:
<li>`AccessUrlRedirect`: Access URL rewrite</li>
<li>`UpstreamUrlRedirect`: Origin-pull URL rewrite</li>
<li>`QUIC`: QUIC</li>
<li>`WebSocket`: WebSocket</li>
<li>`VideoSeek`: Video dragging</li>
<li>`Authentication`: Token authentication</li>
<li>`CacheKey`: Custom cache key</li>
<li>`Cache`: Node cache TTL</li>
<li>`MaxAge`: Browser cache TTL</li>
<li>`OfflineCache`: Offline cache</li>
<li>`SmartRouting`: Smart acceleration</li>
<li>`RangeOriginPull`: Range GETs</li>
<li>`UpstreamHttp2`: HTTP/2 forwarding</li>
<li>`HostHeader`: Host header rewrite</li>
<li>`ForceRedirect`: Force HTTPS</li>
<li>`OriginPullProtocol`: Origin-pull HTTPS</li>
<li>`CachePrefresh`: Cache prefresh</li>
<li>`Compression`: Smart compression</li>
<li>`Hsts`</li>
<li>`ClientIpHeader`</li>
<li>`SslTlsSecureConf`</li>
<li>`OcspStapling`</li>
<li>`Http2`: HTTP/2 access</li>
<li>`UpstreamFollowRedirect`: Follow origin redirect</li>
<li>`Origin`: Origin</li>
Note: This field may return `null`, indicating that no valid value can be obtained.
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
     * @param NormalAction $NormalAction Common operation. Values:
<li>`AccessUrlRedirect`: Access URL rewrite</li>
<li>`UpstreamUrlRedirect`: Origin-pull URL rewrite</li>
<li>`QUIC`: QUIC</li>
<li>`WebSocket`: WebSocket</li>
<li>`VideoSeek`: Video dragging</li>
<li>`Authentication`: Token authentication</li>
<li>`CacheKey`: Custom cache key</li>
<li>`Cache`: Node cache TTL</li>
<li>`MaxAge`: Browser cache TTL</li>
<li>`OfflineCache`: Offline cache</li>
<li>`SmartRouting`: Smart acceleration</li>
<li>`RangeOriginPull`: Range GETs</li>
<li>`UpstreamHttp2`: HTTP/2 forwarding</li>
<li>`HostHeader`: Host header rewrite</li>
<li>`ForceRedirect`: Force HTTPS</li>
<li>`OriginPullProtocol`: Origin-pull HTTPS</li>
<li>`CachePrefresh`: Cache prefresh</li>
<li>`Compression`: Smart compression</li>
<li>`Hsts`</li>
<li>`ClientIpHeader`</li>
<li>`SslTlsSecureConf`</li>
<li>`OcspStapling`</li>
<li>`Http2`: HTTP/2 access</li>
<li>`UpstreamFollowRedirect`: Follow origin redirect</li>
<li>`Origin`: Origin</li>
Note: This field may return `null`, indicating that no valid value can be obtained.
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
