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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScanDnsRecords response structure.
 *
 * @method string getStatus() Obtain Scan status
- `doing`: Scanning
- `done`: Scanned
 * @method void setStatus(string $Status) Set Scan status
- `doing`: Scanning
- `done`: Scanned
 * @method integer getRecordsAdded() Obtain Number of DNS records added after scanning
 * @method void setRecordsAdded(integer $RecordsAdded) Set Number of DNS records added after scanning
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class ScanDnsRecordsResponse extends AbstractModel
{
    /**
     * @var string Scan status
- `doing`: Scanning
- `done`: Scanned
     */
    public $Status;

    /**
     * @var integer Number of DNS records added after scanning
     */
    public $RecordsAdded;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Status Scan status
- `doing`: Scanning
- `done`: Scanned
     * @param integer $RecordsAdded Number of DNS records added after scanning
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RecordsAdded",$param) and $param["RecordsAdded"] !== null) {
            $this->RecordsAdded = $param["RecordsAdded"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
