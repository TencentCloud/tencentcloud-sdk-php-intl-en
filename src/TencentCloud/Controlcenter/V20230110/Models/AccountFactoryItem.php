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
 * Account factory baseline item.
 *
 * @method string getIdentifier() Obtain Specifies the unique identifier for account factory baseline item, can only contain english letters, digits, and @, ,._[]-:()()[]+=., with a length of 2-128 characters.
 * @method void setIdentifier(string $Identifier) Set Specifies the unique identifier for account factory baseline item, can only contain english letters, digits, and @, ,._[]-:()()[]+=., with a length of 2-128 characters.
 * @method string getName() Obtain Baseline item name. specifies a unique name for the feature item. supports a combination of english letters, numbers, chinese characters, and symbols @, &, _, [, ], -. valid values: 1-25 chinese or english characters.
 * @method void setName(string $Name) Set Baseline item name. specifies a unique name for the feature item. supports a combination of english letters, numbers, chinese characters, and symbols @, &, _, [, ], -. valid values: 1-25 chinese or english characters.
 * @method string getNameEn() Obtain Baseline item english name. specifies a unique name for the baseline item. supports a combination of english letters, digits, spaces, and symbols @, &, _, [], -. valid values: 1-64 english characters.
 * @method void setNameEn(string $NameEn) Set Baseline item english name. specifies a unique name for the baseline item. supports a combination of english letters, digits, spaces, and symbols @, &, _, [], -. valid values: 1-64 english characters.
 * @method integer getWeight() Obtain Baseline item weight. the smaller the value, the higher the weight. value range equal to or greater than 0.
 * @method void setWeight(integer $Weight) Set Baseline item weight. the smaller the value, the higher the weight. value range equal to or greater than 0.
 * @method integer getRequired() Obtain Specifies whether the baseline item is required (1: required; 0: optional).
 * @method void setRequired(integer $Required) Set Specifies whether the baseline item is required (1: required; 0: optional).
 * @method array getDependsOn() Obtain Baseline item dependency. value range of N depends on the count of other baseline items it relies on.
 * @method void setDependsOn(array $DependsOn) Set Baseline item dependency. value range of N depends on the count of other baseline items it relies on.
 * @method string getDescription() Obtain Baseline description, with a length of 2 to 256 english or chinese characters. it is empty by default.
 * @method void setDescription(string $Description) Set Baseline description, with a length of 2 to 256 english or chinese characters. it is empty by default.
 * @method string getDescriptionEn() Obtain Baseline item english description, with a length of 2 to 1024 english characters. it is empty by default.
 * @method void setDescriptionEn(string $DescriptionEn) Set Baseline item english description, with a length of 2 to 1024 english characters. it is empty by default.
 * @method string getClassify() Obtain Baseline classification. length: 2-32 english or chinese characters. values cannot be empty.
 * @method void setClassify(string $Classify) Set Baseline classification. length: 2-32 english or chinese characters. values cannot be empty.
 * @method string getClassifyEn() Obtain Baseline english classification, with a length of 2-64 english characters. cannot be empty.
 * @method void setClassifyEn(string $ClassifyEn) Set Baseline english classification, with a length of 2-64 english characters. cannot be empty.
 */
class AccountFactoryItem extends AbstractModel
{
    /**
     * @var string Specifies the unique identifier for account factory baseline item, can only contain english letters, digits, and @, ,._[]-:()()[]+=., with a length of 2-128 characters.
     */
    public $Identifier;

    /**
     * @var string Baseline item name. specifies a unique name for the feature item. supports a combination of english letters, numbers, chinese characters, and symbols @, &, _, [, ], -. valid values: 1-25 chinese or english characters.
     */
    public $Name;

    /**
     * @var string Baseline item english name. specifies a unique name for the baseline item. supports a combination of english letters, digits, spaces, and symbols @, &, _, [], -. valid values: 1-64 english characters.
     */
    public $NameEn;

    /**
     * @var integer Baseline item weight. the smaller the value, the higher the weight. value range equal to or greater than 0.
     */
    public $Weight;

    /**
     * @var integer Specifies whether the baseline item is required (1: required; 0: optional).
     */
    public $Required;

    /**
     * @var array Baseline item dependency. value range of N depends on the count of other baseline items it relies on.
     */
    public $DependsOn;

    /**
     * @var string Baseline description, with a length of 2 to 256 english or chinese characters. it is empty by default.
     */
    public $Description;

    /**
     * @var string Baseline item english description, with a length of 2 to 1024 english characters. it is empty by default.
     */
    public $DescriptionEn;

    /**
     * @var string Baseline classification. length: 2-32 english or chinese characters. values cannot be empty.
     */
    public $Classify;

    /**
     * @var string Baseline english classification, with a length of 2-64 english characters. cannot be empty.
     */
    public $ClassifyEn;

    /**
     * @param string $Identifier Specifies the unique identifier for account factory baseline item, can only contain english letters, digits, and @, ,._[]-:()()[]+=., with a length of 2-128 characters.
     * @param string $Name Baseline item name. specifies a unique name for the feature item. supports a combination of english letters, numbers, chinese characters, and symbols @, &, _, [, ], -. valid values: 1-25 chinese or english characters.
     * @param string $NameEn Baseline item english name. specifies a unique name for the baseline item. supports a combination of english letters, digits, spaces, and symbols @, &, _, [], -. valid values: 1-64 english characters.
     * @param integer $Weight Baseline item weight. the smaller the value, the higher the weight. value range equal to or greater than 0.
     * @param integer $Required Specifies whether the baseline item is required (1: required; 0: optional).
     * @param array $DependsOn Baseline item dependency. value range of N depends on the count of other baseline items it relies on.
     * @param string $Description Baseline description, with a length of 2 to 256 english or chinese characters. it is empty by default.
     * @param string $DescriptionEn Baseline item english description, with a length of 2 to 1024 english characters. it is empty by default.
     * @param string $Classify Baseline classification. length: 2-32 english or chinese characters. values cannot be empty.
     * @param string $ClassifyEn Baseline english classification, with a length of 2-64 english characters. cannot be empty.
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
