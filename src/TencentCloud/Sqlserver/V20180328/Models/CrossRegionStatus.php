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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The target region and status of cross-region backup
 *
 * @method string getCrossRegion() Obtain The target region of cross-region backup
 * @method void setCrossRegion(string $CrossRegion) Set The target region of cross-region backup
 * @method integer getCrossStatus() Obtain Synchronization status of cross-region backup. Valid values: `0` (creating), `1` (succeeded), `2`: (failed), `4` (syncing)
 * @method void setCrossStatus(integer $CrossStatus) Set Synchronization status of cross-region backup. Valid values: `0` (creating), `1` (succeeded), `2`: (failed), `4` (syncing)
 */
class CrossRegionStatus extends AbstractModel
{
    /**
     * @var string The target region of cross-region backup
     */
    public $CrossRegion;

    /**
     * @var integer Synchronization status of cross-region backup. Valid values: `0` (creating), `1` (succeeded), `2`: (failed), `4` (syncing)
     */
    public $CrossStatus;

    /**
     * @param string $CrossRegion The target region of cross-region backup
     * @param integer $CrossStatus Synchronization status of cross-region backup. Valid values: `0` (creating), `1` (succeeded), `2`: (failed), `4` (syncing)
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
        if (array_key_exists("CrossRegion",$param) and $param["CrossRegion"] !== null) {
            $this->CrossRegion = $param["CrossRegion"];
        }

        if (array_key_exists("CrossStatus",$param) and $param["CrossStatus"] !== null) {
            $this->CrossStatus = $param["CrossStatus"];
        }
    }
}
