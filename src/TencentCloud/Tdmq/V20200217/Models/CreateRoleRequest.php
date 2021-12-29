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
 * CreateRole request structure.
 *
 * @method string getRoleName() Obtain Role name, which can contain up to 32 letters, digits, hyphens, and underscores.
 * @method void setRoleName(string $RoleName) Set Role name, which can contain up to 32 letters, digits, hyphens, and underscores.
 * @method string getRemark() Obtain Remarks (up to 128 characters).
 * @method void setRemark(string $Remark) Set Remarks (up to 128 characters).
 * @method string getClusterId() Obtain Cluster ID (required)
 * @method void setClusterId(string $ClusterId) Set Cluster ID (required)
 */
class CreateRoleRequest extends AbstractModel
{
    /**
     * @var string Role name, which can contain up to 32 letters, digits, hyphens, and underscores.
     */
    public $RoleName;

    /**
     * @var string Remarks (up to 128 characters).
     */
    public $Remark;

    /**
     * @var string Cluster ID (required)
     */
    public $ClusterId;

    /**
     * @param string $RoleName Role name, which can contain up to 32 letters, digits, hyphens, and underscores.
     * @param string $Remark Remarks (up to 128 characters).
     * @param string $ClusterId Cluster ID (required)
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

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
    }
}
