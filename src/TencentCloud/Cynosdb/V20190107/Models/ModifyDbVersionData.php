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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Modify database kernel version task information.
 *
 * @method string getOldVersion() Obtain Version before modification.
 * @method void setOldVersion(string $OldVersion) Set Version before modification.
 * @method string getNewVersion() Obtain Version after modification.
 * @method void setNewVersion(string $NewVersion) Set Version after modification.
 * @method string getUpgradeType() Obtain Upgrade method.
 * @method void setUpgradeType(string $UpgradeType) Set Upgrade method.
 */
class ModifyDbVersionData extends AbstractModel
{
    /**
     * @var string Version before modification.
     */
    public $OldVersion;

    /**
     * @var string Version after modification.
     */
    public $NewVersion;

    /**
     * @var string Upgrade method.
     */
    public $UpgradeType;

    /**
     * @param string $OldVersion Version before modification.
     * @param string $NewVersion Version after modification.
     * @param string $UpgradeType Upgrade method.
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
        if (array_key_exists("OldVersion",$param) and $param["OldVersion"] !== null) {
            $this->OldVersion = $param["OldVersion"];
        }

        if (array_key_exists("NewVersion",$param) and $param["NewVersion"] !== null) {
            $this->NewVersion = $param["NewVersion"];
        }

        if (array_key_exists("UpgradeType",$param) and $param["UpgradeType"] !== null) {
            $this->UpgradeType = $param["UpgradeType"];
        }
    }
}
