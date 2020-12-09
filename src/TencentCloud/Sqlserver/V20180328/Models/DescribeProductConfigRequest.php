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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProductConfig request structure.
 *
 * @method string getZone() Obtain AZ ID in the format of ap-guangzhou-1
 * @method void setZone(string $Zone) Set AZ ID in the format of ap-guangzhou-1
 * @method string getInstanceType() Obtain The type of instances to be purchased. Valid values: HA (High-Availability Edition, including dual-server high availability and AlwaysOn cluster), RO (read-only replica), SI (Basic Edition)
 * @method void setInstanceType(string $InstanceType) Set The type of instances to be purchased. Valid values: HA (High-Availability Edition, including dual-server high availability and AlwaysOn cluster), RO (read-only replica), SI (Basic Edition)
 */
class DescribeProductConfigRequest extends AbstractModel
{
    /**
     * @var string AZ ID in the format of ap-guangzhou-1
     */
    public $Zone;

    /**
     * @var string The type of instances to be purchased. Valid values: HA (High-Availability Edition, including dual-server high availability and AlwaysOn cluster), RO (read-only replica), SI (Basic Edition)
     */
    public $InstanceType;

    /**
     * @param string $Zone AZ ID in the format of ap-guangzhou-1
     * @param string $InstanceType The type of instances to be purchased. Valid values: HA (High-Availability Edition, including dual-server high availability and AlwaysOn cluster), RO (read-only replica), SI (Basic Edition)
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

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }
    }
}
