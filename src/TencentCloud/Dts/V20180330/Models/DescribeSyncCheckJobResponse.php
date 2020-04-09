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
namespace TencentCloud\Dts\V20180330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSyncCheckJob response structure.
 *
 * @method string getStatus() Obtain Task check status: starting, running, finished
 * @method void setStatus(string $Status) Set Task check status: starting, running, finished
 * @method integer getErrorCode() Obtain Code of the task check result
 * @method void setErrorCode(integer $ErrorCode) Set Code of the task check result
 * @method string getErrorMessage() Obtain Prompt message
 * @method void setErrorMessage(string $ErrorMessage) Set Prompt message
 * @method array getStepInfo() Obtain Description of a task execution step
 * @method void setStepInfo(array $StepInfo) Set Description of a task execution step
 * @method integer getCheckFlag() Obtain Check flag. 0: checking; 1: successfully checked
 * @method void setCheckFlag(integer $CheckFlag) Set Check flag. 0: checking; 1: successfully checked
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeSyncCheckJobResponse extends AbstractModel
{
    /**
     * @var string Task check status: starting, running, finished
     */
    public $Status;

    /**
     * @var integer Code of the task check result
     */
    public $ErrorCode;

    /**
     * @var string Prompt message
     */
    public $ErrorMessage;

    /**
     * @var array Description of a task execution step
     */
    public $StepInfo;

    /**
     * @var integer Check flag. 0: checking; 1: successfully checked
     */
    public $CheckFlag;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Status Task check status: starting, running, finished
     * @param integer $ErrorCode Code of the task check result
     * @param string $ErrorMessage Prompt message
     * @param array $StepInfo Description of a task execution step
     * @param integer $CheckFlag Check flag. 0: checking; 1: successfully checked
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("StepInfo",$param) and $param["StepInfo"] !== null) {
            $this->StepInfo = [];
            foreach ($param["StepInfo"] as $key => $value){
                $obj = new SyncCheckStepInfo();
                $obj->deserialize($value);
                array_push($this->StepInfo, $obj);
            }
        }

        if (array_key_exists("CheckFlag",$param) and $param["CheckFlag"] !== null) {
            $this->CheckFlag = $param["CheckFlag"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
