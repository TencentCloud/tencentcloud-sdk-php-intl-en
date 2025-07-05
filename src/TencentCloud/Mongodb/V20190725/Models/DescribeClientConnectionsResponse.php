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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClientConnections response structure.
 *
 * @method array getClients() Obtain Client connection information, including client IP and number of connections
 * @method void setClients(array $Clients) Set Client connection information, including client IP and number of connections
 * @method integer getTotalCount() Obtain The total number of records that meet the query condition, which can be used for paginated queries.
 * @method void setTotalCount(integer $TotalCount) Set The total number of records that meet the query condition, which can be used for paginated queries.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeClientConnectionsResponse extends AbstractModel
{
    /**
     * @var array Client connection information, including client IP and number of connections
     */
    public $Clients;

    /**
     * @var integer The total number of records that meet the query condition, which can be used for paginated queries.
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $Clients Client connection information, including client IP and number of connections
     * @param integer $TotalCount The total number of records that meet the query condition, which can be used for paginated queries.
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
        if (array_key_exists("Clients",$param) and $param["Clients"] !== null) {
            $this->Clients = [];
            foreach ($param["Clients"] as $key => $value){
                $obj = new ClientConnection();
                $obj->deserialize($value);
                array_push($this->Clients, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
