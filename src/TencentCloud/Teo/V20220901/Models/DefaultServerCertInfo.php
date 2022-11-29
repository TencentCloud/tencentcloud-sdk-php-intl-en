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
 * @method string getCertId() Obtain ID of the server certificate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCertId(string $CertId) Set ID of the server certificate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAlias() Obtain Alias of the certificate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAlias(string $Alias) Set Alias of the certificate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain Type of the certificate. Values:
<li>`default`: Default certificate;</li>
<li>`upload`: Custom certificate;</li>
<li>`managed`: Tencent Cloud-managed certificate.</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Type of the certificate. Values:
<li>`default`: Default certificate;</li>
<li>`upload`: Custom certificate;</li>
<li>`managed`: Tencent Cloud-managed certificate.</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExpireTime() Obtain Time when the certificate expires.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpireTime(string $ExpireTime) Set Time when the certificate expires.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEffectiveTime() Obtain Time when the certificate takes effect.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEffectiveTime(string $EffectiveTime) Set Time when the certificate takes effect.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCommonName() Obtain Common name of the certificate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCommonName(string $CommonName) Set Common name of the certificate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getSubjectAltName() Obtain Domain names added to the SAN certificate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubjectAltName(array $SubjectAltName) Set Domain names added to the SAN certificate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Deployment status. Values:
<li>`processing`: Deployment in progress</li>
<li>`deployed`: Deployed</li>
<li>`failed`: Deployment failed</li>
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setStatus(string $Status) Set Deployment status. Values:
<li>`processing`: Deployment in progress</li>
<li>`deployed`: Deployed</li>
<li>`failed`: Deployment failed</li>
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getMessage() Obtain Failure description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMessage(string $Message) Set Failure description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSignAlgo() Obtain Certificate algorithm.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setSignAlgo(string $SignAlgo) Set Certificate algorithm.
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class DefaultServerCertInfo extends AbstractModel
{
    /**
     * @var string ID of the server certificate.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CertId;

    /**
     * @var string Alias of the certificate.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Alias;

    /**
     * @var string Type of the certificate. Values:
<li>`default`: Default certificate;</li>
<li>`upload`: Custom certificate;</li>
<li>`managed`: Tencent Cloud-managed certificate.</li>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string Time when the certificate expires.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpireTime;

    /**
     * @var string Time when the certificate takes effect.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EffectiveTime;

    /**
     * @var string Common name of the certificate.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CommonName;

    /**
     * @var array Domain names added to the SAN certificate.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubjectAltName;

    /**
     * @var string Deployment status. Values:
<li>`processing`: Deployment in progress</li>
<li>`deployed`: Deployed</li>
<li>`failed`: Deployment failed</li>
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Status;

    /**
     * @var string Failure description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Message;

    /**
     * @var string Certificate algorithm.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $SignAlgo;

    /**
     * @param string $CertId ID of the server certificate.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Alias Alias of the certificate.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Type Type of the certificate. Values:
<li>`default`: Default certificate;</li>
<li>`upload`: Custom certificate;</li>
<li>`managed`: Tencent Cloud-managed certificate.</li>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExpireTime Time when the certificate expires.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EffectiveTime Time when the certificate takes effect.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CommonName Common name of the certificate.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $SubjectAltName Domain names added to the SAN certificate.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status Deployment status. Values:
<li>`processing`: Deployment in progress</li>
<li>`deployed`: Deployed</li>
<li>`failed`: Deployment failed</li>
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $Message Failure description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SignAlgo Certificate algorithm.
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

        if (array_key_exists("EffectiveTime",$param) and $param["EffectiveTime"] !== null) {
            $this->EffectiveTime = $param["EffectiveTime"];
        }

        if (array_key_exists("CommonName",$param) and $param["CommonName"] !== null) {
            $this->CommonName = $param["CommonName"];
        }

        if (array_key_exists("SubjectAltName",$param) and $param["SubjectAltName"] !== null) {
            $this->SubjectAltName = $param["SubjectAltName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("SignAlgo",$param) and $param["SignAlgo"] !== null) {
            $this->SignAlgo = $param["SignAlgo"];
        }
    }
}
