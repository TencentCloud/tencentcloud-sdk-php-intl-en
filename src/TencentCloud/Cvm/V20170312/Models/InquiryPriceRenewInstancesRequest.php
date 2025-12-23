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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquiryPriceRenewInstances request structure.
 *
 * @method array getInstanceIds() Obtain One or more instance IDs to be operated. You can obtain the instance ID through the `InstanceId` in the return value from the API [DescribeInstances](https://www.tencentcloud.com/zh/document/api/213/33258). The maximum number of instances per request is 100.
 * @method void setInstanceIds(array $InstanceIds) Set One or more instance IDs to be operated. You can obtain the instance ID through the `InstanceId` in the return value from the API [DescribeInstances](https://www.tencentcloud.com/zh/document/api/213/33258). The maximum number of instances per request is 100.
 * @method InstanceChargePrepaid getInstanceChargePrepaid() Obtain Prepaid mode, that is, monthly subscription-related parameter settings. You can specify attributes of a monthly subscription instance, such as purchase duration and whether to set auto-renewal, through this parameter.
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) Set Prepaid mode, that is, monthly subscription-related parameter settings. You can specify attributes of a monthly subscription instance, such as purchase duration and whether to set auto-renewal, through this parameter.
 * @method boolean getDryRun() Obtain Trial run, for testing purposes, does not execute specific logic. valid values: <li>`true`: skip execution logic</li> <li>`false`: execute logic</li>  default value: `false`.
 * @method void setDryRun(boolean $DryRun) Set Trial run, for testing purposes, does not execute specific logic. valid values: <li>`true`: skip execution logic</li> <li>`false`: execute logic</li>  default value: `false`.
 * @method boolean getRenewPortableDataDisk() Obtain Whether to renew the elastic data disk. valid values:<br><li>true: indicates renewing the annual and monthly subscription instance and its mounted elastic data disk simultaneously</li><li>false: indicates renewing the annual and monthly subscription instance while no longer renewing its mounted elastic data disk</li><br>default value: true.
 * @method void setRenewPortableDataDisk(boolean $RenewPortableDataDisk) Set Whether to renew the elastic data disk. valid values:<br><li>true: indicates renewing the annual and monthly subscription instance and its mounted elastic data disk simultaneously</li><li>false: indicates renewing the annual and monthly subscription instance while no longer renewing its mounted elastic data disk</li><br>default value: true.
 */
class InquiryPriceRenewInstancesRequest extends AbstractModel
{
    /**
     * @var array One or more instance IDs to be operated. You can obtain the instance ID through the `InstanceId` in the return value from the API [DescribeInstances](https://www.tencentcloud.com/zh/document/api/213/33258). The maximum number of instances per request is 100.
     */
    public $InstanceIds;

    /**
     * @var InstanceChargePrepaid Prepaid mode, that is, monthly subscription-related parameter settings. You can specify attributes of a monthly subscription instance, such as purchase duration and whether to set auto-renewal, through this parameter.
     */
    public $InstanceChargePrepaid;

    /**
     * @var boolean Trial run, for testing purposes, does not execute specific logic. valid values: <li>`true`: skip execution logic</li> <li>`false`: execute logic</li>  default value: `false`.
     */
    public $DryRun;

    /**
     * @var boolean Whether to renew the elastic data disk. valid values:<br><li>true: indicates renewing the annual and monthly subscription instance and its mounted elastic data disk simultaneously</li><li>false: indicates renewing the annual and monthly subscription instance while no longer renewing its mounted elastic data disk</li><br>default value: true.
     */
    public $RenewPortableDataDisk;

    /**
     * @param array $InstanceIds One or more instance IDs to be operated. You can obtain the instance ID through the `InstanceId` in the return value from the API [DescribeInstances](https://www.tencentcloud.com/zh/document/api/213/33258). The maximum number of instances per request is 100.
     * @param InstanceChargePrepaid $InstanceChargePrepaid Prepaid mode, that is, monthly subscription-related parameter settings. You can specify attributes of a monthly subscription instance, such as purchase duration and whether to set auto-renewal, through this parameter.
     * @param boolean $DryRun Trial run, for testing purposes, does not execute specific logic. valid values: <li>`true`: skip execution logic</li> <li>`false`: execute logic</li>  default value: `false`.
     * @param boolean $RenewPortableDataDisk Whether to renew the elastic data disk. valid values:<br><li>true: indicates renewing the annual and monthly subscription instance and its mounted elastic data disk simultaneously</li><li>false: indicates renewing the annual and monthly subscription instance while no longer renewing its mounted elastic data disk</li><br>default value: true.
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

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("RenewPortableDataDisk",$param) and $param["RenewPortableDataDisk"] !== null) {
            $this->RenewPortableDataDisk = $param["RenewPortableDataDisk"];
        }
    }
}
