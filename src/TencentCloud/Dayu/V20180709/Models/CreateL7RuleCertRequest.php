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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateL7RuleCert request structure.
 *
 * @method string getBusiness() Obtain Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `net`: Anti-DDoS Ultimate
 * @method void setBusiness(string $Business) Set Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `net`: Anti-DDoS Ultimate
 * @method string getId() Obtain The resource instance ID, such as the ID of an Anti-DDoS Advanced instance or the ID of an Anti-DDoS Ultimate instance.
 * @method void setId(string $Id) Set The resource instance ID, such as the ID of an Anti-DDoS Advanced instance or the ID of an Anti-DDoS Ultimate instance.
 * @method string getRuleId() Obtain Rule ID
 * @method void setRuleId(string $RuleId) Set Rule ID
 * @method integer getCertType() Obtain Certificate type, which is required if the protocol is HTTPS. Valid value: [2 (Tencent Cloud-hosted certificate)]
 * @method void setCertType(integer $CertType) Set Certificate type, which is required if the protocol is HTTPS. Valid value: [2 (Tencent Cloud-hosted certificate)]
 * @method string getSSLId() Obtain If the certificate is a Tencent Cloud-hosted certificate, this field must be entered with the hosted certificate ID.
 * @method void setSSLId(string $SSLId) Set If the certificate is a Tencent Cloud-hosted certificate, this field must be entered with the hosted certificate ID.
 * @method string getCert() Obtain [Disused] If the certificate is an external certificate, this field must be entered with the certificate content. 
 * @method void setCert(string $Cert) Set [Disused] If the certificate is an external certificate, this field must be entered with the certificate content. 
 * @method string getPrivateKey() Obtain [Disused] If the certificate is an external certificate, this field must be entered with the certificate key. 
 * @method void setPrivateKey(string $PrivateKey) Set [Disused] If the certificate is an external certificate, this field must be entered with the certificate key. 
 */
class CreateL7RuleCertRequest extends AbstractModel
{
    /**
     * @var string Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `net`: Anti-DDoS Ultimate
     */
    public $Business;

    /**
     * @var string The resource instance ID, such as the ID of an Anti-DDoS Advanced instance or the ID of an Anti-DDoS Ultimate instance.
     */
    public $Id;

    /**
     * @var string Rule ID
     */
    public $RuleId;

    /**
     * @var integer Certificate type, which is required if the protocol is HTTPS. Valid value: [2 (Tencent Cloud-hosted certificate)]
     */
    public $CertType;

    /**
     * @var string If the certificate is a Tencent Cloud-hosted certificate, this field must be entered with the hosted certificate ID.
     */
    public $SSLId;

    /**
     * @var string [Disused] If the certificate is an external certificate, this field must be entered with the certificate content. 
     */
    public $Cert;

    /**
     * @var string [Disused] If the certificate is an external certificate, this field must be entered with the certificate key. 
     */
    public $PrivateKey;

    /**
     * @param string $Business Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `net`: Anti-DDoS Ultimate
     * @param string $Id The resource instance ID, such as the ID of an Anti-DDoS Advanced instance or the ID of an Anti-DDoS Ultimate instance.
     * @param string $RuleId Rule ID
     * @param integer $CertType Certificate type, which is required if the protocol is HTTPS. Valid value: [2 (Tencent Cloud-hosted certificate)]
     * @param string $SSLId If the certificate is a Tencent Cloud-hosted certificate, this field must be entered with the hosted certificate ID.
     * @param string $Cert [Disused] If the certificate is an external certificate, this field must be entered with the certificate content. 
     * @param string $PrivateKey [Disused] If the certificate is an external certificate, this field must be entered with the certificate key. 
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("CertType",$param) and $param["CertType"] !== null) {
            $this->CertType = $param["CertType"];
        }

        if (array_key_exists("SSLId",$param) and $param["SSLId"] !== null) {
            $this->SSLId = $param["SSLId"];
        }

        if (array_key_exists("Cert",$param) and $param["Cert"] !== null) {
            $this->Cert = $param["Cert"];
        }

        if (array_key_exists("PrivateKey",$param) and $param["PrivateKey"] !== null) {
            $this->PrivateKey = $param["PrivateKey"];
        }
    }
}
