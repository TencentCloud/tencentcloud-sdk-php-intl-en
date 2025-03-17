<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeColumnLineage request structure.
 *
 * @method string getDirection() Obtain Enumeration value of query direction.

- INPUT
- OUTPUT
- BOTH
 * @method void setDirection(string $Direction) Set Enumeration value of query direction.

- INPUT
- OUTPUT
- BOTH
 * @method ColumnLineageInfo getData() Obtain Field Information
 * @method void setData(ColumnLineageInfo $Data) Set Field Information
 * @method integer getInputDepth() Obtain Single Query Indegree
 * @method void setInputDepth(integer $InputDepth) Set Single Query Indegree
 * @method integer getOutputDepth() Obtain Single Query Outdegree
 * @method void setOutputDepth(integer $OutputDepth) Set Single Query Outdegree
 * @method array getExtParams() Obtain Additional Parameters (Pass Caller Information)
 * @method void setExtParams(array $ExtParams) Set Additional Parameters (Pass Caller Information)
 * @method boolean getIgnoreTemp() Obtain Filter Temporary Tables with the default value true
 * @method void setIgnoreTemp(boolean $IgnoreTemp) Set Filter Temporary Tables with the default value true
 */
class DescribeColumnLineageRequest extends AbstractModel
{
    /**
     * @var string Enumeration value of query direction.

- INPUT
- OUTPUT
- BOTH
     */
    public $Direction;

    /**
     * @var ColumnLineageInfo Field Information
     */
    public $Data;

    /**
     * @var integer Single Query Indegree
     */
    public $InputDepth;

    /**
     * @var integer Single Query Outdegree
     */
    public $OutputDepth;

    /**
     * @var array Additional Parameters (Pass Caller Information)
     */
    public $ExtParams;

    /**
     * @var boolean Filter Temporary Tables with the default value true
     */
    public $IgnoreTemp;

    /**
     * @param string $Direction Enumeration value of query direction.

- INPUT
- OUTPUT
- BOTH
     * @param ColumnLineageInfo $Data Field Information
     * @param integer $InputDepth Single Query Indegree
     * @param integer $OutputDepth Single Query Outdegree
     * @param array $ExtParams Additional Parameters (Pass Caller Information)
     * @param boolean $IgnoreTemp Filter Temporary Tables with the default value true
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
        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = new ColumnLineageInfo();
            $this->Data->deserialize($param["Data"]);
        }

        if (array_key_exists("InputDepth",$param) and $param["InputDepth"] !== null) {
            $this->InputDepth = $param["InputDepth"];
        }

        if (array_key_exists("OutputDepth",$param) and $param["OutputDepth"] !== null) {
            $this->OutputDepth = $param["OutputDepth"];
        }

        if (array_key_exists("ExtParams",$param) and $param["ExtParams"] !== null) {
            $this->ExtParams = [];
            foreach ($param["ExtParams"] as $key => $value){
                $obj = new RecordField();
                $obj->deserialize($value);
                array_push($this->ExtParams, $obj);
            }
        }

        if (array_key_exists("IgnoreTemp",$param) and $param["IgnoreTemp"] !== null) {
            $this->IgnoreTemp = $param["IgnoreTemp"];
        }
    }
}
