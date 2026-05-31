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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Pipeline failover information.
 *
 * @method string getFaultBehavior() Obtain Pipeline disaster recovery configuration. Value: PIPELINE_FAILOVER (mutual disaster recovery for channels if unable), PIPELINE_FILLING (channel fill automatically).
Default value: PIPELINE_FAILOVER. If failover between channels fails, auto-execute PIPELINE_FILLING. Specific content is specified by InputLossBehavior.
 * @method void setFaultBehavior(string $FaultBehavior) Set Pipeline disaster recovery configuration. Value: PIPELINE_FAILOVER (mutual disaster recovery for channels if unable), PIPELINE_FILLING (channel fill automatically).
Default value: PIPELINE_FAILOVER. If failover between channels fails, auto-execute PIPELINE_FILLING. Specific content is specified by InputLossBehavior.
 */
class PipelineInputSettingsInfo extends AbstractModel
{
    /**
     * @var string Pipeline disaster recovery configuration. Value: PIPELINE_FAILOVER (mutual disaster recovery for channels if unable), PIPELINE_FILLING (channel fill automatically).
Default value: PIPELINE_FAILOVER. If failover between channels fails, auto-execute PIPELINE_FILLING. Specific content is specified by InputLossBehavior.
     */
    public $FaultBehavior;

    /**
     * @param string $FaultBehavior Pipeline disaster recovery configuration. Value: PIPELINE_FAILOVER (mutual disaster recovery for channels if unable), PIPELINE_FILLING (channel fill automatically).
Default value: PIPELINE_FAILOVER. If failover between channels fails, auto-execute PIPELINE_FILLING. Specific content is specified by InputLossBehavior.
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
