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
 * Workflow Task Statistics
 *
 * @method integer getCount() Obtain Number of Workflow Tasks
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCount(integer $Count) Set Number of Workflow Tasks
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getTypeCount() Obtain Task Type Dimension Statistics
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTypeCount(array $TypeCount) Set Task Type Dimension Statistics
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getCycleCount() Obtain Task Cycle Type Dimension Statistics
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCycleCount(array $CycleCount) Set Task Cycle Type Dimension Statistics
Note: This field may return null, indicating that no valid value can be obtained.
 */
class WorkflowTaskCountOpsDto extends AbstractModel
{
    /**
     * @var integer Number of Workflow Tasks
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Count;

    /**
     * @var array Task Type Dimension Statistics
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TypeCount;

    /**
     * @var array Task Cycle Type Dimension Statistics
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CycleCount;

    /**
     * @param integer $Count Number of Workflow Tasks
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $TypeCount Task Type Dimension Statistics
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $CycleCount Task Cycle Type Dimension Statistics
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("TypeCount",$param) and $param["TypeCount"] !== null) {
            $this->TypeCount = [];
            foreach ($param["TypeCount"] as $key => $value){
                $obj = new PairDto();
                $obj->deserialize($value);
                array_push($this->TypeCount, $obj);
            }
        }

        if (array_key_exists("CycleCount",$param) and $param["CycleCount"] !== null) {
            $this->CycleCount = [];
            foreach ($param["CycleCount"] as $key => $value){
                $obj = new PairDto();
                $obj->deserialize($value);
                array_push($this->CycleCount, $obj);
            }
        }
    }
}
