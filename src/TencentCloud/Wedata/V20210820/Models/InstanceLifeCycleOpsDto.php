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
 * Instance Lifecycle Details
 *
 * @method string getTaskId() Obtain Task ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskId(string $TaskId) Set Task ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCurRunDate() Obtain Data Timestamp
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCurRunDate(string $CurRunDate) Set Data Timestamp
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getLifeRound() Obtain Instance Lifecycle Count
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLifeRound(integer $LifeRound) Set Instance Lifecycle Count
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getRunType() Obtain Run Type Rerun/Supplement/Periodic/Non-periodic
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRunType(string $RunType) Set Run Type Rerun/Supplement/Periodic/Non-periodic
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTries() Obtain Number of Reruns
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTries(integer $Tries) Set Number of Reruns
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getInstanceLifeDetailDtoList() Obtain Instance LifecycleNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setInstanceLifeDetailDtoList(array $InstanceLifeDetailDtoList) Set Instance LifecycleNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getRunnerState() Obtain Runner Status
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRunnerState(string $RunnerState) Set Runner Status
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getErrorDesc() Obtain Error codeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setErrorDesc(string $ErrorDesc) Set Error codeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getErrorCodeLevel() Obtain Error Alert Level
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setErrorCodeLevel(string $ErrorCodeLevel) Set Error Alert Level
Note: This field may return null, indicating that no valid value can be obtained.
 * @method InstanceLogInfo getInstanceLogListOpsDto() Obtain Instance Log Summary
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInstanceLogListOpsDto(InstanceLogInfo $InstanceLogListOpsDto) Set Instance Log Summary
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getInstanceState() Obtain Instance StatusNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setInstanceState(string $InstanceState) Set Instance StatusNote: This field may return null, indicating that no valid value can be obtained.
 */
class InstanceLifeCycleOpsDto extends AbstractModel
{
    /**
     * @var string Task ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskId;

    /**
     * @var string Data Timestamp
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CurRunDate;

    /**
     * @var integer Instance Lifecycle Count
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LifeRound;

    /**
     * @var string Run Type Rerun/Supplement/Periodic/Non-periodic
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RunType;

    /**
     * @var integer Number of Reruns
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Tries;

    /**
     * @var array Instance LifecycleNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $InstanceLifeDetailDtoList;

    /**
     * @var string Runner Status
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RunnerState;

    /**
     * @var string Error codeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ErrorDesc;

    /**
     * @var string Error Alert Level
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ErrorCodeLevel;

    /**
     * @var InstanceLogInfo Instance Log Summary
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InstanceLogListOpsDto;

    /**
     * @var string Instance StatusNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $InstanceState;

    /**
     * @param string $TaskId Task ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CurRunDate Data Timestamp
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $LifeRound Instance Lifecycle Count
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $RunType Run Type Rerun/Supplement/Periodic/Non-periodic
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Tries Number of Reruns
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $InstanceLifeDetailDtoList Instance LifecycleNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $RunnerState Runner Status
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ErrorDesc Error codeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ErrorCodeLevel Error Alert Level
Note: This field may return null, indicating that no valid value can be obtained.
     * @param InstanceLogInfo $InstanceLogListOpsDto Instance Log Summary
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $InstanceState Instance StatusNote: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("CurRunDate",$param) and $param["CurRunDate"] !== null) {
            $this->CurRunDate = $param["CurRunDate"];
        }

        if (array_key_exists("LifeRound",$param) and $param["LifeRound"] !== null) {
            $this->LifeRound = $param["LifeRound"];
        }

        if (array_key_exists("RunType",$param) and $param["RunType"] !== null) {
            $this->RunType = $param["RunType"];
        }

        if (array_key_exists("Tries",$param) and $param["Tries"] !== null) {
            $this->Tries = $param["Tries"];
        }

        if (array_key_exists("InstanceLifeDetailDtoList",$param) and $param["InstanceLifeDetailDtoList"] !== null) {
            $this->InstanceLifeDetailDtoList = [];
            foreach ($param["InstanceLifeDetailDtoList"] as $key => $value){
                $obj = new InstanceLifeDetailDto();
                $obj->deserialize($value);
                array_push($this->InstanceLifeDetailDtoList, $obj);
            }
        }

        if (array_key_exists("RunnerState",$param) and $param["RunnerState"] !== null) {
            $this->RunnerState = $param["RunnerState"];
        }

        if (array_key_exists("ErrorDesc",$param) and $param["ErrorDesc"] !== null) {
            $this->ErrorDesc = $param["ErrorDesc"];
        }

        if (array_key_exists("ErrorCodeLevel",$param) and $param["ErrorCodeLevel"] !== null) {
            $this->ErrorCodeLevel = $param["ErrorCodeLevel"];
        }

        if (array_key_exists("InstanceLogListOpsDto",$param) and $param["InstanceLogListOpsDto"] !== null) {
            $this->InstanceLogListOpsDto = new InstanceLogInfo();
            $this->InstanceLogListOpsDto->deserialize($param["InstanceLogListOpsDto"]);
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }
    }
}
