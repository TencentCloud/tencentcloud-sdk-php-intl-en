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
 * Paging Query Workflow Canvas Run Start and End Time
 *
 * @method integer getTotalCount() Obtain Total numberNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set Total numberNote: This field may return null, indicating that no valid value can be obtained.
 * @method array getItems() Obtain data
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setItems(array $Items) Set data
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getPageSize() Obtain Page sizeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setPageSize(integer $PageSize) Set Page sizeNote: This field may return null, indicating that no valid value can be obtained.
 */
class WorkFlowExecuteDtoByPage extends AbstractModel
{
    /**
     * @var integer Total numberNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TotalCount;

    /**
     * @var array data
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Items;

    /**
     * @var integer Page sizeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $PageSize;

    /**
     * @param integer $TotalCount Total numberNote: This field may return null, indicating that no valid value can be obtained.
     * @param array $Items data
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $PageSize Page sizeNote: This field may return null, indicating that no valid value can be obtained.
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
                $obj = new WorkFlowExecuteDto();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
