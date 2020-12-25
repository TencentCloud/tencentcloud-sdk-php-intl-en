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
 * DescribeGameServerSessions response structure.
 *
 * @method array getGameServerSessions() Obtain Game server session list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setGameServerSessions(array $GameServerSessions) Set Game server session list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getNextToken() Obtain Pagination offset, which is used for querying the next page. It should contain 1 to 1024 ASCII characters.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setNextToken(string $NextToken) Set Pagination offset, which is used for querying the next page. It should contain 1 to 1024 ASCII characters.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeGameServerSessionsResponse extends AbstractModel
{
    /**
     * @var array Game server session list
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $GameServerSessions;

    /**
     * @var string Pagination offset, which is used for querying the next page. It should contain 1 to 1024 ASCII characters.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $NextToken;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $GameServerSessions Game server session list
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $NextToken Pagination offset, which is used for querying the next page. It should contain 1 to 1024 ASCII characters.
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("GameServerSessions",$param) and $param["GameServerSessions"] !== null) {
            $this->GameServerSessions = [];
            foreach ($param["GameServerSessions"] as $key => $value){
                $obj = new GameServerSession();
                $obj->deserialize($value);
                array_push($this->GameServerSessions, $obj);
            }
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
