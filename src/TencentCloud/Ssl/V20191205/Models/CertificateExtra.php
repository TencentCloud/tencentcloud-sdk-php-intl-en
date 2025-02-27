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
 * @method string getDomainNumber() Obtain Quantity of configurable domain names for the certificate.
 * @method void setDomainNumber(string $DomainNumber) Set Quantity of configurable domain names for the certificate.
 * @method string getOriginCertificateId() Obtain Renew the original certificate id.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOriginCertificateId(string $OriginCertificateId) Set Renew the original certificate id.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getReplacedBy() Obtain Original ID of the new certificate
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setReplacedBy(string $ReplacedBy) Set Original ID of the new certificate
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getReplacedFor() Obtain Reissue certificate id.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setReplacedFor(string $ReplacedFor) Set Reissue certificate id.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRenewOrder() Obtain Renewal certificate id.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRenewOrder(string $RenewOrder) Set Renewal certificate id.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getSMCert() Obtain Whether it is a China SM certificate.
 * @method void setSMCert(integer $SMCert) Set Whether it is a China SM certificate.
 * @method integer getCompanyType() Obtain Company type, valid values: 1 (individual); 2 (company).
 * @method void setCompanyType(integer $CompanyType) Set Company type, valid values: 1 (individual); 2 (company).
 */
class CertificateExtra extends AbstractModel
{
    /**
     * @var string Quantity of configurable domain names for the certificate.
     */
    public $DomainNumber;

    /**
     * @var string Renew the original certificate id.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OriginCertificateId;

    /**
     * @var string Original ID of the new certificate
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ReplacedBy;

    /**
     * @var string Reissue certificate id.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ReplacedFor;

    /**
     * @var string Renewal certificate id.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RenewOrder;

    /**
     * @var integer Whether it is a China SM certificate.
     */
    public $SMCert;

    /**
     * @var integer Company type, valid values: 1 (individual); 2 (company).
     */
    public $CompanyType;

    /**
     * @param string $DomainNumber Quantity of configurable domain names for the certificate.
     * @param string $OriginCertificateId Renew the original certificate id.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ReplacedBy Original ID of the new certificate
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ReplacedFor Reissue certificate id.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $RenewOrder Renewal certificate id.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $SMCert Whether it is a China SM certificate.
     * @param integer $CompanyType Company type, valid values: 1 (individual); 2 (company).
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
