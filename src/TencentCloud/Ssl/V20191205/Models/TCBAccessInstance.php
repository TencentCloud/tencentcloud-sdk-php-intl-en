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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TCB access instances
 *
 * @method string getDomain() Obtain Domain
 * @method void setDomain(string $Domain) Set Domain
 * @method integer getStatus() Obtain Status.
 * @method void setStatus(integer $Status) Set Status.
 * @method integer getUnionStatus() Obtain Unified domain status

 * @method void setUnionStatus(integer $UnionStatus) Set Unified domain status

 * @method boolean getIsPreempted() Obtain Whether it is preempted. Preemption means the domain name is bound to another environment and must be unbound or rebound.

 * @method void setIsPreempted(boolean $IsPreempted) Set Whether it is preempted. Preemption means the domain name is bound to another environment and must be unbound or rebound.

 * @method integer getICPStatus() Obtain icp blocklist ban status. 0 - Not blocked. 1 - Blocked.

 * @method void setICPStatus(integer $ICPStatus) Set icp blocklist ban status. 0 - Not blocked. 1 - Blocked.

 * @method string getOldCertificateId() Obtain Bound Certificate ID
 * @method void setOldCertificateId(string $OldCertificateId) Set Bound Certificate ID
 */
class TCBAccessInstance extends AbstractModel
{
    /**
     * @var string Domain
     */
    public $Domain;

    /**
     * @var integer Status.
     */
    public $Status;

    /**
     * @var integer Unified domain status

     */
    public $UnionStatus;

    /**
     * @var boolean Whether it is preempted. Preemption means the domain name is bound to another environment and must be unbound or rebound.

     */
    public $IsPreempted;

    /**
     * @var integer icp blocklist ban status. 0 - Not blocked. 1 - Blocked.

     */
    public $ICPStatus;

    /**
     * @var string Bound Certificate ID
     */
    public $OldCertificateId;

    /**
     * @param string $Domain Domain
     * @param integer $Status Status.
     * @param integer $UnionStatus Unified domain status

     * @param boolean $IsPreempted Whether it is preempted. Preemption means the domain name is bound to another environment and must be unbound or rebound.

     * @param integer $ICPStatus icp blocklist ban status. 0 - Not blocked. 1 - Blocked.

     * @param string $OldCertificateId Bound Certificate ID
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
