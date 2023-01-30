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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyVirusAutoIsolateSetting request structure.
 *
 * @method boolean getAutoIsolateSwitch() Obtain Automatic isolation switch. Valid values: `true` (on); `false` (off).
 * @method void setAutoIsolateSwitch(boolean $AutoIsolateSwitch) Set Automatic isolation switch. Valid values: `true` (on); `false` (off).
 * @method boolean getIsKillProgress() Obtain Whether to interrupt the process associated with the isolated file. Valid values: `true` (yes); `false` (no).
 * @method void setIsKillProgress(boolean $IsKillProgress) Set Whether to interrupt the process associated with the isolated file. Valid values: `true` (yes); `false` (no).
 */
class ModifyVirusAutoIsolateSettingRequest extends AbstractModel
{
    /**
     * @var boolean Automatic isolation switch. Valid values: `true` (on); `false` (off).
     */
    public $AutoIsolateSwitch;

    /**
     * @var boolean Whether to interrupt the process associated with the isolated file. Valid values: `true` (yes); `false` (no).
     */
    public $IsKillProgress;

    /**
     * @param boolean $AutoIsolateSwitch Automatic isolation switch. Valid values: `true` (on); `false` (off).
     * @param boolean $IsKillProgress Whether to interrupt the process associated with the isolated file. Valid values: `true` (yes); `false` (no).
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
        if (array_key_exists("AutoIsolateSwitch",$param) and $param["AutoIsolateSwitch"] !== null) {
            $this->AutoIsolateSwitch = $param["AutoIsolateSwitch"];
        }

        if (array_key_exists("IsKillProgress",$param) and $param["IsKillProgress"] !== null) {
            $this->IsKillProgress = $param["IsKillProgress"];
        }
    }
}
