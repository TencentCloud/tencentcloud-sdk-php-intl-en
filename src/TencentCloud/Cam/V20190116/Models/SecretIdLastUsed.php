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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The last time the key was used.
 *
 * @method string getSecretId() Obtain Key ID.
 * @method void setSecretId(string $SecretId) Set Key ID.
 * @method string getLastUsedDate() Obtain The date when the key ID was last used (the value is obtained one day later).
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setLastUsedDate(string $LastUsedDate) Set The date when the key ID was last used (the value is obtained one day later).
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method integer getLastSecretUsedDate() Obtain The most recent date the key was accessed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastSecretUsedDate(integer $LastSecretUsedDate) Set The most recent date the key was accessed
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SecretIdLastUsed extends AbstractModel
{
    /**
     * @var string Key ID.
     */
    public $SecretId;

    /**
     * @var string The date when the key ID was last used (the value is obtained one day later).
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $LastUsedDate;

    /**
     * @var integer The most recent date the key was accessed
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastSecretUsedDate;

    /**
     * @param string $SecretId Key ID.
     * @param string $LastUsedDate The date when the key ID was last used (the value is obtained one day later).
Note: this field may return `null`, indicating that no valid value can be obtained.
     * @param integer $LastSecretUsedDate The most recent date the key was accessed
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }

        if (array_key_exists("LastUsedDate",$param) and $param["LastUsedDate"] !== null) {
            $this->LastUsedDate = $param["LastUsedDate"];
        }

        if (array_key_exists("LastSecretUsedDate",$param) and $param["LastSecretUsedDate"] !== null) {
            $this->LastSecretUsedDate = $param["LastSecretUsedDate"];
        }
    }
}
