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

namespace TencentCloud\Cloudaudit\V20190319;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cloudaudit\V20190319\Models as Models;

/**
 * @method Models\CreateAuditResponse CreateAudit(Models\CreateAuditRequest $req) Parameter requirements:
1. If the value of `IsCreateNewBucket` exists, `cosRegion` and `osBucketName` are required.
2. If the value of `IsEnableCmqNotify` is 1, `IsCreateNewQueue`, `CmqRegion`, and `CmqQueueName` are required.
3. If the value of `IsEnableCmqNotify` is 0, `IsCreateNewQueue`, `CmqRegion`, and `CmqQueueName` cannot be passed in.
4. If the value of `IsEnableKmsEncry` is 1, `KmsRegion` and `KeyId` are required.
 * @method Models\CreateAuditTrackResponse CreateAuditTrack(Models\CreateAuditTrackRequest $req) This API is used to create a tracking set.
 * @method Models\DeleteAuditResponse DeleteAudit(Models\DeleteAuditRequest $req) This API is used to delete a tracking set.
 * @method Models\DeleteAuditTrackResponse DeleteAuditTrack(Models\DeleteAuditTrackRequest $req) This API is used to delete a CloudAudit tracking set.
 * @method Models\DescribeAuditResponse DescribeAudit(Models\DescribeAuditRequest $req) This API is used to query the details of a tracking set.
 * @method Models\DescribeAuditTrackResponse DescribeAuditTrack(Models\DescribeAuditTrackRequest $req) This API is used to query the CloudAudit tracking set details.
 * @method Models\DescribeAuditTracksResponse DescribeAuditTracks(Models\DescribeAuditTracksRequest $req) This API is used to query the CloudAudit tracking set list.
 * @method Models\DescribeEventsResponse DescribeEvents(Models\DescribeEventsRequest $req) This API is used to query CloudAudit logs.
 * @method Models\GetAttributeKeyResponse GetAttributeKey(Models\GetAttributeKeyRequest $req) This API is used to query the valid values of `AttributeKey`.
 * @method Models\InquireAuditCreditResponse InquireAuditCredit(Models\InquireAuditCreditRequest $req) This API is used to query the number of tracking sets that can be created.
 * @method Models\ListAuditsResponse ListAudits(Models\ListAuditsRequest $req) This API is used to query the summary of tracking sets.
 * @method Models\ListCmqEnableRegionResponse ListCmqEnableRegion(Models\ListCmqEnableRegionRequest $req) This API is used to query CloudAudit-enabled CMQ AZs.
 * @method Models\ListCosEnableRegionResponse ListCosEnableRegion(Models\ListCosEnableRegionRequest $req) This API is used to query CloudAudit-enabled COS AZs.
 * @method Models\LookUpEventsResponse LookUpEvents(Models\LookUpEventsRequest $req) This API is used to search for operation logs to help query relevant operation information.
 * @method Models\ModifyAuditTrackResponse ModifyAuditTrack(Models\ModifyAuditTrackRequest $req) This API is used to modify a CloudAudit tracking set.
 * @method Models\StartLoggingResponse StartLogging(Models\StartLoggingRequest $req) This API is used to enable a tracking set.
 * @method Models\StopLoggingResponse StopLogging(Models\StopLoggingRequest $req) This API is used to disable a tracking set.
 * @method Models\UpdateAuditResponse UpdateAudit(Models\UpdateAuditRequest $req) Parameter requirements:
1. If the value of `IsCreateNewBucket` exists, `cosRegion` and `osBucketName` are required.
2. If the value of `IsEnableCmqNotify` is 1, `IsCreateNewQueue`, `CmqRegion`, and `CmqQueueName` are required.
3. If the value of `IsEnableCmqNotify` is 0, `IsCreateNewQueue`, `CmqRegion`, and `CmqQueueName` cannot be passed in.
4. If the value of `IsEnableKmsEncry` is 1, `KmsRegion` and `KeyId` are required.
 */

class CloudauditClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cloudaudit.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cloudaudit";

    /**
     * @var string
     */
    protected $version = "2019-03-19";

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
        $respClass = "TencentCloud"."\\".ucfirst("cloudaudit")."\\"."V20190319\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
