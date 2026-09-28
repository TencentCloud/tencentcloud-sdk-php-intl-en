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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteHealthCheckTemplates request structure.
 *
 * @method array getHealthCheckTemplateIds() Obtain Health check template ID list. The ID format is `hct-` followed by alphanumeric characters.
 * @method void setHealthCheckTemplateIds(array $HealthCheckTemplateIds) Set Health check template ID list. The ID format is `hct-` followed by alphanumeric characters.
 * @method boolean getDryRun() Obtain Whether to preview this request.
- **false** (default): Send a normal request to directly delete the template.
- **true**: Send a preview request to check whether the parameters, format, and service limits of the template to delete meet the requirements.
 * @method void setDryRun(boolean $DryRun) Set Whether to preview this request.
- **false** (default): Send a normal request to directly delete the template.
- **true**: Send a preview request to check whether the parameters, format, and service limits of the template to delete meet the requirements.
 */
class DeleteHealthCheckTemplatesRequest extends AbstractModel
{
    /**
     * @var array Health check template ID list. The ID format is `hct-` followed by alphanumeric characters.
     */
    public $HealthCheckTemplateIds;

    /**
     * @var boolean Whether to preview this request.
- **false** (default): Send a normal request to directly delete the template.
- **true**: Send a preview request to check whether the parameters, format, and service limits of the template to delete meet the requirements.
     */
    public $DryRun;

    /**
     * @param array $HealthCheckTemplateIds Health check template ID list. The ID format is `hct-` followed by alphanumeric characters.
     * @param boolean $DryRun Whether to preview this request.
- **false** (default): Send a normal request to directly delete the template.
- **true**: Send a preview request to check whether the parameters, format, and service limits of the template to delete meet the requirements.
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
        if (array_key_exists("HealthCheckTemplateIds",$param) and $param["HealthCheckTemplateIds"] !== null) {
            $this->HealthCheckTemplateIds = $param["HealthCheckTemplateIds"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }
    }
}
