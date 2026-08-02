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
 * @method string getClusterId() Obtain <p>Cluster ID.</p>
 * @method void setClusterId(string $ClusterId) Set <p>Cluster ID.</p>
 * @method string getCrossRegionsEnable() Obtain <p>Whether cross-region snapshot backup is enabled ON/OFF</p>
 * @method void setCrossRegionsEnable(string $CrossRegionsEnable) Set <p>Whether cross-region snapshot backup is enabled ON/OFF</p>
 * @method array getCrossRegions() Obtain <p>Cross-regional snapshot backup</p>
 * @method void setCrossRegions(array $CrossRegions) Set <p>Cross-regional snapshot backup</p>
 * @method integer getCrossRegionSaveDays() Obtain <p>Cross-region backup retention period</p><p>Unit: day</p>
 * @method void setCrossRegionSaveDays(integer $CrossRegionSaveDays) Set <p>Cross-region backup retention period</p><p>Unit: day</p>
 */
class ModifySnapBackupCrossRegionConfigRequest extends AbstractModel
{
    /**
     * @var string <p>Cluster ID.</p>
     */
    public $ClusterId;

    /**
     * @var string <p>Whether cross-region snapshot backup is enabled ON/OFF</p>
     */
    public $CrossRegionsEnable;

    /**
     * @var array <p>Cross-regional snapshot backup</p>
     */
    public $CrossRegions;

    /**
     * @var integer <p>Cross-region backup retention period</p><p>Unit: day</p>
     */
    public $CrossRegionSaveDays;

    /**
     * @param string $ClusterId <p>Cluster ID.</p>
     * @param string $CrossRegionsEnable <p>Whether cross-region snapshot backup is enabled ON/OFF</p>
     * @param array $CrossRegions <p>Cross-regional snapshot backup</p>
     * @param integer $CrossRegionSaveDays <p>Cross-region backup retention period</p><p>Unit: day</p>
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

        if (array_key_exists("CrossRegionSaveDays",$param) and $param["CrossRegionSaveDays"] !== null) {
            $this->CrossRegionSaveDays = $param["CrossRegionSaveDays"];
        }
    }
}
