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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RestartInstance request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method boolean getForceRestart() Obtain <p>Whether to force restart<li>true: force restart</li><li>false: do not force restart</li>Default value: false</p>
 * @method void setForceRestart(boolean $ForceRestart) Set <p>Whether to force restart<li>true: force restart</li><li>false: do not force restart</li>Default value: false</p>
 * @method integer getRestartMode() Obtain <p>Restart mode: 0 rolling restart; 1 full restart</p>
 * @method void setRestartMode(integer $RestartMode) Set <p>Restart mode: 0 rolling restart; 1 full restart</p>
 * @method boolean getUpgradeKernel() Obtain <p>Select whether to upgrade the kernel patch version upon restart</p>
 * @method void setUpgradeKernel(boolean $UpgradeKernel) Set <p>Select whether to upgrade the kernel patch version upon restart</p>
 */
class RestartInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var boolean <p>Whether to force restart<li>true: force restart</li><li>false: do not force restart</li>Default value: false</p>
     */
    public $ForceRestart;

    /**
     * @var integer <p>Restart mode: 0 rolling restart; 1 full restart</p>
     */
    public $RestartMode;

    /**
     * @var boolean <p>Select whether to upgrade the kernel patch version upon restart</p>
     */
    public $UpgradeKernel;

    /**
     * @param string $InstanceId <p>Instance ID.</p>
     * @param boolean $ForceRestart <p>Whether to force restart<li>true: force restart</li><li>false: do not force restart</li>Default value: false</p>
     * @param integer $RestartMode <p>Restart mode: 0 rolling restart; 1 full restart</p>
     * @param boolean $UpgradeKernel <p>Select whether to upgrade the kernel patch version upon restart</p>
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

        if (array_key_exists("UpgradeKernel",$param) and $param["UpgradeKernel"] !== null) {
            $this->UpgradeKernel = $param["UpgradeKernel"];
        }
    }
}
