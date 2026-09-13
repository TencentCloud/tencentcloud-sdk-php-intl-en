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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Superapp approval information
 *
 * @method string getAuditNo() Obtain <p>Approval number.</p>
 * @method void setAuditNo(string $AuditNo) Set <p>Approval number.</p>
 * @method string getApplicationId() Obtain <p>Superapp ID.</p>
 * @method void setApplicationId(string $ApplicationId) Set <p>Superapp ID.</p>
 * @method string getApplicationName() Obtain <p>Superapp name.</p>
 * @method void setApplicationName(string $ApplicationName) Set <p>Superapp name.</p>
 * @method string getApplicationLogo() Obtain <p>Superapp icon.</p>
 * @method void setApplicationLogo(string $ApplicationLogo) Set <p>Superapp icon.</p>
 * @method string getAuditUser() Obtain <p>Approver.</p>
 * @method void setAuditUser(string $AuditUser) Set <p>Approver.</p>
 * @method string getAuditTime() Obtain <p>Creation time.</p>
 * @method void setAuditTime(string $AuditTime) Set <p>Creation time.</p>
 * @method integer getAuditStatus() Obtain <p>Approval status. Valid values: 0: Pending; 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled.</p>
 * @method void setAuditStatus(integer $AuditStatus) Set <p>Approval status. Valid values: 0: Pending; 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled.</p>
 * @method string getAuditNote() Obtain <p>Approval note.</p>
 * @method void setAuditNote(string $AuditNote) Set <p>Approval note.</p>
 * @method string getTeamId() Obtain <p>Team ID.</p>
 * @method void setTeamId(string $TeamId) Set <p>Team ID.</p>
 * @method string getTeamName() Obtain <p>Team name.</p>
 * @method void setTeamName(string $TeamName) Set <p>Team name.</p>
 */
class DescribeMNPAuditDetailAppAuditInfo extends AbstractModel
{
    /**
     * @var string <p>Approval number.</p>
     */
    public $AuditNo;

    /**
     * @var string <p>Superapp ID.</p>
     */
    public $ApplicationId;

    /**
     * @var string <p>Superapp name.</p>
     */
    public $ApplicationName;

    /**
     * @var string <p>Superapp icon.</p>
     */
    public $ApplicationLogo;

    /**
     * @var string <p>Approver.</p>
     */
    public $AuditUser;

    /**
     * @var string <p>Creation time.</p>
     */
    public $AuditTime;

    /**
     * @var integer <p>Approval status. Valid values: 0: Pending; 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled.</p>
     */
    public $AuditStatus;

    /**
     * @var string <p>Approval note.</p>
     */
    public $AuditNote;

    /**
     * @var string <p>Team ID.</p>
     */
    public $TeamId;

    /**
     * @var string <p>Team name.</p>
     */
    public $TeamName;

    /**
     * @param string $AuditNo <p>Approval number.</p>
     * @param string $ApplicationId <p>Superapp ID.</p>
     * @param string $ApplicationName <p>Superapp name.</p>
     * @param string $ApplicationLogo <p>Superapp icon.</p>
     * @param string $AuditUser <p>Approver.</p>
     * @param string $AuditTime <p>Creation time.</p>
     * @param integer $AuditStatus <p>Approval status. Valid values: 0: Pending; 1: Processing; 2: Rejected; 3: Approved; 4: Cancelled.</p>
     * @param string $AuditNote <p>Approval note.</p>
     * @param string $TeamId <p>Team ID.</p>
     * @param string $TeamName <p>Team name.</p>
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
        if (array_key_exists("AuditNo",$param) and $param["AuditNo"] !== null) {
            $this->AuditNo = $param["AuditNo"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("ApplicationLogo",$param) and $param["ApplicationLogo"] !== null) {
            $this->ApplicationLogo = $param["ApplicationLogo"];
        }

        if (array_key_exists("AuditUser",$param) and $param["AuditUser"] !== null) {
            $this->AuditUser = $param["AuditUser"];
        }

        if (array_key_exists("AuditTime",$param) and $param["AuditTime"] !== null) {
            $this->AuditTime = $param["AuditTime"];
        }

        if (array_key_exists("AuditStatus",$param) and $param["AuditStatus"] !== null) {
            $this->AuditStatus = $param["AuditStatus"];
        }

        if (array_key_exists("AuditNote",$param) and $param["AuditNote"] !== null) {
            $this->AuditNote = $param["AuditNote"];
        }

        if (array_key_exists("TeamId",$param) and $param["TeamId"] !== null) {
            $this->TeamId = $param["TeamId"];
        }

        if (array_key_exists("TeamName",$param) and $param["TeamName"] !== null) {
            $this->TeamName = $param["TeamName"];
        }
    }
}
