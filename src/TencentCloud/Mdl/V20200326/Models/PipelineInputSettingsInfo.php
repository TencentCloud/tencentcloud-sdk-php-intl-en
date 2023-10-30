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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Pipeline failover information.
 *
 * @method string getFaultBehavior() Obtain Pipeline failover configuration, the valid value is: 1.PIPELINE_FAILOVER (channels are mutually failover); 2.PIPELINE_FILLING (channels fill in themselves). Default value: PIPELINE_FILLING. The specific content is specified by FaultBehavior.
 * @method void setFaultBehavior(string $FaultBehavior) Set Pipeline failover configuration, the valid value is: 1.PIPELINE_FAILOVER (channels are mutually failover); 2.PIPELINE_FILLING (channels fill in themselves). Default value: PIPELINE_FILLING. The specific content is specified by FaultBehavior.
 */
class PipelineInputSettingsInfo extends AbstractModel
{
    /**
     * @var string Pipeline failover configuration, the valid value is: 1.PIPELINE_FAILOVER (channels are mutually failover); 2.PIPELINE_FILLING (channels fill in themselves). Default value: PIPELINE_FILLING. The specific content is specified by FaultBehavior.
     */
    public $FaultBehavior;

    /**
     * @param string $FaultBehavior Pipeline failover configuration, the valid value is: 1.PIPELINE_FAILOVER (channels are mutually failover); 2.PIPELINE_FILLING (channels fill in themselves). Default value: PIPELINE_FILLING. The specific content is specified by FaultBehavior.
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
        if (array_key_exists("FaultBehavior",$param) and $param["FaultBehavior"] !== null) {
            $this->FaultBehavior = $param["FaultBehavior"];
        }
    }
}
