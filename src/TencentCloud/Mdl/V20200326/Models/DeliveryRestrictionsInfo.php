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
 * Distribution configuration information.
 *
 * @method string getWebDeliveryAllowed() Obtain Corresponds to SCTE-35 web_delivery_allowed_flag parameter.
 * @method void setWebDeliveryAllowed(string $WebDeliveryAllowed) Set Corresponds to SCTE-35 web_delivery_allowed_flag parameter.
 * @method string getNoRegionalBlackout() Obtain Corresponds to SCTE-35 no_regional_blackout_flag parameter.
 * @method void setNoRegionalBlackout(string $NoRegionalBlackout) Set Corresponds to SCTE-35 no_regional_blackout_flag parameter.
 * @method string getArchiveAllowed() Obtain Corresponds to SCTE-35 archive_allowed_flag.
 * @method void setArchiveAllowed(string $ArchiveAllowed) Set Corresponds to SCTE-35 archive_allowed_flag.
 * @method string getDeviceRestrictions() Obtain Corresponds to SCTE-35 device_restrictions parameter.
 * @method void setDeviceRestrictions(string $DeviceRestrictions) Set Corresponds to SCTE-35 device_restrictions parameter.
 */
class DeliveryRestrictionsInfo extends AbstractModel
{
    /**
     * @var string Corresponds to SCTE-35 web_delivery_allowed_flag parameter.
     */
    public $WebDeliveryAllowed;

    /**
     * @var string Corresponds to SCTE-35 no_regional_blackout_flag parameter.
     */
    public $NoRegionalBlackout;

    /**
     * @var string Corresponds to SCTE-35 archive_allowed_flag.
     */
    public $ArchiveAllowed;

    /**
     * @var string Corresponds to SCTE-35 device_restrictions parameter.
     */
    public $DeviceRestrictions;

    /**
     * @param string $WebDeliveryAllowed Corresponds to SCTE-35 web_delivery_allowed_flag parameter.
     * @param string $NoRegionalBlackout Corresponds to SCTE-35 no_regional_blackout_flag parameter.
     * @param string $ArchiveAllowed Corresponds to SCTE-35 archive_allowed_flag.
     * @param string $DeviceRestrictions Corresponds to SCTE-35 device_restrictions parameter.
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
        if (array_key_exists("WebDeliveryAllowed",$param) and $param["WebDeliveryAllowed"] !== null) {
            $this->WebDeliveryAllowed = $param["WebDeliveryAllowed"];
        }

        if (array_key_exists("NoRegionalBlackout",$param) and $param["NoRegionalBlackout"] !== null) {
            $this->NoRegionalBlackout = $param["NoRegionalBlackout"];
        }

        if (array_key_exists("ArchiveAllowed",$param) and $param["ArchiveAllowed"] !== null) {
            $this->ArchiveAllowed = $param["ArchiveAllowed"];
        }

        if (array_key_exists("DeviceRestrictions",$param) and $param["DeviceRestrictions"] !== null) {
            $this->DeviceRestrictions = $param["DeviceRestrictions"];
        }
    }
}
