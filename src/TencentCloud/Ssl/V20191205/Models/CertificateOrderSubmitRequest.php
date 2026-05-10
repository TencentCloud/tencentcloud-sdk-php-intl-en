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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CertificateOrderSubmit request structure.
 *
 * @method string getCertId() Obtain Paid SSL certificate ID of materials to be submitted.	
 * @method void setCertId(string $CertId) Set Paid SSL certificate ID of materials to be submitted.	
 * @method integer getDeleteDnsAutoRecord() Obtain Whether to delete automatic DNS validation: 0, do not delete; 1, delete; default is do not delete.
 * @method void setDeleteDnsAutoRecord(integer $DeleteDnsAutoRecord) Set Whether to delete automatic DNS validation: 0, do not delete; 1, delete; default is do not delete.
 * @method string getVerifyType() Obtain Domain validation method of the certificate
DNS: Manually add domain DNS validation. The user needs to manually add the verification value at the DNS service provider.
FILE: Manual domain addition via FILE verification. Users are advised to manually add the specified path FILE to the root directory of the domain site for FILE verification. Either http or https access is sufficient. The domain site must be accessible by overseas certificate authorities. For the specific access allowlist, refer to the console page.
 * @method void setVerifyType(string $VerifyType) Set Domain validation method of the certificate
DNS: Manually add domain DNS validation. The user needs to manually add the verification value at the DNS service provider.
FILE: Manual domain addition via FILE verification. Users are advised to manually add the specified path FILE to the root directory of the domain site for FILE verification. Either http or https access is sufficient. The domain site must be accessible by overseas certificate authorities. For the specific access allowlist, refer to the console page.
 */
class CertificateOrderSubmitRequest extends AbstractModel
{
    /**
     * @var string Paid SSL certificate ID of materials to be submitted.	
     */
    public $CertId;

    /**
     * @var integer Whether to delete automatic DNS validation: 0, do not delete; 1, delete; default is do not delete.
     */
    public $DeleteDnsAutoRecord;

    /**
     * @var string Domain validation method of the certificate
DNS: Manually add domain DNS validation. The user needs to manually add the verification value at the DNS service provider.
FILE: Manual domain addition via FILE verification. Users are advised to manually add the specified path FILE to the root directory of the domain site for FILE verification. Either http or https access is sufficient. The domain site must be accessible by overseas certificate authorities. For the specific access allowlist, refer to the console page.
     */
    public $VerifyType;

    /**
     * @param string $CertId Paid SSL certificate ID of materials to be submitted.	
     * @param integer $DeleteDnsAutoRecord Whether to delete automatic DNS validation: 0, do not delete; 1, delete; default is do not delete.
     * @param string $VerifyType Domain validation method of the certificate
DNS: Manually add domain DNS validation. The user needs to manually add the verification value at the DNS service provider.
FILE: Manual domain addition via FILE verification. Users are advised to manually add the specified path FILE to the root directory of the domain site for FILE verification. Either http or https access is sufficient. The domain site must be accessible by overseas certificate authorities. For the specific access allowlist, refer to the console page.
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

        if (array_key_exists("DeleteDnsAutoRecord",$param) and $param["DeleteDnsAutoRecord"] !== null) {
            $this->DeleteDnsAutoRecord = $param["DeleteDnsAutoRecord"];
        }

        if (array_key_exists("VerifyType",$param) and $param["VerifyType"] !== null) {
            $this->VerifyType = $param["VerifyType"];
        }
    }
}
