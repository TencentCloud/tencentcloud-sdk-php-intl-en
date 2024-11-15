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
 * @method string getCertId() Obtain Server certificate ID, which originates from the SSL side. You can check the CertId from the [SSL Certificate List](https://console.cloud.tencent.com/ssl).

Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method void setCertId(string $CertId) Set Server certificate ID, which originates from the SSL side. You can check the CertId from the [SSL Certificate List](https://console.cloud.tencent.com/ssl).

Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method string getAlias() Obtain Alias of the certificate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAlias(string $Alias) Set Alias of the certificate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain Type of the certificate. Values:
u200c<li>`default`: Default certificate</li>
u200c<li>`upload`: Custom certificate</li>
u200c<li>`managed`: Tencent Cloud-managed certificate</li>
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Type of the certificate. Values:
u200c<li>`default`: Default certificate</li>
u200c<li>`upload`: Custom certificate</li>
u200c<li>`managed`: Tencent Cloud-managed certificate</li>
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getExpireTime() Obtain Time when the certificate expires.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpireTime(string $ExpireTime) Set Time when the certificate expires.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDeployTime() Obtain Time when the certificate is deployed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDeployTime(string $DeployTime) Set Time when the certificate is deployed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSignAlgo() Obtain Signature algorithm.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSignAlgo(string $SignAlgo) Set Signature algorithm.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCommonName() Obtain Domain name of the certificate.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCommonName(string $CommonName) Set Domain name of the certificate.
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class ServerCertInfo extends AbstractModel
{
    /**
     * @var string Server certificate ID, which originates from the SSL side. You can check the CertId from the [SSL Certificate List](https://console.cloud.tencent.com/ssl).

Note: This field may return null, which indicates a failure to obtain a valid value.
     */
    public $CertId;

    /**
     * @var string Alias of the certificate.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Alias;

    /**
     * @var string Type of the certificate. Values:
u200c<li>`default`: Default certificate</li>
u200c<li>`upload`: Custom certificate</li>
u200c<li>`managed`: Tencent Cloud-managed certificate</li>
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string Time when the certificate expires.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpireTime;

    /**
     * @var string Time when the certificate is deployed.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DeployTime;

    /**
     * @var string Signature algorithm.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SignAlgo;

    /**
     * @var string Domain name of the certificate.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $CommonName;

    /**
     * @param string $CertId Server certificate ID, which originates from the SSL side. You can check the CertId from the [SSL Certificate List](https://console.cloud.tencent.com/ssl).

Note: This field may return null, which indicates a failure to obtain a valid value.
     * @param string $Alias Alias of the certificate.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Type Type of the certificate. Values:
u200c<li>`default`: Default certificate</li>
u200c<li>`upload`: Custom certificate</li>
u200c<li>`managed`: Tencent Cloud-managed certificate</li>
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $ExpireTime Time when the certificate expires.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DeployTime Time when the certificate is deployed.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SignAlgo Signature algorithm.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CommonName Domain name of the certificate.
Note: This field may return `null`, indicating that no valid value can be obtained.
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

        if (array_key_exists("CommonName",$param) and $param["CommonName"] !== null) {
            $this->CommonName = $param["CommonName"];
        }
    }
}
