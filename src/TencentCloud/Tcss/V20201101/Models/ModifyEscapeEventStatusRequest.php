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
 * ModifyEscapeEventStatus request structure.
 *
 * @method array getEventIdSet() Obtain List of event IDs
 * @method void setEventIdSet(array $EventIdSet) Set List of event IDs
 * @method string getStatus() Obtain Event status:
`EVENT_UNDEAL`: Pending (Unignored).
`EVENT_DEALED`: Processed.
`EVENT_IGNORE`: Ignored.
`EVENT_DELETE`: Deleted.
`EVENT_ADD_WHITE`: Allowed.
 * @method void setStatus(string $Status) Set Event status:
`EVENT_UNDEAL`: Pending (Unignored).
`EVENT_DEALED`: Processed.
`EVENT_IGNORE`: Ignored.
`EVENT_DELETE`: Deleted.
`EVENT_ADD_WHITE`: Allowed.
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method array getImageIDs() Obtain Array of allowed image IDs
 * @method void setImageIDs(array $ImageIDs) Set Array of allowed image IDs
 * @method array getEventType() Obtain Allowed event type
   `ESCAPE_CGROUPS`: Cgroup escape.
   `ESCAPE_TAMPER_SENSITIVE_FILE`: File tamper escape.
   `ESCAPE_DOCKER_API`: Docker API access escape.
   `ESCAPE_VUL_OCCURRED`: Vulnerability exploit.
   `MOUNT_SENSITIVE_PTAH`: Sensitive path mount.
   `PRIVILEGE_CONTAINER_START`: Privileged container.
   `PRIVILEGE`: Program privilege escalation escape.
 * @method void setEventType(array $EventType) Set Allowed event type
   `ESCAPE_CGROUPS`: Cgroup escape.
   `ESCAPE_TAMPER_SENSITIVE_FILE`: File tamper escape.
   `ESCAPE_DOCKER_API`: Docker API access escape.
   `ESCAPE_VUL_OCCURRED`: Vulnerability exploit.
   `MOUNT_SENSITIVE_PTAH`: Sensitive path mount.
   `PRIVILEGE_CONTAINER_START`: Privileged container.
   `PRIVILEGE`: Program privilege escalation escape.
 */
class ModifyEscapeEventStatusRequest extends AbstractModel
{
    /**
     * @var array List of event IDs
     */
    public $EventIdSet;

    /**
     * @var string Event status:
`EVENT_UNDEAL`: Pending (Unignored).
`EVENT_DEALED`: Processed.
`EVENT_IGNORE`: Ignored.
`EVENT_DELETE`: Deleted.
`EVENT_ADD_WHITE`: Allowed.
     */
    public $Status;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var array Array of allowed image IDs
     */
    public $ImageIDs;

    /**
     * @var array Allowed event type
   `ESCAPE_CGROUPS`: Cgroup escape.
   `ESCAPE_TAMPER_SENSITIVE_FILE`: File tamper escape.
   `ESCAPE_DOCKER_API`: Docker API access escape.
   `ESCAPE_VUL_OCCURRED`: Vulnerability exploit.
   `MOUNT_SENSITIVE_PTAH`: Sensitive path mount.
   `PRIVILEGE_CONTAINER_START`: Privileged container.
   `PRIVILEGE`: Program privilege escalation escape.
     */
    public $EventType;

    /**
     * @param array $EventIdSet List of event IDs
     * @param string $Status Event status:
`EVENT_UNDEAL`: Pending (Unignored).
`EVENT_DEALED`: Processed.
`EVENT_IGNORE`: Ignored.
`EVENT_DELETE`: Deleted.
`EVENT_ADD_WHITE`: Allowed.
     * @param string $Remark Remarks
     * @param array $ImageIDs Array of allowed image IDs
     * @param array $EventType Allowed event type
   `ESCAPE_CGROUPS`: Cgroup escape.
   `ESCAPE_TAMPER_SENSITIVE_FILE`: File tamper escape.
   `ESCAPE_DOCKER_API`: Docker API access escape.
   `ESCAPE_VUL_OCCURRED`: Vulnerability exploit.
   `MOUNT_SENSITIVE_PTAH`: Sensitive path mount.
   `PRIVILEGE_CONTAINER_START`: Privileged container.
   `PRIVILEGE`: Program privilege escalation escape.
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

        if (array_key_exists("ImageIDs",$param) and $param["ImageIDs"] !== null) {
            $this->ImageIDs = $param["ImageIDs"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }
    }
}
