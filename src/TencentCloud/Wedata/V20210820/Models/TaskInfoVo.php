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
 * Task information.
 *
 * @method string getAppID() Obtain Tenant id.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAppID(string $AppID) Set Tenant id.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProjectId() Obtain Project ID.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectId(string $ProjectId) Set Project ID.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskId() Obtain Task ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskId(string $TaskId) Set Task ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskName() Obtain Task name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskName(string $TaskName) Set Task name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTaskTypeId() Obtain Task type id.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskTypeId(integer $TaskTypeId) Set Task type id.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOnwerUid() Obtain Main account id.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOnwerUid(string $OnwerUid) Set Main account id.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInChargeId() Obtain Person in charge.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInChargeId(string $InChargeId) Set Person in charge.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain Instance ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Instance ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getJobId() Obtain jobId
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setJobId(string $JobId) Set jobId
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEngineType() Obtain Engine type, DLC, EMR.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEngineType(string $EngineType) Set Engine type, DLC, EMR.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEngineName() Obtain Engine name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEngineName(string $EngineName) Set Engine name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEngineSubType() Obtain Engine sub-type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEngineSubType(string $EngineSubType) Set Engine sub-type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEngineTaskId() Obtain Engine taskId.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEngineTaskId(string $EngineTaskId) Set Engine taskId.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEngineExeStatus() Obtain Engine execution status, enumerate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEngineExeStatus(string $EngineExeStatus) Set Engine execution status, enumerate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEngineExeUser() Obtain Engine execution user.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEngineExeUser(string $EngineExeUser) Set Engine execution user.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEngineExeStartTime() Obtain Engine execution start time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEngineExeStartTime(string $EngineExeStartTime) Set Engine execution start time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEngineExeEndTime() Obtain Engine execution end time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEngineExeEndTime(string $EngineExeEndTime) Set Engine execution end time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProductSource() Obtain DATA source, such as DATA_INTEGRATION, DATA_EXPLORATION, DATA_QUALITY, OM_CENTER.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProductSource(string $ProductSource) Set DATA source, such as DATA_INTEGRATION, DATA_EXPLORATION, DATA_QUALITY, OM_CENTER.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TaskInfoVo extends AbstractModel
{
    /**
     * @var string Tenant id.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AppID;

    /**
     * @var string Project ID.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectId;

    /**
     * @var string Task ID

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskId;

    /**
     * @var string Task name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskName;

    /**
     * @var integer Task type id.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskTypeId;

    /**
     * @var string Main account id.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OnwerUid;

    /**
     * @var string Person in charge.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InChargeId;

    /**
     * @var string Instance ID

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var string jobId
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $JobId;

    /**
     * @var string Engine type, DLC, EMR.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EngineType;

    /**
     * @var string Engine name

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EngineName;

    /**
     * @var string Engine sub-type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EngineSubType;

    /**
     * @var string Engine taskId.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EngineTaskId;

    /**
     * @var string Engine execution status, enumerate.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EngineExeStatus;

    /**
     * @var string Engine execution user.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EngineExeUser;

    /**
     * @var string Engine execution start time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EngineExeStartTime;

    /**
     * @var string Engine execution end time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EngineExeEndTime;

    /**
     * @var string DATA source, such as DATA_INTEGRATION, DATA_EXPLORATION, DATA_QUALITY, OM_CENTER.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProductSource;

    /**
     * @param string $AppID Tenant id.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProjectId Project ID.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskId Task ID

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskName Task name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TaskTypeId Task type id.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OnwerUid Main account id.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InChargeId Person in charge.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId Instance ID

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $JobId jobId
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EngineType Engine type, DLC, EMR.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EngineName Engine name

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EngineSubType Engine sub-type.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EngineTaskId Engine taskId.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EngineExeStatus Engine execution status, enumerate.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EngineExeUser Engine execution user.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EngineExeStartTime Engine execution start time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EngineExeEndTime Engine execution end time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProductSource DATA source, such as DATA_INTEGRATION, DATA_EXPLORATION, DATA_QUALITY, OM_CENTER.
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
        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("OnwerUid",$param) and $param["OnwerUid"] !== null) {
            $this->OnwerUid = $param["OnwerUid"];
        }

        if (array_key_exists("InChargeId",$param) and $param["InChargeId"] !== null) {
            $this->InChargeId = $param["InChargeId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }

        if (array_key_exists("EngineName",$param) and $param["EngineName"] !== null) {
            $this->EngineName = $param["EngineName"];
        }

        if (array_key_exists("EngineSubType",$param) and $param["EngineSubType"] !== null) {
            $this->EngineSubType = $param["EngineSubType"];
        }

        if (array_key_exists("EngineTaskId",$param) and $param["EngineTaskId"] !== null) {
            $this->EngineTaskId = $param["EngineTaskId"];
        }

        if (array_key_exists("EngineExeStatus",$param) and $param["EngineExeStatus"] !== null) {
            $this->EngineExeStatus = $param["EngineExeStatus"];
        }

        if (array_key_exists("EngineExeUser",$param) and $param["EngineExeUser"] !== null) {
            $this->EngineExeUser = $param["EngineExeUser"];
        }

        if (array_key_exists("EngineExeStartTime",$param) and $param["EngineExeStartTime"] !== null) {
            $this->EngineExeStartTime = $param["EngineExeStartTime"];
        }

        if (array_key_exists("EngineExeEndTime",$param) and $param["EngineExeEndTime"] !== null) {
            $this->EngineExeEndTime = $param["EngineExeEndTime"];
        }

        if (array_key_exists("ProductSource",$param) and $param["ProductSource"] !== null) {
            $this->ProductSource = $param["ProductSource"];
        }
    }
}
