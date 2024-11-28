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
 * ModifyHostsCertificate request structure.
 *
 * @method string getZoneId() Obtain ID of the site.
 * @method void setZoneId(string $ZoneId) Set ID of the site.
 * @method array getHosts() Obtain Domain names that you need to modify the certificate configuration
 * @method void setHosts(array $Hosts) Set Domain names that you need to modify the certificate configuration
 * @method string getMode() Obtain Certificate configuration mode. Values:
<li>`disable`: (Default) Do not configure the certificate</li>
<li>`eofreecert`: Use a free certificate provided by EdgeOne</li>
<li>`sslcert`: Configure an SSL certificate.</li>
 * @method void setMode(string $Mode) Set Certificate configuration mode. Values:
<li>`disable`: (Default) Do not configure the certificate</li>
<li>`eofreecert`: Use a free certificate provided by EdgeOne</li>
<li>`sslcert`: Configure an SSL certificate.</li>
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
     * @var string Certificate configuration mode. Values:
<li>`disable`: (Default) Do not configure the certificate</li>
<li>`eofreecert`: Use a free certificate provided by EdgeOne</li>
<li>`sslcert`: Configure an SSL certificate.</li>
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
     * @param string $ZoneId ID of the site.
     * @param array $Hosts Domain names that you need to modify the certificate configuration
     * @param string $Mode Certificate configuration mode. Values:
<li>`disable`: (Default) Do not configure the certificate</li>
<li>`eofreecert`: Use a free certificate provided by EdgeOne</li>
<li>`sslcert`: Configure an SSL certificate.</li>
     * @param array $ServerCertInfo SSL certificate configuration. This parameter is effective only when the mode is sslcert. You only need to provide the CertId of the corresponding certificate. You can check the CertId from the [SSL Certificate List](https://console.cloud.tencent.com/ssl).
     * @param string $ApplyType Whether the certificate is managed by EdgeOne. Values:
<li>`none`: Not managed by EdgeOne</li>
<li>`apply`: Managed by EdgeOne</li>
Default value: `none`.
     * @param MutualTLS $ClientCertInfo In the mutual authentication scenario, this field represents the client's CA certificate, which is deployed inside the EO node and used for the client to authenticate the EO node. By default, it is disabled. If it is left blank, it indicates retaining the original configuration.
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
    }
}
