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
 * Visualized attack and defense status on large screen
 *
 * @method string getName() Obtain Type value: virus scanning, brute force cracking, vulnerability scan, baseline check
 * @method void setName(string $Name) Set Type value: virus scanning, brute force cracking, vulnerability scan, baseline check
 * @method integer getStatus() Obtain Virus scanning: 0: never scanned or asset not paid; 1: scanned and malicious files found; 2: scanned but isolation protection disabled; 3: scanned, protection enabled, and no risk found.
Brute force cracking: 0: protection disabled (asset not paid); 1: automatic blocking enabled.
Vulnerability scan: 0: never scanned or asset not paid; 1: vulnerability found; 2: no risk found.
Baseline check: 0: never checked or asset not paid; 1: baseline risks found; 2: no risk found.
 * @method void setStatus(integer $Status) Set Virus scanning: 0: never scanned or asset not paid; 1: scanned and malicious files found; 2: scanned but isolation protection disabled; 3: scanned, protection enabled, and no risk found.
Brute force cracking: 0: protection disabled (asset not paid); 1: automatic blocking enabled.
Vulnerability scan: 0: never scanned or asset not paid; 1: vulnerability found; 2: no risk found.
Baseline check: 0: never checked or asset not paid; 1: baseline risks found; 2: no risk found.
 */
class ScreenProtection extends AbstractModel
{
    /**
     * @var string Type value: virus scanning, brute force cracking, vulnerability scan, baseline check
     */
    public $Name;

    /**
     * @var integer Virus scanning: 0: never scanned or asset not paid; 1: scanned and malicious files found; 2: scanned but isolation protection disabled; 3: scanned, protection enabled, and no risk found.
Brute force cracking: 0: protection disabled (asset not paid); 1: automatic blocking enabled.
Vulnerability scan: 0: never scanned or asset not paid; 1: vulnerability found; 2: no risk found.
Baseline check: 0: never checked or asset not paid; 1: baseline risks found; 2: no risk found.
     */
    public $Status;

    /**
     * @param string $Name Type value: virus scanning, brute force cracking, vulnerability scan, baseline check
     * @param integer $Status Virus scanning: 0: never scanned or asset not paid; 1: scanned and malicious files found; 2: scanned but isolation protection disabled; 3: scanned, protection enabled, and no risk found.
Brute force cracking: 0: protection disabled (asset not paid); 1: automatic blocking enabled.
Vulnerability scan: 0: never scanned or asset not paid; 1: vulnerability found; 2: no risk found.
Baseline check: 0: never checked or asset not paid; 1: baseline risks found; 2: no risk found.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
