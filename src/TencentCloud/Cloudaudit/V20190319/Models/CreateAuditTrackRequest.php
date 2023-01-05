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
namespace TencentCloud\Cloudaudit\V20190319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAuditTrack request structure.
 *
 * @method string getName() Obtain Tracking set name, which can only contain 3-48 letters, digits, hyphens, and underscores.
 * @method void setName(string $Name) Set Tracking set name, which can only contain 3-48 letters, digits, hyphens, and underscores.
 * @method string getActionType() Obtain Tracking set event type (`Read`: Read; `Write`: Write; `*`: All)
 * @method void setActionType(string $ActionType) Set Tracking set event type (`Read`: Read; `Write`: Write; `*`: All)
 * @method string getResourceType() Obtain The product to which the tracking set event belongs. The value can be a single product such as `cos`, or `*` that indicates all products.
 * @method void setResourceType(string $ResourceType) Set The product to which the tracking set event belongs. The value can be a single product such as `cos`, or `*` that indicates all products.
 * @method integer getStatus() Obtain Tracking set status (0: Not enabled; 1: Enabled)
 * @method void setStatus(integer $Status) Set Tracking set status (0: Not enabled; 1: Enabled)
 * @method array getEventNames() Obtain The list of API names of tracking set events. When `ResourceType` is `*`, the value of `EventNames` must be `*`. When `ResourceType` is a specified product, the value of `EventNames` can be `*`. When `ResourceType` is `cos` or `cls`, up to 10 APIs are supported.
 * @method void setEventNames(array $EventNames) Set The list of API names of tracking set events. When `ResourceType` is `*`, the value of `EventNames` must be `*`. When `ResourceType` is a specified product, the value of `EventNames` can be `*`. When `ResourceType` is `cos` or `cls`, up to 10 APIs are supported.
 * @method Storage getStorage() Obtain Storage type of shipped data. Valid values: `cos`, `cls`.
 * @method void setStorage(Storage $Storage) Set Storage type of shipped data. Valid values: `cos`, `cls`.
 * @method integer getTrackForAllMembers() Obtain Whether to enable the feature of shipping organization members’ operation logs to the organization admin account or the trusted service admin account (0: Not enabled; 1: Enabled. This feature can only be enabled by the organization admin account or the trusted service admin account)
 * @method void setTrackForAllMembers(integer $TrackForAllMembers) Set Whether to enable the feature of shipping organization members’ operation logs to the organization admin account or the trusted service admin account (0: Not enabled; 1: Enabled. This feature can only be enabled by the organization admin account or the trusted service admin account)
 */
class CreateAuditTrackRequest extends AbstractModel
{
    /**
     * @var string Tracking set name, which can only contain 3-48 letters, digits, hyphens, and underscores.
     */
    public $Name;

    /**
     * @var string Tracking set event type (`Read`: Read; `Write`: Write; `*`: All)
     */
    public $ActionType;

    /**
     * @var string The product to which the tracking set event belongs. The value can be a single product such as `cos`, or `*` that indicates all products.
     */
    public $ResourceType;

    /**
     * @var integer Tracking set status (0: Not enabled; 1: Enabled)
     */
    public $Status;

    /**
     * @var array The list of API names of tracking set events. When `ResourceType` is `*`, the value of `EventNames` must be `*`. When `ResourceType` is a specified product, the value of `EventNames` can be `*`. When `ResourceType` is `cos` or `cls`, up to 10 APIs are supported.
     */
    public $EventNames;

    /**
     * @var Storage Storage type of shipped data. Valid values: `cos`, `cls`.
     */
    public $Storage;

    /**
     * @var integer Whether to enable the feature of shipping organization members’ operation logs to the organization admin account or the trusted service admin account (0: Not enabled; 1: Enabled. This feature can only be enabled by the organization admin account or the trusted service admin account)
     */
    public $TrackForAllMembers;

    /**
     * @param string $Name Tracking set name, which can only contain 3-48 letters, digits, hyphens, and underscores.
     * @param string $ActionType Tracking set event type (`Read`: Read; `Write`: Write; `*`: All)
     * @param string $ResourceType The product to which the tracking set event belongs. The value can be a single product such as `cos`, or `*` that indicates all products.
     * @param integer $Status Tracking set status (0: Not enabled; 1: Enabled)
     * @param array $EventNames The list of API names of tracking set events. When `ResourceType` is `*`, the value of `EventNames` must be `*`. When `ResourceType` is a specified product, the value of `EventNames` can be `*`. When `ResourceType` is `cos` or `cls`, up to 10 APIs are supported.
     * @param Storage $Storage Storage type of shipped data. Valid values: `cos`, `cls`.
     * @param integer $TrackForAllMembers Whether to enable the feature of shipping organization members’ operation logs to the organization admin account or the trusted service admin account (0: Not enabled; 1: Enabled. This feature can only be enabled by the organization admin account or the trusted service admin account)
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EventNames",$param) and $param["EventNames"] !== null) {
            $this->EventNames = $param["EventNames"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = new Storage();
            $this->Storage->deserialize($param["Storage"]);
        }

        if (array_key_exists("TrackForAllMembers",$param) and $param["TrackForAllMembers"] !== null) {
            $this->TrackForAllMembers = $param["TrackForAllMembers"];
        }
    }
}
