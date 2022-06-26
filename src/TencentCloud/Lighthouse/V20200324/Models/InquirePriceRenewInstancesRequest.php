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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquirePriceRenewInstances request structure.
 *
 * @method array getInstanceIds() Obtain Instance to be renewed.
 * @method void setInstanceIds(array $InstanceIds) Set Instance to be renewed.
 * @method InstanceChargePrepaid getInstanceChargePrepaid() Obtain Prepaid mode, i.e., monthly subscription. This parameter can specify the purchase period and other attributes such as auto-renewal. It is required for prepaid instances.
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) Set Prepaid mode, i.e., monthly subscription. This parameter can specify the purchase period and other attributes such as auto-renewal. It is required for prepaid instances.
 * @method boolean getRenewDataDisk() Obtain Whether to renew the data disk
 * @method void setRenewDataDisk(boolean $RenewDataDisk) Set Whether to renew the data disk
 * @method boolean getAlignInstanceExpiredTime() Obtain Whether the data disk has the same expiration time as the instance
 * @method void setAlignInstanceExpiredTime(boolean $AlignInstanceExpiredTime) Set Whether the data disk has the same expiration time as the instance
 */
class InquirePriceRenewInstancesRequest extends AbstractModel
{
    /**
     * @var array Instance to be renewed.
     */
    public $InstanceIds;

    /**
     * @var InstanceChargePrepaid Prepaid mode, i.e., monthly subscription. This parameter can specify the purchase period and other attributes such as auto-renewal. It is required for prepaid instances.
     */
    public $InstanceChargePrepaid;

    /**
     * @var boolean Whether to renew the data disk
     */
    public $RenewDataDisk;

    /**
     * @var boolean Whether the data disk has the same expiration time as the instance
     */
    public $AlignInstanceExpiredTime;

    /**
     * @param array $InstanceIds Instance to be renewed.
     * @param InstanceChargePrepaid $InstanceChargePrepaid Prepaid mode, i.e., monthly subscription. This parameter can specify the purchase period and other attributes such as auto-renewal. It is required for prepaid instances.
     * @param boolean $RenewDataDisk Whether to renew the data disk
     * @param boolean $AlignInstanceExpiredTime Whether the data disk has the same expiration time as the instance
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

        if (array_key_exists("RenewDataDisk",$param) and $param["RenewDataDisk"] !== null) {
            $this->RenewDataDisk = $param["RenewDataDisk"];
        }

        if (array_key_exists("AlignInstanceExpiredTime",$param) and $param["AlignInstanceExpiredTime"] !== null) {
            $this->AlignInstanceExpiredTime = $param["AlignInstanceExpiredTime"];
        }
    }
}
