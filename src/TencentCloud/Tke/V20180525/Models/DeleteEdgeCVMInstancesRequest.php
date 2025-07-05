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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteEdgeCVMInstances request structure.
 *
 * @method string getClusterID() Obtain Cluster ID
 * @method void setClusterID(string $ClusterID) Set Cluster ID
 * @method array getCvmIdSet() Obtain IDs of CVMs to be deleted
 * @method void setCvmIdSet(array $CvmIdSet) Set IDs of CVMs to be deleted
 */
class DeleteEdgeCVMInstancesRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterID;

    /**
     * @var array IDs of CVMs to be deleted
     */
    public $CvmIdSet;

    /**
     * @param string $ClusterID Cluster ID
     * @param array $CvmIdSet IDs of CVMs to be deleted
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
        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("CvmIdSet",$param) and $param["CvmIdSet"] !== null) {
            $this->CvmIdSet = $param["CvmIdSet"];
        }
    }
}
