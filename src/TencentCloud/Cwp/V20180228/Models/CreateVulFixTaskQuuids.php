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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Create QUUIDs for fixing tasks
 *
 * @method integer getVulId() Obtain Vulnerability ID
 * @method void setVulId(integer $VulId) Set Vulnerability ID
 * @method array getQuuids() Obtain Hosts that need to fix vulnerabilities. All hosts need to have the vulnerability with the ID of VulId and be in a pending fix status.
 * @method void setQuuids(array $Quuids) Set Hosts that need to fix vulnerabilities. All hosts need to have the vulnerability with the ID of VulId and be in a pending fix status.
 * @method integer getFixMethod() Obtain 
 * @method void setFixMethod(integer $FixMethod) Set 
 */
class CreateVulFixTaskQuuids extends AbstractModel
{
    /**
     * @var integer Vulnerability ID
     */
    public $VulId;

    /**
     * @var array Hosts that need to fix vulnerabilities. All hosts need to have the vulnerability with the ID of VulId and be in a pending fix status.
     */
    public $Quuids;

    /**
     * @var integer 
     */
    public $FixMethod;

    /**
     * @param integer $VulId Vulnerability ID
     * @param array $Quuids Hosts that need to fix vulnerabilities. All hosts need to have the vulnerability with the ID of VulId and be in a pending fix status.
     * @param integer $FixMethod 
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

        if (array_key_exists("Quuids",$param) and $param["Quuids"] !== null) {
            $this->Quuids = $param["Quuids"];
        }

        if (array_key_exists("FixMethod",$param) and $param["FixMethod"] !== null) {
            $this->FixMethod = $param["FixMethod"];
        }
    }
}
