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
 * Quality Check Comparison Results
 *
 * @method array getItems() Obtain Comparison Result Item List
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setItems(array $Items) Set Comparison Result Item List
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTotalRows() Obtain Total Number of Rows Detected
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTotalRows(integer $TotalRows) Set Total Number of Rows Detected
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getPassRows() Obtain Number of Rows Passed
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setPassRows(integer $PassRows) Set Number of Rows Passed
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTriggerRows() Obtain Number of Rows Failed
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTriggerRows(integer $TriggerRows) Set Number of Rows Failed
Note: This field may return null, indicating that no valid value can be obtained.
 */
class CompareResult extends AbstractModel
{
    /**
     * @var array Comparison Result Item List
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Items;

    /**
     * @var integer Total Number of Rows Detected
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TotalRows;

    /**
     * @var integer Number of Rows Passed
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $PassRows;

    /**
     * @var integer Number of Rows Failed
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TriggerRows;

    /**
     * @param array $Items Comparison Result Item List
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $TotalRows Total Number of Rows Detected
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $PassRows Number of Rows Passed
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $TriggerRows Number of Rows Failed
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
        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new CompareResultItem();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("TotalRows",$param) and $param["TotalRows"] !== null) {
            $this->TotalRows = $param["TotalRows"];
        }

        if (array_key_exists("PassRows",$param) and $param["PassRows"] !== null) {
            $this->PassRows = $param["PassRows"];
        }

        if (array_key_exists("TriggerRows",$param) and $param["TriggerRows"] !== null) {
            $this->TriggerRows = $param["TriggerRows"];
        }
    }
}
