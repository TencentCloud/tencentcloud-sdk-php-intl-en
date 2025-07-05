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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyVulDefenceEventStatus request structure.
 *
 * @method array getEventIDs() Obtain Array of event IDs
 * @method void setEventIDs(array $EventIDs) Set Array of event IDs
 * @method string getStatus() Obtain Operation status:
Valid values: `EVENT_DEALED` (processed); `EVENT_IGNORE` (ignore); `EVENT_ISOLATE_CONTAINER` (isolate the container); `EVENT_DEL` (delete).
 * @method void setStatus(string $Status) Set Operation status:
Valid values: `EVENT_DEALED` (processed); `EVENT_IGNORE` (ignore); `EVENT_ISOLATE_CONTAINER` (isolate the container); `EVENT_DEL` (delete).
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 */
class ModifyVulDefenceEventStatusRequest extends AbstractModel
{
    /**
     * @var array Array of event IDs
     */
    public $EventIDs;

    /**
     * @var string Operation status:
Valid values: `EVENT_DEALED` (processed); `EVENT_IGNORE` (ignore); `EVENT_ISOLATE_CONTAINER` (isolate the container); `EVENT_DEL` (delete).
     */
    public $Status;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @param array $EventIDs Array of event IDs
     * @param string $Status Operation status:
Valid values: `EVENT_DEALED` (processed); `EVENT_IGNORE` (ignore); `EVENT_ISOLATE_CONTAINER` (isolate the container); `EVENT_DEL` (delete).
     * @param string $Remark Remarks
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
        if (array_key_exists("EventIDs",$param) and $param["EventIDs"] !== null) {
            $this->EventIDs = $param["EventIDs"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
