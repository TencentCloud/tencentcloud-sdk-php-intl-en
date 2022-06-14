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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCertDomains request structure.
 *
 * @method string getCert() Obtain Base64-encoded string of certificate in PEM format
 * @method void setCert(string $Cert) Set Base64-encoded string of certificate in PEM format
 * @method string getCertId() Obtain Managed certificate ID. `Cert` and `CertId` cannot be both empty. If they’re both filled in, `CerID` prevails.
 * @method void setCertId(string $CertId) Set Managed certificate ID. `Cert` and `CertId` cannot be both empty. If they’re both filled in, `CerID` prevails.
 * @method string getProduct() Obtain Product of the domain name, either `cdn` (default) or `ecdn`.
 * @method void setProduct(string $Product) Set Product of the domain name, either `cdn` (default) or `ecdn`.
 */
class DescribeCertDomainsRequest extends AbstractModel
{
    /**
     * @var string Base64-encoded string of certificate in PEM format
     */
    public $Cert;

    /**
     * @var string Managed certificate ID. `Cert` and `CertId` cannot be both empty. If they’re both filled in, `CerID` prevails.
     */
    public $CertId;

    /**
     * @var string Product of the domain name, either `cdn` (default) or `ecdn`.
     */
    public $Product;

    /**
     * @param string $Cert Base64-encoded string of certificate in PEM format
     * @param string $CertId Managed certificate ID. `Cert` and `CertId` cannot be both empty. If they’re both filled in, `CerID` prevails.
     * @param string $Product Product of the domain name, either `cdn` (default) or `ecdn`.
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
        if (array_key_exists("Cert",$param) and $param["Cert"] !== null) {
            $this->Cert = $param["Cert"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
