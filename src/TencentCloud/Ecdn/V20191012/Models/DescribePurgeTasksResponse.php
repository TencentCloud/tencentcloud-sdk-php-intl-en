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
namespace TencentCloud\Ecdn\V20191012\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePurgeTasks response structure.
 *
 * @method array getPurgeLogs() Obtain Purge history.
 * @method void setPurgeLogs(array $PurgeLogs) Set Purge history.
 * @method integer getTotalCount() Obtain Total number of tasks, which is used for pagination.
 * @method void setTotalCount(integer $TotalCount) Set Total number of tasks, which is used for pagination.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribePurgeTasksResponse extends AbstractModel
{
    /**
     * @var array Purge history.
     */
    public $PurgeLogs;

    /**
     * @var integer Total number of tasks, which is used for pagination.
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $PurgeLogs Purge history.
     * @param integer $TotalCount Total number of tasks, which is used for pagination.
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
        if (array_key_exists("PurgeLogs",$param) and $param["PurgeLogs"] !== null) {
            $this->PurgeLogs = [];
            foreach ($param["PurgeLogs"] as $key => $value){
                $obj = new PurgeTask();
                $obj->deserialize($value);
                array_push($this->PurgeLogs, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
