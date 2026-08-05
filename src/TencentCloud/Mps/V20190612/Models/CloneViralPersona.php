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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Model appearance of hit product clone
 *
 * @method string getGender() Obtain <p>Model gender. Values: male/female/any</p>
 * @method void setGender(string $Gender) Set <p>Model gender. Values: male/female/any</p>
 * @method string getAge() Obtain <p>Age segment. Values: teenager/youth/middle_aged/senior</p>
 * @method void setAge(string $Age) Set <p>Age segment. Values: teenager/youth/middle_aged/senior</p>
 * @method string getEthnicity() Obtain <p>Appearance feature. Values: caucasian/asian/latino/african/middle_eastern</p>
 * @method void setEthnicity(string $Ethnicity) Set <p>Appearance feature. Values: caucasian/asian/latino/african/middle_eastern</p>
 * @method string getBodyType() Obtain <p>Body type. Values: slim / standard / athletic / chubby</p>
 * @method void setBodyType(string $BodyType) Set <p>Body type. Values: slim / standard / athletic / chubby</p>
 */
class CloneViralPersona extends AbstractModel
{
    /**
     * @var string <p>Model gender. Values: male/female/any</p>
     */
    public $Gender;

    /**
     * @var string <p>Age segment. Values: teenager/youth/middle_aged/senior</p>
     */
    public $Age;

    /**
     * @var string <p>Appearance feature. Values: caucasian/asian/latino/african/middle_eastern</p>
     */
    public $Ethnicity;

    /**
     * @var string <p>Body type. Values: slim / standard / athletic / chubby</p>
     */
    public $BodyType;

    /**
     * @param string $Gender <p>Model gender. Values: male/female/any</p>
     * @param string $Age <p>Age segment. Values: teenager/youth/middle_aged/senior</p>
     * @param string $Ethnicity <p>Appearance feature. Values: caucasian/asian/latino/african/middle_eastern</p>
     * @param string $BodyType <p>Body type. Values: slim / standard / athletic / chubby</p>
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
        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("Age",$param) and $param["Age"] !== null) {
            $this->Age = $param["Age"];
        }

        if (array_key_exists("Ethnicity",$param) and $param["Ethnicity"] !== null) {
            $this->Ethnicity = $param["Ethnicity"];
        }

        if (array_key_exists("BodyType",$param) and $param["BodyType"] !== null) {
            $this->BodyType = $param["BodyType"];
        }
    }
}
