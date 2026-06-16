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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyResourceUserGroupResource request structure.
 *
 * @method integer getProjectId() Obtain Project ID.
 * @method void setProjectId(integer $ProjectId) Set Project ID.
 * @method integer getUserGroupId() Obtain User ID
 * @method void setUserGroupId(integer $UserGroupId) Set User ID
 * @method UserResourceDTO getResource() Obtain resource
 * @method void setResource(UserResourceDTO $Resource) Set resource
 * @method array getEntityIds() Obtain Entity class
 * @method void setEntityIds(array $EntityIds) Set Entity class
 * @method string getResourceType() Obtain Resource type.
 * @method void setResourceType(string $ResourceType) Set Resource type.
 */
class ModifyResourceUserGroupResourceRequest extends AbstractModel
{
    /**
     * @var integer Project ID.
     */
    public $ProjectId;

    /**
     * @var integer User ID
     */
    public $UserGroupId;

    /**
     * @var UserResourceDTO resource
     */
    public $Resource;

    /**
     * @var array Entity class
     */
    public $EntityIds;

    /**
     * @var string Resource type.
     */
    public $ResourceType;

    /**
     * @param integer $ProjectId Project ID.
     * @param integer $UserGroupId User ID
     * @param UserResourceDTO $Resource resource
     * @param array $EntityIds Entity class
     * @param string $ResourceType Resource type.
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

        if (array_key_exists("UserGroupId",$param) and $param["UserGroupId"] !== null) {
            $this->UserGroupId = $param["UserGroupId"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = new UserResourceDTO();
            $this->Resource->deserialize($param["Resource"]);
        }

        if (array_key_exists("EntityIds",$param) and $param["EntityIds"] !== null) {
            $this->EntityIds = $param["EntityIds"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }
    }
}
