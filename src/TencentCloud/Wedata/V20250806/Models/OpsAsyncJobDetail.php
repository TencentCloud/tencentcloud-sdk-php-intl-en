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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Asynchronous operation details.
 *
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method string getAsyncId() Obtain Operation ID
 * @method void setAsyncId(string $AsyncId) Set Operation ID
 * @method string getAsyncType() Obtain Asynchronous operation type.
 * @method void setAsyncType(string $AsyncType) Set Asynchronous operation type.
 * @method string getStatus() Obtain Asynchronous operation status: initial status: INIT; Running: RUNNING; Success: SUCCESS; failure: FAIL; partially successful: PART_SUCCESS.
 * @method void setStatus(string $Status) Set Asynchronous operation status: initial status: INIT; Running: RUNNING; Success: SUCCESS; failure: FAIL; partially successful: PART_SUCCESS.
 * @method string getErrorDesc() Obtain Error message.


 * @method void setErrorDesc(string $ErrorDesc) Set Error message.


 * @method integer getTotalSubProcessCount() Obtain Total sub-processes.
 * @method void setTotalSubProcessCount(integer $TotalSubProcessCount) Set Total sub-processes.
 * @method integer getFinishedSubProcessCount() Obtain Number of completed sub-processes.

 * @method void setFinishedSubProcessCount(integer $FinishedSubProcessCount) Set Number of completed sub-processes.

 * @method integer getSuccessSubProcessCount() Obtain Count of successful sub-processes.

 * @method void setSuccessSubProcessCount(integer $SuccessSubProcessCount) Set Count of successful sub-processes.

 * @method string getCreateUserUin() Obtain Operator id.
 * @method void setCreateUserUin(string $CreateUserUin) Set Operator id.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getUpdateTime() Obtain Update time.
 * @method void setUpdateTime(string $UpdateTime) Set Update time.
 */
class OpsAsyncJobDetail extends AbstractModel
{
    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var string Operation ID
     */
    public $AsyncId;

    /**
     * @var string Asynchronous operation type.
     */
    public $AsyncType;

    /**
     * @var string Asynchronous operation status: initial status: INIT; Running: RUNNING; Success: SUCCESS; failure: FAIL; partially successful: PART_SUCCESS.
     */
    public $Status;

    /**
     * @var string Error message.


     */
    public $ErrorDesc;

    /**
     * @var integer Total sub-processes.
     */
    public $TotalSubProcessCount;

    /**
     * @var integer Number of completed sub-processes.

     */
    public $FinishedSubProcessCount;

    /**
     * @var integer Count of successful sub-processes.

     */
    public $SuccessSubProcessCount;

    /**
     * @var string Operator id.
     */
    public $CreateUserUin;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Update time.
     */
    public $UpdateTime;

    /**
     * @param string $ProjectId Project ID.
     * @param string $AsyncId Operation ID
     * @param string $AsyncType Asynchronous operation type.
     * @param string $Status Asynchronous operation status: initial status: INIT; Running: RUNNING; Success: SUCCESS; failure: FAIL; partially successful: PART_SUCCESS.
     * @param string $ErrorDesc Error message.


     * @param integer $TotalSubProcessCount Total sub-processes.
     * @param integer $FinishedSubProcessCount Number of completed sub-processes.

     * @param integer $SuccessSubProcessCount Count of successful sub-processes.

     * @param string $CreateUserUin Operator id.
     * @param string $CreateTime Creation time.
     * @param string $UpdateTime Update time.
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

        if (array_key_exists("AsyncId",$param) and $param["AsyncId"] !== null) {
            $this->AsyncId = $param["AsyncId"];
        }

        if (array_key_exists("AsyncType",$param) and $param["AsyncType"] !== null) {
            $this->AsyncType = $param["AsyncType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrorDesc",$param) and $param["ErrorDesc"] !== null) {
            $this->ErrorDesc = $param["ErrorDesc"];
        }

        if (array_key_exists("TotalSubProcessCount",$param) and $param["TotalSubProcessCount"] !== null) {
            $this->TotalSubProcessCount = $param["TotalSubProcessCount"];
        }

        if (array_key_exists("FinishedSubProcessCount",$param) and $param["FinishedSubProcessCount"] !== null) {
            $this->FinishedSubProcessCount = $param["FinishedSubProcessCount"];
        }

        if (array_key_exists("SuccessSubProcessCount",$param) and $param["SuccessSubProcessCount"] !== null) {
            $this->SuccessSubProcessCount = $param["SuccessSubProcessCount"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
