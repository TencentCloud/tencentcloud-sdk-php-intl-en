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
 * https server certificate configuration
 *
 * @method string getCertId() Obtain Server certificate ID.
 * @method void setCertId(string $CertId) Set Server certificate ID.
 * @method string getAlias() Obtain Certificate remark name.
 * @method void setAlias(string $Alias) Set Certificate remark name.
 * @method string getType() Obtain Certificate type. Valid values:
<li>`default`: Default certificate;</li>
<li>`upload`: External certificate;</li>
<li>`managed`: Tencent Cloud managed certificate.</li>
 * @method void setType(string $Type) Set Certificate type. Valid values:
<li>`default`: Default certificate;</li>
<li>`upload`: External certificate;</li>
<li>`managed`: Tencent Cloud managed certificate.</li>
 * @method string getExpireTime() Obtain Certificate expiration time.
 * @method void setExpireTime(string $ExpireTime) Set Certificate expiration time.
 * @method string getEffectiveTime() Obtain Certificate Validation Time.
 * @method void setEffectiveTime(string $EffectiveTime) Set Certificate Validation Time.
 * @method string getCommonName() Obtain Certificate common name.
 * @method void setCommonName(string $CommonName) Set Certificate common name.
 * @method array getSubjectAltName() Obtain SAN domain of the certificate.
 * @method void setSubjectAltName(array $SubjectAltName) Set SAN domain of the certificate.
 * @method string getStatus() Obtain Deployment status. Valid values:
<li>processing: under deployment;</li>
<li>deployed: deployed;</li>
<li>failed: Deployment failed.</li>
 * @method void setStatus(string $Status) Set Deployment status. Valid values:
<li>processing: under deployment;</li>
<li>deployed: deployed;</li>
<li>failed: Deployment failed.</li>
 * @method string getMessage() Obtain If the Status is failed, this field returns the failure reason.
 * @method void setMessage(string $Message) Set If the Status is failed, this field returns the failure reason.
 * @method string getSignAlgo() Obtain Certificate algorithm.
 * @method void setSignAlgo(string $SignAlgo) Set Certificate algorithm.
 */
class DefaultServerCertInfo extends AbstractModel
{
    /**
     * @var string Server certificate ID.
     */
    public $CertId;

    /**
     * @var string Certificate remark name.
     */
    public $Alias;

    /**
     * @var string Certificate type. Valid values:
<li>`default`: Default certificate;</li>
<li>`upload`: External certificate;</li>
<li>`managed`: Tencent Cloud managed certificate.</li>
     */
    public $Type;

    /**
     * @var string Certificate expiration time.
     */
    public $ExpireTime;

    /**
     * @var string Certificate Validation Time.
     */
    public $EffectiveTime;

    /**
     * @var string Certificate common name.
     */
    public $CommonName;

    /**
     * @var array SAN domain of the certificate.
     */
    public $SubjectAltName;

    /**
     * @var string Deployment status. Valid values:
<li>processing: under deployment;</li>
<li>deployed: deployed;</li>
<li>failed: Deployment failed.</li>
     */
    public $Status;

    /**
     * @var string If the Status is failed, this field returns the failure reason.
     */
    public $Message;

    /**
     * @var string Certificate algorithm.
     */
    public $SignAlgo;

    /**
     * @param string $CertId Server certificate ID.
     * @param string $Alias Certificate remark name.
     * @param string $Type Certificate type. Valid values:
<li>`default`: Default certificate;</li>
<li>`upload`: External certificate;</li>
<li>`managed`: Tencent Cloud managed certificate.</li>
     * @param string $ExpireTime Certificate expiration time.
     * @param string $EffectiveTime Certificate Validation Time.
     * @param string $CommonName Certificate common name.
     * @param array $SubjectAltName SAN domain of the certificate.
     * @param string $Status Deployment status. Valid values:
<li>processing: under deployment;</li>
<li>deployed: deployed;</li>
<li>failed: Deployment failed.</li>
     * @param string $Message If the Status is failed, this field returns the failure reason.
     * @param string $SignAlgo Certificate algorithm.
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
