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
 * DeleteKeyPairs request structure.
 *
 * @method array getKeyIds() Obtain One or more key pair IDs to be operated. The maximum number of key pairs per request is 100.<br>You can obtain an available key pair ID in the following ways:<br><li>Log in to the [console](https://console.cloud.tencent.com/cvm/sshkey) to query the key pair ID.</li><br><li>Call the [DescribeKeyPairs](https://intl.cloud.tencent.com/document/api/213/15699?from_cn_redirect=1) API and obtain the key pair ID from the `KeyId` in the response.</li>
 * @method void setKeyIds(array $KeyIds) Set One or more key pair IDs to be operated. The maximum number of key pairs per request is 100.<br>You can obtain an available key pair ID in the following ways:<br><li>Log in to the [console](https://console.cloud.tencent.com/cvm/sshkey) to query the key pair ID.</li><br><li>Call the [DescribeKeyPairs](https://intl.cloud.tencent.com/document/api/213/15699?from_cn_redirect=1) API and obtain the key pair ID from the `KeyId` in the response.</li>
 */
class DeleteKeyPairsRequest extends AbstractModel
{
    /**
     * @var array One or more key pair IDs to be operated. The maximum number of key pairs per request is 100.<br>You can obtain an available key pair ID in the following ways:<br><li>Log in to the [console](https://console.cloud.tencent.com/cvm/sshkey) to query the key pair ID.</li><br><li>Call the [DescribeKeyPairs](https://intl.cloud.tencent.com/document/api/213/15699?from_cn_redirect=1) API and obtain the key pair ID from the `KeyId` in the response.</li>
     */
    public $KeyIds;

    /**
     * @param array $KeyIds One or more key pair IDs to be operated. The maximum number of key pairs per request is 100.<br>You can obtain an available key pair ID in the following ways:<br><li>Log in to the [console](https://console.cloud.tencent.com/cvm/sshkey) to query the key pair ID.</li><br><li>Call the [DescribeKeyPairs](https://intl.cloud.tencent.com/document/api/213/15699?from_cn_redirect=1) API and obtain the key pair ID from the `KeyId` in the response.</li>
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
        if (array_key_exists("KeyIds",$param) and $param["KeyIds"] !== null) {
            $this->KeyIds = $param["KeyIds"];
        }
    }
}
