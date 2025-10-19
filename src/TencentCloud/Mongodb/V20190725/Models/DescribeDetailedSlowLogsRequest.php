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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDetailedSlowLogs request structure.
 *
 * @method string getInstanceId() Obtain Instance ID. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.
 * @method string getStartTime() Obtain Specifies the start time for querying slow logs. - Format: yyyy-mm-dd hh:mm:ss. For example, 2019-06-01 10:00:00. - The query start and end time interval cannot exceed 24 hours. Only slow logs within the last 7 days can be queried.
 * @method void setStartTime(string $StartTime) Set Specifies the start time for querying slow logs. - Format: yyyy-mm-dd hh:mm:ss. For example, 2019-06-01 10:00:00. - The query start and end time interval cannot exceed 24 hours. Only slow logs within the last 7 days can be queried.
 * @method string getEndTime() Obtain Specifies the end time for querying slow logs.
- Format: yyyy-mm-dd hh:mm:ss. For example, 2019-06-02 12:00:00.
- The query start and end time interval cannot exceed 24 hours. Only slow logs within the last 7 days can be queried.
 * @method void setEndTime(string $EndTime) Set Specifies the end time for querying slow logs.
- Format: yyyy-mm-dd hh:mm:ss. For example, 2019-06-02 12:00:00.
- The query start and end time interval cannot exceed 24 hours. Only slow logs within the last 7 days can be queried.
 * @method integer getExecTime() Obtain Specifies the threshold for querying slow logs, in milliseconds. It indicates that the execution time of the slow log query exceeds this value. The default value is 100.
 * @method void setExecTime(integer $ExecTime) Set Specifies the threshold for querying slow logs, in milliseconds. It indicates that the execution time of the slow log query exceeds this value. The default value is 100.
 * @method array getCommands() Obtain Specifies the command type for querying slow logs.
 * @method void setCommands(array $Commands) Set Specifies the command type for querying slow logs.
 * @method array getTexts() Obtain Full-text search keyword. The logical operator among multiple keywords is OR.
 * @method void setTexts(array $Texts) Set Full-text search keyword. The logical operator among multiple keywords is OR.
 * @method array getNodeNames() Obtain Specifies the node name for querying slow logs. The [DescribeDBInstanceNodeProperty](https://www.tencentcloud.comom/document/product/240/82022?from_cn_redirect=1) API can be called to query the node name.
 * @method void setNodeNames(array $NodeNames) Set Specifies the node name for querying slow logs. The [DescribeDBInstanceNodeProperty](https://www.tencentcloud.comom/document/product/240/82022?from_cn_redirect=1) API can be called to query the node name.
 * @method array getQueryHash() Obtain Specifies the queryHash value to be queried.
 * @method void setQueryHash(array $QueryHash) Set Specifies the queryHash value to be queried.
 * @method integer getOffset() Obtain Pagination offset. The default value is 0, and the value range is [0, 100].

 * @method void setOffset(integer $Offset) Set Pagination offset. The default value is 0, and the value range is [0, 100].

 * @method integer getLimit() Obtain Number of returned entries. The default value is 20, and the value range is [0, 10000].
 * @method void setLimit(integer $Limit) Set Number of returned entries. The default value is 20, and the value range is [0, 10000].
 * @method string getOrderBy() Obtain Specifies the sorting condition for slow logs.
- StartTime: sort by the generation time of slow logs.
- ExecTime: sort by the execution time of slow logs.
 * @method void setOrderBy(string $OrderBy) Set Specifies the sorting condition for slow logs.
- StartTime: sort by the generation time of slow logs.
- ExecTime: sort by the execution time of slow logs.
 * @method string getOrderByType() Obtain Specifies the sorting method.
- desc: descending order.
- asc: ascending order.
 * @method void setOrderByType(string $OrderByType) Set Specifies the sorting method.
- desc: descending order.
- asc: ascending order.
 */
class DescribeDetailedSlowLogsRequest extends AbstractModel
{
    /**
     * @var string Instance ID. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.
     */
    public $InstanceId;

    /**
     * @var string Specifies the start time for querying slow logs. - Format: yyyy-mm-dd hh:mm:ss. For example, 2019-06-01 10:00:00. - The query start and end time interval cannot exceed 24 hours. Only slow logs within the last 7 days can be queried.
     */
    public $StartTime;

    /**
     * @var string Specifies the end time for querying slow logs.
- Format: yyyy-mm-dd hh:mm:ss. For example, 2019-06-02 12:00:00.
- The query start and end time interval cannot exceed 24 hours. Only slow logs within the last 7 days can be queried.
     */
    public $EndTime;

    /**
     * @var integer Specifies the threshold for querying slow logs, in milliseconds. It indicates that the execution time of the slow log query exceeds this value. The default value is 100.
     */
    public $ExecTime;

    /**
     * @var array Specifies the command type for querying slow logs.
     */
    public $Commands;

    /**
     * @var array Full-text search keyword. The logical operator among multiple keywords is OR.
     */
    public $Texts;

    /**
     * @var array Specifies the node name for querying slow logs. The [DescribeDBInstanceNodeProperty](https://www.tencentcloud.comom/document/product/240/82022?from_cn_redirect=1) API can be called to query the node name.
     */
    public $NodeNames;

    /**
     * @var array Specifies the queryHash value to be queried.
     */
    public $QueryHash;

    /**
     * @var integer Pagination offset. The default value is 0, and the value range is [0, 100].

     */
    public $Offset;

    /**
     * @var integer Number of returned entries. The default value is 20, and the value range is [0, 10000].
     */
    public $Limit;

    /**
     * @var string Specifies the sorting condition for slow logs.
- StartTime: sort by the generation time of slow logs.
- ExecTime: sort by the execution time of slow logs.
     */
    public $OrderBy;

    /**
     * @var string Specifies the sorting method.
- desc: descending order.
- asc: ascending order.
     */
    public $OrderByType;

    /**
     * @param string $InstanceId Instance ID. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.
     * @param string $StartTime Specifies the start time for querying slow logs. - Format: yyyy-mm-dd hh:mm:ss. For example, 2019-06-01 10:00:00. - The query start and end time interval cannot exceed 24 hours. Only slow logs within the last 7 days can be queried.
     * @param string $EndTime Specifies the end time for querying slow logs.
- Format: yyyy-mm-dd hh:mm:ss. For example, 2019-06-02 12:00:00.
- The query start and end time interval cannot exceed 24 hours. Only slow logs within the last 7 days can be queried.
     * @param integer $ExecTime Specifies the threshold for querying slow logs, in milliseconds. It indicates that the execution time of the slow log query exceeds this value. The default value is 100.
     * @param array $Commands Specifies the command type for querying slow logs.
     * @param array $Texts Full-text search keyword. The logical operator among multiple keywords is OR.
     * @param array $NodeNames Specifies the node name for querying slow logs. The [DescribeDBInstanceNodeProperty](https://www.tencentcloud.comom/document/product/240/82022?from_cn_redirect=1) API can be called to query the node name.
     * @param array $QueryHash Specifies the queryHash value to be queried.
     * @param integer $Offset Pagination offset. The default value is 0, and the value range is [0, 100].

     * @param integer $Limit Number of returned entries. The default value is 20, and the value range is [0, 10000].
     * @param string $OrderBy Specifies the sorting condition for slow logs.
- StartTime: sort by the generation time of slow logs.
- ExecTime: sort by the execution time of slow logs.
     * @param string $OrderByType Specifies the sorting method.
- desc: descending order.
- asc: ascending order.
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ExecTime",$param) and $param["ExecTime"] !== null) {
            $this->ExecTime = $param["ExecTime"];
        }

        if (array_key_exists("Commands",$param) and $param["Commands"] !== null) {
            $this->Commands = $param["Commands"];
        }

        if (array_key_exists("Texts",$param) and $param["Texts"] !== null) {
            $this->Texts = $param["Texts"];
        }

        if (array_key_exists("NodeNames",$param) and $param["NodeNames"] !== null) {
            $this->NodeNames = $param["NodeNames"];
        }

        if (array_key_exists("QueryHash",$param) and $param["QueryHash"] !== null) {
            $this->QueryHash = $param["QueryHash"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }
    }
}
