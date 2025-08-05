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
 * Task judgment conditions.
 *
 * @method string getId() Obtain Judgment condition ID.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setId(string $Id) Set Judgment condition ID.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getConditions() Obtain Judgment condition configuration.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setConditions(array $Conditions) Set Judgment condition configuration.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getLinker() Obtain Logical operator for the list of conditions. Valid values:

 - &&: logical AND
 - ||: logical OR
 * @method void setLinker(string $Linker) Set Logical operator for the list of conditions. Valid values:

 - &&: logical AND
 - ||: logical OR
 * @method array getRearDriveIndexs() Obtain Indexes of the nodes to execute if the judgment conditions are met.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRearDriveIndexs(array $RearDriveIndexs) Set Indexes of the nodes to execute if the judgment conditions are met.
Note: This field may return null, indicating that no valid value can be obtained.
 */
class Rules extends AbstractModel
{
    /**
     * @var string Judgment condition ID.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Id;

    /**
     * @var array Judgment condition configuration.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Conditions;

    /**
     * @var string Logical operator for the list of conditions. Valid values:

 - &&: logical AND
 - ||: logical OR
     */
    public $Linker;

    /**
     * @var array Indexes of the nodes to execute if the judgment conditions are met.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RearDriveIndexs;

    /**
     * @param string $Id Judgment condition ID.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $Conditions Judgment condition configuration.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Linker Logical operator for the list of conditions. Valid values:

 - &&: logical AND
 - ||: logical OR
     * @param array $RearDriveIndexs Indexes of the nodes to execute if the judgment conditions are met.
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new RuleConditionItem();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }

        if (array_key_exists("Linker",$param) and $param["Linker"] !== null) {
            $this->Linker = $param["Linker"];
        }

        if (array_key_exists("RearDriveIndexs",$param) and $param["RearDriveIndexs"] !== null) {
            $this->RearDriveIndexs = $param["RearDriveIndexs"];
        }
    }
}
