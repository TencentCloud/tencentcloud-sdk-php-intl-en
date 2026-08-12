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
 * Vulnerability/KB patch dimensional remediation status
 *
 * @method integer getVulId() Obtain Vulnerability ID (empty for KB patch fix tasks)
 * @method void setVulId(integer $VulId) Set Vulnerability ID (empty for KB patch fix tasks)
 * @method integer getKBId() Obtain Patch ID (empty for vulnerability repair tasks)
 * @method void setKBId(integer $KBId) Set Patch ID (empty for vulnerability repair tasks)
 * @method string getVulName() Obtain Vulnerability name or KB patch name
 * @method void setVulName(string $VulName) Set Vulnerability name or KB patch name
 * @method integer getFixStatus() Obtain Remediation status of the vulnerability
Enumeration value:
0: In remediation
1: All successful
2: partially failed
3: All failed
 * @method void setFixStatus(integer $FixStatus) Set Remediation status of the vulnerability
Enumeration value:
0: In remediation
1: All successful
2: partially failed
3: All failed
 * @method integer getHostCount() Obtain Total hosts associated with the vulnerability/KB patch
 * @method void setHostCount(integer $HostCount) Set Total hosts associated with the vulnerability/KB patch
 * @method integer getSuccessHostCount() Obtain Number of hosts successfully fixed by the vulnerability/KB patch
 * @method void setSuccessHostCount(integer $SuccessHostCount) Set Number of hosts successfully fixed by the vulnerability/KB patch
 * @method integer getFailHostCount() Obtain Number of hosts failed to be fixed for the vulnerability/KB patch
 * @method void setFailHostCount(integer $FailHostCount) Set Number of hosts failed to be fixed for the vulnerability/KB patch
 */
class VulFixStatusItem extends AbstractModel
{
    /**
     * @var integer Vulnerability ID (empty for KB patch fix tasks)
     */
    public $VulId;

    /**
     * @var integer Patch ID (empty for vulnerability repair tasks)
     */
    public $KBId;

    /**
     * @var string Vulnerability name or KB patch name
     */
    public $VulName;

    /**
     * @var integer Remediation status of the vulnerability
Enumeration value:
0: In remediation
1: All successful
2: partially failed
3: All failed
     */
    public $FixStatus;

    /**
     * @var integer Total hosts associated with the vulnerability/KB patch
     */
    public $HostCount;

    /**
     * @var integer Number of hosts successfully fixed by the vulnerability/KB patch
     */
    public $SuccessHostCount;

    /**
     * @var integer Number of hosts failed to be fixed for the vulnerability/KB patch
     */
    public $FailHostCount;

    /**
     * @param integer $VulId Vulnerability ID (empty for KB patch fix tasks)
     * @param integer $KBId Patch ID (empty for vulnerability repair tasks)
     * @param string $VulName Vulnerability name or KB patch name
     * @param integer $FixStatus Remediation status of the vulnerability
Enumeration value:
0: In remediation
1: All successful
2: partially failed
3: All failed
     * @param integer $HostCount Total hosts associated with the vulnerability/KB patch
     * @param integer $SuccessHostCount Number of hosts successfully fixed by the vulnerability/KB patch
     * @param integer $FailHostCount Number of hosts failed to be fixed for the vulnerability/KB patch
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
        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("KBId",$param) and $param["KBId"] !== null) {
            $this->KBId = $param["KBId"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("FixStatus",$param) and $param["FixStatus"] !== null) {
            $this->FixStatus = $param["FixStatus"];
        }

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }

        if (array_key_exists("SuccessHostCount",$param) and $param["SuccessHostCount"] !== null) {
            $this->SuccessHostCount = $param["SuccessHostCount"];
        }

        if (array_key_exists("FailHostCount",$param) and $param["FailHostCount"] !== null) {
            $this->FailHostCount = $param["FailHostCount"];
        }
    }
}
