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
 * Query vulnerability details by cve_id
 *
 * @method integer getVulId() Obtain Vulnerability ID
 * @method void setVulId(integer $VulId) Set Vulnerability ID
 * @method integer getFixSwitch() Obtain Fixing support status: 0 - not support fixing for Windows and Linux; 1 - support fixing for both Windows and Linux; 2 - support fixing for Linux only; 3 - support fixing for Windows only.
 * @method void setFixSwitch(integer $FixSwitch) Set Fixing support status: 0 - not support fixing for Windows and Linux; 1 - support fixing for both Windows and Linux; 2 - support fixing for Linux only; 3 - support fixing for Windows only.
 */
class VulInfoByCveId extends AbstractModel
{
    /**
     * @var integer Vulnerability ID
     */
    public $VulId;

    /**
     * @var integer Fixing support status: 0 - not support fixing for Windows and Linux; 1 - support fixing for both Windows and Linux; 2 - support fixing for Linux only; 3 - support fixing for Windows only.
     */
    public $FixSwitch;

    /**
     * @param integer $VulId Vulnerability ID
     * @param integer $FixSwitch Fixing support status: 0 - not support fixing for Windows and Linux; 1 - support fixing for both Windows and Linux; 2 - support fixing for Linux only; 3 - support fixing for Windows only.
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

        if (array_key_exists("FixSwitch",$param) and $param["FixSwitch"] !== null) {
            $this->FixSwitch = $param["FixSwitch"];
        }
    }
}
