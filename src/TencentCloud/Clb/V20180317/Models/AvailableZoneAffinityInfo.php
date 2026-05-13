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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method boolean getEnable() Obtain 
 * @method void setEnable(boolean $Enable) Set 
 * @method integer getExitRatio() Obtain 
 * @method void setExitRatio(integer $ExitRatio) Set 
 * @method integer getReentryRatio() Obtain 
 * @method void setReentryRatio(integer $ReentryRatio) Set 
 */
class AvailableZoneAffinityInfo extends AbstractModel
{
    /**
     * @var boolean 
     */
    public $Enable;

    /**
     * @var integer 
     */
    public $ExitRatio;

    /**
     * @var integer 
     */
    public $ReentryRatio;

    /**
     * @param boolean $Enable 
     * @param integer $ExitRatio 
     * @param integer $ReentryRatio 
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("ExitRatio",$param) and $param["ExitRatio"] !== null) {
            $this->ExitRatio = $param["ExitRatio"];
        }

        if (array_key_exists("ReentryRatio",$param) and $param["ReentryRatio"] !== null) {
            $this->ReentryRatio = $param["ReentryRatio"];
        }
    }
}
