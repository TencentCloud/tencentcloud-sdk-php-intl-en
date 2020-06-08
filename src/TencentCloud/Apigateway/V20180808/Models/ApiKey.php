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
 * Key details
 *
 * @method string getAccessKeyId() Obtain Created API key ID.
 * @method void setAccessKeyId(string $AccessKeyId) Set Created API key ID.
 * @method string getAccessKeySecret() Obtain Created API key.
 * @method void setAccessKeySecret(string $AccessKeySecret) Set Created API key.
 * @method string getAccessKeyType() Obtain Key type. Valid values: auto, manual.
 * @method void setAccessKeyType(string $AccessKeyType) Set Key type. Valid values: auto, manual.
 * @method string getSecretName() Obtain Custom key name.
 * @method void setSecretName(string $SecretName) Set Custom key name.
 * @method string getModifiedTime() Obtain Last modified time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
 * @method void setModifiedTime(string $ModifiedTime) Set Last modified time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
 * @method integer getStatus() Obtain Key status. 0: disabled. 1: enabled.
 * @method void setStatus(integer $Status) Set Key status. 0: disabled. 1: enabled.
 * @method string getCreatedTime() Obtain Creation time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
 */
class ApiKey extends AbstractModel
{
    /**
     * @var string Created API key ID.
     */
    public $AccessKeyId;

    /**
     * @var string Created API key.
     */
    public $AccessKeySecret;

    /**
     * @var string Key type. Valid values: auto, manual.
     */
    public $AccessKeyType;

    /**
     * @var string Custom key name.
     */
    public $SecretName;

    /**
     * @var string Last modified time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
     */
    public $ModifiedTime;

    /**
     * @var integer Key status. 0: disabled. 1: enabled.
     */
    public $Status;

    /**
     * @var string Creation time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
     */
    public $CreatedTime;

    /**
     * @param string $AccessKeyId Created API key ID.
     * @param string $AccessKeySecret Created API key.
     * @param string $AccessKeyType Key type. Valid values: auto, manual.
     * @param string $SecretName Custom key name.
     * @param string $ModifiedTime Last modified time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
     * @param integer $Status Key status. 0: disabled. 1: enabled.
     * @param string $CreatedTime Creation time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
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
        if (array_key_exists("AccessKeyId",$param) and $param["AccessKeyId"] !== null) {
            $this->AccessKeyId = $param["AccessKeyId"];
        }

        if (array_key_exists("AccessKeySecret",$param) and $param["AccessKeySecret"] !== null) {
            $this->AccessKeySecret = $param["AccessKeySecret"];
        }

        if (array_key_exists("AccessKeyType",$param) and $param["AccessKeyType"] !== null) {
            $this->AccessKeyType = $param["AccessKeyType"];
        }

        if (array_key_exists("SecretName",$param) and $param["SecretName"] !== null) {
            $this->SecretName = $param["SecretName"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
