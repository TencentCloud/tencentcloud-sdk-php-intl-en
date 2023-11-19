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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Private authentication parameters of object storage origins
 *
 * @method string getName() Obtain The parameter name. Values
<li>`AccessKeyId`: Access Key ID</li>
<li>`SecretAccessKey`: Secret Access Key</li>
<li>`SignatureVersion`: Signature version. Values: `v2`, `v4`</li>
<li>`Region`: Region of the storage bucket</li>
 * @method void setName(string $Name) Set The parameter name. Values
<li>`AccessKeyId`: Access Key ID</li>
<li>`SecretAccessKey`: Secret Access Key</li>
<li>`SignatureVersion`: Signature version. Values: `v2`, `v4`</li>
<li>`Region`: Region of the storage bucket</li>
 * @method string getValue() Obtain The parameter value.
 * @method void setValue(string $Value) Set The parameter value.
 */
class PrivateParameter extends AbstractModel
{
    /**
     * @var string The parameter name. Values
<li>`AccessKeyId`: Access Key ID</li>
<li>`SecretAccessKey`: Secret Access Key</li>
<li>`SignatureVersion`: Signature version. Values: `v2`, `v4`</li>
<li>`Region`: Region of the storage bucket</li>
     */
    public $Name;

    /**
     * @var string The parameter value.
     */
    public $Value;

    /**
     * @param string $Name The parameter name. Values
<li>`AccessKeyId`: Access Key ID</li>
<li>`SecretAccessKey`: Secret Access Key</li>
<li>`SignatureVersion`: Signature version. Values: `v2`, `v4`</li>
<li>`Region`: Region of the storage bucket</li>
     * @param string $Value The parameter value.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
