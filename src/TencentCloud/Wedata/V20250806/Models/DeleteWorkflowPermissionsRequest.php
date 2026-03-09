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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteWorkflowPermissions request structure.
 *
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method string getEntityId() Obtain Authorize entity ID.
 * @method void setEntityId(string $EntityId) Set Authorize entity ID.
 * @method string getEntityType() Obtain Authorized entity type, folder/workflow.
 * @method void setEntityType(string $EntityType) Set Authorized entity type, folder/workflow.
 * @method array getDeletePermissionList() Obtain Delete permission array.
 * @method void setDeletePermissionList(array $DeletePermissionList) Set Delete permission array.
 */
class DeleteWorkflowPermissionsRequest extends AbstractModel
{
    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var string Authorize entity ID.
     */
    public $EntityId;

    /**
     * @var string Authorized entity type, folder/workflow.
     */
    public $EntityType;

    /**
     * @var array Delete permission array.
     */
    public $DeletePermissionList;

    /**
     * @param string $ProjectId Project ID.
     * @param string $EntityId Authorize entity ID.
     * @param string $EntityType Authorized entity type, folder/workflow.
     * @param array $DeletePermissionList Delete permission array.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("EntityId",$param) and $param["EntityId"] !== null) {
            $this->EntityId = $param["EntityId"];
        }

        if (array_key_exists("EntityType",$param) and $param["EntityType"] !== null) {
            $this->EntityType = $param["EntityType"];
        }

        if (array_key_exists("DeletePermissionList",$param) and $param["DeletePermissionList"] !== null) {
            $this->DeletePermissionList = [];
            foreach ($param["DeletePermissionList"] as $key => $value){
                $obj = new DeleteWorkflowPermission();
                $obj->deserialize($value);
                array_push($this->DeletePermissionList, $obj);
            }
        }
    }
}
