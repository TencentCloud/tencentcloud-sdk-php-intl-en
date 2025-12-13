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
 * @method string getDomain() Obtain Specifies the target domain name for free certificate application.
 * @method void setDomain(string $Domain) Set Specifies the target domain name for free certificate application.
 * @method string getVerificationMethod() Obtain Specifies the verification method for applying for a free certificate. for detailed verification methods, refer to the [free certificate application documentation](https://www.tencentcloud.comom/document/product/1552/90437?from_cn_redirect=1). valid values:.
<li>http_challenge: specifies the file validation mode for http access. verifies by getting file information from the specified URL of the access domain to complete free certificate application.</li>
<li>dns_challenge: specifies the dns delegation verification method. verifies the free certificate application by adding the designated host record pointing to EdgeOne.</li>

Note: after triggering this api, you need to complete the verification content configuration based on the returned verification information. once configured, you must also verify by calling the <a href = 'https://www.tencentcloud.comom/document/product/1552/124806?from_cn_redirect=1'>check free certificate application result</a> api. after verification passes, the application succeeds. once the application is successful, you can call the <a href = 'https://www.tencentcloud.comom/document/product/1552/80764?from_cn_redirect=1'>configure domain name certificate</a> API to deploy a free certificate for the current domain name.
 * @method void setVerificationMethod(string $VerificationMethod) Set Specifies the verification method for applying for a free certificate. for detailed verification methods, refer to the [free certificate application documentation](https://www.tencentcloud.comom/document/product/1552/90437?from_cn_redirect=1). valid values:.
<li>http_challenge: specifies the file validation mode for http access. verifies by getting file information from the specified URL of the access domain to complete free certificate application.</li>
<li>dns_challenge: specifies the dns delegation verification method. verifies the free certificate application by adding the designated host record pointing to EdgeOne.</li>

Note: after triggering this api, you need to complete the verification content configuration based on the returned verification information. once configured, you must also verify by calling the <a href = 'https://www.tencentcloud.comom/document/product/1552/124806?from_cn_redirect=1'>check free certificate application result</a> api. after verification passes, the application succeeds. once the application is successful, you can call the <a href = 'https://www.tencentcloud.comom/document/product/1552/80764?from_cn_redirect=1'>configure domain name certificate</a> API to deploy a free certificate for the current domain name.
 */
class ApplyFreeCertificateRequest extends AbstractModel
{
    /**
     * @var string Site ID.
     */
    public $ZoneId;

    /**
     * @var string Specifies the target domain name for free certificate application.
     */
    public $Domain;

    /**
     * @var string Specifies the verification method for applying for a free certificate. for detailed verification methods, refer to the [free certificate application documentation](https://www.tencentcloud.comom/document/product/1552/90437?from_cn_redirect=1). valid values:.
<li>http_challenge: specifies the file validation mode for http access. verifies by getting file information from the specified URL of the access domain to complete free certificate application.</li>
<li>dns_challenge: specifies the dns delegation verification method. verifies the free certificate application by adding the designated host record pointing to EdgeOne.</li>

Note: after triggering this api, you need to complete the verification content configuration based on the returned verification information. once configured, you must also verify by calling the <a href = 'https://www.tencentcloud.comom/document/product/1552/124806?from_cn_redirect=1'>check free certificate application result</a> api. after verification passes, the application succeeds. once the application is successful, you can call the <a href = 'https://www.tencentcloud.comom/document/product/1552/80764?from_cn_redirect=1'>configure domain name certificate</a> API to deploy a free certificate for the current domain name.
     */
    public $VerificationMethod;

    /**
     * @param string $ZoneId Site ID.
     * @param string $Domain Specifies the target domain name for free certificate application.
     * @param string $VerificationMethod Specifies the verification method for applying for a free certificate. for detailed verification methods, refer to the [free certificate application documentation](https://www.tencentcloud.comom/document/product/1552/90437?from_cn_redirect=1). valid values:.
<li>http_challenge: specifies the file validation mode for http access. verifies by getting file information from the specified URL of the access domain to complete free certificate application.</li>
<li>dns_challenge: specifies the dns delegation verification method. verifies the free certificate application by adding the designated host record pointing to EdgeOne.</li>

Note: after triggering this api, you need to complete the verification content configuration based on the returned verification information. once configured, you must also verify by calling the <a href = 'https://www.tencentcloud.comom/document/product/1552/124806?from_cn_redirect=1'>check free certificate application result</a> api. after verification passes, the application succeeds. once the application is successful, you can call the <a href = 'https://www.tencentcloud.comom/document/product/1552/80764?from_cn_redirect=1'>configure domain name certificate</a> API to deploy a free certificate for the current domain name.
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
