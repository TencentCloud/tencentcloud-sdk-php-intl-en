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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVdbAndPocInfo response structure.
 *
 * @method string getVdbUpdateTime() Obtain Virus database update time
 * @method void setVdbUpdateTime(string $VdbUpdateTime) Set Virus database update time
 * @method string getPocUpdateTime() Obtain Vulnerability database update time
 * @method void setPocUpdateTime(string $PocUpdateTime) Set Vulnerability database update time
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeVdbAndPocInfoResponse extends AbstractModel
{
    /**
     * @var string Virus database update time
     */
    public $VdbUpdateTime;

    /**
     * @var string Vulnerability database update time
     */
    public $PocUpdateTime;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $VdbUpdateTime Virus database update time
     * @param string $PocUpdateTime Vulnerability database update time
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("VdbUpdateTime",$param) and $param["VdbUpdateTime"] !== null) {
            $this->VdbUpdateTime = $param["VdbUpdateTime"];
        }

        if (array_key_exists("PocUpdateTime",$param) and $param["PocUpdateTime"] !== null) {
            $this->PocUpdateTime = $param["PocUpdateTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
