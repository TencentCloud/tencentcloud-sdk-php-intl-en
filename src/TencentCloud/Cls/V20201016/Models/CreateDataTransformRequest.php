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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDataTransform request structure.
 *
 * @method integer getFuncType() Obtain Task type. Valid values: 1 (specified topic) and 2 (dynamically created).
 * @method void setFuncType(integer $FuncType) Set Task type. Valid values: 1 (specified topic) and 2 (dynamically created).
 * @method string getSrcTopicId() Obtain Source log topic
 * @method void setSrcTopicId(string $SrcTopicId) Set Source log topic
 * @method string getName() Obtain Data processing task name
 * @method void setName(string $Name) Set Data processing task name
 * @method string getEtlContent() Obtain Data processing statement
 * @method void setEtlContent(string $EtlContent) Set Data processing statement
 * @method integer getTaskType() Obtain Data processing type. Valid values: `1`: Use random data from the source log topic for processing preview. `2`: Use user-defined test data for processing preview. `3`: Create a real processing task.
 * @method void setTaskType(integer $TaskType) Set Data processing type. Valid values: `1`: Use random data from the source log topic for processing preview. `2`: Use user-defined test data for processing preview. `3`: Create a real processing task.
 * @method integer getEnableFlag() Obtain Task status. Valid values: 1 (enabled) and 2 (disabled).
 * @method void setEnableFlag(integer $EnableFlag) Set Task status. Valid values: 1 (enabled) and 2 (disabled).
 * @method array getDstResources() Obtain Target topic ID and alias of the data processing task
 * @method void setDstResources(array $DstResources) Set Target topic ID and alias of the data processing task
 * @method array getPreviewLogStatistics() Obtain Test data used for previewing the processing result
 * @method void setPreviewLogStatistics(array $PreviewLogStatistics) Set Test data used for previewing the processing result
 */
class CreateDataTransformRequest extends AbstractModel
{
    /**
     * @var integer Task type. Valid values: 1 (specified topic) and 2 (dynamically created).
     */
    public $FuncType;

    /**
     * @var string Source log topic
     */
    public $SrcTopicId;

    /**
     * @var string Data processing task name
     */
    public $Name;

    /**
     * @var string Data processing statement
     */
    public $EtlContent;

    /**
     * @var integer Data processing type. Valid values: `1`: Use random data from the source log topic for processing preview. `2`: Use user-defined test data for processing preview. `3`: Create a real processing task.
     */
    public $TaskType;

    /**
     * @var integer Task status. Valid values: 1 (enabled) and 2 (disabled).
     */
    public $EnableFlag;

    /**
     * @var array Target topic ID and alias of the data processing task
     */
    public $DstResources;

    /**
     * @var array Test data used for previewing the processing result
     */
    public $PreviewLogStatistics;

    /**
     * @param integer $FuncType Task type. Valid values: 1 (specified topic) and 2 (dynamically created).
     * @param string $SrcTopicId Source log topic
     * @param string $Name Data processing task name
     * @param string $EtlContent Data processing statement
     * @param integer $TaskType Data processing type. Valid values: `1`: Use random data from the source log topic for processing preview. `2`: Use user-defined test data for processing preview. `3`: Create a real processing task.
     * @param integer $EnableFlag Task status. Valid values: 1 (enabled) and 2 (disabled).
     * @param array $DstResources Target topic ID and alias of the data processing task
     * @param array $PreviewLogStatistics Test data used for previewing the processing result
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
        if (array_key_exists("FuncType",$param) and $param["FuncType"] !== null) {
            $this->FuncType = $param["FuncType"];
        }

        if (array_key_exists("SrcTopicId",$param) and $param["SrcTopicId"] !== null) {
            $this->SrcTopicId = $param["SrcTopicId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("EtlContent",$param) and $param["EtlContent"] !== null) {
            $this->EtlContent = $param["EtlContent"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("EnableFlag",$param) and $param["EnableFlag"] !== null) {
            $this->EnableFlag = $param["EnableFlag"];
        }

        if (array_key_exists("DstResources",$param) and $param["DstResources"] !== null) {
            $this->DstResources = [];
            foreach ($param["DstResources"] as $key => $value){
                $obj = new DataTransformResouceInfo();
                $obj->deserialize($value);
                array_push($this->DstResources, $obj);
            }
        }

        if (array_key_exists("PreviewLogStatistics",$param) and $param["PreviewLogStatistics"] !== null) {
            $this->PreviewLogStatistics = [];
            foreach ($param["PreviewLogStatistics"] as $key => $value){
                $obj = new PreviewLogStatistic();
                $obj->deserialize($value);
                array_push($this->PreviewLogStatistics, $obj);
            }
        }
    }
}
