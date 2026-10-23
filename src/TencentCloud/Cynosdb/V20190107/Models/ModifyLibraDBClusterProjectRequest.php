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
 * ModifyLibraDBClusterProject request structure.
 *
 * @method array getClusterIdSet() Obtain Analytical cluster ID list
 * @method void setClusterIdSet(array $ClusterIdSet) Set Analytical cluster ID list
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 */
class ModifyLibraDBClusterProjectRequest extends AbstractModel
{
    /**
     * @var array Analytical cluster ID list
     */
    public $ClusterIdSet;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @param array $ClusterIdSet Analytical cluster ID list
     * @param integer $ProjectId Project ID
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
        if (array_key_exists("ClusterIdSet",$param) and $param["ClusterIdSet"] !== null) {
            $this->ClusterIdSet = $param["ClusterIdSet"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
