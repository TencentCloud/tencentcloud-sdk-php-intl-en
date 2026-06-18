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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SKILL installation status info
 *
 * @method integer getSkillInstallStatus() Obtain SKILL Installation Status
Enumeration value:
0: Not installed
Installing
2: Installed
3: Installation failure
4: Uninstalling
5: Uninstallation failed.
 * @method void setSkillInstallStatus(integer $SkillInstallStatus) Set SKILL Installation Status
Enumeration value:
0: Not installed
Installing
2: Installed
3: Installation failure
4: Uninstalling
5: Uninstallation failed.
 * @method string getSkillInstallTime() Obtain SKILL installation/uninstallation operation time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format).
 * @method void setSkillInstallTime(string $SkillInstallTime) Set SKILL installation/uninstallation operation time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format).
 * @method string getSkillInstallResult() Obtain SKILL installation/uninstallation result description information
 * @method void setSkillInstallResult(string $SkillInstallResult) Set SKILL installation/uninstallation result description information
 */
class SkillState extends AbstractModel
{
    /**
     * @var integer SKILL Installation Status
Enumeration value:
0: Not installed
Installing
2: Installed
3: Installation failure
4: Uninstalling
5: Uninstallation failed.
     */
    public $SkillInstallStatus;

    /**
     * @var string SKILL installation/uninstallation operation time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format).
     */
    public $SkillInstallTime;

    /**
     * @var string SKILL installation/uninstallation result description information
     */
    public $SkillInstallResult;

    /**
     * @param integer $SkillInstallStatus SKILL Installation Status
Enumeration value:
0: Not installed
Installing
2: Installed
3: Installation failure
4: Uninstalling
5: Uninstallation failed.
     * @param string $SkillInstallTime SKILL installation/uninstallation operation time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format).
     * @param string $SkillInstallResult SKILL installation/uninstallation result description information
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
        if (array_key_exists("SkillInstallStatus",$param) and $param["SkillInstallStatus"] !== null) {
            $this->SkillInstallStatus = $param["SkillInstallStatus"];
        }

        if (array_key_exists("SkillInstallTime",$param) and $param["SkillInstallTime"] !== null) {
            $this->SkillInstallTime = $param["SkillInstallTime"];
        }

        if (array_key_exists("SkillInstallResult",$param) and $param["SkillInstallResult"] !== null) {
            $this->SkillInstallResult = $param["SkillInstallResult"];
        }
    }
}
