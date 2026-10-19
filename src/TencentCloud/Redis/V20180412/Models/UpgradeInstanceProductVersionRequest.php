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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeInstanceProductVersion request structure.
 *
 * @method string getTargetProductVersion() Obtain <p>Target product type for the update.</p><p>Enumeration values:</p><ul><li>localv2: General Type II</li></ul>
 * @method void setTargetProductVersion(string $TargetProductVersion) Set <p>Target product type for the update.</p><p>Enumeration values:</p><ul><li>localv2: General Type II</li></ul>
 * @method integer getSwitchOption() Obtain <p>Switch time.</p><ul><li>1: Switch during maintenance window.</li><li>2: Switch immediately.</li></ul>
 * @method void setSwitchOption(integer $SwitchOption) Set <p>Switch time.</p><ul><li>1: Switch during maintenance window.</li><li>2: Switch immediately.</li></ul>
 * @method string getInstanceId() Obtain <p>Specifies the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis#/">Redis console</a> and copy the instance ID from the instance list.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Specifies the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis#/">Redis console</a> and copy the instance ID from the instance list.</p>
 */
class UpgradeInstanceProductVersionRequest extends AbstractModel
{
    /**
     * @var string <p>Target product type for the update.</p><p>Enumeration values:</p><ul><li>localv2: General Type II</li></ul>
     */
    public $TargetProductVersion;

    /**
     * @var integer <p>Switch time.</p><ul><li>1: Switch during maintenance window.</li><li>2: Switch immediately.</li></ul>
     */
    public $SwitchOption;

    /**
     * @var string <p>Specifies the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis#/">Redis console</a> and copy the instance ID from the instance list.</p>
     */
    public $InstanceId;

    /**
     * @param string $TargetProductVersion <p>Target product type for the update.</p><p>Enumeration values:</p><ul><li>localv2: General Type II</li></ul>
     * @param integer $SwitchOption <p>Switch time.</p><ul><li>1: Switch during maintenance window.</li><li>2: Switch immediately.</li></ul>
     * @param string $InstanceId <p>Specifies the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis#/">Redis console</a> and copy the instance ID from the instance list.</p>
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
        if (array_key_exists("TargetProductVersion",$param) and $param["TargetProductVersion"] !== null) {
            $this->TargetProductVersion = $param["TargetProductVersion"];
        }

        if (array_key_exists("SwitchOption",$param) and $param["SwitchOption"] !== null) {
            $this->SwitchOption = $param["SwitchOption"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
