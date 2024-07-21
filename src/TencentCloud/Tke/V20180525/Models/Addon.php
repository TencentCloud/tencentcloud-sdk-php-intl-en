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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Add-on description
 *
 * @method string getAddonName() Obtain Add-on name
 * @method void setAddonName(string $AddonName) Set Add-on name
 * @method string getAddonVersion() Obtain Add-on version
 * @method void setAddonVersion(string $AddonVersion) Set Add-on version
 * @method string getRawValues() Obtain Add-on parameters, which are base64-encoded strings in JSON/
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setRawValues(string $RawValues) Set Add-on parameters, which are base64-encoded strings in JSON/
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getPhase() Obtain Add-on status
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setPhase(string $Phase) Set Add-on status
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getReason() Obtain Reason for add-on failure
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setReason(string $Reason) Set Reason for add-on failure
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class Addon extends AbstractModel
{
    /**
     * @var string Add-on name
     */
    public $AddonName;

    /**
     * @var string Add-on version
     */
    public $AddonVersion;

    /**
     * @var string Add-on parameters, which are base64-encoded strings in JSON/
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $RawValues;

    /**
     * @var string Add-on status
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Phase;

    /**
     * @var string Reason for add-on failure
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Reason;

    /**
     * @param string $AddonName Add-on name
     * @param string $AddonVersion Add-on version
     * @param string $RawValues Add-on parameters, which are base64-encoded strings in JSON/
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $Phase Add-on status
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $Reason Reason for add-on failure
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("AddonName",$param) and $param["AddonName"] !== null) {
            $this->AddonName = $param["AddonName"];
        }

        if (array_key_exists("AddonVersion",$param) and $param["AddonVersion"] !== null) {
            $this->AddonVersion = $param["AddonVersion"];
        }

        if (array_key_exists("RawValues",$param) and $param["RawValues"] !== null) {
            $this->RawValues = $param["RawValues"];
        }

        if (array_key_exists("Phase",$param) and $param["Phase"] !== null) {
            $this->Phase = $param["Phase"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
