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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rule Group Execution Result Pagination
 *
 * @method integer getTotalCount() Obtain Record CountNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set Record CountNote: This field may return null, indicating that no valid value can be obtained.
 * @method array getItems() Obtain Rule Group Execution ResultNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setItems(array $Items) Set Rule Group Execution ResultNote: This field may return null, indicating that no valid value can be obtained.
 */
class RuleGroupExecResultPage extends AbstractModel
{
    /**
     * @var integer Record CountNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TotalCount;

    /**
     * @var array Rule Group Execution ResultNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Items;

    /**
     * @param integer $TotalCount Record CountNote: This field may return null, indicating that no valid value can be obtained.
     * @param array $Items Rule Group Execution ResultNote: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new RuleGroupExecResult();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
