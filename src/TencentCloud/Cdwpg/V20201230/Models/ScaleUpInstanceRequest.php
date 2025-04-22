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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScaleUpInstance request structure.
 *
 * @method string getInstanceId() Obtain InstanceId.
 * @method void setInstanceId(string $InstanceId) Set InstanceId.
 * @method string getCase() Obtain Modifies the resource type.
 * @method void setCase(string $Case) Set Modifies the resource type.
 * @method CNResourceSpec getModifySpec() Obtain Modified parameters.
 * @method void setModifySpec(CNResourceSpec $ModifySpec) Set Modified parameters.
 * @method string getInstanceName() Obtain Instance name.
 * @method void setInstanceName(string $InstanceName) Set Instance name.
 */
class ScaleUpInstanceRequest extends AbstractModel
{
    /**
     * @var string InstanceId.
     */
    public $InstanceId;

    /**
     * @var string Modifies the resource type.
     */
    public $Case;

    /**
     * @var CNResourceSpec Modified parameters.
     */
    public $ModifySpec;

    /**
     * @var string Instance name.
     */
    public $InstanceName;

    /**
     * @param string $InstanceId InstanceId.
     * @param string $Case Modifies the resource type.
     * @param CNResourceSpec $ModifySpec Modified parameters.
     * @param string $InstanceName Instance name.
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

        if (array_key_exists("Case",$param) and $param["Case"] !== null) {
            $this->Case = $param["Case"];
        }

        if (array_key_exists("ModifySpec",$param) and $param["ModifySpec"] !== null) {
            $this->ModifySpec = new CNResourceSpec();
            $this->ModifySpec->deserialize($param["ModifySpec"]);
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }
    }
}
