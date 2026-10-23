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
 * Rule engine operations.
 *
 * @method string getName() Obtain <p>Operation name. The name must correspond to the parameters structure. For example, if Name=Cache, then CacheParameters is required.<li>Cache: Node cache TTL;</li><li>CacheKey: Custom Cache Key;</li><li>CachePrefresh: Cache pre-refresh;</li><li>AccessURLRedirect: Access URL redirection;</li><li>UpstreamURLRewrite: Origin-pull URL rewrite;</li><li>QUIC: QUIC;</li><li>WebSocket: WebSocket;</li><li>Authentication: Token authentication;</li><li>MaxAge: Browser cache TTL;</li><li>StatusCodeCache: Status code cache TTL;</li><li>OfflineCache: Offline cache;</li><li>SmartRouting: Smart acceleration;</li><li>AdvancedOriginRouting: Advanced origin optimization;</li><li>RangeOriginPull: Range-based origin pull;</li><li>UpstreamHTTP2: HTTP2 origin-pull;</li><li>HostHeader: Host header rewrite;</li><li>ForceRedirectHTTPS: Forced HTTPS redirect configuration;</li><li>OriginPullProtocol: Origin-pull HTTPS;</li><li>Compression: Intelligent compression configuration;</li><li>HSTS: HSTS;</li><li>ClientIPHeader: Configuration for storing client IP address in the header;</li><li>OCSPStapling: OCSP stapling;</li><li>HTTP2: HTTP2 integration;</li><li>PostMaxSize: Maximum limit configuration for POST request upload file streaming transmission;</li><li>ClientIPCountry: Carrying regional information of the client IP during origin-pull;</li><li>UpstreamFollowRedirect: Upstream follow redirect parameter configuration;</li><li>UpstreamRequest: Origin-pull request parameters;</li><li>Shield: Origin server uninstallation configuration;</li><li>TLSConfig: SSL/TLS security;</li><li>ModifyOrigin: Modify origin server;</li><li>SiteFailover: Origin server fault migration;</li><li>HTTPUpstreamTimeout: Layer-7 origin-pull timeout configuration;</li><li>HttpResponse: HTTP response;</li><li>ErrorPage: Custom error page;</li><li>ModifyResponseHeader: Modify HTTP node response header;</li><li>ModifyRequestHeader: Modify HTTP node request header;</li><li>ResponseSpeedLimit: Single connection download speed limit;</li><li>SetContentIdentifier: Set content identifier;</li><li>Vary: Vary feature configuration;</li><li>ContentCompression: Content compression configuration;</li><li>OriginAuthentication: Origin-pull authentication configuration;</li><li>CustomAction: Custom configuration.</li></p>
 * @method void setName(string $Name) Set <p>Operation name. The name must correspond to the parameters structure. For example, if Name=Cache, then CacheParameters is required.<li>Cache: Node cache TTL;</li><li>CacheKey: Custom Cache Key;</li><li>CachePrefresh: Cache pre-refresh;</li><li>AccessURLRedirect: Access URL redirection;</li><li>UpstreamURLRewrite: Origin-pull URL rewrite;</li><li>QUIC: QUIC;</li><li>WebSocket: WebSocket;</li><li>Authentication: Token authentication;</li><li>MaxAge: Browser cache TTL;</li><li>StatusCodeCache: Status code cache TTL;</li><li>OfflineCache: Offline cache;</li><li>SmartRouting: Smart acceleration;</li><li>AdvancedOriginRouting: Advanced origin optimization;</li><li>RangeOriginPull: Range-based origin pull;</li><li>UpstreamHTTP2: HTTP2 origin-pull;</li><li>HostHeader: Host header rewrite;</li><li>ForceRedirectHTTPS: Forced HTTPS redirect configuration;</li><li>OriginPullProtocol: Origin-pull HTTPS;</li><li>Compression: Intelligent compression configuration;</li><li>HSTS: HSTS;</li><li>ClientIPHeader: Configuration for storing client IP address in the header;</li><li>OCSPStapling: OCSP stapling;</li><li>HTTP2: HTTP2 integration;</li><li>PostMaxSize: Maximum limit configuration for POST request upload file streaming transmission;</li><li>ClientIPCountry: Carrying regional information of the client IP during origin-pull;</li><li>UpstreamFollowRedirect: Upstream follow redirect parameter configuration;</li><li>UpstreamRequest: Origin-pull request parameters;</li><li>Shield: Origin server uninstallation configuration;</li><li>TLSConfig: SSL/TLS security;</li><li>ModifyOrigin: Modify origin server;</li><li>SiteFailover: Origin server fault migration;</li><li>HTTPUpstreamTimeout: Layer-7 origin-pull timeout configuration;</li><li>HttpResponse: HTTP response;</li><li>ErrorPage: Custom error page;</li><li>ModifyResponseHeader: Modify HTTP node response header;</li><li>ModifyRequestHeader: Modify HTTP node request header;</li><li>ResponseSpeedLimit: Single connection download speed limit;</li><li>SetContentIdentifier: Set content identifier;</li><li>Vary: Vary feature configuration;</li><li>ContentCompression: Content compression configuration;</li><li>OriginAuthentication: Origin-pull authentication configuration;</li><li>CustomAction: Custom configuration.</li></p>
 * @method CacheParameters getCacheParameters() Obtain <p>Node cache TTL configuration parameter. This parameter is required when the Name value is Cache.</p>
 * @method void setCacheParameters(CacheParameters $CacheParameters) Set <p>Node cache TTL configuration parameter. This parameter is required when the Name value is Cache.</p>
 * @method CacheKeyParameters getCacheKeyParameters() Obtain <p>Custom Cache Key configuration parameter. When Name value is CacheKey, this parameter is required.
 * @method void setCacheKeyParameters(CacheKeyParameters $CacheKeyParameters) Set <p>Custom Cache Key configuration parameter. When Name value is CacheKey, this parameter is required.
 * @method CachePrefreshParameters getCachePrefreshParameters() Obtain <p>Cache pre-refresh configuration parameter. This parameter is required when the Name value is CachePrefresh.</p>
 * @method void setCachePrefreshParameters(CachePrefreshParameters $CachePrefreshParameters) Set <p>Cache pre-refresh configuration parameter. This parameter is required when the Name value is CachePrefresh.</p>
 * @method AccessURLRedirectParameters getAccessURLRedirectParameters() Obtain <p>Access URL redirection configuration parameter. This parameter is required when the Name value is AccessURLRedirect.</p>
 * @method void setAccessURLRedirectParameters(AccessURLRedirectParameters $AccessURLRedirectParameters) Set <p>Access URL redirection configuration parameter. This parameter is required when the Name value is AccessURLRedirect.</p>
 * @method UpstreamURLRewriteParameters getUpstreamURLRewriteParameters() Obtain <p>Origin-pull URL rewrite configuration parameter. This parameter is required when the value of Name is UpstreamURLRewrite.</p>
 * @method void setUpstreamURLRewriteParameters(UpstreamURLRewriteParameters $UpstreamURLRewriteParameters) Set <p>Origin-pull URL rewrite configuration parameter. This parameter is required when the value of Name is UpstreamURLRewrite.</p>
 * @method QUICParameters getQUICParameters() Obtain <p>QUIC configuration parameter. This parameter is required when the Name value is QUIC.</p>
 * @method void setQUICParameters(QUICParameters $QUICParameters) Set <p>QUIC configuration parameter. This parameter is required when the Name value is QUIC.</p>
 * @method WebSocketParameters getWebSocketParameters() Obtain <p>WebSocket configuration parameter. This parameter is required when the Name value is WebSocket.</p>
 * @method void setWebSocketParameters(WebSocketParameters $WebSocketParameters) Set <p>WebSocket configuration parameter. This parameter is required when the Name value is WebSocket.</p>
 * @method AuthenticationParameters getAuthenticationParameters() Obtain <p>Token authentication configuration parameter. This parameter is required when the Name value is Authentication.</p>
 * @method void setAuthenticationParameters(AuthenticationParameters $AuthenticationParameters) Set <p>Token authentication configuration parameter. This parameter is required when the Name value is Authentication.</p>
 * @method MaxAgeParameters getMaxAgeParameters() Obtain <p>Browser cache TTL configuration parameter. This parameter is required when the value of Name is MaxAge.</p>
 * @method void setMaxAgeParameters(MaxAgeParameters $MaxAgeParameters) Set <p>Browser cache TTL configuration parameter. This parameter is required when the value of Name is MaxAge.</p>
 * @method StatusCodeCacheParameters getStatusCodeCacheParameters() Obtain <p>Status code cache TTL configuration parameter. This parameter is required when the Name value is StatusCodeCache.</p>
 * @method void setStatusCodeCacheParameters(StatusCodeCacheParameters $StatusCodeCacheParameters) Set <p>Status code cache TTL configuration parameter. This parameter is required when the Name value is StatusCodeCache.</p>
 * @method OfflineCacheParameters getOfflineCacheParameters() Obtain <p>Offline cache configuration parameter. This parameter is required when the Name value is OfflineCache.</p>
 * @method void setOfflineCacheParameters(OfflineCacheParameters $OfflineCacheParameters) Set <p>Offline cache configuration parameter. This parameter is required when the Name value is OfflineCache.</p>
 * @method SmartRoutingParameters getSmartRoutingParameters() Obtain <p>Smart acceleration configuration parameter. This parameter is required when the Name value is SmartRouting.</p>
 * @method void setSmartRoutingParameters(SmartRoutingParameters $SmartRoutingParameters) Set <p>Smart acceleration configuration parameter. This parameter is required when the Name value is SmartRouting.</p>
 * @method AdvancedOriginRoutingParameters getAdvancedOriginRoutingParameters() Obtain <p>Advanced origin optimization configuration parameter. This parameter is required when the Name value is AdvancedOriginRouting.</p>
 * @method void setAdvancedOriginRoutingParameters(AdvancedOriginRoutingParameters $AdvancedOriginRoutingParameters) Set <p>Advanced origin optimization configuration parameter. This parameter is required when the Name value is AdvancedOriginRouting.</p>
 * @method RangeOriginPullParameters getRangeOriginPullParameters() Obtain <p>Configuration parameter for range-based origin pull. This parameter is required when the value of Name is RangeOriginPull.</p>
 * @method void setRangeOriginPullParameters(RangeOriginPullParameters $RangeOriginPullParameters) Set <p>Configuration parameter for range-based origin pull. This parameter is required when the value of Name is RangeOriginPull.</p>
 * @method UpstreamHTTP2Parameters getUpstreamHTTP2Parameters() Obtain <p>HTTP2 origin configuration parameter. This parameter is required when the Name value is UpstreamHTTP2.</p>
 * @method void setUpstreamHTTP2Parameters(UpstreamHTTP2Parameters $UpstreamHTTP2Parameters) Set <p>HTTP2 origin configuration parameter. This parameter is required when the Name value is UpstreamHTTP2.</p>
 * @method HostHeaderParameters getHostHeaderParameters() Obtain <p>Host header rewrite configuration parameter. When the Name value is HostHeader, this parameter is required.</p>
 * @method void setHostHeaderParameters(HostHeaderParameters $HostHeaderParameters) Set <p>Host header rewrite configuration parameter. When the Name value is HostHeader, this parameter is required.</p>
 * @method ForceRedirectHTTPSParameters getForceRedirectHTTPSParameters() Obtain <p>Forced HTTPS redirect configuration for the access protocol. This parameter is required when the Name value is ForceRedirectHTTPS.</p>
 * @method void setForceRedirectHTTPSParameters(ForceRedirectHTTPSParameters $ForceRedirectHTTPSParameters) Set <p>Forced HTTPS redirect configuration for the access protocol. This parameter is required when the Name value is ForceRedirectHTTPS.</p>
 * @method OriginPullProtocolParameters getOriginPullProtocolParameters() Obtain <p>Origin HTTPS configuration parameter. This parameter is required when the Name value is OriginPullProtocol.</p>
 * @method void setOriginPullProtocolParameters(OriginPullProtocolParameters $OriginPullProtocolParameters) Set <p>Origin HTTPS configuration parameter. This parameter is required when the Name value is OriginPullProtocol.</p>
 * @method CompressionParameters getCompressionParameters() Obtain <p>Intelligent compression configuration. This parameter is required when the Name value is Compression.</p>
 * @method void setCompressionParameters(CompressionParameters $CompressionParameters) Set <p>Intelligent compression configuration. This parameter is required when the Name value is Compression.</p>
 * @method HSTSParameters getHSTSParameters() Obtain <p>HSTS configuration parameter. When the Name value is HSTS, this parameter is required.</p>
 * @method void setHSTSParameters(HSTSParameters $HSTSParameters) Set <p>HSTS configuration parameter. When the Name value is HSTS, this parameter is required.</p>
 * @method ClientIPHeaderParameters getClientIPHeaderParameters() Obtain <p>Configuration header information for storing client request IP. When the Name value is ClientIPHeader, this parameter is required.</p>
 * @method void setClientIPHeaderParameters(ClientIPHeaderParameters $ClientIPHeaderParameters) Set <p>Configuration header information for storing client request IP. When the Name value is ClientIPHeader, this parameter is required.</p>
 * @method OCSPStaplingParameters getOCSPStaplingParameters() Obtain <p>OCSP stapling configuration parameter. This parameter is required when Name value is OCSPStapling.</p>
 * @method void setOCSPStaplingParameters(OCSPStaplingParameters $OCSPStaplingParameters) Set <p>OCSP stapling configuration parameter. This parameter is required when Name value is OCSPStapling.</p>
 * @method HTTP2Parameters getHTTP2Parameters() Obtain <p>HTTP2 integration configuration parameter. This parameter is required when the Name value is HTTP2.</p>
 * @method void setHTTP2Parameters(HTTP2Parameters $HTTP2Parameters) Set <p>HTTP2 integration configuration parameter. This parameter is required when the Name value is HTTP2.</p>
 * @method PostMaxSizeParameters getPostMaxSizeParameters() Obtain <p>Maximum limit configuration for file streaming transmission in POST request upload. When the Name value is PostMaxSize, this parameter is required.</p>
 * @method void setPostMaxSizeParameters(PostMaxSizeParameters $PostMaxSizeParameters) Set <p>Maximum limit configuration for file streaming transmission in POST request upload. When the Name value is PostMaxSize, this parameter is required.</p>
 * @method ClientIPCountryParameters getClientIPCountryParameters() Obtain <p>Configuration parameter for carrying client IP regional information during origin pull. When the Name value is ClientIPCountry, this parameter is required.</p>
 * @method void setClientIPCountryParameters(ClientIPCountryParameters $ClientIPCountryParameters) Set <p>Configuration parameter for carrying client IP regional information during origin pull. When the Name value is ClientIPCountry, this parameter is required.</p>
 * @method UpstreamFollowRedirectParameters getUpstreamFollowRedirectParameters() Obtain <p>Origin-pull follow redirect parameter configuration. This parameter is required when the Name value is UpstreamFollowRedirect.</p>
 * @method void setUpstreamFollowRedirectParameters(UpstreamFollowRedirectParameters $UpstreamFollowRedirectParameters) Set <p>Origin-pull follow redirect parameter configuration. This parameter is required when the Name value is UpstreamFollowRedirect.</p>
 * @method UpstreamRequestParameters getUpstreamRequestParameters() Obtain <p>Origin-pull request parameter configuration parameter. This parameter is required when the Name value is UpstreamRequest.</p>
 * @method void setUpstreamRequestParameters(UpstreamRequestParameters $UpstreamRequestParameters) Set <p>Origin-pull request parameter configuration parameter. This parameter is required when the Name value is UpstreamRequest.</p>
 * @method ShieldParameters getShieldParameters() Obtain <p>Origin server uninstallation configuration parameter. This parameter is required when the Name value is Shield.</p>
 * @method void setShieldParameters(ShieldParameters $ShieldParameters) Set <p>Origin server uninstallation configuration parameter. This parameter is required when the Name value is Shield.</p>
 * @method TLSConfigParameters getTLSConfigParameters() Obtain <p>SSL/TLS security configuration parameter. This parameter is required when the Name value is TLSConfig.</p>
 * @method void setTLSConfigParameters(TLSConfigParameters $TLSConfigParameters) Set <p>SSL/TLS security configuration parameter. This parameter is required when the Name value is TLSConfig.</p>
 * @method ModifyOriginParameters getModifyOriginParameters() Obtain <p>Modify origin server configuration parameter. When the Name value is ModifyOrigin, this parameter is required.</p>
 * @method void setModifyOriginParameters(ModifyOriginParameters $ModifyOriginParameters) Set <p>Modify origin server configuration parameter. When the Name value is ModifyOrigin, this parameter is required.</p>
 * @method SiteFailoverParameters getSiteFailoverParameters() Obtain <p>Source site fault migration config. When the Name value is SiteFailover, this parameter is required.</p>
 * @method void setSiteFailoverParameters(SiteFailoverParameters $SiteFailoverParameters) Set <p>Source site fault migration config. When the Name value is SiteFailover, this parameter is required.</p>
 * @method HTTPUpstreamTimeoutParameters getHTTPUpstreamTimeoutParameters() Obtain <p>Layer 7 origin pull timeout configuration. This parameter is required when the Name value is HTTPUpstreamTimeout.</p>
 * @method void setHTTPUpstreamTimeoutParameters(HTTPUpstreamTimeoutParameters $HTTPUpstreamTimeoutParameters) Set <p>Layer 7 origin pull timeout configuration. This parameter is required when the Name value is HTTPUpstreamTimeout.</p>
 * @method HTTPResponseParameters getHttpResponseParameters() Obtain <p>HTTP response configuration parameter. This parameter is required when the Name value is HttpResponse.</p>
 * @method void setHttpResponseParameters(HTTPResponseParameters $HttpResponseParameters) Set <p>HTTP response configuration parameter. This parameter is required when the Name value is HttpResponse.</p>
 * @method ErrorPageParameters getErrorPageParameters() Obtain <p>Custom error page configuration parameter. This parameter is required when the value of Name is ErrorPage.</p>
 * @method void setErrorPageParameters(ErrorPageParameters $ErrorPageParameters) Set <p>Custom error page configuration parameter. This parameter is required when the value of Name is ErrorPage.</p>
 * @method ModifyResponseHeaderParameters getModifyResponseHeaderParameters() Obtain <p>Modify the HTTP node response header configuration parameter. This parameter is required when the Name value is ModifyResponseHeader.</p>
 * @method void setModifyResponseHeaderParameters(ModifyResponseHeaderParameters $ModifyResponseHeaderParameters) Set <p>Modify the HTTP node response header configuration parameter. This parameter is required when the Name value is ModifyResponseHeader.</p>
 * @method ModifyRequestHeaderParameters getModifyRequestHeaderParameters() Obtain <p>Modify the request header configuration parameter of the HTTP node. This parameter is required when the Name value is ModifyRequestHeader.</p>
 * @method void setModifyRequestHeaderParameters(ModifyRequestHeaderParameters $ModifyRequestHeaderParameters) Set <p>Modify the request header configuration parameter of the HTTP node. This parameter is required when the Name value is ModifyRequestHeader.</p>
 * @method ResponseSpeedLimitParameters getResponseSpeedLimitParameters() Obtain <p>Single connection download speed limit configuration parameter. This parameter is required when the Name value is ResponseSpeedLimit.</p>
 * @method void setResponseSpeedLimitParameters(ResponseSpeedLimitParameters $ResponseSpeedLimitParameters) Set <p>Single connection download speed limit configuration parameter. This parameter is required when the Name value is ResponseSpeedLimit.</p>
 * @method SetContentIdentifierParameters getSetContentIdentifierParameters() Obtain <p>Content identification configuration parameter. This parameter is required when the Name value is SetContentIdentifier.</p>
 * @method void setSetContentIdentifierParameters(SetContentIdentifierParameters $SetContentIdentifierParameters) Set <p>Content identification configuration parameter. This parameter is required when the Name value is SetContentIdentifier.</p>
 * @method VaryParameters getVaryParameters() Obtain <p>Vary feature configuration parameter. This parameter is required when the Name value is Vary.</p>
 * @method void setVaryParameters(VaryParameters $VaryParameters) Set <p>Vary feature configuration parameter. This parameter is required when the Name value is Vary.</p>
 * @method ContentCompressionParameters getContentCompressionParameters() Obtain <p>Content compression configuration parameter. When the Name value is ContentCompression, this parameter is required. This parameter is an allowlist feature. If needed, contact Tencent Cloud Engineers.</p>
 * @method void setContentCompressionParameters(ContentCompressionParameters $ContentCompressionParameters) Set <p>Content compression configuration parameter. When the Name value is ContentCompression, this parameter is required. This parameter is an allowlist feature. If needed, contact Tencent Cloud Engineers.</p>
 * @method OriginAuthenticationParameters getOriginAuthenticationParameters() Obtain <p>Origin authentication configuration parameter. This parameter is required when Name value is OriginAuthentication. This parameter is an allowlist feature. If needed, contact Tencent Cloud Engineers.</p>
 * @method void setOriginAuthenticationParameters(OriginAuthenticationParameters $OriginAuthenticationParameters) Set <p>Origin authentication configuration parameter. This parameter is required when Name value is OriginAuthentication. This parameter is an allowlist feature. If needed, contact Tencent Cloud Engineers.</p>
 * @method CustomActionParameters getCustomActionParameters() Obtain <p>Custom configuration operation parameter. This parameter is required when the Name value is CustomAction.</p><p>You can obtain the list of currently supported custom configuration items through the CustomActionSet returned value of the DescribeAvailableCustomActionsForRuleEngine API.</p>
 * @method void setCustomActionParameters(CustomActionParameters $CustomActionParameters) Set <p>Custom configuration operation parameter. This parameter is required when the Name value is CustomAction.</p><p>You can obtain the list of currently supported custom configuration items through the CustomActionSet returned value of the DescribeAvailableCustomActionsForRuleEngine API.</p>
 */
