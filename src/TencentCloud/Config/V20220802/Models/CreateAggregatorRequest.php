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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAggregator request structure.
 *
 * @method string getName() Obtain <p>Account group name.</p>
 * @method void setName(string $Name) Set <p>Account group name.</p>
 * @method string getDescription() Obtain <p>Account group description.</p>
 * @method void setDescription(string $Description) Set <p>Account group description.</p>
 * @method string getType() Obtain <p>Account group type.</p><p>Valid values:</p><ul><li>RD: Global account group</li><li>CUSTOM: Custom account group</li></ul>
 * @method void setType(string $Type) Set <p>Account group type.</p><p>Valid values:</p><ul><li>RD: Global account group</li><li>CUSTOM: Custom account group</li></ul>
 * @method array getAggregatorAccounts() Obtain <p>Account group member list, up to 100 entries.</p>
 * @method void setAggregatorAccounts(array $AggregatorAccounts) Set <p>Account group member list, up to 100 entries.</p>
 */
class CreateAggregatorRequest extends AbstractModel
{
    /**
     * @var string <p>Account group name.</p>
     */
    public $Name;

    /**
     * @var string <p>Account group description.</p>
     */
    public $Description;

    /**
     * @var string <p>Account group type.</p><p>Valid values:</p><ul><li>RD: Global account group</li><li>CUSTOM: Custom account group</li></ul>
     */
    public $Type;

    /**
     * @var array <p>Account group member list, up to 100 entries.</p>
     */
    public $AggregatorAccounts;

    /**
     * @param string $Name <p>Account group name.</p>
     * @param string $Description <p>Account group description.</p>
     * @param string $Type <p>Account group type.</p><p>Valid values:</p><ul><li>RD: Global account group</li><li>CUSTOM: Custom account group</li></ul>
     * @param array $AggregatorAccounts <p>Account group member list, up to 100 entries.</p>
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AggregatorAccounts",$param) and $param["AggregatorAccounts"] !== null) {
            $this->AggregatorAccounts = [];
            foreach ($param["AggregatorAccounts"] as $key => $value){
                $obj = new AggregatorAccount();
                $obj->deserialize($value);
                array_push($this->AggregatorAccounts, $obj);
            }
        }
    }
}
