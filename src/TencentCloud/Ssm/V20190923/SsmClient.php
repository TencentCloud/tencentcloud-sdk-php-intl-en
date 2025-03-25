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

namespace TencentCloud\Ssm\V20190923;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ssm\V20190923\Models as Models;

/**
 * @method Models\CreateProductSecretResponse CreateProductSecret(Models\CreateProductSecretRequest $req) This API is used to create a Tencent Cloud service credential.
 * @method Models\CreateSSHKeyPairSecretResponse CreateSSHKeyPairSecret(Models\CreateSSHKeyPairSecretRequest $req) This API is used to create a secret that hosts SSH keys.
 * @method Models\CreateSecretResponse CreateSecret(Models\CreateSecretRequest $req) This API is used to create a KMS-encrypted Secret. You can create and store up to 1,000 Secrets in each region.
 * @method Models\DeleteSecretResponse DeleteSecret(Models\DeleteSecretRequest $req) This API is used to delete a Secret. You can set whether to delete the Secret immediately or on schedule using the `RecoveryWindowInDays` parameter. For a Secret to be deleted on schedule, its status will be `PendingDelete` before the scheduled deletion time. You can use `RestoreSecret` to restore a deleted Secret during this time. A deleted Secret will not be restorable after the scheduled deletion time. A Secret can only be deleted after being disabled using `DisableSecret`.
 * @method Models\DeleteSecretVersionResponse DeleteSecretVersion(Models\DeleteSecretVersionRequest $req) This API is used to directly delete a single credential version under the specified credential. The deletion takes effect immediately, and the credential version in all status can be deleted.
This API is only applicable to user-defined credentials but not Tencent Cloud service credentials.
 * @method Models\DescribeAsyncRequestInfoResponse DescribeAsyncRequestInfo(Models\DescribeAsyncRequestInfoRequest $req) This API is used to query the execution result of an async task.
 * @method Models\DescribeRotationDetailResponse DescribeRotationDetail(Models\DescribeRotationDetailRequest $req) This API is used to query the details of a credential rotation policy.
This API is only applicable to Tencent Cloud service credentials.
 * @method Models\DescribeRotationHistoryResponse DescribeRotationHistory(Models\DescribeRotationHistoryRequest $req) This API is used to query the historical versions of a rotated credential.
This API is only applicable to Tencent Cloud service credentials.
 * @method Models\DescribeSecretResponse DescribeSecret(Models\DescribeSecretRequest $req) This API is used to obtain the detailed attribute information of a Secret.
 * @method Models\DescribeSupportedProductsResponse DescribeSupportedProducts(Models\DescribeSupportedProductsRequest $req) This API is used to query the list of supported Tencent Cloud services.
 * @method Models\DisableSecretResponse DisableSecret(Models\DisableSecretRequest $req) This API is used to disable a Secret and will change its status to `Disabled`. The plaintext of a disabled Secret cannot be obtained through APIs.
 * @method Models\EnableSecretResponse EnableSecret(Models\EnableSecretRequest $req) This API is used to enable a Secret and will change its status to `Enabled`. You can call the `GetSecretValue` API to obtain the plaintext of this Secret. Secrets in `PendingDelete` status can only be enabled after being restored by using `RestoreSecret`.
 * @method Models\GetRegionsResponse GetRegions(Models\GetRegionsRequest $req) This API is used to obtain the list of regions displayed on Console.
 * @method Models\GetSSHKeyPairValueResponse GetSSHKeyPairValue(Models\GetSSHKeyPairValueRequest $req) This API is used to obtain the plaintext value of the SSH key secret.
 * @method Models\GetSecretValueResponse GetSecretValue(Models\GetSecretValueRequest $req) For user-defined credentials, this API is used to get the plaintext information of a credential by specifying the credential name and version.
For Tencent Cloud service credentials such as MySQL credentials, this API is used to get the plaintext information of a previously rotated credential by specifying the credential name and historical version number. If you want to get the plaintext of the credential version currently in use, you need to specify the version number as `SSM_Current`.
 * @method Models\GetServiceStatusResponse GetServiceStatus(Models\GetServiceStatusRequest $req) This API is used to obtain the SecretsManager service status of a user.
 * @method Models\ListSecretVersionIdsResponse ListSecretVersionIds(Models\ListSecretVersionIdsRequest $req) This API is used to obtain list of versions of a Secret.
 * @method Models\ListSecretsResponse ListSecrets(Models\ListSecretsRequest $req) This API is used to obtain the detailed information list of all Secrets. You can specify the filter fields and sorting order as needed.
 * @method Models\PutSecretValueResponse PutSecretValue(Models\PutSecretValueRequest $req) This API adds the new version of the credential content under the specified credential. One credential can have up to 10 versions. New versions can be added to credentials only in `Enabled` or `Disabled` status.
This API is only applicable to user-defined credentials but not Tencent Cloud service credentials.
 * @method Models\RestoreSecretResponse RestoreSecret(Models\RestoreSecretRequest $req) This API is used to restore a `PendingDelete` Secret, canceling its scheduled deletion. The restored Secret will be in `Disabled` status. You can call the `EnableSecret` API to enable this Secret again.
 * @method Models\RotateProductSecretResponse RotateProductSecret(Models\RotateProductSecretRequest $req) This API is used to rotate secrets for Tencent Cloud services or Tencent Cloud API key pairs.
Note that only the secrets with the "Enabled" status can be rotated.
 * @method Models\UpdateDescriptionResponse UpdateDescription(Models\UpdateDescriptionRequest $req) This API is used to update the description of a Secret. This API can only update Secrets in `Enabled` or `Disabled` status.
 * @method Models\UpdateRotationStatusResponse UpdateRotationStatus(Models\UpdateRotationStatusRequest $req) This API is used to set a Tencent Cloud service credential rotation policy, including the following parameters:
Specifies whether to enable rotation
Rotation frequency
Rotation start time
 * @method Models\UpdateSecretResponse UpdateSecret(Models\UpdateSecretRequest $req) This API is used to update the credential content of the specified credential name and version number. Calling this API will encrypt the content of the new credential and overwrite the old content. Only credentials in `Enabled` or `Disabled` status can be updated.
This API is only applicable to user-defined credentials but not Tencent Cloud service credentials.
 */

class SsmClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ssm.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ssm";

    /**
     * @var string
     */
    protected $version = "2019-09-23";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("ssm")."\\"."V20190923\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
