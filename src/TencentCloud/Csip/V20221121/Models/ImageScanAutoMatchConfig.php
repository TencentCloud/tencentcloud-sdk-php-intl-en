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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Image scanning auto-match configuration
 *
 * @method array getModes() Obtain <p>Match mode</p><p>Enumeration values:</p><ul><li>BY_CLUSTER: select by cluster</li><li>RUNNING_CONTAINER: images running on the container cluster</li><li>LATEST_VERSION: latest version image</li><li>LOCAL_HOST: images running on the host node</li></ul>
 * @method void setModes(array $Modes) Set <p>Match mode</p><p>Enumeration values:</p><ul><li>BY_CLUSTER: select by cluster</li><li>RUNNING_CONTAINER: images running on the container cluster</li><li>LATEST_VERSION: latest version image</li><li>LOCAL_HOST: images running on the host node</li></ul>
 * @method array getClusters() Obtain <p>Cluster ID.</p>
 * @method void setClusters(array $Clusters) Set <p>Cluster ID.</p>
 */
class ImageScanAutoMatchConfig extends AbstractModel
{
    /**
     * @var array <p>Match mode</p><p>Enumeration values:</p><ul><li>BY_CLUSTER: select by cluster</li><li>RUNNING_CONTAINER: images running on the container cluster</li><li>LATEST_VERSION: latest version image</li><li>LOCAL_HOST: images running on the host node</li></ul>
     */
    public $Modes;

    /**
     * @var array <p>Cluster ID.</p>
     */
    public $Clusters;

    /**
     * @param array $Modes <p>Match mode</p><p>Enumeration values:</p><ul><li>BY_CLUSTER: select by cluster</li><li>RUNNING_CONTAINER: images running on the container cluster</li><li>LATEST_VERSION: latest version image</li><li>LOCAL_HOST: images running on the host node</li></ul>
     * @param array $Clusters <p>Cluster ID.</p>
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
        if (array_key_exists("Modes",$param) and $param["Modes"] !== null) {
            $this->Modes = $param["Modes"];
        }

        if (array_key_exists("Clusters",$param) and $param["Clusters"] !== null) {
            $this->Clusters = $param["Clusters"];
        }
    }
}
