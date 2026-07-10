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
 * @method Models\DeleteApiKeyResponse DeleteApiKey(Models\DeleteApiKeyRequest $req) This API is used to delete specified api keys and clean up associated model binding relationships.
 * @method Models\DeleteGlossaryResponse DeleteGlossary(Models\DeleteGlossaryRequest $req) Delete a termbase.

This API is used to delete specified Termbase and ALL terminology entries under it. The deletion is idempotent and returns a successful result for non-existing Termbase. After calling the API, if the corresponding Termbase cannot be found via DescribeGlossaries, it indicates successful deletion.
 * @method Models\DeleteGlossaryEntriesResponse DeleteGlossaryEntries(Models\DeleteGlossaryEntriesRequest $req) Delete terminology entries in batches.

Delete terminology entries in batches under the specified Termbase. You can delete up to 200 entries at a time. If the Termbase is nonexistent or NOT_IN this application, it returns a ResourceNotFound error.
 * @method Models\DescribeApiKeyResponse DescribeApiKey(Models\DescribeApiKeyRequest $req) This API is used to query API Key details based on API Key ID or key value, and return the plaintext key. At least one of ApiKeyId and ApiKey must be input, with priority given to ApiKeyId.
 * @method Models\DescribeApiKeyListResponse DescribeApiKeyList(Models\DescribeApiKeyListRequest $req) Query API key list.

Query the API key list of the current user with key values in masking display. Support pagination, filtering, and sorting.
 * @method Models\DescribeGlossariesResponse DescribeGlossaries(Models\DescribeGlossariesRequest $req) Query the terminology repository list.

Query the Termbase list under this application. Support paginate, filter, and sort.
 * @method Models\DescribeGlossaryEntriesResponse DescribeGlossaryEntries(Models\DescribeGlossaryEntriesRequest $req) Query the terminology entry list.

Query specified entries in a Termbase. Support pagination.
 * @method Models\ModifyApiKeyInfoResponse ModifyApiKeyInfo(Models\ModifyApiKeyInfoRequest $req) Refresh API key information.

This API is used to update the remark information, IP allowlist and Token quota of an API key (recommended to use QuotaDesired parameter for quota modification). Passing no optional parameters means no modification.
 * @method Models\ModifyApiKeyStatusResponse ModifyApiKeyStatus(Models\ModifyApiKeyStatusRequest $req) This API is used to enable or disable the status of an api key.
 * @method Models\ModifyGlossaryEntriesResponse ModifyGlossaryEntries(Models\ModifyGlossaryEntriesRequest $req) Batch modify terminology entries.

This API is used to batch modify terminology entries in a designated Termbase. You can modify up to 200 entries at a time.
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
