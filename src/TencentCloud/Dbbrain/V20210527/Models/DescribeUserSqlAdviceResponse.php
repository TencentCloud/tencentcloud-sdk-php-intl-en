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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserSqlAdvice response structure.
 *
 * @method string getAdvices() Obtain SQL statement optimization suggestions, which can be parsed into JSON arrays. If there is no need for optimization, the output will be empty.
 * @method void setAdvices(string $Advices) Set SQL statement optimization suggestions, which can be parsed into JSON arrays. If there is no need for optimization, the output will be empty.
 * @method string getComments() Obtain Notes of SQL statement optimization suggestions, which can be parsed into String arrays. If there is no need for optimization, the output will be empty.
 * @method void setComments(string $Comments) Set Notes of SQL statement optimization suggestions, which can be parsed into String arrays. If there is no need for optimization, the output will be empty.
 * @method string getSqlText() Obtain SQL statement.
 * @method void setSqlText(string $SqlText) Set SQL statement.
 * @method string getSchema() Obtain Database name.
 * @method void setSchema(string $Schema) Set Database name.
 * @method string getTables() Obtain DDL information of related tables, which can be parsed into JSON arrays.
 * @method void setTables(string $Tables) Set DDL information of related tables, which can be parsed into JSON arrays.
 * @method string getSqlPlan() Obtain SQL execution plan, which can be parsed into JSON arrays. If there is no need for optimization, the output will be empty.
 * @method void setSqlPlan(string $SqlPlan) Set SQL execution plan, which can be parsed into JSON arrays. If there is no need for optimization, the output will be empty.
 * @method string getCost() Obtain Cost saving details after SQL statement optimization, which can be parsed into JSON arrays. If there is no need for optimization, the output will be empty.
 * @method void setCost(string $Cost) Set Cost saving details after SQL statement optimization, which can be parsed into JSON arrays. If there is no need for optimization, the output will be empty.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeUserSqlAdviceResponse extends AbstractModel
{
    /**
     * @var string SQL statement optimization suggestions, which can be parsed into JSON arrays. If there is no need for optimization, the output will be empty.
     */
    public $Advices;

    /**
     * @var string Notes of SQL statement optimization suggestions, which can be parsed into String arrays. If there is no need for optimization, the output will be empty.
     */
    public $Comments;

    /**
     * @var string SQL statement.
     */
    public $SqlText;

    /**
     * @var string Database name.
     */
    public $Schema;

    /**
     * @var string DDL information of related tables, which can be parsed into JSON arrays.
     */
    public $Tables;

    /**
     * @var string SQL execution plan, which can be parsed into JSON arrays. If there is no need for optimization, the output will be empty.
     */
    public $SqlPlan;

    /**
     * @var string Cost saving details after SQL statement optimization, which can be parsed into JSON arrays. If there is no need for optimization, the output will be empty.
     */
    public $Cost;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Advices SQL statement optimization suggestions, which can be parsed into JSON arrays. If there is no need for optimization, the output will be empty.
     * @param string $Comments Notes of SQL statement optimization suggestions, which can be parsed into String arrays. If there is no need for optimization, the output will be empty.
     * @param string $SqlText SQL statement.
     * @param string $Schema Database name.
     * @param string $Tables DDL information of related tables, which can be parsed into JSON arrays.
     * @param string $SqlPlan SQL execution plan, which can be parsed into JSON arrays. If there is no need for optimization, the output will be empty.
     * @param string $Cost Cost saving details after SQL statement optimization, which can be parsed into JSON arrays. If there is no need for optimization, the output will be empty.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("Advices",$param) and $param["Advices"] !== null) {
            $this->Advices = $param["Advices"];
        }

        if (array_key_exists("Comments",$param) and $param["Comments"] !== null) {
            $this->Comments = $param["Comments"];
        }

        if (array_key_exists("SqlText",$param) and $param["SqlText"] !== null) {
            $this->SqlText = $param["SqlText"];
        }

        if (array_key_exists("Schema",$param) and $param["Schema"] !== null) {
            $this->Schema = $param["Schema"];
        }

        if (array_key_exists("Tables",$param) and $param["Tables"] !== null) {
            $this->Tables = $param["Tables"];
        }

        if (array_key_exists("SqlPlan",$param) and $param["SqlPlan"] !== null) {
            $this->SqlPlan = $param["SqlPlan"];
        }

        if (array_key_exists("Cost",$param) and $param["Cost"] !== null) {
            $this->Cost = $param["Cost"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
