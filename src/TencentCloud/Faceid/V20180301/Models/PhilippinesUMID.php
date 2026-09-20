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
 * Philippines UMID
 *
 * @method string getSurname() Obtain Last name
 * @method void setSurname(string $Surname) Set Last name
 * @method string getMiddleName() Obtain Middle name
 * @method void setMiddleName(string $MiddleName) Set Middle name
 * @method string getGivenName() Obtain Name
 * @method void setGivenName(string $GivenName) Set Name
 * @method string getSex() Obtain Address.
 * @method void setSex(string $Sex) Set Address.
 * @method string getBirthday() Obtain Birthday
 * @method void setBirthday(string $Birthday) Set Birthday
 * @method string getAddress() Obtain Address.
 * @method void setAddress(string $Address) Set Address.
 * @method string getCRN() Obtain crn code
 * @method void setCRN(string $CRN) Set crn code
 */
class PhilippinesUMID extends AbstractModel
{
    /**
     * @var string Last name
     */
    public $Surname;

    /**
     * @var string Middle name
     */
    public $MiddleName;

    /**
     * @var string Name
     */
    public $GivenName;

    /**
     * @var string Address.
     */
    public $Sex;

    /**
     * @var string Birthday
     */
    public $Birthday;

    /**
     * @var string Address.
     */
    public $Address;

    /**
     * @var string crn code
     */
    public $CRN;

    /**
     * @param string $Surname Last name
     * @param string $MiddleName Middle name
     * @param string $GivenName Name
     * @param string $Sex Address.
     * @param string $Birthday Birthday
     * @param string $Address Address.
     * @param string $CRN crn code
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
        if (array_key_exists("Surname",$param) and $param["Surname"] !== null) {
            $this->Surname = $param["Surname"];
        }

        if (array_key_exists("MiddleName",$param) and $param["MiddleName"] !== null) {
            $this->MiddleName = $param["MiddleName"];
        }

        if (array_key_exists("GivenName",$param) and $param["GivenName"] !== null) {
            $this->GivenName = $param["GivenName"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("CRN",$param) and $param["CRN"] !== null) {
            $this->CRN = $param["CRN"];
        }
    }
}
