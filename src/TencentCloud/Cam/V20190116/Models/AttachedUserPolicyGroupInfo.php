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
 * Information on policies that are associated with the user and inherited from the user group
 *
 * @method integer getGroupId() Obtain Group ID.
 * @method void setGroupId(integer $GroupId) Set Group ID.
 * @method string getGroupName() Obtain Group name.
 * @method void setGroupName(string $GroupName) Set Group name.
 */
class AttachedUserPolicyGroupInfo extends AbstractModel
{
    /**
     * @var integer Group ID.
     */
    public $GroupId;

    /**
     * @var string Group name.
     */
    public $GroupName;

    /**
     * @param integer $GroupId Group ID.
     * @param string $GroupName Group name.
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
    }
}
