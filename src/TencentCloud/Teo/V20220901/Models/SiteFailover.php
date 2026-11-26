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
 * Origin server failover configuration parameter internal structure.
 *
 * @method string getMode() Obtain Origin-pull failover type. Valid values:
<li>FailoverToHost: Failover to the specified IP/domain;</li>
<li> FailoverToCOS: Failover to Tencent Cloud COS;</li>
<li>FailoverToS3CompatibleObjectStorage: Failover to S3-compatible storage;</li>
<li> FailoverRedirectToURL: redirect to the specified URL;</li>
<li> FailoverCustomResponsePage: Use a custom response page.</li>
 * @method void setMode(string $Mode) Set Origin-pull failover type. Valid values:
<li>FailoverToHost: Failover to the specified IP/domain;</li>
<li> FailoverToCOS: Failover to Tencent Cloud COS;</li>
<li>FailoverToS3CompatibleObjectStorage: Failover to S3-compatible storage;</li>
<li> FailoverRedirectToURL: redirect to the specified URL;</li>
<li> FailoverCustomResponsePage: Use a custom response page.</li>
 * @method string getOrigin() Obtain Origin server address, divided into the following scenarios based on the value of Mode:
<li>When Mode = FailoverToHost, fill in an IPV4 address, an IPV6 address, or a domain name;</li>
<li>When Mode = FailoverToCOS, fill in the access domain name of the COS bucket;</li>
<li>When Mode = FailoverToS3CompatibleObjectStorage, fill in the access domain name of the S3 bucket.</li>
 * @method void setOrigin(string $Origin) Set Origin server address, divided into the following scenarios based on the value of Mode:
<li>When Mode = FailoverToHost, fill in an IPV4 address, an IPV6 address, or a domain name;</li>
<li>When Mode = FailoverToCOS, fill in the access domain name of the COS bucket;</li>
<li>When Mode = FailoverToS3CompatibleObjectStorage, fill in the access domain name of the S3 bucket.</li>
 * @method string getOriginProtocol() Obtain Origin-pull protocol configuration. This parameter is required when Mode is FailoverToHost. Valid values:
<li>http: use HTTP protocol;</li>
<li>https: Use HTTPS protocol;</li>
<li>follow: follow protocol.</li>
 * @method void setOriginProtocol(string $OriginProtocol) Set Origin-pull protocol configuration. This parameter is required when Mode is FailoverToHost. Valid values:
<li>http: use HTTP protocol;</li>
<li>https: Use HTTPS protocol;</li>
<li>follow: follow protocol.</li>
 * @method integer getHTTPOriginPort() Obtain HTTP origin-pull port. Value range: 1–65535. This parameter is required when the origin-pull protocol OriginProtocol is http or follow.
 * @method void setHTTPOriginPort(integer $HTTPOriginPort) Set HTTP origin-pull port. Value range: 1–65535. This parameter is required when the origin-pull protocol OriginProtocol is http or follow.
 * @method integer getHTTPSOriginPort() Obtain HTTPS origin-pull port, in the range of 1–65535. This parameter is required when OriginProtocol is https or follow.
 * @method void setHTTPSOriginPort(integer $HTTPSOriginPort) Set HTTPS origin-pull port, in the range of 1–65535. This parameter is required when OriginProtocol is https or follow.
 * @method HostHeaderParameters getUpstreamHostHeader() Obtain Host Header rewrite configuration for origin-pull.
 * @method void setUpstreamHostHeader(HostHeaderParameters $UpstreamHostHeader) Set Host Header rewrite configuration for origin-pull.
 * @method UpstreamURLRewriteParameters getUpstreamURLRewrite() Obtain Origin-pull URL rewrite configuration.
 * @method void setUpstreamURLRewrite(UpstreamURLRewriteParameters $UpstreamURLRewrite) Set Origin-pull URL rewrite configuration.
 * @method UpstreamRequestParameters getUpstreamRequestParameters() Obtain Origin-pull request parameter configuration.
 * @method void setUpstreamRequestParameters(UpstreamRequestParameters $UpstreamRequestParameters) Set Origin-pull request parameter configuration.
 * @method UpstreamHTTP2Parameters getUpstreamHTTP2Parameters() Obtain HTTP/2 origin-pull configuration parameter.
 * @method void setUpstreamHTTP2Parameters(UpstreamHTTP2Parameters $UpstreamHTTP2Parameters) Set HTTP/2 origin-pull configuration parameter.
 * @method string getPrivateAccess() Obtain Whether access to the private object storage origin server is allowed. This parameter is required when the origin server type Mode is FailoverToCOS or FailoverToS3CompatibleObjectStorage. Valid values:
