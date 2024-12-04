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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceEvents request structure.
 *
 * @method string getExecutionStartDate() Obtain Start date for querying the event execution plan, with a maximum query span of 30 days.
 * @method void setExecutionStartDate(string $ExecutionStartDate) Set Start date for querying the event execution plan, with a maximum query span of 30 days.
 * @method string getExecutionEndDate() Obtain End date for querying the event execution plan, with a maximum query span of 30 days.
 * @method void setExecutionEndDate(string $ExecutionEndDate) Set End date for querying the event execution plan, with a maximum query span of 30 days.
 * @method string getInstanceId() Obtain Specifies the instance ID. Example: crs-xjhsdj****. Log in to the [TencentDB for Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.
 * @method void setInstanceId(string $InstanceId) Set Specifies the instance ID. Example: crs-xjhsdj****. Log in to the [TencentDB for Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.
 * @method integer getPageSize() Obtain Number of events displayed per page. Default value: 10. Maximum value: 100.
 * @method void setPageSize(integer $PageSize) Set Number of events displayed per page. Default value: 10. Maximum value: 100.
 * @method integer getPageNo() Obtain Configures the page number for querying events. You can query events on a certain page by specifying PageNo and PageSize. Default value: 1.
 * @method void setPageNo(integer $PageNo) Set Configures the page number for querying events. You can query events on a certain page by specifying PageNo and PageSize. Default value: 1.
 * @method array getStatus() Obtain Current status of the event.- Waiting: The event is waiting for execution on the execution date or during the operations period.- Running: The event is being executed during the operations period.- Finished: Execution of the event is completed.- Canceled: Execution of the event is canceled.
 * @method void setStatus(array $Status) Set Current status of the event.- Waiting: The event is waiting for execution on the execution date or during the operations period.- Running: The event is being executed during the operations period.- Finished: Execution of the event is completed.- Canceled: Execution of the event is canceled.
 * @method array getEventTypes() Obtain Event type. Currently, the type can only be related to instance migration, resource movement, and IDC deletion. This parameter can be set only to **InstanceMigration**.
 * @method void setEventTypes(array $EventTypes) Set Event type. Currently, the type can only be related to instance migration, resource movement, and IDC deletion. This parameter can be set only to **InstanceMigration**.
 * @method array getGrades() Obtain Configures the level of the queried event. Events are divided into Critical, High, Medium, and Low events according to the severity and urgency.- Critical- High- Medium- Low
 * @method void setGrades(array $Grades) Set Configures the level of the queried event. Events are divided into Critical, High, Medium, and Low events according to the severity and urgency.- Critical- High- Medium- Low
 */
class DescribeInstanceEventsRequest extends AbstractModel
{
    /**
     * @var string Start date for querying the event execution plan, with a maximum query span of 30 days.
     */
    public $ExecutionStartDate;

    /**
     * @var string End date for querying the event execution plan, with a maximum query span of 30 days.
     */
    public $ExecutionEndDate;

    /**
     * @var string Specifies the instance ID. Example: crs-xjhsdj****. Log in to the [TencentDB for Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.
     */
    public $InstanceId;

    /**
     * @var integer Number of events displayed per page. Default value: 10. Maximum value: 100.
     */
    public $PageSize;

    /**
     * @var integer Configures the page number for querying events. You can query events on a certain page by specifying PageNo and PageSize. Default value: 1.
     */
    public $PageNo;

    /**
     * @var array Current status of the event.- Waiting: The event is waiting for execution on the execution date or during the operations period.- Running: The event is being executed during the operations period.- Finished: Execution of the event is completed.- Canceled: Execution of the event is canceled.
     */
    public $Status;

    /**
     * @var array Event type. Currently, the type can only be related to instance migration, resource movement, and IDC deletion. This parameter can be set only to **InstanceMigration**.
     */
    public $EventTypes;

    /**
     * @var array Configures the level of the queried event. Events are divided into Critical, High, Medium, and Low events according to the severity and urgency.- Critical- High- Medium- Low
     */
    public $Grades;

    /**
     * @param string $ExecutionStartDate Start date for querying the event execution plan, with a maximum query span of 30 days.
     * @param string $ExecutionEndDate End date for querying the event execution plan, with a maximum query span of 30 days.
     * @param string $InstanceId Specifies the instance ID. Example: crs-xjhsdj****. Log in to the [TencentDB for Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.
     * @param integer $PageSize Number of events displayed per page. Default value: 10. Maximum value: 100.
     * @param integer $PageNo Configures the page number for querying events. You can query events on a certain page by specifying PageNo and PageSize. Default value: 1.
     * @param array $Status Current status of the event.- Waiting: The event is waiting for execution on the execution date or during the operations period.- Running: The event is being executed during the operations period.- Finished: Execution of the event is completed.- Canceled: Execution of the event is canceled.
     * @param array $EventTypes Event type. Currently, the type can only be related to instance migration, resource movement, and IDC deletion. This parameter can be set only to **InstanceMigration**.
     * @param array $Grades Configures the level of the queried event. Events are divided into Critical, High, Medium, and Low events according to the severity and urgency.- Critical- High- Medium- Low
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
        if (array_key_exists("ExecutionStartDate",$param) and $param["ExecutionStartDate"] !== null) {
            $this->ExecutionStartDate = $param["ExecutionStartDate"];
        }

        if (array_key_exists("ExecutionEndDate",$param) and $param["ExecutionEndDate"] !== null) {
            $this->ExecutionEndDate = $param["ExecutionEndDate"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EventTypes",$param) and $param["EventTypes"] !== null) {
            $this->EventTypes = $param["EventTypes"];
        }

        if (array_key_exists("Grades",$param) and $param["Grades"] !== null) {
            $this->Grades = $param["Grades"];
        }
    }
}
