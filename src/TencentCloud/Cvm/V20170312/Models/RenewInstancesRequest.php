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
 * RenewInstances request structure.
 *
 * @method array getInstanceIds() Obtain One or more instance IDs to be operated. You can obtain the instance ID through the `InstanceId` in the return value from the API [DescribeInstances](https://www.tencentcloud.com/document/api/213/33258). The maximum number of instances per request is 100.
 * @method void setInstanceIds(array $InstanceIds) Set One or more instance IDs to be operated. You can obtain the instance ID through the `InstanceId` in the return value from the API [DescribeInstances](https://www.tencentcloud.com/document/api/213/33258). The maximum number of instances per request is 100.
 * @method InstanceChargePrepaid getInstanceChargePrepaid() Obtain Prepaid mode, that is, parameter settings related to monthly/annual subscription. specifies attributes of a monthly subscription instance, such as renewal duration and whether to enable auto-renewal, by specifying this parameter. <dx-alert infotype="explain" title="">.
Annual and monthly subscription instances. this parameter is a required parameter.</dx-alert>.
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) Set Prepaid mode, that is, parameter settings related to monthly/annual subscription. specifies attributes of a monthly subscription instance, such as renewal duration and whether to enable auto-renewal, by specifying this parameter. <dx-alert infotype="explain" title="">.
Annual and monthly subscription instances. this parameter is a required parameter.</dx-alert>.
 * @method boolean getRenewPortableDataDisk() Obtain Whether to renew the elastic data disk. valid values:<br><li>true: indicates renewing the annual and monthly subscription instance and its mounted elastic data disk simultaneously</li><li>false: indicates renewing the annual and monthly subscription instance while no longer renewing its mounted elastic data disk</li><br>default value: true.
 * @method void setRenewPortableDataDisk(boolean $RenewPortableDataDisk) Set Whether to renew the elastic data disk. valid values:<br><li>true: indicates renewing the annual and monthly subscription instance and its mounted elastic data disk simultaneously</li><li>false: indicates renewing the annual and monthly subscription instance while no longer renewing its mounted elastic data disk</li><br>default value: true.
 */
class RenewInstancesRequest extends AbstractModel
{
    /**
     * @var array One or more instance IDs to be operated. You can obtain the instance ID through the `InstanceId` in the return value from the API [DescribeInstances](https://www.tencentcloud.com/document/api/213/33258). The maximum number of instances per request is 100.
     */
    public $InstanceIds;

    /**
     * @var InstanceChargePrepaid Prepaid mode, that is, parameter settings related to monthly/annual subscription. specifies attributes of a monthly subscription instance, such as renewal duration and whether to enable auto-renewal, by specifying this parameter. <dx-alert infotype="explain" title="">.
Annual and monthly subscription instances. this parameter is a required parameter.</dx-alert>.
     */
    public $InstanceChargePrepaid;

    /**
     * @var boolean Whether to renew the elastic data disk. valid values:<br><li>true: indicates renewing the annual and monthly subscription instance and its mounted elastic data disk simultaneously</li><li>false: indicates renewing the annual and monthly subscription instance while no longer renewing its mounted elastic data disk</li><br>default value: true.
     */
    public $RenewPortableDataDisk;

    /**
     * @param array $InstanceIds One or more instance IDs to be operated. You can obtain the instance ID through the `InstanceId` in the return value from the API [DescribeInstances](https://www.tencentcloud.com/document/api/213/33258). The maximum number of instances per request is 100.
     * @param InstanceChargePrepaid $InstanceChargePrepaid Prepaid mode, that is, parameter settings related to monthly/annual subscription. specifies attributes of a monthly subscription instance, such as renewal duration and whether to enable auto-renewal, by specifying this parameter. <dx-alert infotype="explain" title="">.
Annual and monthly subscription instances. this parameter is a required parameter.</dx-alert>.
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

        if (array_key_exists("RenewPortableDataDisk",$param) and $param["RenewPortableDataDisk"] !== null) {
            $this->RenewPortableDataDisk = $param["RenewPortableDataDisk"];
        }
    }
}
