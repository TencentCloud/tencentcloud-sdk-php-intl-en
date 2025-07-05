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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * When origin ACLs are updated, this field will be returned with the next version of the IP range to take effect, including a comparison with the currently effective IP range.
 *
 * @method string getVersion() Obtain Version number.
 * @method void setVersion(string $Version) Set Version number.
 * @method string getPlannedActiveTime() Obtain Version effective time, which adopts UTC+8 and follows the date and time format of the ISO 8601 standard.
 * @method void setPlannedActiveTime(string $PlannedActiveTime) Set Version effective time, which adopts UTC+8 and follows the date and time format of the ISO 8601 standard.
 * @method Addresses getEntireAddresses() Obtain IP range details.
 * @method void setEntireAddresses(Addresses $EntireAddresses) Set IP range details.
 * @method Addresses getAddedAddresses() Obtain The latest origin IP range newly-added compared with the origin IP range in CurrentOrginACL.
 * @method void setAddedAddresses(Addresses $AddedAddresses) Set The latest origin IP range newly-added compared with the origin IP range in CurrentOrginACL.
 * @method Addresses getRemovedAddresses() Obtain The latest origin IP range deleted compared with the origin IP range in CurrentOrginACL.
 * @method void setRemovedAddresses(Addresses $RemovedAddresses) Set The latest origin IP range deleted compared with the origin IP range in CurrentOrginACL.
 * @method Addresses getNoChangeAddresses() Obtain The latest origin IP range is unchanged compared with the origin IP range in CurrentOrginACL.
 * @method void setNoChangeAddresses(Addresses $NoChangeAddresses) Set The latest origin IP range is unchanged compared with the origin IP range in CurrentOrginACL.
 */
class NextOriginACL extends AbstractModel
{
    /**
     * @var string Version number.
     */
    public $Version;

    /**
     * @var string Version effective time, which adopts UTC+8 and follows the date and time format of the ISO 8601 standard.
     */
    public $PlannedActiveTime;

    /**
     * @var Addresses IP range details.
     */
    public $EntireAddresses;

    /**
     * @var Addresses The latest origin IP range newly-added compared with the origin IP range in CurrentOrginACL.
     */
    public $AddedAddresses;

    /**
     * @var Addresses The latest origin IP range deleted compared with the origin IP range in CurrentOrginACL.
     */
    public $RemovedAddresses;

    /**
     * @var Addresses The latest origin IP range is unchanged compared with the origin IP range in CurrentOrginACL.
     */
    public $NoChangeAddresses;

    /**
     * @param string $Version Version number.
     * @param string $PlannedActiveTime Version effective time, which adopts UTC+8 and follows the date and time format of the ISO 8601 standard.
     * @param Addresses $EntireAddresses IP range details.
     * @param Addresses $AddedAddresses The latest origin IP range newly-added compared with the origin IP range in CurrentOrginACL.
     * @param Addresses $RemovedAddresses The latest origin IP range deleted compared with the origin IP range in CurrentOrginACL.
     * @param Addresses $NoChangeAddresses The latest origin IP range is unchanged compared with the origin IP range in CurrentOrginACL.
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("PlannedActiveTime",$param) and $param["PlannedActiveTime"] !== null) {
            $this->PlannedActiveTime = $param["PlannedActiveTime"];
        }

        if (array_key_exists("EntireAddresses",$param) and $param["EntireAddresses"] !== null) {
            $this->EntireAddresses = new Addresses();
            $this->EntireAddresses->deserialize($param["EntireAddresses"]);
        }

        if (array_key_exists("AddedAddresses",$param) and $param["AddedAddresses"] !== null) {
            $this->AddedAddresses = new Addresses();
            $this->AddedAddresses->deserialize($param["AddedAddresses"]);
        }

        if (array_key_exists("RemovedAddresses",$param) and $param["RemovedAddresses"] !== null) {
            $this->RemovedAddresses = new Addresses();
            $this->RemovedAddresses->deserialize($param["RemovedAddresses"]);
        }

        if (array_key_exists("NoChangeAddresses",$param) and $param["NoChangeAddresses"] !== null) {
            $this->NoChangeAddresses = new Addresses();
            $this->NoChangeAddresses->deserialize($param["NoChangeAddresses"]);
        }
    }
}
