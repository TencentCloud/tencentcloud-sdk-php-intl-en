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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ChangeReplicaToMaster request structure.
 *
 * @method string getInstanceId() Obtain ID of the specified instance,  such as  "crs-xjhsdj****" Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.

 * @method void setInstanceId(string $InstanceId) Set ID of the specified instance,  such as  "crs-xjhsdj****" Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.

 * @method integer getGroupId() Obtain ID of the replica node group. You can get more ID information of the multi-AZ replica node group though the [DescribeInstanceZoneInfo](https://intl.cloud.tencent.com/document/product/239/50312?from_cn_redirect=1) API.  This parameter is not required for a single-AZ replica node group.
 * @method void setGroupId(integer $GroupId) Set ID of the replica node group. You can get more ID information of the multi-AZ replica node group though the [DescribeInstanceZoneInfo](https://intl.cloud.tencent.com/document/product/239/50312?from_cn_redirect=1) API.  This parameter is not required for a single-AZ replica node group.
 */
class ChangeReplicaToMasterRequest extends AbstractModel
{
    /**
     * @var string ID of the specified instance,  such as  "crs-xjhsdj****" Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.

     */
    public $InstanceId;

    /**
     * @var integer ID of the replica node group. You can get more ID information of the multi-AZ replica node group though the [DescribeInstanceZoneInfo](https://intl.cloud.tencent.com/document/product/239/50312?from_cn_redirect=1) API.  This parameter is not required for a single-AZ replica node group.
     */
    public $GroupId;

    /**
     * @param string $InstanceId ID of the specified instance,  such as  "crs-xjhsdj****" Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.

     * @param integer $GroupId ID of the replica node group. You can get more ID information of the multi-AZ replica node group though the [DescribeInstanceZoneInfo](https://intl.cloud.tencent.com/document/product/239/50312?from_cn_redirect=1) API.  This parameter is not required for a single-AZ replica node group.
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

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}
