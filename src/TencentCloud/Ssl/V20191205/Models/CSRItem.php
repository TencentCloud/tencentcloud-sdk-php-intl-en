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
 * Details of a CSR
 *
 * @method integer getId() Obtain The CSR ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setId(integer $Id) Set The CSR ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOwnerUin() Obtain The account.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOwnerUin(string $OwnerUin) Set The account.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDomain() Obtain The domain.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDomain(string $Domain) Set The domain.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOrganization() Obtain The organization name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOrganization(string $Organization) Set The organization name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDepartment() Obtain The department.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDepartment(string $Department) Set The department.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEmail() Obtain The email address.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEmail(string $Email) Set The email address.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProvince() Obtain The province.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProvince(string $Province) Set The province.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCity() Obtain The city.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCity(string $City) Set The city.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCountry() Obtain The country or region.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCountry(string $Country) Set The country or region.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRemarks() Obtain The remarks.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRemarks(string $Remarks) Set The remarks.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain The status.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set The status.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain The creation time.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set The creation time.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getEncryptAlgo() Obtain The encryption algorithm.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEncryptAlgo(string $EncryptAlgo) Set The encryption algorithm.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getKeyParameter() Obtain The algorithm parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKeyParameter(string $KeyParameter) Set The algorithm parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CSRItem extends AbstractModel
{
    /**
     * @var integer The CSR ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Id;

    /**
     * @var string The account.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OwnerUin;

    /**
     * @var string The domain.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Domain;

    /**
     * @var string The organization name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Organization;

    /**
     * @var string The department.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Department;

    /**
     * @var string The email address.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Email;

    /**
     * @var string The province.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Province;

    /**
     * @var string The city.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $City;

    /**
     * @var string The country or region.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Country;

    /**
     * @var string The remarks.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Remarks;

    /**
     * @var integer The status.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string The creation time.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string The encryption algorithm.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EncryptAlgo;

    /**
     * @var string The algorithm parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $KeyParameter;

    /**
     * @param integer $Id The CSR ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OwnerUin The account.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Domain The domain.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Organization The organization name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Department The department.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Email The email address.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Province The province.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $City The city.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Country The country or region.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Remarks The remarks.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status The status.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime The creation time.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $EncryptAlgo The encryption algorithm.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $KeyParameter The algorithm parameter.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
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

        if (array_key_exists("Remarks",$param) and $param["Remarks"] !== null) {
            $this->Remarks = $param["Remarks"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("EncryptAlgo",$param) and $param["EncryptAlgo"] !== null) {
            $this->EncryptAlgo = $param["EncryptAlgo"];
        }

        if (array_key_exists("KeyParameter",$param) and $param["KeyParameter"] !== null) {
            $this->KeyParameter = $param["KeyParameter"];
        }
    }
}
