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

namespace TencentCloud\Tokenhub\V20260322;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tokenhub\V20260322\Models as Models;

/**
 * @method Models\CreateApiKeyResponse CreateApiKey(Models\CreateApiKeyRequest $req) Create an API key.

Create a new API key. Upon successful creation, return the API Key ID. Specify the platform kind, binding method, and initial state.
 * @method Models\CreateGlossaryResponse CreateGlossary(Models\CreateGlossaryRequest $req) Create a Termbase.

Create a new Termbase in this application for custom definition source to target language terminology mapping. Return the Termbase ID upon success, which can be used to carry out other management operations on terminology entries.
 * @method Models\CreateGlossaryEntriesResponse CreateGlossaryEntries(Models\CreateGlossaryEntriesRequest $req) Create terminology entries in batches.

Create terminology entries in batches under the designated Termbase. You can create up to 100 entries at a time.
 * @method Models\CreateTokenPlanApiKeysResponse CreateTokenPlanApiKeys(Models\CreateTokenPlanApiKeysRequest $req) Batch create TokenPlan API Keys.

Import a name prefix and quantity to automatically generate names in the `{Api Key Name}-{serial number}` format (for example, aaa-1, aaa-2). Duplicate names are allowed. Partial success is supported for up to 100 entries.
 * @method Models\CreateTokenPlanTeamOrderAndBuyResponse CreateTokenPlanTeamOrderAndBuy(Models\CreateTokenPlanTeamOrderAndBuyRequest $req) Purchase a package (This API is also used to reactivate and renew expired packages. The teamId of the expired package is required. After the renewal is successful, the total cycle count of the package will include historical cycles. The actual effective cycle of the package is determined by the effective time and expiration time.)

Initiate an order for a TokenPlan package and complete payment. Return the order ID and associated sub-orders and resource information upon success.
 * @method Models\DeleteApiKeyResponse DeleteApiKey(Models\DeleteApiKeyRequest $req) This API is used to delete specified api keys and clean up associated model binding relationships.
 * @method Models\DeleteGlossaryResponse DeleteGlossary(Models\DeleteGlossaryRequest $req) Delete a termbase.

This API is used to delete specified Termbase and ALL terminology entries under it. The deletion is idempotent and returns a successful result for non-existing Termbase. After calling the API, if the corresponding Termbase cannot be found via DescribeGlossaries, it indicates successful deletion.
 * @method Models\DeleteGlossaryEntriesResponse DeleteGlossaryEntries(Models\DeleteGlossaryEntriesRequest $req) Delete terminology entries in batches.

Delete terminology entries in batches under the specified Termbase. You can delete up to 200 entries at a time. If the Termbase is nonexistent or NOT_IN this application, it returns a ResourceNotFound error.
 * @method Models\DeleteTokenPlanApiKeyResponse DeleteTokenPlanApiKey(Models\DeleteTokenPlanApiKeyRequest $req) Delete the Token Plan API key.

Simultaneously delete the limit center sub-limit package and notify the Notification Gateway to purge cache.
 * @method Models\DescribeApiKeyResponse DescribeApiKey(Models\DescribeApiKeyRequest $req) This API is used to query API Key details based on API Key ID or key value, and return the plaintext key. At least one of ApiKeyId and ApiKey must be input, with priority given to ApiKeyId.
 * @method Models\DescribeApiKeyListResponse DescribeApiKeyList(Models\DescribeApiKeyListRequest $req) Query API key list.

Query the API key list of the current user with key values in masking display. Support pagination, filtering, and sorting.
 * @method Models\DescribeGlossariesResponse DescribeGlossaries(Models\DescribeGlossariesRequest $req) Query the terminology repository list.

Query the Termbase list under this application. Support paginate, filter, and sort.
 * @method Models\DescribeGlossaryEntriesResponse DescribeGlossaryEntries(Models\DescribeGlossaryEntriesRequest $req) Query the terminology entry list.

Query specified entries in a Termbase. Support pagination.
 * @method Models\DescribeTokenPlanResponse DescribeTokenPlan(Models\DescribeTokenPlanRequest $req) Query the TokenPlan package details.

Return the package basic info and the remaining quota of the package.
 * @method Models\DescribeTokenPlanApiKeyResponse DescribeTokenPlanApiKey(Models\DescribeTokenPlanApiKeyRequest $req) Query TokenPlan APIKey details.

Return the complete APIKey information (including the plaintext key) and the remaining quota of the sub-quota package.
 * @method Models\DescribeTokenPlanApiKeyListResponse DescribeTokenPlanApiKeyList(Models\DescribeTokenPlanApiKeyListRequest $req) Query the list of Token Plan API keys.

Returns the API key list under a specified package. Keys are masked. Root accounts can view all keys, while sub-accounts can only view keys created by themselves.
 * @method Models\DescribeTokenPlanApiKeySecretResponse DescribeTokenPlanApiKeySecret(Models\DescribeTokenPlanApiKeySecretRequest $req) Query the TokenPlan APIKey (plaintext).

Return the plaintext key value of the designated APIKey. Keep it safe.
 * @method Models\DescribeTokenPlanApiKeyUsageDetailResponse DescribeTokenPlanApiKeyUsageDetail(Models\DescribeTokenPlanApiKeyUsageDetailRequest $req) Query the Token Plan APIKey call detail.

This API is used to query call details under a package from CLS log service, filter by team_id, and support cursor-based pagination.
 * @method Models\DescribeTokenPlanListResponse DescribeTokenPlanList(Models\DescribeTokenPlanListRequest $req) Query the list of Token Plan package options.

Supports pagination, filtering, and sorting. Root accounts can view all packages, while sub-accounts can only view packages created by themselves. Returned results include the main limit package details associated with each package in the limit center.
 * @method Models\ModifyApiKeyInfoResponse ModifyApiKeyInfo(Models\ModifyApiKeyInfoRequest $req) Refresh API key information.

This API is used to update the remark information, IP allowlist and Token quota of an API key (recommended to use QuotaDesired parameter for quota modification). Passing no optional parameters means no modification.
 * @method Models\ModifyApiKeyStatusResponse ModifyApiKeyStatus(Models\ModifyApiKeyStatusRequest $req) This API is used to enable or disable the status of an api key.
 * @method Models\ModifyGlossaryEntriesResponse ModifyGlossaryEntries(Models\ModifyGlossaryEntriesRequest $req) Batch modify terminology entries.

This API is used to batch modify terminology entries in a designated Termbase. You can modify up to 200 entries at a time.
 * @method Models\ModifyTokenPlanApiKeyResponse ModifyTokenPlanApiKey(Models\ModifyTokenPlanApiKeyRequest $req) Modify the Token Plan APIKey configuration (field that the gateway focuses on).

After modification, automatically notify the gateway to update the cache and sync the limit center.
 * @method Models\ModifyTokenPlanApiKeySecretResponse ModifyTokenPlanApiKeySecret(Models\ModifyTokenPlanApiKeySecretRequest $req) Reset the TokenPlan API Key.

Regenerate the key value. The key version increments and the old key expires immediately. The API Key ID remains unchanged. After resetting, the new key can be queried through DescribeTokenPlanApiKeySecret.
 * @method Models\RenewTokenPlanTeamOrderResponse RenewTokenPlanTeamOrder(Models\RenewTokenPlanTeamOrderRequest $req) Renew a package.

Initiate a renewal order for an existing Token Plan package and complete payment. Return the order ID and associated sub-orders and resource information upon success.
 * @method Models\UpgradeTokenPlanTeamOrderResponse UpgradeTokenPlanTeamOrder(Models\UpgradeTokenPlanTeamOrderRequest $req) Upgrade the package.

Initiate an upgrade order for an existing Token Plan package and complete payment to expand point or token limits. Return the order ID and associated sub-orders and resource information upon success. The new limit must be greater than the current limit.
 */

class TokenhubClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tokenhub.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tokenhub";

    /**
     * @var string
     */
    protected $version = "2026-03-22";

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
        $respClass = "TencentCloud"."\\".ucfirst("tokenhub")."\\"."V20260322\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
