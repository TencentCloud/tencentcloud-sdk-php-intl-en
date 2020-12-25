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
 * SearchGameServerSessions request structure.
 *
 * @method string getAliasId() Obtain Alias ID
 * @method void setAliasId(string $AliasId) Set Alias ID
 * @method string getFleetId() Obtain Fleet ID
 * @method void setFleetId(string $FleetId) Set Fleet ID
 * @method integer getLimit() Obtain Maximum number of entries in a single query
 * @method void setLimit(integer $Limit) Set Maximum number of entries in a single query
 * @method string getNextToken() Obtain Pagination offset, which is used for querying the next page. It should contain 1 to 1024 ASCII characters.
 * @method void setNextToken(string $NextToken) Set Pagination offset, which is used for querying the next page. It should contain 1 to 1024 ASCII characters.
 * @method string getFilterExpression() Obtain Search filter expression. Valid values:
gameServerSessionName: game session name in `String` type
gameServerSessionId: game session ID in `String` type
maximumSessions: maximum number of player sessions in `Number` type
creationTimeMillis: creation time in milliseconds in `Number` type
playerSessionCount: current number of player sessions in `Number` type
hasAvailablePlayerSessions: whether there is available player session in `String` type. Valid values: true, false
gameServerSessionProperties: game session attributes in `String` type

Expressions in `String` type support = and <> for judgment
Expressions in `Number` type support =, <>, >, >=, <, and <= for judgment

Example:
If FilterExpression takes the value:
playerSessionCount>=2 AND hasAvailablePlayerSessions=true"
It means searching for game sessions that have at least two players and have player sessions available.
If FilterExpression takes the value:
gameServerSessionProperties.K1 = 'V1' AND gameServerSessionProperties.K2 = 'V2' OR gameServerSessionProperties.K3 = 'V3'

it means
searching for game sessions that meets the following game server session attributes
{
    "GameProperties":[
        {
            "Key":"K1",
            "Value":"V1"
        },
        {
            "Key":"K2",
            "Value":"V2"
        },
        {
            "Key":"K3",
            "Value":"V3"
        }
    ]
}
 * @method void setFilterExpression(string $FilterExpression) Set Search filter expression. Valid values:
gameServerSessionName: game session name in `String` type
gameServerSessionId: game session ID in `String` type
maximumSessions: maximum number of player sessions in `Number` type
creationTimeMillis: creation time in milliseconds in `Number` type
playerSessionCount: current number of player sessions in `Number` type
hasAvailablePlayerSessions: whether there is available player session in `String` type. Valid values: true, false
gameServerSessionProperties: game session attributes in `String` type

Expressions in `String` type support = and <> for judgment
Expressions in `Number` type support =, <>, >, >=, <, and <= for judgment

Example:
If FilterExpression takes the value:
playerSessionCount>=2 AND hasAvailablePlayerSessions=true"
It means searching for game sessions that have at least two players and have player sessions available.
If FilterExpression takes the value:
gameServerSessionProperties.K1 = 'V1' AND gameServerSessionProperties.K2 = 'V2' OR gameServerSessionProperties.K3 = 'V3'

it means
searching for game sessions that meets the following game server session attributes
{
    "GameProperties":[
        {
            "Key":"K1",
            "Value":"V1"
        },
        {
            "Key":"K2",
            "Value":"V2"
        },
        {
            "Key":"K3",
            "Value":"V3"
        }
    ]
}
 * @method string getSortExpression() Obtain Sorting keyword
Valid values:
gameServerSessionName: game session name in `String` type
gameServerSessionId: game session ID in `String` type
maximumSessions: maximum number of player sessions in `Number` type
creationTimeMillis: creation time in milliseconds in `Number` type
playerSessionCount: current number of player sessions in `Number` type
 * @method void setSortExpression(string $SortExpression) Set Sorting keyword
Valid values:
gameServerSessionName: game session name in `String` type
gameServerSessionId: game session ID in `String` type
maximumSessions: maximum number of player sessions in `Number` type
creationTimeMillis: creation time in milliseconds in `Number` type
playerSessionCount: current number of player sessions in `Number` type
 */
class SearchGameServerSessionsRequest extends AbstractModel
{
    /**
     * @var string Alias ID
     */
    public $AliasId;

    /**
     * @var string Fleet ID
     */
    public $FleetId;

