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
 * @method string getMode() Obtain Origin server failover type. Valid values:
<li>FailoverToHost: Fail back to the specified IP/domain.</li>
<li>FailoverToCOS: Fail back to Tencent Cloud COS;</li>
<li>FailoverToS3CompatibleObjectStorage: Fail over to S3-compatible object storage;</li>
<li> FailoverRedirectToURL: Redirect to the specified URL.</li>
<li>FailoverCustomResponsePage: Use a custom response page.</li>
 * @method void setMode(string $Mode) Set Origin server failover type. Valid values:
<li>FailoverToHost: Fail back to the specified IP/domain.</li>
<li>FailoverToCOS: Fail back to Tencent Cloud COS;</li>
<li>FailoverToS3CompatibleObjectStorage: Fail over to S3-compatible object storage;</li>
<li> FailoverRedirectToURL: Redirect to the specified URL.</li>
<li>FailoverCustomResponsePage: Use a custom response page.</li>
 * @method string getOrigin() Obtain Origin server address, divided into following scenarios based on the Mode value:
<li>When Mode = FailoverToHost, specify an IPV4 address, an IPV6 address, or a domain name;</li>
<li>When Mode = FailoverToCOS, specify the access domain name of the COS bucket;</li>
<li>When Mode = FailoverToS3CompatibleObjectStorage, specify the access domain of the S3 bucket.</li>
 * @method void setOrigin(string $Origin) Set Origin server address, divided into following scenarios based on the Mode value:
<li>When Mode = FailoverToHost, specify an IPV4 address, an IPV6 address, or a domain name;</li>
<li>When Mode = FailoverToCOS, specify the access domain name of the COS bucket;</li>
<li>When Mode = FailoverToS3CompatibleObjectStorage, specify the access domain of the S3 bucket.</li>
 * @method string getOriginProtocol() Obtain Protocol configuration. This parameter is required when Mode value is FailoverToHost. Valid values:
<li>http: use HTTP protocol;</li>
<li>https: Using HTTPS protocol;</li>
<li>follow: protocol following.</li>
 * @method void setOriginProtocol(string $OriginProtocol) Set Protocol configuration. This parameter is required when Mode value is FailoverToHost. Valid values:
<li>http: use HTTP protocol;</li>
<li>https: Using HTTPS protocol;</li>
<li>follow: protocol following.</li>
 * @method integer getHTTPOriginPort() Obtain HTTP origin port, value ranges from 1 to 65535. This parameter is required when the origin-pull protocol OriginProtocol is http or follow.
 * @method void setHTTPOriginPort(integer $HTTPOriginPort) Set HTTP origin port, value ranges from 1 to 65535. This parameter is required when the origin-pull protocol OriginProtocol is http or follow.
 * @method integer getHTTPSOriginPort() Obtain HTTPS origin port, value ranges from 1–65535. This parameter is required when the origin-pull protocol OriginProtocol is https or follow.
 * @method void setHTTPSOriginPort(integer $HTTPSOriginPort) Set HTTPS origin port, value ranges from 1–65535. This parameter is required when the origin-pull protocol OriginProtocol is https or follow.
 * @method HostHeaderParameters getUpstreamHostHeader() Obtain Host Header rewrite configuration for origin-pull
 * @method void setUpstreamHostHeader(HostHeaderParameters $UpstreamHostHeader) Set Host Header rewrite configuration for origin-pull
 * @method UpstreamURLRewriteParameters getUpstreamURLRewrite() Obtain Origin-pull URL rewrite configuration.
 * @method void setUpstreamURLRewrite(UpstreamURLRewriteParameters $UpstreamURLRewrite) Set Origin-pull URL rewrite configuration.
 * @method UpstreamRequestParameters getUpstreamRequestParameters() Obtain Origin Requests parameter configuration.
 * @method void setUpstreamRequestParameters(UpstreamRequestParameters $UpstreamRequestParameters) Set Origin Requests parameter configuration.
 * @method UpstreamHTTP2Parameters getUpstreamHTTP2Parameters() Obtain HTTP2 origin-pull configuration parameters.
 * @method void setUpstreamHTTP2Parameters(UpstreamHTTP2Parameters $UpstreamHTTP2Parameters) Set HTTP2 origin-pull configuration parameters.
 * @method string getPrivateAccess() Obtain Specify whether access to the private object storage origin server is allowed. This parameter is required when the origin server type is FailoverToCOS or FailoverToS3CompatibleObjectStorage. Valid values:
