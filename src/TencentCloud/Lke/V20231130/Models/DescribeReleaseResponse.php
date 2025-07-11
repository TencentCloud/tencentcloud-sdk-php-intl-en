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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRelease response structure.
 *
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getDescription() Obtain Publish description.
 * @method void setDescription(string $Description) Set Publish description.
 * @method integer getStatus() Obtain Release status (1. pending release; 2. releasing; 3. release successful; 4. release failed; 5. releasing (under review); 6. releasing (review completed); 7. release failed; 9. release paused).
 * @method void setStatus(integer $Status) Set Release status (1. pending release; 2. releasing; 3. release successful; 4. release failed; 5. releasing (under review); 6. releasing (review completed); 7. release failed; 9. release paused).
 * @method string getStatusDesc() Obtain Release status description.
 * @method void setStatusDesc(string $StatusDesc) Set Release status description.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeReleaseResponse extends AbstractModel
{
    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Publish description.
     */
    public $Description;

    /**
     * @var integer Release status (1. pending release; 2. releasing; 3. release successful; 4. release failed; 5. releasing (under review); 6. releasing (review completed); 7. release failed; 9. release paused).
     */
    public $Status;

    /**
     * @var string Release status description.
     */
    public $StatusDesc;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $CreateTime Creation time.
     * @param string $Description Publish description.
     * @param integer $Status Release status (1. pending release; 2. releasing; 3. release successful; 4. release failed; 5. releasing (under review); 6. releasing (review completed); 7. release failed; 9. release paused).
     * @param string $StatusDesc Release status description.
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
