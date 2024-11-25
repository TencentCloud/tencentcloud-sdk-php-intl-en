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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cluster's instance information
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getInstanceRole() Obtain Node role: MASTER, WORKER, ETCD, MASTER_ETCD, and ALL. Default value: WORKER
 * @method void setInstanceRole(string $InstanceRole) Set Node role: MASTER, WORKER, ETCD, MASTER_ETCD, and ALL. Default value: WORKER
 * @method string getFailedReason() Obtain Cause of instance exception (or initialization)
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setFailedReason(string $FailedReason) Set Cause of instance exception (or initialization)
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getInstanceState() Obtain Instance status

- initializing
- running
- failed
 * @method void setInstanceState(string $InstanceState) Set Instance status

- initializing
- running
- failed
 * @method boolean getUnschedulable() Obtain Whether it is unschedulable
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setUnschedulable(boolean $Unschedulable) Set Whether it is unschedulable
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getCreatedTime() Obtain Adding time
 * @method void setCreatedTime(string $CreatedTime) Set Adding time
 * @method string getLanIP() Obtain Node private network IP
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setLanIP(string $LanIP) Set Node private network IP
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getNodePoolId() Obtain Resource pool ID

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setNodePoolId(string $NodePoolId) Set Resource pool ID

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method NativeNodeInfo getNative() Obtain Native node parameters
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setNative(NativeNodeInfo $Native) Set Native node parameters
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method RegularNodeInfo getRegular() Obtain General node parameters
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setRegular(RegularNodeInfo $Regular) Set General node parameters
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method SuperNodeInfo getSuper() Obtain Super node parameters
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setSuper(SuperNodeInfo $Super) Set Super node parameters
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method ExternalNodeInfo getExternal() Obtain Third-party node parameters
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setExternal(ExternalNodeInfo $External) Set Third-party node parameters
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getNodeType() Obtain Node type

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setNodeType(string $NodeType) Set Node type

Note: This field may return "null", indicating that no valid value can be obtained.
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
     * @var string Cause of instance exception (or initialization)
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $FailedReason;

    /**
     * @var string Instance status

- initializing
- running
- failed
     */
    public $InstanceState;

    /**
     * @var boolean Whether it is unschedulable
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Unschedulable;

    /**
     * @var string Adding time
     */
    public $CreatedTime;

    /**
     * @var string Node private network IP
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $LanIP;

    /**
     * @var string Resource pool ID

Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $NodePoolId;

    /**
     * @var NativeNodeInfo Native node parameters
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Native;

    /**
     * @var RegularNodeInfo General node parameters
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Regular;

    /**
     * @var SuperNodeInfo Super node parameters
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Super;

    /**
     * @var ExternalNodeInfo Third-party node parameters
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $External;

    /**
     * @var string Node type

Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $NodeType;

    /**
     * @param string $InstanceId Instance ID
     * @param string $InstanceRole Node role: MASTER, WORKER, ETCD, MASTER_ETCD, and ALL. Default value: WORKER
     * @param string $FailedReason Cause of instance exception (or initialization)
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $InstanceState Instance status

- initializing
- running
- failed
     * @param boolean $Unschedulable Whether it is unschedulable
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $CreatedTime Adding time
     * @param string $LanIP Node private network IP
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $NodePoolId Resource pool ID

Note: This field may return "null", indicating that no valid value can be obtained.
     * @param NativeNodeInfo $Native Native node parameters
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param RegularNodeInfo $Regular General node parameters
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param SuperNodeInfo $Super Super node parameters
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param ExternalNodeInfo $External Third-party node parameters
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $NodeType Node type

Note: This field may return "null", indicating that no valid value can be obtained.
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

        if (array_key_exists("Unschedulable",$param) and $param["Unschedulable"] !== null) {
            $this->Unschedulable = $param["Unschedulable"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("LanIP",$param) and $param["LanIP"] !== null) {
            $this->LanIP = $param["LanIP"];
        }

        if (array_key_exists("NodePoolId",$param) and $param["NodePoolId"] !== null) {
            $this->NodePoolId = $param["NodePoolId"];
        }

        if (array_key_exists("Native",$param) and $param["Native"] !== null) {
            $this->Native = new NativeNodeInfo();
            $this->Native->deserialize($param["Native"]);
        }

        if (array_key_exists("Regular",$param) and $param["Regular"] !== null) {
            $this->Regular = new RegularNodeInfo();
            $this->Regular->deserialize($param["Regular"]);
        }

        if (array_key_exists("Super",$param) and $param["Super"] !== null) {
            $this->Super = new SuperNodeInfo();
            $this->Super->deserialize($param["Super"]);
        }

        if (array_key_exists("External",$param) and $param["External"] !== null) {
            $this->External = new ExternalNodeInfo();
            $this->External->deserialize($param["External"]);
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }
    }
}
