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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Private origin authentication parameter
 *
 * @method string getName() Obtain Name of the private origin authentication parameter.
`AccessKeyId`: Access key ID
`SecretAccessKey`: Secret access key
 * @method void setName(string $Name) Set Name of the private origin authentication parameter.
`AccessKeyId`: Access key ID
`SecretAccessKey`: Secret access key
 * @method string getValue() Obtain Value of the private origin authentication parameter
 * @method void setValue(string $Value) Set Value of the private origin authentication parameter
 */
class OriginRecordPrivateParameter extends AbstractModel
{
    /**
     * @var string Name of the private origin authentication parameter.
`AccessKeyId`: Access key ID
`SecretAccessKey`: Secret access key
     */
    public $Name;

    /**
     * @var string Value of the private origin authentication parameter
     */
    public $Value;

    /**
     * @param string $Name Name of the private origin authentication parameter.
`AccessKeyId`: Access key ID
`SecretAccessKey`: Secret access key
     * @param string $Value Value of the private origin authentication parameter
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
