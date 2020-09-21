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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AuditCrossBorderCompliance request structure.
 *
 * @method string getServiceProvider() Obtain Service provider. Valid values: `UNICOM`.
 * @method void setServiceProvider(string $ServiceProvider) Set Service provider. Valid values: `UNICOM`.
 * @method integer getComplianceId() Obtain Unique ID of compliance review request.
 * @method void setComplianceId(integer $ComplianceId) Set Unique ID of compliance review request.
 * @method string getAuditBehavior() Obtain Audit behavior. Valid values: `APPROVED` and `DENY`.
 * @method void setAuditBehavior(string $AuditBehavior) Set Audit behavior. Valid values: `APPROVED` and `DENY`.
 */
class AuditCrossBorderComplianceRequest extends AbstractModel
{
    /**
     * @var string Service provider. Valid values: `UNICOM`.
     */
    public $ServiceProvider;

    /**
     * @var integer Unique ID of compliance review request.
     */
    public $ComplianceId;

    /**
     * @var string Audit behavior. Valid values: `APPROVED` and `DENY`.
     */
    public $AuditBehavior;

    /**
     * @param string $ServiceProvider Service provider. Valid values: `UNICOM`.
     * @param integer $ComplianceId Unique ID of compliance review request.
     * @param string $AuditBehavior Audit behavior. Valid values: `APPROVED` and `DENY`.
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
        if (array_key_exists("ServiceProvider",$param) and $param["ServiceProvider"] !== null) {
            $this->ServiceProvider = $param["ServiceProvider"];
        }

        if (array_key_exists("ComplianceId",$param) and $param["ComplianceId"] !== null) {
            $this->ComplianceId = $param["ComplianceId"];
        }

        if (array_key_exists("AuditBehavior",$param) and $param["AuditBehavior"] !== null) {
            $this->AuditBehavior = $param["AuditBehavior"];
        }
    }
}
