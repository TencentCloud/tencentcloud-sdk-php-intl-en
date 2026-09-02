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
 * Connectivity task result of an image repository.
 *
 * @method string getConnDetectMessage() Obtain <p>Check result</p>
 * @method void setConnDetectMessage(string $ConnDetectMessage) Set <p>Check result</p>
 * @method string getConnDetectStatus() Obtain <p>Check status</p>
 * @method void setConnDetectStatus(string $ConnDetectStatus) Set <p>Check status</p>
 * @method string getFailReason() Obtain <p>Failure reason</p>
 * @method void setFailReason(string $FailReason) Set <p>Failure reason</p>
 * @method string getQuuid() Obtain <p>Host Quuid</p>
 * @method void setQuuid(string $Quuid) Set <p>Host Quuid</p>
 * @method string getSolution() Obtain <p>Troubleshoot solution</p>
 * @method void setSolution(string $Solution) Set <p>Troubleshoot solution</p>
 * @method string getUuid() Obtain <p>Host Uuid</p>
 * @method void setUuid(string $Uuid) Set <p>Host Uuid</p>
 */
class ImageRegistryConnectivityTaskResult extends AbstractModel
{
    /**
     * @var string <p>Check result</p>
     */
    public $ConnDetectMessage;

    /**
     * @var string <p>Check status</p>
     */
    public $ConnDetectStatus;

    /**
     * @var string <p>Failure reason</p>
     */
    public $FailReason;

    /**
     * @var string <p>Host Quuid</p>
     */
    public $Quuid;

    /**
     * @var string <p>Troubleshoot solution</p>
     */
    public $Solution;

    /**
     * @var string <p>Host Uuid</p>
     */
    public $Uuid;

    /**
     * @param string $ConnDetectMessage <p>Check result</p>
     * @param string $ConnDetectStatus <p>Check status</p>
     * @param string $FailReason <p>Failure reason</p>
     * @param string $Quuid <p>Host Quuid</p>
     * @param string $Solution <p>Troubleshoot solution</p>
     * @param string $Uuid <p>Host Uuid</p>
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
