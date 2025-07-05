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
 * Sub-rule
 *
 * @method array getBranches() Obtain Sub-Rule branch.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setBranches(array $Branches) Set Sub-Rule branch.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method array getDescription() Obtain Rule comments.
 * @method void setDescription(array $Description) Set Rule comments.
 */
class RuleEngineSubRule extends AbstractModel
{
    /**
     * @var array Sub-Rule branch.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $Branches;

    /**
     * @var array Rule comments.
     */
    public $Description;

    /**
     * @param array $Branches Sub-Rule branch.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param array $Description Rule comments.
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
                $obj = new RuleBranch();
                $obj->deserialize($value);
                array_push($this->Branches, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
