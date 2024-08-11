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
namespace TencentCloud\Tcmpp\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Approval information
 *
 * @method string getApplicationId() Obtain Application ID
 * @method void setApplicationId(string $ApplicationId) Set Application ID
 * @method integer getAuditStatus() Obtain Approval status 2- Rejected
3 - Approved
 * @method void setAuditStatus(integer $AuditStatus) Set Approval status 2- Rejected
3 - Approved
 * @method string getAuditNote() Obtain Approval description

 * @method void setAuditNote(string $AuditNote) Set Approval description
 */
class AuditInfoReq extends AbstractModel
{
    /**
     * @var string Application ID
     */
    public $ApplicationId;

    /**
     * @var integer Approval status 2- Rejected
3 - Approved
     */
    public $AuditStatus;

    /**
     * @var string Approval description

     */
    public $AuditNote;

    /**
     * @param string $ApplicationId Application ID
     * @param integer $AuditStatus Approval status 2- Rejected
3 - Approved
     * @param string $AuditNote Approval description
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("AuditStatus",$param) and $param["AuditStatus"] !== null) {
            $this->AuditStatus = $param["AuditStatus"];
        }

        if (array_key_exists("AuditNote",$param) and $param["AuditNote"] !== null) {
            $this->AuditNote = $param["AuditNote"];
        }
    }
}
