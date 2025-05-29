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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Execution process information log.
 *
 * @method string getName() Obtain English name of execution process.
 * @method void setName(string $Name) Set English name of execution process.
 * @method string getTitle() Obtain Chinese name for display.
 * @method void setTitle(string $Title) Set Chinese name for display.
 * @method string getStatus() Obtain Status: processing, success, failed.
 * @method void setStatus(string $Status) Set Status: processing, success, failed.
 * @method integer getCount() Obtain Number of consumed tokens.
 * @method void setCount(integer $Count) Set Number of consumed tokens.
 * @method ProcedureDebugging getDebugging() Obtain Debugging information.
 * @method void setDebugging(ProcedureDebugging $Debugging) Set Debugging information.
 * @method integer getResourceStatus() Obtain Billing resource status, 1: available; 2: unavailable.
 * @method void setResourceStatus(integer $ResourceStatus) Set Billing resource status, 1: available; 2: unavailable.
 */
class Procedure extends AbstractModel
{
    /**
     * @var string English name of execution process.
     */
    public $Name;

    /**
     * @var string Chinese name for display.
     */
    public $Title;

    /**
     * @var string Status: processing, success, failed.
     */
    public $Status;

    /**
     * @var integer Number of consumed tokens.
     */
    public $Count;

    /**
     * @var ProcedureDebugging Debugging information.
     */
    public $Debugging;

    /**
     * @var integer Billing resource status, 1: available; 2: unavailable.
     */
    public $ResourceStatus;

    /**
     * @param string $Name English name of execution process.
     * @param string $Title Chinese name for display.
     * @param string $Status Status: processing, success, failed.
     * @param integer $Count Number of consumed tokens.
     * @param ProcedureDebugging $Debugging Debugging information.
     * @param integer $ResourceStatus Billing resource status, 1: available; 2: unavailable.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Debugging",$param) and $param["Debugging"] !== null) {
            $this->Debugging = new ProcedureDebugging();
            $this->Debugging->deserialize($param["Debugging"]);
        }

        if (array_key_exists("ResourceStatus",$param) and $param["ResourceStatus"] !== null) {
            $this->ResourceStatus = $param["ResourceStatus"];
        }
    }
}
