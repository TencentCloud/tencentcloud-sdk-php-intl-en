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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StartStopServiceOrMonitor request structure.
 *
 * @method string getInstanceId() Obtain Cluster ID.
 * @method void setInstanceId(string $InstanceId) Set Cluster ID.
 * @method string getOpType() Obtain Operation type. Valid values:
<li>StartService: Start the service.</li>
<li>StopService: Stop the service.</li>
<li>StartMonitor: Exit maintenance.</li>
<li>StopMonitor: Enter maintenance.</li>
<li>RestartService: Restart the service. If RestartService is selected as the operation type, StrategyConfig (operation policy) is required.</li>
 * @method void setOpType(string $OpType) Set Operation type. Valid values:
<li>StartService: Start the service.</li>
<li>StopService: Stop the service.</li>
<li>StartMonitor: Exit maintenance.</li>
<li>StopMonitor: Enter maintenance.</li>
<li>RestartService: Restart the service. If RestartService is selected as the operation type, StrategyConfig (operation policy) is required.</li>
 * @method OpScope getOpScope() Obtain Operation scope.
 * @method void setOpScope(OpScope $OpScope) Set Operation scope.
 * @method StrategyConfig getStrategyConfig() Obtain Operation policy.
 * @method void setStrategyConfig(StrategyConfig $StrategyConfig) Set Operation policy.
 * @method StopParams getStopParams() Obtain Parameters used for suspending services.
 * @method void setStopParams(StopParams $StopParams) Set Parameters used for suspending services.
 * @method boolean getKeepMonitorButNotRecoverProcess() Obtain This parameter is available only when OpType is <li>StopMonitor</li>. true indicates that the system enters the maintenance mode but still monitors processes without starting them.
 * @method void setKeepMonitorButNotRecoverProcess(boolean $KeepMonitorButNotRecoverProcess) Set This parameter is available only when OpType is <li>StopMonitor</li>. true indicates that the system enters the maintenance mode but still monitors processes without starting them.
 */
class StartStopServiceOrMonitorRequest extends AbstractModel
{
    /**
     * @var string Cluster ID.
     */
    public $InstanceId;

    /**
     * @var string Operation type. Valid values:
<li>StartService: Start the service.</li>
<li>StopService: Stop the service.</li>
<li>StartMonitor: Exit maintenance.</li>
<li>StopMonitor: Enter maintenance.</li>
<li>RestartService: Restart the service. If RestartService is selected as the operation type, StrategyConfig (operation policy) is required.</li>
     */
    public $OpType;

    /**
     * @var OpScope Operation scope.
     */
    public $OpScope;

    /**
     * @var StrategyConfig Operation policy.
     */
    public $StrategyConfig;

    /**
     * @var StopParams Parameters used for suspending services.
     */
    public $StopParams;

    /**
     * @var boolean This parameter is available only when OpType is <li>StopMonitor</li>. true indicates that the system enters the maintenance mode but still monitors processes without starting them.
     */
    public $KeepMonitorButNotRecoverProcess;

    /**
     * @param string $InstanceId Cluster ID.
     * @param string $OpType Operation type. Valid values:
<li>StartService: Start the service.</li>
<li>StopService: Stop the service.</li>
<li>StartMonitor: Exit maintenance.</li>
<li>StopMonitor: Enter maintenance.</li>
<li>RestartService: Restart the service. If RestartService is selected as the operation type, StrategyConfig (operation policy) is required.</li>
     * @param OpScope $OpScope Operation scope.
     * @param StrategyConfig $StrategyConfig Operation policy.
     * @param StopParams $StopParams Parameters used for suspending services.
     * @param boolean $KeepMonitorButNotRecoverProcess This parameter is available only when OpType is <li>StopMonitor</li>. true indicates that the system enters the maintenance mode but still monitors processes without starting them.
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

        if (array_key_exists("OpType",$param) and $param["OpType"] !== null) {
            $this->OpType = $param["OpType"];
        }

        if (array_key_exists("OpScope",$param) and $param["OpScope"] !== null) {
            $this->OpScope = new OpScope();
            $this->OpScope->deserialize($param["OpScope"]);
        }

        if (array_key_exists("StrategyConfig",$param) and $param["StrategyConfig"] !== null) {
            $this->StrategyConfig = new StrategyConfig();
            $this->StrategyConfig->deserialize($param["StrategyConfig"]);
        }

        if (array_key_exists("StopParams",$param) and $param["StopParams"] !== null) {
            $this->StopParams = new StopParams();
            $this->StopParams->deserialize($param["StopParams"]);
        }

        if (array_key_exists("KeepMonitorButNotRecoverProcess",$param) and $param["KeepMonitorButNotRecoverProcess"] !== null) {
            $this->KeepMonitorButNotRecoverProcess = $param["KeepMonitorButNotRecoverProcess"];
        }
    }
}