<li>on: Enable private authentication;</li>
<li>off: Disable private authentication.</li>
 * @method void setPrivateAccess(string $PrivateAccess) Set Specify whether access to the private object storage origin server is allowed. This parameter is required when the origin server type is FailoverToCOS or FailoverToS3CompatibleObjectStorage. Valid values:
<li>on: Enable private authentication;</li>
<li>off: Disable private authentication.</li>
 * @method OriginPrivateParameters getPrivateParameters() Obtain Private authentication parameter. This parameter is valid only when Mode = FailoverToS3CompatibleObjectStorage and PrivateAccess = on.
 * @method void setPrivateParameters(OriginPrivateParameters $PrivateParameters) Set Private authentication parameter. This parameter is valid only when Mode = FailoverToS3CompatibleObjectStorage and PrivateAccess = on.
 * @method string getRedirectURL() Obtain Redirect target URL. This parameter is required when Mode has a value of FailoverRedirectToURL.
 * @method void setRedirectURL(string $RedirectURL) Set Redirect target URL. This parameter is required when Mode has a value of FailoverRedirectToURL.
 * @method string getResponsePageId() Obtain Response page ID. This parameter is required when Mode value is FailoverCustomResponsePage.
 * @method void setResponsePageId(string $ResponsePageId) Set Response page ID. This parameter is required when Mode value is FailoverCustomResponsePage.
 * @method integer getStatusCode() Obtain Response status code. This parameter is required when Mode is a value of FailoverRedirectToURL or FailoverCustomResponsePage. Valid values:
<li>When Mode = FailoverRedirectToURL, the parameter value is one of 301, 302, 303, 307, 308.</li>
<li>When Mode = FailoverCustomResponsePage, the parameter value is one of 400, 403, 404, 405, 414, 416, 451, 500, 501, 502, 503, 504.</li>
 * @method void setStatusCode(integer $StatusCode) Set Response status code. This parameter is required when Mode is a value of FailoverRedirectToURL or FailoverCustomResponsePage. Valid values:
<li>When Mode = FailoverRedirectToURL, the parameter value is one of 301, 302, 303, 307, 308.</li>
<li>When Mode = FailoverCustomResponsePage, the parameter value is one of 400, 403, 404, 405, 414, 416, 451, 500, 501, 502, 503, 504.</li>
 */
class SiteFailover extends AbstractModel
{
    /**
     * @var string Origin server failover type. Valid values:
<li>FailoverToHost: Fail back to the specified IP/domain.</li>
<li>FailoverToCOS: Fail back to Tencent Cloud COS;</li>
<li>FailoverToS3CompatibleObjectStorage: Fail over to S3-compatible object storage;</li>
<li> FailoverRedirectToURL: Redirect to the specified URL.</li>
<li>FailoverCustomResponsePage: Use a custom response page.</li>
     */
    public $Mode;

    /**
     * @var string Origin server address, divided into following scenarios based on the Mode value:
<li>When Mode = FailoverToHost, specify an IPV4 address, an IPV6 address, or a domain name;</li>
<li>When Mode = FailoverToCOS, specify the access domain name of the COS bucket;</li>
<li>When Mode = FailoverToS3CompatibleObjectStorage, specify the access domain of the S3 bucket.</li>
     */
    public $Origin;

    /**
     * @var string Protocol configuration. This parameter is required when Mode value is FailoverToHost. Valid values:
<li>http: use HTTP protocol;</li>
<li>https: Using HTTPS protocol;</li>
<li>follow: protocol following.</li>
     */
    public $OriginProtocol;

    /**
     * @var integer HTTP origin port, value ranges from 1 to 65535. This parameter is required when the origin-pull protocol OriginProtocol is http or follow.
     */
    public $HTTPOriginPort;

    /**
     * @var integer HTTPS origin port, value ranges from 1–65535. This parameter is required when the origin-pull protocol OriginProtocol is https or follow.
     */
    public $HTTPSOriginPort;

    /**
     * @var HostHeaderParameters Host Header rewrite configuration for origin-pull
     */
    public $UpstreamHostHeader;

    /**
     * @var UpstreamURLRewriteParameters Origin-pull URL rewrite configuration.
     */
    public $UpstreamURLRewrite;

    /**
     * @var UpstreamRequestParameters Origin Requests parameter configuration.
     */
    public $UpstreamRequestParameters;

