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
 * ApplyFreeCertificate request structure.
 *
 * @method string getZoneId() Obtain Site ID.
 * @method void setZoneId(string $ZoneId) Set Site ID.
 * @method string getDomain() Obtain Target domain name for free certificate application.
 * @method void setDomain(string $Domain) Set Target domain name for free certificate application.
 * @method string getVerificationMethod() Obtain Verification methods for applying for a free certificate. For detailed verification method descriptions, see [Free Certificate Application Method Documentation](https://www.tencentcloud.com/document/product/1552/90437?from_cn_redirect=1). Valid values:
<li>http_challenge: HTTP access file validation mode, which gets file information by accessing the specified URL of the domain over HTTP to complete the free certificate application verification;</li>
<li>dns_challenge: DNS delegation verification method, which completes free certificate application verification by adding a designated host record to point to EdgeOne.</li>
Note: After triggering this API, you need to complete the verification content configuration based on the returned verification information. Once configured, you also need to verify through the <a href = 'https://www.tencentcloud.com/document/product/1552/124806?from_cn_redirect=1'>Check Free Certificate Application Result</a> API. After verification passes, the application succeeds. Once the free certificate application is successful, you can call the <a href = 'https://www.tencentcloud.com/document/product/1552/80764?from_cn_redirect=1'>Configure Domain Name Certificate</a> API to deploy the free certificate for the current domain name.
 * @method void setVerificationMethod(string $VerificationMethod) Set Verification methods for applying for a free certificate. For detailed verification method descriptions, see [Free Certificate Application Method Documentation](https://www.tencentcloud.com/document/product/1552/90437?from_cn_redirect=1). Valid values:
<li>http_challenge: HTTP access file validation mode, which gets file information by accessing the specified URL of the domain over HTTP to complete the free certificate application verification;</li>
<li>dns_challenge: DNS delegation verification method, which completes free certificate application verification by adding a designated host record to point to EdgeOne.</li>
Note: After triggering this API, you need to complete the verification content configuration based on the returned verification information. Once configured, you also need to verify through the <a href = 'https://www.tencentcloud.com/document/product/1552/124806?from_cn_redirect=1'>Check Free Certificate Application Result</a> API. After verification passes, the application succeeds. Once the free certificate application is successful, you can call the <a href = 'https://www.tencentcloud.com/document/product/1552/80764?from_cn_redirect=1'>Configure Domain Name Certificate</a> API to deploy the free certificate for the current domain name.
 */
class ApplyFreeCertificateRequest extends AbstractModel
{
    /**
     * @var string Site ID.
     */
    public $ZoneId;

    /**
     * @var string Target domain name for free certificate application.
     */
    public $Domain;

    /**
     * @var string Verification methods for applying for a free certificate. For detailed verification method descriptions, see [Free Certificate Application Method Documentation](https://www.tencentcloud.com/document/product/1552/90437?from_cn_redirect=1). Valid values:
<li>http_challenge: HTTP access file validation mode, which gets file information by accessing the specified URL of the domain over HTTP to complete the free certificate application verification;</li>
<li>dns_challenge: DNS delegation verification method, which completes free certificate application verification by adding a designated host record to point to EdgeOne.</li>
Note: After triggering this API, you need to complete the verification content configuration based on the returned verification information. Once configured, you also need to verify through the <a href = 'https://www.tencentcloud.com/document/product/1552/124806?from_cn_redirect=1'>Check Free Certificate Application Result</a> API. After verification passes, the application succeeds. Once the free certificate application is successful, you can call the <a href = 'https://www.tencentcloud.com/document/product/1552/80764?from_cn_redirect=1'>Configure Domain Name Certificate</a> API to deploy the free certificate for the current domain name.
     */
    public $VerificationMethod;

    /**
     * @param string $ZoneId Site ID.
     * @param string $Domain Target domain name for free certificate application.
     * @param string $VerificationMethod Verification methods for applying for a free certificate. For detailed verification method descriptions, see [Free Certificate Application Method Documentation](https://www.tencentcloud.com/document/product/1552/90437?from_cn_redirect=1). Valid values:
<li>http_challenge: HTTP access file validation mode, which gets file information by accessing the specified URL of the domain over HTTP to complete the free certificate application verification;</li>
<li>dns_challenge: DNS delegation verification method, which completes free certificate application verification by adding a designated host record to point to EdgeOne.</li>
Note: After triggering this API, you need to complete the verification content configuration based on the returned verification information. Once configured, you also need to verify through the <a href = 'https://www.tencentcloud.com/document/product/1552/124806?from_cn_redirect=1'>Check Free Certificate Application Result</a> API. After verification passes, the application succeeds. Once the free certificate application is successful, you can call the <a href = 'https://www.tencentcloud.com/document/product/1552/80764?from_cn_redirect=1'>Configure Domain Name Certificate</a> API to deploy the free certificate for the current domain name.
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

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("VerificationMethod",$param) and $param["VerificationMethod"] !== null) {
            $this->VerificationMethod = $param["VerificationMethod"];
        }
    }
}
