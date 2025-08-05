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
 * HTTPS server certificate configuration
 *
 * @method string getCertId() Obtain Specifies the server certificate ID, which originates from the SSL side. you can check the CertId from the [SSL certificate list](https://console.cloud.tencent.com/SSL).

 * @method void setCertId(string $CertId) Set Specifies the server certificate ID, which originates from the SSL side. you can check the CertId from the [SSL certificate list](https://console.cloud.tencent.com/SSL).

 * @method string getAlias() Obtain Certificate remark name.
 * @method void setAlias(string $Alias) Set Certificate remark name.
 * @method string getType() Obtain Certificate type. valid values:.
<Li>Specifies the default certificate.</li>.
<Li>Upload: user upload;</li>.
<li>managed: tencent cloud hosted.</li>.
 * @method void setType(string $Type) Set Certificate type. valid values:.
<Li>Specifies the default certificate.</li>.
<Li>Upload: user upload;</li>.
<li>managed: tencent cloud hosted.</li>.
 * @method string getExpireTime() Obtain Certificate expiration time.
 * @method void setExpireTime(string $ExpireTime) Set Certificate expiration time.
 * @method string getDeployTime() Obtain Specifies the cert deployment time.
 * @method void setDeployTime(string $DeployTime) Set Specifies the cert deployment time.
 * @method string getSignAlgo() Obtain Signature algorithm.
 * @method void setSignAlgo(string $SignAlgo) Set Signature algorithm.
 * @method string getCommonName() Obtain Domain name of the certificate.
 * @method void setCommonName(string $CommonName) Set Domain name of the certificate.
 */
class ServerCertInfo extends AbstractModel
{
    /**
     * @var string Specifies the server certificate ID, which originates from the SSL side. you can check the CertId from the [SSL certificate list](https://console.cloud.tencent.com/SSL).

     */
    public $CertId;

    /**
     * @var string Certificate remark name.
     */
    public $Alias;

    /**
     * @var string Certificate type. valid values:.
<Li>Specifies the default certificate.</li>.
<Li>Upload: user upload;</li>.
<li>managed: tencent cloud hosted.</li>.
     */
    public $Type;

    /**
     * @var string Certificate expiration time.
     */
    public $ExpireTime;

    /**
     * @var string Specifies the cert deployment time.
     */
    public $DeployTime;

    /**
     * @var string Signature algorithm.
     */
    public $SignAlgo;

    /**
     * @var string Domain name of the certificate.
     */
    public $CommonName;

    /**
     * @param string $CertId Specifies the server certificate ID, which originates from the SSL side. you can check the CertId from the [SSL certificate list](https://console.cloud.tencent.com/SSL).

     * @param string $Alias Certificate remark name.
     * @param string $Type Certificate type. valid values:.
<Li>Specifies the default certificate.</li>.
<Li>Upload: user upload;</li>.
<li>managed: tencent cloud hosted.</li>.
     * @param string $ExpireTime Certificate expiration time.
     * @param string $DeployTime Specifies the cert deployment time.
     * @param string $SignAlgo Signature algorithm.
     * @param string $CommonName Domain name of the certificate.
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
