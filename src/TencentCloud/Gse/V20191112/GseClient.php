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

namespace TencentCloud\Gse\V20191112;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Gse\V20191112\Models as Models;

/**
 * @method Models\CopyFleetResponse CopyFleet(Models\CopyFleetRequest $req) This API is used to replicate server fleet.
 * @method Models\CreateGameServerSessionResponse CreateGameServerSession(Models\CreateGameServerSessionRequest $req) This API is used to create a game server session.
 * @method Models\DeleteTimerScalingPolicyResponse DeleteTimerScalingPolicy(Models\DeleteTimerScalingPolicyRequest $req) This API (DeleteTimerScalingPolicy) is used to delete a scheduled scaling policy of a fleet.

 * @method Models\DescribeGameServerSessionDetailsResponse DescribeGameServerSessionDetails(Models\DescribeGameServerSessionDetailsRequest $req) This API is used to query the list of game server session details.
 * @method Models\DescribeGameServerSessionPlacementResponse DescribeGameServerSessionPlacement(Models\DescribeGameServerSessionPlacementRequest $req) This API is used to query the placement of a game server session.
 * @method Models\DescribeGameServerSessionsResponse DescribeGameServerSessions(Models\DescribeGameServerSessionsRequest $req) This API is used to query the list of game server sessions.
 * @method Models\DescribeInstanceTypesResponse DescribeInstanceTypes(Models\DescribeInstanceTypesRequest $req) This API is used to obtain the list of CVM types in the specified region.
 * @method Models\DescribePlayerSessionsResponse DescribePlayerSessions(Models\DescribePlayerSessionsRequest $req) This API is used to get the list of player sessions.
 * @method Models\DescribeTimerScalingPoliciesResponse DescribeTimerScalingPolicies(Models\DescribeTimerScalingPoliciesRequest $req) This API (DescribeTimerScalingPolicies) is used to query the scheduled scaling policies of a fleet. You can query the policies by `fleetID` or the fleet name. The returned results are paged. 

 * @method Models\EndGameServerSessionAndProcessResponse EndGameServerSessionAndProcess(Models\EndGameServerSessionAndProcessRequest $req) This API is used to terminate the game server session and the corresponding process, which is applicable to time-limited protection and no protection.
 * @method Models\GetGameServerSessionLogUrlResponse GetGameServerSessionLogUrl(Models\GetGameServerSessionLogUrlRequest $req) This API is used to get the log URL of a game server session.
 * @method Models\GetInstanceAccessResponse GetInstanceAccess(Models\GetInstanceAccessRequest $req) This API is used to get the credentials required for instance login.
 * @method Models\JoinGameServerSessionResponse JoinGameServerSession(Models\JoinGameServerSessionRequest $req) This API is used to join a game server session.
 * @method Models\JoinGameServerSessionBatchResponse JoinGameServerSessionBatch(Models\JoinGameServerSessionBatchRequest $req) This API is used to join game server sessions in batch.
 * @method Models\PutTimerScalingPolicyResponse PutTimerScalingPolicy(Models\PutTimerScalingPolicyRequest $req) This API (PutTimerScalingPolicy) is used to create or update a scheduled scaling policy for a fleet.

If the field `timerID` is filled in, the specified policy will be updated, and if `timerID` is left empty, a new policy will be created.

 * @method Models\SearchGameServerSessionsResponse SearchGameServerSessions(Models\SearchGameServerSessionsRequest $req) This API is used to search in the list of game server sessions.
 * @method Models\SetServerReservedResponse SetServerReserved(Models\SetServerReservedRequest $req) This API (SetServerReserved) is used to mark the exceptional instances as retained for troubleshooting.

`ReserveValue`: specifies whether to retain the instance. Valid values: `0` (do not retain), `1` (retain). Default value: `0`.

 * @method Models\StartGameServerSessionPlacementResponse StartGameServerSessionPlacement(Models\StartGameServerSessionPlacementRequest $req) This API is used to start placing a game server session.
 * @method Models\StopGameServerSessionPlacementResponse StopGameServerSessionPlacement(Models\StopGameServerSessionPlacementRequest $req) This API is used to stop placing a game server session.
 * @method Models\UpdateBucketAccelerateOptResponse UpdateBucketAccelerateOpt(Models\UpdateBucketAccelerateOptRequest $req) This API (UpdateBucketAccelerateOpt) is used to enable COS global acceleration.
 * @method Models\UpdateBucketCORSOptResponse UpdateBucketCORSOpt(Models\UpdateBucketCORSOptRequest $req) This API (UpdateBucketCORSOpt) is used to configure CORS for COS.
 * @method Models\UpdateGameServerSessionResponse UpdateGameServerSession(Models\UpdateGameServerSessionRequest $req) This API is used to update a game server session.
 */

class GseClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "gse.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "gse";

    /**
     * @var string
     */
    protected $version = "2019-11-12";

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
        $respClass = "TencentCloud"."\\".ucfirst("gse")."\\"."V20191112\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
