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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBInstances request structure.
 *
 * @method array getFilters() Obtain Query using one or more filter criteria. filter criteria currently supported include:.
db-instance-id: Filter by instance ID, type string
db-instance-name: specifies the instance name to filter by, supports fuzzy matching (string type).
db-project-id: Filter by project ID, type integer
db-pay-mode: filter by instance billing mode (prepaid - prepayment; postpaid - postpayment). string type.
db-tag-key: specifies the tag key to filter by (string type).
db-private-ip: Filter by instance Private Cloud IP, type string
db-public-address: filter by instance public network address (in string format)
db-dedicated-cluster-id: Filter by private cluster Id, type string
 * @method void setFilters(array $Filters) Set Query using one or more filter criteria. filter criteria currently supported include:.
db-instance-id: Filter by instance ID, type string
db-instance-name: specifies the instance name to filter by, supports fuzzy matching (string type).
db-project-id: Filter by project ID, type integer
db-pay-mode: filter by instance billing mode (prepaid - prepayment; postpaid - postpayment). string type.
db-tag-key: specifies the tag key to filter by (string type).
db-private-ip: Filter by instance Private Cloud IP, type string
db-public-address: filter by instance public network address (in string format)
db-dedicated-cluster-id: Filter by private cluster Id, type string
 * @method integer getLimit() Obtain Number of results displayed per page. value range: 0-100. input 0 to use the default configuration. default is 10.
 * @method void setLimit(integer $Limit) Set Number of results displayed per page. value range: 0-100. input 0 to use the default configuration. default is 10.
 * @method integer getOffset() Obtain Data offset, which starts from 0.
 * @method void setOffset(integer $Offset) Set Data offset, which starts from 0.
 * @method string getOrderBy() Obtain Specifies the sorting index, such as instance Name and creation time. supports DBInstanceId, CreateTime, Name, and EndTime. default value: CreateTime.
 * @method void setOrderBy(string $OrderBy) Set Specifies the sorting index, such as instance Name and creation time. supports DBInstanceId, CreateTime, Name, and EndTime. default value: CreateTime.
 * @method string getOrderByType() Obtain Sorting method, including ascending: `asc` and descending: `desc`. the default value is `asc`.
 * @method void setOrderByType(string $OrderByType) Set Sorting method, including ascending: `asc` and descending: `desc`. the default value is `asc`.
 */
class DescribeDBInstancesRequest extends AbstractModel
{
    /**
     * @var array Query using one or more filter criteria. filter criteria currently supported include:.
db-instance-id: Filter by instance ID, type string
db-instance-name: specifies the instance name to filter by, supports fuzzy matching (string type).
db-project-id: Filter by project ID, type integer
db-pay-mode: filter by instance billing mode (prepaid - prepayment; postpaid - postpayment). string type.
db-tag-key: specifies the tag key to filter by (string type).
db-private-ip: Filter by instance Private Cloud IP, type string
db-public-address: filter by instance public network address (in string format)
db-dedicated-cluster-id: Filter by private cluster Id, type string
     */
    public $Filters;

    /**
     * @var integer Number of results displayed per page. value range: 0-100. input 0 to use the default configuration. default is 10.
     */
    public $Limit;

    /**
     * @var integer Data offset, which starts from 0.
     */
    public $Offset;

    /**
     * @var string Specifies the sorting index, such as instance Name and creation time. supports DBInstanceId, CreateTime, Name, and EndTime. default value: CreateTime.
     */
    public $OrderBy;

    /**
     * @var string Sorting method, including ascending: `asc` and descending: `desc`. the default value is `asc`.
     */
    public $OrderByType;

    /**
     * @param array $Filters Query using one or more filter criteria. filter criteria currently supported include:.
db-instance-id: Filter by instance ID, type string
db-instance-name: specifies the instance name to filter by, supports fuzzy matching (string type).
db-project-id: Filter by project ID, type integer
db-pay-mode: filter by instance billing mode (prepaid - prepayment; postpaid - postpayment). string type.
db-tag-key: specifies the tag key to filter by (string type).
db-private-ip: Filter by instance Private Cloud IP, type string
db-public-address: filter by instance public network address (in string format)
db-dedicated-cluster-id: Filter by private cluster Id, type string
     * @param integer $Limit Number of results displayed per page. value range: 0-100. input 0 to use the default configuration. default is 10.
     * @param integer $Offset Data offset, which starts from 0.
     * @param string $OrderBy Specifies the sorting index, such as instance Name and creation time. supports DBInstanceId, CreateTime, Name, and EndTime. default value: CreateTime.
     * @param string $OrderByType Sorting method, including ascending: `asc` and descending: `desc`. the default value is `asc`.
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }
    }
}
