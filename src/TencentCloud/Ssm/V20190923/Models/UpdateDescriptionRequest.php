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
namespace TencentCloud\Ssm\V20190923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateDescription request structure.
 *
 * @method string getSecretName() Obtain Name of a Secret whose description is to be updated.
 * @method void setSecretName(string $SecretName) Set Name of a Secret whose description is to be updated.
 * @method string getDescription() Obtain New description information, which can be up to 2048 bytes.
 * @method void setDescription(string $Description) Set New description information, which can be up to 2048 bytes.
 */
class UpdateDescriptionRequest extends AbstractModel
{
    /**
     * @var string Name of a Secret whose description is to be updated.
     */
    public $SecretName;

    /**
     * @var string New description information, which can be up to 2048 bytes.
     */
    public $Description;

    /**
     * @param string $SecretName Name of a Secret whose description is to be updated.
     * @param string $Description New description information, which can be up to 2048 bytes.
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
        if (array_key_exists("SecretName",$param) and $param["SecretName"] !== null) {
            $this->SecretName = $param["SecretName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
