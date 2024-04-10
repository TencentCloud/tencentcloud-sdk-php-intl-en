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
 * @method integer getFuncType() Obtain Task type. 1: Specify topic; 2: Dynamic creation. For details, please refer to Creating Processing Task Document (https://intl.cloud.tencent.com/document/product/614/63940?from_cn_redirect=1).
 * @method void setFuncType(integer $FuncType) Set Task type. 1: Specify topic; 2: Dynamic creation. For details, please refer to Creating Processing Task Document (https://intl.cloud.tencent.com/document/product/614/63940?from_cn_redirect=1).
 * @method string getSrcTopicId() Obtain Source log topic
 * @method void setSrcTopicId(string $SrcTopicId) Set Source log topic
 * @method string getName() Obtain Data processing task name
 * @method void setName(string $Name) Set Data processing task name
 * @method string getEtlContent() Obtain Data processing statement
 * @method void setEtlContent(string $EtlContent) Set Data processing statement
 * @method integer getTaskType() Obtain Processing type.
1: Process preview using random data from the source log topic; 2: Process preview using user-defined test data; 3: Create real processing tasks.
 * @method void setTaskType(integer $TaskType) Set Processing type.
1: Process preview using random data from the source log topic; 2: Process preview using user-defined test data; 3: Create real processing tasks.
 * @method array getDstResources() Obtain Destination topic_id and alias of processing task. This parameter is required when FuncType=1, and not required when FuncType=2.
 * @method void setDstResources(array $DstResources) Set Destination topic_id and alias of processing task. This parameter is required when FuncType=1, and not required when FuncType=2.
 * @method integer getEnableFlag() Obtain Task status. Valid values: 1 (enabled) and 2 (disabled).
 * @method void setEnableFlag(integer $EnableFlag) Set Task status. Valid values: 1 (enabled) and 2 (disabled).
 * @method array getPreviewLogStatistics() Obtain Test data used for previewing the processing result
 * @method void setPreviewLogStatistics(array $PreviewLogStatistics) Set Test data used for previewing the processing result
 */
class CreateDataTransformRequest extends AbstractModel
{
    /**
     * @var integer Task type. 1: Specify topic; 2: Dynamic creation. For details, please refer to Creating Processing Task Document (https://intl.cloud.tencent.com/document/product/614/63940?from_cn_redirect=1).
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
     * @var integer Processing type.
1: Process preview using random data from the source log topic; 2: Process preview using user-defined test data; 3: Create real processing tasks.
     */
    public $TaskType;

    /**
     * @var array Destination topic_id and alias of processing task. This parameter is required when FuncType=1, and not required when FuncType=2.
     */
    public $DstResources;

    /**
     * @var integer Task status. Valid values: 1 (enabled) and 2 (disabled).
     */
    public $EnableFlag;

    /**
     * @var array Test data used for previewing the processing result
     */
    public $PreviewLogStatistics;

    /**
     * @param integer $FuncType Task type. 1: Specify topic; 2: Dynamic creation. For details, please refer to Creating Processing Task Document (https://intl.cloud.tencent.com/document/product/614/63940?from_cn_redirect=1).
     * @param string $SrcTopicId Source log topic
     * @param string $Name Data processing task name
     * @param string $EtlContent Data processing statement
     * @param integer $TaskType Processing type.
1: Process preview using random data from the source log topic; 2: Process preview using user-defined test data; 3: Create real processing tasks.
     * @param array $DstResources Destination topic_id and alias of processing task. This parameter is required when FuncType=1, and not required when FuncType=2.
     * @param integer $EnableFlag Task status. Valid values: 1 (enabled) and 2 (disabled).
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

        if (array_key_exists("DstResources",$param) and $param["DstResources"] !== null) {
            $this->DstResources = [];
            foreach ($param["DstResources"] as $key => $value){
                $obj = new DataTransformResouceInfo();
                $obj->deserialize($value);
                array_push($this->DstResources, $obj);
            }
        }

        if (array_key_exists("EnableFlag",$param) and $param["EnableFlag"] !== null) {
            $this->EnableFlag = $param["EnableFlag"];
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
