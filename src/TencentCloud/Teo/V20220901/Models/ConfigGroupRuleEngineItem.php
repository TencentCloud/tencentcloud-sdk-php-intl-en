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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * L7 acceleration rules. The execution order is determined by the array sequence.
 *
 * @method string getRuleName() Obtain <p>Rule name. The name must be no more than 255 characters.</p>
 * @method void setRuleName(string $RuleName) Set <p>Rule name. The name must be no more than 255 characters.</p>
 * @method array getDescription() Obtain <p>Rule note. Multiple notes can be filled.</p>
 * @method void setDescription(array $Description) Set <p>Rule note. Multiple notes can be filled.</p>
 * @method array getBranches() Obtain <p>Sub-rule branch. This list currently only supports filling in one rule. Additional entries are invalid.</p>
 * @method void setBranches(array $Branches) Set <p>Sub-rule branch. This list currently only supports filling in one rule. Additional entries are invalid.</p>
 */
class ConfigGroupRuleEngineItem extends AbstractModel
{
    /**
     * @var string <p>Rule name. The name must be no more than 255 characters.</p>
     */
    public $RuleName;

    /**
     * @var array <p>Rule note. Multiple notes can be filled.</p>
     */
    public $Description;

    /**
     * @var array <p>Sub-rule branch. This list currently only supports filling in one rule. Additional entries are invalid.</p>
     */
    public $Branches;

    /**
     * @param string $RuleName <p>Rule name. The name must be no more than 255 characters.</p>
     * @param array $Description <p>Rule note. Multiple notes can be filled.</p>
     * @param array $Branches <p>Sub-rule branch. This list currently only supports filling in one rule. Additional entries are invalid.</p>
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Branches",$param) and $param["Branches"] !== null) {
            $this->Branches = [];
            foreach ($param["Branches"] as $key => $value){
                $obj = new RuleBranch();
                $obj->deserialize($value);
                array_push($this->Branches, $obj);
            }
        }
    }
}
