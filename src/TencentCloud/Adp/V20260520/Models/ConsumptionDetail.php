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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource consumption details
 *
 * @method ConsumptionClassification getClassification() Obtain <p>Consumption category (Type/Target/Scenario/Package)</p>
 * @method void setClassification(ConsumptionClassification $Classification) Set <p>Consumption category (Type/Target/Scenario/Package)</p>
 * @method string getEventTime() Obtain <p>Consumption time, Unix seconds.</p>
 * @method void setEventTime(string $EventTime) Set <p>Consumption time, Unix seconds.</p>
 * @method integer getMetricSourceType() Obtain <p>Amount source type</p><table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>METRIC_SOURCE_TYPE_UNSPECIFIED</td><td>0</td><td></td></tr><tr><td>METRIC_SOURCE_TYPE_APP</td><td>1</td><td>Application development</td></tr><tr><td>METRIC_SOURCE_TYPE_KB</td><td>2</td><td>Knowledge base</td></tr><tr><td>METRIC_SOURCE_TYPE_WIDGET</td><td>3</td><td>Widget</td></tr><tr><td>METRIC_SOURCE_TYPE_OPEN_CLAW</td><td>4</td><td>ClawPro</td></tr><tr><td>METRIC_SOURCE_TYPE_KB_RECALL_TEST</td><td>5</td><td>Knowledge base recall test</td></tr><tr><td>METRIC_SOURCE_TYPE_WORKBENCH</td><td>6</td><td>Intelligent workbench</td></tr><tr><td>METRIC_SOURCE_TYPE_MODEL_API</td><td>7</td><td>Model API calls</td></tr></tbody></table>
 * @method void setMetricSourceType(integer $MetricSourceType) Set <p>Amount source type</p><table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>METRIC_SOURCE_TYPE_UNSPECIFIED</td><td>0</td><td></td></tr><tr><td>METRIC_SOURCE_TYPE_APP</td><td>1</td><td>Application development</td></tr><tr><td>METRIC_SOURCE_TYPE_KB</td><td>2</td><td>Knowledge base</td></tr><tr><td>METRIC_SOURCE_TYPE_WIDGET</td><td>3</td><td>Widget</td></tr><tr><td>METRIC_SOURCE_TYPE_OPEN_CLAW</td><td>4</td><td>ClawPro</td></tr><tr><td>METRIC_SOURCE_TYPE_KB_RECALL_TEST</td><td>5</td><td>Knowledge base recall test</td></tr><tr><td>METRIC_SOURCE_TYPE_WORKBENCH</td><td>6</td><td>Intelligent workbench</td></tr><tr><td>METRIC_SOURCE_TYPE_MODEL_API</td><td>7</td><td>Model API calls</td></tr></tbody></table>
 * @method string getName() Obtain <p>Name.</p>
 * @method void setName(string $Name) Set <p>Name.</p>
 * @method string getSpaceName() Obtain <p>Space name</p>
 * @method void setSpaceName(string $SpaceName) Set <p>Space name</p>
 * @method ConsumptionUsage getUsage() Obtain <p>Consumed usage (numeric value/unit/PU consumption)</p>
 * @method void setUsage(ConsumptionUsage $Usage) Set <p>Consumed usage (numeric value/unit/PU consumption)</p>
 * @method string getUserName() Obtain <p>Username</p>
 * @method void setUserName(string $UserName) Set <p>Username</p>
 */
class ConsumptionDetail extends AbstractModel
{
    /**
     * @var ConsumptionClassification <p>Consumption category (Type/Target/Scenario/Package)</p>
     */
    public $Classification;

    /**
     * @var string <p>Consumption time, Unix seconds.</p>
     */
    public $EventTime;

    /**
     * @var integer <p>Amount source type</p><table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>METRIC_SOURCE_TYPE_UNSPECIFIED</td><td>0</td><td></td></tr><tr><td>METRIC_SOURCE_TYPE_APP</td><td>1</td><td>Application development</td></tr><tr><td>METRIC_SOURCE_TYPE_KB</td><td>2</td><td>Knowledge base</td></tr><tr><td>METRIC_SOURCE_TYPE_WIDGET</td><td>3</td><td>Widget</td></tr><tr><td>METRIC_SOURCE_TYPE_OPEN_CLAW</td><td>4</td><td>ClawPro</td></tr><tr><td>METRIC_SOURCE_TYPE_KB_RECALL_TEST</td><td>5</td><td>Knowledge base recall test</td></tr><tr><td>METRIC_SOURCE_TYPE_WORKBENCH</td><td>6</td><td>Intelligent workbench</td></tr><tr><td>METRIC_SOURCE_TYPE_MODEL_API</td><td>7</td><td>Model API calls</td></tr></tbody></table>
     */
    public $MetricSourceType;

    /**
     * @var string <p>Name.</p>
     */
    public $Name;

    /**
     * @var string <p>Space name</p>
     */
    public $SpaceName;

    /**
     * @var ConsumptionUsage <p>Consumed usage (numeric value/unit/PU consumption)</p>
     */
    public $Usage;

    /**
     * @var string <p>Username</p>
     */
    public $UserName;

    /**
     * @param ConsumptionClassification $Classification <p>Consumption category (Type/Target/Scenario/Package)</p>
     * @param string $EventTime <p>Consumption time, Unix seconds.</p>
     * @param integer $MetricSourceType <p>Amount source type</p><table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>METRIC_SOURCE_TYPE_UNSPECIFIED</td><td>0</td><td></td></tr><tr><td>METRIC_SOURCE_TYPE_APP</td><td>1</td><td>Application development</td></tr><tr><td>METRIC_SOURCE_TYPE_KB</td><td>2</td><td>Knowledge base</td></tr><tr><td>METRIC_SOURCE_TYPE_WIDGET</td><td>3</td><td>Widget</td></tr><tr><td>METRIC_SOURCE_TYPE_OPEN_CLAW</td><td>4</td><td>ClawPro</td></tr><tr><td>METRIC_SOURCE_TYPE_KB_RECALL_TEST</td><td>5</td><td>Knowledge base recall test</td></tr><tr><td>METRIC_SOURCE_TYPE_WORKBENCH</td><td>6</td><td>Intelligent workbench</td></tr><tr><td>METRIC_SOURCE_TYPE_MODEL_API</td><td>7</td><td>Model API calls</td></tr></tbody></table>
     * @param string $Name <p>Name.</p>
     * @param string $SpaceName <p>Space name</p>
     * @param ConsumptionUsage $Usage <p>Consumed usage (numeric value/unit/PU consumption)</p>
     * @param string $UserName <p>Username</p>
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
        if (array_key_exists("Classification",$param) and $param["Classification"] !== null) {
            $this->Classification = new ConsumptionClassification();
            $this->Classification->deserialize($param["Classification"]);
        }

        if (array_key_exists("EventTime",$param) and $param["EventTime"] !== null) {
            $this->EventTime = $param["EventTime"];
        }

        if (array_key_exists("MetricSourceType",$param) and $param["MetricSourceType"] !== null) {
            $this->MetricSourceType = $param["MetricSourceType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SpaceName",$param) and $param["SpaceName"] !== null) {
            $this->SpaceName = $param["SpaceName"];
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = new ConsumptionUsage();
            $this->Usage->deserialize($param["Usage"]);
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }
    }
}