    /**
     * @var UpstreamHTTP2Parameters HTTP2 origin-pull configuration parameters.
     */
    public $UpstreamHTTP2Parameters;

    /**
     * @var string Specify whether access to the private object storage origin server is allowed. This parameter is required when the origin server type is FailoverToCOS or FailoverToS3CompatibleObjectStorage. Valid values:
<li>on: Enable private authentication;</li>
<li>off: Disable private authentication.</li>
     */
    public $PrivateAccess;

    /**
     * @var OriginPrivateParameters Private authentication parameter. This parameter is valid only when Mode = FailoverToS3CompatibleObjectStorage and PrivateAccess = on.
     */
    public $PrivateParameters;

    /**
     * @var string Redirect target URL. This parameter is required when Mode has a value of FailoverRedirectToURL.
     */
    public $RedirectURL;

    /**
     * @var string Response page ID. This parameter is required when Mode value is FailoverCustomResponsePage.
     */
    public $ResponsePageId;

    /**
     * @var integer Response status code. This parameter is required when Mode is a value of FailoverRedirectToURL or FailoverCustomResponsePage. Valid values:
<li>When Mode = FailoverRedirectToURL, the parameter value is one of 301, 302, 303, 307, 308.</li>
<li>When Mode = FailoverCustomResponsePage, the parameter value is one of 400, 403, 404, 405, 414, 416, 451, 500, 501, 502, 503, 504.</li>
     */
    public $StatusCode;

    /**
     * @param string $Mode Origin server failover type. Valid values:
<li>FailoverToHost: Fail back to the specified IP/domain.</li>
<li>FailoverToCOS: Fail back to Tencent Cloud COS;</li>
<li>FailoverToS3CompatibleObjectStorage: Fail over to S3-compatible object storage;</li>
<li> FailoverRedirectToURL: Redirect to the specified URL.</li>
<li>FailoverCustomResponsePage: Use a custom response page.</li>
     * @param string $Origin Origin server address, divided into following scenarios based on the Mode value:
<li>When Mode = FailoverToHost, specify an IPV4 address, an IPV6 address, or a domain name;</li>
<li>When Mode = FailoverToCOS, specify the access domain name of the COS bucket;</li>
<li>When Mode = FailoverToS3CompatibleObjectStorage, specify the access domain of the S3 bucket.</li>
     * @param string $OriginProtocol Protocol configuration. This parameter is required when Mode value is FailoverToHost. Valid values:
<li>http: use HTTP protocol;</li>
<li>https: Using HTTPS protocol;</li>
<li>follow: protocol following.</li>
     * @param integer $HTTPOriginPort HTTP origin port, value ranges from 1 to 65535. This parameter is required when the origin-pull protocol OriginProtocol is http or follow.
     * @param integer $HTTPSOriginPort HTTPS origin port, value ranges from 1–65535. This parameter is required when the origin-pull protocol OriginProtocol is https or follow.
     * @param HostHeaderParameters $UpstreamHostHeader Host Header rewrite configuration for origin-pull
     * @param UpstreamURLRewriteParameters $UpstreamURLRewrite Origin-pull URL rewrite configuration.
     * @param UpstreamRequestParameters $UpstreamRequestParameters Origin Requests parameter configuration.
     * @param UpstreamHTTP2Parameters $UpstreamHTTP2Parameters HTTP2 origin-pull configuration parameters.
     * @param string $PrivateAccess Specify whether access to the private object storage origin server is allowed. This parameter is required when the origin server type is FailoverToCOS or FailoverToS3CompatibleObjectStorage. Valid values:
<li>on: Enable private authentication;</li>
<li>off: Disable private authentication.</li>
     * @param OriginPrivateParameters $PrivateParameters Private authentication parameter. This parameter is valid only when Mode = FailoverToS3CompatibleObjectStorage and PrivateAccess = on.
     * @param string $RedirectURL Redirect target URL. This parameter is required when Mode has a value of FailoverRedirectToURL.
     * @param string $ResponsePageId Response page ID. This parameter is required when Mode value is FailoverCustomResponsePage.
     * @param integer $StatusCode Response status code. This parameter is required when Mode is a value of FailoverRedirectToURL or FailoverCustomResponsePage. Valid values:
<li>When Mode = FailoverRedirectToURL, the parameter value is one of 301, 302, 303, 307, 308.</li>
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
