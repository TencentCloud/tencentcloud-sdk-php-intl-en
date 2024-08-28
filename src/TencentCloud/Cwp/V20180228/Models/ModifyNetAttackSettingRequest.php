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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyNetAttackSetting request structure.
 *
 * @method integer getNetAttackEnable() Obtain 0 - Disable Network Attack Detection; 1 - Enable Network Attack Detection.
 * @method void setNetAttackEnable(integer $NetAttackEnable) Set 0 - Disable Network Attack Detection; 1 - Enable Network Attack Detection.
 * @method integer getNetAttackAlarmStatus() Obtain 0: New warning events pending processing by default, 1: New warning events processed by default, 3: New warning events ignored by default.
 * @method void setNetAttackAlarmStatus(integer $NetAttackAlarmStatus) Set 0: New warning events pending processing by default, 1: New warning events processed by default, 3: New warning events ignored by default.
 * @method integer getScope() Obtain 1 - All Ultimate edition hosts; 0 - list of hosts with Quuids
 * @method void setScope(integer $Scope) Set 1 - All Ultimate edition hosts; 0 - list of hosts with Quuids
 * @method array getInstanceIds() Obtain Specified hosts
 * @method void setInstanceIds(array $InstanceIds) Set Specified hosts
 * @method array getExcludeInstanceIds() Obtain Manually Excluded Hosts
 * @method void setExcludeInstanceIds(array $ExcludeInstanceIds) Set Manually Excluded Hosts
 * @method integer getAutoInclude() Obtain New assets automatically include: 0 - Do not include, 1 - include.
 * @method void setAutoInclude(integer $AutoInclude) Set New assets automatically include: 0 - Do not include, 1 - include.
 */
class ModifyNetAttackSettingRequest extends AbstractModel
{
    /**
     * @var integer 0 - Disable Network Attack Detection; 1 - Enable Network Attack Detection.
     */
    public $NetAttackEnable;

    /**
     * @var integer 0: New warning events pending processing by default, 1: New warning events processed by default, 3: New warning events ignored by default.
     */
    public $NetAttackAlarmStatus;

    /**
     * @var integer 1 - All Ultimate edition hosts; 0 - list of hosts with Quuids
     */
    public $Scope;

    /**
     * @var array Specified hosts
     */
    public $InstanceIds;

    /**
     * @var array Manually Excluded Hosts
     */
    public $ExcludeInstanceIds;

    /**
     * @var integer New assets automatically include: 0 - Do not include, 1 - include.
     */
    public $AutoInclude;

    /**
     * @param integer $NetAttackEnable 0 - Disable Network Attack Detection; 1 - Enable Network Attack Detection.
     * @param integer $NetAttackAlarmStatus 0: New warning events pending processing by default, 1: New warning events processed by default, 3: New warning events ignored by default.
     * @param integer $Scope 1 - All Ultimate edition hosts; 0 - list of hosts with Quuids
     * @param array $InstanceIds Specified hosts
     * @param array $ExcludeInstanceIds Manually Excluded Hosts
     * @param integer $AutoInclude New assets automatically include: 0 - Do not include, 1 - include.
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
        if (array_key_exists("NetAttackEnable",$param) and $param["NetAttackEnable"] !== null) {
            $this->NetAttackEnable = $param["NetAttackEnable"];
        }

        if (array_key_exists("NetAttackAlarmStatus",$param) and $param["NetAttackAlarmStatus"] !== null) {
            $this->NetAttackAlarmStatus = $param["NetAttackAlarmStatus"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("ExcludeInstanceIds",$param) and $param["ExcludeInstanceIds"] !== null) {
            $this->ExcludeInstanceIds = $param["ExcludeInstanceIds"];
        }

        if (array_key_exists("AutoInclude",$param) and $param["AutoInclude"] !== null) {
            $this->AutoInclude = $param["AutoInclude"];
        }
    }
}
