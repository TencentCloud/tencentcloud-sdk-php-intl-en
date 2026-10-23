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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeChangedParamsAfterUpgrade request structure.
 *
 * @method string getInstanceId() Obtain Cluster ID
 * @method void setInstanceId(string $InstanceId) Set Cluster ID
 * @method integer getDstCpu() Obtain CPU after configuration change
 * @method void setDstCpu(integer $DstCpu) Set CPU after configuration change
 * @method integer getDstMem() Obtain MEM after specification modification, in GB
 * @method void setDstMem(integer $DstMem) Set MEM after specification modification, in GB
 */
class DescribeChangedParamsAfterUpgradeRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $InstanceId;

    /**
     * @var integer CPU after configuration change
     */
    public $DstCpu;

    /**
     * @var integer MEM after specification modification, in GB
     */
    public $DstMem;

    /**
     * @param string $InstanceId Cluster ID
     * @param integer $DstCpu CPU after configuration change
     * @param integer $DstMem MEM after specification modification, in GB
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DstCpu",$param) and $param["DstCpu"] !== null) {
            $this->DstCpu = $param["DstCpu"];
        }

        if (array_key_exists("DstMem",$param) and $param["DstMem"] !== null) {
            $this->DstMem = $param["DstMem"];
        }
    }
}
