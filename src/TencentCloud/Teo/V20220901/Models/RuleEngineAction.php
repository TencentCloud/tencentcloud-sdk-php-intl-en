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
 * Rule engine operations.
 *
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method CacheParameters getCacheParameters() Obtain Node cache ttl configuration parameter. when name is cache, this parameter is required.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setCacheParameters(CacheParameters $CacheParameters) Set Node cache ttl configuration parameter. when name is cache, this parameter is required.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method CacheKeyParameters getCacheKeyParameters() Obtain Custom cache key configuration parameter. when name is cachekey, this parameter is required.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setCacheKeyParameters(CacheKeyParameters $CacheKeyParameters) Set Custom cache key configuration parameter. when name is cachekey, this parameter is required.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method CachePrefreshParameters getCachePrefreshParameters() Obtain The cache prefresh configuration parameter. this parameter is required when `name` is `cacheprefresh`.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setCachePrefreshParameters(CachePrefreshParameters $CachePrefreshParameters) Set The cache prefresh configuration parameter. this parameter is required when `name` is `cacheprefresh`.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method AccessURLRedirectParameters getAccessURLRedirectParameters() Obtain The access url redirection configuration parameter. this parameter is required when `name` is `accessurlredirect`.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setAccessURLRedirectParameters(AccessURLRedirectParameters $AccessURLRedirectParameters) Set The access url redirection configuration parameter. this parameter is required when `name` is `accessurlredirect`.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method UpstreamURLRewriteParameters getUpstreamURLRewriteParameters() Obtain The origin-pull url rewrite configuration parameter. this parameter is required when `name` is `upstreamurlrewrite`.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setUpstreamURLRewriteParameters(UpstreamURLRewriteParameters $UpstreamURLRewriteParameters) Set The origin-pull url rewrite configuration parameter. this parameter is required when `name` is `upstreamurlrewrite`.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method QUICParameters getQUICParameters() Obtain The quic configuration parameter. this parameter is required when `name` is `quic`.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setQUICParameters(QUICParameters $QUICParameters) Set The quic configuration parameter. this parameter is required when `name` is `quic`.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method WebSocketParameters getWebSocketParameters() Obtain The websocket configuration parameter. this parameter is required when `name` is `websocket`.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setWebSocketParameters(WebSocketParameters $WebSocketParameters) Set The websocket configuration parameter. this parameter is required when `name` is `websocket`.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method AuthenticationParameters getAuthenticationParameters() Obtain Token authentication configuration parameter. this parameter is required when `name` is `authentication`.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setAuthenticationParameters(AuthenticationParameters $AuthenticationParameters) Set Token authentication configuration parameter. this parameter is required when `name` is `authentication`.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method MaxAgeParameters getMaxAgeParameters() Obtain Browser cache ttl configuration parameter. this parameter is required when `name` is `maxage`.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setMaxAgeParameters(MaxAgeParameters $MaxAgeParameters) Set Browser cache ttl configuration parameter. this parameter is required when `name` is `maxage`.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method StatusCodeCacheParameters getStatusCodeCacheParameters() Obtain Status code cache ttl configuration parameter. this parameter is required when `name` is `statuscodecache`.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setStatusCodeCacheParameters(StatusCodeCacheParameters $StatusCodeCacheParameters) Set Status code cache ttl configuration parameter. this parameter is required when `name` is `statuscodecache`.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method OfflineCacheParameters getOfflineCacheParameters() Obtain Offline cache configuration parameter. this parameter is required when `name` is `offlinecache`.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setOfflineCacheParameters(OfflineCacheParameters $OfflineCacheParameters) Set Offline cache configuration parameter. this parameter is required when `name` is `offlinecache`.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method SmartRoutingParameters getSmartRoutingParameters() Obtain Smart acceleration configuration parameter. this parameter is required when `name` is `smartrouting`.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setSmartRoutingParameters(SmartRoutingParameters $SmartRoutingParameters) Set Smart acceleration configuration parameter. this parameter is required when `name` is `smartrouting`.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method RangeOriginPullParameters getRangeOriginPullParameters() Obtain Shard source retrieval configuration parameter. this parameter is required when name is set to rangeoriginpull.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setRangeOriginPullParameters(RangeOriginPullParameters $RangeOriginPullParameters) Set Shard source retrieval configuration parameter. this parameter is required when name is set to rangeoriginpull.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method UpstreamHTTP2Parameters getUpstreamHTTP2Parameters() Obtain HTTP2 origin-pull configuration parameter. this parameter is required when name is set to upstreamhttp2.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setUpstreamHTTP2Parameters(UpstreamHTTP2Parameters $UpstreamHTTP2Parameters) Set HTTP2 origin-pull configuration parameter. this parameter is required when name is set to upstreamhttp2.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method HostHeaderParameters getHostHeaderParameters() Obtain Host header rewrite configuration parameter. this parameter is required when name is set to hostheader.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setHostHeaderParameters(HostHeaderParameters $HostHeaderParameters) Set Host header rewrite configuration parameter. this parameter is required when name is set to hostheader.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method ForceRedirectHTTPSParameters getForceRedirectHTTPSParameters() Obtain Force https redirect configuration parameter. this parameter is required when the name is set to forceredirecthttps.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setForceRedirectHTTPSParameters(ForceRedirectHTTPSParameters $ForceRedirectHTTPSParameters) Set Force https redirect configuration parameter. this parameter is required when the name is set to forceredirecthttps.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method CompressionParameters getCompressionParameters() Obtain Intelligent compression configuration. this parameter is required when name is set to compression.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setCompressionParameters(CompressionParameters $CompressionParameters) Set Intelligent compression configuration. this parameter is required when name is set to compression.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method HSTSParameters getHSTSParameters() Obtain HSTS configuration parameter. this parameter is required when name is hsts.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setHSTSParameters(HSTSParameters $HSTSParameters) Set HSTS configuration parameter. this parameter is required when name is hsts.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method ClientIPHeaderParameters getClientIPHeaderParameters() Obtain Client ip header configuration for storing client request ip information. this parameter is required when name is clientipheader.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setClientIPHeaderParameters(ClientIPHeaderParameters $ClientIPHeaderParameters) Set Client ip header configuration for storing client request ip information. this parameter is required when name is clientipheader.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method OCSPStaplingParameters getOCSPStaplingParameters() Obtain OCSP stapling configuration parameter. this parameter is required when the name is set to ocspstapling.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setOCSPStaplingParameters(OCSPStaplingParameters $OCSPStaplingParameters) Set OCSP stapling configuration parameter. this parameter is required when the name is set to ocspstapling.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method HTTP2Parameters getHTTP2Parameters() Obtain HTTP2 access configuration parameter. this parameter is required when name is http2.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setHTTP2Parameters(HTTP2Parameters $HTTP2Parameters) Set HTTP2 access configuration parameter. this parameter is required when name is http2.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method PostMaxSizeParameters getPostMaxSizeParameters() Obtain Maximum size configuration for file streaming upload via a post request. this parameter is required when name is postmaxsize.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setPostMaxSizeParameters(PostMaxSizeParameters $PostMaxSizeParameters) Set Maximum size configuration for file streaming upload via a post request. this parameter is required when name is postmaxsize.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method ClientIPCountryParameters getClientIPCountryParameters() Obtain Configuration parameter for carrying the region information of the client ip during origin-pull. this parameter is required when the name is set to clientipcountry.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setClientIPCountryParameters(ClientIPCountryParameters $ClientIPCountryParameters) Set Configuration parameter for carrying the region information of the client ip during origin-pull. this parameter is required when the name is set to clientipcountry.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method UpstreamFollowRedirectParameters getUpstreamFollowRedirectParameters() Obtain Configuration parameter for following redirects during origin-pull. this parameter is required when the name is set to upstreamfollowredirect.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setUpstreamFollowRedirectParameters(UpstreamFollowRedirectParameters $UpstreamFollowRedirectParameters) Set Configuration parameter for following redirects during origin-pull. this parameter is required when the name is set to upstreamfollowredirect.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method UpstreamRequestParameters getUpstreamRequestParameters() Obtain Configuration parameter for origin-pull request. this parameter is required when the name is set to upstreamrequest.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setUpstreamRequestParameters(UpstreamRequestParameters $UpstreamRequestParameters) Set Configuration parameter for origin-pull request. this parameter is required when the name is set to upstreamrequest.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method TLSConfigParameters getTLSConfigParameters() Obtain SSL/TLS security configuration parameter. this parameter is required when the name is set to tlsconfig.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setTLSConfigParameters(TLSConfigParameters $TLSConfigParameters) Set SSL/TLS security configuration parameter. this parameter is required when the name is set to tlsconfig.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method ModifyOriginParameters getModifyOriginParameters() Obtain Configuration parameter for modifying the origin server. this parameter is required when the name is set to modifyorigin.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setModifyOriginParameters(ModifyOriginParameters $ModifyOriginParameters) Set Configuration parameter for modifying the origin server. this parameter is required when the name is set to modifyorigin.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method HTTPUpstreamTimeoutParameters getHTTPUpstreamTimeoutParameters() Obtain Configuration of layer 7 origin timeout. this parameter is required when name is httpupstreamtimeout.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setHTTPUpstreamTimeoutParameters(HTTPUpstreamTimeoutParameters $HTTPUpstreamTimeoutParameters) Set Configuration of layer 7 origin timeout. this parameter is required when name is httpupstreamtimeout.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method HTTPResponseParameters getHttpResponseParameters() Obtain HTTP response configuration parameters. this parameter is required when name is httpresponse.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setHttpResponseParameters(HTTPResponseParameters $HttpResponseParameters) Set HTTP response configuration parameters. this parameter is required when name is httpresponse.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method ErrorPageParameters getErrorPageParameters() Obtain Custom error page configuration parameters. this parameter is required when name is errorpage.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setErrorPageParameters(ErrorPageParameters $ErrorPageParameters) Set Custom error page configuration parameters. this parameter is required when name is errorpage.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method ModifyResponseHeaderParameters getModifyResponseHeaderParameters() Obtain Modify http node response header configuration parameters. this parameter is required when name is modifyresponseheader.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setModifyResponseHeaderParameters(ModifyResponseHeaderParameters $ModifyResponseHeaderParameters) Set Modify http node response header configuration parameters. this parameter is required when name is modifyresponseheader.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method ModifyRequestHeaderParameters getModifyRequestHeaderParameters() Obtain Modify http node request header configuration parameters. this parameter is required when name is modifyrequestheader.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setModifyRequestHeaderParameters(ModifyRequestHeaderParameters $ModifyRequestHeaderParameters) Set Modify http node request header configuration parameters. this parameter is required when name is modifyrequestheader.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method ResponseSpeedLimitParameters getResponseSpeedLimitParameters() Obtain Single connection download speed limit configuration parameter. this parameter is required when name is responsespeedlimit.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setResponseSpeedLimitParameters(ResponseSpeedLimitParameters $ResponseSpeedLimitParameters) Set Single connection download speed limit configuration parameter. this parameter is required when name is responsespeedlimit.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method SetContentIdentifierParameters getSetContentIdentifierParameters() Obtain Content identification configuration parameter. this parameter is required when name is httpresponse.

Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setSetContentIdentifierParameters(SetContentIdentifierParameters $SetContentIdentifierParameters) Set Content identification configuration parameter. this parameter is required when name is httpresponse.

