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
 * DescribeUndoVulCounts request structure.
 *
 * @method integer getVulCategory() Obtain Vulnerability category. 1: web-cms vulnerabilities; 2: application vulnerabilities; 4: Linux software vulnerabilities; 5: Windows system vulnerabilities
 * @method void setVulCategory(integer $VulCategory) Set Vulnerability category. 1: web-cms vulnerabilities; 2: application vulnerabilities; 4: Linux software vulnerabilities; 5: Windows system vulnerabilities
 * @method string getIfEmergency() Obtain Whether to apply emergency vulnerability detection: YES - yes
 * @method void setIfEmergency(string $IfEmergency) Set Whether to apply emergency vulnerability detection: YES - yes
 */
class DescribeUndoVulCountsRequest extends AbstractModel
{
    /**
     * @var integer Vulnerability category. 1: web-cms vulnerabilities; 2: application vulnerabilities; 4: Linux software vulnerabilities; 5: Windows system vulnerabilities
     */
    public $VulCategory;

    /**
     * @var string Whether to apply emergency vulnerability detection: YES - yes
     */
    public $IfEmergency;

    /**
     * @param integer $VulCategory Vulnerability category. 1: web-cms vulnerabilities; 2: application vulnerabilities; 4: Linux software vulnerabilities; 5: Windows system vulnerabilities
     * @param string $IfEmergency Whether to apply emergency vulnerability detection: YES - yes
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
        if (array_key_exists("VulCategory",$param) and $param["VulCategory"] !== null) {
            $this->VulCategory = $param["VulCategory"];
        }

        if (array_key_exists("IfEmergency",$param) and $param["IfEmergency"] !== null) {
            $this->IfEmergency = $param["IfEmergency"];
        }
    }
}
