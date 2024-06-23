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
 * Event Instance Information
 *
 * @method string getCaseId() Obtain Event Instance ID
 * @method void setCaseId(string $CaseId) Set Event Instance ID
 * @method string getName() Obtain Event
 * @method void setName(string $Name) Set Event
 * @method string getDimension() Obtain Event Format
 * @method void setDimension(string $Dimension) Set Event Format
 * @method string getCreationTs() Obtain Creation Time
 * @method void setCreationTs(string $CreationTs) Set Creation Time
 * @method string getConsumerId() Obtain Consumer ID
 * @method void setConsumerId(string $ConsumerId) Set Consumer ID
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 */
class EventCaseDTO extends AbstractModel
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
     * @var string Event Format
     */
    public $Dimension;

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
     * @param string $CaseId Event Instance ID
     * @param string $Name Event
     * @param string $Dimension Event Format
     * @param string $CreationTs Creation Time
     * @param string $ConsumerId Consumer ID
     * @param string $Description Description
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

        if (array_key_exists("Dimension",$param) and $param["Dimension"] !== null) {
            $this->Dimension = $param["Dimension"];
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
    }
}
