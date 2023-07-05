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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMigrationTasks response structure.
 *
 * @method integer getTotalCount() Obtain Number of migration tasks
 * @method void setTotalCount(integer $TotalCount) Set Number of migration tasks
 * @method array getMigrationTasks() Obtain Migration task details
 * @method void setMigrationTasks(array $MigrationTasks) Set Migration task details
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeMigrationTasksResponse extends AbstractModel
{
    /**
     * @var integer Number of migration tasks
     */
    public $TotalCount;

    /**
     * @var array Migration task details
     */
    public $MigrationTasks;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount Number of migration tasks
     * @param array $MigrationTasks Migration task details
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

        if (array_key_exists("MigrationTasks",$param) and $param["MigrationTasks"] !== null) {
            $this->MigrationTasks = [];
            foreach ($param["MigrationTasks"] as $key => $value){
                $obj = new MigrationTaskInfo();
                $obj->deserialize($value);
                array_push($this->MigrationTasks, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
