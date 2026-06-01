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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceProject request structure.
 *
 * @method array getInstanceIds() Obtain Instance ID, in the format such as cdb-c1nl9rpv. This matches the instance ID displayed on the TencentDB console. You can obtain it through the query instance list API (https://www.tencentcloud.com/document/api/236/15872?from_cn_redirect=1). The value is the InstanceId field in the output parameter.
Description: Multiple instance IDs can be entered for modification. The json format is as follows.
[
    "cdb-30z11v8s",
    "cdb-93h11efg"
  ]
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID, in the format such as cdb-c1nl9rpv. This matches the instance ID displayed on the TencentDB console. You can obtain it through the query instance list API (https://www.tencentcloud.com/document/api/236/15872?from_cn_redirect=1). The value is the InstanceId field in the output parameter.
Description: Multiple instance IDs can be entered for modification. The json format is as follows.
[
    "cdb-30z11v8s",
    "cdb-93h11efg"
  ]
 * @method integer getNewProjectId() Obtain ID of the project to which instance belongs can be queried on the Projects page in the account center.
Description: This item is required.
 * @method void setNewProjectId(integer $NewProjectId) Set ID of the project to which instance belongs can be queried on the Projects page in the account center.
Description: This item is required.
 */
class ModifyDBInstanceProjectRequest extends AbstractModel
{
    /**
     * @var array Instance ID, in the format such as cdb-c1nl9rpv. This matches the instance ID displayed on the TencentDB console. You can obtain it through the query instance list API (https://www.tencentcloud.com/document/api/236/15872?from_cn_redirect=1). The value is the InstanceId field in the output parameter.
Description: Multiple instance IDs can be entered for modification. The json format is as follows.
[
    "cdb-30z11v8s",
    "cdb-93h11efg"
  ]
     */
    public $InstanceIds;

    /**
     * @var integer ID of the project to which instance belongs can be queried on the Projects page in the account center.
Description: This item is required.
     */
    public $NewProjectId;

    /**
     * @param array $InstanceIds Instance ID, in the format such as cdb-c1nl9rpv. This matches the instance ID displayed on the TencentDB console. You can obtain it through the query instance list API (https://www.tencentcloud.com/document/api/236/15872?from_cn_redirect=1). The value is the InstanceId field in the output parameter.
Description: Multiple instance IDs can be entered for modification. The json format is as follows.
[
    "cdb-30z11v8s",
    "cdb-93h11efg"
  ]
     * @param integer $NewProjectId ID of the project to which instance belongs can be queried on the Projects page in the account center.
Description: This item is required.
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("NewProjectId",$param) and $param["NewProjectId"] !== null) {
            $this->NewProjectId = $param["NewProjectId"];
        }
    }
}
