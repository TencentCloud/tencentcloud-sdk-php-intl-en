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
 * @method Models\CreateGameServerSessionResponse CreateGameServerSession(Models\CreateGameServerSessionRequest $req) This API is used to create a game server session.
 * @method Models\DescribeGameServerSessionDetailsResponse DescribeGameServerSessionDetails(Models\DescribeGameServerSessionDetailsRequest $req) This API is used to query the list of game server session details.
 * @method Models\DescribeGameServerSessionPlacementResponse DescribeGameServerSessionPlacement(Models\DescribeGameServerSessionPlacementRequest $req) This API is used to query the placement of a game server session.
 * @method Models\DescribeGameServerSessionsResponse DescribeGameServerSessions(Models\DescribeGameServerSessionsRequest $req) This API is used to query the list of game server sessions.
 * @method Models\DescribePlayerSessionsResponse DescribePlayerSessions(Models\DescribePlayerSessionsRequest $req) This API is used to get the list of player sessions.
 * @method Models\GetGameServerSessionLogUrlResponse GetGameServerSessionLogUrl(Models\GetGameServerSessionLogUrlRequest $req) This API is used to get the log URL of a game server session.
 * @method Models\GetInstanceAccessResponse GetInstanceAccess(Models\GetInstanceAccessRequest $req) This API is used to get the credentials required for instance login.
 * @method Models\JoinGameServerSessionResponse JoinGameServerSession(Models\JoinGameServerSessionRequest $req) This API is used to join a game server session.
 * @method Models\SearchGameServerSessionsResponse SearchGameServerSessions(Models\SearchGameServerSessionsRequest $req) This API is used to search in the list of game server sessions.
 * @method Models\StartGameServerSessionPlacementResponse StartGameServerSessionPlacement(Models\StartGameServerSessionPlacementRequest $req) This API is used to start placing a game server session.
 * @method Models\StopGameServerSessionPlacementResponse StopGameServerSessionPlacement(Models\StopGameServerSessionPlacementRequest $req) This API is used to stop placing a game server session.
 * @method Models\UpdateGameServerSessionResponse UpdateGameServerSession(Models\UpdateGameServerSessionRequest $req) This API is used to update a game server session.
 */

class GseClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "gse.tencentcloudapi.com";

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
