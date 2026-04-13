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
 * Specifies the mode of HTTPS origin certificate verification.
 *
 * @method string getVerificationMode() Obtain Origin certificate verification mode. valid values: <li>disable: disable origin certificate verification.</li> <li>custom_ca: use designated trusted ca certificate for verification.</li>.
 * @method void setVerificationMode(string $VerificationMode) Set Origin certificate verification mode. valid values: <li>disable: disable origin certificate verification.</li> <li>custom_ca: use designated trusted ca certificate for verification.</li>.
 * @method array getCustomCACerts() Obtain Specifies the trusted CA certificate list. the origin certificate must be issued by this CA to pass verification. note: this parameter is required only when VerificationMode is custom_CA. input this parameter to specify the trusted CA certificate information.
OriginCertificateVerify specifies CertId of the corresponding certificate as an input parameter in ModifyHostsCertificate. only need to go to the SSL certificate service list (https://console.cloud.tencent.com/SSL) to check CertId.	

 * @method void setCustomCACerts(array $CustomCACerts) Set Specifies the trusted CA certificate list. the origin certificate must be issued by this CA to pass verification. note: this parameter is required only when VerificationMode is custom_CA. input this parameter to specify the trusted CA certificate information.
OriginCertificateVerify specifies CertId of the corresponding certificate as an input parameter in ModifyHostsCertificate. only need to go to the SSL certificate service list (https://console.cloud.tencent.com/SSL) to check CertId.	
 */
class OriginCertificateVerify extends AbstractModel
{
    /**
     * @var string Origin certificate verification mode. valid values: <li>disable: disable origin certificate verification.</li> <li>custom_ca: use designated trusted ca certificate for verification.</li>.
     */
    public $VerificationMode;

    /**
     * @var array Specifies the trusted CA certificate list. the origin certificate must be issued by this CA to pass verification. note: this parameter is required only when VerificationMode is custom_CA. input this parameter to specify the trusted CA certificate information.
OriginCertificateVerify specifies CertId of the corresponding certificate as an input parameter in ModifyHostsCertificate. only need to go to the SSL certificate service list (https://console.cloud.tencent.com/SSL) to check CertId.	

     */
    public $CustomCACerts;

    /**
     * @param string $VerificationMode Origin certificate verification mode. valid values: <li>disable: disable origin certificate verification.</li> <li>custom_ca: use designated trusted ca certificate for verification.</li>.
     * @param array $CustomCACerts Specifies the trusted CA certificate list. the origin certificate must be issued by this CA to pass verification. note: this parameter is required only when VerificationMode is custom_CA. input this parameter to specify the trusted CA certificate information.
OriginCertificateVerify specifies CertId of the corresponding certificate as an input parameter in ModifyHostsCertificate. only need to go to the SSL certificate service list (https://console.cloud.tencent.com/SSL) to check CertId.	
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
        if (array_key_exists("VerificationMode",$param) and $param["VerificationMode"] !== null) {
            $this->VerificationMode = $param["VerificationMode"];
        }

        if (array_key_exists("CustomCACerts",$param) and $param["CustomCACerts"] !== null) {
            $this->CustomCACerts = [];
            foreach ($param["CustomCACerts"] as $key => $value){
                $obj = new CertificateInfo();
                $obj->deserialize($value);
                array_push($this->CustomCACerts, $obj);
            }
        }
    }
}
