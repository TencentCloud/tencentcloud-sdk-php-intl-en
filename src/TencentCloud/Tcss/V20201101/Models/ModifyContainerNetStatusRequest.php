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
 * ModifyContainerNetStatus request structure.
 *
 * @method string getContainerID() Obtain Container ID
 * @method void setContainerID(string $ContainerID) Set Container ID
 * @method string getStatus() Obtain Status
`EVENT_ISOLATE_CONTAINER`: Isolate the container.
`EVENT_RESOTRE_CONTAINER`: Recover the container.
)
 * @method void setStatus(string $Status) Set Status
`EVENT_ISOLATE_CONTAINER`: Isolate the container.
`EVENT_RESOTRE_CONTAINER`: Recover the container.
)
 */
class ModifyContainerNetStatusRequest extends AbstractModel
{
    /**
     * @var string Container ID
     */
    public $ContainerID;

    /**
     * @var string Status
`EVENT_ISOLATE_CONTAINER`: Isolate the container.
`EVENT_RESOTRE_CONTAINER`: Recover the container.
)
     */
    public $Status;

    /**
     * @param string $ContainerID Container ID
     * @param string $Status Status
`EVENT_ISOLATE_CONTAINER`: Isolate the container.
`EVENT_RESOTRE_CONTAINER`: Recover the container.
)
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
        if (array_key_exists("ContainerID",$param) and $param["ContainerID"] !== null) {
            $this->ContainerID = $param["ContainerID"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
