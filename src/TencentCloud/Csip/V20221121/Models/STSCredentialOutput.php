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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * STS temporary key credential (dedicated for output parameters), used for the response of the query details API. The SecretID and SecretKey fields return masked values, and System returns the original text.
 *
 * @method string getSystem() Obtain Credential provider identifier (original), for example tencentCam, aws, aliyun
 * @method void setSystem(string $System) Set Credential provider identifier (original), for example tencentCam, aws, aliyun
 * @method string getSecretID() Obtain SecretID (masked)
Supplemental description: Reserve the first 3 and last 4 digits, replace the middle with ***. If the length is less than 7, use *** as a complete replacement.
 * @method void setSecretID(string $SecretID) Set SecretID (masked)
Supplemental description: Reserve the first 3 and last 4 digits, replace the middle with ***. If the length is less than 7, use *** as a complete replacement.
 * @method string getSecretKey() Obtain SecretKey (masked)
Supplemental description: Reserve the first 3 and last 4 digits, replace the middle with ***. If the length is less than 7, use *** as a complete replacement.
 * @method void setSecretKey(string $SecretKey) Set SecretKey (masked)
Supplemental description: Reserve the first 3 and last 4 digits, replace the middle with ***. If the length is less than 7, use *** as a complete replacement.
 */
class STSCredentialOutput extends AbstractModel
{
    /**
     * @var string Credential provider identifier (original), for example tencentCam, aws, aliyun
     */
    public $System;

    /**
     * @var string SecretID (masked)
Supplemental description: Reserve the first 3 and last 4 digits, replace the middle with ***. If the length is less than 7, use *** as a complete replacement.
     */
    public $SecretID;

    /**
     * @var string SecretKey (masked)
Supplemental description: Reserve the first 3 and last 4 digits, replace the middle with ***. If the length is less than 7, use *** as a complete replacement.
     */
    public $SecretKey;

    /**
     * @param string $System Credential provider identifier (original), for example tencentCam, aws, aliyun
     * @param string $SecretID SecretID (masked)
Supplemental description: Reserve the first 3 and last 4 digits, replace the middle with ***. If the length is less than 7, use *** as a complete replacement.
     * @param string $SecretKey SecretKey (masked)
Supplemental description: Reserve the first 3 and last 4 digits, replace the middle with ***. If the length is less than 7, use *** as a complete replacement.
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
        if (array_key_exists("System",$param) and $param["System"] !== null) {
            $this->System = $param["System"];
        }

        if (array_key_exists("SecretID",$param) and $param["SecretID"] !== null) {
            $this->SecretID = $param["SecretID"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }
    }
}
