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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyVirusFileStatus request structure.
 *
 * @method array getEventIdSet() Obtain IDs of events
 * @method void setEventIdSet(array $EventIdSet) Set IDs of events
 * @method string getStatus() Obtain Event status   
    `EVENT_DEALED`: Processed.
    `EVENT_INGNORE`: Ignored.
    `EVENT_DEL`: Deleted.
    `EVENT_ADD_WHITE`: Allowed.
    `EVENT_PENDING`: Pending.
	`EVENT_ISOLATE_CONTAINER`: Container isolated.
	`EVENT_RESOTRE_CONTAINER`: Container recovered.
 * @method void setStatus(string $Status) Set Event status   
    `EVENT_DEALED`: Processed.
    `EVENT_INGNORE`: Ignored.
    `EVENT_DEL`: Deleted.
    `EVENT_ADD_WHITE`: Allowed.
    `EVENT_PENDING`: Pending.
	`EVENT_ISOLATE_CONTAINER`: Container isolated.
	`EVENT_RESOTRE_CONTAINER`: Container recovered.
 * @method string getRemark() Obtain Event remarks
 * @method void setRemark(string $Remark) Set Event remarks
 * @method boolean getAutoIsolate() Obtain Whether to automatically isolate files with the same MD5 checksum
 * @method void setAutoIsolate(boolean $AutoIsolate) Set Whether to automatically isolate files with the same MD5 checksum
 */
class ModifyVirusFileStatusRequest extends AbstractModel
{
    /**
     * @var array IDs of events
     */
    public $EventIdSet;

    /**
     * @var string Event status   
    `EVENT_DEALED`: Processed.
    `EVENT_INGNORE`: Ignored.
    `EVENT_DEL`: Deleted.
    `EVENT_ADD_WHITE`: Allowed.
    `EVENT_PENDING`: Pending.
	`EVENT_ISOLATE_CONTAINER`: Container isolated.
	`EVENT_RESOTRE_CONTAINER`: Container recovered.
     */
    public $Status;

    /**
     * @var string Event remarks
     */
    public $Remark;

    /**
     * @var boolean Whether to automatically isolate files with the same MD5 checksum
     */
    public $AutoIsolate;

    /**
     * @param array $EventIdSet IDs of events
     * @param string $Status Event status   
    `EVENT_DEALED`: Processed.
    `EVENT_INGNORE`: Ignored.
    `EVENT_DEL`: Deleted.
    `EVENT_ADD_WHITE`: Allowed.
    `EVENT_PENDING`: Pending.
	`EVENT_ISOLATE_CONTAINER`: Container isolated.
	`EVENT_RESOTRE_CONTAINER`: Container recovered.
     * @param string $Remark Event remarks
     * @param boolean $AutoIsolate Whether to automatically isolate files with the same MD5 checksum
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
        if (array_key_exists("EventIdSet",$param) and $param["EventIdSet"] !== null) {
            $this->EventIdSet = $param["EventIdSet"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("AutoIsolate",$param) and $param["AutoIsolate"] !== null) {
            $this->AutoIsolate = $param["AutoIsolate"];
        }
    }
}
