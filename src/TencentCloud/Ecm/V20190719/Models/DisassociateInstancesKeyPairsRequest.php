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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DisassociateInstancesKeyPairs request structure.
 *
 * @method array getInstanceIds() Obtain You can get available instance IDs in the following ways:
Log in to the console to query instance IDs.
Get the instance IDs from the `InstanceId` field in the information returned by the `DescribeInstances` API.
 * @method void setInstanceIds(array $InstanceIds) Set You can get available instance IDs in the following ways:
Log in to the console to query instance IDs.
Get the instance IDs from the `InstanceId` field in the information returned by the `DescribeInstances` API.
 * @method array getKeyIds() Obtain List of key pair IDs. Each request can contain up to 100 key pairs. The key pair ID takes the form of `skey-11112222`.

You can get available key IDs in the following ways:
Log in to the console to query key IDs.
Get the key pair IDs from the `KeyId` field in the information returned by the `DescribeKeyPairs` API.
 * @method void setKeyIds(array $KeyIds) Set List of key pair IDs. Each request can contain up to 100 key pairs. The key pair ID takes the form of `skey-11112222`.

You can get available key IDs in the following ways:
Log in to the console to query key IDs.
Get the key pair IDs from the `KeyId` field in the information returned by the `DescribeKeyPairs` API.
 * @method boolean getForceStop() Obtain Whether to force shut down the running instance. We recommend you manually shut down the running instance before unbinding the key. Valid values:
TRUE: yes.
FALSE: no.

Default value: FALSE.
 * @method void setForceStop(boolean $ForceStop) Set Whether to force shut down the running instance. We recommend you manually shut down the running instance before unbinding the key. Valid values:
TRUE: yes.
FALSE: no.

Default value: FALSE.
 */
class DisassociateInstancesKeyPairsRequest extends AbstractModel
{
    /**
     * @var array You can get available instance IDs in the following ways:
Log in to the console to query instance IDs.
Get the instance IDs from the `InstanceId` field in the information returned by the `DescribeInstances` API.
     */
    public $InstanceIds;

    /**
     * @var array List of key pair IDs. Each request can contain up to 100 key pairs. The key pair ID takes the form of `skey-11112222`.

You can get available key IDs in the following ways:
Log in to the console to query key IDs.
Get the key pair IDs from the `KeyId` field in the information returned by the `DescribeKeyPairs` API.
     */
    public $KeyIds;

    /**
     * @var boolean Whether to force shut down the running instance. We recommend you manually shut down the running instance before unbinding the key. Valid values:
TRUE: yes.
FALSE: no.

Default value: FALSE.
     */
    public $ForceStop;

    /**
     * @param array $InstanceIds You can get available instance IDs in the following ways:
Log in to the console to query instance IDs.
Get the instance IDs from the `InstanceId` field in the information returned by the `DescribeInstances` API.
     * @param array $KeyIds List of key pair IDs. Each request can contain up to 100 key pairs. The key pair ID takes the form of `skey-11112222`.

You can get available key IDs in the following ways:
Log in to the console to query key IDs.
Get the key pair IDs from the `KeyId` field in the information returned by the `DescribeKeyPairs` API.
     * @param boolean $ForceStop Whether to force shut down the running instance. We recommend you manually shut down the running instance before unbinding the key. Valid values:
TRUE: yes.
FALSE: no.

Default value: FALSE.
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

        if (array_key_exists("KeyIds",$param) and $param["KeyIds"] !== null) {
            $this->KeyIds = $param["KeyIds"];
        }

        if (array_key_exists("ForceStop",$param) and $param["ForceStop"] !== null) {
            $this->ForceStop = $param["ForceStop"];
        }
    }
}
