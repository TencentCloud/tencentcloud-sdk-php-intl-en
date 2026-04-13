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
 * DescribeAccounts request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID, such as postgres-6fego161. can be obtained through the DescribeDBInstances api (https://www.tencentcloud.com/document/product/409/16773?lang=en).
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID, such as postgres-6fego161. can be obtained through the DescribeDBInstances api (https://www.tencentcloud.com/document/product/409/16773?lang=en).
 * @method integer getLimit() Obtain Pagination return. maximum return per page. default 20. value range 1-100.
 * @method void setLimit(integer $Limit) Set Pagination return. maximum return per page. default 20. value range 1-100.
 * @method integer getOffset() Obtain Data offset, which starts from 0.
 * @method void setOffset(integer $Offset) Set Data offset, which starts from 0.
 * @method string getOrderBy() Obtain Return data is sorted by creation time or username. valid values: createTime, name, updateTime. createTime - sort by creation time; name - sort by username; updateTime - sort by update time.
Default value: createTime.
 * @method void setOrderBy(string $OrderBy) Set Return data is sorted by creation time or username. valid values: createTime, name, updateTime. createTime - sort by creation time; name - sort by username; updateTime - sort by update time.
Default value: createTime.
 * @method string getOrderByType() Obtain Specifies whether the returned results are in ascending or descending order. valid values: desc or asc. desc - descending order; asc - ascending order.
Default value: desc.
 * @method void setOrderByType(string $OrderByType) Set Specifies whether the returned results are in ascending or descending order. valid values: desc or asc. desc - descending order; asc - ascending order.
Default value: desc.
 */
class DescribeAccountsRequest extends AbstractModel
{
    /**
     * @var string Instance ID, such as postgres-6fego161. can be obtained through the DescribeDBInstances api (https://www.tencentcloud.com/document/product/409/16773?lang=en).
     */
    public $DBInstanceId;

    /**
     * @var integer Pagination return. maximum return per page. default 20. value range 1-100.
     */
    public $Limit;

    /**
     * @var integer Data offset, which starts from 0.
     */
    public $Offset;

    /**
     * @var string Return data is sorted by creation time or username. valid values: createTime, name, updateTime. createTime - sort by creation time; name - sort by username; updateTime - sort by update time.
Default value: createTime.
     */
    public $OrderBy;

    /**
     * @var string Specifies whether the returned results are in ascending or descending order. valid values: desc or asc. desc - descending order; asc - ascending order.
Default value: desc.
     */
    public $OrderByType;

    /**
     * @param string $DBInstanceId Instance ID, such as postgres-6fego161. can be obtained through the DescribeDBInstances api (https://www.tencentcloud.com/document/product/409/16773?lang=en).
     * @param integer $Limit Pagination return. maximum return per page. default 20. value range 1-100.
     * @param integer $Offset Data offset, which starts from 0.
     * @param string $OrderBy Return data is sorted by creation time or username. valid values: createTime, name, updateTime. createTime - sort by creation time; name - sort by username; updateTime - sort by update time.
Default value: createTime.
     * @param string $OrderByType Specifies whether the returned results are in ascending or descending order. valid values: desc or asc. desc - descending order; asc - ascending order.
Default value: desc.
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
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
