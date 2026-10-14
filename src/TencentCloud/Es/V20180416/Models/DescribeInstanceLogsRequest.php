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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceLogs request structure.
 *
 * @method string getInstanceId() Obtain Cluster instance ID.
 * @method void setInstanceId(string $InstanceId) Set Cluster instance ID.
 * @method integer getLogType() Obtain Log type. Default value: 1.
<li>1, master log</li>
<li>2. Search slow logs</li>
<li>3. Index slow log</li>
<li>4. GC log</li>
 * @method void setLogType(integer $LogType) Set Log type. Default value: 1.
<li>1, master log</li>
<li>2. Search slow logs</li>
<li>3. Index slow log</li>
<li>4. GC log</li>
 * @method string getSearchKey() Obtain Search term. LUCENE grammar is supported, for example, level:WARN, ip:1.1.1.1, message:test-index
 * @method void setSearchKey(string $SearchKey) Set Search term. LUCENE grammar is supported, for example, level:WARN, ip:1.1.1.1, message:test-index
 * @method string getStartTime() Obtain Log start time in the format of YYYY-MM-DD HH:MM:SS, for example, 2019-01-22 20:15:53
 * @method void setStartTime(string $StartTime) Set Log start time in the format of YYYY-MM-DD HH:MM:SS, for example, 2019-01-22 20:15:53
 * @method string getEndTime() Obtain Log end time in the format of YYYY-MM-DD HH:MM:SS, for example, 2019-01-22 20:15:53
 * @method void setEndTime(string $EndTime) Set Log end time in the format of YYYY-MM-DD HH:MM:SS, for example, 2019-01-22 20:15:53
 * @method integer getOffset() Obtain Pagination starting value. Default value: 0.
 * @method void setOffset(integer $Offset) Set Pagination starting value. Default value: 0.
 * @method integer getLimit() Obtain Pagination size. Default value: 100. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Pagination size. Default value: 100. Maximum value: 100.
 * @method integer getOrderByType() Obtain Time sort method. Default value: 0.
<li>0: descending order</li>
<li>1, ascending</li>
 * @method void setOrderByType(integer $OrderByType) Set Time sort method. Default value: 0.
<li>0: descending order</li>
<li>1, ascending</li>
 * @method array getLogLevels() Obtain Log level
 * @method void setLogLevels(array $LogLevels) Set Log level
 * @method array getNodeIds() Obtain Node ID.
 * @method void setNodeIds(array $NodeIds) Set Node ID.
 * @method string getIndexName() Obtain Slow log index name
 * @method void setIndexName(string $IndexName) Set Slow log index name
 * @method string getShardId() Obtain Slow log index shards
 * @method void setShardId(string $ShardId) Set Slow log index shards
 * @method integer getQueryCost() Obtain Slow log query time
 * @method void setQueryCost(integer $QueryCost) Set Slow log query time
 */
class DescribeInstanceLogsRequest extends AbstractModel
{
    /**
     * @var string Cluster instance ID.
     */
    public $InstanceId;

    /**
     * @var integer Log type. Default value: 1.
<li>1, master log</li>
<li>2. Search slow logs</li>
<li>3. Index slow log</li>
<li>4. GC log</li>
     */
    public $LogType;

    /**
     * @var string Search term. LUCENE grammar is supported, for example, level:WARN, ip:1.1.1.1, message:test-index
     */
    public $SearchKey;

    /**
     * @var string Log start time in the format of YYYY-MM-DD HH:MM:SS, for example, 2019-01-22 20:15:53
     */
    public $StartTime;

    /**
     * @var string Log end time in the format of YYYY-MM-DD HH:MM:SS, for example, 2019-01-22 20:15:53
     */
    public $EndTime;

    /**
     * @var integer Pagination starting value. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Pagination size. Default value: 100. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer Time sort method. Default value: 0.
<li>0: descending order</li>
<li>1, ascending</li>
     */
    public $OrderByType;

    /**
     * @var array Log level
     */
    public $LogLevels;

    /**
     * @var array Node ID.
     */
    public $NodeIds;

    /**
     * @var string Slow log index name
     */
    public $IndexName;

    /**
     * @var string Slow log index shards
     */
    public $ShardId;

    /**
     * @var integer Slow log query time
     */
    public $QueryCost;

    /**
     * @param string $InstanceId Cluster instance ID.
     * @param integer $LogType Log type. Default value: 1.
<li>1, master log</li>
<li>2. Search slow logs</li>
<li>3. Index slow log</li>
<li>4. GC log</li>
     * @param string $SearchKey Search term. LUCENE grammar is supported, for example, level:WARN, ip:1.1.1.1, message:test-index
     * @param string $StartTime Log start time in the format of YYYY-MM-DD HH:MM:SS, for example, 2019-01-22 20:15:53
     * @param string $EndTime Log end time in the format of YYYY-MM-DD HH:MM:SS, for example, 2019-01-22 20:15:53
     * @param integer $Offset Pagination starting value. Default value: 0.
     * @param integer $Limit Pagination size. Default value: 100. Maximum value: 100.
     * @param integer $OrderByType Time sort method. Default value: 0.
<li>0: descending order</li>
<li>1, ascending</li>
     * @param array $LogLevels Log level
     * @param array $NodeIds Node ID.
     * @param string $IndexName Slow log index name
     * @param string $ShardId Slow log index shards
     * @param integer $QueryCost Slow log query time
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

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }

        if (array_key_exists("LogLevels",$param) and $param["LogLevels"] !== null) {
            $this->LogLevels = $param["LogLevels"];
        }

        if (array_key_exists("NodeIds",$param) and $param["NodeIds"] !== null) {
            $this->NodeIds = $param["NodeIds"];
        }

        if (array_key_exists("IndexName",$param) and $param["IndexName"] !== null) {
            $this->IndexName = $param["IndexName"];
        }

        if (array_key_exists("ShardId",$param) and $param["ShardId"] !== null) {
            $this->ShardId = $param["ShardId"];
        }

        if (array_key_exists("QueryCost",$param) and $param["QueryCost"] !== null) {
            $this->QueryCost = $param["QueryCost"];
        }
    }
}
