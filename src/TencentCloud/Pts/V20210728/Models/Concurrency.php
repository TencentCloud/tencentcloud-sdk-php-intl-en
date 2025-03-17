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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Load configuration for concurrency mode
 *
 * @method array getStages() Obtain Array of multi-stage configuration.

Note: This field may return null, indicating that no valid value is found.
 * @method void setStages(array $Stages) Set Array of multi-stage configuration.

Note: This field may return null, indicating that no valid value is found.
 * @method integer getIterationCount() Obtain Number of iteration.

Note: This field may return null, indicating that no valid value is found.
 * @method void setIterationCount(integer $IterationCount) Set Number of iteration.

Note: This field may return null, indicating that no valid value is found.
 * @method integer getMaxRequestsPerSecond() Obtain Maximum rps.

Note: This field may return null, indicating that no valid value is found.
 * @method void setMaxRequestsPerSecond(integer $MaxRequestsPerSecond) Set Maximum rps.

Note: This field may return null, indicating that no valid value is found.
 * @method integer getGracefulStopSeconds() Obtain Graceful termination job waiting time.

Note: This field may return null, indicating that no valid value is found.
 * @method void setGracefulStopSeconds(integer $GracefulStopSeconds) Set Graceful termination job waiting time.

Note: This field may return null, indicating that no valid value is found.
 * @method integer getResources() Obtain Number of resource.

Note: This field may return null, indicating that no valid value is found.
 * @method void setResources(integer $Resources) Set Number of resource.

Note: This field may return null, indicating that no valid value is found.
 */
class Concurrency extends AbstractModel
{
    /**
     * @var array Array of multi-stage configuration.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Stages;

    /**
     * @var integer Number of iteration.

Note: This field may return null, indicating that no valid value is found.
     */
    public $IterationCount;

    /**
     * @var integer Maximum rps.

Note: This field may return null, indicating that no valid value is found.
     */
    public $MaxRequestsPerSecond;

    /**
     * @var integer Graceful termination job waiting time.

Note: This field may return null, indicating that no valid value is found.
     */
    public $GracefulStopSeconds;

    /**
     * @var integer Number of resource.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Resources;

    /**
     * @param array $Stages Array of multi-stage configuration.

Note: This field may return null, indicating that no valid value is found.
     * @param integer $IterationCount Number of iteration.

Note: This field may return null, indicating that no valid value is found.
     * @param integer $MaxRequestsPerSecond Maximum rps.

Note: This field may return null, indicating that no valid value is found.
     * @param integer $GracefulStopSeconds Graceful termination job waiting time.

Note: This field may return null, indicating that no valid value is found.
     * @param integer $Resources Number of resource.

Note: This field may return null, indicating that no valid value is found.
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
        if (array_key_exists("Stages",$param) and $param["Stages"] !== null) {
            $this->Stages = [];
            foreach ($param["Stages"] as $key => $value){
                $obj = new Stage();
                $obj->deserialize($value);
                array_push($this->Stages, $obj);
            }
        }

        if (array_key_exists("IterationCount",$param) and $param["IterationCount"] !== null) {
            $this->IterationCount = $param["IterationCount"];
        }

        if (array_key_exists("MaxRequestsPerSecond",$param) and $param["MaxRequestsPerSecond"] !== null) {
            $this->MaxRequestsPerSecond = $param["MaxRequestsPerSecond"];
        }

        if (array_key_exists("GracefulStopSeconds",$param) and $param["GracefulStopSeconds"] !== null) {
            $this->GracefulStopSeconds = $param["GracefulStopSeconds"];
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = $param["Resources"];
        }
    }
}
