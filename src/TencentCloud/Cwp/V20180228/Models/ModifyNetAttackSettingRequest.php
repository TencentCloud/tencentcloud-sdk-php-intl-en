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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyNetAttackSetting request structure.
 *
 * @method integer getNetAttackEnable() Obtain <p>0: Disable network attack detection; 1: Enable network attack detection</p>
 * @method void setNetAttackEnable(integer $NetAttackEnable) Set <p>0: Disable network attack detection; 1: Enable network attack detection</p>
 * @method integer getNetAttackAlarmStatus() Obtain <p>0: Newly added alert events are pending by default; 1: newly added alert events are processed by default; 3: newly added alert events are ignored by default</p>
 * @method void setNetAttackAlarmStatus(integer $NetAttackAlarmStatus) Set <p>0: Newly added alert events are pending by default; 1: newly added alert events are processed by default; 3: newly added alert events are ignored by default</p>
 * @method integer getScope() Obtain <p>1: All Ultimate Edition hosts; 0: Hosts in the Quuids list</p>
 * @method void setScope(integer $Scope) Set <p>1: All Ultimate Edition hosts; 0: Hosts in the Quuids list</p>
 * @method array getInstanceIds() Obtain <p>Selected hosts</p>
 * @method void setInstanceIds(array $InstanceIds) Set <p>Selected hosts</p>
 * @method array getExcludeInstanceIds() Obtain <p>Custom excluded hosts</p>
 * @method void setExcludeInstanceIds(array $ExcludeInstanceIds) Set <p>Custom excluded hosts</p>
 * @method integer getAutoInclude() Obtain <p>Automatically include newly added assets. 0: No; 1: Yes</p>
 * @method void setAutoInclude(integer $AutoInclude) Set <p>Automatically include newly added assets. 0: No; 1: Yes</p>
 * @method integer getProductType() Obtain <p>Product type. 0: CWP; 1: CSC</p>
 * @method void setProductType(integer $ProductType) Set <p>Product type. 0: CWP; 1: CSC</p>
 */
class ModifyNetAttackSettingRequest extends AbstractModel
{
    /**
     * @var integer <p>0: Disable network attack detection; 1: Enable network attack detection</p>
     */
    public $NetAttackEnable;

    /**
     * @var integer <p>0: Newly added alert events are pending by default; 1: newly added alert events are processed by default; 3: newly added alert events are ignored by default</p>
     */
    public $NetAttackAlarmStatus;

    /**
     * @var integer <p>1: All Ultimate Edition hosts; 0: Hosts in the Quuids list</p>
     */
    public $Scope;

    /**
     * @var array <p>Selected hosts</p>
     */
    public $InstanceIds;

    /**
     * @var array <p>Custom excluded hosts</p>
     */
    public $ExcludeInstanceIds;

    /**
     * @var integer <p>Automatically include newly added assets. 0: No; 1: Yes</p>
     */
    public $AutoInclude;

    /**
     * @var integer <p>Product type. 0: CWP; 1: CSC</p>
     */
    public $ProductType;

    /**
     * @param integer $NetAttackEnable <p>0: Disable network attack detection; 1: Enable network attack detection</p>
     * @param integer $NetAttackAlarmStatus <p>0: Newly added alert events are pending by default; 1: newly added alert events are processed by default; 3: newly added alert events are ignored by default</p>
     * @param integer $Scope <p>1: All Ultimate Edition hosts; 0: Hosts in the Quuids list</p>
     * @param array $InstanceIds <p>Selected hosts</p>
     * @param array $ExcludeInstanceIds <p>Custom excluded hosts</p>
     * @param integer $AutoInclude <p>Automatically include newly added assets. 0: No; 1: Yes</p>
     * @param integer $ProductType <p>Product type. 0: CWP; 1: CSC</p>
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

        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }
    }
}
