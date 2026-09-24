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
 * RunAMLNameScreening request structure.
 *
 * @method string getUniqueCustomerID() Obtain <p>Unique identifier of the end user in the customer system, up to 256 characters.</p>
 * @method void setUniqueCustomerID(string $UniqueCustomerID) Set <p>Unique identifier of the end user in the customer system, up to 256 characters.</p>
 * @method string getEntityType() Obtain <p>Entity type. Enumeration values: PERSON / COMPANY</p><p>Enumeration values:</p><ul><li>PERSON: individual</li><li>COMPANY: company</li></ul>
 * @method void setEntityType(string $EntityType) Set <p>Entity type. Enumeration values: PERSON / COMPANY</p><p>Enumeration values:</p><ul><li>PERSON: individual</li><li>COMPANY: company</li></ul>
 * @method Person getPerson() Obtain <p>Personal info, required when EntityType=PERSON</p><p>Input limitation: EntityType=PERSON</p>
 * @method void setPerson(Person $Person) Set <p>Personal info, required when EntityType=PERSON</p><p>Input limitation: EntityType=PERSON</p>
 * @method Company getCompany() Obtain <p>Enterprise info. Required when EntityType=COMPANY</p><p>Input limitation: EntityType=COMPANY</p>
 * @method void setCompany(Company $Company) Set <p>Enterprise info. Required when EntityType=COMPANY</p><p>Input limitation: EntityType=COMPANY</p>
 * @method boolean getEnableOngoingScreening() Obtain <p>Whether continuous monitoring and screening is enabled. Default value: false</p><p>Default value: false</p>
 * @method void setEnableOngoingScreening(boolean $EnableOngoingScreening) Set <p>Whether continuous monitoring and screening is enabled. Default value: false</p><p>Default value: false</p>
 */
class RunAMLNameScreeningRequest extends AbstractModel
{
    /**
     * @var string <p>Unique identifier of the end user in the customer system, up to 256 characters.</p>
     */
    public $UniqueCustomerID;

    /**
     * @var string <p>Entity type. Enumeration values: PERSON / COMPANY</p><p>Enumeration values:</p><ul><li>PERSON: individual</li><li>COMPANY: company</li></ul>
     */
    public $EntityType;

    /**
     * @var Person <p>Personal info, required when EntityType=PERSON</p><p>Input limitation: EntityType=PERSON</p>
     */
    public $Person;

    /**
     * @var Company <p>Enterprise info. Required when EntityType=COMPANY</p><p>Input limitation: EntityType=COMPANY</p>
     */
    public $Company;

    /**
     * @var boolean <p>Whether continuous monitoring and screening is enabled. Default value: false</p><p>Default value: false</p>
     */
    public $EnableOngoingScreening;

    /**
     * @param string $UniqueCustomerID <p>Unique identifier of the end user in the customer system, up to 256 characters.</p>
     * @param string $EntityType <p>Entity type. Enumeration values: PERSON / COMPANY</p><p>Enumeration values:</p><ul><li>PERSON: individual</li><li>COMPANY: company</li></ul>
     * @param Person $Person <p>Personal info, required when EntityType=PERSON</p><p>Input limitation: EntityType=PERSON</p>
     * @param Company $Company <p>Enterprise info. Required when EntityType=COMPANY</p><p>Input limitation: EntityType=COMPANY</p>
     * @param boolean $EnableOngoingScreening <p>Whether continuous monitoring and screening is enabled. Default value: false</p><p>Default value: false</p>
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
        if (array_key_exists("UniqueCustomerID",$param) and $param["UniqueCustomerID"] !== null) {
            $this->UniqueCustomerID = $param["UniqueCustomerID"];
        }

        if (array_key_exists("EntityType",$param) and $param["EntityType"] !== null) {
            $this->EntityType = $param["EntityType"];
        }

        if (array_key_exists("Person",$param) and $param["Person"] !== null) {
            $this->Person = new Person();
            $this->Person->deserialize($param["Person"]);
        }

        if (array_key_exists("Company",$param) and $param["Company"] !== null) {
            $this->Company = new Company();
            $this->Company->deserialize($param["Company"]);
        }

        if (array_key_exists("EnableOngoingScreening",$param) and $param["EnableOngoingScreening"] !== null) {
            $this->EnableOngoingScreening = $param["EnableOngoingScreening"];
        }
    }
}
