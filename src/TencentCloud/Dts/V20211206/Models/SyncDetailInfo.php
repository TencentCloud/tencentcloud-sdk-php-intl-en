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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Step information of the sync task
 *
 * @method integer getStepAll() Obtain Total number of steps
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStepAll(integer $StepAll) Set Total number of steps
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStepNow() Obtain Current step
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStepNow(integer $StepNow) Set Current step
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getProgress() Obtain Overall progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProgress(integer $Progress) Set Overall progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCurrentStepProgress() Obtain Progress of the current step. Value range: 0-100. The value of `-1` indicates that you can't check the progress of the current step.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCurrentStepProgress(integer $CurrentStepProgress) Set Progress of the current step. Value range: 0-100. The value of `-1` indicates that you can't check the progress of the current step.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMasterSlaveDistance() Obtain Data volume difference between the sync source and target
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMasterSlaveDistance(integer $MasterSlaveDistance) Set Data volume difference between the sync source and target
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSecondsBehindMaster() Obtain Time difference between the sync source and target
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSecondsBehindMaster(integer $SecondsBehindMaster) Set Time difference between the sync source and target
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMessage() Obtain Overall description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMessage(string $Message) Set Overall description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getStepInfos() Obtain Step details
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStepInfos(array $StepInfos) Set Step details
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCauseOfCompareDisable() Obtain Cause of the failure of initiating data consistency check
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCauseOfCompareDisable(string $CauseOfCompareDisable) Set Cause of the failure of initiating data consistency check
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ErrInfo getErrInfo() Obtain Task error and the corresponding solution
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrInfo(ErrInfo $ErrInfo) Set Task error and the corresponding solution
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SyncDetailInfo extends AbstractModel
{
    /**
     * @var integer Total number of steps
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StepAll;

    /**
     * @var integer Current step
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StepNow;

    /**
     * @var integer Overall progress
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Progress;

    /**
     * @var integer Progress of the current step. Value range: 0-100. The value of `-1` indicates that you can't check the progress of the current step.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CurrentStepProgress;

    /**
     * @var integer Data volume difference between the sync source and target
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MasterSlaveDistance;

    /**
     * @var integer Time difference between the sync source and target
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SecondsBehindMaster;

    /**
     * @var string Overall description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Message;

    /**
     * @var array Step details
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StepInfos;

    /**
     * @var string Cause of the failure of initiating data consistency check
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CauseOfCompareDisable;

    /**
     * @var ErrInfo Task error and the corresponding solution
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErrInfo;

    /**
     * @param integer $StepAll Total number of steps
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StepNow Current step
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Progress Overall progress
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CurrentStepProgress Progress of the current step. Value range: 0-100. The value of `-1` indicates that you can't check the progress of the current step.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MasterSlaveDistance Data volume difference between the sync source and target
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SecondsBehindMaster Time difference between the sync source and target
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Message Overall description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $StepInfos Step details
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CauseOfCompareDisable Cause of the failure of initiating data consistency check
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ErrInfo $ErrInfo Task error and the corresponding solution
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("StepAll",$param) and $param["StepAll"] !== null) {
            $this->StepAll = $param["StepAll"];
        }

        if (array_key_exists("StepNow",$param) and $param["StepNow"] !== null) {
            $this->StepNow = $param["StepNow"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("CurrentStepProgress",$param) and $param["CurrentStepProgress"] !== null) {
            $this->CurrentStepProgress = $param["CurrentStepProgress"];
        }

        if (array_key_exists("MasterSlaveDistance",$param) and $param["MasterSlaveDistance"] !== null) {
            $this->MasterSlaveDistance = $param["MasterSlaveDistance"];
        }

        if (array_key_exists("SecondsBehindMaster",$param) and $param["SecondsBehindMaster"] !== null) {
            $this->SecondsBehindMaster = $param["SecondsBehindMaster"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("StepInfos",$param) and $param["StepInfos"] !== null) {
            $this->StepInfos = [];
            foreach ($param["StepInfos"] as $key => $value){
                $obj = new StepInfo();
                $obj->deserialize($value);
                array_push($this->StepInfos, $obj);
            }
        }

        if (array_key_exists("CauseOfCompareDisable",$param) and $param["CauseOfCompareDisable"] !== null) {
            $this->CauseOfCompareDisable = $param["CauseOfCompareDisable"];
        }

        if (array_key_exists("ErrInfo",$param) and $param["ErrInfo"] !== null) {
            $this->ErrInfo = new ErrInfo();
            $this->ErrInfo->deserialize($param["ErrInfo"]);
        }
    }
}
