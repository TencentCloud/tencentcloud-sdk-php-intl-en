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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceLogs request structure.
 *
 * @method string getInstanceId() Obtain Cluster instance ID
 * @method void setInstanceId(string $InstanceId) Set Cluster instance ID
 * @method integer getLogType() Obtain Log type. Default value: 1
<li>1: primary log</li>
<li>2: search slow log</li>
<li>3: index slow log</li>
<li>4: GC log</li>
 * @method void setLogType(integer $LogType) Set Log type. Default value: 1
<li>1: primary log</li>
<li>2: search slow log</li>
<li>3: index slow log</li>
<li>4: GC log</li>
 * @method string getSearchKey() Obtain Search keyword, which supports LUCENE syntax, such as `level:WARN`, `ip:1.1.1.1`, and `message:test-index`
 * @method void setSearchKey(string $SearchKey) Set Search keyword, which supports LUCENE syntax, such as `level:WARN`, `ip:1.1.1.1`, and `message:test-index`
 * @method string getStartTime() Obtain Log start time in the format of YYYY-MM-DD HH:MM:SS, such as 2019-01-22 20:15:53
 * @method void setStartTime(string $StartTime) Set Log start time in the format of YYYY-MM-DD HH:MM:SS, such as 2019-01-22 20:15:53
 * @method string getEndTime() Obtain Log end time in the format of YYYY-MM-DD HH:MM:SS, such as 2019-01-22 20:15:53
 * @method void setEndTime(string $EndTime) Set Log end time in the format of YYYY-MM-DD HH:MM:SS, such as 2019-01-22 20:15:53
 * @method integer getOffset() Obtain Pagination start value. Default value: 0
 * @method void setOffset(integer $Offset) Set Pagination start value. Default value: 0
 * @method integer getLimit() Obtain Number of entries per page. Default value: 100. Maximum value: 100
 * @method void setLimit(integer $Limit) Set Number of entries per page. Default value: 100. Maximum value: 100
 * @method integer getOrderByType() Obtain Time sorting order. Default value: 0
<li>0: descending</li>
<li>1: ascending</li>
 * @method void setOrderByType(integer $OrderByType) Set Time sorting order. Default value: 0
<li>0: descending</li>
<li>1: ascending</li>
 */
class DescribeInstanceLogsRequest extends AbstractModel
{
    /**
     * @var string Cluster instance ID
     */
    public $InstanceId;

    /**
     * @var integer Log type. Default value: 1
<li>1: primary log</li>
<li>2: search slow log</li>
<li>3: index slow log</li>
<li>4: GC log</li>
     */
    public $LogType;

    /**
     * @var string Search keyword, which supports LUCENE syntax, such as `level:WARN`, `ip:1.1.1.1`, and `message:test-index`
     */
    public $SearchKey;

    /**
     * @var string Log start time in the format of YYYY-MM-DD HH:MM:SS, such as 2019-01-22 20:15:53
     */
    public $StartTime;

    /**
     * @var string Log end time in the format of YYYY-MM-DD HH:MM:SS, such as 2019-01-22 20:15:53
     */
    public $EndTime;

    /**
     * @var integer Pagination start value. Default value: 0
     */
    public $Offset;

    /**
     * @var integer Number of entries per page. Default value: 100. Maximum value: 100
     */
    public $Limit;

    /**
     * @var integer Time sorting order. Default value: 0
<li>0: descending</li>
<li>1: ascending</li>
     */
    public $OrderByType;

    /**
     * @param string $InstanceId Cluster instance ID
     * @param integer $LogType Log type. Default value: 1
<li>1: primary log</li>
<li>2: search slow log</li>
<li>3: index slow log</li>
<li>4: GC log</li>
     * @param string $SearchKey Search keyword, which supports LUCENE syntax, such as `level:WARN`, `ip:1.1.1.1`, and `message:test-index`
     * @param string $StartTime Log start time in the format of YYYY-MM-DD HH:MM:SS, such as 2019-01-22 20:15:53
     * @param string $EndTime Log end time in the format of YYYY-MM-DD HH:MM:SS, such as 2019-01-22 20:15:53
     * @param integer $Offset Pagination start value. Default value: 0
     * @param integer $Limit Number of entries per page. Default value: 100. Maximum value: 100
     * @param integer $OrderByType Time sorting order. Default value: 0
<li>0: descending</li>
<li>1: ascending</li>
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
    }
}
