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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DisableCCCPhoneNumber request structure.
 *
 * @method array getPhoneNumbers() Obtain Number list starting with 0086.
 * @method void setPhoneNumbers(array $PhoneNumbers) Set Number list starting with 0086.
 * @method integer getDisabled() Obtain Disable switch: 0 for enable, 1 for disable.
 * @method void setDisabled(integer $Disabled) Set Disable switch: 0 for enable, 1 for disable.
 * @method integer getSdkAppId() Obtain TCCC instance application id.
 * @method void setSdkAppId(integer $SdkAppId) Set TCCC instance application id.
 */
class DisableCCCPhoneNumberRequest extends AbstractModel
{
    /**
     * @var array Number list starting with 0086.
     */
    public $PhoneNumbers;

    /**
     * @var integer Disable switch: 0 for enable, 1 for disable.
     */
    public $Disabled;

    /**
     * @var integer TCCC instance application id.
     */
    public $SdkAppId;

    /**
     * @param array $PhoneNumbers Number list starting with 0086.
     * @param integer $Disabled Disable switch: 0 for enable, 1 for disable.
     * @param integer $SdkAppId TCCC instance application id.
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
        if (array_key_exists("PhoneNumbers",$param) and $param["PhoneNumbers"] !== null) {
            $this->PhoneNumbers = $param["PhoneNumbers"];
        }

        if (array_key_exists("Disabled",$param) and $param["Disabled"] !== null) {
            $this->Disabled = $param["Disabled"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }
    }
}
