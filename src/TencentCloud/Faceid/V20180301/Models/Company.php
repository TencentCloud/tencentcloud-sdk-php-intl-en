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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AML Company object
 *
 * @method string getCompanyName() Obtain <p>Enterprise name (required)</p>
 * @method void setCompanyName(string $CompanyName) Set <p>Enterprise name (required)</p>
 * @method string getCompanyCertNumber() Obtain <p>Enterprise registration number / unified social credit code (Option)</p>
 * @method void setCompanyCertNumber(string $CompanyCertNumber) Set <p>Enterprise registration number / unified social credit code (Option)</p>
 * @method string getCompanyCountry() Obtain <p>Enterprise registration country, ISO 3166-1 alpha-2 country code (optional)</p>
 * @method void setCompanyCountry(string $CompanyCountry) Set <p>Enterprise registration country, ISO 3166-1 alpha-2 country code (optional)</p>
 * @method string getCompanyAddress() Obtain <p>Company address (optional)</p>
 * @method void setCompanyAddress(string $CompanyAddress) Set <p>Company address (optional)</p>
 */
class Company extends AbstractModel
{
    /**
     * @var string <p>Enterprise name (required)</p>
     */
    public $CompanyName;

    /**
     * @var string <p>Enterprise registration number / unified social credit code (Option)</p>
     */
    public $CompanyCertNumber;

    /**
     * @var string <p>Enterprise registration country, ISO 3166-1 alpha-2 country code (optional)</p>
     */
    public $CompanyCountry;

    /**
     * @var string <p>Company address (optional)</p>
     */
    public $CompanyAddress;

    /**
     * @param string $CompanyName <p>Enterprise name (required)</p>
     * @param string $CompanyCertNumber <p>Enterprise registration number / unified social credit code (Option)</p>
     * @param string $CompanyCountry <p>Enterprise registration country, ISO 3166-1 alpha-2 country code (optional)</p>
     * @param string $CompanyAddress <p>Company address (optional)</p>
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
        if (array_key_exists("CompanyName",$param) and $param["CompanyName"] !== null) {
            $this->CompanyName = $param["CompanyName"];
        }

        if (array_key_exists("CompanyCertNumber",$param) and $param["CompanyCertNumber"] !== null) {
            $this->CompanyCertNumber = $param["CompanyCertNumber"];
        }

        if (array_key_exists("CompanyCountry",$param) and $param["CompanyCountry"] !== null) {
            $this->CompanyCountry = $param["CompanyCountry"];
        }

        if (array_key_exists("CompanyAddress",$param) and $param["CompanyAddress"] !== null) {
            $this->CompanyAddress = $param["CompanyAddress"];
        }
    }
}
