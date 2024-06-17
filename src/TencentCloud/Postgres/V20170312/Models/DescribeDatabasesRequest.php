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
 * DescribeDatabases request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID
 * @method array getFilters() Obtain Query using one or more filter criteria. Filter criteria currently supported include: database-name: filter by database name (in string format). Fuzzy matching is used to search for databases that meet the criteria.
 * @method void setFilters(array $Filters) Set Query using one or more filter criteria. Filter criteria currently supported include: database-name: filter by database name (in string format). Fuzzy matching is used to search for databases that meet the criteria.
 * @method integer getOffset() Obtain Data offset, which starts from 0.
 * @method void setOffset(integer $Offset) Set Data offset, which starts from 0.
 * @method integer getLimit() Obtain Number of items displayed at a time
 * @method void setLimit(integer $Limit) Set Number of items displayed at a time
 */
class DescribeDatabasesRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $DBInstanceId;

    /**
     * @var array Query using one or more filter criteria. Filter criteria currently supported include: database-name: filter by database name (in string format). Fuzzy matching is used to search for databases that meet the criteria.
     */
    public $Filters;

    /**
     * @var integer Data offset, which starts from 0.
     */
    public $Offset;

    /**
     * @var integer Number of items displayed at a time
     */
    public $Limit;

    /**
     * @param string $DBInstanceId Instance ID
     * @param array $Filters Query using one or more filter criteria. Filter criteria currently supported include: database-name: filter by database name (in string format). Fuzzy matching is used to search for databases that meet the criteria.
     * @param integer $Offset Data offset, which starts from 0.
     * @param integer $Limit Number of items displayed at a time
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
