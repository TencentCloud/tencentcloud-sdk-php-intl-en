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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Event Continuous Time Instance Information
 *
 * @method string getCaseId() Obtain Event Instance ID
 * @method void setCaseId(string $CaseId) Set Event Instance ID
 * @method string getName() Obtain Event
 * @method void setName(string $Name) Set Event
 * @method string getStartDimension() Obtain Event Trigger Start Time
 * @method void setStartDimension(string $StartDimension) Set Event Trigger Start Time
 * @method string getCreationTs() Obtain Creation Time
 * @method void setCreationTs(string $CreationTs) Set Creation Time
 * @method string getConsumerId() Obtain Consumer ID
 * @method void setConsumerId(string $ConsumerId) Set Consumer ID
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 * @method string getEndDimension() Obtain Event Trigger End Time
 * @method void setEndDimension(string $EndDimension) Set Event Trigger End Time
 * @method string getEventSubType() Obtain Event Cycle
 * @method void setEventSubType(string $EventSubType) Set Event Cycle
 */
class EventBatchCaseDTO extends AbstractModel
{
    /**
     * @var string Event Instance ID
     */
    public $CaseId;

    /**
     * @var string Event
     */
    public $Name;

    /**
     * @var string Event Trigger Start Time
     */
    public $StartDimension;

    /**
     * @var string Creation Time
     */
    public $CreationTs;

    /**
     * @var string Consumer ID
     */
    public $ConsumerId;

    /**
     * @var string Description
     */
    public $Description;

    /**
     * @var string Event Trigger End Time
     */
    public $EndDimension;

    /**
     * @var string Event Cycle
     */
    public $EventSubType;

    /**
     * @param string $CaseId Event Instance ID
     * @param string $Name Event
     * @param string $StartDimension Event Trigger Start Time
     * @param string $CreationTs Creation Time
     * @param string $ConsumerId Consumer ID
     * @param string $Description Description
     * @param string $EndDimension Event Trigger End Time
     * @param string $EventSubType Event Cycle
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
        if (array_key_exists("CaseId",$param) and $param["CaseId"] !== null) {
            $this->CaseId = $param["CaseId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("StartDimension",$param) and $param["StartDimension"] !== null) {
            $this->StartDimension = $param["StartDimension"];
        }

        if (array_key_exists("CreationTs",$param) and $param["CreationTs"] !== null) {
            $this->CreationTs = $param["CreationTs"];
        }

        if (array_key_exists("ConsumerId",$param) and $param["ConsumerId"] !== null) {
            $this->ConsumerId = $param["ConsumerId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("EndDimension",$param) and $param["EndDimension"] !== null) {
            $this->EndDimension = $param["EndDimension"];
        }

        if (array_key_exists("EventSubType",$param) and $param["EventSubType"] !== null) {
            $this->EventSubType = $param["EventSubType"];
        }
    }
}
