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
 * DescribeTaskList request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method integer getLimit() Obtain Maximum number of results returned per page. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Maximum number of results returned per page. Default value: 20. Maximum value: 100.
 * @method integer getOffset() Obtain Offset, which is an integral multiple of `Limit` (rounded down automatically).
 * @method void setOffset(integer $Offset) Set Offset, which is an integral multiple of `Limit` (rounded down automatically).
 * @method array getProjectIds() Obtain Project ID
 * @method void setProjectIds(array $ProjectIds) Set Project ID
 * @method array getTaskTypes() Obtain Task type
 * @method void setTaskTypes(array $TaskTypes) Set Task type
 * @method string getBeginTime() Obtain Start time
 * @method void setBeginTime(string $BeginTime) Set Start time
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 * @method array getTaskStatus() Obtain Task status
 * @method void setTaskStatus(array $TaskStatus) Set Task status
 * @method array getResult() Obtain Task status
 * @method void setResult(array $Result) Set Task status
 * @method array getOperatorUin() Obtain The field `OperatorUin` has been disused and replaced by `OperateUin`.
 * @method void setOperatorUin(array $OperatorUin) Set The field `OperatorUin` has been disused and replaced by `OperateUin`.
 * @method array getOperateUin() Obtain Operator Uin
 * @method void setOperateUin(array $OperateUin) Set Operator Uin
 */
class DescribeTaskListRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var integer Maximum number of results returned per page. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer Offset, which is an integral multiple of `Limit` (rounded down automatically).
     */
    public $Offset;

    /**
     * @var array Project ID
     */
    public $ProjectIds;

    /**
     * @var array Task type
     */
    public $TaskTypes;

    /**
     * @var string Start time
     */
    public $BeginTime;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @var array Task status
     */
    public $TaskStatus;

    /**
     * @var array Task status
     */
    public $Result;

    /**
     * @var array The field `OperatorUin` has been disused and replaced by `OperateUin`.
     */
    public $OperatorUin;

    /**
     * @var array Operator Uin
     */
    public $OperateUin;

    /**
     * @param string $InstanceId Instance ID
     * @param string $InstanceName Instance name
     * @param integer $Limit Maximum number of results returned per page. Default value: 20. Maximum value: 100.
     * @param integer $Offset Offset, which is an integral multiple of `Limit` (rounded down automatically).
     * @param array $ProjectIds Project ID
     * @param array $TaskTypes Task type
     * @param string $BeginTime Start time
     * @param string $EndTime End time
     * @param array $TaskStatus Task status
     * @param array $Result Task status
     * @param array $OperatorUin The field `OperatorUin` has been disused and replaced by `OperateUin`.
     * @param array $OperateUin Operator Uin
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("TaskTypes",$param) and $param["TaskTypes"] !== null) {
            $this->TaskTypes = $param["TaskTypes"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("OperatorUin",$param) and $param["OperatorUin"] !== null) {
            $this->OperatorUin = $param["OperatorUin"];
        }

        if (array_key_exists("OperateUin",$param) and $param["OperateUin"] !== null) {
            $this->OperateUin = $param["OperateUin"];
        }
    }
}
