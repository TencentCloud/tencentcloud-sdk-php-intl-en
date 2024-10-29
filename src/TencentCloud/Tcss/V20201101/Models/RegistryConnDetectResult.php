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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getQuuid() Obtain 
 * @method void setQuuid(string $Quuid) Set 
 * @method string getUuid() Obtain 
 * @method void setUuid(string $Uuid) Set 
 * @method string getConnDetectStatus() Obtain 
 * @method void setConnDetectStatus(string $ConnDetectStatus) Set 
 * @method string getConnDetectMessage() Obtain 
 * @method void setConnDetectMessage(string $ConnDetectMessage) Set 
 * @method string getSolution() Obtain 
 * @method void setSolution(string $Solution) Set 
 * @method string getFailReason() Obtain 
 * @method void setFailReason(string $FailReason) Set 
 */
class RegistryConnDetectResult extends AbstractModel
{
    /**
     * @var string 
     */
    public $Quuid;

    /**
     * @var string 
     */
    public $Uuid;

    /**
     * @var string 
     */
    public $ConnDetectStatus;

    /**
     * @var string 
     */
    public $ConnDetectMessage;

    /**
     * @var string 
     */
    public $Solution;

    /**
     * @var string 
     */
    public $FailReason;

    /**
     * @param string $Quuid 
     * @param string $Uuid 
     * @param string $ConnDetectStatus 
     * @param string $ConnDetectMessage 
     * @param string $Solution 
     * @param string $FailReason 
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
