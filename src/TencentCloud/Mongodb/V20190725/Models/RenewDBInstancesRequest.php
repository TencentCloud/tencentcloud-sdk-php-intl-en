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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RenewDBInstances request structure.
 *
 * @method array getInstanceIds() Obtain IDs of one or more instances to be operated. The value can be obtained from the `InstanceId` parameter returned by the `DescribeInstances` API. Up to 100 instances can be requested at a time.
 * @method void setInstanceIds(array $InstanceIds) Set IDs of one or more instances to be operated. The value can be obtained from the `InstanceId` parameter returned by the `DescribeInstances` API. Up to 100 instances can be requested at a time.
 * @method InstanceChargePrepaid getInstanceChargePrepaid() Obtain The parameter setting for the prepaid mode (monthly subscription mode). This parameter can specify the renewal period, whether to set automatic renewal, and other attributes of the monthly subscription instance. This parameter is mandatory in monthly subscription.
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) Set The parameter setting for the prepaid mode (monthly subscription mode). This parameter can specify the renewal period, whether to set automatic renewal, and other attributes of the monthly subscription instance. This parameter is mandatory in monthly subscription.
 */
class RenewDBInstancesRequest extends AbstractModel
{
    /**
     * @var array IDs of one or more instances to be operated. The value can be obtained from the `InstanceId` parameter returned by the `DescribeInstances` API. Up to 100 instances can be requested at a time.
     */
    public $InstanceIds;

    /**
     * @var InstanceChargePrepaid The parameter setting for the prepaid mode (monthly subscription mode). This parameter can specify the renewal period, whether to set automatic renewal, and other attributes of the monthly subscription instance. This parameter is mandatory in monthly subscription.
     */
    public $InstanceChargePrepaid;

    /**
     * @param array $InstanceIds IDs of one or more instances to be operated. The value can be obtained from the `InstanceId` parameter returned by the `DescribeInstances` API. Up to 100 instances can be requested at a time.
     * @param InstanceChargePrepaid $InstanceChargePrepaid The parameter setting for the prepaid mode (monthly subscription mode). This parameter can specify the renewal period, whether to set automatic renewal, and other attributes of the monthly subscription instance. This parameter is mandatory in monthly subscription.
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }
    }
}
