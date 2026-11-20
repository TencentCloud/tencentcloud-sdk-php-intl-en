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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of the inquirer
 *
 * @method string getName() Obtain Name of the inquirer
 * @method void setName(string $Name) Set Name of the inquirer
 * @method string getGender() Obtain Gender
 * @method void setGender(string $Gender) Set Gender
 * @method string getBirthDate() Obtain Date of birth
 * @method void setBirthDate(string $BirthDate) Set Date of birth
 * @method string getIdCardNo() Obtain Citizen ID number
 * @method void setIdCardNo(string $IdCardNo) Set Citizen ID number
 */
class PersonInfo extends AbstractModel
{
    /**
     * @var string Name of the inquirer
     */
    public $Name;

    /**
     * @var string Gender
     */
    public $Gender;

    /**
     * @var string Date of birth
     */
    public $BirthDate;

    /**
     * @var string Citizen ID number
     */
    public $IdCardNo;

    /**
     * @param string $Name Name of the inquirer
     * @param string $Gender Gender
     * @param string $BirthDate Date of birth
     * @param string $IdCardNo Citizen ID number
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("BirthDate",$param) and $param["BirthDate"] !== null) {
            $this->BirthDate = $param["BirthDate"];
        }

        if (array_key_exists("IdCardNo",$param) and $param["IdCardNo"] !== null) {
            $this->IdCardNo = $param["IdCardNo"];
        }
    }
}
