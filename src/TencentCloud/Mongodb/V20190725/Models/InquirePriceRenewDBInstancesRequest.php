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
 * InquirePriceRenewDBInstances request structure.
 *
 * @method array getInstanceIds() Obtain Instance ID in the format of cmgo-p8vnipr5. It is the same as the instance ID displayed in the TencentDB Console. This API supports operations on up to 5 instances at a time.
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID in the format of cmgo-p8vnipr5. It is the same as the instance ID displayed in the TencentDB Console. This API supports operations on up to 5 instances at a time.
 * @method InstanceChargePrepaid getInstanceChargePrepaid() Obtain The parameter setting for the prepaid mode (monthly subscription mode). This parameter can specify the renewal period, whether to set automatic renewal, and other attributes of the monthly subscription instance.
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) Set The parameter setting for the prepaid mode (monthly subscription mode). This parameter can specify the renewal period, whether to set automatic renewal, and other attributes of the monthly subscription instance.
 */
class InquirePriceRenewDBInstancesRequest extends AbstractModel
{
    /**
     * @var array Instance ID in the format of cmgo-p8vnipr5. It is the same as the instance ID displayed in the TencentDB Console. This API supports operations on up to 5 instances at a time.
     */
    public $InstanceIds;

    /**
     * @var InstanceChargePrepaid The parameter setting for the prepaid mode (monthly subscription mode). This parameter can specify the renewal period, whether to set automatic renewal, and other attributes of the monthly subscription instance.
     */
    public $InstanceChargePrepaid;

    /**
     * @param array $InstanceIds Instance ID in the format of cmgo-p8vnipr5. It is the same as the instance ID displayed in the TencentDB Console. This API supports operations on up to 5 instances at a time.
     * @param InstanceChargePrepaid $InstanceChargePrepaid The parameter setting for the prepaid mode (monthly subscription mode). This parameter can specify the renewal period, whether to set automatic renewal, and other attributes of the monthly subscription instance.
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
