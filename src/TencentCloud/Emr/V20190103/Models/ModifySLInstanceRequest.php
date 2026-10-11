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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySLInstance request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance unique identifier (string).</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance unique identifier (string).</p>
 * @method string getZone() Obtain <p>Name of the region to be changed.</p>
 * @method void setZone(string $Zone) Set <p>Name of the region to be changed.</p>
 * @method integer getNodeNum() Obtain <p>Target number of nodes in this region after the configuration change. The total number of nodes in all regions should be greater than or equal to 3 and less than or equal to 50.</p>
 * @method void setNodeNum(integer $NodeNum) Set <p>Target number of nodes in this region after the configuration change. The total number of nodes in all regions should be greater than or equal to 3 and less than or equal to 50.</p>
 * @method string getClientToken() Obtain <p>Unique random identifier with a time-to-live of 5 minutes, which needs to be specified by the caller to prevent the client from repeatedly creating resources, for example, a9a90aa6-<strong><strong>-</strong></strong>-****-fae360632808.</p>
 * @method void setClientToken(string $ClientToken) Set <p>Unique random identifier with a time-to-live of 5 minutes, which needs to be specified by the caller to prevent the client from repeatedly creating resources, for example, a9a90aa6-<strong><strong>-</strong></strong>-****-fae360632808.</p>
 * @method integer getDiskSize() Obtain <p>Storage space size. It must be a multiple of 100 and cannot be smaller than the current storage space (only scale-out is allowed).</p><p>Unit: GB.</p>
 * @method void setDiskSize(integer $DiskSize) Set <p>Storage space size. It must be a multiple of 100 and cannot be smaller than the current storage space (only scale-out is allowed).</p><p>Unit: GB.</p>
 */
class ModifySLInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>Instance unique identifier (string).</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Name of the region to be changed.</p>
     */
    public $Zone;

    /**
     * @var integer <p>Target number of nodes in this region after the configuration change. The total number of nodes in all regions should be greater than or equal to 3 and less than or equal to 50.</p>
     */
    public $NodeNum;

    /**
     * @var string <p>Unique random identifier with a time-to-live of 5 minutes, which needs to be specified by the caller to prevent the client from repeatedly creating resources, for example, a9a90aa6-<strong><strong>-</strong></strong>-****-fae360632808.</p>
     */
    public $ClientToken;

    /**
     * @var integer <p>Storage space size. It must be a multiple of 100 and cannot be smaller than the current storage space (only scale-out is allowed).</p><p>Unit: GB.</p>
     */
    public $DiskSize;

    /**
     * @param string $InstanceId <p>Instance unique identifier (string).</p>
     * @param string $Zone <p>Name of the region to be changed.</p>
     * @param integer $NodeNum <p>Target number of nodes in this region after the configuration change. The total number of nodes in all regions should be greater than or equal to 3 and less than or equal to 50.</p>
     * @param string $ClientToken <p>Unique random identifier with a time-to-live of 5 minutes, which needs to be specified by the caller to prevent the client from repeatedly creating resources, for example, a9a90aa6-<strong><strong>-</strong></strong>-****-fae360632808.</p>
     * @param integer $DiskSize <p>Storage space size. It must be a multiple of 100 and cannot be smaller than the current storage space (only scale-out is allowed).</p><p>Unit: GB.</p>
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

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }
    }
}
