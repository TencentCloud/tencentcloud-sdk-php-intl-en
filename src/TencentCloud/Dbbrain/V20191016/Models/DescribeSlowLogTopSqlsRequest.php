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
namespace TencentCloud\Dbbrain\V20191016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSlowLogTopSqls request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getStartTime() Obtain Start time, such as "2019-09-10 12:13:14".
 * @method void setStartTime(string $StartTime) Set Start time, such as "2019-09-10 12:13:14".
 * @method string getEndTime() Obtain End time, such as "2019-09-10 12:13:14". The interval between the end time and the start time can be up to 7 days.
 * @method void setEndTime(string $EndTime) Set End time, such as "2019-09-10 12:13:14". The interval between the end time and the start time can be up to 7 days.
 * @method string getSortBy() Obtain Sorting key. Valid values: QueryTime, ExecTimes, RowsSent, LockTime, RowsExamined.
 * @method void setSortBy(string $SortBy) Set Sorting key. Valid values: QueryTime, ExecTimes, RowsSent, LockTime, RowsExamined.
 * @method string getOrderBy() Obtain Sorting order. Valid values: ASC (ascending), DESC (descending).
 * @method void setOrderBy(string $OrderBy) Set Sorting order. Valid values: ASC (ascending), DESC (descending).
 * @method integer getLimit() Obtain Number of results to be returned. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of results to be returned. Default value: 20. Maximum value: 100.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method array getSchemaList() Obtain Database name array.
 * @method void setSchemaList(array $SchemaList) Set Database name array.
 * @method string getProduct() Obtain Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TencentDB for CynosDB (compatible with MySQL)). Default value: `mysql`.
 * @method void setProduct(string $Product) Set Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TencentDB for CynosDB (compatible with MySQL)). Default value: `mysql`.
 */
class DescribeSlowLogTopSqlsRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Start time, such as "2019-09-10 12:13:14".
     */
    public $StartTime;

    /**
     * @var string End time, such as "2019-09-10 12:13:14". The interval between the end time and the start time can be up to 7 days.
     */
    public $EndTime;

    /**
     * @var string Sorting key. Valid values: QueryTime, ExecTimes, RowsSent, LockTime, RowsExamined.
     */
    public $SortBy;

    /**
     * @var string Sorting order. Valid values: ASC (ascending), DESC (descending).
     */
    public $OrderBy;

    /**
     * @var integer Number of results to be returned. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var array Database name array.
     */
    public $SchemaList;

    /**
     * @var string Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TencentDB for CynosDB (compatible with MySQL)). Default value: `mysql`.
     */
    public $Product;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $StartTime Start time, such as "2019-09-10 12:13:14".
     * @param string $EndTime End time, such as "2019-09-10 12:13:14". The interval between the end time and the start time can be up to 7 days.
     * @param string $SortBy Sorting key. Valid values: QueryTime, ExecTimes, RowsSent, LockTime, RowsExamined.
     * @param string $OrderBy Sorting order. Valid values: ASC (ascending), DESC (descending).
     * @param integer $Limit Number of results to be returned. Default value: 20. Maximum value: 100.
     * @param integer $Offset Offset. Default value: 0.
     * @param array $SchemaList Database name array.
     * @param string $Product Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TencentDB for CynosDB (compatible with MySQL)). Default value: `mysql`.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("SchemaList",$param) and $param["SchemaList"] !== null) {
            $this->SchemaList = [];
            foreach ($param["SchemaList"] as $key => $value){
                $obj = new SchemaItem();
                $obj->deserialize($value);
                array_push($this->SchemaList, $obj);
            }
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
