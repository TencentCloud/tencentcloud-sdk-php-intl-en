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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateApiKey request structure.
 *
 * @method string getSecretName() Obtain Custom key name.
 * @method void setSecretName(string $SecretName) Set Custom key name.
 * @method string getAccessKeyType() Obtain Key type. Valid values: auto, manual (custom key). Default value: auto.
 * @method void setAccessKeyType(string $AccessKeyType) Set Key type. Valid values: auto, manual (custom key). Default value: auto.
 * @method string getAccessKeyId() Obtain Custom key ID, which is required if `AccessKeyType` is `manual`. It can contain 5-50 letters, digits, and underscores.
 * @method void setAccessKeyId(string $AccessKeyId) Set Custom key ID, which is required if `AccessKeyType` is `manual`. It can contain 5-50 letters, digits, and underscores.
 * @method string getAccessKeySecret() Obtain Custom key, which is required if `AccessKeyType` is `manual`. It can contain 10-50 letters, digits, and underscores.
 * @method void setAccessKeySecret(string $AccessKeySecret) Set Custom key, which is required if `AccessKeyType` is `manual`. It can contain 10-50 letters, digits, and underscores.
 * @method array getTags() Obtain 
 * @method void setTags(array $Tags) Set 
 */
class CreateApiKeyRequest extends AbstractModel
{
    /**
     * @var string Custom key name.
     */
    public $SecretName;

    /**
     * @var string Key type. Valid values: auto, manual (custom key). Default value: auto.
     */
    public $AccessKeyType;

    /**
     * @var string Custom key ID, which is required if `AccessKeyType` is `manual`. It can contain 5-50 letters, digits, and underscores.
     */
    public $AccessKeyId;

    /**
     * @var string Custom key, which is required if `AccessKeyType` is `manual`. It can contain 10-50 letters, digits, and underscores.
     */
    public $AccessKeySecret;

    /**
     * @var array 
     */
    public $Tags;

    /**
     * @param string $SecretName Custom key name.
     * @param string $AccessKeyType Key type. Valid values: auto, manual (custom key). Default value: auto.
     * @param string $AccessKeyId Custom key ID, which is required if `AccessKeyType` is `manual`. It can contain 5-50 letters, digits, and underscores.
     * @param string $AccessKeySecret Custom key, which is required if `AccessKeyType` is `manual`. It can contain 10-50 letters, digits, and underscores.
     * @param array $Tags 
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

        if (array_key_exists("AccessKeyType",$param) and $param["AccessKeyType"] !== null) {
            $this->AccessKeyType = $param["AccessKeyType"];
        }

        if (array_key_exists("AccessKeyId",$param) and $param["AccessKeyId"] !== null) {
            $this->AccessKeyId = $param["AccessKeyId"];
        }

        if (array_key_exists("AccessKeySecret",$param) and $param["AccessKeySecret"] !== null) {
            $this->AccessKeySecret = $param["AccessKeySecret"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
