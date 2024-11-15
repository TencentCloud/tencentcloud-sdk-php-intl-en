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
 * HTTPS server certificate configuration
 *
 * @method string getCertId() Obtain Certificate ID, which originates from the SSL side. You can check the CertId from the [SSL Certificate List](https://console.cloud.tencent.com/ssl).
 * @method void setCertId(string $CertId) Set Certificate ID, which originates from the SSL side. You can check the CertId from the [SSL Certificate List](https://console.cloud.tencent.com/ssl).
 * @method string getAlias() Obtain Alias of the certificate.
 * @method void setAlias(string $Alias) Set Alias of the certificate.
 * @method string getType() Obtain Type of the certificate. Values:
<li>`default`: Default certificate</li>
<li>`upload`: Specified certificate</li>
<li>`managed`: Tencent Cloud-managed certificate</li>
 * @method void setType(string $Type) Set Type of the certificate. Values:
<li>`default`: Default certificate</li>
<li>`upload`: Specified certificate</li>
<li>`managed`: Tencent Cloud-managed certificate</li>
 * @method string getExpireTime() Obtain The certificate expiration time.
 * @method void setExpireTime(string $ExpireTime) Set The certificate expiration time.
 * @method string getDeployTime() Obtain Time when the certificate is deployed.
 * @method void setDeployTime(string $DeployTime) Set Time when the certificate is deployed.
 * @method string getSignAlgo() Obtain Signature algorithm.
 * @method void setSignAlgo(string $SignAlgo) Set Signature algorithm.
 * @method string getStatus() Obtain Status of the certificate. Values:
u200c<li>`deployed`: The deployment has completed</li>
u200c<li>`processing`: Deployment in progress</li>
u200c<li>`applying`: Application in progress</li>
u200c<li>`failed`: Application rejected</li>
<li>`issued`: Binding failed.</li>
 * @method void setStatus(string $Status) Set Status of the certificate. Values:
u200c<li>`deployed`: The deployment has completed</li>
u200c<li>`processing`: Deployment in progress</li>
u200c<li>`applying`: Application in progress</li>
u200c<li>`failed`: Application rejected</li>
<li>`issued`: Binding failed.</li>
 */
class CertificateInfo extends AbstractModel
{
    /**
     * @var string Certificate ID, which originates from the SSL side. You can check the CertId from the [SSL Certificate List](https://console.cloud.tencent.com/ssl).
     */
    public $CertId;

    /**
     * @var string Alias of the certificate.
     */
    public $Alias;

    /**
     * @var string Type of the certificate. Values:
<li>`default`: Default certificate</li>
<li>`upload`: Specified certificate</li>
<li>`managed`: Tencent Cloud-managed certificate</li>
     */
    public $Type;

    /**
     * @var string The certificate expiration time.
     */
    public $ExpireTime;

    /**
     * @var string Time when the certificate is deployed.
     */
    public $DeployTime;

    /**
     * @var string Signature algorithm.
     */
    public $SignAlgo;

    /**
     * @var string Status of the certificate. Values:
u200c<li>`deployed`: The deployment has completed</li>
u200c<li>`processing`: Deployment in progress</li>
u200c<li>`applying`: Application in progress</li>
u200c<li>`failed`: Application rejected</li>
<li>`issued`: Binding failed.</li>
     */
    public $Status;

    /**
     * @param string $CertId Certificate ID, which originates from the SSL side. You can check the CertId from the [SSL Certificate List](https://console.cloud.tencent.com/ssl).
     * @param string $Alias Alias of the certificate.
     * @param string $Type Type of the certificate. Values:
<li>`default`: Default certificate</li>
<li>`upload`: Specified certificate</li>
<li>`managed`: Tencent Cloud-managed certificate</li>
     * @param string $ExpireTime The certificate expiration time.
     * @param string $DeployTime Time when the certificate is deployed.
     * @param string $SignAlgo Signature algorithm.
     * @param string $Status Status of the certificate. Values:
u200c<li>`deployed`: The deployment has completed</li>
u200c<li>`processing`: Deployment in progress</li>
u200c<li>`applying`: Application in progress</li>
u200c<li>`failed`: Application rejected</li>
<li>`issued`: Binding failed.</li>
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
        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("DeployTime",$param) and $param["DeployTime"] !== null) {
            $this->DeployTime = $param["DeployTime"];
        }

        if (array_key_exists("SignAlgo",$param) and $param["SignAlgo"] !== null) {
            $this->SignAlgo = $param["SignAlgo"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
