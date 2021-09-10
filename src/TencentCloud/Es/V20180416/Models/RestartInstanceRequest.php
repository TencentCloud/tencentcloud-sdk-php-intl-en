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
 * RestartInstance request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method boolean getForceRestart() Obtain Whether to force restart <li>true: Yes </li><li>false: No </li>Default value: false
 * @method void setForceRestart(boolean $ForceRestart) Set Whether to force restart <li>true: Yes </li><li>false: No </li>Default value: false
 * @method integer getRestartMode() Obtain Restart mode. `0`: rolling restart; `1`: full restart
 * @method void setRestartMode(integer $RestartMode) Set Restart mode. `0`: rolling restart; `1`: full restart
 */
class RestartInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var boolean Whether to force restart <li>true: Yes </li><li>false: No </li>Default value: false
     */
    public $ForceRestart;

    /**
     * @var integer Restart mode. `0`: rolling restart; `1`: full restart
     */
    public $RestartMode;

    /**
     * @param string $InstanceId Instance ID
     * @param boolean $ForceRestart Whether to force restart <li>true: Yes </li><li>false: No </li>Default value: false
     * @param integer $RestartMode Restart mode. `0`: rolling restart; `1`: full restart
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

        if (array_key_exists("ForceRestart",$param) and $param["ForceRestart"] !== null) {
            $this->ForceRestart = $param["ForceRestart"];
        }

        if (array_key_exists("RestartMode",$param) and $param["RestartMode"] !== null) {
            $this->RestartMode = $param["RestartMode"];
        }
    }
}
