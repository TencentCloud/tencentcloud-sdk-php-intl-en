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
 * DescribeOrgNode request structure.
 *
 * @method string getOrgNodeId() Obtain Organization node ID, which is globally unique and can contain up to 64 characters. If this parameter is left empty, the information of the root organization node will be read by default.
 * @method void setOrgNodeId(string $OrgNodeId) Set Organization node ID, which is globally unique and can contain up to 64 characters. If this parameter is left empty, the information of the root organization node will be read by default.
 * @method boolean getIncludeOrgNodeChildInfo() Obtain Whether to read the information of its sub-nodes. When this parameter is left empty or specified as `false`, only the information of the current organization node will be read by default. When it is specified as `true`, the information of the current organization node and its level-1 sub-nodes will be read.
 * @method void setIncludeOrgNodeChildInfo(boolean $IncludeOrgNodeChildInfo) Set Whether to read the information of its sub-nodes. When this parameter is left empty or specified as `false`, only the information of the current organization node will be read by default. When it is specified as `true`, the information of the current organization node and its level-1 sub-nodes will be read.
 */
class DescribeOrgNodeRequest extends AbstractModel
{
    /**
     * @var string Organization node ID, which is globally unique and can contain up to 64 characters. If this parameter is left empty, the information of the root organization node will be read by default.
     */
    public $OrgNodeId;

    /**
     * @var boolean Whether to read the information of its sub-nodes. When this parameter is left empty or specified as `false`, only the information of the current organization node will be read by default. When it is specified as `true`, the information of the current organization node and its level-1 sub-nodes will be read.
     */
    public $IncludeOrgNodeChildInfo;

    /**
     * @param string $OrgNodeId Organization node ID, which is globally unique and can contain up to 64 characters. If this parameter is left empty, the information of the root organization node will be read by default.
     * @param boolean $IncludeOrgNodeChildInfo Whether to read the information of its sub-nodes. When this parameter is left empty or specified as `false`, only the information of the current organization node will be read by default. When it is specified as `true`, the information of the current organization node and its level-1 sub-nodes will be read.
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

        if (array_key_exists("IncludeOrgNodeChildInfo",$param) and $param["IncludeOrgNodeChildInfo"] !== null) {
            $this->IncludeOrgNodeChildInfo = $param["IncludeOrgNodeChildInfo"];
        }
    }
}
