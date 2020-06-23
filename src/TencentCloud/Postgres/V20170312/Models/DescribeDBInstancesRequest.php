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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBInstances request structure.
 *
 * @method array getFilters() Obtain Filter. Valid values: db-instance-id, db-instance-name
 * @method void setFilters(array $Filters) Set Filter. Valid values: db-instance-id, db-instance-name
 * @method integer getLimit() Obtain Number of entries returned per page. Default value: 10.
 * @method void setLimit(integer $Limit) Set Number of entries returned per page. Default value: 10.
 * @method integer getOffset() Obtain Page number, starting from 0.
 * @method void setOffset(integer $Offset) Set Page number, starting from 0.
 * @method string getOrderBy() Obtain 
 * @method void setOrderBy(string $OrderBy) Set 
 * @method string getOrderByType() Obtain 
 * @method void setOrderByType(string $OrderByType) Set 
 */
class DescribeDBInstancesRequest extends AbstractModel
{
    /**
     * @var array Filter. Valid values: db-instance-id, db-instance-name
     */
    public $Filters;

    /**
     * @var integer Number of entries returned per page. Default value: 10.
     */
    public $Limit;

    /**
     * @var integer Page number, starting from 0.
     */
    public $Offset;

    /**
     * @var string 
     */
    public $OrderBy;

    /**
     * @var string 
     */
    public $OrderByType;

    /**
     * @param array $Filters Filter. Valid values: db-instance-id, db-instance-name
     * @param integer $Limit Number of entries returned per page. Default value: 10.
     * @param integer $Offset Page number, starting from 0.
     * @param string $OrderBy 
     * @param string $OrderByType 
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
