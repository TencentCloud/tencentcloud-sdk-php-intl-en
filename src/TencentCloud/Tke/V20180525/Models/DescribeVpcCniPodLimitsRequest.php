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
 * DescribeVpcCniPodLimits request structure.
 *
 * @method string getZone() Obtain The availability zone of the model to query, for example, `ap-guangzhou-3`. This field is left empty by default, that is, do not filter by the availability zone.
 * @method void setZone(string $Zone) Set The availability zone of the model to query, for example, `ap-guangzhou-3`. This field is left empty by default, that is, do not filter by the availability zone.
 * @method string getInstanceFamily() Obtain The instance family to query, for example, `S5`. This field is left empty by default, that is, do not filter by the instance family.
 * @method void setInstanceFamily(string $InstanceFamily) Set The instance family to query, for example, `S5`. This field is left empty by default, that is, do not filter by the instance family.
 * @method string getInstanceType() Obtain The instance model to query, for example, `S5.LARGE8`. This field is empty by default, that is, do not filter by instance type.
 * @method void setInstanceType(string $InstanceType) Set The instance model to query, for example, `S5.LARGE8`. This field is empty by default, that is, do not filter by instance type.
 */
class DescribeVpcCniPodLimitsRequest extends AbstractModel
{
    /**
     * @var string The availability zone of the model to query, for example, `ap-guangzhou-3`. This field is left empty by default, that is, do not filter by the availability zone.
     */
    public $Zone;

    /**
     * @var string The instance family to query, for example, `S5`. This field is left empty by default, that is, do not filter by the instance family.
     */
    public $InstanceFamily;

    /**
     * @var string The instance model to query, for example, `S5.LARGE8`. This field is empty by default, that is, do not filter by instance type.
     */
    public $InstanceType;

    /**
     * @param string $Zone The availability zone of the model to query, for example, `ap-guangzhou-3`. This field is left empty by default, that is, do not filter by the availability zone.
     * @param string $InstanceFamily The instance family to query, for example, `S5`. This field is left empty by default, that is, do not filter by the instance family.
     * @param string $InstanceType The instance model to query, for example, `S5.LARGE8`. This field is empty by default, that is, do not filter by instance type.
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
    }
}
