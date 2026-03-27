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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRefreshTask request structure.
 *
 * @method array getClusterIDs() Obtain Specify the cluster list. If empty, it indicates synchronization of all clusters.
 * @method void setClusterIDs(array $ClusterIDs) Set Specify the cluster list. If empty, it indicates synchronization of all clusters.
 * @method boolean getIsSyncListOnly() Obtain Whether to synchronize only the list
 * @method void setIsSyncListOnly(boolean $IsSyncListOnly) Set Whether to synchronize only the list
 */
class CreateRefreshTaskRequest extends AbstractModel
{
    /**
     * @var array Specify the cluster list. If empty, it indicates synchronization of all clusters.
     */
    public $ClusterIDs;

    /**
     * @var boolean Whether to synchronize only the list
     */
    public $IsSyncListOnly;

    /**
     * @param array $ClusterIDs Specify the cluster list. If empty, it indicates synchronization of all clusters.
     * @param boolean $IsSyncListOnly Whether to synchronize only the list
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
        if (array_key_exists("ClusterIDs",$param) and $param["ClusterIDs"] !== null) {
            $this->ClusterIDs = $param["ClusterIDs"];
        }

        if (array_key_exists("IsSyncListOnly",$param) and $param["IsSyncListOnly"] !== null) {
            $this->IsSyncListOnly = $param["IsSyncListOnly"];
        }
    }
}
