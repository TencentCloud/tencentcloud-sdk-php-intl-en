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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StartCpuExpand request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getType() Obtain Scale-out mode. Valid values: auto and
manual.
 * @method void setType(string $Type) Set Scale-out mode. Valid values: auto and
manual.
 * @method integer getExpandCpu() Obtain Number of CPU cores to increase during manual scale-out. This parameter is required when Type is set to manual.
 * @method void setExpandCpu(integer $ExpandCpu) Set Number of CPU cores to increase during manual scale-out. This parameter is required when Type is set to manual.
 * @method AutoStrategy getAutoStrategy() Obtain Automatic scale-out policy. This parameter is required when Type is set to auto.
 * @method void setAutoStrategy(AutoStrategy $AutoStrategy) Set Automatic scale-out policy. This parameter is required when Type is set to auto.
 */
class StartCpuExpandRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Scale-out mode. Valid values: auto and
manual.
     */
    public $Type;

    /**
     * @var integer Number of CPU cores to increase during manual scale-out. This parameter is required when Type is set to manual.
     */
    public $ExpandCpu;

    /**
     * @var AutoStrategy Automatic scale-out policy. This parameter is required when Type is set to auto.
     */
    public $AutoStrategy;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $Type Scale-out mode. Valid values: auto and
manual.
     * @param integer $ExpandCpu Number of CPU cores to increase during manual scale-out. This parameter is required when Type is set to manual.
     * @param AutoStrategy $AutoStrategy Automatic scale-out policy. This parameter is required when Type is set to auto.
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ExpandCpu",$param) and $param["ExpandCpu"] !== null) {
            $this->ExpandCpu = $param["ExpandCpu"];
        }

        if (array_key_exists("AutoStrategy",$param) and $param["AutoStrategy"] !== null) {
            $this->AutoStrategy = new AutoStrategy();
            $this->AutoStrategy->deserialize($param["AutoStrategy"]);
        }
    }
}
