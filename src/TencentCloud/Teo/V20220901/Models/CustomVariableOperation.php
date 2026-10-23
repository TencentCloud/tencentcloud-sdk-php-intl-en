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
 * Custom Variable operation details.
 *
 * @method array getBranches() Obtain <p>Sub-rule branch. This list currently only supports filling in one rule; additional entries are invalid.</p>
 * @method void setBranches(array $Branches) Set <p>Sub-rule branch. This list currently only supports filling in one rule; additional entries are invalid.</p>
 * @method array getDescription() Obtain <p>Rule note. Multiple notes can be filled.</p>
 * @method void setDescription(array $Description) Set <p>Rule note. Multiple notes can be filled.</p>
 */
class CustomVariableOperation extends AbstractModel
{
    /**
     * @var array <p>Sub-rule branch. This list currently only supports filling in one rule; additional entries are invalid.</p>
     */
    public $Branches;

    /**
     * @var array <p>Rule note. Multiple notes can be filled.</p>
     */
    public $Description;

    /**
     * @param array $Branches <p>Sub-rule branch. This list currently only supports filling in one rule; additional entries are invalid.</p>
     * @param array $Description <p>Rule note. Multiple notes can be filled.</p>
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
        if (array_key_exists("Branches",$param) and $param["Branches"] !== null) {
            $this->Branches = [];
            foreach ($param["Branches"] as $key => $value){
                $obj = new CustomVariableOperationRuleBranch();
                $obj->deserialize($value);
                array_push($this->Branches, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
