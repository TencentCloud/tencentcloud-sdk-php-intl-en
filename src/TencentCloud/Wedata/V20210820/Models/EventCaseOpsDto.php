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
 * EventCaseOpsDto
 *
 * @method string getCaseId() Obtain Case ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCaseId(string $CaseId) Set Case ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getName() Obtain Case Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setName(string $Name) Set Case Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDimension() Obtain time format
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDimension(string $Dimension) Set time format
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreationTimestamp() Obtain Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreationTimestamp(string $CreationTimestamp) Set Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getConsumerId() Obtain Consumer ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setConsumerId(string $ConsumerId) Set Consumer ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDescription() Obtain DescriptionNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setDescription(string $Description) Set DescriptionNote: This field may return null, indicating that no valid value can be obtained.
 */
class EventCaseOpsDto extends AbstractModel
{
    /**
     * @var string Case ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CaseId;

    /**
     * @var string Case Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Name;

    /**
     * @var string time format
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Dimension;

    /**
     * @var string Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreationTimestamp;

    /**
     * @var string Consumer ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ConsumerId;

    /**
     * @var string DescriptionNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Description;

    /**
     * @param string $CaseId Case ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Name Case Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Dimension time format
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CreationTimestamp Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ConsumerId Consumer ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Description DescriptionNote: This field may return null, indicating that no valid value can be obtained.
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

        if (array_key_exists("CreationTimestamp",$param) and $param["CreationTimestamp"] !== null) {
            $this->CreationTimestamp = $param["CreationTimestamp"];
        }

        if (array_key_exists("ConsumerId",$param) and $param["ConsumerId"] !== null) {
            $this->ConsumerId = $param["ConsumerId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
