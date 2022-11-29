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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Failure reason
 *
 * @method string getReason() Obtain Failure reason.
 * @method void setReason(string $Reason) Set Failure reason.
 * @method array getTargets() Obtain List of resources failed to be processed. 
 * @method void setTargets(array $Targets) Set List of resources failed to be processed. 
 */
class FailReason extends AbstractModel
{
    /**
     * @var string Failure reason.
     */
    public $Reason;

    /**
     * @var array List of resources failed to be processed. 
     */
    public $Targets;

    /**
     * @param string $Reason Failure reason.
     * @param array $Targets List of resources failed to be processed. 
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
        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = $param["Targets"];
        }
    }
}
