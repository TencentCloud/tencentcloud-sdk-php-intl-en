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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateOrganizationNode request structure.
 *
 * @method integer getNodeId() Obtain Node ID, which can be obtained through [DescribeOrganizationNodes](https://intl.cloud.tencent.com/document/product/850/82926?from_cn_redirect=1).
 * @method void setNodeId(integer $NodeId) Set Node ID, which can be obtained through [DescribeOrganizationNodes](https://intl.cloud.tencent.com/document/product/850/82926?from_cn_redirect=1).
 * @method string getName() Obtain Node name, which can contain up to 40 letters, digits, and symbols `+@&._[]-`.
 * @method void setName(string $Name) Set Node name, which can contain up to 40 letters, digits, and symbols `+@&._[]-`.
 * @method string getRemark() Obtain Remarks.
 * @method void setRemark(string $Remark) Set Remarks.
 */
class UpdateOrganizationNodeRequest extends AbstractModel
{
    /**
     * @var integer Node ID, which can be obtained through [DescribeOrganizationNodes](https://intl.cloud.tencent.com/document/product/850/82926?from_cn_redirect=1).
     */
    public $NodeId;

    /**
     * @var string Node name, which can contain up to 40 letters, digits, and symbols `+@&._[]-`.
     */
    public $Name;

    /**
     * @var string Remarks.
     */
    public $Remark;

    /**
     * @param integer $NodeId Node ID, which can be obtained through [DescribeOrganizationNodes](https://intl.cloud.tencent.com/document/product/850/82926?from_cn_redirect=1).
     * @param string $Name Node name, which can contain up to 40 letters, digits, and symbols `+@&._[]-`.
     * @param string $Remark Remarks.
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
        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
