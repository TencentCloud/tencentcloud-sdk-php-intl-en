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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCanFixVulMachine request structure.
 *
 * @method array getVulIds() Obtain Vulnerability IDs
 * @method void setVulIds(array $VulIds) Set Vulnerability IDs
 * @method array getQuuids() Obtain Hosts requiring fixing. This parameter has an AND relationship with VulIds.
 * @method void setQuuids(array $Quuids) Set Hosts requiring fixing. This parameter has an AND relationship with VulIds.
 */
class DescribeCanFixVulMachineRequest extends AbstractModel
{
    /**
     * @var array Vulnerability IDs
     */
    public $VulIds;

    /**
     * @var array Hosts requiring fixing. This parameter has an AND relationship with VulIds.
     */
    public $Quuids;

    /**
     * @param array $VulIds Vulnerability IDs
     * @param array $Quuids Hosts requiring fixing. This parameter has an AND relationship with VulIds.
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
        if (array_key_exists("VulIds",$param) and $param["VulIds"] !== null) {
            $this->VulIds = $param["VulIds"];
        }

        if (array_key_exists("Quuids",$param) and $param["Quuids"] !== null) {
            $this->Quuids = $param["Quuids"];
        }
    }
}
