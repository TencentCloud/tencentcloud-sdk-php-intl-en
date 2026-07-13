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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Paginated data of budget modification records
 *
 * @method integer getPages() Obtain Pagination
 * @method void setPages(integer $Pages) Set Pagination
 * @method integer getSize() Obtain Pagination size.
 * @method void setSize(integer $Size) Set Pagination size.
 * @method integer getTotal() Obtain Total amount
 * @method void setTotal(integer $Total) Set Total amount
 * @method array getRecords() Obtain Querying the data list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRecords(array $Records) Set Querying the data list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCurrent() Obtain Current Page
 * @method void setCurrent(integer $Current) Set Current Page
 */
class DataForBudgetOperationLogPage extends AbstractModel
{
    /**
     * @var integer Pagination
     */
    public $Pages;

    /**
     * @var integer Pagination size.
     */
    public $Size;

    /**
     * @var integer Total amount
     */
    public $Total;

    /**
     * @var array Querying the data list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Records;

    /**
     * @var integer Current Page
     */
    public $Current;

    /**
     * @param integer $Pages Pagination
     * @param integer $Size Pagination size.
     * @param integer $Total Total amount
     * @param array $Records Querying the data list
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Current Current Page
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
        if (array_key_exists("Pages",$param) and $param["Pages"] !== null) {
            $this->Pages = $param["Pages"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Records",$param) and $param["Records"] !== null) {
            $this->Records = [];
            foreach ($param["Records"] as $key => $value){
                $obj = new BudgetOperationLogEntity();
                $obj->deserialize($value);
                array_push($this->Records, $obj);
            }
        }

        if (array_key_exists("Current",$param) and $param["Current"] !== null) {
            $this->Current = $param["Current"];
        }
    }
}
