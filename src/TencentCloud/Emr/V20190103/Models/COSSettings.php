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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * COS-related configuration
 *
 * @method string getCosSecretId() Obtain COS `SecretId`
 * @method void setCosSecretId(string $CosSecretId) Set COS `SecretId`
 * @method string getCosSecretKey() Obtain COS `SecrectKey`
 * @method void setCosSecretKey(string $CosSecretKey) Set COS `SecrectKey`
 * @method string getLogOnCosPath() Obtain COS path to log
 * @method void setLogOnCosPath(string $LogOnCosPath) Set COS path to log
 */
class COSSettings extends AbstractModel
{
    /**
     * @var string COS `SecretId`
     */
    public $CosSecretId;

    /**
     * @var string COS `SecrectKey`
     */
    public $CosSecretKey;

    /**
     * @var string COS path to log
     */
    public $LogOnCosPath;

    /**
     * @param string $CosSecretId COS `SecretId`
     * @param string $CosSecretKey COS `SecrectKey`
     * @param string $LogOnCosPath COS path to log
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
        if (array_key_exists("CosSecretId",$param) and $param["CosSecretId"] !== null) {
            $this->CosSecretId = $param["CosSecretId"];
        }

        if (array_key_exists("CosSecretKey",$param) and $param["CosSecretKey"] !== null) {
            $this->CosSecretKey = $param["CosSecretKey"];
        }

        if (array_key_exists("LogOnCosPath",$param) and $param["LogOnCosPath"] !== null) {
            $this->LogOnCosPath = $param["LogOnCosPath"];
        }
    }
}