<li>on: Enable private authentication;</li>
<li>off: Disable private authentication.</li>
 * @method void setPrivateAccess(string $PrivateAccess) Set Whether access to the private object storage origin server is allowed. This parameter is required when the origin server type Mode is FailoverToCOS or FailoverToS3CompatibleObjectStorage. Valid values:
<li>on: Enable private authentication;</li>
<li>off: Disable private authentication.</li>
 * @method OriginPrivateParameters getPrivateParameters() Obtain Private authentication parameter. This parameter is valid only when Mode = FailoverToS3CompatibleObjectStorage and PrivateAccess = on.
 * @method void setPrivateParameters(OriginPrivateParameters $PrivateParameters) Set Private authentication parameter. This parameter is valid only when Mode = FailoverToS3CompatibleObjectStorage and PrivateAccess = on.
 * @method string getRedirectURL() Obtain Redirect target URL. This parameter is required when Mode is FailoverRedirectToURL.
 * @method void setRedirectURL(string $RedirectURL) Set Redirect target URL. This parameter is required when Mode is FailoverRedirectToURL.
 * @method string getResponsePageId() Obtain page ID. This parameter is required when Mode is FailoverCustomResponsePage.
 * @method void setResponsePageId(string $ResponsePageId) Set page ID. This parameter is required when Mode is FailoverCustomResponsePage.
 * @method integer getStatusCode() Obtain status code. This parameter is required when Mode is FailoverRedirectToURL or FailoverCustomResponsePage. Valid values:
<li>When Mode = FailoverRedirectToURL, the parameter value is one of 301, 302, 303, 307, 308;</li>
<li>When Mode = FailoverCustomResponsePage, the parameter value is one of 400, 403, 404, 405, 414, 416, 451, 500, 501, 502, 503, 504.</li>
 * @method void setStatusCode(integer $StatusCode) Set status code. This parameter is required when Mode is FailoverRedirectToURL or FailoverCustomResponsePage. Valid values:
<li>When Mode = FailoverRedirectToURL, the parameter value is one of 301, 302, 303, 307, 308;</li>
<li>When Mode = FailoverCustomResponsePage, the parameter value is one of 400, 403, 404, 405, 414, 416, 451, 500, 501, 502, 503, 504.</li>
 */
class SiteFailover extends AbstractModel
{
    /**
     * @var string Origin-pull failover type. Valid values:
<li>FailoverToHost: Failover to the specified IP/domain;</li>
<li> FailoverToCOS: Failover to Tencent Cloud COS;</li>
<li>FailoverToS3CompatibleObjectStorage: Failover to S3-compatible storage;</li>
<li> FailoverRedirectToURL: redirect to the specified URL;</li>
<li> FailoverCustomResponsePage: Use a custom response page.</li>
     */
    public $Mode;

    /**
     * @var string Origin server address, divided into the following scenarios based on the value of Mode:
<li>When Mode = FailoverToHost, fill in an IPV4 address, an IPV6 address, or a domain name;</li>
<li>When Mode = FailoverToCOS, fill in the access domain name of the COS bucket;</li>
<li>When Mode = FailoverToS3CompatibleObjectStorage, fill in the access domain name of the S3 bucket.</li>
     */
    public $Origin;

