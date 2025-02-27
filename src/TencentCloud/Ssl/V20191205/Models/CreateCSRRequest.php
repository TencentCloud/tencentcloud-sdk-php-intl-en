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
 * CreateCSR request structure.
 *
 * @method string getDomain() Obtain The domain.
 * @method void setDomain(string $Domain) Set The domain.
 * @method string getOrganization() Obtain The organization name.
 * @method void setOrganization(string $Organization) Set The organization name.
 * @method string getDepartment() Obtain The department.
 * @method void setDepartment(string $Department) Set The department.
 * @method string getEmail() Obtain The email address.
 * @method void setEmail(string $Email) Set The email address.
 * @method string getProvince() Obtain The province.
 * @method void setProvince(string $Province) Set The province.
 * @method string getCity() Obtain The city.
 * @method void setCity(string $City) Set The city.
 * @method string getCountry() Obtain The country or region code that complies with ISO 3166, such as CN and US.
 * @method void setCountry(string $Country) Set The country or region code that complies with ISO 3166, such as CN and US.
 * @method string getEncryptAlgo() Obtain The encryption algorithm. RSA and ECC are supported.	
 * @method void setEncryptAlgo(string $EncryptAlgo) Set The encryption algorithm. RSA and ECC are supported.	
 * @method string getKeyParameter() Obtain The key pair parameter. For RSA, only the 2048-bit and 4096-bit key pairs are supported. For ECC, only prime256v1 is supported.
 * @method void setKeyParameter(string $KeyParameter) Set The key pair parameter. For RSA, only the 2048-bit and 4096-bit key pairs are supported. For ECC, only prime256v1 is supported.
 * @method boolean getGenerate() Obtain Whether to generate the CSR content. Once the CSR content is generated, the CSR record cannot be modified.
 * @method void setGenerate(boolean $Generate) Set Whether to generate the CSR content. Once the CSR content is generated, the CSR record cannot be modified.
 * @method string getKeyPassword() Obtain The password of the private key.
 * @method void setKeyPassword(string $KeyPassword) Set The password of the private key.
 * @method string getRemark() Obtain The remarks.
 * @method void setRemark(string $Remark) Set The remarks.
 * @method array getTags() Obtain 
 * @method void setTags(array $Tags) Set 
 */
class CreateCSRRequest extends AbstractModel
{
    /**
     * @var string The domain.
     */
    public $Domain;

    /**
     * @var string The organization name.
     */
    public $Organization;

    /**
     * @var string The department.
     */
    public $Department;

    /**
     * @var string The email address.
     */
    public $Email;

    /**
     * @var string The province.
     */
    public $Province;

    /**
     * @var string The city.
     */
    public $City;

    /**
     * @var string The country or region code that complies with ISO 3166, such as CN and US.
     */
    public $Country;

    /**
     * @var string The encryption algorithm. RSA and ECC are supported.	
     */
    public $EncryptAlgo;

    /**
     * @var string The key pair parameter. For RSA, only the 2048-bit and 4096-bit key pairs are supported. For ECC, only prime256v1 is supported.
     */
    public $KeyParameter;

    /**
     * @var boolean Whether to generate the CSR content. Once the CSR content is generated, the CSR record cannot be modified.
     */
    public $Generate;

    /**
     * @var string The password of the private key.
     */
    public $KeyPassword;

    /**
     * @var string The remarks.
     */
    public $Remark;

    /**
     * @var array 
     */
    public $Tags;

    /**
     * @param string $Domain The domain.
     * @param string $Organization The organization name.
     * @param string $Department The department.
     * @param string $Email The email address.
     * @param string $Province The province.
     * @param string $City The city.
     * @param string $Country The country or region code that complies with ISO 3166, such as CN and US.
     * @param string $EncryptAlgo The encryption algorithm. RSA and ECC are supported.	
     * @param string $KeyParameter The key pair parameter. For RSA, only the 2048-bit and 4096-bit key pairs are supported. For ECC, only prime256v1 is supported.
     * @param boolean $Generate Whether to generate the CSR content. Once the CSR content is generated, the CSR record cannot be modified.
     * @param string $KeyPassword The password of the private key.
     * @param string $Remark The remarks.
     * @param array $Tags 
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Organization",$param) and $param["Organization"] !== null) {
            $this->Organization = $param["Organization"];
        }

        if (array_key_exists("Department",$param) and $param["Department"] !== null) {
            $this->Department = $param["Department"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("EncryptAlgo",$param) and $param["EncryptAlgo"] !== null) {
            $this->EncryptAlgo = $param["EncryptAlgo"];
        }

        if (array_key_exists("KeyParameter",$param) and $param["KeyParameter"] !== null) {
            $this->KeyParameter = $param["KeyParameter"];
        }

        if (array_key_exists("Generate",$param) and $param["Generate"] !== null) {
            $this->Generate = $param["Generate"];
        }

        if (array_key_exists("KeyPassword",$param) and $param["KeyPassword"] !== null) {
            $this->KeyPassword = $param["KeyPassword"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
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