class RuleEngineAction extends AbstractModel
{
    /**
     * @var string <p>Operation name. The name must correspond to the parameters structure. For example, if Name=Cache, then CacheParameters is required.<li>Cache: Node cache TTL;</li><li>CacheKey: Custom Cache Key;</li><li>CachePrefresh: Cache pre-refresh;</li><li>AccessURLRedirect: Access URL redirection;</li><li>UpstreamURLRewrite: Origin-pull URL rewrite;</li><li>QUIC: QUIC;</li><li>WebSocket: WebSocket;</li><li>Authentication: Token authentication;</li><li>MaxAge: Browser cache TTL;</li><li>StatusCodeCache: Status code cache TTL;</li><li>OfflineCache: Offline cache;</li><li>SmartRouting: Smart acceleration;</li><li>AdvancedOriginRouting: Advanced origin optimization;</li><li>RangeOriginPull: Range-based origin pull;</li><li>UpstreamHTTP2: HTTP2 origin-pull;</li><li>HostHeader: Host header rewrite;</li><li>ForceRedirectHTTPS: Forced HTTPS redirect configuration;</li><li>OriginPullProtocol: Origin-pull HTTPS;</li><li>Compression: Intelligent compression configuration;</li><li>HSTS: HSTS;</li><li>ClientIPHeader: Configuration for storing client IP address in the header;</li><li>OCSPStapling: OCSP stapling;</li><li>HTTP2: HTTP2 integration;</li><li>PostMaxSize: Maximum limit configuration for POST request upload file streaming transmission;</li><li>ClientIPCountry: Carrying regional information of the client IP during origin-pull;</li><li>UpstreamFollowRedirect: Upstream follow redirect parameter configuration;</li><li>UpstreamRequest: Origin-pull request parameters;</li><li>Shield: Origin server uninstallation configuration;</li><li>TLSConfig: SSL/TLS security;</li><li>ModifyOrigin: Modify origin server;</li><li>SiteFailover: Origin server fault migration;</li><li>HTTPUpstreamTimeout: Layer-7 origin-pull timeout configuration;</li><li>HttpResponse: HTTP response;</li><li>ErrorPage: Custom error page;</li><li>ModifyResponseHeader: Modify HTTP node response header;</li><li>ModifyRequestHeader: Modify HTTP node request header;</li><li>ResponseSpeedLimit: Single connection download speed limit;</li><li>SetContentIdentifier: Set content identifier;</li><li>Vary: Vary feature configuration;</li><li>ContentCompression: Content compression configuration;</li><li>OriginAuthentication: Origin-pull authentication configuration;</li><li>CustomAction: Custom configuration.</li></p>
     */
    public $Name;