    /**
     * @var string Origin-pull protocol configuration. This parameter is required when Mode is FailoverToHost. Valid values:
<li>http: use HTTP protocol;</li>
<li>https: Use HTTPS protocol;</li>
<li>follow: follow protocol.</li>
     */
    public $OriginProtocol;

    /**
     * @var integer HTTP origin-pull port. Value range: 1–65535. This parameter is required when the origin-pull protocol OriginProtocol is http or follow.
     */
    public $HTTPOriginPort;

    /**
     * @var integer HTTPS origin-pull port, in the range of 1–65535. This parameter is required when OriginProtocol is https or follow.
     */
    public $HTTPSOriginPort;

    /**
     * @var HostHeaderParameters Host Header rewrite configuration for origin-pull.
     */
    public $UpstreamHostHeader;

    /**
     * @var UpstreamURLRewriteParameters Origin-pull URL rewrite configuration.
     */
    public $UpstreamURLRewrite;

    /**
     * @var UpstreamRequestParameters Origin-pull request parameter configuration.
     */
    public $UpstreamRequestParameters;

    /**
     * @var UpstreamHTTP2Parameters HTTP/2 origin-pull configuration parameter.
     */
    public $UpstreamHTTP2Parameters;

    /**
     * @var string Whether access to the private object storage origin server is allowed. This parameter is required when the origin server type Mode is FailoverToCOS or FailoverToS3CompatibleObjectStorage. Valid values:
<li>on: Enable private authentication;</li>
<li>off: Disable private authentication.</li>
     */
    public $PrivateAccess;

    /**
     * @var OriginPrivateParameters Private authentication parameter. This parameter is valid only when Mode = FailoverToS3CompatibleObjectStorage and PrivateAccess = on.
     */
    public $PrivateParameters;

    /**
     * @var string Redirect target URL. This parameter is required when Mode is FailoverRedirectToURL.
     */
    public $RedirectURL;

    /**
     * @var string page ID. This parameter is required when Mode is FailoverCustomResponsePage.
     */
    public $ResponsePageId;

    /**
     * @var integer status code. This parameter is required when Mode is FailoverRedirectToURL or FailoverCustomResponsePage. Valid values:
<li>When Mode = FailoverRedirectToURL, the parameter value is one of 301, 302, 303, 307, 308;</li>
<li>When Mode = FailoverCustomResponsePage, the parameter value is one of 400, 403, 404, 405, 414, 416, 451, 500, 501, 502, 503, 504.</li>
     */
    public $StatusCode;

