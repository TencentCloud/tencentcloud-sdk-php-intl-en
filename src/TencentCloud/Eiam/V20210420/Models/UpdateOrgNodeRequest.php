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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateOrgNode request structure.
 *
 * @method string getOrgNodeId() Obtain Organization node ID, which is globally unique.
 * @method void setOrgNodeId(string $OrgNodeId) Set Organization node ID, which is globally unique.
 * @method string getDisplayName() Obtain Organization node name, which can contain up to 64 characters.
 * @method void setDisplayName(string $DisplayName) Set Organization node name, which can contain up to 64 characters.
 * @method string getDescription() Obtain Organization node description.
 * @method void setDescription(string $Description) Set Organization node description.
 * @method string getCustomizedOrgNodeId() Obtain External ID of the organization node, which is optional and customizable. If this parameter is specified, its uniqueness will be verified.
 * @method void setCustomizedOrgNodeId(string $CustomizedOrgNodeId) Set External ID of the organization node, which is optional and customizable. If this parameter is specified, its uniqueness will be verified.
 */
class UpdateOrgNodeRequest extends AbstractModel
{
    /**
     * @var string Organization node ID, which is globally unique.
     */
    public $OrgNodeId;

    /**
     * @var string Organization node name, which can contain up to 64 characters.
     */
    public $DisplayName;

    /**
     * @var string Organization node description.
     */
    public $Description;

    /**
     * @var string External ID of the organization node, which is optional and customizable. If this parameter is specified, its uniqueness will be verified.
     */
    public $CustomizedOrgNodeId;

    /**
     * @param string $OrgNodeId Organization node ID, which is globally unique.
     * @param string $DisplayName Organization node name, which can contain up to 64 characters.
     * @param string $Description Organization node description.
     * @param string $CustomizedOrgNodeId External ID of the organization node, which is optional and customizable. If this parameter is specified, its uniqueness will be verified.
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
        if (array_key_exists("OrgNodeId",$param) and $param["OrgNodeId"] !== null) {
            $this->OrgNodeId = $param["OrgNodeId"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CustomizedOrgNodeId",$param) and $param["CustomizedOrgNodeId"] !== null) {
            $this->CustomizedOrgNodeId = $param["CustomizedOrgNodeId"];
        }
    }
}