    /**
     * @var CacheParameters <p>Node cache TTL configuration parameter. This parameter is required when the Name value is Cache.</p>
     */
    public $CacheParameters;

    /**
     * @var CacheKeyParameters <p>Custom Cache Key configuration parameter. When Name value is CacheKey, this parameter is required.
     */
    public $CacheKeyParameters;

    /**
     * @var CachePrefreshParameters <p>Cache pre-refresh configuration parameter. This parameter is required when the Name value is CachePrefresh.</p>
     */
    public $CachePrefreshParameters;

    /**
     * @var AccessURLRedirectParameters <p>Access URL redirection configuration parameter. This parameter is required when the Name value is AccessURLRedirect.</p>
     */
    public $AccessURLRedirectParameters;

    /**
     * @var UpstreamURLRewriteParameters <p>Origin-pull URL rewrite configuration parameter. This parameter is required when the value of Name is UpstreamURLRewrite.</p>
     */
    public $UpstreamURLRewriteParameters;

    /**
     * @var QUICParameters <p>QUIC configuration parameter. This parameter is required when the Name value is QUIC.</p>
     */
    public $QUICParameters;

    /**
     * @var WebSocketParameters <p>WebSocket configuration parameter. This parameter is required when the Name value is WebSocket.</p>
     */
    public $WebSocketParameters;

