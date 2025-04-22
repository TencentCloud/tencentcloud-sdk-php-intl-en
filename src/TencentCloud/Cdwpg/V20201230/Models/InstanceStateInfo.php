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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance State Information
 *
 * @method string getInstanceState() Obtain Instance status. Example: serving.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceState(string $InstanceState) Set Instance status. Example: serving.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFlowCreateTime() Obtain Creation time of instance operation.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFlowCreateTime(string $FlowCreateTime) Set Creation time of instance operation.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFlowName() Obtain Instance operation name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFlowName(string $FlowName) Set Instance operation name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getFlowProgress() Obtain Instance operation progress.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFlowProgress(integer $FlowProgress) Set Instance operation progress.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceStateDesc() Obtain Instance status description. Example: running.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceStateDesc(string $InstanceStateDesc) Set Instance status description. Example: running.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFlowMsg() Obtain Instance process error messages. Example: "Creation failed, insufficient resources."
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFlowMsg(string $FlowMsg) Set Instance process error messages. Example: "Creation failed, insufficient resources."
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProcessName() Obtain The name of the current step. Example: "Purchasing resources."
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProcessName(string $ProcessName) Set The name of the current step. Example: "Purchasing resources."
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBackupStatus() Obtain Indicates whether there is a backup task in the instance. 1 indicates yes and 0 indicates no.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBackupStatus(integer $BackupStatus) Set Indicates whether there is a backup task in the instance. 1 indicates yes and 0 indicates no.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain Request ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRequestId(string $RequestId) Set Request ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBackupOpenStatus() Obtain Indicates whether there is a backup task in the cluster. 1 indicates yes and 0 indicates no.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBackupOpenStatus(integer $BackupOpenStatus) Set Indicates whether there is a backup task in the cluster. 1 indicates yes and 0 indicates no.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class InstanceStateInfo extends AbstractModel
{
    /**
     * @var string Instance status. Example: serving.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceState;

    /**
     * @var string Creation time of instance operation.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FlowCreateTime;

    /**
     * @var string Instance operation name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FlowName;

    /**
     * @var integer Instance operation progress.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FlowProgress;

    /**
     * @var string Instance status description. Example: running.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceStateDesc;

    /**
     * @var string Instance process error messages. Example: "Creation failed, insufficient resources."
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FlowMsg;

    /**
     * @var string The name of the current step. Example: "Purchasing resources."
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProcessName;

    /**
     * @var integer Indicates whether there is a backup task in the instance. 1 indicates yes and 0 indicates no.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BackupStatus;

    /**
     * @var string Request ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RequestId;

    /**
     * @var integer Indicates whether there is a backup task in the cluster. 1 indicates yes and 0 indicates no.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BackupOpenStatus;

    /**
     * @param string $InstanceState Instance status. Example: serving.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FlowCreateTime Creation time of instance operation.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FlowName Instance operation name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $FlowProgress Instance operation progress.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceStateDesc Instance status description. Example: running.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FlowMsg Instance process error messages. Example: "Creation failed, insufficient resources."
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProcessName The name of the current step. Example: "Purchasing resources."
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $BackupStatus Indicates whether there is a backup task in the instance. 1 indicates yes and 0 indicates no.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId Request ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $BackupOpenStatus Indicates whether there is a backup task in the cluster. 1 indicates yes and 0 indicates no.
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
        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("FlowCreateTime",$param) and $param["FlowCreateTime"] !== null) {
            $this->FlowCreateTime = $param["FlowCreateTime"];
        }

        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("FlowProgress",$param) and $param["FlowProgress"] !== null) {
            $this->FlowProgress = $param["FlowProgress"];
        }

        if (array_key_exists("InstanceStateDesc",$param) and $param["InstanceStateDesc"] !== null) {
            $this->InstanceStateDesc = $param["InstanceStateDesc"];
        }

        if (array_key_exists("FlowMsg",$param) and $param["FlowMsg"] !== null) {
            $this->FlowMsg = $param["FlowMsg"];
        }

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("BackupStatus",$param) and $param["BackupStatus"] !== null) {
            $this->BackupStatus = $param["BackupStatus"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

        if (array_key_exists("BackupOpenStatus",$param) and $param["BackupOpenStatus"] !== null) {
            $this->BackupOpenStatus = $param["BackupOpenStatus"];
        }
    }
}
