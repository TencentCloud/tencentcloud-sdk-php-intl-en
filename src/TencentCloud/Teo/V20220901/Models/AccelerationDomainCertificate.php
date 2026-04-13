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
 * Information of the acceleration domain name certificate.
 *
 * @method string getMode() Obtain The server certificate configuration mode has the following valid values: <ul><li>disable: do not configure a server certificate.</li> <li>eofreecert: apply for a free certificate through automatic verification and deploy it. for verification methods, see: [supported verification methods for free certificate applications](https://www.tencentcloud.comom/document/product/1552/90437?from_cn_redirect=1). - in NS or DNSPod hosting access mode, only the automatic verification method is supported for free certificate applications. - if the free certificate application fails, it will cause deployment failure. you can obtain the reason for the failure through the <a href='https://www.tencentcloud.comom/document/product/1552/124806?from_cn_redirect=1'>check free certificate application result</a> api.</li> <li>eofreecert_manual: deploy a free certificate applied through DNS delegation verification or file verification. before deploying the free certificate, you need to trigger the <a href='https://www.tencentcloud.comom/document/product/1552/124807?from_cn_redirect=1'>apply for free certificate</a> API to apply for a free certificate. once the application is successful, you can deploy the free certificate using this enumeration value.</li> <ul><li>note: when deploying a free certificate, ensure that a successfully applied free certificate already exists. you can check whether a successfully applied free certificate exists through the <a href='https://www.tencentcloud.comom/document/product/1552/124806?from_cn_redirect=1'>check free certificate application result</a> api.</li> </ul> <li>sslcert: configure an SSL managed server-side certificate.</li></ul>.
 * @method void setMode(string $Mode) Set The server certificate configuration mode has the following valid values: <ul><li>disable: do not configure a server certificate.</li> <li>eofreecert: apply for a free certificate through automatic verification and deploy it. for verification methods, see: [supported verification methods for free certificate applications](https://www.tencentcloud.comom/document/product/1552/90437?from_cn_redirect=1). - in NS or DNSPod hosting access mode, only the automatic verification method is supported for free certificate applications. - if the free certificate application fails, it will cause deployment failure. you can obtain the reason for the failure through the <a href='https://www.tencentcloud.comom/document/product/1552/124806?from_cn_redirect=1'>check free certificate application result</a> api.</li> <li>eofreecert_manual: deploy a free certificate applied through DNS delegation verification or file verification. before deploying the free certificate, you need to trigger the <a href='https://www.tencentcloud.comom/document/product/1552/124807?from_cn_redirect=1'>apply for free certificate</a> API to apply for a free certificate. once the application is successful, you can deploy the free certificate using this enumeration value.</li> <ul><li>note: when deploying a free certificate, ensure that a successfully applied free certificate already exists. you can check whether a successfully applied free certificate exists through the <a href='https://www.tencentcloud.comom/document/product/1552/124806?from_cn_redirect=1'>check free certificate application result</a> api.</li> </ul> <li>sslcert: configure an SSL managed server-side certificate.</li></ul>.
 * @method array getList() Obtain List of server certificates. The relevant certificates are deployed on the entrance side of the EO.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method void setList(array $List) Set List of server certificates. The relevant certificates are deployed on the entrance side of the EO.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method MutualTLS getClientCertInfo() Obtain In the edge mutual authentication scenario, this field represents the client's CA certificate, which is deployed inside the EO node and used for EO node authentication of the client certificate.
 * @method void setClientCertInfo(MutualTLS $ClientCertInfo) Set In the edge mutual authentication scenario, this field represents the client's CA certificate, which is deployed inside the EO node and used for EO node authentication of the client certificate.
 * @method UpstreamCertInfo getUpstreamCertInfo() Obtain Specifies whether to enable or disable origin-pull mutual authentication and origin certificate verification. the certificate for origin-pull mutual authentication is carried during EO node origin-pull, and the origin server can choose to validate this certificate to ensure the request originates from a trusted EO node. when origin certificate verification is enabled, the certificate configuration is used for the EO node to verify whether the origin certificate is trustworthy.
 * @method void setUpstreamCertInfo(UpstreamCertInfo $UpstreamCertInfo) Set Specifies whether to enable or disable origin-pull mutual authentication and origin certificate verification. the certificate for origin-pull mutual authentication is carried during EO node origin-pull, and the origin server can choose to validate this certificate to ensure the request originates from a trusted EO node. when origin certificate verification is enabled, the certificate configuration is used for the EO node to verify whether the origin certificate is trustworthy.
 */
class AccelerationDomainCertificate extends AbstractModel
{
    /**
     * @var string The server certificate configuration mode has the following valid values: <ul><li>disable: do not configure a server certificate.</li> <li>eofreecert: apply for a free certificate through automatic verification and deploy it. for verification methods, see: [supported verification methods for free certificate applications](https://www.tencentcloud.comom/document/product/1552/90437?from_cn_redirect=1). - in NS or DNSPod hosting access mode, only the automatic verification method is supported for free certificate applications. - if the free certificate application fails, it will cause deployment failure. you can obtain the reason for the failure through the <a href='https://www.tencentcloud.comom/document/product/1552/124806?from_cn_redirect=1'>check free certificate application result</a> api.</li> <li>eofreecert_manual: deploy a free certificate applied through DNS delegation verification or file verification. before deploying the free certificate, you need to trigger the <a href='https://www.tencentcloud.comom/document/product/1552/124807?from_cn_redirect=1'>apply for free certificate</a> API to apply for a free certificate. once the application is successful, you can deploy the free certificate using this enumeration value.</li> <ul><li>note: when deploying a free certificate, ensure that a successfully applied free certificate already exists. you can check whether a successfully applied free certificate exists through the <a href='https://www.tencentcloud.comom/document/product/1552/124806?from_cn_redirect=1'>check free certificate application result</a> api.</li> </ul> <li>sslcert: configure an SSL managed server-side certificate.</li></ul>.
     */
    public $Mode;

    /**
     * @var array List of server certificates. The relevant certificates are deployed on the entrance side of the EO.
Note: This field may return null, which indicates a failure to obtain a valid value.
     */
    public $List;

    /**
     * @var MutualTLS In the edge mutual authentication scenario, this field represents the client's CA certificate, which is deployed inside the EO node and used for EO node authentication of the client certificate.
     */
    public $ClientCertInfo;

    /**
     * @var UpstreamCertInfo Specifies whether to enable or disable origin-pull mutual authentication and origin certificate verification. the certificate for origin-pull mutual authentication is carried during EO node origin-pull, and the origin server can choose to validate this certificate to ensure the request originates from a trusted EO node. when origin certificate verification is enabled, the certificate configuration is used for the EO node to verify whether the origin certificate is trustworthy.
     */
    public $UpstreamCertInfo;

    /**
     * @param string $Mode The server certificate configuration mode has the following valid values: <ul><li>disable: do not configure a server certificate.</li> <li>eofreecert: apply for a free certificate through automatic verification and deploy it. for verification methods, see: [supported verification methods for free certificate applications](https://www.tencentcloud.comom/document/product/1552/90437?from_cn_redirect=1). - in NS or DNSPod hosting access mode, only the automatic verification method is supported for free certificate applications. - if the free certificate application fails, it will cause deployment failure. you can obtain the reason for the failure through the <a href='https://www.tencentcloud.comom/document/product/1552/124806?from_cn_redirect=1'>check free certificate application result</a> api.</li> <li>eofreecert_manual: deploy a free certificate applied through DNS delegation verification or file verification. before deploying the free certificate, you need to trigger the <a href='https://www.tencentcloud.comom/document/product/1552/124807?from_cn_redirect=1'>apply for free certificate</a> API to apply for a free certificate. once the application is successful, you can deploy the free certificate using this enumeration value.</li> <ul><li>note: when deploying a free certificate, ensure that a successfully applied free certificate already exists. you can check whether a successfully applied free certificate exists through the <a href='https://www.tencentcloud.comom/document/product/1552/124806?from_cn_redirect=1'>check free certificate application result</a> api.</li> </ul> <li>sslcert: configure an SSL managed server-side certificate.</li></ul>.
     * @param array $List List of server certificates. The relevant certificates are deployed on the entrance side of the EO.
Note: This field may return null, which indicates a failure to obtain a valid value.
     * @param MutualTLS $ClientCertInfo In the edge mutual authentication scenario, this field represents the client's CA certificate, which is deployed inside the EO node and used for EO node authentication of the client certificate.
     * @param UpstreamCertInfo $UpstreamCertInfo Specifies whether to enable or disable origin-pull mutual authentication and origin certificate verification. the certificate for origin-pull mutual authentication is carried during EO node origin-pull, and the origin server can choose to validate this certificate to ensure the request originates from a trusted EO node. when origin certificate verification is enabled, the certificate configuration is used for the EO node to verify whether the origin certificate is trustworthy.
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

        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new CertificateInfo();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }

        if (array_key_exists("ClientCertInfo",$param) and $param["ClientCertInfo"] !== null) {
            $this->ClientCertInfo = new MutualTLS();
            $this->ClientCertInfo->deserialize($param["ClientCertInfo"]);
        }

        if (array_key_exists("UpstreamCertInfo",$param) and $param["UpstreamCertInfo"] !== null) {
            $this->UpstreamCertInfo = new UpstreamCertInfo();
            $this->UpstreamCertInfo->deserialize($param["UpstreamCertInfo"]);
        }
    }
}
