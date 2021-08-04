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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterCommonNames request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method array getSubaccountUins() Obtain Sub-account. Up to 50 sub-accounts can be passed in at a time.
 * @method void setSubaccountUins(array $SubaccountUins) Set Sub-account. Up to 50 sub-accounts can be passed in at a time.
 * @method array getRoleIds() Obtain Role ID. Up to 50 role IDs can be passed in at a time.
 * @method void setRoleIds(array $RoleIds) Set Role ID. Up to 50 role IDs can be passed in at a time.
 */
class DescribeClusterCommonNamesRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var array Sub-account. Up to 50 sub-accounts can be passed in at a time.
     */
    public $SubaccountUins;

    /**
     * @var array Role ID. Up to 50 role IDs can be passed in at a time.
     */
    public $RoleIds;

    /**
     * @param string $ClusterId Cluster ID
     * @param array $SubaccountUins Sub-account. Up to 50 sub-accounts can be passed in at a time.
     * @param array $RoleIds Role ID. Up to 50 role IDs can be passed in at a time.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("SubaccountUins",$param) and $param["SubaccountUins"] !== null) {
            $this->SubaccountUins = $param["SubaccountUins"];
        }

        if (array_key_exists("RoleIds",$param) and $param["RoleIds"] !== null) {
            $this->RoleIds = $param["RoleIds"];
        }
    }
}
