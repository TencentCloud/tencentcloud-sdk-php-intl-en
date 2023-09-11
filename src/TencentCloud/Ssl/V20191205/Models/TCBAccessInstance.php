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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TCB access instances
 *
 * @method string getDomain() Obtain The domain.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDomain(string $Domain) Set The domain.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain The status.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set The status.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getUnionStatus() Obtain The unified domain status.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUnionStatus(integer $UnionStatus) Set The unified domain status.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsPreempted() Obtain Whether the domain is preempted. A preempted domain is one that is already associated with another environment. It must be disassociated or re-associated first.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsPreempted(boolean $IsPreempted) Set Whether the domain is preempted. A preempted domain is one that is already associated with another environment. It must be disassociated or re-associated first.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getICPStatus() Obtain Whether the domain is added to the ICP blocklist. Valid values: `0` for no and `1` for yes.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setICPStatus(integer $ICPStatus) Set Whether the domain is added to the ICP blocklist. Valid values: `0` for no and `1` for yes.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOldCertificateId() Obtain The ID of the associated certificate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOldCertificateId(string $OldCertificateId) Set The ID of the associated certificate.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TCBAccessInstance extends AbstractModel
{
    /**
     * @var string The domain.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Domain;

    /**
     * @var integer The status.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var integer The unified domain status.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UnionStatus;

    /**
     * @var boolean Whether the domain is preempted. A preempted domain is one that is already associated with another environment. It must be disassociated or re-associated first.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsPreempted;

    /**
     * @var integer Whether the domain is added to the ICP blocklist. Valid values: `0` for no and `1` for yes.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ICPStatus;

    /**
     * @var string The ID of the associated certificate.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OldCertificateId;

    /**
     * @param string $Domain The domain.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status The status.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $UnionStatus The unified domain status.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsPreempted Whether the domain is preempted. A preempted domain is one that is already associated with another environment. It must be disassociated or re-associated first.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ICPStatus Whether the domain is added to the ICP blocklist. Valid values: `0` for no and `1` for yes.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OldCertificateId The ID of the associated certificate.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UnionStatus",$param) and $param["UnionStatus"] !== null) {
            $this->UnionStatus = $param["UnionStatus"];
        }

        if (array_key_exists("IsPreempted",$param) and $param["IsPreempted"] !== null) {
            $this->IsPreempted = $param["IsPreempted"];
        }

        if (array_key_exists("ICPStatus",$param) and $param["ICPStatus"] !== null) {
            $this->ICPStatus = $param["ICPStatus"];
        }

        if (array_key_exists("OldCertificateId",$param) and $param["OldCertificateId"] !== null) {
            $this->OldCertificateId = $param["OldCertificateId"];
        }
    }
}
