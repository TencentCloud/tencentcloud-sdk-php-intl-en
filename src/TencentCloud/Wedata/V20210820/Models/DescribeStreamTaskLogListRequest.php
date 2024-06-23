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
 * DescribeStreamTaskLogList request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method string getJobId() Obtain Job ID
 * @method void setJobId(string $JobId) Set Job ID
 * @method integer getEndTime() Obtain End time
 * @method void setEndTime(integer $EndTime) Set End time
 * @method integer getStartTime() Obtain Start Time
 * @method void setStartTime(integer $StartTime) Set Start Time
 * @method string getContainer() Obtain container Name
 * @method void setContainer(string $Container) Set container Name
 * @method integer getLimit() Obtain Number of entries
 * @method void setLimit(integer $Limit) Set Number of entries
 * @method string getOrderType() Obtain Sort Type desc asc
 * @method void setOrderType(string $OrderType) Set Sort Type desc asc
 * @method integer getRunningOrderId() Obtain Instance ID of Job Execution
 * @method void setRunningOrderId(integer $RunningOrderId) Set Instance ID of Job Execution
 * @method string getKeyword() Obtain Keyword
 * @method void setKeyword(string $Keyword) Set Keyword
 */
class DescribeStreamTaskLogListRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Task ID
     */
    public $TaskId;

    /**
     * @var string Job ID
     */
    public $JobId;

    /**
     * @var integer End time
     */
    public $EndTime;

    /**
     * @var integer Start Time
     */
    public $StartTime;

    /**
     * @var string container Name
     */
    public $Container;

    /**
     * @var integer Number of entries
     */
    public $Limit;

    /**
     * @var string Sort Type desc asc
     */
    public $OrderType;

    /**
     * @var integer Instance ID of Job Execution
     */
    public $RunningOrderId;

    /**
     * @var string Keyword
     */
    public $Keyword;

    /**
     * @param string $ProjectId Project ID
     * @param string $TaskId Task ID
     * @param string $JobId Job ID
     * @param integer $EndTime End time
     * @param integer $StartTime Start Time
     * @param string $Container container Name
     * @param integer $Limit Number of entries
     * @param string $OrderType Sort Type desc asc
     * @param integer $RunningOrderId Instance ID of Job Execution
     * @param string $Keyword Keyword
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("RunningOrderId",$param) and $param["RunningOrderId"] !== null) {
            $this->RunningOrderId = $param["RunningOrderId"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
