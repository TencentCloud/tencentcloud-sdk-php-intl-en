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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySkillScanAlertStatus request structure.
 *
 * @method array getIDs() Obtain List of alarm record IDs
Input parameter limit: 100 at a time
Value reference: obtained through the DescribeSkillScanAlertList API.
 * @method void setIDs(array $IDs) Set List of alarm record IDs
Input parameter limit: 100 at a time
Value reference: obtained through the DescribeSkillScanAlertList API.
 * @method integer getStatus() Obtain Target processing status
Enumeration value:
1: Processed
2: Ignored
3: Trusted
- 4: Deleted (soft deletion).
 * @method void setStatus(integer $Status) Set Target processing status
Enumeration value:
1: Processed
2: Ignored
3: Trusted
- 4: Deleted (soft deletion).
 * @method array getMemberId() Obtain Group account member id
 * @method void setMemberId(array $MemberId) Set Group account member id
 */
class ModifySkillScanAlertStatusRequest extends AbstractModel
{
    /**
     * @var array List of alarm record IDs
Input parameter limit: 100 at a time
Value reference: obtained through the DescribeSkillScanAlertList API.
     */
    public $IDs;

    /**
     * @var integer Target processing status
Enumeration value:
1: Processed
2: Ignored
3: Trusted
- 4: Deleted (soft deletion).
     */
    public $Status;

    /**
     * @var array Group account member id
     */
    public $MemberId;

    /**
     * @param array $IDs List of alarm record IDs
Input parameter limit: 100 at a time
Value reference: obtained through the DescribeSkillScanAlertList API.
     * @param integer $Status Target processing status
Enumeration value:
1: Processed
2: Ignored
3: Trusted
- 4: Deleted (soft deletion).
     * @param array $MemberId Group account member id
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
        if (array_key_exists("IDs",$param) and $param["IDs"] !== null) {
            $this->IDs = $param["IDs"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
