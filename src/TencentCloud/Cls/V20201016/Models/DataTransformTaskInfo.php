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
 * Basic information of a data processing task
 *
 * @method string getName() Obtain Data processing task name
 * @method void setName(string $Name) Set Data processing task name
 * @method string getTaskId() Obtain Data processing task ID
 * @method void setTaskId(string $TaskId) Set Data processing task ID
 * @method integer getEnableFlag() Obtain Task status. Valid values: 1 (enabled) and 2 (disabled).
 * @method void setEnableFlag(integer $EnableFlag) Set Task status. Valid values: 1 (enabled) and 2 (disabled).
 * @method integer getType() Obtain Task type. Valid values: 1 (DSL) and 2 (SQL).
 * @method void setType(integer $Type) Set Task type. Valid values: 1 (DSL) and 2 (SQL).
 * @method string getSrcTopicId() Obtain Source log topic
 * @method void setSrcTopicId(string $SrcTopicId) Set Source log topic
 * @method integer getStatus() Obtain Current task status. Valid values: 1 (preparing), 2 (in progress), 3 (being stopped), and 4 (stopped).
 * @method void setStatus(integer $Status) Set Current task status. Valid values: 1 (preparing), 2 (in progress), 3 (being stopped), and 4 (stopped).
 * @method string getCreateTime() Obtain Task creation time
 * @method void setCreateTime(string $CreateTime) Set Task creation time
 * @method string getUpdateTime() Obtain Last modified time
 * @method void setUpdateTime(string $UpdateTime) Set Last modified time
 * @method string getLastEnableTime() Obtain Last enabled time. If you need to rebuild a cluster, modify this time.
 * @method void setLastEnableTime(string $LastEnableTime) Set Last enabled time. If you need to rebuild a cluster, modify this time.
 * @method string getSrcTopicName() Obtain Log topic name
 * @method void setSrcTopicName(string $SrcTopicName) Set Log topic name
 * @method string getLogsetId() Obtain Logset ID
 * @method void setLogsetId(string $LogsetId) Set Logset ID
 * @method array getDstResources() Obtain Target topic ID and alias of the data processing task
 * @method void setDstResources(array $DstResources) Set Target topic ID and alias of the data processing task
 * @method string getEtlContent() Obtain Logical function for data processing
 * @method void setEtlContent(string $EtlContent) Set Logical function for data processing
 */
class DataTransformTaskInfo extends AbstractModel
{
    /**
     * @var string Data processing task name
     */
    public $Name;

    /**
     * @var string Data processing task ID
     */
    public $TaskId;

    /**
     * @var integer Task status. Valid values: 1 (enabled) and 2 (disabled).
     */
    public $EnableFlag;

    /**
     * @var integer Task type. Valid values: 1 (DSL) and 2 (SQL).
     */
    public $Type;

    /**
     * @var string Source log topic
     */
    public $SrcTopicId;

    /**
     * @var integer Current task status. Valid values: 1 (preparing), 2 (in progress), 3 (being stopped), and 4 (stopped).
     */
    public $Status;

    /**
     * @var string Task creation time
     */
    public $CreateTime;

    /**
     * @var string Last modified time
     */
    public $UpdateTime;

    /**
     * @var string Last enabled time. If you need to rebuild a cluster, modify this time.
     */
    public $LastEnableTime;

    /**
     * @var string Log topic name
     */
    public $SrcTopicName;

    /**
     * @var string Logset ID
     */
    public $LogsetId;

    /**
     * @var array Target topic ID and alias of the data processing task
     */
    public $DstResources;

    /**
     * @var string Logical function for data processing
     */
    public $EtlContent;

    /**
     * @param string $Name Data processing task name
     * @param string $TaskId Data processing task ID
     * @param integer $EnableFlag Task status. Valid values: 1 (enabled) and 2 (disabled).
     * @param integer $Type Task type. Valid values: 1 (DSL) and 2 (SQL).
     * @param string $SrcTopicId Source log topic
     * @param integer $Status Current task status. Valid values: 1 (preparing), 2 (in progress), 3 (being stopped), and 4 (stopped).
     * @param string $CreateTime Task creation time
     * @param string $UpdateTime Last modified time
     * @param string $LastEnableTime Last enabled time. If you need to rebuild a cluster, modify this time.
     * @param string $SrcTopicName Log topic name
     * @param string $LogsetId Logset ID
     * @param array $DstResources Target topic ID and alias of the data processing task
     * @param string $EtlContent Logical function for data processing
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("EnableFlag",$param) and $param["EnableFlag"] !== null) {
            $this->EnableFlag = $param["EnableFlag"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SrcTopicId",$param) and $param["SrcTopicId"] !== null) {
            $this->SrcTopicId = $param["SrcTopicId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("LastEnableTime",$param) and $param["LastEnableTime"] !== null) {
            $this->LastEnableTime = $param["LastEnableTime"];
        }

        if (array_key_exists("SrcTopicName",$param) and $param["SrcTopicName"] !== null) {
            $this->SrcTopicName = $param["SrcTopicName"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("DstResources",$param) and $param["DstResources"] !== null) {
            $this->DstResources = [];
            foreach ($param["DstResources"] as $key => $value){
                $obj = new DataTransformResouceInfo();
                $obj->deserialize($value);
                array_push($this->DstResources, $obj);
            }
        }

        if (array_key_exists("EtlContent",$param) and $param["EtlContent"] !== null) {
            $this->EtlContent = $param["EtlContent"];
        }
    }
}
