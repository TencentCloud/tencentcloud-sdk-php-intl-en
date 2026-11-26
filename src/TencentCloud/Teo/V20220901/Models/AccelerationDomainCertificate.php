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
 * Certificate information of the acceleration domain name.
 *
 * @method string getMode() Obtain Mode for configuring the server certificate. Valid values: <ul><li>disable: Do not configure a server certificate.</li> <li>eofreecert: Apply for a free certificate through automatic verification and deploy it. For details on the verification method, see [Supported Verification Methods for Free Certificate Application](https://www.tencentcloud.com/document/product/1552/90437?from_cn_redirect=1). - In NS or DNSPod hosting access mode, free certificates can only be applied for through automatic verification. - If the free certificate application fails, the certificate deployment will fail. You can obtain the failure reason through the <a href = 'https://www.tencentcloud.com/document/product/1552/124806?from_cn_redirect=1'>Check Free Certificate Application Result</a> API.</li><li>eofreecert_manual: Deploy a free certificate applied for through DNS delegated verification or file verification. Before deploying a free certificate, you need to trigger the <a href = 'https://www.tencentcloud.com/document/product/1552/124807?from_cn_redirect=1'>Apply for Free Certificate</a> API to apply for a free certificate. After the free certificate application succeeds, you can use this enumeration value to deploy the free certificate.</li> <ul><li>Note: When deploying a free certificate, ensure that a successfully applied free certificate already exists. You can check whether a successfully applied free certificate already exists through the <a href = 'https://www.tencentcloud.com/document/product/1552/124806?from_cn_redirect=1'>Check Free Certificate Application Result</a> API.</li> </ul> <li>sslcert: Configure an SSL managed server certificate.</li></ul>
 * @method void setMode(string $Mode) Set Mode for configuring the server certificate. Valid values: <ul><li>disable: Do not configure a server certificate.</li> <li>eofreecert: Apply for a free certificate through automatic verification and deploy it. For details on the verification method, see [Supported Verification Methods for Free Certificate Application](https://www.tencentcloud.com/document/product/1552/90437?from_cn_redirect=1). - In NS or DNSPod hosting access mode, free certificates can only be applied for through automatic verification. - If the free certificate application fails, the certificate deployment will fail. You can obtain the failure reason through the <a href = 'https://www.tencentcloud.com/document/product/1552/124806?from_cn_redirect=1'>Check Free Certificate Application Result</a> API.</li><li>eofreecert_manual: Deploy a free certificate applied for through DNS delegated verification or file verification. Before deploying a free certificate, you need to trigger the <a href = 'https://www.tencentcloud.com/document/product/1552/124807?from_cn_redirect=1'>Apply for Free Certificate</a> API to apply for a free certificate. After the free certificate application succeeds, you can use this enumeration value to deploy the free certificate.</li> <ul><li>Note: When deploying a free certificate, ensure that a successfully applied free certificate already exists. You can check whether a successfully applied free certificate already exists through the <a href = 'https://www.tencentcloud.com/document/product/1552/124806?from_cn_redirect=1'>Check Free Certificate Application Result</a> API.</li> </ul> <li>sslcert: Configure an SSL managed server certificate.</li></ul>
 * @method array getList() Obtain List of server certificates. The related certificates are deployed at the EO entry side.
 * @method void setList(array $List) Set List of server certificates. The related certificates are deployed at the EO entry side.
 * @method MutualTLS getClientCertInfo() Obtain In the edge mutual authentication scenario, this field represents the client's CA certificate, which is deployed inside the EO node and used for EO node authentication of the client certificate.
 * @method void setClientCertInfo(MutualTLS $ClientCertInfo) Set In the edge mutual authentication scenario, this field represents the client's CA certificate, which is deployed inside the EO node and used for EO node authentication of the client certificate.
 * @method UpstreamCertInfo getUpstreamCertInfo() Obtain Used to enable or disable origin-pull mutual authentication and origin certificate verification. The certificate for origin-pull mutual authentication is carried during EO origin-pull. The origin server can choose to verify this certificate to ensure the request originates from a trusted EO node. When origin certificate verification is enabled, the certificate configuration is used for EO nodes to verify whether the origin certificate is trustworthy.
 * @method void setUpstreamCertInfo(UpstreamCertInfo $UpstreamCertInfo) Set Used to enable or disable origin-pull mutual authentication and origin certificate verification. The certificate for origin-pull mutual authentication is carried during EO origin-pull. The origin server can choose to verify this certificate to ensure the request originates from a trusted EO node. When origin certificate verification is enabled, the certificate configuration is used for EO nodes to verify whether the origin certificate is trustworthy.
 */
class AccelerationDomainCertificate extends AbstractModel
{
    /**
     * @var string Mode for configuring the server certificate. Valid values: <ul><li>disable: Do not configure a server certificate.</li> <li>eofreecert: Apply for a free certificate through automatic verification and deploy it. For details on the verification method, see [Supported Verification Methods for Free Certificate Application](https://www.tencentcloud.com/document/product/1552/90437?from_cn_redirect=1). - In NS or DNSPod hosting access mode, free certificates can only be applied for through automatic verification. - If the free certificate application fails, the certificate deployment will fail. You can obtain the failure reason through the <a href = 'https://www.tencentcloud.com/document/product/1552/124806?from_cn_redirect=1'>Check Free Certificate Application Result</a> API.</li><li>eofreecert_manual: Deploy a free certificate applied for through DNS delegated verification or file verification. Before deploying a free certificate, you need to trigger the <a href = 'https://www.tencentcloud.com/document/product/1552/124807?from_cn_redirect=1'>Apply for Free Certificate</a> API to apply for a free certificate. After the free certificate application succeeds, you can use this enumeration value to deploy the free certificate.</li> <ul><li>Note: When deploying a free certificate, ensure that a successfully applied free certificate already exists. You can check whether a successfully applied free certificate already exists through the <a href = 'https://www.tencentcloud.com/document/product/1552/124806?from_cn_redirect=1'>Check Free Certificate Application Result</a> API.</li> </ul> <li>sslcert: Configure an SSL managed server certificate.</li></ul>
     */
    public $Mode;

    /**
     * @var array List of server certificates. The related certificates are deployed at the EO entry side.
     */
    public $List;

    /**
     * @var MutualTLS In the edge mutual authentication scenario, this field represents the client's CA certificate, which is deployed inside the EO node and used for EO node authentication of the client certificate.
     */
    public $ClientCertInfo;

    /**
     * @var UpstreamCertInfo Used to enable or disable origin-pull mutual authentication and origin certificate verification. The certificate for origin-pull mutual authentication is carried during EO origin-pull. The origin server can choose to verify this certificate to ensure the request originates from a trusted EO node. When origin certificate verification is enabled, the certificate configuration is used for EO nodes to verify whether the origin certificate is trustworthy.
     */
    public $UpstreamCertInfo;

    /**
     * @param string $Mode Mode for configuring the server certificate. Valid values: <ul><li>disable: Do not configure a server certificate.</li> <li>eofreecert: Apply for a free certificate through automatic verification and deploy it. For details on the verification method, see [Supported Verification Methods for Free Certificate Application](https://www.tencentcloud.com/document/product/1552/90437?from_cn_redirect=1). - In NS or DNSPod hosting access mode, free certificates can only be applied for through automatic verification. - If the free certificate application fails, the certificate deployment will fail. You can obtain the failure reason through the <a href = 'https://www.tencentcloud.com/document/product/1552/124806?from_cn_redirect=1'>Check Free Certificate Application Result</a> API.</li><li>eofreecert_manual: Deploy a free certificate applied for through DNS delegated verification or file verification. Before deploying a free certificate, you need to trigger the <a href = 'https://www.tencentcloud.com/document/product/1552/124807?from_cn_redirect=1'>Apply for Free Certificate</a> API to apply for a free certificate. After the free certificate application succeeds, you can use this enumeration value to deploy the free certificate.</li> <ul><li>Note: When deploying a free certificate, ensure that a successfully applied free certificate already exists. You can check whether a successfully applied free certificate already exists through the <a href = 'https://www.tencentcloud.com/document/product/1552/124806?from_cn_redirect=1'>Check Free Certificate Application Result</a> API.</li> </ul> <li>sslcert: Configure an SSL managed server certificate.</li></ul>
     * @param array $List List of server certificates. The related certificates are deployed at the EO entry side.
     * @param MutualTLS $ClientCertInfo In the edge mutual authentication scenario, this field represents the client's CA certificate, which is deployed inside the EO node and used for EO node authentication of the client certificate.
     * @param UpstreamCertInfo $UpstreamCertInfo Used to enable or disable origin-pull mutual authentication and origin certificate verification. The certificate for origin-pull mutual authentication is carried during EO origin-pull. The origin server can choose to verify this certificate to ensure the request originates from a trusted EO node. When origin certificate verification is enabled, the certificate configuration is used for EO nodes to verify whether the origin certificate is trustworthy.
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
