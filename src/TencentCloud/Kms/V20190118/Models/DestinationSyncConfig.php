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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Target region list of the sync task, including region and cluster information. if the cluster is empty, it means public cloud shared cluster. if the cluster is not empty, it means dedicated cluster.
 *
 * @method string getDestinationRegion() Obtain Specifies the target region of the synchronization task.
 * @method void setDestinationRegion(string $DestinationRegion) Set Specifies the target region of the synchronization task.
 * @method string getHsmClusterId() Obtain HsmClusterId being empty indicates public cloud shared version. if not empty, it indicates exclusive edition cluster in the region.
 * @method void setHsmClusterId(string $HsmClusterId) Set HsmClusterId being empty indicates public cloud shared version. if not empty, it indicates exclusive edition cluster in the region.
 */
class DestinationSyncConfig extends AbstractModel
{
    /**
     * @var string Specifies the target region of the synchronization task.
     */
    public $DestinationRegion;

    /**
     * @var string HsmClusterId being empty indicates public cloud shared version. if not empty, it indicates exclusive edition cluster in the region.
     */
    public $HsmClusterId;

    /**
     * @param string $DestinationRegion Specifies the target region of the synchronization task.
     * @param string $HsmClusterId HsmClusterId being empty indicates public cloud shared version. if not empty, it indicates exclusive edition cluster in the region.
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
        if (array_key_exists("DestinationRegion",$param) and $param["DestinationRegion"] !== null) {
            $this->DestinationRegion = $param["DestinationRegion"];
        }

        if (array_key_exists("HsmClusterId",$param) and $param["HsmClusterId"] !== null) {
            $this->HsmClusterId = $param["HsmClusterId"];
        }
    }
}
