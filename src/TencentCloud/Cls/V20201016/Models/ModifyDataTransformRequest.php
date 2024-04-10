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
 * ModifyDataTransform request structure.
 *
 * @method string getTaskId() Obtain Data processing task ID
 * @method void setTaskId(string $TaskId) Set Data processing task ID
 * @method string getName() Obtain Data processing task name
 * @method void setName(string $Name) Set Data processing task name
 * @method string getEtlContent() Obtain Data processing statement
 * @method void setEtlContent(string $EtlContent) Set Data processing statement
 * @method integer getEnableFlag() Obtain Task status. Valid values: 1 (enabled) and 2 (disabled).
 * @method void setEnableFlag(integer $EnableFlag) Set Task status. Valid values: 1 (enabled) and 2 (disabled).
 * @method array getDstResources() Obtain Destination topic ID and alias of the data processing task
 * @method void setDstResources(array $DstResources) Set Destination topic ID and alias of the data processing task
 * @method integer getHasServicesLog() Obtain Whether to enable delivery service log. 1 for disabled, 2 for enabled
 * @method void setHasServicesLog(integer $HasServicesLog) Set Whether to enable delivery service log. 1 for disabled, 2 for enabled
 */
class ModifyDataTransformRequest extends AbstractModel
{
    /**
     * @var string Data processing task ID
     */
    public $TaskId;

    /**
     * @var string Data processing task name
     */
    public $Name;

    /**
     * @var string Data processing statement
     */
    public $EtlContent;

    /**
     * @var integer Task status. Valid values: 1 (enabled) and 2 (disabled).
     */
    public $EnableFlag;

    /**
     * @var array Destination topic ID and alias of the data processing task
     */
    public $DstResources;

    /**
     * @var integer Whether to enable delivery service log. 1 for disabled, 2 for enabled
     */
    public $HasServicesLog;

    /**
     * @param string $TaskId Data processing task ID
     * @param string $Name Data processing task name
     * @param string $EtlContent Data processing statement
     * @param integer $EnableFlag Task status. Valid values: 1 (enabled) and 2 (disabled).
     * @param array $DstResources Destination topic ID and alias of the data processing task
     * @param integer $HasServicesLog Whether to enable delivery service log. 1 for disabled, 2 for enabled
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("EtlContent",$param) and $param["EtlContent"] !== null) {
            $this->EtlContent = $param["EtlContent"];
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

        if (array_key_exists("HasServicesLog",$param) and $param["HasServicesLog"] !== null) {
            $this->HasServicesLog = $param["HasServicesLog"];
        }
    }
}
