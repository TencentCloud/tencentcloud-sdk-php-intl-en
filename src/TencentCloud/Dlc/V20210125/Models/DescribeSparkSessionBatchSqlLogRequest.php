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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSparkSessionBatchSqlLog request structure.
 *
 * @method string getBatchId() Obtain The unique ID of a Spark SQL job.
 * @method void setBatchId(string $BatchId) Set The unique ID of a Spark SQL job.
 * @method string getCustomKey() Obtain User-defined primary key. If it is specified, the query should be based on the value.
 * @method void setCustomKey(string $CustomKey) Set User-defined primary key. If it is specified, the query should be based on the value.
 */
class DescribeSparkSessionBatchSqlLogRequest extends AbstractModel
{
    /**
     * @var string The unique ID of a Spark SQL job.
     */
    public $BatchId;

    /**
     * @var string User-defined primary key. If it is specified, the query should be based on the value.
     */
    public $CustomKey;

    /**
     * @param string $BatchId The unique ID of a Spark SQL job.
     * @param string $CustomKey User-defined primary key. If it is specified, the query should be based on the value.
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
        if (array_key_exists("BatchId",$param) and $param["BatchId"] !== null) {
            $this->BatchId = $param["BatchId"];
        }

        if (array_key_exists("CustomKey",$param) and $param["CustomKey"] !== null) {
            $this->CustomKey = $param["CustomKey"];
        }
    }
}
