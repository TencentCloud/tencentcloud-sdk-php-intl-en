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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePlayerSessions request structure.
 *
 * @method string getGameServerSessionId() Obtain Game server session ID. It should contain 1 to 48 ASCII characters.
 * @method void setGameServerSessionId(string $GameServerSessionId) Set Game server session ID. It should contain 1 to 48 ASCII characters.
 * @method integer getLimit() Obtain Maximum number of entries in a single query
 * @method void setLimit(integer $Limit) Set Maximum number of entries in a single query
 * @method string getNextToken() Obtain Pagination offset, which is used for querying the next page. It should contain 1 to 1024 ASCII characters.
 * @method void setNextToken(string $NextToken) Set Pagination offset, which is used for querying the next page. It should contain 1 to 1024 ASCII characters.
 * @method string getPlayerId() Obtain Player ID. It should contain 1 to 1024 ASCII characters.
 * @method void setPlayerId(string $PlayerId) Set Player ID. It should contain 1 to 1024 ASCII characters.
 * @method string getPlayerSessionId() Obtain Player session ID. It should contain 1 to 1024 ASCII characters.
 * @method void setPlayerSessionId(string $PlayerSessionId) Set Player session ID. It should contain 1 to 1024 ASCII characters.
 * @method string getPlayerSessionStatusFilter() Obtain Player session status. Valid values: RESERVED, ACTIVE, COMPLETED, TIMEDOUT
 * @method void setPlayerSessionStatusFilter(string $PlayerSessionStatusFilter) Set Player session status. Valid values: RESERVED, ACTIVE, COMPLETED, TIMEDOUT
 */
class DescribePlayerSessionsRequest extends AbstractModel
{
    /**
     * @var string Game server session ID. It should contain 1 to 48 ASCII characters.
     */
    public $GameServerSessionId;

    /**
     * @var integer Maximum number of entries in a single query
     */
    public $Limit;

    /**
     * @var string Pagination offset, which is used for querying the next page. It should contain 1 to 1024 ASCII characters.
     */
    public $NextToken;

    /**
     * @var string Player ID. It should contain 1 to 1024 ASCII characters.
     */
    public $PlayerId;

    /**
     * @var string Player session ID. It should contain 1 to 1024 ASCII characters.
     */
    public $PlayerSessionId;

    /**
     * @var string Player session status. Valid values: RESERVED, ACTIVE, COMPLETED, TIMEDOUT
     */
    public $PlayerSessionStatusFilter;

    /**
     * @param string $GameServerSessionId Game server session ID. It should contain 1 to 48 ASCII characters.
     * @param integer $Limit Maximum number of entries in a single query
     * @param string $NextToken Pagination offset, which is used for querying the next page. It should contain 1 to 1024 ASCII characters.
     * @param string $PlayerId Player ID. It should contain 1 to 1024 ASCII characters.
     * @param string $PlayerSessionId Player session ID. It should contain 1 to 1024 ASCII characters.
     * @param string $PlayerSessionStatusFilter Player session status. Valid values: RESERVED, ACTIVE, COMPLETED, TIMEDOUT
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
        if (array_key_exists("GameServerSessionId",$param) and $param["GameServerSessionId"] !== null) {
            $this->GameServerSessionId = $param["GameServerSessionId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("PlayerId",$param) and $param["PlayerId"] !== null) {
            $this->PlayerId = $param["PlayerId"];
        }

        if (array_key_exists("PlayerSessionId",$param) and $param["PlayerSessionId"] !== null) {
            $this->PlayerSessionId = $param["PlayerSessionId"];
        }

        if (array_key_exists("PlayerSessionStatusFilter",$param) and $param["PlayerSessionStatusFilter"] !== null) {
            $this->PlayerSessionStatusFilter = $param["PlayerSessionStatusFilter"];
        }
    }
}