    /**
     * @var AuthenticationParameters <p>Token authentication configuration parameter. This parameter is required when the Name value is Authentication.</p>
     */
    public $AuthenticationParameters;

    /**
     * @var MaxAgeParameters <p>Browser cache TTL configuration parameter. This parameter is required when the value of Name is MaxAge.</p>
     */
    public $MaxAgeParameters;

    /**
     * @var StatusCodeCacheParameters <p>Status code cache TTL configuration parameter. This parameter is required when the Name value is StatusCodeCache.</p>
     */
    public $StatusCodeCacheParameters;

    /**
     * @var OfflineCacheParameters <p>Offline cache configuration parameter. This parameter is required when the Name value is OfflineCache.</p>
     */
    public $OfflineCacheParameters;

    /**
     * @var SmartRoutingParameters <p>Smart acceleration configuration parameter. This parameter is required when the Name value is SmartRouting.</p>
     */
    public $SmartRoutingParameters;

    /**
     * @var AdvancedOriginRoutingParameters <p>Advanced origin optimization configuration parameter. This parameter is required when the Name value is AdvancedOriginRouting.</p>
     */
    public $AdvancedOriginRoutingParameters;

    /**
     * @var RangeOriginPullParameters <p>Configuration parameter for range-based origin pull. This parameter is required when the value of Name is RangeOriginPull.</p>
     */
    public $RangeOriginPullParameters;

    /**
     * @var UpstreamHTTP2Parameters <p>HTTP2 origin configuration parameter. This parameter is required when the Name value is UpstreamHTTP2.</p>
     */
    public $UpstreamHTTP2Parameters;

