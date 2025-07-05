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
 * TerminateInstances request structure.
 *
 * @method array getInstanceIds() Obtain One or more instance IDs to be operated. You can obtain the instance ID through the `InstanceId` in the return value from the API [DescribeInstances](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1). The maximum number of instances per request is 100.
 * @method void setInstanceIds(array $InstanceIds) Set One or more instance IDs to be operated. You can obtain the instance ID through the `InstanceId` in the return value from the API [DescribeInstances](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1). The maximum number of instances per request is 100.
 * @method boolean getReleaseAddress() Obtain Release an Elastic IP. Under EIP 2.0, only the first EIP on the primary network interface can be released, and currently supported release types are limited to HighQualityEIP, AntiDDoSEIP, EIPv6, and HighQualityEIPv6.
Default value:  `false`.

This feature is currently in gradually released phase. To access it, please contact us.
 * @method void setReleaseAddress(boolean $ReleaseAddress) Set Release an Elastic IP. Under EIP 2.0, only the first EIP on the primary network interface can be released, and currently supported release types are limited to HighQualityEIP, AntiDDoSEIP, EIPv6, and HighQualityEIPv6.
Default value:  `false`.

This feature is currently in gradually released phase. To access it, please contact us.
 * @method boolean getReleasePrepaidDataDisks() Obtain Whether to release a monthly subscription data disk mounted on an instance. true: Release the data disk along with termination of the instance. false: Only terminate the instance.
Default value: `false`.
 * @method void setReleasePrepaidDataDisks(boolean $ReleasePrepaidDataDisks) Set Whether to release a monthly subscription data disk mounted on an instance. true: Release the data disk along with termination of the instance. false: Only terminate the instance.
Default value: `false`.
 */
class TerminateInstancesRequest extends AbstractModel
{
    /**
     * @var array One or more instance IDs to be operated. You can obtain the instance ID through the `InstanceId` in the return value from the API [DescribeInstances](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1). The maximum number of instances per request is 100.
     */
    public $InstanceIds;

    /**
     * @var boolean Release an Elastic IP. Under EIP 2.0, only the first EIP on the primary network interface can be released, and currently supported release types are limited to HighQualityEIP, AntiDDoSEIP, EIPv6, and HighQualityEIPv6.
Default value:  `false`.

This feature is currently in gradually released phase. To access it, please contact us.
     */
    public $ReleaseAddress;

    /**
     * @var boolean Whether to release a monthly subscription data disk mounted on an instance. true: Release the data disk along with termination of the instance. false: Only terminate the instance.
Default value: `false`.
     */
    public $ReleasePrepaidDataDisks;

    /**
     * @param array $InstanceIds One or more instance IDs to be operated. You can obtain the instance ID through the `InstanceId` in the return value from the API [DescribeInstances](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1). The maximum number of instances per request is 100.
     * @param boolean $ReleaseAddress Release an Elastic IP. Under EIP 2.0, only the first EIP on the primary network interface can be released, and currently supported release types are limited to HighQualityEIP, AntiDDoSEIP, EIPv6, and HighQualityEIPv6.
Default value:  `false`.

This feature is currently in gradually released phase. To access it, please contact us.
     * @param boolean $ReleasePrepaidDataDisks Whether to release a monthly subscription data disk mounted on an instance. true: Release the data disk along with termination of the instance. false: Only terminate the instance.
Default value: `false`.
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

        if (array_key_exists("ReleaseAddress",$param) and $param["ReleaseAddress"] !== null) {
            $this->ReleaseAddress = $param["ReleaseAddress"];
        }

        if (array_key_exists("ReleasePrepaidDataDisks",$param) and $param["ReleasePrepaidDataDisks"] !== null) {
            $this->ReleasePrepaidDataDisks = $param["ReleasePrepaidDataDisks"];
        }
    }
}
