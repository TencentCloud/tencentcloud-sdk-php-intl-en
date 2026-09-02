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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Image Repository Connectivity Test Results
 *
 * @method string getConnDetectMessage() Obtain <p>Link information</p>
 * @method void setConnDetectMessage(string $ConnDetectMessage) Set <p>Link information</p>
 * @method string getConnDetectStatus() Obtain <p>Link status</p>
 * @method void setConnDetectStatus(string $ConnDetectStatus) Set <p>Link status</p>
 * @method string getFailReason() Obtain <p>Reason for failure</p>
 * @method void setFailReason(string $FailReason) Set <p>Reason for failure</p>
 * @method string getQuuid() Obtain <p>Host quuid</p>
 * @method void setQuuid(string $Quuid) Set <p>Host quuid</p>
 * @method string getSolution() Obtain <p>Failure solution</p>
 * @method void setSolution(string $Solution) Set <p>Failure solution</p>
 * @method string getUuid() Obtain <p>Host UUID.</p>
 * @method void setUuid(string $Uuid) Set <p>Host UUID.</p>
 */
class RegistryConnDetectResult extends AbstractModel
{
    /**
     * @var string <p>Link information</p>
     */
    public $ConnDetectMessage;

    /**
     * @var string <p>Link status</p>
     */
    public $ConnDetectStatus;

    /**
     * @var string <p>Reason for failure</p>
     */
    public $FailReason;

    /**
     * @var string <p>Host quuid</p>
     */
    public $Quuid;

    /**
     * @var string <p>Failure solution</p>
     */
    public $Solution;

    /**
     * @var string <p>Host UUID.</p>
     */
    public $Uuid;

    /**
     * @param string $ConnDetectMessage <p>Link information</p>
     * @param string $ConnDetectStatus <p>Link status</p>
     * @param string $FailReason <p>Reason for failure</p>
     * @param string $Quuid <p>Host quuid</p>
     * @param string $Solution <p>Failure solution</p>
     * @param string $Uuid <p>Host UUID.</p>
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
        if (array_key_exists("ConnDetectMessage",$param) and $param["ConnDetectMessage"] !== null) {
            $this->ConnDetectMessage = $param["ConnDetectMessage"];
        }

        if (array_key_exists("ConnDetectStatus",$param) and $param["ConnDetectStatus"] !== null) {
            $this->ConnDetectStatus = $param["ConnDetectStatus"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Solution",$param) and $param["Solution"] !== null) {
            $this->Solution = $param["Solution"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }
    }
}
