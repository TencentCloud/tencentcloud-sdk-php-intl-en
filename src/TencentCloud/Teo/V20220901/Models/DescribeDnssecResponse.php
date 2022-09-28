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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDnssec response structure.
 *
 * @method string getStatus() Obtain The DNSSEC status. Values:
<li>`enabled`: Enabled</li>
<li>`disabled`: Disabled</li>
 * @method void setStatus(string $Status) Set The DNSSEC status. Values:
<li>`enabled`: Enabled</li>
<li>`disabled`: Disabled</li>
 * @method DnssecInfo getDnssecInfo() Obtain The DNSSEC information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDnssecInfo(DnssecInfo $DnssecInfo) Set The DNSSEC information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getModifiedOn() Obtain The update time of the site information.
 * @method void setModifiedOn(string $ModifiedOn) Set The update time of the site information.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeDnssecResponse extends AbstractModel
{
    /**
     * @var string The DNSSEC status. Values:
<li>`enabled`: Enabled</li>
<li>`disabled`: Disabled</li>
     */
    public $Status;

    /**
     * @var DnssecInfo The DNSSEC information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DnssecInfo;

    /**
     * @var string The update time of the site information.
     */
    public $ModifiedOn;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Status The DNSSEC status. Values:
<li>`enabled`: Enabled</li>
<li>`disabled`: Disabled</li>
     * @param DnssecInfo $DnssecInfo The DNSSEC information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ModifiedOn The update time of the site information.
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

        if (array_key_exists("DnssecInfo",$param) and $param["DnssecInfo"] !== null) {
            $this->DnssecInfo = new DnssecInfo();
            $this->DnssecInfo->deserialize($param["DnssecInfo"]);
        }

        if (array_key_exists("ModifiedOn",$param) and $param["ModifiedOn"] !== null) {
            $this->ModifiedOn = $param["ModifiedOn"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
