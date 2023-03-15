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
 * @method array getInstanceIds() Obtain IDs of the instances to be renewed. Each request can contain up to 50 instances at a time. You can get an instance ID from the `InstanceId` returned by the [DescribeInstances](https://intl.cloud.tencent.com/document/api/1207/47573?from_cn_redirect=1) API.
 * @method void setInstanceIds(array $InstanceIds) Set IDs of the instances to be renewed. Each request can contain up to 50 instances at a time. You can get an instance ID from the `InstanceId` returned by the [DescribeInstances](https://intl.cloud.tencent.com/document/api/1207/47573?from_cn_redirect=1) API.
 * @method InstanceChargePrepaid getInstanceChargePrepaid() Obtain Parameter setting for prepaid mode. This parameter can specify the renewal period, whether to enable auto-renewal, and other attributes of the monthly subscribed instances.
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) Set Parameter setting for prepaid mode. This parameter can specify the renewal period, whether to enable auto-renewal, and other attributes of the monthly subscribed instances.
 * @method boolean getRenewDataDisk() Obtain Whether to renew the data disk. Default: `false`.
 * @method void setRenewDataDisk(boolean $RenewDataDisk) Set Whether to renew the data disk. Default: `false`.
 * @method boolean getAlignInstanceExpiredTime() Obtain Whether to align the data disk expiration with the instance expiration time. Default: `false`.
 * @method void setAlignInstanceExpiredTime(boolean $AlignInstanceExpiredTime) Set Whether to align the data disk expiration with the instance expiration time. Default: `false`.
 */
class InquirePriceRenewInstancesRequest extends AbstractModel
{
    /**
     * @var array IDs of the instances to be renewed. Each request can contain up to 50 instances at a time. You can get an instance ID from the `InstanceId` returned by the [DescribeInstances](https://intl.cloud.tencent.com/document/api/1207/47573?from_cn_redirect=1) API.
     */
    public $InstanceIds;

    /**
     * @var InstanceChargePrepaid Parameter setting for prepaid mode. This parameter can specify the renewal period, whether to enable auto-renewal, and other attributes of the monthly subscribed instances.
     */
    public $InstanceChargePrepaid;

    /**
     * @var boolean Whether to renew the data disk. Default: `false`.
     */
    public $RenewDataDisk;

    /**
     * @var boolean Whether to align the data disk expiration with the instance expiration time. Default: `false`.
     */
    public $AlignInstanceExpiredTime;

    /**
     * @param array $InstanceIds IDs of the instances to be renewed. Each request can contain up to 50 instances at a time. You can get an instance ID from the `InstanceId` returned by the [DescribeInstances](https://intl.cloud.tencent.com/document/api/1207/47573?from_cn_redirect=1) API.
     * @param InstanceChargePrepaid $InstanceChargePrepaid Parameter setting for prepaid mode. This parameter can specify the renewal period, whether to enable auto-renewal, and other attributes of the monthly subscribed instances.
     * @param boolean $RenewDataDisk Whether to renew the data disk. Default: `false`.
     * @param boolean $AlignInstanceExpiredTime Whether to align the data disk expiration with the instance expiration time. Default: `false`.
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