Note: this field may return null, which indicates a failure to obtain a valid value.
 */
class RuleEngineAction extends AbstractModel
{
    /**
     * @var string 
     */
    public $Name;

    /**
     * @var CacheParameters Node cache ttl configuration parameter. when name is cache, this parameter is required.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $CacheParameters;

    /**
     * @var CacheKeyParameters Custom cache key configuration parameter. when name is cachekey, this parameter is required.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $CacheKeyParameters;

    /**
     * @var CachePrefreshParameters The cache prefresh configuration parameter. this parameter is required when `name` is `cacheprefresh`.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $CachePrefreshParameters;

    /**
     * @var AccessURLRedirectParameters The access url redirection configuration parameter. this parameter is required when `name` is `accessurlredirect`.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $AccessURLRedirectParameters;

    /**
     * @var UpstreamURLRewriteParameters The origin-pull url rewrite configuration parameter. this parameter is required when `name` is `upstreamurlrewrite`.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $UpstreamURLRewriteParameters;

    /**
     * @var QUICParameters The quic configuration parameter. this parameter is required when `name` is `quic`.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $QUICParameters;

    /**
     * @var WebSocketParameters The websocket configuration parameter. this parameter is required when `name` is `websocket`.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $WebSocketParameters;

    /**
     * @var AuthenticationParameters Token authentication configuration parameter. this parameter is required when `name` is `authentication`.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $AuthenticationParameters;

    /**
     * @var MaxAgeParameters Browser cache ttl configuration parameter. this parameter is required when `name` is `maxage`.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $MaxAgeParameters;

    /**
     * @var StatusCodeCacheParameters Status code cache ttl configuration parameter. this parameter is required when `name` is `statuscodecache`.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $StatusCodeCacheParameters;

    /**
     * @var OfflineCacheParameters Offline cache configuration parameter. this parameter is required when `name` is `offlinecache`.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $OfflineCacheParameters;

    /**
     * @var SmartRoutingParameters Smart acceleration configuration parameter. this parameter is required when `name` is `smartrouting`.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $SmartRoutingParameters;

    /**
     * @var RangeOriginPullParameters Shard source retrieval configuration parameter. this parameter is required when name is set to rangeoriginpull.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $RangeOriginPullParameters;

    /**
     * @var UpstreamHTTP2Parameters HTTP2 origin-pull configuration parameter. this parameter is required when name is set to upstreamhttp2.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $UpstreamHTTP2Parameters;

    /**
     * @var HostHeaderParameters Host header rewrite configuration parameter. this parameter is required when name is set to hostheader.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $HostHeaderParameters;

    /**
     * @var ForceRedirectHTTPSParameters Force https redirect configuration parameter. this parameter is required when the name is set to forceredirecthttps.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $ForceRedirectHTTPSParameters;

    /**
     * @var CompressionParameters Intelligent compression configuration. this parameter is required when name is set to compression.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $CompressionParameters;

    /**
     * @var HSTSParameters HSTS configuration parameter. this parameter is required when name is hsts.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $HSTSParameters;

    /**
     * @var ClientIPHeaderParameters Client ip header configuration for storing client request ip information. this parameter is required when name is clientipheader.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $ClientIPHeaderParameters;

    /**
     * @var OCSPStaplingParameters OCSP stapling configuration parameter. this parameter is required when the name is set to ocspstapling.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $OCSPStaplingParameters;

    /**
     * @var HTTP2Parameters HTTP2 access configuration parameter. this parameter is required when name is http2.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $HTTP2Parameters;

    /**
     * @var PostMaxSizeParameters Maximum size configuration for file streaming upload via a post request. this parameter is required when name is postmaxsize.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $PostMaxSizeParameters;

    /**
     * @var ClientIPCountryParameters Configuration parameter for carrying the region information of the client ip during origin-pull. this parameter is required when the name is set to clientipcountry.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $ClientIPCountryParameters;

    /**
     * @var UpstreamFollowRedirectParameters Configuration parameter for following redirects during origin-pull. this parameter is required when the name is set to upstreamfollowredirect.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $UpstreamFollowRedirectParameters;

    /**
     * @var UpstreamRequestParameters Configuration parameter for origin-pull request. this parameter is required when the name is set to upstreamrequest.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $UpstreamRequestParameters;

    /**
     * @var TLSConfigParameters SSL/TLS security configuration parameter. this parameter is required when the name is set to tlsconfig.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $TLSConfigParameters;

    /**
     * @var ModifyOriginParameters Configuration parameter for modifying the origin server. this parameter is required when the name is set to modifyorigin.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $ModifyOriginParameters;

    /**
     * @var HTTPUpstreamTimeoutParameters Configuration of layer 7 origin timeout. this parameter is required when name is httpupstreamtimeout.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $HTTPUpstreamTimeoutParameters;

    /**
     * @var HTTPResponseParameters HTTP response configuration parameters. this parameter is required when name is httpresponse.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $HttpResponseParameters;

    /**
     * @var ErrorPageParameters Custom error page configuration parameters. this parameter is required when name is errorpage.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $ErrorPageParameters;

    /**
     * @var ModifyResponseHeaderParameters Modify http node response header configuration parameters. this parameter is required when name is modifyresponseheader.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $ModifyResponseHeaderParameters;

    /**
     * @var ModifyRequestHeaderParameters Modify http node request header configuration parameters. this parameter is required when name is modifyrequestheader.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $ModifyRequestHeaderParameters;

    /**
     * @var ResponseSpeedLimitParameters Single connection download speed limit configuration parameter. this parameter is required when name is responsespeedlimit.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $ResponseSpeedLimitParameters;

    /**
     * @var SetContentIdentifierParameters Content identification configuration parameter. this parameter is required when name is httpresponse.

Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $SetContentIdentifierParameters;

    /**
     * @param string $Name 
     * @param CacheParameters $CacheParameters Node cache ttl configuration parameter. when name is cache, this parameter is required.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param CacheKeyParameters $CacheKeyParameters Custom cache key configuration parameter. when name is cachekey, this parameter is required.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param CachePrefreshParameters $CachePrefreshParameters The cache prefresh configuration parameter. this parameter is required when `name` is `cacheprefresh`.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param AccessURLRedirectParameters $AccessURLRedirectParameters The access url redirection configuration parameter. this parameter is required when `name` is `accessurlredirect`.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param UpstreamURLRewriteParameters $UpstreamURLRewriteParameters The origin-pull url rewrite configuration parameter. this parameter is required when `name` is `upstreamurlrewrite`.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param QUICParameters $QUICParameters The quic configuration parameter. this parameter is required when `name` is `quic`.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param WebSocketParameters $WebSocketParameters The websocket configuration parameter. this parameter is required when `name` is `websocket`.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param AuthenticationParameters $AuthenticationParameters Token authentication configuration parameter. this parameter is required when `name` is `authentication`.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param MaxAgeParameters $MaxAgeParameters Browser cache ttl configuration parameter. this parameter is required when `name` is `maxage`.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param StatusCodeCacheParameters $StatusCodeCacheParameters Status code cache ttl configuration parameter. this parameter is required when `name` is `statuscodecache`.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param OfflineCacheParameters $OfflineCacheParameters Offline cache configuration parameter. this parameter is required when `name` is `offlinecache`.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param SmartRoutingParameters $SmartRoutingParameters Smart acceleration configuration parameter. this parameter is required when `name` is `smartrouting`.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param RangeOriginPullParameters $RangeOriginPullParameters Shard source retrieval configuration parameter. this parameter is required when name is set to rangeoriginpull.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param UpstreamHTTP2Parameters $UpstreamHTTP2Parameters HTTP2 origin-pull configuration parameter. this parameter is required when name is set to upstreamhttp2.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param HostHeaderParameters $HostHeaderParameters Host header rewrite configuration parameter. this parameter is required when name is set to hostheader.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param ForceRedirectHTTPSParameters $ForceRedirectHTTPSParameters Force https redirect configuration parameter. this parameter is required when the name is set to forceredirecthttps.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param CompressionParameters $CompressionParameters Intelligent compression configuration. this parameter is required when name is set to compression.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param HSTSParameters $HSTSParameters HSTS configuration parameter. this parameter is required when name is hsts.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param ClientIPHeaderParameters $ClientIPHeaderParameters Client ip header configuration for storing client request ip information. this parameter is required when name is clientipheader.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param OCSPStaplingParameters $OCSPStaplingParameters OCSP stapling configuration parameter. this parameter is required when the name is set to ocspstapling.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param HTTP2Parameters $HTTP2Parameters HTTP2 access configuration parameter. this parameter is required when name is http2.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param PostMaxSizeParameters $PostMaxSizeParameters Maximum size configuration for file streaming upload via a post request. this parameter is required when name is postmaxsize.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param ClientIPCountryParameters $ClientIPCountryParameters Configuration parameter for carrying the region information of the client ip during origin-pull. this parameter is required when the name is set to clientipcountry.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param UpstreamFollowRedirectParameters $UpstreamFollowRedirectParameters Configuration parameter for following redirects during origin-pull. this parameter is required when the name is set to upstreamfollowredirect.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param UpstreamRequestParameters $UpstreamRequestParameters Configuration parameter for origin-pull request. this parameter is required when the name is set to upstreamrequest.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param TLSConfigParameters $TLSConfigParameters SSL/TLS security configuration parameter. this parameter is required when the name is set to tlsconfig.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param ModifyOriginParameters $ModifyOriginParameters Configuration parameter for modifying the origin server. this parameter is required when the name is set to modifyorigin.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param HTTPUpstreamTimeoutParameters $HTTPUpstreamTimeoutParameters Configuration of layer 7 origin timeout. this parameter is required when name is httpupstreamtimeout.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param HTTPResponseParameters $HttpResponseParameters HTTP response configuration parameters. this parameter is required when name is httpresponse.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param ErrorPageParameters $ErrorPageParameters Custom error page configuration parameters. this parameter is required when name is errorpage.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param ModifyResponseHeaderParameters $ModifyResponseHeaderParameters Modify http node response header configuration parameters. this parameter is required when name is modifyresponseheader.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param ModifyRequestHeaderParameters $ModifyRequestHeaderParameters Modify http node request header configuration parameters. this parameter is required when name is modifyrequestheader.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param ResponseSpeedLimitParameters $ResponseSpeedLimitParameters Single connection download speed limit configuration parameter. this parameter is required when name is responsespeedlimit.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param SetContentIdentifierParameters $SetContentIdentifierParameters Content identification configuration parameter. this parameter is required when name is httpresponse.

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

        if (array_key_exists("TLSConfigParameters",$param) and $param["TLSConfigParameters"] !== null) {
            $this->TLSConfigParameters = new TLSConfigParameters();
            $this->TLSConfigParameters->deserialize($param["TLSConfigParameters"]);
        }

        if (array_key_exists("ModifyOriginParameters",$param) and $param["ModifyOriginParameters"] !== null) {
            $this->ModifyOriginParameters = new ModifyOriginParameters();
            $this->ModifyOriginParameters->deserialize($param["ModifyOriginParameters"]);
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
    }
}
