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
 * @method Models\CreateSecretResponse CreateSecret(Models\CreateSecretRequest $req) This API is used to create a KMS-encrypted Secret. You can create and store up to 1,000 Secrets in each region.
 * @method Models\DeleteSecretResponse DeleteSecret(Models\DeleteSecretRequest $req) This API is used to delete a Secret. You can set whether to delete the Secret immediately or on schedule using the `RecoveryWindowInDays` parameter. For a Secret to be deleted on schedule, its status will be `PendingDelete` before the scheduled deletion time. You can use `RestoreSecret` to restore a deleted Secret during this time. A deleted Secret will not be restorable after the scheduled deletion time. A Secret can only be deleted after being disabled using `DisableSecret`.
 * @method Models\DeleteSecretVersionResponse DeleteSecretVersion(Models\DeleteSecretVersionRequest $req) This API is used to delete a version of a Secret. The deletion takes effect immediately. Secret versions in any status can be deleted.
 * @method Models\DescribeSecretResponse DescribeSecret(Models\DescribeSecretRequest $req) This API is used to obtain the detailed attribute information of a Secret.
 * @method Models\DisableSecretResponse DisableSecret(Models\DisableSecretRequest $req) This API is used to disable a Secret and will change its status to `Disabled`. The plaintext of a disabled Secret cannot be obtained through APIs.
 * @method Models\EnableSecretResponse EnableSecret(Models\EnableSecretRequest $req) This API is used to enable a Secret and will change its status to `Enabled`. You can call the `GetSecretValue` API to obtain the plaintext of this Secret. Secrets in `PendingDelete` status can only be enabled after being restored by using `RestoreSecret`.
 * @method Models\GetRegionsResponse GetRegions(Models\GetRegionsRequest $req) This API is used to obtain the list of regions displayed on Console.
 * @method Models\GetSecretValueResponse GetSecretValue(Models\GetSecretValueRequest $req) This API is used to obtain the plaintext of a specified Secret and version. Only plaintext of an enabled Secret can be obtained.
 * @method Models\GetServiceStatusResponse GetServiceStatus(Models\GetServiceStatusRequest $req) This API is used to obtain the SecretsManager service status of a user.
 * @method Models\ListSecretVersionIdsResponse ListSecretVersionIds(Models\ListSecretVersionIdsRequest $req) This API is used to obtain list of versions of a Secret.
 * @method Models\ListSecretsResponse ListSecrets(Models\ListSecretsRequest $req) This API is used to obtain the detailed information list of all Secrets. You can specify the filter fields and sorting order as needed.
 * @method Models\PutSecretValueResponse PutSecretValue(Models\PutSecretValueRequest $req) This API is used to add a new version to a specified Secret. Each Secret supports up to 10 versions. You can only add versions to Secrets in `Enabled` or `Disabled` status.
 * @method Models\RestoreSecretResponse RestoreSecret(Models\RestoreSecretRequest $req) This API is used to restore a `PendingDelete` Secret, canceling its scheduled deletion. The restored Secret will be in `Disabled` status. You can call the `EnableSecret` API to enable this Secret again.
 * @method Models\UpdateDescriptionResponse UpdateDescription(Models\UpdateDescriptionRequest $req) This API is used to update the description of a Secret. This API can only update Secrets in `Enabled` or `Disabled` status.
 * @method Models\UpdateSecretResponse UpdateSecret(Models\UpdateSecretRequest $req) This API is used to update the name and version ID of a Secret. Calling this API encrypts the new Secret content and overwrites the old content. This API can only update Secrets in `Enabled` or `Disabled` status.
 */

class SsmClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ssm.tencentcloudapi.com";

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
