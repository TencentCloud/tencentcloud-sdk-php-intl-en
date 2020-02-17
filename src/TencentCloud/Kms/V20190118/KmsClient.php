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

namespace TencentCloud\Kms\V20190118;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Kms\V20190118\Models as Models;

/**
* @method Models\CancelKeyDeletionResponse CancelKeyDeletion(Models\CancelKeyDeletionRequest $req) 取消CMK的计划删除操作
* @method Models\CreateKeyResponse CreateKey(Models\CreateKeyRequest $req) 创建用户管理数据密钥的主密钥CMK（Custom Master Key）。
* @method Models\DecryptResponse Decrypt(Models\DecryptRequest $req) 本接口用于解密密文，得到明文数据。
* @method Models\DeleteImportedKeyMaterialResponse DeleteImportedKeyMaterial(Models\DeleteImportedKeyMaterialRequest $req) This API is used to delete the imported key material. It is only valid for EXTERNAL CMKs. Specifically, it puts a CMK into `PendingImport` status instead of deleting the CMK, so that the CMK can be used again after key material is reimported. To delete the CMK completely, please call the `ScheduleKeyDeletion` API.
* @method Models\DisableKeyResponse DisableKey(Models\DisableKeyRequest $req) 本接口用于禁用一个主密钥，处于禁用状态的Key无法用于加密、解密操作。
* @method Models\DisableKeyRotationResponse DisableKeyRotation(Models\DisableKeyRotationRequest $req) 对指定的CMK禁止密钥轮换功能。
* @method Models\DisableKeysResponse DisableKeys(Models\DisableKeysRequest $req) 该接口用于批量禁止CMK的使用。
* @method Models\EnableKeyResponse EnableKey(Models\EnableKeyRequest $req) 用于启用一个指定的CMK。
* @method Models\EnableKeyRotationResponse EnableKeyRotation(Models\EnableKeyRotationRequest $req) 对指定的CMK开启密钥轮换功能。
* @method Models\EnableKeysResponse EnableKeys(Models\EnableKeysRequest $req) 该接口用于批量启用CMK。
* @method Models\EncryptResponse Encrypt(Models\EncryptRequest $req) 本接口用于加密最多为4KB任意数据，可用于加密数据库密码，RSA Key，或其它较小的敏感信息。对于应用的数据加密，使用GenerateDataKey生成的DataKey进行本地数据的加解密操作
* @method Models\GenerateDataKeyResponse GenerateDataKey(Models\GenerateDataKeyRequest $req) 本接口生成一个数据密钥，您可以用这个密钥进行本地数据的加密。
* @method Models\GenerateRandomResponse GenerateRandom(Models\GenerateRandomRequest $req) This API is used to generate a random number.
* @method Models\GetKeyRotationStatusResponse GetKeyRotationStatus(Models\GetKeyRotationStatusRequest $req) 查询指定的CMK是否开启了密钥轮换功能。
* @method Models\GetParametersForImportResponse GetParametersForImport(Models\GetParametersForImportRequest $req) This API is used to obtain the parameters of the material to be imported into a CMK. The returned `Token` is used as one of the parameters to execute `ImportKeyMaterial`, and the returned `PublicKey` is used to encrypt the key material. The `Token` and `PublicKey` are valid for 24 hours. If they are expired, you will need to call the API again to get a new `Token` and `PublicKey`.
* @method Models\GetServiceStatusResponse GetServiceStatus(Models\GetServiceStatusRequest $req) 用于查询该用户是否已开通KMS服务
* @method Models\ImportKeyMaterialResponse ImportKeyMaterial(Models\ImportKeyMaterialRequest $req) This API is used to import key material into an EXTERNAL CMK. The key obtained through the `GetParametersForImport` API is used to encrypt the key material. You can only reimport the same key material into the specified CMK and set a new expiration time. After the CMK key material is imported, it cannot be replaced. After the key material is expired or deleted, the CMK will remain unavailable until the same key material is reimported. CMKs are independent, which means that the same key material can be imported into different CMKs, but data encrypted by one CMK cannot be decrypted by another one.
Key material can only be imported into CMKs in `Enabled` and `PendingImport` status.
* @method Models\ListKeyDetailResponse ListKeyDetail(Models\ListKeyDetailRequest $req) 根据指定Offset和Limit获取主密钥列表详情。
* @method Models\ListKeysResponse ListKeys(Models\ListKeysRequest $req) This API is used to list the KeyIds of CMKs in `Enabled`, `Disabled`, and `PendingImport` status under the account.
* @method Models\ReEncryptResponse ReEncrypt(Models\ReEncryptRequest $req) 使用指定CMK对密文重新加密。
* @method Models\ScheduleKeyDeletionResponse ScheduleKeyDeletion(Models\ScheduleKeyDeletionRequest $req) CMK计划删除接口，用于指定CMK删除的时间，可选时间区间为[7,30]天
* @method Models\UpdateAliasResponse UpdateAlias(Models\UpdateAliasRequest $req) This API is used to modify the alias of a CMK. CMKs in `PendingDelete` status cannot be modified.
* @method Models\UpdateKeyDescriptionResponse UpdateKeyDescription(Models\UpdateKeyDescriptionRequest $req) This API is used to modify the description of the specified CMK. CMKs in `PendingDelete` status cannot be modified.
 */

class KmsClient extends AbstractClient
{
    protected $endpoint = "kms.tencentcloudapi.com";

    protected $version = "2019-01-18";

    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("kms")."\\"."V20190118\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
