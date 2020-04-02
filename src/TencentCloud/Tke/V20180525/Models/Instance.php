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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getInstanceRole() Obtain Node role: MASTER, WORKER, ETCD, MASTER_ETCD, and ALL. Default value: WORKER
 * @method void setInstanceRole(string $InstanceRole) Set Node role: MASTER, WORKER, ETCD, MASTER_ETCD, and ALL. Default value: WORKER
 * @method string getFailedReason() Obtain Reason for instance exception (or initialization)
 * @method void setFailedReason(string $FailedReason) Set Reason for instance exception (or initialization)
 * @method string getInstanceState() Obtain Instance status (running, initializing, or failed)
 * @method void setInstanceState(string $InstanceState) Set Instance status (running, initializing, or failed)
 * @method string getDrainStatus() Obtain Whether the instance is drained
Note: this field may return null, indicating that no valid value is obtained.
 * @method void setDrainStatus(string $DrainStatus) Set Whether the instance is drained
Note: this field may return null, indicating that no valid value is obtained.
 * @method InstanceAdvancedSettings getInstanceAdvancedSettings() Obtain Node settings
Note: this field may return null, indicating that no valid value is obtained.
 * @method void setInstanceAdvancedSettings(InstanceAdvancedSettings $InstanceAdvancedSettings) Set Node settings
Note: this field may return null, indicating that no valid value is obtained.
 * @method string getCreatedTime() Obtain Creation time
 * @method void setCreatedTime(string $CreatedTime) Set Creation time
 */

/**
 *Cluster’s instance information
 */
class Instance extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Node role: MASTER, WORKER, ETCD, MASTER_ETCD, and ALL. Default value: WORKER
     */
    public $InstanceRole;

    /**
     * @var string Reason for instance exception (or initialization)
     */
    public $FailedReason;

    /**
     * @var string Instance status (running, initializing, or failed)
     */
    public $InstanceState;

    /**
     * @var string Whether the instance is drained
Note: this field may return null, indicating that no valid value is obtained.
     */
    public $DrainStatus;

    /**
     * @var InstanceAdvancedSettings Node settings
Note: this field may return null, indicating that no valid value is obtained.
     */
    public $InstanceAdvancedSettings;

    /**
     * @var string Creation time
     */
    public $CreatedTime;
    /**
     * @param string $InstanceId Instance ID
     * @param string $InstanceRole Node role: MASTER, WORKER, ETCD, MASTER_ETCD, and ALL. Default value: WORKER
     * @param string $FailedReason Reason for instance exception (or initialization)
     * @param string $InstanceState Instance status (running, initializing, or failed)
     * @param string $DrainStatus Whether the instance is drained
Note: this field may return null, indicating that no valid value is obtained.
     * @param InstanceAdvancedSettings $InstanceAdvancedSettings Node settings
Note: this field may return null, indicating that no valid value is obtained.
     * @param string $CreatedTime Creation time
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

        if (array_key_exists("InstanceRole",$param) and $param["InstanceRole"] !== null) {
            $this->InstanceRole = $param["InstanceRole"];
        }

        if (array_key_exists("FailedReason",$param) and $param["FailedReason"] !== null) {
            $this->FailedReason = $param["FailedReason"];
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("DrainStatus",$param) and $param["DrainStatus"] !== null) {
            $this->DrainStatus = $param["DrainStatus"];
        }

        if (array_key_exists("InstanceAdvancedSettings",$param) and $param["InstanceAdvancedSettings"] !== null) {
            $this->InstanceAdvancedSettings = new InstanceAdvancedSettings();
            $this->InstanceAdvancedSettings->deserialize($param["InstanceAdvancedSettings"]);
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
