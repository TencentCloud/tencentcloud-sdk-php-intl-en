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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIdentification response structure.
 *
 * @method string getName() Obtain Site name
 * @method void setName(string $Name) Set Site name
 * @method string getStatus() Obtain Verification status. Valid values:
- `pending`: Verifying
- `finished`: The site is verified.
 * @method void setStatus(string $Status) Set Verification status. Valid values:
- `pending`: Verifying
- `finished`: The site is verified.
 * @method string getSubdomain() Obtain 
 * @method void setSubdomain(string $Subdomain) Set 
 * @method string getRecordType() Obtain Record type
 * @method void setRecordType(string $RecordType) Set Record type
 * @method string getRecordValue() Obtain Record value
 * @method void setRecordValue(string $RecordValue) Set Record value
 * @method array getOriginalNameServers() Obtain NS records of the domain name
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setOriginalNameServers(array $OriginalNameServers) Set NS records of the domain name
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeIdentificationResponse extends AbstractModel
{
    /**
     * @var string Site name
     */
    public $Name;

    /**
     * @var string Verification status. Valid values:
- `pending`: Verifying
- `finished`: The site is verified.
     */
    public $Status;

    /**
     * @var string 
     */
    public $Subdomain;

    /**
     * @var string Record type
     */
    public $RecordType;

    /**
     * @var string Record value
     */
    public $RecordValue;

    /**
     * @var array NS records of the domain name
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $OriginalNameServers;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Name Site name
     * @param string $Status Verification status. Valid values:
- `pending`: Verifying
- `finished`: The site is verified.
     * @param string $Subdomain 
     * @param string $RecordType Record type
     * @param string $RecordValue Record value
     * @param array $OriginalNameServers NS records of the domain name
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Subdomain",$param) and $param["Subdomain"] !== null) {
            $this->Subdomain = $param["Subdomain"];
        }

        if (array_key_exists("RecordType",$param) and $param["RecordType"] !== null) {
            $this->RecordType = $param["RecordType"];
        }

        if (array_key_exists("RecordValue",$param) and $param["RecordValue"] !== null) {
            $this->RecordValue = $param["RecordValue"];
        }

        if (array_key_exists("OriginalNameServers",$param) and $param["OriginalNameServers"] !== null) {
            $this->OriginalNameServers = $param["OriginalNameServers"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
