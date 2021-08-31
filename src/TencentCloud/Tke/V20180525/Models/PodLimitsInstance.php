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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The model information and the maximum supported number of Pods in the VPC-CNI mode
 *
 * @method string getZone() Obtain The availability zone where the model is located
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setZone(string $Zone) Set The availability zone where the model is located
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method string getInstanceFamily() Obtain The instance family to which the model belongs
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setInstanceFamily(string $InstanceFamily) Set The instance family to which the model belongs
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method string getInstanceType() Obtain Instance type
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setInstanceType(string $InstanceType) Set Instance type
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method PodLimitsByType getPodLimits() Obtain The maximum number of Pods in the VPC-CNI mode supported by the model
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setPodLimits(PodLimitsByType $PodLimits) Set The maximum number of Pods in the VPC-CNI mode supported by the model
Note: this field may return `null`, indicating that no valid value can be obtained.
 */
class PodLimitsInstance extends AbstractModel
{
    /**
     * @var string The availability zone where the model is located
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $Zone;

    /**
     * @var string The instance family to which the model belongs
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $InstanceFamily;

    /**
     * @var string Instance type
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $InstanceType;

    /**
     * @var PodLimitsByType The maximum number of Pods in the VPC-CNI mode supported by the model
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $PodLimits;

    /**
     * @param string $Zone The availability zone where the model is located
Note: this field may return `null`, indicating that no valid value can be obtained.
     * @param string $InstanceFamily The instance family to which the model belongs
Note: this field may return `null`, indicating that no valid value can be obtained.
     * @param string $InstanceType Instance type
Note: this field may return `null`, indicating that no valid value can be obtained.
     * @param PodLimitsByType $PodLimits The maximum number of Pods in the VPC-CNI mode supported by the model
Note: this field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceFamily",$param) and $param["InstanceFamily"] !== null) {
            $this->InstanceFamily = $param["InstanceFamily"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("PodLimits",$param) and $param["PodLimits"] !== null) {
            $this->PodLimits = new PodLimitsByType();
            $this->PodLimits->deserialize($param["PodLimits"]);
        }
    }
}
