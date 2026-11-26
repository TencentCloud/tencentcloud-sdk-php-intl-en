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
 * Domain information of the inference service.
 *
 * @method string getDomain() Obtain <p>Domain name.</p>
 * @method void setDomain(string $Domain) Set <p>Domain name.</p>
 * @method string getStatus() Obtain <p>Domain name status.</p><p>Enumeration values:</p><ul><li>Online: effective;</li><li>Process: deploying;</li><li>Offline: disabled;</li><li>Init: not applied, site to be activated;</li><li>Forbidden: domain name disabled.</li></ul>
 * @method void setStatus(string $Status) Set <p>Domain name status.</p><p>Enumeration values:</p><ul><li>Online: effective;</li><li>Process: deploying;</li><li>Offline: disabled;</li><li>Init: not applied, site to be activated;</li><li>Forbidden: domain name disabled.</li></ul>
 * @method string getAuthSwitch() Obtain <p>Authentication switch for inference task requests.</p><p>Enumeration values:</p><ul><li>Off: Disable authentication;</li><li>On: Enable authentication.</li></ul><p>Default value: On.</p>
 * @method void setAuthSwitch(string $AuthSwitch) Set <p>Authentication switch for inference task requests.</p><p>Enumeration values:</p><ul><li>Off: Disable authentication;</li><li>On: Enable authentication.</li></ul><p>Default value: On.</p>
 * @method string getCname() Obtain <p>CNAME address.</p><p>To validate the CNAME configuration status of a domain, see the <a href="https://www.tencentcloud.com/document/api/1552/94491?from_cn_redirect=1"> CheckCnameStatus </a> api.</p>
 * @method void setCname(string $Cname) Set <p>CNAME address.</p><p>To validate the CNAME configuration status of a domain, see the <a href="https://www.tencentcloud.com/document/api/1552/94491?from_cn_redirect=1"> CheckCnameStatus </a> api.</p>
 * @method OwnershipVerification getOwnershipVerification() Obtain <p>When the domain name needs to perform ownership verification to continue providing services, this object will carry the information required for the corresponding verification method.</p><p>To verify ownership, see the <a href="https://www.tencentcloud.com/document/api/1552/98879?from_cn_redirect=1"> VerifyOwnership </a> API.</p>
 * @method void setOwnershipVerification(OwnershipVerification $OwnershipVerification) Set <p>When the domain name needs to perform ownership verification to continue providing services, this object will carry the information required for the corresponding verification method.</p><p>To verify ownership, see the <a href="https://www.tencentcloud.com/document/api/1552/98879?from_cn_redirect=1"> VerifyOwnership </a> API.</p>
 * @method HostsCertificate getCertificate() Obtain <p>Domain name certificate information.</p><p>To apply for a free certificate, see the <a href="https://www.tencentcloud.com/document/api/1552/124807?from_cn_redirect=1">ApplyFreeCertificate</a> API;<br>To check the free certificate application result, see the <a href="https://www.tencentcloud.com/document/api/1552/124806?from_cn_redirect=1">CheckFreeCertificateVerification</a> API;<br>To configure the domain name certificate, see the <a href="https://www.tencentcloud.com/document/api/1552/80764?from_cn_redirect=1">ModifyHostsCertificate</a> API.</p>
 * @method void setCertificate(HostsCertificate $Certificate) Set <p>Domain name certificate information.</p><p>To apply for a free certificate, see the <a href="https://www.tencentcloud.com/document/api/1552/124807?from_cn_redirect=1">ApplyFreeCertificate</a> API;<br>To check the free certificate application result, see the <a href="https://www.tencentcloud.com/document/api/1552/124806?from_cn_redirect=1">CheckFreeCertificateVerification</a> API;<br>To configure the domain name certificate, see the <a href="https://www.tencentcloud.com/document/api/1552/80764?from_cn_redirect=1">ModifyHostsCertificate</a> API.</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method string getUpdateTime() Obtain <p>Last modified.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Last modified.</p>
 */
class InferenceDomain extends AbstractModel
{
    /**
     * @var string <p>Domain name.</p>
     */
    public $Domain;

