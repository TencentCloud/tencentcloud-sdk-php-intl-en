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
 * ModifyTargetsInTargetGroup request structure.
 *
 * @method string getTargetGroupId() Obtain Target group ID in the format of lbtg- followed by 8 alphanumeric characters.
 * @method void setTargetGroupId(string $TargetGroupId) Set Target group ID in the format of lbtg- followed by 8 alphanumeric characters.
 * @method array getTargets() Obtain List of backend services to be modified.
 * @method void setTargets(array $Targets) Set List of backend services to be modified.
 * @method boolean getDryRun() Obtain Whether to preview this request. 
- **false** (default): Send a normal request and directly modify the backend service information. 
- **true**: Send a preview request to check whether the modified backend service parameters, format, and service limits meet the requirements.
 * @method void setDryRun(boolean $DryRun) Set Whether to preview this request. 
- **false** (default): Send a normal request and directly modify the backend service information. 
- **true**: Send a preview request to check whether the modified backend service parameters, format, and service limits meet the requirements.
 */
class ModifyTargetsInTargetGroupRequest extends AbstractModel
{
    /**
     * @var string Target group ID in the format of lbtg- followed by 8 alphanumeric characters.
     */
    public $TargetGroupId;

    /**
     * @var array List of backend services to be modified.
     */
    public $Targets;

    /**
     * @var boolean Whether to preview this request. 
- **false** (default): Send a normal request and directly modify the backend service information. 
- **true**: Send a preview request to check whether the modified backend service parameters, format, and service limits meet the requirements.
     */
    public $DryRun;

    /**
     * @param string $TargetGroupId Target group ID in the format of lbtg- followed by 8 alphanumeric characters.
     * @param array $Targets List of backend services to be modified.
     * @param boolean $DryRun Whether to preview this request. 
- **false** (default): Send a normal request and directly modify the backend service information. 
- **true**: Send a preview request to check whether the modified backend service parameters, format, and service limits meet the requirements.
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
        if (array_key_exists("TargetGroupId",$param) and $param["TargetGroupId"] !== null) {
            $this->TargetGroupId = $param["TargetGroupId"];
        }

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = [];
            foreach ($param["Targets"] as $key => $value){
                $obj = new TargetToModify();
                $obj->deserialize($value);
                array_push($this->Targets, $obj);
            }
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }
    }
}
