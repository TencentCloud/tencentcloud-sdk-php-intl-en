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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIndexList request structure.
 *
 * @method string getIndexType() Obtain Index type. `auto`: Automated; `normal`: General.
 * @method void setIndexType(string $IndexType) Set Index type. `auto`: Automated; `normal`: General.
 * @method string getInstanceId() Obtain ES cluster ID
 * @method void setInstanceId(string $InstanceId) Set ES cluster ID
 * @method string getIndexName() Obtain Index name. `null` indicates that all indexes are requested.
 * @method void setIndexName(string $IndexName) Set Index name. `null` indicates that all indexes are requested.
 * @method string getUsername() Obtain Username for cluster access
 * @method void setUsername(string $Username) Set Username for cluster access
 * @method string getPassword() Obtain Password for cluster access
 * @method void setPassword(string $Password) Set Password for cluster access
 * @method integer getOffset() Obtain The starting position of paging
 * @method void setOffset(integer $Offset) Set The starting position of paging
 * @method integer getLimit() Obtain The number of results per page
 * @method void setLimit(integer $Limit) Set The number of results per page
 * @method string getOrderBy() Obtain Sorting condition field, which can be `IndexName`, `IndexStorage`, or `IndexCreateTime`.
 * @method void setOrderBy(string $OrderBy) Set Sorting condition field, which can be `IndexName`, `IndexStorage`, or `IndexCreateTime`.
 * @method array getIndexStatusList() Obtain Filtering by index status
 * @method void setIndexStatusList(array $IndexStatusList) Set Filtering by index status
 * @method string getOrder() Obtain Sorting mode, which can be `asc` and `desc`.
 * @method void setOrder(string $Order) Set Sorting mode, which can be `asc` and `desc`.
 */
class DescribeIndexListRequest extends AbstractModel
{
    /**
     * @var string Index type. `auto`: Automated; `normal`: General.
     */
    public $IndexType;

    /**
     * @var string ES cluster ID
     */
    public $InstanceId;

    /**
     * @var string Index name. `null` indicates that all indexes are requested.
     */
    public $IndexName;

    /**
     * @var string Username for cluster access
     */
    public $Username;

    /**
     * @var string Password for cluster access
     */
    public $Password;

    /**
     * @var integer The starting position of paging
     */
    public $Offset;

    /**
     * @var integer The number of results per page
     */
    public $Limit;

    /**
     * @var string Sorting condition field, which can be `IndexName`, `IndexStorage`, or `IndexCreateTime`.
     */
    public $OrderBy;

    /**
     * @var array Filtering by index status
     */
    public $IndexStatusList;

    /**
     * @var string Sorting mode, which can be `asc` and `desc`.
     */
    public $Order;

    /**
     * @param string $IndexType Index type. `auto`: Automated; `normal`: General.
     * @param string $InstanceId ES cluster ID
     * @param string $IndexName Index name. `null` indicates that all indexes are requested.
     * @param string $Username Username for cluster access
     * @param string $Password Password for cluster access
     * @param integer $Offset The starting position of paging
     * @param integer $Limit The number of results per page
     * @param string $OrderBy Sorting condition field, which can be `IndexName`, `IndexStorage`, or `IndexCreateTime`.
     * @param array $IndexStatusList Filtering by index status
     * @param string $Order Sorting mode, which can be `asc` and `desc`.
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
        if (array_key_exists("IndexType",$param) and $param["IndexType"] !== null) {
            $this->IndexType = $param["IndexType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("IndexName",$param) and $param["IndexName"] !== null) {
            $this->IndexName = $param["IndexName"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("IndexStatusList",$param) and $param["IndexStatusList"] !== null) {
            $this->IndexStatusList = $param["IndexStatusList"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
