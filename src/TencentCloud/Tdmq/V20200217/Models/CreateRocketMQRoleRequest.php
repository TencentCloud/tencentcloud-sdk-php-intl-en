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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRocketMQRole request structure.
 *
 * @method string getRoleName() Obtain Role name. Does not support Chinese characters and special characters other than hyphens (-) and underscores (_), and must be greater than 0 and less than or equal to 32 in length.
 * @method void setRoleName(string $RoleName) Set Role name. Does not support Chinese characters and special characters other than hyphens (-) and underscores (_), and must be greater than 0 and less than or equal to 32 in length.
 * @method string getClusterId() Obtain Required field, cluster ID
 * @method void setClusterId(string $ClusterId) Set Required field, cluster ID
 * @method string getRemark() Obtain Remark description. Length must be greater than or equal to 0 and less than or equal to 128.
 * @method void setRemark(string $Remark) Set Remark description. Length must be greater than or equal to 0 and less than or equal to 128.
 * @method string getPermType() Obtain Role authorization type (cluster: Cluster; topic or consumer group: TopicAndGroup).
 * @method void setPermType(string $PermType) Set Role authorization type (cluster: Cluster; topic or consumer group: TopicAndGroup).
 */
class CreateRocketMQRoleRequest extends AbstractModel
{
    /**
     * @var string Role name. Does not support Chinese characters and special characters other than hyphens (-) and underscores (_), and must be greater than 0 and less than or equal to 32 in length.
     */
    public $RoleName;

    /**
     * @var string Required field, cluster ID
     */
    public $ClusterId;

    /**
     * @var string Remark description. Length must be greater than or equal to 0 and less than or equal to 128.
     */
    public $Remark;

    /**
     * @var string Role authorization type (cluster: Cluster; topic or consumer group: TopicAndGroup).
     */
    public $PermType;

    /**
     * @param string $RoleName Role name. Does not support Chinese characters and special characters other than hyphens (-) and underscores (_), and must be greater than 0 and less than or equal to 32 in length.
     * @param string $ClusterId Required field, cluster ID
     * @param string $Remark Remark description. Length must be greater than or equal to 0 and less than or equal to 128.
     * @param string $PermType Role authorization type (cluster: Cluster; topic or consumer group: TopicAndGroup).
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
        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("PermType",$param) and $param["PermType"] !== null) {
            $this->PermType = $param["PermType"];
        }
    }
}
