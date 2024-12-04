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
 * KillMasterGroup request structure.
 *
 * @method string getInstanceId() Obtain ID of a specified instance,  such as  "crs-xjhsdj****" Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.
 * @method void setInstanceId(string $InstanceId) Set ID of a specified instance,  such as  "crs-xjhsdj****" Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.
 * @method string getPassword() Obtain A parameter used to configure the access password for a specified instance. If password-free authentication is enabled, this parameter will not be required. Required password strength. - It must contains 8-30 characters. We recommend that you use a password of more than 12 characters. - It must contain at least two of the following types: lowercase letters, uppercase letters, digits, and symbols (()`~!@#$%^&*-+=_|{}[]:;<>,.?/), and it cannot start with a slash (/).
 * @method void setPassword(string $Password) Set A parameter used to configure the access password for a specified instance. If password-free authentication is enabled, this parameter will not be required. Required password strength. - It must contains 8-30 characters. We recommend that you use a password of more than 12 characters. - It must contain at least two of the following types: lowercase letters, uppercase letters, digits, and symbols (()`~!@#$%^&*-+=_|{}[]:;<>,.?/), and it cannot start with a slash (/).
 * @method array getShardIds() Obtain Sharded cluster ID, which can be obtained through **ClusterId** of the response parameter 
 **Redis** of the API [DescribeInstanceNodeInfo](https://intl.cloud.tencent.com/document/product/239/48603?from_cn_redirect=1).
 * @method void setShardIds(array $ShardIds) Set Sharded cluster ID, which can be obtained through **ClusterId** of the response parameter 
 **Redis** of the API [DescribeInstanceNodeInfo](https://intl.cloud.tencent.com/document/product/239/48603?from_cn_redirect=1).
 */
class KillMasterGroupRequest extends AbstractModel
{
    /**
     * @var string ID of a specified instance,  such as  "crs-xjhsdj****" Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.
     */
    public $InstanceId;

    /**
     * @var string A parameter used to configure the access password for a specified instance. If password-free authentication is enabled, this parameter will not be required. Required password strength. - It must contains 8-30 characters. We recommend that you use a password of more than 12 characters. - It must contain at least two of the following types: lowercase letters, uppercase letters, digits, and symbols (()`~!@#$%^&*-+=_|{}[]:;<>,.?/), and it cannot start with a slash (/).
     */
    public $Password;

    /**
     * @var array Sharded cluster ID, which can be obtained through **ClusterId** of the response parameter 
 **Redis** of the API [DescribeInstanceNodeInfo](https://intl.cloud.tencent.com/document/product/239/48603?from_cn_redirect=1).
     */
    public $ShardIds;

    /**
     * @param string $InstanceId ID of a specified instance,  such as  "crs-xjhsdj****" Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.
     * @param string $Password A parameter used to configure the access password for a specified instance. If password-free authentication is enabled, this parameter will not be required. Required password strength. - It must contains 8-30 characters. We recommend that you use a password of more than 12 characters. - It must contain at least two of the following types: lowercase letters, uppercase letters, digits, and symbols (()`~!@#$%^&*-+=_|{}[]:;<>,.?/), and it cannot start with a slash (/).
     * @param array $ShardIds Sharded cluster ID, which can be obtained through **ClusterId** of the response parameter 
 **Redis** of the API [DescribeInstanceNodeInfo](https://intl.cloud.tencent.com/document/product/239/48603?from_cn_redirect=1).
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

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("ShardIds",$param) and $param["ShardIds"] !== null) {
            $this->ShardIds = $param["ShardIds"];
        }
    }
}
