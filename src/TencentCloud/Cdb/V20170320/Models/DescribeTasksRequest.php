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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTasks request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page. You can use the [instance list querying API](https://intl.cloud.tencent.com/document/api/236/15872?from_cn_redirect=1) to query the ID, whose value is the `InstanceId` value in output parameters.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page. You can use the [instance list querying API](https://intl.cloud.tencent.com/document/api/236/15872?from_cn_redirect=1) to query the ID, whose value is the `InstanceId` value in output parameters.
 * @method string getAsyncRequestId() Obtain ID of an async task request, i.e., `AsyncRequestId` returned by relevant TencentDB operations.
 * @method void setAsyncRequestId(string $AsyncRequestId) Set ID of an async task request, i.e., `AsyncRequestId` returned by relevant TencentDB operations.
 * @method array getTaskTypes() Obtain Task type. If no value is passed in, all task types will be queried. Valid values:
1 - rolling back a database;
2 - performing an SQL operation;
3 - importing data;
5 - setting a parameter;
6 - initializing a TencentDB instance;
7 - restarting a TencentDB instance;
8 - enabling GTID of a TencentDB instance;
9 - upgrading a read-only instance;
10 - rolling back databases in batches;
11 - upgrading a primary instance;
12 - deleting a TencentDB table;
13 - promoting a disaster recovery instance.
 * @method void setTaskTypes(array $TaskTypes) Set Task type. If no value is passed in, all task types will be queried. Valid values:
1 - rolling back a database;
2 - performing an SQL operation;
3 - importing data;
5 - setting a parameter;
6 - initializing a TencentDB instance;
7 - restarting a TencentDB instance;
8 - enabling GTID of a TencentDB instance;
9 - upgrading a read-only instance;
10 - rolling back databases in batches;
11 - upgrading a primary instance;
12 - deleting a TencentDB table;
13 - promoting a disaster recovery instance.
 * @method array getTaskStatus() Obtain Task status. If no value is passed in, all task statuses will be queried. Valid values:
-1 - undefined;
0 - initializing;
1 - running;
2 - succeeded;
3 - failed;
4 - terminated;
5 - deleted;
6 - paused.
 * @method void setTaskStatus(array $TaskStatus) Set Task status. If no value is passed in, all task statuses will be queried. Valid values:
-1 - undefined;
0 - initializing;
1 - running;
2 - succeeded;
3 - failed;
4 - terminated;
5 - deleted;
6 - paused.
 * @method string getStartTimeBegin() Obtain Start time of the first task in the format of yyyy-MM-dd HH:mm:ss, such as 2017-12-31 10:40:01. It is used for queries by time range.
 * @method void setStartTimeBegin(string $StartTimeBegin) Set Start time of the first task in the format of yyyy-MM-dd HH:mm:ss, such as 2017-12-31 10:40:01. It is used for queries by time range.
 * @method string getStartTimeEnd() Obtain End time of the last task in the format of yyyy-MM-dd HH:mm:ss, such as 2017-12-31 10:40:01. It is used for queries by time range.
 * @method void setStartTimeEnd(string $StartTimeEnd) Set End time of the last task in the format of yyyy-MM-dd HH:mm:ss, such as 2017-12-31 10:40:01. It is used for queries by time range.
 * @method integer getOffset() Obtain Record offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Record offset. Default value: 0.
 * @method integer getLimit() Obtain Number of results to be returned for a single request. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of results to be returned for a single request. Default value: 20. Maximum value: 100.
 */
class DescribeTasksRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page. You can use the [instance list querying API](https://intl.cloud.tencent.com/document/api/236/15872?from_cn_redirect=1) to query the ID, whose value is the `InstanceId` value in output parameters.
     */
    public $InstanceId;

    /**
     * @var string ID of an async task request, i.e., `AsyncRequestId` returned by relevant TencentDB operations.
     */
    public $AsyncRequestId;

    /**
     * @var array Task type. If no value is passed in, all task types will be queried. Valid values:
1 - rolling back a database;
2 - performing an SQL operation;
3 - importing data;
5 - setting a parameter;
6 - initializing a TencentDB instance;
7 - restarting a TencentDB instance;
8 - enabling GTID of a TencentDB instance;
9 - upgrading a read-only instance;
10 - rolling back databases in batches;
11 - upgrading a primary instance;
12 - deleting a TencentDB table;
13 - promoting a disaster recovery instance.
     */
    public $TaskTypes;

    /**
     * @var array Task status. If no value is passed in, all task statuses will be queried. Valid values:
-1 - undefined;
0 - initializing;
1 - running;
2 - succeeded;
3 - failed;
4 - terminated;
5 - deleted;
6 - paused.
     */
    public $TaskStatus;

    /**
     * @var string Start time of the first task in the format of yyyy-MM-dd HH:mm:ss, such as 2017-12-31 10:40:01. It is used for queries by time range.
     */
    public $StartTimeBegin;

    /**
     * @var string End time of the last task in the format of yyyy-MM-dd HH:mm:ss, such as 2017-12-31 10:40:01. It is used for queries by time range.
     */
    public $StartTimeEnd;

    /**
     * @var integer Record offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of results to be returned for a single request. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @param string $InstanceId Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page. You can use the [instance list querying API](https://intl.cloud.tencent.com/document/api/236/15872?from_cn_redirect=1) to query the ID, whose value is the `InstanceId` value in output parameters.
     * @param string $AsyncRequestId ID of an async task request, i.e., `AsyncRequestId` returned by relevant TencentDB operations.
     * @param array $TaskTypes Task type. If no value is passed in, all task types will be queried. Valid values:
1 - rolling back a database;
2 - performing an SQL operation;
3 - importing data;
5 - setting a parameter;
6 - initializing a TencentDB instance;
7 - restarting a TencentDB instance;
8 - enabling GTID of a TencentDB instance;
9 - upgrading a read-only instance;
10 - rolling back databases in batches;
11 - upgrading a primary instance;
12 - deleting a TencentDB table;
13 - promoting a disaster recovery instance.
     * @param array $TaskStatus Task status. If no value is passed in, all task statuses will be queried. Valid values:
-1 - undefined;
0 - initializing;
1 - running;
2 - succeeded;
3 - failed;
4 - terminated;
5 - deleted;
6 - paused.
     * @param string $StartTimeBegin Start time of the first task in the format of yyyy-MM-dd HH:mm:ss, such as 2017-12-31 10:40:01. It is used for queries by time range.
     * @param string $StartTimeEnd End time of the last task in the format of yyyy-MM-dd HH:mm:ss, such as 2017-12-31 10:40:01. It is used for queries by time range.
     * @param integer $Offset Record offset. Default value: 0.
     * @param integer $Limit Number of results to be returned for a single request. Default value: 20. Maximum value: 100.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AsyncRequestId",$param) and $param["AsyncRequestId"] !== null) {
            $this->AsyncRequestId = $param["AsyncRequestId"];
        }

        if (array_key_exists("TaskTypes",$param) and $param["TaskTypes"] !== null) {
            $this->TaskTypes = $param["TaskTypes"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("StartTimeBegin",$param) and $param["StartTimeBegin"] !== null) {
            $this->StartTimeBegin = $param["StartTimeBegin"];
        }

        if (array_key_exists("StartTimeEnd",$param) and $param["StartTimeEnd"] !== null) {
            $this->StartTimeEnd = $param["StartTimeEnd"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
