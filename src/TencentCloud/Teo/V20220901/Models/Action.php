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
 * @method NormalAction getNormalAction() Obtain Common feature operations. the options for this category include:.
<Li>Access url rewrite (`accessurlredirect`).</li>.
<Li> origin url overriding (upstreamurlredirect);</li>.
<Li> quic;</li>.
<Li> websocket;</li>.
<Li> video dragging (videoseek);</li>.
<Li> token authentication (authentication);</li>.
<Li> custom cachekey (cachekey);</li>.
<Li> node caching ttl (cache);</li>.
<Li> browser cache ttl (maxage);</li>.
<Li> offline caching (offlinecache);</li>.
<Li> smart acceleration (smartrouting);</li>.
<Li> range-based origin pull (rangeoriginpull);</li>.
<Li> http/2 origin pull (upstreamhttp2);</li>.
<Li> host header overriding (hostheader);</li>.
<Li> force https (forceredirect);</li>.
<Li> https origin pull (originpullprotocol);</li>.
<Li>`ResponseSpeedLimit`: single connection download speed limit.</li>.
<Li>`CachePrefresh`: cache prefresh.</li>.
<Li>`Compression`: smart compression.</li>.
<Li>Hsts;</Li>.
<Li>ClientIpHeader;</Li>.
<Li> ssltlssecureconf;</li>.
<Li> ocspstapling;</li>.
<Li> http/2 access (http2);</li>.
<Li> redirection during origin pull (upstreamfollowredirect);</li>.
<Li> modifying origin server (origin);</li>.
<Li> layer 7 origin pull timeout (httpupstreamtimeout).</li>.
<Li> http response (httpresponse).</li>.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setNormalAction(NormalAction $NormalAction) Set Common feature operations. the options for this category include:.
<Li>Access url rewrite (`accessurlredirect`).</li>.
<Li> origin url overriding (upstreamurlredirect);</li>.
<Li> quic;</li>.
<Li> websocket;</li>.
<Li> video dragging (videoseek);</li>.
<Li> token authentication (authentication);</li>.
<Li> custom cachekey (cachekey);</li>.
<Li> node caching ttl (cache);</li>.
<Li> browser cache ttl (maxage);</li>.
<Li> offline caching (offlinecache);</li>.
<Li> smart acceleration (smartrouting);</li>.
<Li> range-based origin pull (rangeoriginpull);</li>.
<Li> http/2 origin pull (upstreamhttp2);</li>.
<Li> host header overriding (hostheader);</li>.
<Li> force https (forceredirect);</li>.
<Li> https origin pull (originpullprotocol);</li>.
<Li>`ResponseSpeedLimit`: single connection download speed limit.</li>.
<Li>`CachePrefresh`: cache prefresh.</li>.
<Li>`Compression`: smart compression.</li>.
<Li>Hsts;</Li>.
<Li>ClientIpHeader;</Li>.
<Li> ssltlssecureconf;</li>.
<Li> ocspstapling;</li>.
<Li> http/2 access (http2);</li>.
<Li> redirection during origin pull (upstreamfollowredirect);</li>.
<Li> modifying origin server (origin);</li>.
<Li> layer 7 origin pull timeout (httpupstreamtimeout).</li>.
<Li> http response (httpresponse).</li>.
Note: this field may return null, which indicates a failure to obtain a valid value.
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
     * @var NormalAction Common feature operations. the options for this category include:.
<Li>Access url rewrite (`accessurlredirect`).</li>.
<Li> origin url overriding (upstreamurlredirect);</li>.
<Li> quic;</li>.
<Li> websocket;</li>.
<Li> video dragging (videoseek);</li>.
<Li> token authentication (authentication);</li>.
<Li> custom cachekey (cachekey);</li>.
<Li> node caching ttl (cache);</li>.
<Li> browser cache ttl (maxage);</li>.
<Li> offline caching (offlinecache);</li>.
<Li> smart acceleration (smartrouting);</li>.
<Li> range-based origin pull (rangeoriginpull);</li>.
<Li> http/2 origin pull (upstreamhttp2);</li>.
<Li> host header overriding (hostheader);</li>.
<Li> force https (forceredirect);</li>.
<Li> https origin pull (originpullprotocol);</li>.
<Li>`ResponseSpeedLimit`: single connection download speed limit.</li>.
<Li>`CachePrefresh`: cache prefresh.</li>.
<Li>`Compression`: smart compression.</li>.
<Li>Hsts;</Li>.
<Li>ClientIpHeader;</Li>.
<Li> ssltlssecureconf;</li>.
<Li> ocspstapling;</li>.
<Li> http/2 access (http2);</li>.
<Li> redirection during origin pull (upstreamfollowredirect);</li>.
<Li> modifying origin server (origin);</li>.
<Li> layer 7 origin pull timeout (httpupstreamtimeout).</li>.
<Li> http response (httpresponse).</li>.
Note: this field may return null, which indicates a failure to obtain a valid value.
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
     * @param NormalAction $NormalAction Common feature operations. the options for this category include:.
<Li>Access url rewrite (`accessurlredirect`).</li>.
<Li> origin url overriding (upstreamurlredirect);</li>.
<Li> quic;</li>.
<Li> websocket;</li>.
<Li> video dragging (videoseek);</li>.
<Li> token authentication (authentication);</li>.
<Li> custom cachekey (cachekey);</li>.
<Li> node caching ttl (cache);</li>.
<Li> browser cache ttl (maxage);</li>.
<Li> offline caching (offlinecache);</li>.
<Li> smart acceleration (smartrouting);</li>.
<Li> range-based origin pull (rangeoriginpull);</li>.
<Li> http/2 origin pull (upstreamhttp2);</li>.
<Li> host header overriding (hostheader);</li>.
<Li> force https (forceredirect);</li>.
<Li> https origin pull (originpullprotocol);</li>.
<Li>`ResponseSpeedLimit`: single connection download speed limit.</li>.
<Li>`CachePrefresh`: cache prefresh.</li>.
<Li>`Compression`: smart compression.</li>.
<Li>Hsts;</Li>.
<Li>ClientIpHeader;</Li>.
<Li> ssltlssecureconf;</li>.
<Li> ocspstapling;</li>.
<Li> http/2 access (http2);</li>.
<Li> redirection during origin pull (upstreamfollowredirect);</li>.
<Li> modifying origin server (origin);</li>.
<Li> layer 7 origin pull timeout (httpupstreamtimeout).</li>.
<Li> http response (httpresponse).</li>.
Note: this field may return null, which indicates a failure to obtain a valid value.
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
