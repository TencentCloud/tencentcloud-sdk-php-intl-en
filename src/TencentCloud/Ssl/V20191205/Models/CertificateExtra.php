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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Content of the `CertificateExtra` parameter. `CertificateExtra` is an element of `Certificates` array which is returned by `DescribeCertificates`.
 *
 * @method string getDomainNumber() Obtain Number of domain names which can be associated with the certificate
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDomainNumber(string $DomainNumber) Set Number of domain names which can be associated with the certificate
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getOriginCertificateId() Obtain Original certificate ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOriginCertificateId(string $OriginCertificateId) Set Original certificate ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getReplacedBy() Obtain Original ID of the new certificate
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setReplacedBy(string $ReplacedBy) Set Original ID of the new certificate
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getReplacedFor() Obtain New ID of the new certificate
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setReplacedFor(string $ReplacedFor) Set New ID of the new certificate
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRenewOrder() Obtain Certificate ID of the new order
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRenewOrder(string $RenewOrder) Set Certificate ID of the new order
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getSMCert() Obtain Whether the certificate is a Chinese SM certificate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSMCert(integer $SMCert) Set Whether the certificate is a Chinese SM certificate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCompanyType() Obtain Company type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCompanyType(integer $CompanyType) Set Company type
Note: This field may return null, indicating that no valid value can be obtained.
 */
class CertificateExtra extends AbstractModel
{
    /**
     * @var string Number of domain names which can be associated with the certificate
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DomainNumber;

    /**
     * @var string Original certificate ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OriginCertificateId;

    /**
     * @var string Original ID of the new certificate
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ReplacedBy;

    /**
     * @var string New ID of the new certificate
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ReplacedFor;

    /**
     * @var string Certificate ID of the new order
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RenewOrder;

    /**
     * @var integer Whether the certificate is a Chinese SM certificate.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SMCert;

    /**
     * @var integer Company type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CompanyType;

    /**
     * @param string $DomainNumber Number of domain names which can be associated with the certificate
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $OriginCertificateId Original certificate ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ReplacedBy Original ID of the new certificate
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ReplacedFor New ID of the new certificate
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $RenewOrder Certificate ID of the new order
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $SMCert Whether the certificate is a Chinese SM certificate.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CompanyType Company type
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("DomainNumber",$param) and $param["DomainNumber"] !== null) {
            $this->DomainNumber = $param["DomainNumber"];
        }

        if (array_key_exists("OriginCertificateId",$param) and $param["OriginCertificateId"] !== null) {
            $this->OriginCertificateId = $param["OriginCertificateId"];
        }

        if (array_key_exists("ReplacedBy",$param) and $param["ReplacedBy"] !== null) {
            $this->ReplacedBy = $param["ReplacedBy"];
        }

        if (array_key_exists("ReplacedFor",$param) and $param["ReplacedFor"] !== null) {
            $this->ReplacedFor = $param["ReplacedFor"];
        }

        if (array_key_exists("RenewOrder",$param) and $param["RenewOrder"] !== null) {
            $this->RenewOrder = $param["RenewOrder"];
        }

        if (array_key_exists("SMCert",$param) and $param["SMCert"] !== null) {
            $this->SMCert = $param["SMCert"];
        }

        if (array_key_exists("CompanyType",$param) and $param["CompanyType"] !== null) {
            $this->CompanyType = $param["CompanyType"];
        }
    }
}
