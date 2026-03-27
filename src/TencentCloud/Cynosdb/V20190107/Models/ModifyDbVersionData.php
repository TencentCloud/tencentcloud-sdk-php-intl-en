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
 * Database Kernel Version Modification Task Information
 *
 * @method string getOldVersion() Obtain pre-modification version
 * @method void setOldVersion(string $OldVersion) Set pre-modification version
 * @method string getNewVersion() Obtain Post-modification Version
 * @method void setNewVersion(string $NewVersion) Set Post-modification Version
 * @method string getUpgradeType() Obtain Upgrade Method
 * @method void setUpgradeType(string $UpgradeType) Set Upgrade Method
 */
class ModifyDbVersionData extends AbstractModel
{
    /**
     * @var string pre-modification version
     */
    public $OldVersion;

    /**
     * @var string Post-modification Version
     */
    public $NewVersion;

    /**
     * @var string Upgrade Method
     */
    public $UpgradeType;

    /**
     * @param string $OldVersion pre-modification version
     * @param string $NewVersion Post-modification Version
     * @param string $UpgradeType Upgrade Method
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
