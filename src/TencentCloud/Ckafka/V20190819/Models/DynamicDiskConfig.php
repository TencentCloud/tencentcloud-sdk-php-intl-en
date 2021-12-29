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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method integer getEnable() Obtain 
 * @method void setEnable(integer $Enable) Set 
 * @method integer getStepForwardPercentage() Obtain 
 * @method void setStepForwardPercentage(integer $StepForwardPercentage) Set 
 * @method integer getDiskQuotaPercentage() Obtain 
 * @method void setDiskQuotaPercentage(integer $DiskQuotaPercentage) Set 
 * @method integer getMaxDiskSpace() Obtain 
 * @method void setMaxDiskSpace(integer $MaxDiskSpace) Set 
 */
class DynamicDiskConfig extends AbstractModel
{
    /**
     * @var integer 
     */
    public $Enable;

    /**
     * @var integer 
     */
    public $StepForwardPercentage;

    /**
     * @var integer 
     */
    public $DiskQuotaPercentage;

    /**
     * @var integer 
     */
    public $MaxDiskSpace;

    /**
     * @param integer $Enable 
     * @param integer $StepForwardPercentage 
     * @param integer $DiskQuotaPercentage 
     * @param integer $MaxDiskSpace 
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

        if (array_key_exists("StepForwardPercentage",$param) and $param["StepForwardPercentage"] !== null) {
            $this->StepForwardPercentage = $param["StepForwardPercentage"];
        }

        if (array_key_exists("DiskQuotaPercentage",$param) and $param["DiskQuotaPercentage"] !== null) {
            $this->DiskQuotaPercentage = $param["DiskQuotaPercentage"];
        }

        if (array_key_exists("MaxDiskSpace",$param) and $param["MaxDiskSpace"] !== null) {
            $this->MaxDiskSpace = $param["MaxDiskSpace"];
        }
    }
}