    /**
     * @var integer Maximum number of entries in a single query
     */
    public $Limit;

    /**
     * @var string Pagination offset, which is used for querying the next page. It should contain 1 to 1024 ASCII characters.
     */
    public $NextToken;

    /**
     * @var string Search filter expression. Valid values:
gameServerSessionName: game session name in `String` type
gameServerSessionId: game session ID in `String` type
maximumSessions: maximum number of player sessions in `Number` type
creationTimeMillis: creation time in milliseconds in `Number` type
playerSessionCount: current number of player sessions in `Number` type
hasAvailablePlayerSessions: whether there is available player session in `String` type. Valid values: true, false
gameServerSessionProperties: game session attributes in `String` type

Expressions in `String` type support = and <> for judgment
Expressions in `Number` type support =, <>, >, >=, <, and <= for judgment

Example:
If FilterExpression takes the value:
playerSessionCount>=2 AND hasAvailablePlayerSessions=true"
It means searching for game sessions that have at least two players and have player sessions available.
If FilterExpression takes the value:
gameServerSessionProperties.K1 = 'V1' AND gameServerSessionProperties.K2 = 'V2' OR gameServerSessionProperties.K3 = 'V3'

it means
searching for game sessions that meets the following game server session attributes
{
    "GameProperties":[
        {
            "Key":"K1",
            "Value":"V1"
        },
        {
            "Key":"K2",
            "Value":"V2"
        },
        {
            "Key":"K3",
            "Value":"V3"
        }
    ]
}
     */
    public $FilterExpression;

    /**
     * @var string Sorting keyword
Valid values:
gameServerSessionName: game session name in `String` type
gameServerSessionId: game session ID in `String` type
maximumSessions: maximum number of player sessions in `Number` type
creationTimeMillis: creation time in milliseconds in `Number` type
playerSessionCount: current number of player sessions in `Number` type
     */
    public $SortExpression;

    /**
     * @param string $AliasId Alias ID
     * @param string $FleetId Fleet ID
     * @param integer $Limit Maximum number of entries in a single query
     * @param string $NextToken Pagination offset, which is used for querying the next page. It should contain 1 to 1024 ASCII characters.
     * @param string $FilterExpression Search filter expression. Valid values:
gameServerSessionName: game session name in `String` type
gameServerSessionId: game session ID in `String` type
maximumSessions: maximum number of player sessions in `Number` type
creationTimeMillis: creation time in milliseconds in `Number` type
playerSessionCount: current number of player sessions in `Number` type
hasAvailablePlayerSessions: whether there is available player session in `String` type. Valid values: true, false
gameServerSessionProperties: game session attributes in `String` type

Expressions in `String` type support = and <> for judgment
Expressions in `Number` type support =, <>, >, >=, <, and <= for judgment

Example:
If FilterExpression takes the value:
playerSessionCount>=2 AND hasAvailablePlayerSessions=true"
It means searching for game sessions that have at least two players and have player sessions available.
If FilterExpression takes the value:
gameServerSessionProperties.K1 = 'V1' AND gameServerSessionProperties.K2 = 'V2' OR gameServerSessionProperties.K3 = 'V3'

it means
searching for game sessions that meets the following game server session attributes
{
    "GameProperties":[
        {
            "Key":"K1",
            "Value":"V1"
        },
        {
            "Key":"K2",
            "Value":"V2"
        },
        {
            "Key":"K3",
            "Value":"V3"
        }
    ]
}
     * @param string $SortExpression Sorting keyword
Valid values:
gameServerSessionName: game session name in `String` type
gameServerSessionId: game session ID in `String` type
maximumSessions: maximum number of player sessions in `Number` type
creationTimeMillis: creation time in milliseconds in `Number` type
playerSessionCount: current number of player sessions in `Number` type
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
        if (array_key_exists("AliasId",$param) and $param["AliasId"] !== null) {
            $this->AliasId = $param["AliasId"];
        }

        if (array_key_exists("FleetId",$param) and $param["FleetId"] !== null) {
            $this->FleetId = $param["FleetId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("FilterExpression",$param) and $param["FilterExpression"] !== null) {
            $this->FilterExpression = $param["FilterExpression"];
        }

        if (array_key_exists("SortExpression",$param) and $param["SortExpression"] !== null) {
            $this->SortExpression = $param["SortExpression"];
        }
    }
}
