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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * `DescribeGroup` response entity
 *
 * @method string getGroup() Obtain groupId
 * @method void setGroup(string $Group) Set groupId
 * @method string getProtocol() Obtain Protocol used by the group.
 * @method void setProtocol(string $Protocol) Set Protocol used by the group.
 */
class DescribeGroup extends AbstractModel
{
    /**
     * @var string groupId
     */
    public $Group;

    /**
     * @var string Protocol used by the group.
     */
    public $Protocol;

    /**
     * @param string $Group groupId
     * @param string $Protocol Protocol used by the group.
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
        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }
    }
}
