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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RestartNodes request structure.
 *
 * @method string getInstanceId() Obtain Cluster instance ID
 * @method void setInstanceId(string $InstanceId) Set Cluster instance ID
 * @method array getNodeNames() Obtain Node name list
 * @method void setNodeNames(array $NodeNames) Set Node name list
 * @method boolean getForceRestart() Obtain Whether to force restart
 * @method void setForceRestart(boolean $ForceRestart) Set Whether to force restart
 * @method string getRestartMode() Obtain The restart mode. Valid values: `in-place` (default), `blue-green`.
 * @method void setRestartMode(string $RestartMode) Set The restart mode. Valid values: `in-place` (default), `blue-green`.
 * @method boolean getIsOffline() Obtain The node status, applicable in the blue/green mode. The blue/green restart is risky if the node is offline.
 * @method void setIsOffline(boolean $IsOffline) Set The node status, applicable in the blue/green mode. The blue/green restart is risky if the node is offline.
 */
class RestartNodesRequest extends AbstractModel
{
    /**
     * @var string Cluster instance ID
     */
    public $InstanceId;

    /**
     * @var array Node name list
     */
    public $NodeNames;

    /**
     * @var boolean Whether to force restart
     */
    public $ForceRestart;

    /**
     * @var string The restart mode. Valid values: `in-place` (default), `blue-green`.
     */
    public $RestartMode;

    /**
     * @var boolean The node status, applicable in the blue/green mode. The blue/green restart is risky if the node is offline.
     */
    public $IsOffline;

    /**
     * @param string $InstanceId Cluster instance ID
     * @param array $NodeNames Node name list
     * @param boolean $ForceRestart Whether to force restart
     * @param string $RestartMode The restart mode. Valid values: `in-place` (default), `blue-green`.
     * @param boolean $IsOffline The node status, applicable in the blue/green mode. The blue/green restart is risky if the node is offline.
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

        if (array_key_exists("NodeNames",$param) and $param["NodeNames"] !== null) {
            $this->NodeNames = $param["NodeNames"];
        }

        if (array_key_exists("ForceRestart",$param) and $param["ForceRestart"] !== null) {
            $this->ForceRestart = $param["ForceRestart"];
        }

        if (array_key_exists("RestartMode",$param) and $param["RestartMode"] !== null) {
            $this->RestartMode = $param["RestartMode"];
        }

        if (array_key_exists("IsOffline",$param) and $param["IsOffline"] !== null) {
            $this->IsOffline = $param["IsOffline"];
        }
    }
}