    /**
     * @var HostHeaderParameters <p>Host header rewrite configuration parameter. When the Name value is HostHeader, this parameter is required.</p>
     */
    public $HostHeaderParameters;

    /**
     * @var ForceRedirectHTTPSParameters <p>Forced HTTPS redirect configuration for the access protocol. This parameter is required when the Name value is ForceRedirectHTTPS.</p>
     */
    public $ForceRedirectHTTPSParameters;

    /**
     * @var OriginPullProtocolParameters <p>Origin HTTPS configuration parameter. This parameter is required when the Name value is OriginPullProtocol.</p>
     */
    public $OriginPullProtocolParameters;

    /**
     * @var CompressionParameters <p>Intelligent compression configuration. This parameter is required when the Name value is Compression.</p>
     */
    public $CompressionParameters;

    /**
     * @var HSTSParameters <p>HSTS configuration parameter. When the Name value is HSTS, this parameter is required.</p>
     */
    public $HSTSParameters;

    /**
     * @var ClientIPHeaderParameters <p>Configuration header information for storing client request IP. When the Name value is ClientIPHeader, this parameter is required.</p>
     */
    public $ClientIPHeaderParameters;

    /**
     * @var OCSPStaplingParameters <p>OCSP stapling configuration parameter. This parameter is required when Name value is OCSPStapling.</p>
     */
    public $OCSPStaplingParameters;

    /**
     * @var HTTP2Parameters <p>HTTP2 integration configuration parameter. This parameter is required when the Name value is HTTP2.</p>
     */
    public $HTTP2Parameters;

    /**
     * @var PostMaxSizeParameters <p>Maximum limit configuration for file streaming transmission in POST request upload. When the Name value is PostMaxSize, this parameter is required.</p>
     */
    public $PostMaxSizeParameters;

    /**
     * @var ClientIPCountryParameters <p>Configuration parameter for carrying client IP regional information during origin pull. When the Name value is ClientIPCountry, this parameter is required.</p>
     */
    public $ClientIPCountryParameters;

    /**
     * @var UpstreamFollowRedirectParameters <p>Origin-pull follow redirect parameter configuration. This parameter is required when the Name value is UpstreamFollowRedirect.</p>
     */
    public $UpstreamFollowRedirectParameters;

    /**
     * @var UpstreamRequestParameters <p>Origin-pull request parameter configuration parameter. This parameter is required when the Name value is UpstreamRequest.</p>
     */
    public $UpstreamRequestParameters;

    /**
     * @var ShieldParameters <p>Origin server uninstallation configuration parameter. This parameter is required when the Name value is Shield.</p>
     */
    public $ShieldParameters;

    /**
     * @var TLSConfigParameters <p>SSL/TLS security configuration parameter. This parameter is required when the Name value is TLSConfig.</p>
     */
    public $TLSConfigParameters;

    /**
     * @var ModifyOriginParameters <p>Modify origin server configuration parameter. When the Name value is ModifyOrigin, this parameter is required.</p>
     */
    public $ModifyOriginParameters;

    /**
     * @var SiteFailoverParameters <p>Source site fault migration config. When the Name value is SiteFailover, this parameter is required.</p>
     */
    public $SiteFailoverParameters;

    /**
     * @var HTTPUpstreamTimeoutParameters <p>Layer 7 origin pull timeout configuration. This parameter is required when the Name value is HTTPUpstreamTimeout.</p>
     */
    public $HTTPUpstreamTimeoutParameters;

    /**
     * @var HTTPResponseParameters <p>HTTP response configuration parameter. This parameter is required when the Name value is HttpResponse.</p>
     */
    public $HttpResponseParameters;

    /**
     * @var ErrorPageParameters <p>Custom error page configuration parameter. This parameter is required when the value of Name is ErrorPage.</p>
     */
    public $ErrorPageParameters;

    /**
     * @var ModifyResponseHeaderParameters <p>Modify the HTTP node response header configuration parameter. This parameter is required when the Name value is ModifyResponseHeader.</p>
     */
    public $ModifyResponseHeaderParameters;

    /**
     * @var ModifyRequestHeaderParameters <p>Modify the request header configuration parameter of the HTTP node. This parameter is required when the Name value is ModifyRequestHeader.</p>
     */
    public $ModifyRequestHeaderParameters;

    /**
     * @var ResponseSpeedLimitParameters <p>Single connection download speed limit configuration parameter. This parameter is required when the Name value is ResponseSpeedLimit.</p>
     */
    public $ResponseSpeedLimitParameters;

    /**
     * @var SetContentIdentifierParameters <p>Content identification configuration parameter. This parameter is required when the Name value is SetContentIdentifier.</p>
     */
    public $SetContentIdentifierParameters;

    /**
     * @var VaryParameters <p>Vary feature configuration parameter. This parameter is required when the Name value is Vary.</p>
     */
    public $VaryParameters;

    /**
     * @var ContentCompressionParameters <p>Content compression configuration parameter. When the Name value is ContentCompression, this parameter is required. This parameter is an allowlist feature. If needed, contact Tencent Cloud Engineers.</p>
     */
    public $ContentCompressionParameters;

    /**
     * @var OriginAuthenticationParameters <p>Origin authentication configuration parameter. This parameter is required when Name value is OriginAuthentication. This parameter is an allowlist feature. If needed, contact Tencent Cloud Engineers.</p>
     */
    public $OriginAuthenticationParameters;

    /**
     * @var CustomActionParameters <p>Custom configuration operation parameter. This parameter is required when the Name value is CustomAction.</p><p>You can obtain the list of currently supported custom configuration items through the CustomActionSet returned value of the DescribeAvailableCustomActionsForRuleEngine API.</p>
     */
    public $CustomActionParameters;

