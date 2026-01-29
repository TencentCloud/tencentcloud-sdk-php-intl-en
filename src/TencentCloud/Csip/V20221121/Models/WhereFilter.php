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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Filter conditions.
 *
 * @method string getName() Obtain Filter item
 * @method void setName(string $Name) Set Filter item
 * @method array getValues() Obtain Filter value
 * @method void setValues(array $Values) Set Filter value
 * @method integer getOperatorType() Obtain Central platform definition:.
1 equal 2 larger than 3 less than 4 greater than or equal to 5 less than or equal to 6 not equal to 9 fuzzy matching 13 non-fuzzy matching 14 bitwise and.
Exact match fills 7. fuzzy matching fills 9. 

 * @method void setOperatorType(integer $OperatorType) Set Central platform definition:.
1 equal 2 larger than 3 less than 4 greater than or equal to 5 less than or equal to 6 not equal to 9 fuzzy matching 13 non-fuzzy matching 14 bitwise and.
Exact match fills 7. fuzzy matching fills 9. 
 */
class WhereFilter extends AbstractModel
{
    /**
     * @var string Filter item
     */
    public $Name;

    /**
     * @var array Filter value
     */
    public $Values;

    /**
     * @var integer Central platform definition:.
1 equal 2 larger than 3 less than 4 greater than or equal to 5 less than or equal to 6 not equal to 9 fuzzy matching 13 non-fuzzy matching 14 bitwise and.
Exact match fills 7. fuzzy matching fills 9. 

     */
    public $OperatorType;

    /**
     * @param string $Name Filter item
     * @param array $Values Filter value
     * @param integer $OperatorType Central platform definition:.
1 equal 2 larger than 3 less than 4 greater than or equal to 5 less than or equal to 6 not equal to 9 fuzzy matching 13 non-fuzzy matching 14 bitwise and.
Exact match fills 7. fuzzy matching fills 9. 
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

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("OperatorType",$param) and $param["OperatorType"] !== null) {
            $this->OperatorType = $param["OperatorType"];
        }
    }
}
