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
 * DescribeGameServerSessionDetails request structure.
 *
 * @method string getAliasId() Obtain Alias ID
 * @method void setAliasId(string $AliasId) Set Alias ID
 * @method string getFleetId() Obtain Fleet ID
 * @method void setFleetId(string $FleetId) Set Fleet ID
 * @method string getGameServerSessionId() Obtain Game server session ID. It should contain 1 to 48 ASCII characters.
 * @method void setGameServerSessionId(string $GameServerSessionId) Set Game server session ID. It should contain 1 to 48 ASCII characters.
 * @method integer getLimit() Obtain Maximum number of entries in a single query
 * @method void setLimit(integer $Limit) Set Maximum number of entries in a single query
 * @method string getNextToken() Obtain Pagination offset, which is used for querying the next page. It should contain 1 to 1024 ASCII characters.
 * @method void setNextToken(string $NextToken) Set Pagination offset, which is used for querying the next page. It should contain 1 to 1024 ASCII characters.
 * @method string getStatusFilter() Obtain Game server session status. Valid values: ACTIVE, ACTIVATING, TERMINATED, TERMINATING, ERROR
 * @method void setStatusFilter(string $StatusFilter) Set Game server session status. Valid values: ACTIVE, ACTIVATING, TERMINATED, TERMINATING, ERROR
 */
class DescribeGameServerSessionDetailsRequest extends AbstractModel
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
     * @var string Game server session status. Valid values: ACTIVE, ACTIVATING, TERMINATED, TERMINATING, ERROR
     */
    public $StatusFilter;

    /**
     * @param string $AliasId Alias ID
     * @param string $FleetId Fleet ID
     * @param string $GameServerSessionId Game server session ID. It should contain 1 to 48 ASCII characters.
     * @param integer $Limit Maximum number of entries in a single query
     * @param string $NextToken Pagination offset, which is used for querying the next page. It should contain 1 to 1024 ASCII characters.
     * @param string $StatusFilter Game server session status. Valid values: ACTIVE, ACTIVATING, TERMINATED, TERMINATING, ERROR
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

        if (array_key_exists("GameServerSessionId",$param) and $param["GameServerSessionId"] !== null) {
            $this->GameServerSessionId = $param["GameServerSessionId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("StatusFilter",$param) and $param["StatusFilter"] !== null) {
            $this->StatusFilter = $param["StatusFilter"];
        }
    }
}