    /**
     * @param string $Mode Origin-pull failover type. Valid values:
<li>FailoverToHost: Failover to the specified IP/domain;</li>
<li> FailoverToCOS: Failover to Tencent Cloud COS;</li>
<li>FailoverToS3CompatibleObjectStorage: Failover to S3-compatible storage;</li>
<li> FailoverRedirectToURL: redirect to the specified URL;</li>
<li> FailoverCustomResponsePage: Use a custom response page.</li>
     * @param string $Origin Origin server address, divided into the following scenarios based on the value of Mode:
<li>When Mode = FailoverToHost, fill in an IPV4 address, an IPV6 address, or a domain name;</li>
<li>When Mode = FailoverToCOS, fill in the access domain name of the COS bucket;</li>
<li>When Mode = FailoverToS3CompatibleObjectStorage, fill in the access domain name of the S3 bucket.</li>
     * @param string $OriginProtocol Origin-pull protocol configuration. This parameter is required when Mode is FailoverToHost. Valid values:
<li>http: use HTTP protocol;</li>
<li>https: Use HTTPS protocol;</li>
<li>follow: follow protocol.</li>
     * @param integer $HTTPOriginPort HTTP origin-pull port. Value range: 1–65535. This parameter is required when the origin-pull protocol OriginProtocol is http or follow.
     * @param integer $HTTPSOriginPort HTTPS origin-pull port, in the range of 1–65535. This parameter is required when OriginProtocol is https or follow.
     * @param HostHeaderParameters $UpstreamHostHeader Host Header rewrite configuration for origin-pull.
     * @param UpstreamURLRewriteParameters $UpstreamURLRewrite Origin-pull URL rewrite configuration.
     * @param UpstreamRequestParameters $UpstreamRequestParameters Origin-pull request parameter configuration.
     * @param UpstreamHTTP2Parameters $UpstreamHTTP2Parameters HTTP/2 origin-pull configuration parameter.
     * @param string $PrivateAccess Whether access to the private object storage origin server is allowed. This parameter is required when the origin server type Mode is FailoverToCOS or FailoverToS3CompatibleObjectStorage. Valid values:
<li>on: Enable private authentication;</li>
<li>off: Disable private authentication.</li>
     * @param OriginPrivateParameters $PrivateParameters Private authentication parameter. This parameter is valid only when Mode = FailoverToS3CompatibleObjectStorage and PrivateAccess = on.
     * @param string $RedirectURL Redirect target URL. This parameter is required when Mode is FailoverRedirectToURL.
     * @param string $ResponsePageId page ID. This parameter is required when Mode is FailoverCustomResponsePage.
     * @param integer $StatusCode status code. This parameter is required when Mode is FailoverRedirectToURL or FailoverCustomResponsePage. Valid values:
<li>When Mode = FailoverRedirectToURL, the parameter value is one of 301, 302, 303, 307, 308;</li>
<li>When Mode = FailoverCustomResponsePage, the parameter value is one of 400, 403, 404, 405, 414, 416, 451, 500, 501, 502, 503, 504.</li>
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = $param["Origin"];
        }

        if (array_key_exists("OriginProtocol",$param) and $param["OriginProtocol"] !== null) {
            $this->OriginProtocol = $param["OriginProtocol"];
        }

        if (array_key_exists("HTTPOriginPort",$param) and $param["HTTPOriginPort"] !== null) {
            $this->HTTPOriginPort = $param["HTTPOriginPort"];
        }

        if (array_key_exists("HTTPSOriginPort",$param) and $param["HTTPSOriginPort"] !== null) {
            $this->HTTPSOriginPort = $param["HTTPSOriginPort"];
        }

        if (array_key_exists("UpstreamHostHeader",$param) and $param["UpstreamHostHeader"] !== null) {
            $this->UpstreamHostHeader = new HostHeaderParameters();
            $this->UpstreamHostHeader->deserialize($param["UpstreamHostHeader"]);
        }

        if (array_key_exists("UpstreamURLRewrite",$param) and $param["UpstreamURLRewrite"] !== null) {
            $this->UpstreamURLRewrite = new UpstreamURLRewriteParameters();
            $this->UpstreamURLRewrite->deserialize($param["UpstreamURLRewrite"]);
        }

        if (array_key_exists("UpstreamRequestParameters",$param) and $param["UpstreamRequestParameters"] !== null) {
            $this->UpstreamRequestParameters = new UpstreamRequestParameters();
            $this->UpstreamRequestParameters->deserialize($param["UpstreamRequestParameters"]);
        }

        if (array_key_exists("UpstreamHTTP2Parameters",$param) and $param["UpstreamHTTP2Parameters"] !== null) {
            $this->UpstreamHTTP2Parameters = new UpstreamHTTP2Parameters();
            $this->UpstreamHTTP2Parameters->deserialize($param["UpstreamHTTP2Parameters"]);
        }

        if (array_key_exists("PrivateAccess",$param) and $param["PrivateAccess"] !== null) {
            $this->PrivateAccess = $param["PrivateAccess"];
        }

        if (array_key_exists("PrivateParameters",$param) and $param["PrivateParameters"] !== null) {
            $this->PrivateParameters = new OriginPrivateParameters();
            $this->PrivateParameters->deserialize($param["PrivateParameters"]);
        }

        if (array_key_exists("RedirectURL",$param) and $param["RedirectURL"] !== null) {
            $this->RedirectURL = $param["RedirectURL"];
        }

        if (array_key_exists("ResponsePageId",$param) and $param["ResponsePageId"] !== null) {
            $this->ResponsePageId = $param["ResponsePageId"];
        }

        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }
    }
}
