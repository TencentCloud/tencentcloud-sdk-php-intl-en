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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StartStopServiceOrMonitor request structure.
 *
 * @method string getInstanceId() Obtain The cluster ID.
 * @method void setInstanceId(string $InstanceId) Set The cluster ID.
 * @method string getOpType() Obtain The operation type. Valid values:
<li>`StartService`: Start services.</li>
<li>`StopService`: Stop services.</li>
<li>`StartMonitor`: Start the monitor.</li>
<li>`StopMonitor`: Stop the monitor.</li>

 * @method void setOpType(string $OpType) Set The operation type. Valid values:
<li>`StartService`: Start services.</li>
<li>`StopService`: Stop services.</li>
<li>`StartMonitor`: Start the monitor.</li>
<li>`StopMonitor`: Stop the monitor.</li>

 * @method OpScope getOpScope() Obtain The operation scope.
 * @method void setOpScope(OpScope $OpScope) Set The operation scope.
 */
class StartStopServiceOrMonitorRequest extends AbstractModel
{
    /**
     * @var string The cluster ID.
     */
    public $InstanceId;

    /**
     * @var string The operation type. Valid values:
<li>`StartService`: Start services.</li>
<li>`StopService`: Stop services.</li>
<li>`StartMonitor`: Start the monitor.</li>
<li>`StopMonitor`: Stop the monitor.</li>

     */
    public $OpType;

    /**
     * @var OpScope The operation scope.
     */
    public $OpScope;

    /**
     * @param string $InstanceId The cluster ID.
     * @param string $OpType The operation type. Valid values:
<li>`StartService`: Start services.</li>
<li>`StopService`: Stop services.</li>
<li>`StartMonitor`: Start the monitor.</li>
<li>`StopMonitor`: Stop the monitor.</li>

     * @param OpScope $OpScope The operation scope.
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
    }
}
