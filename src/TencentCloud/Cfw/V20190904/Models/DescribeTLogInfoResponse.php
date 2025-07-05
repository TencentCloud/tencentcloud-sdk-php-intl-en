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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTLogInfo response structure.
 *
 * @method TLogInfo getData() Obtain `NetworkNum`: Number of detected network scans
 `HandleNum`: Number of pending processing events
"BanNum": 
  `VulNum`: Number of vulnerability exploits
  "OutNum`: Number of compromised servers
"BruteForceNum": 0
 * @method void setData(TLogInfo $Data) Set `NetworkNum`: Number of detected network scans
 `HandleNum`: Number of pending processing events
"BanNum": 
  `VulNum`: Number of vulnerability exploits
  "OutNum`: Number of compromised servers
"BruteForceNum": 0
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeTLogInfoResponse extends AbstractModel
{
    /**
     * @var TLogInfo `NetworkNum`: Number of detected network scans
 `HandleNum`: Number of pending processing events
"BanNum": 
  `VulNum`: Number of vulnerability exploits
  "OutNum`: Number of compromised servers
"BruteForceNum": 0
     */
    public $Data;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param TLogInfo $Data `NetworkNum`: Number of detected network scans
 `HandleNum`: Number of pending processing events
"BanNum": 
  `VulNum`: Number of vulnerability exploits
  "OutNum`: Number of compromised servers
"BruteForceNum": 0
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = new TLogInfo();
            $this->Data->deserialize($param["Data"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
