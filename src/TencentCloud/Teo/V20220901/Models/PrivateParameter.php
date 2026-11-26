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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Private authentication parameters for the COS origin server
 *
 * @method string getName() Obtain Private authentication parameter name. Valid values:
<li>AccessKeyId: Access Key ID for authentication;</li>
<li>SecretAccessKey: authentication parameter Secret Access Key;</li>
<li>SignatureVersion: Authentication version, v2 or v4;</li>
<li>Region: bucket region.</li>
 * @method void setName(string $Name) Set Private authentication parameter name. Valid values:
<li>AccessKeyId: Access Key ID for authentication;</li>
<li>SecretAccessKey: authentication parameter Secret Access Key;</li>
<li>SignatureVersion: Authentication version, v2 or v4;</li>
<li>Region: bucket region.</li>
 * @method string getValue() Obtain Private authentication parameter value.
 * @method void setValue(string $Value) Set Private authentication parameter value.
 */
class PrivateParameter extends AbstractModel
{
    /**
     * @var string Private authentication parameter name. Valid values:
<li>AccessKeyId: Access Key ID for authentication;</li>
<li>SecretAccessKey: authentication parameter Secret Access Key;</li>
<li>SignatureVersion: Authentication version, v2 or v4;</li>
<li>Region: bucket region.</li>
     */
    public $Name;

    /**
     * @var string Private authentication parameter value.
     */
    public $Value;

    /**
     * @param string $Name Private authentication parameter name. Valid values:
<li>AccessKeyId: Access Key ID for authentication;</li>
<li>SecretAccessKey: authentication parameter Secret Access Key;</li>
<li>SignatureVersion: Authentication version, v2 or v4;</li>
<li>Region: bucket region.</li>
     * @param string $Value Private authentication parameter value.
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
