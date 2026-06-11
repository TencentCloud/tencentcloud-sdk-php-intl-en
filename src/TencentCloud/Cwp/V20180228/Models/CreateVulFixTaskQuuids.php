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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Create QUUIDs for fixing tasks
 *
 * @method array getQuuids() Obtain Hosts that need to fix vulnerabilities. All hosts need to have the vulnerability with the ID of VulId and be in a pending fix status.
 * @method void setQuuids(array $Quuids) Set Hosts that need to fix vulnerabilities. All hosts need to have the vulnerability with the ID of VulId and be in a pending fix status.
 * @method integer getVulId() Obtain Vulnerability ID
 * @method void setVulId(integer $VulId) Set Vulnerability ID
 * @method integer getFixMethod() Obtain Repair method. 0: Update components or install patches. 1: Disable service.
 * @method void setFixMethod(integer $FixMethod) Set Repair method. 0: Update components or install patches. 1: Disable service.
 * @method integer getKbId() Obtain kb id
 * @method void setKbId(integer $KbId) Set kb id
 */
class CreateVulFixTaskQuuids extends AbstractModel
{
    /**
     * @var array Hosts that need to fix vulnerabilities. All hosts need to have the vulnerability with the ID of VulId and be in a pending fix status.
     */
    public $Quuids;

    /**
     * @var integer Vulnerability ID
     */
    public $VulId;

    /**
     * @var integer Repair method. 0: Update components or install patches. 1: Disable service.
     */
    public $FixMethod;

    /**
     * @var integer kb id
     */
    public $KbId;

    /**
     * @param array $Quuids Hosts that need to fix vulnerabilities. All hosts need to have the vulnerability with the ID of VulId and be in a pending fix status.
     * @param integer $VulId Vulnerability ID
     * @param integer $FixMethod Repair method. 0: Update components or install patches. 1: Disable service.
     * @param integer $KbId kb id
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
        if (array_key_exists("Quuids",$param) and $param["Quuids"] !== null) {
            $this->Quuids = $param["Quuids"];
        }

        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("FixMethod",$param) and $param["FixMethod"] !== null) {
            $this->FixMethod = $param["FixMethod"];
        }

        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }
    }
}
