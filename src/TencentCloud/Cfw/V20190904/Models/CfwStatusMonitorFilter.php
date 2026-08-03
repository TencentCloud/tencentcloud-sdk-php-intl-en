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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Status monitoring filter condition.
 *
 * @method string getName() Obtain Filter field name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Filter field name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getValues() Obtain Filter value list, up to 10.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setValues(array $Values) Set Filter value list, up to 10.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getOperatorType() Obtain Operator type, optional; only supported for backend permission types.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOperatorType(integer $OperatorType) Set Operator type, optional; only supported for backend permission types.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CfwStatusMonitorFilter extends AbstractModel
{
    /**
     * @var string Filter field name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var array Filter value list, up to 10.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Values;

    /**
     * @var integer Operator type, optional; only supported for backend permission types.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OperatorType;

    /**
     * @param string $Name Filter field name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Values Filter value list, up to 10.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $OperatorType Operator type, optional; only supported for backend permission types.
Note: This field may return null, indicating that no valid values can be obtained.
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
