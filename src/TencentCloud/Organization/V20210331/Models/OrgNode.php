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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Department
 *
 * @method integer getNodeId() Obtain Organization node ID.
 * @method void setNodeId(integer $NodeId) Set Organization node ID.
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method integer getParentNodeId() Obtain Parent Node ID
 * @method void setParentNodeId(integer $ParentNodeId) Set Parent Node ID
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getUpdateTime() Obtain Update date
 * @method void setUpdateTime(string $UpdateTime) Set Update date
 * @method array getTags() Obtain Member tag list.
 * @method void setTags(array $Tags) Set Member tag list.
 */
class OrgNode extends AbstractModel
{
    /**
     * @var integer Organization node ID.
     */
    public $NodeId;

    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var integer Parent Node ID
     */
    public $ParentNodeId;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Update date
     */
    public $UpdateTime;

    /**
     * @var array Member tag list.
     */
    public $Tags;

    /**
     * @param integer $NodeId Organization node ID.
     * @param string $Name Name
     * @param integer $ParentNodeId Parent Node ID
     * @param string $Remark Remarks
     * @param string $CreateTime Creation time
     * @param string $UpdateTime Update date
     * @param array $Tags Member tag list.
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

        if (array_key_exists("ParentNodeId",$param) and $param["ParentNodeId"] !== null) {
            $this->ParentNodeId = $param["ParentNodeId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
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
