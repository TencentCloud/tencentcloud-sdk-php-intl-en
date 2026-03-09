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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Lineage Pair object.
 *
 * @method LineageResouce getSource() Obtain Source.
 * @method void setSource(LineageResouce $Source) Set Source.
 * @method LineageResouce getTarget() Obtain Goal.
 * @method void setTarget(LineageResouce $Target) Set Goal.
 * @method array getProcesses() Obtain Lineage processing process.
 * @method void setProcesses(array $Processes) Set Lineage processing process.
 */
class LineagePair extends AbstractModel
{
    /**
     * @var LineageResouce Source.
     */
    public $Source;

    /**
     * @var LineageResouce Goal.
     */
    public $Target;

    /**
     * @var array Lineage processing process.
     */
    public $Processes;

    /**
     * @param LineageResouce $Source Source.
     * @param LineageResouce $Target Goal.
     * @param array $Processes Lineage processing process.
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
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = new LineageResouce();
            $this->Source->deserialize($param["Source"]);
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = new LineageResouce();
            $this->Target->deserialize($param["Target"]);
        }

        if (array_key_exists("Processes",$param) and $param["Processes"] !== null) {
            $this->Processes = [];
            foreach ($param["Processes"] as $key => $value){
                $obj = new LineageProcess();
                $obj->deserialize($value);
                array_push($this->Processes, $obj);
            }
        }
    }
}
