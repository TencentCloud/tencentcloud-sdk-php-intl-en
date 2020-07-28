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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyProxyGroupAttribute request structure.
 *
 * @method string getGroupId() Obtain ID of the connection group to be modified.
 * @method void setGroupId(string $GroupId) Set ID of the connection group to be modified.
 * @method string getGroupName() Obtain New connection group name. Up to 30 characters. The extra characters will be truncated.
 * @method void setGroupName(string $GroupName) Set New connection group name. Up to 30 characters. The extra characters will be truncated.
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 */
class ModifyProxyGroupAttributeRequest extends AbstractModel
{
    /**
     * @var string ID of the connection group to be modified.
     */
    public $GroupId;

    /**
     * @var string New connection group name. Up to 30 characters. The extra characters will be truncated.
     */
    public $GroupName;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @param string $GroupId ID of the connection group to be modified.
     * @param string $GroupName New connection group name. Up to 30 characters. The extra characters will be truncated.
     * @param integer $ProjectId Project ID
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
