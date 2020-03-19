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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getTotalCount() Obtain Number of table rollback task results
 * @method void setTotalCount(integer $TotalCount) Set Number of table rollback task results
 * @method array getTableResults() Obtain Table rollback task result list
 * @method void setTableResults(array $TableResults) Set Table rollback task result list
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *RollbackTables response structure.
 */
class RollbackTablesResponse extends AbstractModel
{
    /**
     * @var integer Number of table rollback task results
     */
    public $TotalCount;

    /**
     * @var array Table rollback task result list
     */
    public $TableResults;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param integer $TotalCount Number of table rollback task results
     * @param array $TableResults Table rollback task result list
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TableResults",$param) and $param["TableResults"] !== null) {
            $this->TableResults = [];
            foreach ($param["TableResults"] as $key => $value){
                $obj = new TableRollbackResultNew();
                $obj->deserialize($value);
                array_push($this->TableResults, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
