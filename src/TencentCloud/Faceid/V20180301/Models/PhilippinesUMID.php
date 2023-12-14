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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Philippines UMID Card
 *
 * @method string getSurname() Obtain Surname
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSurname(string $Surname) Set Surname
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMiddleName() Obtain Middle Name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMiddleName(string $MiddleName) Set Middle Name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGivenName() Obtain First name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGivenName(string $GivenName) Set First name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSex() Obtain Gender
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSex(string $Sex) Set Gender
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBirthday() Obtain Birthday
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBirthday(string $Birthday) Set Birthday
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAddress() Obtain Address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAddress(string $Address) Set Address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCRN() Obtain CRN code
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCRN(string $CRN) Set CRN code
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PhilippinesUMID extends AbstractModel
{
    /**
     * @var string Surname
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Surname;

    /**
     * @var string Middle Name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MiddleName;

    /**
     * @var string First name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GivenName;

    /**
     * @var string Gender
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Sex;

    /**
     * @var string Birthday
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Birthday;

    /**
     * @var string Address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Address;

    /**
     * @var string CRN code
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CRN;

    /**
     * @param string $Surname Surname
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MiddleName Middle Name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $GivenName First name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Sex Gender
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Birthday Birthday
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Address Address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CRN CRN code
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
