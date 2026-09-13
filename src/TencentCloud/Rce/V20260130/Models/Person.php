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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Personal information
 *
 * @method string getName() Obtain <p>The full name of the user if provided</p>
 * @method void setName(string $Name) Set <p>The full name of the user if provided</p>
 * @method string getGender() Obtain <p>The gender of the user if provided</p>
 * @method void setGender(string $Gender) Set <p>The gender of the user if provided</p>
 * @method string getBirthday() Obtain <p>The birthday of the user if provided</p><p>Parameter format: YYYY-MM-DD.</p>
 * @method void setBirthday(string $Birthday) Set <p>The birthday of the user if provided</p><p>Parameter format: YYYY-MM-DD.</p>
 * @method string getDegree() Obtain <p>The degree of the user if provided</p>
 * @method void setDegree(string $Degree) Set <p>The degree of the user if provided</p>
 * @method string getOccupation() Obtain <p>The occupation of the user if provided</p>
 * @method void setOccupation(string $Occupation) Set <p>The occupation of the user if provided</p>
 */
class Person extends AbstractModel
{
    /**
     * @var string <p>The full name of the user if provided</p>
     */
    public $Name;

    /**
     * @var string <p>The gender of the user if provided</p>
     */
    public $Gender;

    /**
     * @var string <p>The birthday of the user if provided</p><p>Parameter format: YYYY-MM-DD.</p>
     */
    public $Birthday;

    /**
     * @var string <p>The degree of the user if provided</p>
     */
    public $Degree;

    /**
     * @var string <p>The occupation of the user if provided</p>
     */
    public $Occupation;

    /**
     * @param string $Name <p>The full name of the user if provided</p>
     * @param string $Gender <p>The gender of the user if provided</p>
     * @param string $Birthday <p>The birthday of the user if provided</p><p>Parameter format: YYYY-MM-DD.</p>
     * @param string $Degree <p>The degree of the user if provided</p>
     * @param string $Occupation <p>The occupation of the user if provided</p>
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

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("Degree",$param) and $param["Degree"] !== null) {
            $this->Degree = $param["Degree"];
        }

        if (array_key_exists("Occupation",$param) and $param["Occupation"] !== null) {
            $this->Occupation = $param["Occupation"];
        }
    }
}
