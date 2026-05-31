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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRocketMQInstanceSpec request structure.
 *
 * @method string getInstanceId() Obtain <p>Dedicated Instance ID</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Dedicated Instance ID</p>
 * @method string getSpecification() Obtain <p>Instance specification,<br>rocket-vip-basic-1 basic<br>rocket-vip-basic-2 standard type<br>rocket-vip-basic-3 higher-order type I<br>rocket-vip-basic-4 higher-order type II</p>
 * @method void setSpecification(string $Specification) Set <p>Instance specification,<br>rocket-vip-basic-1 basic<br>rocket-vip-basic-2 standard type<br>rocket-vip-basic-3 higher-order type I<br>rocket-vip-basic-4 higher-order type II</p>
 * @method integer getNodeCount() Obtain <p>Node count</p>
 * @method void setNodeCount(integer $NodeCount) Set <p>Node count</p>
 * @method integer getStorageSize() Obtain <p>Storage space in GB</p>
 * @method void setStorageSize(integer $StorageSize) Set <p>Storage space in GB</p>
 * @method array getZoneIds() Obtain <p>Deploy availability zone list</p>
 * @method void setZoneIds(array $ZoneIds) Set <p>Deploy availability zone list</p>
 */
class ModifyRocketMQInstanceSpecRequest extends AbstractModel
{
    /**
     * @var string <p>Dedicated Instance ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Instance specification,<br>rocket-vip-basic-1 basic<br>rocket-vip-basic-2 standard type<br>rocket-vip-basic-3 higher-order type I<br>rocket-vip-basic-4 higher-order type II</p>
     */
    public $Specification;

    /**
     * @var integer <p>Node count</p>
     */
    public $NodeCount;

    /**
     * @var integer <p>Storage space in GB</p>
     */
    public $StorageSize;

    /**
     * @var array <p>Deploy availability zone list</p>
     */
    public $ZoneIds;

    /**
     * @param string $InstanceId <p>Dedicated Instance ID</p>
     * @param string $Specification <p>Instance specification,<br>rocket-vip-basic-1 basic<br>rocket-vip-basic-2 standard type<br>rocket-vip-basic-3 higher-order type I<br>rocket-vip-basic-4 higher-order type II</p>
     * @param integer $NodeCount <p>Node count</p>
     * @param integer $StorageSize <p>Storage space in GB</p>
     * @param array $ZoneIds <p>Deploy availability zone list</p>
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

        if (array_key_exists("Specification",$param) and $param["Specification"] !== null) {
            $this->Specification = $param["Specification"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            $this->StorageSize = $param["StorageSize"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }
    }
}
