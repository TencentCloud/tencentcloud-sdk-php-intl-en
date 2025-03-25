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

namespace TencentCloud\Gpm\V20200820;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Gpm\V20200820\Models as Models;

/**
 * @method Models\CancelMatchingResponse CancelMatching(Models\CancelMatchingRequest $req) This API is used to cancel matching.
 * @method Models\CreateMatchResponse CreateMatch(Models\CreateMatchRequest $req) This API is used to create a match.
 * @method Models\CreateRuleResponse CreateRule(Models\CreateRuleRequest $req) This API is used to create a rule.
 * @method Models\DeleteMatchResponse DeleteMatch(Models\DeleteMatchRequest $req) This API is used to delete a match.
 * @method Models\DeleteRuleResponse DeleteRule(Models\DeleteRuleRequest $req) This API is used to delete a rule.
 * @method Models\DescribeDataResponse DescribeData(Models\DescribeDataRequest $req) This API is used to view statistics.
 * @method Models\DescribeMatchResponse DescribeMatch(Models\DescribeMatchRequest $req) This API is used to query the matchmaking details.
 * @method Models\DescribeMatchCodesResponse DescribeMatchCodes(Models\DescribeMatchCodesRequest $req) This API is used to query the created MatchCodes and paginate the query result.
 * @method Models\DescribeMatchesResponse DescribeMatches(Models\DescribeMatchesRequest $req) This API is used to query the matchmaking list and paginate the query result.
 * @method Models\DescribeMatchingProgressResponse DescribeMatchingProgress(Models\DescribeMatchingProgressRequest $req) This API is used to query the matching progress.
 * @method Models\DescribeRuleResponse DescribeRule(Models\DescribeRuleRequest $req) This API is used to query the rule details.
 * @method Models\DescribeRulesResponse DescribeRules(Models\DescribeRulesRequest $req) This API is used to query the rule set list and paginate the query result.
 * @method Models\DescribeTokenResponse DescribeToken(Models\DescribeTokenRequest $req) This API is used to query the token of a Matchcode, which is used for verified the pushed message.
 * @method Models\ModifyMatchResponse ModifyMatch(Models\ModifyMatchRequest $req) This API is used to modify a match.
 * @method Models\ModifyRuleResponse ModifyRule(Models\ModifyRuleRequest $req) This API is used to modify a rule (including description and tag).
 * @method Models\ModifyTokenResponse ModifyToken(Models\ModifyTokenRequest $req) This API is used to modify the token of a Matchcode.
 * @method Models\StartMatchingResponse StartMatching(Models\StartMatchingRequest $req) This API is used to pass in one player or multiple players to initiate match. Players within the same request will be assigned to the same game session.
 * @method Models\StartMatchingBackfillResponse StartMatchingBackfill(Models\StartMatchingBackfillRequest $req) This API is used to send a match backfill request, for which a MatchTicket will be searched to start a new match.
 */

class GpmClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "gpm.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "gpm";

    /**
     * @var string
     */
    protected $version = "2020-08-20";

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
        $respClass = "TencentCloud"."\\".ucfirst("gpm")."\\"."V20200820\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
