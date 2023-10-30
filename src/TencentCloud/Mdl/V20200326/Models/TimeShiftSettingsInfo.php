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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Time-shift configuration. This parameter is valid only for HLS_ARCHIVE and DASH_ARCHIVE output groups.
 *
 * @method string getState() Obtain Whether to enable time shifting. Valid values: `OPEN`; `CLOSE`
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setState(string $State) Set Whether to enable time shifting. Valid values: `OPEN`; `CLOSE`
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getPlayDomain() Obtain Domain name bound for time shifting
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setPlayDomain(string $PlayDomain) Set Domain name bound for time shifting
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getStartoverWindow() Obtain Allowable time-shift period (s). Value range: [300, 2592000]. Default value: 300Note: This field may return `null`, indicating that no valid value was found.
 * @method void setStartoverWindow(integer $StartoverWindow) Set Allowable time-shift period (s). Value range: [300, 2592000]. Default value: 300Note: This field may return `null`, indicating that no valid value was found.
 */
class TimeShiftSettingsInfo extends AbstractModel
{
    /**
     * @var string Whether to enable time shifting. Valid values: `OPEN`; `CLOSE`
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $State;

    /**
     * @var string Domain name bound for time shifting
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $PlayDomain;

    /**
     * @var integer Allowable time-shift period (s). Value range: [300, 2592000]. Default value: 300Note: This field may return `null`, indicating that no valid value was found.
     */
    public $StartoverWindow;

    /**
     * @param string $State Whether to enable time shifting. Valid values: `OPEN`; `CLOSE`
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $PlayDomain Domain name bound for time shifting
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $StartoverWindow Allowable time-shift period (s). Value range: [300, 2592000]. Default value: 300Note: This field may return `null`, indicating that no valid value was found.
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
        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("PlayDomain",$param) and $param["PlayDomain"] !== null) {
            $this->PlayDomain = $param["PlayDomain"];
        }

        if (array_key_exists("StartoverWindow",$param) and $param["StartoverWindow"] !== null) {
            $this->StartoverWindow = $param["StartoverWindow"];
        }
    }
}
