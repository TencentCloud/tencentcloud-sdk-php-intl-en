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
 * Paginated data of budget management
 *
 * @method boolean getOptimizeCountSql() Obtain Optimize COUNT SQL automatically if encounter unresolved jSqlParser case, set the parameter to false
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOptimizeCountSql(boolean $OptimizeCountSql) Set Optimize COUNT SQL automatically if encounter unresolved jSqlParser case, set the parameter to false
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPages() Obtain Pagination
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPages(integer $Pages) Set Pagination
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getOrders() Obtain Sorting field information. When allowing frontend input, be aware of SQL injection issue. Use SqlInjectionUtils.check(...) to check the text.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOrders(array $Orders) Set Sorting field information. When allowing frontend input, be aware of SQL injection issue. Use SqlInjectionUtils.check(...) to check the text.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCountId() Obtain The statementId for a custom count query in xml can also be set without specifying it. Just add _mpCount after the pagination statementId. For example, for the pagination selectPageById, set the count query statementId to selectPageById_mpCount. The SQL execution can then be found by default.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCountId(string $CountId) Set The statementId for a custom count query in xml can also be set without specifying it. Just add _mpCount after the pagination statementId. For example, for the pagination selectPageById, set the count query statementId to selectPageById_mpCount. The SQL execution can then be found by default.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSize() Obtain Pagination size.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSize(integer $Size) Set Pagination size.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotal() Obtain total amount
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotal(integer $Total) Set total amount
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMaxLimit() Obtain Number of items per page limit
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxLimit(string $MaxLimit) Set Number of items per page limit
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getRecords() Obtain Querying the data list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRecords(array $Records) Set Querying the data list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCurrent() Obtain Current Page
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCurrent(integer $Current) Set Current Page
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getSearchCount() Obtain Whether to perform a count query. If you only want to query the list and do not query the total record count, set the parameter to false.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSearchCount(boolean $SearchCount) Set Whether to perform a count query. If you only want to query the list and do not query the total record count, set the parameter to false.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BudgetRemindRecordList extends AbstractModel
{
    /**
     * @var boolean Optimize COUNT SQL automatically if encounter unresolved jSqlParser case, set the parameter to false
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OptimizeCountSql;

    /**
     * @var integer Pagination
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Pages;

    /**
     * @var array Sorting field information. When allowing frontend input, be aware of SQL injection issue. Use SqlInjectionUtils.check(...) to check the text.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Orders;

    /**
     * @var string The statementId for a custom count query in xml can also be set without specifying it. Just add _mpCount after the pagination statementId. For example, for the pagination selectPageById, set the count query statementId to selectPageById_mpCount. The SQL execution can then be found by default.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CountId;

    /**
     * @var integer Pagination size.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Size;

    /**
     * @var integer total amount
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Total;

    /**
     * @var string Number of items per page limit
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxLimit;

    /**
     * @var array Querying the data list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Records;

    /**
     * @var integer Current Page
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Current;

    /**
     * @var boolean Whether to perform a count query. If you only want to query the list and do not query the total record count, set the parameter to false.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SearchCount;

    /**
     * @param boolean $OptimizeCountSql Optimize COUNT SQL automatically if encounter unresolved jSqlParser case, set the parameter to false
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Pages Pagination
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Orders Sorting field information. When allowing frontend input, be aware of SQL injection issue. Use SqlInjectionUtils.check(...) to check the text.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CountId The statementId for a custom count query in xml can also be set without specifying it. Just add _mpCount after the pagination statementId. For example, for the pagination selectPageById, set the count query statementId to selectPageById_mpCount. The SQL execution can then be found by default.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Size Pagination size.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Total total amount
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MaxLimit Number of items per page limit
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Records Querying the data list
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Current Current Page
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $SearchCount Whether to perform a count query. If you only want to query the list and do not query the total record count, set the parameter to false.
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
        if (array_key_exists("OptimizeCountSql",$param) and $param["OptimizeCountSql"] !== null) {
            $this->OptimizeCountSql = $param["OptimizeCountSql"];
        }

        if (array_key_exists("Pages",$param) and $param["Pages"] !== null) {
            $this->Pages = $param["Pages"];
        }

        if (array_key_exists("Orders",$param) and $param["Orders"] !== null) {
            $this->Orders = [];
            foreach ($param["Orders"] as $key => $value){
                $obj = new OrderDto();
                $obj->deserialize($value);
                array_push($this->Orders, $obj);
            }
        }

        if (array_key_exists("CountId",$param) and $param["CountId"] !== null) {
            $this->CountId = $param["CountId"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("MaxLimit",$param) and $param["MaxLimit"] !== null) {
            $this->MaxLimit = $param["MaxLimit"];
        }

        if (array_key_exists("Records",$param) and $param["Records"] !== null) {
            $this->Records = [];
            foreach ($param["Records"] as $key => $value){
                $obj = new BudgetRemindRecords();
                $obj->deserialize($value);
                array_push($this->Records, $obj);
            }
        }

        if (array_key_exists("Current",$param) and $param["Current"] !== null) {
            $this->Current = $param["Current"];
        }

        if (array_key_exists("SearchCount",$param) and $param["SearchCount"] !== null) {
            $this->SearchCount = $param["SearchCount"];
        }
    }
}
