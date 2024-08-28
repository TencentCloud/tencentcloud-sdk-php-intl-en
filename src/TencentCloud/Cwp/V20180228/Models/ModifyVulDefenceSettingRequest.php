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
 * ModifyVulDefenceSetting request structure.
 *
 * @method integer getEnable() Obtain Defense switch: 0 - off; 1 - on
 * @method void setEnable(integer $Enable) Set Defense switch: 0 - off; 1 - on
 * @method integer getScope() Obtain 1 - All Ultimate edition hosts; 0 - list of hosts with Quuids
 * @method void setScope(integer $Scope) Set 1 - All Ultimate edition hosts; 0 - list of hosts with Quuids
 * @method array getQuuids() Obtain List of Ultimate Edition hosts within the scope
 * @method void setQuuids(array $Quuids) Set List of Ultimate Edition hosts within the scope
 * @method array getExcludeInstanceIds() Obtain Exclude the list of Ultimate Edition hosts within the scope
 * @method void setExcludeInstanceIds(array $ExcludeInstanceIds) Set Exclude the list of Ultimate Edition hosts within the scope
 * @method integer getAutoInclude() Obtain New assets automatically include: 0 - Do not include, 1 - include.
 * @method void setAutoInclude(integer $AutoInclude) Set New assets automatically include: 0 - Do not include, 1 - include.
 * @method array getInstanceIds() Obtain List of Ultimate Edition hosts within the scope
 * @method void setInstanceIds(array $InstanceIds) Set List of Ultimate Edition hosts within the scope
 */
class ModifyVulDefenceSettingRequest extends AbstractModel
{
    /**
     * @var integer Defense switch: 0 - off; 1 - on
     */
    public $Enable;

    /**
     * @var integer 1 - All Ultimate edition hosts; 0 - list of hosts with Quuids
     */
    public $Scope;

    /**
     * @var array List of Ultimate Edition hosts within the scope
     */
    public $Quuids;

    /**
     * @var array Exclude the list of Ultimate Edition hosts within the scope
     */
    public $ExcludeInstanceIds;

    /**
     * @var integer New assets automatically include: 0 - Do not include, 1 - include.
     */
    public $AutoInclude;

    /**
     * @var array List of Ultimate Edition hosts within the scope
     */
    public $InstanceIds;

    /**
     * @param integer $Enable Defense switch: 0 - off; 1 - on
     * @param integer $Scope 1 - All Ultimate edition hosts; 0 - list of hosts with Quuids
     * @param array $Quuids List of Ultimate Edition hosts within the scope
     * @param array $ExcludeInstanceIds Exclude the list of Ultimate Edition hosts within the scope
     * @param integer $AutoInclude New assets automatically include: 0 - Do not include, 1 - include.
     * @param array $InstanceIds List of Ultimate Edition hosts within the scope
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("Quuids",$param) and $param["Quuids"] !== null) {
            $this->Quuids = $param["Quuids"];
        }

        if (array_key_exists("ExcludeInstanceIds",$param) and $param["ExcludeInstanceIds"] !== null) {
            $this->ExcludeInstanceIds = $param["ExcludeInstanceIds"];
        }

        if (array_key_exists("AutoInclude",$param) and $param["AutoInclude"] !== null) {
            $this->AutoInclude = $param["AutoInclude"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }
    }
}
