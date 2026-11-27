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
namespace TencentCloud\Controlcenter\V20230110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Account Factory baseline items.
 *
 * @method string getIdentifier() Obtain Unique ID of the Account Factory baseline item, which can contain only English letters, numbers, and symbols (@,._[]-:()+=), and must be 2 to 128 characters in length.
 * @method void setIdentifier(string $Identifier) Set Unique ID of the Account Factory baseline item, which can contain only English letters, numbers, and symbols (@,._[]-:()+=), and must be 2 to 128 characters in length.
 * @method string getName() Obtain Baseline item name, which is unique, supports only the combination of English letters, digits, and symbols (@&_[]-), and is 1 to 25 characters in length.
 * @method void setName(string $Name) Set Baseline item name, which is unique, supports only the combination of English letters, digits, and symbols (@&_[]-), and is 1 to 25 characters in length.
 * @method string getNameEn() Obtain Baseline item English name, which must be unique, can contain only English letters, numbers, spaces, and symbols (@&_[]-), and must be 1 to 64 characters in length.
 * @method void setNameEn(string $NameEn) Set Baseline item English name, which must be unique, can contain only English letters, numbers, spaces, and symbols (@&_[]-), and must be 1 to 64 characters in length.
 * @method integer getWeight() Obtain Baseline item weight. A smaller value indicates a higher priority. Value range: greater than or equal to 0.
 * @method void setWeight(integer $Weight) Set Baseline item weight. A smaller value indicates a higher priority. Value range: greater than or equal to 0.
 * @method integer getRequired() Obtain Whether the baseline item is required. Valid values: 1 (yes) and 0 (no).
 * @method void setRequired(integer $Required) Set Whether the baseline item is required. Valid values: 1 (yes) and 0 (no).
 * @method array getDependsOn() Obtain Baseline item dependencies. The value range of N depends on the number of other baseline items that the current baseline item depends on.
 * @method void setDependsOn(array $DependsOn) Set Baseline item dependencies. The value range of N depends on the number of other baseline items that the current baseline item depends on.
 * @method string getDescription() Obtain Baseline description, which is 2 to 256 English characters in length. The default value is empty.
 * @method void setDescription(string $Description) Set Baseline description, which is 2 to 256 English characters in length. The default value is empty.
 * @method string getDescriptionEn() Obtain Baseline item English description, which is 2 to 1024 English characters in length. The default value is empty.
 * @method void setDescriptionEn(string $DescriptionEn) Set Baseline item English description, which is 2 to 1024 English characters in length. The default value is empty.
 * @method string getClassify() Obtain Baseline category, which is 2 to 32 English characters in length and cannot be empty.
 * @method void setClassify(string $Classify) Set Baseline category, which is 2 to 32 English characters in length and cannot be empty.
 * @method string getClassifyEn() Obtain Baseline English category, which is 2 to 64 English characters in length and cannot be empty.
 * @method void setClassifyEn(string $ClassifyEn) Set Baseline English category, which is 2 to 64 English characters in length and cannot be empty.
 */
class AccountFactoryItem extends AbstractModel
{
    /**
     * @var string Unique ID of the Account Factory baseline item, which can contain only English letters, numbers, and symbols (@,._[]-:()+=), and must be 2 to 128 characters in length.
     */
    public $Identifier;

    /**
     * @var string Baseline item name, which is unique, supports only the combination of English letters, digits, and symbols (@&_[]-), and is 1 to 25 characters in length.
     */
    public $Name;

    /**
     * @var string Baseline item English name, which must be unique, can contain only English letters, numbers, spaces, and symbols (@&_[]-), and must be 1 to 64 characters in length.
     */
    public $NameEn;

    /**
     * @var integer Baseline item weight. A smaller value indicates a higher priority. Value range: greater than or equal to 0.
     */
    public $Weight;

    /**
     * @var integer Whether the baseline item is required. Valid values: 1 (yes) and 0 (no).
     */
    public $Required;

    /**
     * @var array Baseline item dependencies. The value range of N depends on the number of other baseline items that the current baseline item depends on.
     */
    public $DependsOn;

    /**
     * @var string Baseline description, which is 2 to 256 English characters in length. The default value is empty.
     */
    public $Description;

    /**
     * @var string Baseline item English description, which is 2 to 1024 English characters in length. The default value is empty.
     */
    public $DescriptionEn;

    /**
     * @var string Baseline category, which is 2 to 32 English characters in length and cannot be empty.
     */
    public $Classify;

    /**
     * @var string Baseline English category, which is 2 to 64 English characters in length and cannot be empty.
     */
    public $ClassifyEn;

    /**
     * @param string $Identifier Unique ID of the Account Factory baseline item, which can contain only English letters, numbers, and symbols (@,._[]-:()+=), and must be 2 to 128 characters in length.
     * @param string $Name Baseline item name, which is unique, supports only the combination of English letters, digits, and symbols (@&_[]-), and is 1 to 25 characters in length.
     * @param string $NameEn Baseline item English name, which must be unique, can contain only English letters, numbers, spaces, and symbols (@&_[]-), and must be 1 to 64 characters in length.
     * @param integer $Weight Baseline item weight. A smaller value indicates a higher priority. Value range: greater than or equal to 0.
     * @param integer $Required Whether the baseline item is required. Valid values: 1 (yes) and 0 (no).
     * @param array $DependsOn Baseline item dependencies. The value range of N depends on the number of other baseline items that the current baseline item depends on.
     * @param string $Description Baseline description, which is 2 to 256 English characters in length. The default value is empty.
     * @param string $DescriptionEn Baseline item English description, which is 2 to 1024 English characters in length. The default value is empty.
     * @param string $Classify Baseline category, which is 2 to 32 English characters in length and cannot be empty.
     * @param string $ClassifyEn Baseline English category, which is 2 to 64 English characters in length and cannot be empty.
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
        if (array_key_exists("Identifier",$param) and $param["Identifier"] !== null) {
            $this->Identifier = $param["Identifier"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("NameEn",$param) and $param["NameEn"] !== null) {
            $this->NameEn = $param["NameEn"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Required",$param) and $param["Required"] !== null) {
            $this->Required = $param["Required"];
        }

        if (array_key_exists("DependsOn",$param) and $param["DependsOn"] !== null) {
            $this->DependsOn = [];
            foreach ($param["DependsOn"] as $key => $value){
                $obj = new DependsOnItem();
                $obj->deserialize($value);
                array_push($this->DependsOn, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DescriptionEn",$param) and $param["DescriptionEn"] !== null) {
            $this->DescriptionEn = $param["DescriptionEn"];
        }

        if (array_key_exists("Classify",$param) and $param["Classify"] !== null) {
            $this->Classify = $param["Classify"];
        }

        if (array_key_exists("ClassifyEn",$param) and $param["ClassifyEn"] !== null) {
            $this->ClassifyEn = $param["ClassifyEn"];
        }
    }
}
