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
 * UpdateAMLCustomerProfile request structure.
 *
 * @method string getUniqueCustomerID() Obtain End user's unique identifier in the customer system, up to 256 characters.
 * @method void setUniqueCustomerID(string $UniqueCustomerID) Set End user's unique identifier in the customer system, up to 256 characters.
 * @method string getEntityType() Obtain Entity type. Enumeration values: PERSON (individual) / COMPANY (company).
 * @method void setEntityType(string $EntityType) Set Entity type. Enumeration values: PERSON (individual) / COMPANY (company).
 * @method Person getPerson() Obtain Personal information, required when EntityType=PERSON. 
Input restriction: EntityType=PERSON.
 * @method void setPerson(Person $Person) Set Personal information, required when EntityType=PERSON. 
Input restriction: EntityType=PERSON.
 * @method Company getCompany() Obtain Enterprise information, required when EntityType=COMPANY. Input restriction: EntityType=COMPANY.
 * @method void setCompany(Company $Company) Set Enterprise information, required when EntityType=COMPANY. Input restriction: EntityType=COMPANY.
 */
class UpdateAMLCustomerProfileRequest extends AbstractModel
{
    /**
     * @var string End user's unique identifier in the customer system, up to 256 characters.
     */
    public $UniqueCustomerID;

    /**
     * @var string Entity type. Enumeration values: PERSON (individual) / COMPANY (company).
     */
    public $EntityType;

    /**
     * @var Person Personal information, required when EntityType=PERSON. 
Input restriction: EntityType=PERSON.
     */
    public $Person;

    /**
     * @var Company Enterprise information, required when EntityType=COMPANY. Input restriction: EntityType=COMPANY.
     */
    public $Company;

    /**
     * @param string $UniqueCustomerID End user's unique identifier in the customer system, up to 256 characters.
     * @param string $EntityType Entity type. Enumeration values: PERSON (individual) / COMPANY (company).
     * @param Person $Person Personal information, required when EntityType=PERSON. 
Input restriction: EntityType=PERSON.
     * @param Company $Company Enterprise information, required when EntityType=COMPANY. Input restriction: EntityType=COMPANY.
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
    }
}
