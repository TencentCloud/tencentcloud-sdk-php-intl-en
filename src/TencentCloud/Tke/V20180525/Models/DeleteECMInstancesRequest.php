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
 * DeleteECMInstances request structure.
 *
 * @method string getClusterID() Obtain Cluster ID
 * @method void setClusterID(string $ClusterID) Set Cluster ID
 * @method array getEcmIdSet() Obtain IDs of ECMs to be deleted
 * @method void setEcmIdSet(array $EcmIdSet) Set IDs of ECMs to be deleted
 */
class DeleteECMInstancesRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterID;

    /**
     * @var array IDs of ECMs to be deleted
     */
    public $EcmIdSet;

    /**
     * @param string $ClusterID Cluster ID
     * @param array $EcmIdSet IDs of ECMs to be deleted
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

        if (array_key_exists("EcmIdSet",$param) and $param["EcmIdSet"] !== null) {
            $this->EcmIdSet = $param["EcmIdSet"];
        }
    }
}
