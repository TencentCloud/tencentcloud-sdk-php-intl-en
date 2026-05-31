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
 * ModifySnapBackupCrossRegionConfig request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getCrossRegionsEnable() Obtain Whether cross-region snapshot backup is enabled.
 * @method void setCrossRegionsEnable(string $CrossRegionsEnable) Set Whether cross-region snapshot backup is enabled.
 * @method array getCrossRegions() Obtain Cross-Regional snapshot backup.
 * @method void setCrossRegions(array $CrossRegions) Set Cross-Regional snapshot backup.
 */
class ModifySnapBackupCrossRegionConfigRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Whether cross-region snapshot backup is enabled.
     */
    public $CrossRegionsEnable;

    /**
     * @var array Cross-Regional snapshot backup.
     */
    public $CrossRegions;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $CrossRegionsEnable Whether cross-region snapshot backup is enabled.
     * @param array $CrossRegions Cross-Regional snapshot backup.
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

        if (array_key_exists("CrossRegionsEnable",$param) and $param["CrossRegionsEnable"] !== null) {
            $this->CrossRegionsEnable = $param["CrossRegionsEnable"];
        }

        if (array_key_exists("CrossRegions",$param) and $param["CrossRegions"] !== null) {
            $this->CrossRegions = $param["CrossRegions"];
        }
    }
}
