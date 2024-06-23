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
 * Instance Log Summary Information
 *
 * @method string getTaskId() Obtain Task IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskId(string $TaskId) Set Task IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getCurRunDate() Obtain Data TimestampNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setCurRunDate(string $CurRunDate) Set Data TimestampNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getTries() Obtain Number of trial runs
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTries(string $Tries) Set Number of trial runs
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getLastUpdate() Obtain Log Update Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLastUpdate(string $LastUpdate) Set Log Update Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getBrokerIp() Obtain Log Node
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setBrokerIp(string $BrokerIp) Set Log Node
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getFileSize() Obtain File sizeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setFileSize(string $FileSize) Set File sizeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getOriginFileName() Obtain File Name including Full Path
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOriginFileName(string $OriginFileName) Set File Name including Full Path
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreateTime() Obtain Log Creation Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Log Creation Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getInstanceLogType() Obtain Instance Log Type, run: running; kill: termination
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInstanceLogType(string $InstanceLogType) Set Instance Log Type, run: running; kill: termination
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTaskName() Obtain Task NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskName(string $TaskName) Set Task NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getCostTime() Obtain Runtime Duration
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCostTime(string $CostTime) Set Runtime Duration
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getInstanceStatus() Obtain Instance Status COMPLETED completed FAILED failed retry EXPIRED failed RUNNING running
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInstanceStatus(string $InstanceStatus) Set Instance Status COMPLETED completed FAILED failed retry EXPIRED failed RUNNING running
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCodeFileName() Obtain Instance Code File, absence indicates the corresponding code file does not exist, possibly due to the executor not being upgraded/certain types of tasks having no code.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCodeFileName(string $CodeFileName) Set Instance Code File, absence indicates the corresponding code file does not exist, possibly due to the executor not being upgraded/certain types of tasks having no code.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getExtensionInfo() Obtain Extended Attributes
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExtensionInfo(array $ExtensionInfo) Set Extended Attributes
Note: This field may return null, indicating that no valid value can be obtained.
 */
class InstanceLogInfo extends AbstractModel
{
    /**
     * @var string Task IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskId;

    /**
     * @var string Data TimestampNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $CurRunDate;

    /**
     * @var string Number of trial runs
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Tries;

    /**
     * @var string Log Update Time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LastUpdate;

    /**
     * @var string Log Node
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $BrokerIp;

    /**
     * @var string File sizeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $FileSize;

    /**
     * @var string File Name including Full Path
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $OriginFileName;

    /**
     * @var string Log Creation Time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Instance Log Type, run: running; kill: termination
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InstanceLogType;

    /**
     * @var string Task NameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskName;

    /**
     * @var string Runtime Duration
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CostTime;

    /**
     * @var string Instance Status COMPLETED completed FAILED failed retry EXPIRED failed RUNNING running
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InstanceStatus;

    /**
     * @var string Instance Code File, absence indicates the corresponding code file does not exist, possibly due to the executor not being upgraded/certain types of tasks having no code.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CodeFileName;

    /**
     * @var array Extended Attributes
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExtensionInfo;

    /**
     * @param string $TaskId Task IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $CurRunDate Data TimestampNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Tries Number of trial runs
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $LastUpdate Log Update Time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $BrokerIp Log Node
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $FileSize File sizeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $OriginFileName File Name including Full Path
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CreateTime Log Creation Time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $InstanceLogType Instance Log Type, run: running; kill: termination
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TaskName Task NameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $CostTime Runtime Duration
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $InstanceStatus Instance Status COMPLETED completed FAILED failed retry EXPIRED failed RUNNING running
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CodeFileName Instance Code File, absence indicates the corresponding code file does not exist, possibly due to the executor not being upgraded/certain types of tasks having no code.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $ExtensionInfo Extended Attributes
Note: This field may return null, indicating that no valid value can be obtained.
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

        if (array_key_exists("Tries",$param) and $param["Tries"] !== null) {
            $this->Tries = $param["Tries"];
        }

        if (array_key_exists("LastUpdate",$param) and $param["LastUpdate"] !== null) {
            $this->LastUpdate = $param["LastUpdate"];
        }

        if (array_key_exists("BrokerIp",$param) and $param["BrokerIp"] !== null) {
            $this->BrokerIp = $param["BrokerIp"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("OriginFileName",$param) and $param["OriginFileName"] !== null) {
            $this->OriginFileName = $param["OriginFileName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("InstanceLogType",$param) and $param["InstanceLogType"] !== null) {
            $this->InstanceLogType = $param["InstanceLogType"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("CostTime",$param) and $param["CostTime"] !== null) {
            $this->CostTime = $param["CostTime"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("CodeFileName",$param) and $param["CodeFileName"] !== null) {
            $this->CodeFileName = $param["CodeFileName"];
        }

        if (array_key_exists("ExtensionInfo",$param) and $param["ExtensionInfo"] !== null) {
            $this->ExtensionInfo = [];
            foreach ($param["ExtensionInfo"] as $key => $value){
                $obj = new AttributeItemDTO();
                $obj->deserialize($value);
                array_push($this->ExtensionInfo, $obj);
            }
        }
    }
}