    /**
     * @param string $Name <p>Operation name. The name must correspond to the parameters structure. For example, if Name=Cache, then CacheParameters is required.<li>Cache: Node cache TTL;</li><li>CacheKey: Custom Cache Key;</li><li>CachePrefresh: Cache pre-refresh;</li><li>AccessURLRedirect: Access URL redirection;</li><li>UpstreamURLRewrite: Origin-pull URL rewrite;</li><li>QUIC: QUIC;</li><li>WebSocket: WebSocket;</li><li>Authentication: Token authentication;</li><li>MaxAge: Browser cache TTL;</li><li>StatusCodeCache: Status code cache TTL;</li><li>OfflineCache: Offline cache;</li><li>SmartRouting: Smart acceleration;</li><li>AdvancedOriginRouting: Advanced origin optimization;</li><li>RangeOriginPull: Range-based origin pull;</li><li>UpstreamHTTP2: HTTP2 origin-pull;</li><li>HostHeader: Host header rewrite;</li><li>ForceRedirectHTTPS: Forced HTTPS redirect configuration;</li><li>OriginPullProtocol: Origin-pull HTTPS;</li><li>Compression: Intelligent compression configuration;</li><li>HSTS: HSTS;</li><li>ClientIPHeader: Configuration for storing client IP address in the header;</li><li>OCSPStapling: OCSP stapling;</li><li>HTTP2: HTTP2 integration;</li><li>PostMaxSize: Maximum limit configuration for POST request upload file streaming transmission;</li><li>ClientIPCountry: Carrying regional information of the client IP during origin-pull;</li><li>UpstreamFollowRedirect: Upstream follow redirect parameter configuration;</li><li>UpstreamRequest: Origin-pull request parameters;</li><li>Shield: Origin server uninstallation configuration;</li><li>TLSConfig: SSL/TLS security;</li><li>ModifyOrigin: Modify origin server;</li><li>SiteFailover: Origin server fault migration;</li><li>HTTPUpstreamTimeout: Layer-7 origin-pull timeout configuration;</li><li>HttpResponse: HTTP response;</li><li>ErrorPage: Custom error page;</li><li>ModifyResponseHeader: Modify HTTP node response header;</li><li>ModifyRequestHeader: Modify HTTP node request header;</li><li>ResponseSpeedLimit: Single connection download speed limit;</li><li>SetContentIdentifier: Set content identifier;</li><li>Vary: Vary feature configuration;</li><li>ContentCompression: Content compression configuration;</li><li>OriginAuthentication: Origin-pull authentication configuration;</li><li>CustomAction: Custom configuration.</li></p>
     * @param CacheParameters $CacheParameters <p>Node cache TTL configuration parameter. This parameter is required when the Name value is Cache.</p>
     * @param CacheKeyParameters $CacheKeyParameters <p>Custom Cache Key configuration parameter. When Name value is CacheKey, this parameter is required.
     * @param CachePrefreshParameters $CachePrefreshParameters <p>Cache pre-refresh configuration parameter. This parameter is required when the Name value is CachePrefresh.</p>
     * @param AccessURLRedirectParameters $AccessURLRedirectParameters <p>Access URL redirection configuration parameter. This parameter is required when the Name value is AccessURLRedirect.</p>
     * @param UpstreamURLRewriteParameters $UpstreamURLRewriteParameters <p>Origin-pull URL rewrite configuration parameter. This parameter is required when the value of Name is UpstreamURLRewrite.</p>
     * @param QUICParameters $QUICParameters <p>QUIC configuration parameter. This parameter is required when the Name value is QUIC.</p>
     * @param WebSocketParameters $WebSocketParameters <p>WebSocket configuration parameter. This parameter is required when the Name value is WebSocket.</p>
     * @param AuthenticationParameters $AuthenticationParameters <p>Token authentication configuration parameter. This parameter is required when the Name value is Authentication.</p>
     * @param MaxAgeParameters $MaxAgeParameters <p>Browser cache TTL configuration parameter. This parameter is required when the value of Name is MaxAge.</p>
     * @param StatusCodeCacheParameters $StatusCodeCacheParameters <p>Status code cache TTL configuration parameter. This parameter is required when the Name value is StatusCodeCache.</p>
     * @param OfflineCacheParameters $OfflineCacheParameters <p>Offline cache configuration parameter. This parameter is required when the Name value is OfflineCache.</p>
     * @param SmartRoutingParameters $SmartRoutingParameters <p>Smart acceleration configuration parameter. This parameter is required when the Name value is SmartRouting.</p>
     * @param AdvancedOriginRoutingParameters $AdvancedOriginRoutingParameters <p>Advanced origin optimization configuration parameter. This parameter is required when the Name value is AdvancedOriginRouting.</p>
     * @param RangeOriginPullParameters $RangeOriginPullParameters <p>Configuration parameter for range-based origin pull. This parameter is required when the value of Name is RangeOriginPull.</p>
     * @param UpstreamHTTP2Parameters $UpstreamHTTP2Parameters <p>HTTP2 origin configuration parameter. This parameter is required when the Name value is UpstreamHTTP2.</p>
     * @param HostHeaderParameters $HostHeaderParameters <p>Host header rewrite configuration parameter. When the Name value is HostHeader, this parameter is required.</p>
     * @param ForceRedirectHTTPSParameters $ForceRedirectHTTPSParameters <p>Forced HTTPS redirect configuration for the access protocol. This parameter is required when the Name value is ForceRedirectHTTPS.</p>
     * @param OriginPullProtocolParameters $OriginPullProtocolParameters <p>Origin HTTPS configuration parameter. This parameter is required when the Name value is OriginPullProtocol.</p>
     * @param CompressionParameters $CompressionParameters <p>Intelligent compression configuration. This parameter is required when the Name value is Compression.</p>
     * @param HSTSParameters $HSTSParameters <p>HSTS configuration parameter. When the Name value is HSTS, this parameter is required.</p>
     * @param ClientIPHeaderParameters $ClientIPHeaderParameters <p>Configuration header information for storing client request IP. When the Name value is ClientIPHeader, this parameter is required.</p>
     * @param OCSPStaplingParameters $OCSPStaplingParameters <p>OCSP stapling configuration parameter. This parameter is required when Name value is OCSPStapling.</p>
     * @param HTTP2Parameters $HTTP2Parameters <p>HTTP2 integration configuration parameter. This parameter is required when the Name value is HTTP2.</p>
     * @param PostMaxSizeParameters $PostMaxSizeParameters <p>Maximum limit configuration for file streaming transmission in POST request upload. When the Name value is PostMaxSize, this parameter is required.</p>
     * @param ClientIPCountryParameters $ClientIPCountryParameters <p>Configuration parameter for carrying client IP regional information during origin pull. When the Name value is ClientIPCountry, this parameter is required.</p>
     * @param UpstreamFollowRedirectParameters $UpstreamFollowRedirectParameters <p>Origin-pull follow redirect parameter configuration. This parameter is required when the Name value is UpstreamFollowRedirect.</p>
     * @param UpstreamRequestParameters $UpstreamRequestParameters <p>Origin-pull request parameter configuration parameter. This parameter is required when the Name value is UpstreamRequest.</p>
     * @param ShieldParameters $ShieldParameters <p>Origin server uninstallation configuration parameter. This parameter is required when the Name value is Shield.</p>
     * @param TLSConfigParameters $TLSConfigParameters <p>SSL/TLS security configuration parameter. This parameter is required when the Name value is TLSConfig.</p>
     * @param ModifyOriginParameters $ModifyOriginParameters <p>Modify origin server configuration parameter. When the Name value is ModifyOrigin, this parameter is required.</p>
     * @param SiteFailoverParameters $SiteFailoverParameters <p>Source site fault migration config. When the Name value is SiteFailover, this parameter is required.</p>
     * @param HTTPUpstreamTimeoutParameters $HTTPUpstreamTimeoutParameters <p>Layer 7 origin pull timeout configuration. This parameter is required when the Name value is HTTPUpstreamTimeout.</p>
     * @param HTTPResponseParameters $HttpResponseParameters <p>HTTP response configuration parameter. This parameter is required when the Name value is HttpResponse.</p>
     * @param ErrorPageParameters $ErrorPageParameters <p>Custom error page configuration parameter. This parameter is required when the value of Name is ErrorPage.</p>
     * @param ModifyResponseHeaderParameters $ModifyResponseHeaderParameters <p>Modify the HTTP node response header configuration parameter. This parameter is required when the Name value is ModifyResponseHeader.</p>
     * @param ModifyRequestHeaderParameters $ModifyRequestHeaderParameters <p>Modify the request header configuration parameter of the HTTP node. This parameter is required when the Name value is ModifyRequestHeader.</p>
     * @param ResponseSpeedLimitParameters $ResponseSpeedLimitParameters <p>Single connection download speed limit configuration parameter. This parameter is required when the Name value is ResponseSpeedLimit.</p>
     * @param SetContentIdentifierParameters $SetContentIdentifierParameters <p>Content identification configuration parameter. This parameter is required when the Name value is SetContentIdentifier.</p>
     * @param VaryParameters $VaryParameters <p>Vary feature configuration parameter. This parameter is required when the Name value is Vary.</p>
     * @param ContentCompressionParameters $ContentCompressionParameters <p>Content compression configuration parameter. When the Name value is ContentCompression, this parameter is required. This parameter is an allowlist feature. If needed, contact Tencent Cloud Engineers.</p>
     * @param OriginAuthenticationParameters $OriginAuthenticationParameters <p>Origin authentication configuration parameter. This parameter is required when Name value is OriginAuthentication. This parameter is an allowlist feature. If needed, contact Tencent Cloud Engineers.</p>
     * @param CustomActionParameters $CustomActionParameters <p>Custom configuration operation parameter. This parameter is required when the Name value is CustomAction.</p><p>You can obtain the list of currently supported custom configuration items through the CustomActionSet returned value of the DescribeAvailableCustomActionsForRuleEngine API.</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CacheParameters",$param) and $param["CacheParameters"] !== null) {
            $this->CacheParameters = new CacheParameters();
            $this->CacheParameters->deserialize($param["CacheParameters"]);
        }

        if (array_key_exists("CacheKeyParameters",$param) and $param["CacheKeyParameters"] !== null) {
            $this->CacheKeyParameters = new CacheKeyParameters();
            $this->CacheKeyParameters->deserialize($param["CacheKeyParameters"]);
        }

        if (array_key_exists("CachePrefreshParameters",$param) and $param["CachePrefreshParameters"] !== null) {
            $this->CachePrefreshParameters = new CachePrefreshParameters();
            $this->CachePrefreshParameters->deserialize($param["CachePrefreshParameters"]);
        }

        if (array_key_exists("AccessURLRedirectParameters",$param) and $param["AccessURLRedirectParameters"] !== null) {
            $this->AccessURLRedirectParameters = new AccessURLRedirectParameters();
            $this->AccessURLRedirectParameters->deserialize($param["AccessURLRedirectParameters"]);
        }

        if (array_key_exists("UpstreamURLRewriteParameters",$param) and $param["UpstreamURLRewriteParameters"] !== null) {
            $this->UpstreamURLRewriteParameters = new UpstreamURLRewriteParameters();
            $this->UpstreamURLRewriteParameters->deserialize($param["UpstreamURLRewriteParameters"]);
        }

        if (array_key_exists("QUICParameters",$param) and $param["QUICParameters"] !== null) {
            $this->QUICParameters = new QUICParameters();
            $this->QUICParameters->deserialize($param["QUICParameters"]);
        }

        if (array_key_exists("WebSocketParameters",$param) and $param["WebSocketParameters"] !== null) {
            $this->WebSocketParameters = new WebSocketParameters();
            $this->WebSocketParameters->deserialize($param["WebSocketParameters"]);
        }

        if (array_key_exists("AuthenticationParameters",$param) and $param["AuthenticationParameters"] !== null) {
            $this->AuthenticationParameters = new AuthenticationParameters();
            $this->AuthenticationParameters->deserialize($param["AuthenticationParameters"]);
        }

        if (array_key_exists("MaxAgeParameters",$param) and $param["MaxAgeParameters"] !== null) {
            $this->MaxAgeParameters = new MaxAgeParameters();
            $this->MaxAgeParameters->deserialize($param["MaxAgeParameters"]);
        }

        if (array_key_exists("StatusCodeCacheParameters",$param) and $param["StatusCodeCacheParameters"] !== null) {
            $this->StatusCodeCacheParameters = new StatusCodeCacheParameters();
            $this->StatusCodeCacheParameters->deserialize($param["StatusCodeCacheParameters"]);
        }

        if (array_key_exists("OfflineCacheParameters",$param) and $param["OfflineCacheParameters"] !== null) {
            $this->OfflineCacheParameters = new OfflineCacheParameters();
            $this->OfflineCacheParameters->deserialize($param["OfflineCacheParameters"]);
        }

        if (array_key_exists("SmartRoutingParameters",$param) and $param["SmartRoutingParameters"] !== null) {
            $this->SmartRoutingParameters = new SmartRoutingParameters();
            $this->SmartRoutingParameters->deserialize($param["SmartRoutingParameters"]);
        }

        if (array_key_exists("AdvancedOriginRoutingParameters",$param) and $param["AdvancedOriginRoutingParameters"] !== null) {
            $this->AdvancedOriginRoutingParameters = new AdvancedOriginRoutingParameters();
            $this->AdvancedOriginRoutingParameters->deserialize($param["AdvancedOriginRoutingParameters"]);
        }

        if (array_key_exists("RangeOriginPullParameters",$param) and $param["RangeOriginPullParameters"] !== null) {
            $this->RangeOriginPullParameters = new RangeOriginPullParameters();
            $this->RangeOriginPullParameters->deserialize($param["RangeOriginPullParameters"]);
        }

        if (array_key_exists("UpstreamHTTP2Parameters",$param) and $param["UpstreamHTTP2Parameters"] !== null) {
            $this->UpstreamHTTP2Parameters = new UpstreamHTTP2Parameters();
            $this->UpstreamHTTP2Parameters->deserialize($param["UpstreamHTTP2Parameters"]);
        }

        if (array_key_exists("HostHeaderParameters",$param) and $param["HostHeaderParameters"] !== null) {
            $this->HostHeaderParameters = new HostHeaderParameters();
            $this->HostHeaderParameters->deserialize($param["HostHeaderParameters"]);
        }

        if (array_key_exists("ForceRedirectHTTPSParameters",$param) and $param["ForceRedirectHTTPSParameters"] !== null) {
            $this->ForceRedirectHTTPSParameters = new ForceRedirectHTTPSParameters();
            $this->ForceRedirectHTTPSParameters->deserialize($param["ForceRedirectHTTPSParameters"]);
        }

        if (array_key_exists("OriginPullProtocolParameters",$param) and $param["OriginPullProtocolParameters"] !== null) {
            $this->OriginPullProtocolParameters = new OriginPullProtocolParameters();
            $this->OriginPullProtocolParameters->deserialize($param["OriginPullProtocolParameters"]);
        }

        if (array_key_exists("CompressionParameters",$param) and $param["CompressionParameters"] !== null) {
            $this->CompressionParameters = new CompressionParameters();
            $this->CompressionParameters->deserialize($param["CompressionParameters"]);
        }

        if (array_key_exists("HSTSParameters",$param) and $param["HSTSParameters"] !== null) {
            $this->HSTSParameters = new HSTSParameters();
            $this->HSTSParameters->deserialize($param["HSTSParameters"]);
        }

        if (array_key_exists("ClientIPHeaderParameters",$param) and $param["ClientIPHeaderParameters"] !== null) {
            $this->ClientIPHeaderParameters = new ClientIPHeaderParameters();
            $this->ClientIPHeaderParameters->deserialize($param["ClientIPHeaderParameters"]);
        }

        if (array_key_exists("OCSPStaplingParameters",$param) and $param["OCSPStaplingParameters"] !== null) {
            $this->OCSPStaplingParameters = new OCSPStaplingParameters();
            $this->OCSPStaplingParameters->deserialize($param["OCSPStaplingParameters"]);
        }

        if (array_key_exists("HTTP2Parameters",$param) and $param["HTTP2Parameters"] !== null) {
            $this->HTTP2Parameters = new HTTP2Parameters();
            $this->HTTP2Parameters->deserialize($param["HTTP2Parameters"]);
        }

        if (array_key_exists("PostMaxSizeParameters",$param) and $param["PostMaxSizeParameters"] !== null) {
            $this->PostMaxSizeParameters = new PostMaxSizeParameters();
            $this->PostMaxSizeParameters->deserialize($param["PostMaxSizeParameters"]);
        }

        if (array_key_exists("ClientIPCountryParameters",$param) and $param["ClientIPCountryParameters"] !== null) {
            $this->ClientIPCountryParameters = new ClientIPCountryParameters();
            $this->ClientIPCountryParameters->deserialize($param["ClientIPCountryParameters"]);
        }

        if (array_key_exists("UpstreamFollowRedirectParameters",$param) and $param["UpstreamFollowRedirectParameters"] !== null) {
            $this->UpstreamFollowRedirectParameters = new UpstreamFollowRedirectParameters();
            $this->UpstreamFollowRedirectParameters->deserialize($param["UpstreamFollowRedirectParameters"]);
        }

        if (array_key_exists("UpstreamRequestParameters",$param) and $param["UpstreamRequestParameters"] !== null) {
            $this->UpstreamRequestParameters = new UpstreamRequestParameters();
            $this->UpstreamRequestParameters->deserialize($param["UpstreamRequestParameters"]);
        }

        if (array_key_exists("ShieldParameters",$param) and $param["ShieldParameters"] !== null) {
            $this->ShieldParameters = new ShieldParameters();
            $this->ShieldParameters->deserialize($param["ShieldParameters"]);
        }

        if (array_key_exists("TLSConfigParameters",$param) and $param["TLSConfigParameters"] !== null) {
            $this->TLSConfigParameters = new TLSConfigParameters();
            $this->TLSConfigParameters->deserialize($param["TLSConfigParameters"]);
        }

        if (array_key_exists("ModifyOriginParameters",$param) and $param["ModifyOriginParameters"] !== null) {
            $this->ModifyOriginParameters = new ModifyOriginParameters();
            $this->ModifyOriginParameters->deserialize($param["ModifyOriginParameters"]);
        }

        if (array_key_exists("SiteFailoverParameters",$param) and $param["SiteFailoverParameters"] !== null) {
            $this->SiteFailoverParameters = new SiteFailoverParameters();
            $this->SiteFailoverParameters->deserialize($param["SiteFailoverParameters"]);
        }

        if (array_key_exists("HTTPUpstreamTimeoutParameters",$param) and $param["HTTPUpstreamTimeoutParameters"] !== null) {
            $this->HTTPUpstreamTimeoutParameters = new HTTPUpstreamTimeoutParameters();
            $this->HTTPUpstreamTimeoutParameters->deserialize($param["HTTPUpstreamTimeoutParameters"]);
        }

        if (array_key_exists("HttpResponseParameters",$param) and $param["HttpResponseParameters"] !== null) {
            $this->HttpResponseParameters = new HTTPResponseParameters();
            $this->HttpResponseParameters->deserialize($param["HttpResponseParameters"]);
        }

        if (array_key_exists("ErrorPageParameters",$param) and $param["ErrorPageParameters"] !== null) {
            $this->ErrorPageParameters = new ErrorPageParameters();
            $this->ErrorPageParameters->deserialize($param["ErrorPageParameters"]);
        }

        if (array_key_exists("ModifyResponseHeaderParameters",$param) and $param["ModifyResponseHeaderParameters"] !== null) {
            $this->ModifyResponseHeaderParameters = new ModifyResponseHeaderParameters();
            $this->ModifyResponseHeaderParameters->deserialize($param["ModifyResponseHeaderParameters"]);
        }

        if (array_key_exists("ModifyRequestHeaderParameters",$param) and $param["ModifyRequestHeaderParameters"] !== null) {
            $this->ModifyRequestHeaderParameters = new ModifyRequestHeaderParameters();
            $this->ModifyRequestHeaderParameters->deserialize($param["ModifyRequestHeaderParameters"]);
        }

        if (array_key_exists("ResponseSpeedLimitParameters",$param) and $param["ResponseSpeedLimitParameters"] !== null) {
            $this->ResponseSpeedLimitParameters = new ResponseSpeedLimitParameters();
            $this->ResponseSpeedLimitParameters->deserialize($param["ResponseSpeedLimitParameters"]);
        }

        if (array_key_exists("SetContentIdentifierParameters",$param) and $param["SetContentIdentifierParameters"] !== null) {
            $this->SetContentIdentifierParameters = new SetContentIdentifierParameters();
            $this->SetContentIdentifierParameters->deserialize($param["SetContentIdentifierParameters"]);
        }

        if (array_key_exists("VaryParameters",$param) and $param["VaryParameters"] !== null) {
            $this->VaryParameters = new VaryParameters();
            $this->VaryParameters->deserialize($param["VaryParameters"]);
        }

        if (array_key_exists("ContentCompressionParameters",$param) and $param["ContentCompressionParameters"] !== null) {
            $this->ContentCompressionParameters = new ContentCompressionParameters();
            $this->ContentCompressionParameters->deserialize($param["ContentCompressionParameters"]);
        }

        if (array_key_exists("OriginAuthenticationParameters",$param) and $param["OriginAuthenticationParameters"] !== null) {
            $this->OriginAuthenticationParameters = new OriginAuthenticationParameters();
            $this->OriginAuthenticationParameters->deserialize($param["OriginAuthenticationParameters"]);
        }

        if (array_key_exists("CustomActionParameters",$param) and $param["CustomActionParameters"] !== null) {
            $this->CustomActionParameters = new CustomActionParameters();
            $this->CustomActionParameters->deserialize($param["CustomActionParameters"]);
        }
    }
}
