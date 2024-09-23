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
 * Department
 *
 * @method integer getNodeId() Obtain Organization node ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNodeId(integer $NodeId) Set Organization node ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain Name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getParentNodeId() Obtain Parent node ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setParentNodeId(integer $ParentNodeId) Set Parent node ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRemark() Obtain Remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRemark(string $Remark) Set Remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Member tag list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Member tag list.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class OrgNode extends AbstractModel
{
    /**
     * @var integer Organization node ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NodeId;

    /**
     * @var string Name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var integer Parent node ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ParentNodeId;

    /**
     * @var string Remarks
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Remark;

    /**
     * @var string Creation time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Update time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var array Member tag list.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @param integer $NodeId Organization node ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name Name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ParentNodeId Parent node ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Remark Remarks
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Update time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Member tag list.
Note: This field may return null, indicating that no valid values can be obtained.
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
