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
 * Tracking set list
 *
 * @method string getName() Obtain Tracking set name
 * @method void setName(string $Name) Set Tracking set name
 * @method string getActionType() Obtain Tracking set event type (`Read`: Read; `Write`: Write; `*`: All)
 * @method void setActionType(string $ActionType) Set Tracking set event type (`Read`: Read; `Write`: Write; `*`: All)
 * @method string getResourceType() Obtain The product to which the tracking set event belongs, such as `cos`, or `*` that indicates all products
 * @method void setResourceType(string $ResourceType) Set The product to which the tracking set event belongs, such as `cos`, or `*` that indicates all products
 * @method integer getStatus() Obtain Tracking set status (0: Not enabled; 1: Enabled)
 * @method void setStatus(integer $Status) Set Tracking set status (0: Not enabled; 1: Enabled)
 * @method array getEventNames() Obtain The list of API names of tracking set events (`*`: All)
 * @method void setEventNames(array $EventNames) Set The list of API names of tracking set events (`*`: All)
 * @method Storage getStorage() Obtain Storage type of shipped data. Valid values: `cos`, `cls`.
 * @method void setStorage(Storage $Storage) Set Storage type of shipped data. Valid values: `cos`, `cls`.
 * @method string getCreateTime() Obtain Creation time of the tracking set
 * @method void setCreateTime(string $CreateTime) Set Creation time of the tracking set
 * @method integer getTrackId() Obtain Tracking set ID
 * @method void setTrackId(integer $TrackId) Set Tracking set ID
 */
class Tracks extends AbstractModel
{
    /**
     * @var string Tracking set name
     */
    public $Name;

    /**
     * @var string Tracking set event type (`Read`: Read; `Write`: Write; `*`: All)
     */
    public $ActionType;

    /**
     * @var string The product to which the tracking set event belongs, such as `cos`, or `*` that indicates all products
     */
    public $ResourceType;

    /**
     * @var integer Tracking set status (0: Not enabled; 1: Enabled)
     */
    public $Status;

    /**
     * @var array The list of API names of tracking set events (`*`: All)
     */
    public $EventNames;

    /**
     * @var Storage Storage type of shipped data. Valid values: `cos`, `cls`.
     */
    public $Storage;

    /**
     * @var string Creation time of the tracking set
     */
    public $CreateTime;

    /**
     * @var integer Tracking set ID
     */
    public $TrackId;

    /**
     * @param string $Name Tracking set name
     * @param string $ActionType Tracking set event type (`Read`: Read; `Write`: Write; `*`: All)
     * @param string $ResourceType The product to which the tracking set event belongs, such as `cos`, or `*` that indicates all products
     * @param integer $Status Tracking set status (0: Not enabled; 1: Enabled)
     * @param array $EventNames The list of API names of tracking set events (`*`: All)
     * @param Storage $Storage Storage type of shipped data. Valid values: `cos`, `cls`.
     * @param string $CreateTime Creation time of the tracking set
     * @param integer $TrackId Tracking set ID
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("TrackId",$param) and $param["TrackId"] !== null) {
            $this->TrackId = $param["TrackId"];
        }
    }
}
