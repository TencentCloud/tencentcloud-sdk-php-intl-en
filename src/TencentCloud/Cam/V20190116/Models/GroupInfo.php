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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getGroupId() 获取User group ID
 * @method void setGroupId(integer $GroupId) 设置User group ID
 * @method string getGroupName() 获取User Group name
 * @method void setGroupName(string $GroupName) 设置User Group name
 * @method string getCreateTime() 获取Time User Group created
 * @method void setCreateTime(string $CreateTime) 设置Time User Group created
 * @method string getRemark() 获取User Group description
 * @method void setRemark(string $Remark) 设置User Group description
 */

/**
 *User Group information
 */
class GroupInfo extends AbstractModel
{
    /**
     * @var integer User group ID
     */
    public $GroupId;

    /**
     * @var string User Group name
     */
    public $GroupName;

    /**
     * @var string Time User Group created
     */
    public $CreateTime;

    /**
     * @var string User Group description
     */
    public $Remark;
    /**
     * @param integer $GroupId User group ID
     * @param string $GroupName User Group name
     * @param string $CreateTime Time User Group created
     * @param string $Remark User Group description
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
