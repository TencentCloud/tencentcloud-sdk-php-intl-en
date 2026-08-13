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
 * Product fission model info
 *
 * @method string getGender() Obtain <p>Gender</p><p>Enumeration value:</p><ul><li>male: man</li><li>female: woman</li><li>any: unlimited</li></ul>
 * @method void setGender(string $Gender) Set <p>Gender</p><p>Enumeration value:</p><ul><li>male: man</li><li>female: woman</li><li>any: unlimited</li></ul>
 * @method string getAge() Obtain <p>Age range.</p><p>Enumeration values:</p><ul><li>teen: youth</li><li>young_adult: adulthood</li><li>middle_aged: middle-aged</li><li>mature: mature</li></ul>
 * @method void setAge(string $Age) Set <p>Age range.</p><p>Enumeration values:</p><ul><li>teen: youth</li><li>young_adult: adulthood</li><li>middle_aged: middle-aged</li><li>mature: mature</li></ul>
 * @method string getAppearance() Obtain <p>Appearance</p><p>Enumeration value:</p><ul><li>caucasian: White</li><li>asian: Asian</li><li>latino: Latino</li><li>african: African</li><li>middle_eastern: Middle Eastern</li></ul>
 * @method void setAppearance(string $Appearance) Set <p>Appearance</p><p>Enumeration value:</p><ul><li>caucasian: White</li><li>asian: Asian</li><li>latino: Latino</li><li>african: African</li><li>middle_eastern: Middle Eastern</li></ul>
 * @method string getBodyType() Obtain <p>Body shape</p><p>Enumeration value:</p><ul><li>slim: Slim</li><li>standard: Standard</li><li>athletic: Healthy</li><li>chubby: Chubby</li></ul>
 * @method void setBodyType(string $BodyType) Set <p>Body shape</p><p>Enumeration value:</p><ul><li>slim: Slim</li><li>standard: Standard</li><li>athletic: Healthy</li><li>chubby: Chubby</li></ul>
 */
class CustomModel extends AbstractModel
{
    /**
     * @var string <p>Gender</p><p>Enumeration value:</p><ul><li>male: man</li><li>female: woman</li><li>any: unlimited</li></ul>
     */
    public $Gender;

    /**
     * @var string <p>Age range.</p><p>Enumeration values:</p><ul><li>teen: youth</li><li>young_adult: adulthood</li><li>middle_aged: middle-aged</li><li>mature: mature</li></ul>
     */
    public $Age;

    /**
     * @var string <p>Appearance</p><p>Enumeration value:</p><ul><li>caucasian: White</li><li>asian: Asian</li><li>latino: Latino</li><li>african: African</li><li>middle_eastern: Middle Eastern</li></ul>
     */
    public $Appearance;

    /**
     * @var string <p>Body shape</p><p>Enumeration value:</p><ul><li>slim: Slim</li><li>standard: Standard</li><li>athletic: Healthy</li><li>chubby: Chubby</li></ul>
     */
    public $BodyType;

    /**
     * @param string $Gender <p>Gender</p><p>Enumeration value:</p><ul><li>male: man</li><li>female: woman</li><li>any: unlimited</li></ul>
     * @param string $Age <p>Age range.</p><p>Enumeration values:</p><ul><li>teen: youth</li><li>young_adult: adulthood</li><li>middle_aged: middle-aged</li><li>mature: mature</li></ul>
     * @param string $Appearance <p>Appearance</p><p>Enumeration value:</p><ul><li>caucasian: White</li><li>asian: Asian</li><li>latino: Latino</li><li>african: African</li><li>middle_eastern: Middle Eastern</li></ul>
     * @param string $BodyType <p>Body shape</p><p>Enumeration value:</p><ul><li>slim: Slim</li><li>standard: Standard</li><li>athletic: Healthy</li><li>chubby: Chubby</li></ul>
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

        if (array_key_exists("Appearance",$param) and $param["Appearance"] !== null) {
            $this->Appearance = $param["Appearance"];
        }

        if (array_key_exists("BodyType",$param) and $param["BodyType"] !== null) {
            $this->BodyType = $param["BodyType"];
        }
    }
}
