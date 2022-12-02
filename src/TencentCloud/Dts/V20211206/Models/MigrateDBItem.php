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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Object in the migration task instance list
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method string getVip() Obtain Instance VIP
 * @method void setVip(string $Vip) Set Instance VIP
 * @method integer getVport() Obtain Instance Vport
 * @method void setVport(integer $Vport) Set Instance Vport
 * @method integer getUsable() Obtain Whether the instance can be migrated. Valid values: `1 (yes); `0` (no).
 * @method void setUsable(integer $Usable) Set Whether the instance can be migrated. Valid values: `1 (yes); `0` (no).
 * @method string getHint() Obtain The cause why the instance cannot be migrated
 * @method void setHint(string $Hint) Set The cause why the instance cannot be migrated
 */
class MigrateDBItem extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var string Instance VIP
     */
    public $Vip;

    /**
     * @var integer Instance Vport
     */
    public $Vport;

    /**
     * @var integer Whether the instance can be migrated. Valid values: `1 (yes); `0` (no).
     */
    public $Usable;

    /**
     * @var string The cause why the instance cannot be migrated
     */
    public $Hint;

    /**
     * @param string $InstanceId Instance ID
     * @param string $InstanceName Instance name
     * @param string $Vip Instance VIP
     * @param integer $Vport Instance Vport
     * @param integer $Usable Whether the instance can be migrated. Valid values: `1 (yes); `0` (no).
     * @param string $Hint The cause why the instance cannot be migrated
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("Usable",$param) and $param["Usable"] !== null) {
            $this->Usable = $param["Usable"];
        }

        if (array_key_exists("Hint",$param) and $param["Hint"] !== null) {
            $this->Hint = $param["Hint"];
        }
    }
}
