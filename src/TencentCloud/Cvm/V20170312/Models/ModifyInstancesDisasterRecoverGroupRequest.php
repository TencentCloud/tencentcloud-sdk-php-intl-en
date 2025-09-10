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
 * ModifyInstancesDisasterRecoverGroup request structure.
 *
 * @method array getInstanceIds() Obtain One or more instance ids to be operated. you can obtain the instance ID through the `InstanceId` in the return value from the api [DescribeInstances](https://www.tencentcloud.com/zh/document/api/213/33258). the maximum number of instances per request is 100.
 * @method void setInstanceIds(array $InstanceIds) Set One or more instance ids to be operated. you can obtain the instance ID through the `InstanceId` in the return value from the api [DescribeInstances](https://www.tencentcloud.com/zh/document/api/213/33258). the maximum number of instances per request is 100.
 * @method string getDisasterRecoverGroupId() Obtain Spread placement group ID. obtain through the api [DescribeDisasterRecoverGroups](https://www.tencentcloud.com/zh/document/api/213/33261).
 * @method void setDisasterRecoverGroupId(string $DisasterRecoverGroupId) Set Spread placement group ID. obtain through the api [DescribeDisasterRecoverGroups](https://www.tencentcloud.com/zh/document/api/213/33261).
 * @method boolean getForce() Obtain Whether to forcibly change instance hosts. value range:<br><li>true: indicates that the instance is allowed to change hosts, allowing the instance to reboot. local disk machine does not support specifying this parameter.</li><br><li>false: does not allow the instance to change hosts. instances can only be added to the placement group on the current host. this may result in a failure to change the placement group.</li><br><br>default value: false.
 * @method void setForce(boolean $Force) Set Whether to forcibly change instance hosts. value range:<br><li>true: indicates that the instance is allowed to change hosts, allowing the instance to reboot. local disk machine does not support specifying this parameter.</li><br><li>false: does not allow the instance to change hosts. instances can only be added to the placement group on the current host. this may result in a failure to change the placement group.</li><br><br>default value: false.
 */
class ModifyInstancesDisasterRecoverGroupRequest extends AbstractModel
{
    /**
     * @var array One or more instance ids to be operated. you can obtain the instance ID through the `InstanceId` in the return value from the api [DescribeInstances](https://www.tencentcloud.com/zh/document/api/213/33258). the maximum number of instances per request is 100.
     */
    public $InstanceIds;

    /**
     * @var string Spread placement group ID. obtain through the api [DescribeDisasterRecoverGroups](https://www.tencentcloud.com/zh/document/api/213/33261).
     */
    public $DisasterRecoverGroupId;

    /**
     * @var boolean Whether to forcibly change instance hosts. value range:<br><li>true: indicates that the instance is allowed to change hosts, allowing the instance to reboot. local disk machine does not support specifying this parameter.</li><br><li>false: does not allow the instance to change hosts. instances can only be added to the placement group on the current host. this may result in a failure to change the placement group.</li><br><br>default value: false.
     */
    public $Force;

    /**
     * @param array $InstanceIds One or more instance ids to be operated. you can obtain the instance ID through the `InstanceId` in the return value from the api [DescribeInstances](https://www.tencentcloud.com/zh/document/api/213/33258). the maximum number of instances per request is 100.
     * @param string $DisasterRecoverGroupId Spread placement group ID. obtain through the api [DescribeDisasterRecoverGroups](https://www.tencentcloud.com/zh/document/api/213/33261).
     * @param boolean $Force Whether to forcibly change instance hosts. value range:<br><li>true: indicates that the instance is allowed to change hosts, allowing the instance to reboot. local disk machine does not support specifying this parameter.</li><br><li>false: does not allow the instance to change hosts. instances can only be added to the placement group on the current host. this may result in a failure to change the placement group.</li><br><br>default value: false.
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

        if (array_key_exists("DisasterRecoverGroupId",$param) and $param["DisasterRecoverGroupId"] !== null) {
            $this->DisasterRecoverGroupId = $param["DisasterRecoverGroupId"];
        }

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }
    }
}
