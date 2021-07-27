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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method integer getBaseCapacity() Obtain 
 * @method void setBaseCapacity(integer $BaseCapacity) Set 
 * @method integer getOnDemandPercentageAboveBaseCapacity() Obtain 
 * @method void setOnDemandPercentageAboveBaseCapacity(integer $OnDemandPercentageAboveBaseCapacity) Set 
 * @method string getSpotAllocationStrategy() Obtain 
 * @method void setSpotAllocationStrategy(string $SpotAllocationStrategy) Set 
 * @method boolean getCompensateWithBaseInstance() Obtain 
 * @method void setCompensateWithBaseInstance(boolean $CompensateWithBaseInstance) Set 
 */
class SpotMixedAllocationPolicy extends AbstractModel
{
    /**
     * @var integer 
     */
    public $BaseCapacity;

    /**
     * @var integer 
     */
    public $OnDemandPercentageAboveBaseCapacity;

    /**
     * @var string 
     */
    public $SpotAllocationStrategy;

    /**
     * @var boolean 
     */
    public $CompensateWithBaseInstance;

    /**
     * @param integer $BaseCapacity 
     * @param integer $OnDemandPercentageAboveBaseCapacity 
     * @param string $SpotAllocationStrategy 
     * @param boolean $CompensateWithBaseInstance 
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
        if (array_key_exists("BaseCapacity",$param) and $param["BaseCapacity"] !== null) {
            $this->BaseCapacity = $param["BaseCapacity"];
        }

        if (array_key_exists("OnDemandPercentageAboveBaseCapacity",$param) and $param["OnDemandPercentageAboveBaseCapacity"] !== null) {
            $this->OnDemandPercentageAboveBaseCapacity = $param["OnDemandPercentageAboveBaseCapacity"];
        }

        if (array_key_exists("SpotAllocationStrategy",$param) and $param["SpotAllocationStrategy"] !== null) {
            $this->SpotAllocationStrategy = $param["SpotAllocationStrategy"];
        }

        if (array_key_exists("CompensateWithBaseInstance",$param) and $param["CompensateWithBaseInstance"] !== null) {
            $this->CompensateWithBaseInstance = $param["CompensateWithBaseInstance"];
        }
    }
}
