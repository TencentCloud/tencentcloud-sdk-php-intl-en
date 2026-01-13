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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EnableTransparentDataEncryption request structure.
 *
 * @method string getInstanceId() Obtain Instance ID. For example, cmgo-p8vn****. Log in to the[TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb) to copy the instance ID from the instance list. Currently, the supported general versions include 4.4 and 5.0, and Cloud Disk Edition is not supported.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. For example, cmgo-p8vn****. Log in to the[TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb) to copy the instance ID from the instance list. Currently, the supported general versions include 4.4 and 5.0, and Cloud Disk Edition is not supported.
 * @method string getKmsRegion() Obtain  Region where the [Key Management Service (KMS)](https://www.tencentcloud.com/document/product/573/18809?from_cn_redirect=1) instance is located. For example, ap-shanghai.
 * @method void setKmsRegion(string $KmsRegion) Set  Region where the [Key Management Service (KMS)](https://www.tencentcloud.com/document/product/573/18809?from_cn_redirect=1) instance is located. For example, ap-shanghai.
 * @method string getKeyId() Obtain Key ID. If the parameter is left unspecified, there is no specific key ID, Tencent Cloud will generate the key automatically.
 * @method void setKeyId(string $KeyId) Set Key ID. If the parameter is left unspecified, there is no specific key ID, Tencent Cloud will generate the key automatically.
 */
class EnableTransparentDataEncryptionRequest extends AbstractModel
{
    /**
     * @var string Instance ID. For example, cmgo-p8vn****. Log in to the[TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb) to copy the instance ID from the instance list. Currently, the supported general versions include 4.4 and 5.0, and Cloud Disk Edition is not supported.
     */
    public $InstanceId;

    /**
     * @var string  Region where the [Key Management Service (KMS)](https://www.tencentcloud.com/document/product/573/18809?from_cn_redirect=1) instance is located. For example, ap-shanghai.
     */
    public $KmsRegion;

    /**
     * @var string Key ID. If the parameter is left unspecified, there is no specific key ID, Tencent Cloud will generate the key automatically.
     */
    public $KeyId;

    /**
     * @param string $InstanceId Instance ID. For example, cmgo-p8vn****. Log in to the[TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb) to copy the instance ID from the instance list. Currently, the supported general versions include 4.4 and 5.0, and Cloud Disk Edition is not supported.
     * @param string $KmsRegion  Region where the [Key Management Service (KMS)](https://www.tencentcloud.com/document/product/573/18809?from_cn_redirect=1) instance is located. For example, ap-shanghai.
     * @param string $KeyId Key ID. If the parameter is left unspecified, there is no specific key ID, Tencent Cloud will generate the key automatically.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("KmsRegion",$param) and $param["KmsRegion"] !== null) {
            $this->KmsRegion = $param["KmsRegion"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }
    }
}
