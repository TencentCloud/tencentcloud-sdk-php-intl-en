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
 * Company Information
 *
 * @method string getCompanyName() Obtain Company Name
 * @method void setCompanyName(string $CompanyName) Set Company Name
 * @method integer getCompanyId() Obtain company ID
 * @method void setCompanyId(integer $CompanyId) Set company ID
 * @method string getCompanyCountry() Obtain Country of residence
 * @method void setCompanyCountry(string $CompanyCountry) Set Country of residence
 * @method string getCompanyProvince() Obtain Company province
 * @method void setCompanyProvince(string $CompanyProvince) Set Company province
 * @method string getCompanyCity() Obtain Company located city
 * @method void setCompanyCity(string $CompanyCity) Set Company located city
 * @method string getCompanyAddress() Obtain Company's detailed address
 * @method void setCompanyAddress(string $CompanyAddress) Set Company's detailed address
 * @method string getCompanyPhone() Obtain company phone number
 * @method void setCompanyPhone(string $CompanyPhone) Set company phone number
 * @method string getIdType() Obtain Company document type. Valid values:
TYDMZ (unified social credit code): This field is required only for CFCA certs and not required for other types.
OTHERS
 * @method void setIdType(string $IdType) Set Company document type. Valid values:
TYDMZ (unified social credit code): This field is required only for CFCA certs and not required for other types.
OTHERS
 * @method string getIdNumber() Obtain Company identification number, value ranges from...to...
TYDMZ (unified social credit code): 11532xxxxxxxx24820
 * @method void setIdNumber(string $IdNumber) Set Company identification number, value ranges from...to...
TYDMZ (unified social credit code): 11532xxxxxxxx24820
 * @method array getTags() Obtain Tag.
 * @method void setTags(array $Tags) Set Tag.
 */
class CompanyInfo extends AbstractModel
{
    /**
     * @var string Company Name
     */
    public $CompanyName;

    /**
     * @var integer company ID
     */
    public $CompanyId;

    /**
     * @var string Country of residence
     */
    public $CompanyCountry;

    /**
     * @var string Company province
     */
    public $CompanyProvince;

    /**
     * @var string Company located city
     */
    public $CompanyCity;

    /**
     * @var string Company's detailed address
     */
    public $CompanyAddress;

    /**
     * @var string company phone number
     */
    public $CompanyPhone;

    /**
     * @var string Company document type. Valid values:
TYDMZ (unified social credit code): This field is required only for CFCA certs and not required for other types.
OTHERS
     */
    public $IdType;

    /**
     * @var string Company identification number, value ranges from...to...
TYDMZ (unified social credit code): 11532xxxxxxxx24820
     */
    public $IdNumber;

    /**
     * @var array Tag.
     */
    public $Tags;

    /**
     * @param string $CompanyName Company Name
     * @param integer $CompanyId company ID
     * @param string $CompanyCountry Country of residence
     * @param string $CompanyProvince Company province
     * @param string $CompanyCity Company located city
     * @param string $CompanyAddress Company's detailed address
     * @param string $CompanyPhone company phone number
     * @param string $IdType Company document type. Valid values:
TYDMZ (unified social credit code): This field is required only for CFCA certs and not required for other types.
OTHERS
     * @param string $IdNumber Company identification number, value ranges from...to...
TYDMZ (unified social credit code): 11532xxxxxxxx24820
     * @param array $Tags Tag.
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

        if (array_key_exists("CompanyId",$param) and $param["CompanyId"] !== null) {
            $this->CompanyId = $param["CompanyId"];
        }

        if (array_key_exists("CompanyCountry",$param) and $param["CompanyCountry"] !== null) {
            $this->CompanyCountry = $param["CompanyCountry"];
        }

        if (array_key_exists("CompanyProvince",$param) and $param["CompanyProvince"] !== null) {
            $this->CompanyProvince = $param["CompanyProvince"];
        }

        if (array_key_exists("CompanyCity",$param) and $param["CompanyCity"] !== null) {
            $this->CompanyCity = $param["CompanyCity"];
        }

        if (array_key_exists("CompanyAddress",$param) and $param["CompanyAddress"] !== null) {
            $this->CompanyAddress = $param["CompanyAddress"];
        }

        if (array_key_exists("CompanyPhone",$param) and $param["CompanyPhone"] !== null) {
            $this->CompanyPhone = $param["CompanyPhone"];
        }

        if (array_key_exists("IdType",$param) and $param["IdType"] !== null) {
            $this->IdType = $param["IdType"];
        }

        if (array_key_exists("IdNumber",$param) and $param["IdNumber"] !== null) {
            $this->IdNumber = $param["IdNumber"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
