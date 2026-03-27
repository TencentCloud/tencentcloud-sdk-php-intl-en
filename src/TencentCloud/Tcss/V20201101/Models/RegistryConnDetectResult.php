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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Image Repository Connectivity Detection Result
 *
 * @method string getQuuid() Obtain Host quuid or backend for Connectivity Detection
 * @method void setQuuid(string $Quuid) Set Host quuid or backend for Connectivity Detection
 * @method string getUuid() Obtain Host uuid or backend for Connectivity Detection
 * @method void setUuid(string $Uuid) Set Host uuid or backend for Connectivity Detection
 * @method string getConnDetectStatus() Obtain Detection Result Status
 * @method void setConnDetectStatus(string $ConnDetectStatus) Set Detection Result Status
 * @method string getConnDetectMessage() Obtain Detection Result Information
 * @method void setConnDetectMessage(string $ConnDetectMessage) Set Detection Result Information
 * @method string getSolution() Obtain Failure Resolution
 * @method void setSolution(string $Solution) Set Failure Resolution
 * @method string getFailReason() Obtain Failure Cause
 * @method void setFailReason(string $FailReason) Set Failure Cause
 */
class RegistryConnDetectResult extends AbstractModel
{
    /**
     * @var string Host quuid or backend for Connectivity Detection
     */
    public $Quuid;

    /**
     * @var string Host uuid or backend for Connectivity Detection
     */
    public $Uuid;

    /**
     * @var string Detection Result Status
     */
    public $ConnDetectStatus;

    /**
     * @var string Detection Result Information
     */
    public $ConnDetectMessage;

    /**
     * @var string Failure Resolution
     */
    public $Solution;

    /**
     * @var string Failure Cause
     */
    public $FailReason;

    /**
     * @param string $Quuid Host quuid or backend for Connectivity Detection
     * @param string $Uuid Host uuid or backend for Connectivity Detection
     * @param string $ConnDetectStatus Detection Result Status
     * @param string $ConnDetectMessage Detection Result Information
     * @param string $Solution Failure Resolution
     * @param string $FailReason Failure Cause
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("ConnDetectStatus",$param) and $param["ConnDetectStatus"] !== null) {
            $this->ConnDetectStatus = $param["ConnDetectStatus"];
        }

        if (array_key_exists("ConnDetectMessage",$param) and $param["ConnDetectMessage"] !== null) {
            $this->ConnDetectMessage = $param["ConnDetectMessage"];
        }

        if (array_key_exists("Solution",$param) and $param["Solution"] !== null) {
            $this->Solution = $param["Solution"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }
    }
}
