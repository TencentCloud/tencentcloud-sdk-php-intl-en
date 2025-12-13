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
 * @method string getZoneId() Obtain ID of the site.
 * @method void setZoneId(string $ZoneId) Set ID of the site.
 * @method array getHosts() Obtain Domain names that you need to modify the certificate configuration
 * @method void setHosts(array $Hosts) Set Domain names that you need to modify the certificate configuration
 * @method string getMode() Obtain Configures the server certificate mode. valid values:.

- disable: without configuring server certificate.
- eofreecert: specifies to apply for a free certificate through automatic validation and deploy it. for verification methods, see [free certificate application supported verification methods](https://www.tencentcloud.comom/document/product/1552/90437?from_cn_redirect=1).
    - In ns or DNSPod hosting access mode, free certificates can only be applied for via automatic validation.
    - When a free certificate application fails, it can cause deployment failure. you can obtain the failure reason through the <a href = 'https://www.tencentcloud.comom/document/product/1552/124806?from_cn_redirect=1)'>check free certificate application result</a> .
- eofreecert_manual: specifies the deployment of free certificates applied through DNS delegation verification or file verification. before deploying a free certificate, you need to trigger the [apply for free certificate](https://www.tencentcloud.comom/document/product/1552/124807?from_cn_redirect=1)) api to apply for a free certificate. once the application is successful, you can use this enumeration value to deploy the free certificate.
Note: when deploying a free certificate, ensure a successful application for a free certificate already exists. you can check whether a successful application for a free certificate already exists through the <a href = 'https://www.tencentcloud.comom/document/product/1552/124806?from_cn_redirect=1)'>check free certificate application result</a> api.
- sslcert: specifies the configuration of the managed service side certificate.
 * @method void setMode(string $Mode) Set Configures the server certificate mode. valid values:.

- disable: without configuring server certificate.
- eofreecert: specifies to apply for a free certificate through automatic validation and deploy it. for verification methods, see [free certificate application supported verification methods](https://www.tencentcloud.comom/document/product/1552/90437?from_cn_redirect=1).
    - In ns or DNSPod hosting access mode, free certificates can only be applied for via automatic validation.
    - When a free certificate application fails, it can cause deployment failure. you can obtain the failure reason through the <a href = 'https://www.tencentcloud.comom/document/product/1552/124806?from_cn_redirect=1)'>check free certificate application result</a> .
- eofreecert_manual: specifies the deployment of free certificates applied through DNS delegation verification or file verification. before deploying a free certificate, you need to trigger the [apply for free certificate](https://www.tencentcloud.comom/document/product/1552/124807?from_cn_redirect=1)) api to apply for a free certificate. once the application is successful, you can use this enumeration value to deploy the free certificate.
Note: when deploying a free certificate, ensure a successful application for a free certificate already exists. you can check whether a successful application for a free certificate already exists through the <a href = 'https://www.tencentcloud.comom/document/product/1552/124806?from_cn_redirect=1)'>check free certificate application result</a> api.
- sslcert: specifies the configuration of the managed service side certificate.
 * @method array getServerCertInfo() Obtain SSL certificate configuration. This parameter is effective only when the mode is sslcert. You only need to provide the CertId of the corresponding certificate. You can check the CertId from the [SSL Certificate List](https://console.cloud.tencent.com/ssl).
 * @method void setServerCertInfo(array $ServerCertInfo) Set SSL certificate configuration. This parameter is effective only when the mode is sslcert. You only need to provide the CertId of the corresponding certificate. You can check the CertId from the [SSL Certificate List](https://console.cloud.tencent.com/ssl).
 * @method string getApplyType() Obtain Whether the certificate is managed by EdgeOne. Values:
<li>`none`: Not managed by EdgeOne</li>
<li>`apply`: Managed by EdgeOne</li>
Default value: `none`.
 * @method void setApplyType(string $ApplyType) Set Whether the certificate is managed by EdgeOne. Values:
<li>`none`: Not managed by EdgeOne</li>
<li>`apply`: Managed by EdgeOne</li>
Default value: `none`.
 * @method MutualTLS getClientCertInfo() Obtain In the mutual authentication scenario, this field represents the client's CA certificate, which is deployed inside the EO node and used for the client to authenticate the EO node. By default, it is disabled. If it is left blank, it indicates retaining the original configuration.
 * @method void setClientCertInfo(MutualTLS $ClientCertInfo) Set In the mutual authentication scenario, this field represents the client's CA certificate, which is deployed inside the EO node and used for the client to authenticate the EO node. By default, it is disabled. If it is left blank, it indicates retaining the original configuration.
 * @method UpstreamCertInfo getUpstreamCertInfo() Obtain Specifies the certificate carried during EO node origin-pull for origin-pull mutual authentication handshake, off by default. leave blank to indicate retaining the original configuration. this configuration is currently in closed beta testing for the allowlist feature. if you need to use it, please contact us (https://www.tencentcloud.comom/online?from_cn_redirect=1-service).
 * @method void setUpstreamCertInfo(UpstreamCertInfo $UpstreamCertInfo) Set Specifies the certificate carried during EO node origin-pull for origin-pull mutual authentication handshake, off by default. leave blank to indicate retaining the original configuration. this configuration is currently in closed beta testing for the allowlist feature. if you need to use it, please contact us (https://www.tencentcloud.comom/online?from_cn_redirect=1-service).
 */
class ModifyHostsCertificateRequest extends AbstractModel
{
    /**
     * @var string ID of the site.
     */
    public $ZoneId;

    /**
     * @var array Domain names that you need to modify the certificate configuration
     */
    public $Hosts;

    /**
     * @var string Configures the server certificate mode. valid values:.

- disable: without configuring server certificate.
- eofreecert: specifies to apply for a free certificate through automatic validation and deploy it. for verification methods, see [free certificate application supported verification methods](https://www.tencentcloud.comom/document/product/1552/90437?from_cn_redirect=1).
    - In ns or DNSPod hosting access mode, free certificates can only be applied for via automatic validation.
    - When a free certificate application fails, it can cause deployment failure. you can obtain the failure reason through the <a href = 'https://www.tencentcloud.comom/document/product/1552/124806?from_cn_redirect=1)'>check free certificate application result</a> .
- eofreecert_manual: specifies the deployment of free certificates applied through DNS delegation verification or file verification. before deploying a free certificate, you need to trigger the [apply for free certificate](https://www.tencentcloud.comom/document/product/1552/124807?from_cn_redirect=1)) api to apply for a free certificate. once the application is successful, you can use this enumeration value to deploy the free certificate.
Note: when deploying a free certificate, ensure a successful application for a free certificate already exists. you can check whether a successful application for a free certificate already exists through the <a href = 'https://www.tencentcloud.comom/document/product/1552/124806?from_cn_redirect=1)'>check free certificate application result</a> api.
- sslcert: specifies the configuration of the managed service side certificate.
     */
    public $Mode;

    /**
     * @var array SSL certificate configuration. This parameter is effective only when the mode is sslcert. You only need to provide the CertId of the corresponding certificate. You can check the CertId from the [SSL Certificate List](https://console.cloud.tencent.com/ssl).
     */
    public $ServerCertInfo;

    /**
     * @var string Whether the certificate is managed by EdgeOne. Values:
<li>`none`: Not managed by EdgeOne</li>
<li>`apply`: Managed by EdgeOne</li>
Default value: `none`.
     * @deprecated
     */
    public $ApplyType;

    /**
     * @var MutualTLS In the mutual authentication scenario, this field represents the client's CA certificate, which is deployed inside the EO node and used for the client to authenticate the EO node. By default, it is disabled. If it is left blank, it indicates retaining the original configuration.
     */
    public $ClientCertInfo;

    /**
     * @var UpstreamCertInfo Specifies the certificate carried during EO node origin-pull for origin-pull mutual authentication handshake, off by default. leave blank to indicate retaining the original configuration. this configuration is currently in closed beta testing for the allowlist feature. if you need to use it, please contact us (https://www.tencentcloud.comom/online?from_cn_redirect=1-service).
     */
    public $UpstreamCertInfo;

    /**
     * @param string $ZoneId ID of the site.
     * @param array $Hosts Domain names that you need to modify the certificate configuration
     * @param string $Mode Configures the server certificate mode. valid values:.

- disable: without configuring server certificate.
- eofreecert: specifies to apply for a free certificate through automatic validation and deploy it. for verification methods, see [free certificate application supported verification methods](https://www.tencentcloud.comom/document/product/1552/90437?from_cn_redirect=1).
    - In ns or DNSPod hosting access mode, free certificates can only be applied for via automatic validation.
    - When a free certificate application fails, it can cause deployment failure. you can obtain the failure reason through the <a href = 'https://www.tencentcloud.comom/document/product/1552/124806?from_cn_redirect=1)'>check free certificate application result</a> .
- eofreecert_manual: specifies the deployment of free certificates applied through DNS delegation verification or file verification. before deploying a free certificate, you need to trigger the [apply for free certificate](https://www.tencentcloud.comom/document/product/1552/124807?from_cn_redirect=1)) api to apply for a free certificate. once the application is successful, you can use this enumeration value to deploy the free certificate.
Note: when deploying a free certificate, ensure a successful application for a free certificate already exists. you can check whether a successful application for a free certificate already exists through the <a href = 'https://www.tencentcloud.comom/document/product/1552/124806?from_cn_redirect=1)'>check free certificate application result</a> api.
- sslcert: specifies the configuration of the managed service side certificate.
     * @param array $ServerCertInfo SSL certificate configuration. This parameter is effective only when the mode is sslcert. You only need to provide the CertId of the corresponding certificate. You can check the CertId from the [SSL Certificate List](https://console.cloud.tencent.com/ssl).
     * @param string $ApplyType Whether the certificate is managed by EdgeOne. Values:
<li>`none`: Not managed by EdgeOne</li>
<li>`apply`: Managed by EdgeOne</li>
Default value: `none`.
     * @param MutualTLS $ClientCertInfo In the mutual authentication scenario, this field represents the client's CA certificate, which is deployed inside the EO node and used for the client to authenticate the EO node. By default, it is disabled. If it is left blank, it indicates retaining the original configuration.
     * @param UpstreamCertInfo $UpstreamCertInfo Specifies the certificate carried during EO node origin-pull for origin-pull mutual authentication handshake, off by default. leave blank to indicate retaining the original configuration. this configuration is currently in closed beta testing for the allowlist feature. if you need to use it, please contact us (https://www.tencentcloud.comom/online?from_cn_redirect=1-service).
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
