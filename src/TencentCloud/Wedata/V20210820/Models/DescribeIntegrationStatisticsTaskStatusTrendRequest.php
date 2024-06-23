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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIntegrationStatisticsTaskStatusTrend request structure.
 *
 * @method integer getTaskType() Obtain Task Type (Real-time:201, Offline:202)
 * @method void setTaskType(integer $TaskType) Set Task Type (Real-time:201, Offline:202)
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getQueryDate() Obtain Query Date
 * @method void setQueryDate(string $QueryDate) Set Query Date
 * @method string getExecutorGroupId() Obtain Resource Group ID
 * @method void setExecutorGroupId(string $ExecutorGroupId) Set Resource Group ID
 */
class DescribeIntegrationStatisticsTaskStatusTrendRequest extends AbstractModel
{
    /**
     * @var integer Task Type (Real-time:201, Offline:202)
     */
    public $TaskType;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Query Date
     */
    public $QueryDate;

    /**
     * @var string Resource Group ID
     */
    public $ExecutorGroupId;

    /**
     * @param integer $TaskType Task Type (Real-time:201, Offline:202)
     * @param string $ProjectId Project ID
     * @param string $QueryDate Query Date
     * @param string $ExecutorGroupId Resource Group ID
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("QueryDate",$param) and $param["QueryDate"] !== null) {
            $this->QueryDate = $param["QueryDate"];
        }

        if (array_key_exists("ExecutorGroupId",$param) and $param["ExecutorGroupId"] !== null) {
            $this->ExecutorGroupId = $param["ExecutorGroupId"];
        }
    }
}
