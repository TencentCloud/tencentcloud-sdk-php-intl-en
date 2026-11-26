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
 * ModifyHostsCertificate request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method array getHosts() Obtain Acceleration domain name whose certificate configuration needs to be modified.
 * @method void setHosts(array $Hosts) Set Acceleration domain name whose certificate configuration needs to be modified.
 * @method string getMode() Obtain Mode for configuring the server certificate. Valid values:
<ul><li>disable: without configuring server certificate;</li>
<li>eofreecert: apply for a free certificate through automatic validation and deploy it. For verification methods, see [verification methods supported for free certificate application](https://www.tencentcloud.com/document/product/1552/90437?from_cn_redirect=1)</li>

-In NS or DNSPod hosting access mode, free certificate application is only supported via automatic validation.
- If a free certificate application fails, it will cause certificate deployment failure. You can obtain the failure reason through the <a href = 'https://www.tencentcloud.com/document/product/1552/124806?from_cn_redirect=1'>Check Free Certificate Application Result</a> API.</li>
</ul><li>eofreecert_manual: deploy a free certificate applied through DNS delegated verification or file validation. Before deploying the free certificate, you need to trigger the <a href = 'https://www.tencentcloud.com/document/product/1552/124807?from_cn_redirect=1'>Apply for Free Certificate</a> API to apply for a free certificate. After a successful application, you can use this enumeration value to deploy the free certificate;</li>
<ul><li>Note: When deploying a free certificate, ensure that a successfully applied free certificate already exists. You can check whether a successfully applied free certificate already exists through the <a href = 'https://www.tencentcloud.com/document/product/1552/124806?from_cn_redirect=1'>Check Free Certificate Application Result</a> API.</li>
</ul><li>sslcert: Configure an SSL managed service side certificate.</li>
 * @method void setMode(string $Mode) Set Mode for configuring the server certificate. Valid values:
<ul><li>disable: without configuring server certificate;</li>
<li>eofreecert: apply for a free certificate through automatic validation and deploy it. For verification methods, see [verification methods supported for free certificate application](https://www.tencentcloud.com/document/product/1552/90437?from_cn_redirect=1)</li>

-In NS or DNSPod hosting access mode, free certificate application is only supported via automatic validation.
- If a free certificate application fails, it will cause certificate deployment failure. You can obtain the failure reason through the <a href = 'https://www.tencentcloud.com/document/product/1552/124806?from_cn_redirect=1'>Check Free Certificate Application Result</a> API.</li>
</ul><li>eofreecert_manual: deploy a free certificate applied through DNS delegated verification or file validation. Before deploying the free certificate, you need to trigger the <a href = 'https://www.tencentcloud.com/document/product/1552/124807?from_cn_redirect=1'>Apply for Free Certificate</a> API to apply for a free certificate. After a successful application, you can use this enumeration value to deploy the free certificate;</li>
<ul><li>Note: When deploying a free certificate, ensure that a successfully applied free certificate already exists. You can check whether a successfully applied free certificate already exists through the <a href = 'https://www.tencentcloud.com/document/product/1552/124806?from_cn_redirect=1'>Check Free Certificate Application Result</a> API.</li>
</ul><li>sslcert: Configure an SSL managed service side certificate.</li>
 * @method array getServerCertInfo() Obtain SSL certificate configuration. This parameter is effective only when the mode is sslcert. You only need to provide the CertId of the corresponding certificate. You can check the CertId from the [SSL Certificate List](https://console.cloud.tencent.com/ssl).
 * @method void setServerCertInfo(array $ServerCertInfo) Set SSL certificate configuration. This parameter is effective only when the mode is sslcert. You only need to provide the CertId of the corresponding certificate. You can check the CertId from the [SSL Certificate List](https://console.cloud.tencent.com/ssl).
 * @method string getApplyType() Obtain Managed type. Valid values:
<li>none: Do not manage EO;</li>
<li>apply: manage EO</li>
If this field is not specified, the default value 'none' will be used.
 * @method void setApplyType(string $ApplyType) Set Managed type. Valid values:
<li>none: Do not manage EO;</li>
<li>apply: manage EO</li>
If this field is not specified, the default value 'none' will be used.
 * @method MutualTLS getClientCertInfo() Obtain In the mutual authentication scenario, this field represents the client's CA certificate, which is deployed inside the EO node and used for the client to authenticate the EO node. By default, it is disabled. If it is left blank, it indicates retaining the original configuration.
 * @method void setClientCertInfo(MutualTLS $ClientCertInfo) Set In the mutual authentication scenario, this field represents the client's CA certificate, which is deployed inside the EO node and used for the client to authenticate the EO node. By default, it is disabled. If it is left blank, it indicates retaining the original configuration.
 * @method UpstreamCertInfo getUpstreamCertInfo() Obtain Used to enable or disable origin-pull mutual authentication and origin certificate verification respectively. Off by default. Leave blank to indicate retaining the original configuration. The origin-pull mutual authentication configuration is currently in internal allowlist testing. If needed, contact us (https://www.tencentcloud.com/online?from_cn_redirect=1-service).
 * @method void setUpstreamCertInfo(UpstreamCertInfo $UpstreamCertInfo) Set Used to enable or disable origin-pull mutual authentication and origin certificate verification respectively. Off by default. Leave blank to indicate retaining the original configuration. The origin-pull mutual authentication configuration is currently in internal allowlist testing. If needed, contact us (https://www.tencentcloud.com/online?from_cn_redirect=1-service).
 */
class ModifyHostsCertificateRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var array Acceleration domain name whose certificate configuration needs to be modified.
     */
    public $Hosts;

    /**
     * @var string Mode for configuring the server certificate. Valid values:
<ul><li>disable: without configuring server certificate;</li>
<li>eofreecert: apply for a free certificate through automatic validation and deploy it. For verification methods, see [verification methods supported for free certificate application](https://www.tencentcloud.com/document/product/1552/90437?from_cn_redirect=1)</li>

-In NS or DNSPod hosting access mode, free certificate application is only supported via automatic validation.
- If a free certificate application fails, it will cause certificate deployment failure. You can obtain the failure reason through the <a href = 'https://www.tencentcloud.com/document/product/1552/124806?from_cn_redirect=1'>Check Free Certificate Application Result</a> API.</li>
</ul><li>eofreecert_manual: deploy a free certificate applied through DNS delegated verification or file validation. Before deploying the free certificate, you need to trigger the <a href = 'https://www.tencentcloud.com/document/product/1552/124807?from_cn_redirect=1'>Apply for Free Certificate</a> API to apply for a free certificate. After a successful application, you can use this enumeration value to deploy the free certificate;</li>
<ul><li>Note: When deploying a free certificate, ensure that a successfully applied free certificate already exists. You can check whether a successfully applied free certificate already exists through the <a href = 'https://www.tencentcloud.com/document/product/1552/124806?from_cn_redirect=1'>Check Free Certificate Application Result</a> API.</li>
</ul><li>sslcert: Configure an SSL managed service side certificate.</li>
     */
    public $Mode;

    /**
     * @var array SSL certificate configuration. This parameter is effective only when the mode is sslcert. You only need to provide the CertId of the corresponding certificate. You can check the CertId from the [SSL Certificate List](https://console.cloud.tencent.com/ssl).
     */
    public $ServerCertInfo;

    /**
     * @var string Managed type. Valid values:
<li>none: Do not manage EO;</li>
<li>apply: manage EO</li>
If this field is not specified, the default value 'none' will be used.
     * @deprecated
     */
    public $ApplyType;

    /**
     * @var MutualTLS In the mutual authentication scenario, this field represents the client's CA certificate, which is deployed inside the EO node and used for the client to authenticate the EO node. By default, it is disabled. If it is left blank, it indicates retaining the original configuration.
     */
    public $ClientCertInfo;

    /**
     * @var UpstreamCertInfo Used to enable or disable origin-pull mutual authentication and origin certificate verification respectively. Off by default. Leave blank to indicate retaining the original configuration. The origin-pull mutual authentication configuration is currently in internal allowlist testing. If needed, contact us (https://www.tencentcloud.com/online?from_cn_redirect=1-service).
     */
    public $UpstreamCertInfo;

    /**
     * @param string $ZoneId Zone ID.
     * @param array $Hosts Acceleration domain name whose certificate configuration needs to be modified.
     * @param string $Mode Mode for configuring the server certificate. Valid values:
<ul><li>disable: without configuring server certificate;</li>
<li>eofreecert: apply for a free certificate through automatic validation and deploy it. For verification methods, see [verification methods supported for free certificate application](https://www.tencentcloud.com/document/product/1552/90437?from_cn_redirect=1)</li>

-In NS or DNSPod hosting access mode, free certificate application is only supported via automatic validation.
- If a free certificate application fails, it will cause certificate deployment failure. You can obtain the failure reason through the <a href = 'https://www.tencentcloud.com/document/product/1552/124806?from_cn_redirect=1'>Check Free Certificate Application Result</a> API.</li>
</ul><li>eofreecert_manual: deploy a free certificate applied through DNS delegated verification or file validation. Before deploying the free certificate, you need to trigger the <a href = 'https://www.tencentcloud.com/document/product/1552/124807?from_cn_redirect=1'>Apply for Free Certificate</a> API to apply for a free certificate. After a successful application, you can use this enumeration value to deploy the free certificate;</li>
<ul><li>Note: When deploying a free certificate, ensure that a successfully applied free certificate already exists. You can check whether a successfully applied free certificate already exists through the <a href = 'https://www.tencentcloud.com/document/product/1552/124806?from_cn_redirect=1'>Check Free Certificate Application Result</a> API.</li>
</ul><li>sslcert: Configure an SSL managed service side certificate.</li>
     * @param array $ServerCertInfo SSL certificate configuration. This parameter is effective only when the mode is sslcert. You only need to provide the CertId of the corresponding certificate. You can check the CertId from the [SSL Certificate List](https://console.cloud.tencent.com/ssl).
     * @param string $ApplyType Managed type. Valid values:
<li>none: Do not manage EO;</li>
<li>apply: manage EO</li>
If this field is not specified, the default value 'none' will be used.
     * @param MutualTLS $ClientCertInfo In the mutual authentication scenario, this field represents the client's CA certificate, which is deployed inside the EO node and used for the client to authenticate the EO node. By default, it is disabled. If it is left blank, it indicates retaining the original configuration.
     * @param UpstreamCertInfo $UpstreamCertInfo Used to enable or disable origin-pull mutual authentication and origin certificate verification respectively. Off by default. Leave blank to indicate retaining the original configuration. The origin-pull mutual authentication configuration is currently in internal allowlist testing. If needed, contact us (https://www.tencentcloud.com/online?from_cn_redirect=1-service).
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

        if (array_key_exists("Hosts",$param) and $param["Hosts"] !== null) {
            $this->Hosts = $param["Hosts"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("ServerCertInfo",$param) and $param["ServerCertInfo"] !== null) {
            $this->ServerCertInfo = [];
            foreach ($param["ServerCertInfo"] as $key => $value){
                $obj = new ServerCertInfo();
                $obj->deserialize($value);
                array_push($this->ServerCertInfo, $obj);
            }
        }

        if (array_key_exists("ApplyType",$param) and $param["ApplyType"] !== null) {
            $this->ApplyType = $param["ApplyType"];
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
