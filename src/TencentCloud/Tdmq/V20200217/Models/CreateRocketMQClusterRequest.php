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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRocketMQCluster request structure.
 *
 * @method string getName() Obtain Cluster name, which can contain 3–64 letters, digits, hyphens, and underscores
 * @method void setName(string $Name) Set Cluster name, which can contain 3–64 letters, digits, hyphens, and underscores
 * @method string getRemark() Obtain Cluster description (up to 128 characters)
 * @method void setRemark(string $Remark) Set Cluster description (up to 128 characters)
 */
class CreateRocketMQClusterRequest extends AbstractModel
{
    /**
     * @var string Cluster name, which can contain 3–64 letters, digits, hyphens, and underscores
     */
    public $Name;

    /**
     * @var string Cluster description (up to 128 characters)
     */
    public $Remark;

    /**
     * @param string $Name Cluster name, which can contain 3–64 letters, digits, hyphens, and underscores
     * @param string $Remark Cluster description (up to 128 characters)
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
