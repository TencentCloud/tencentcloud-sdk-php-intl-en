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
 * Filter criteria
 *
 * @method string getName() Obtain Filtered Items
 * @method void setName(string $Name) Set Filtered Items
 * @method array getValues() Obtain Filtered Value
 * @method void setValues(array $Values) Set Filtered Value
 * @method integer getOperatorType() Obtain Central platform definition:
1 equal 2 greater than 3 less than 4 greater than or equal to 5 less than or equal to 6 not equal to 9 fuzzy matching 13 exact matching 14 bitwise AND
Enter 7 for exact match and 9 for fuzzy matching. 

 * @method void setOperatorType(integer $OperatorType) Set Central platform definition:
1 equal 2 greater than 3 less than 4 greater than or equal to 5 less than or equal to 6 not equal to 9 fuzzy matching 13 exact matching 14 bitwise AND
Enter 7 for exact match and 9 for fuzzy matching. 
 */
class WhereFilter extends AbstractModel
{
    /**
     * @var string Filtered Items
     */
    public $Name;

    /**
     * @var array Filtered Value
     */
    public $Values;

    /**
     * @var integer Central platform definition:
1 equal 2 greater than 3 less than 4 greater than or equal to 5 less than or equal to 6 not equal to 9 fuzzy matching 13 exact matching 14 bitwise AND
Enter 7 for exact match and 9 for fuzzy matching. 

     */
    public $OperatorType;

    /**
     * @param string $Name Filtered Items
     * @param array $Values Filtered Value
     * @param integer $OperatorType Central platform definition:
1 equal 2 greater than 3 less than 4 greater than or equal to 5 less than or equal to 6 not equal to 9 fuzzy matching 13 exact matching 14 bitwise AND
Enter 7 for exact match and 9 for fuzzy matching. 
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