    /**
     * @var string <p>Domain name status.</p><p>Enumeration values:</p><ul><li>Online: effective;</li><li>Process: deploying;</li><li>Offline: disabled;</li><li>Init: not applied, site to be activated;</li><li>Forbidden: domain name disabled.</li></ul>
     */
    public $Status;

    /**
     * @var string <p>Authentication switch for inference task requests.</p><p>Enumeration values:</p><ul><li>Off: Disable authentication;</li><li>On: Enable authentication.</li></ul><p>Default value: On.</p>
     */
    public $AuthSwitch;

    /**
     * @var string <p>CNAME address.</p><p>To validate the CNAME configuration status of a domain, see the <a href="https://www.tencentcloud.com/document/api/1552/94491?from_cn_redirect=1"> CheckCnameStatus </a> api.</p>
     */
    public $Cname;

    /**
     * @var OwnershipVerification <p>When the domain name needs to perform ownership verification to continue providing services, this object will carry the information required for the corresponding verification method.</p><p>To verify ownership, see the <a href="https://www.tencentcloud.com/document/api/1552/98879?from_cn_redirect=1"> VerifyOwnership </a> API.</p>
     */
    public $OwnershipVerification;

    /**
     * @var HostsCertificate <p>Domain name certificate information.</p><p>To apply for a free certificate, see the <a href="https://www.tencentcloud.com/document/api/1552/124807?from_cn_redirect=1">ApplyFreeCertificate</a> API;<br>To check the free certificate application result, see the <a href="https://www.tencentcloud.com/document/api/1552/124806?from_cn_redirect=1">CheckFreeCertificateVerification</a> API;<br>To configure the domain name certificate, see the <a href="https://www.tencentcloud.com/document/api/1552/80764?from_cn_redirect=1">ModifyHostsCertificate</a> API.</p>
     */
    public $Certificate;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Last modified.</p>
     */
    public $UpdateTime;

    /**
     * @param string $Domain <p>Domain name.</p>
     * @param string $Status <p>Domain name status.</p><p>Enumeration values:</p><ul><li>Online: effective;</li><li>Process: deploying;</li><li>Offline: disabled;</li><li>Init: not applied, site to be activated;</li><li>Forbidden: domain name disabled.</li></ul>
     * @param string $AuthSwitch <p>Authentication switch for inference task requests.</p><p>Enumeration values:</p><ul><li>Off: Disable authentication;</li><li>On: Enable authentication.</li></ul><p>Default value: On.</p>
     * @param string $Cname <p>CNAME address.</p><p>To validate the CNAME configuration status of a domain, see the <a href="https://www.tencentcloud.com/document/api/1552/94491?from_cn_redirect=1"> CheckCnameStatus </a> api.</p>
     * @param OwnershipVerification $OwnershipVerification <p>When the domain name needs to perform ownership verification to continue providing services, this object will carry the information required for the corresponding verification method.</p><p>To verify ownership, see the <a href="https://www.tencentcloud.com/document/api/1552/98879?from_cn_redirect=1"> VerifyOwnership </a> API.</p>
     * @param HostsCertificate $Certificate <p>Domain name certificate information.</p><p>To apply for a free certificate, see the <a href="https://www.tencentcloud.com/document/api/1552/124807?from_cn_redirect=1">ApplyFreeCertificate</a> API;<br>To check the free certificate application result, see the <a href="https://www.tencentcloud.com/document/api/1552/124806?from_cn_redirect=1">CheckFreeCertificateVerification</a> API;<br>To configure the domain name certificate, see the <a href="https://www.tencentcloud.com/document/api/1552/80764?from_cn_redirect=1">ModifyHostsCertificate</a> API.</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param string $UpdateTime <p>Last modified.</p>
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AuthSwitch",$param) and $param["AuthSwitch"] !== null) {
            $this->AuthSwitch = $param["AuthSwitch"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("OwnershipVerification",$param) and $param["OwnershipVerification"] !== null) {
            $this->OwnershipVerification = new OwnershipVerification();
            $this->OwnershipVerification->deserialize($param["OwnershipVerification"]);
        }

        if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
            $this->Certificate = new HostsCertificate();
            $this->Certificate->deserialize($param["Certificate"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
