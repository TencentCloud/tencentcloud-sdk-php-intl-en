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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCompareTasks request structure.
 *
 * @method string getJobId() Obtain Migration task ID
 * @method void setJobId(string $JobId) Set Migration task ID
 * @method integer getLimit() Obtain Number of tasks to be displayed per page. Default value: `20`.
 * @method void setLimit(integer $Limit) Set Number of tasks to be displayed per page. Default value: `20`.
 * @method integer getOffset() Obtain Pagination offset
 * @method void setOffset(integer $Offset) Set Pagination offset
 * @method string getCompareTaskId() Obtain Check task ID
 * @method void setCompareTaskId(string $CompareTaskId) Set Check task ID
 * @method array getStatus() Obtain Data consistency check task status. Valid values: `created`, `readyRun`, `running`, `success`, `stopping`, `failed`, `canceled`.
 * @method void setStatus(array $Status) Set Data consistency check task status. Valid values: `created`, `readyRun`, `running`, `success`, `stopping`, `failed`, `canceled`.
 */
class DescribeCompareTasksRequest extends AbstractModel
{
    /**
     * @var string Migration task ID
     */
    public $JobId;

    /**
     * @var integer Number of tasks to be displayed per page. Default value: `20`.
     */
    public $Limit;

    /**
     * @var integer Pagination offset
     */
    public $Offset;

    /**
     * @var string Check task ID
     */
    public $CompareTaskId;

    /**
     * @var array Data consistency check task status. Valid values: `created`, `readyRun`, `running`, `success`, `stopping`, `failed`, `canceled`.
     */
    public $Status;

    /**
     * @param string $JobId Migration task ID
     * @param integer $Limit Number of tasks to be displayed per page. Default value: `20`.
     * @param integer $Offset Pagination offset
     * @param string $CompareTaskId Check task ID
     * @param array $Status Data consistency check task status. Valid values: `created`, `readyRun`, `running`, `success`, `stopping`, `failed`, `canceled`.
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("CompareTaskId",$param) and $param["CompareTaskId"] !== null) {
            $this->CompareTaskId = $param["CompareTaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
