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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceProject request structure.
 *
 * @method array getInstanceIds() Obtain Array of instance IDs in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page. You can use the [instance list querying API](https://intl.cloud.tencent.com/document/api/236/15872?from_cn_redirect=1) to query the ID, whose value is the `InstanceId` value in output parameters.
 * @method void setInstanceIds(array $InstanceIds) Set Array of instance IDs in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page. You can use the [instance list querying API](https://intl.cloud.tencent.com/document/api/236/15872?from_cn_redirect=1) to query the ID, whose value is the `InstanceId` value in output parameters.
 * @method integer getNewProjectId() Obtain Project ID.
 * @method void setNewProjectId(integer $NewProjectId) Set Project ID.
 */
class ModifyDBInstanceProjectRequest extends AbstractModel
{
    /**
     * @var array Array of instance IDs in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page. You can use the [instance list querying API](https://intl.cloud.tencent.com/document/api/236/15872?from_cn_redirect=1) to query the ID, whose value is the `InstanceId` value in output parameters.
     */
    public $InstanceIds;

    /**
     * @var integer Project ID.
     */
    public $NewProjectId;

    /**
     * @param array $InstanceIds Array of instance IDs in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page. You can use the [instance list querying API](https://intl.cloud.tencent.com/document/api/236/15872?from_cn_redirect=1) to query the ID, whose value is the `InstanceId` value in output parameters.
     * @param integer $NewProjectId Project ID.
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
