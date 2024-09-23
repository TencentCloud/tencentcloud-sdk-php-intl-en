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
 * AddOrganizationNode request structure.
 *
 * @method integer getParentNodeId() Obtain Parent node ID, which can be obtained through [DescribeOrganizationNodes](https://intl.cloud.tencent.com/document/product/850/82926?from_cn_redirect=1).
 * @method void setParentNodeId(integer $ParentNodeId) Set Parent node ID, which can be obtained through [DescribeOrganizationNodes](https://intl.cloud.tencent.com/document/product/850/82926?from_cn_redirect=1).
 * @method string getName() Obtain Node name, which can contain up to 40 letters, digits, and symbols `+@&._[]-`.
 * @method void setName(string $Name) Set Node name, which can contain up to 40 letters, digits, and symbols `+@&._[]-`.
 * @method string getRemark() Obtain Remarks.
 * @method void setRemark(string $Remark) Set Remarks.
 * @method array getTags() Obtain Department tag list, with a maximum of 10.
 * @method void setTags(array $Tags) Set Department tag list, with a maximum of 10.
 */
class AddOrganizationNodeRequest extends AbstractModel
{
    /**
     * @var integer Parent node ID, which can be obtained through [DescribeOrganizationNodes](https://intl.cloud.tencent.com/document/product/850/82926?from_cn_redirect=1).
     */
    public $ParentNodeId;

    /**
     * @var string Node name, which can contain up to 40 letters, digits, and symbols `+@&._[]-`.
     */
    public $Name;

    /**
     * @var string Remarks.
     */
    public $Remark;

    /**
     * @var array Department tag list, with a maximum of 10.
     */
    public $Tags;

    /**
     * @param integer $ParentNodeId Parent node ID, which can be obtained through [DescribeOrganizationNodes](https://intl.cloud.tencent.com/document/product/850/82926?from_cn_redirect=1).
     * @param string $Name Node name, which can contain up to 40 letters, digits, and symbols `+@&._[]-`.
     * @param string $Remark Remarks.
     * @param array $Tags Department tag list, with a maximum of 10.
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
        if (array_key_exists("ParentNodeId",$param) and $param["ParentNodeId"] !== null) {
            $this->ParentNodeId = $param["ParentNodeId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
