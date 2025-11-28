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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLogDownloadTask request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getStartTime() Obtain Start time.
 * @method void setStartTime(string $StartTime) Set Start time.
 * @method string getEndTime() Obtain End time.
 * @method void setEndTime(string $EndTime) Set End time.
 * @method array getNodeNames() Obtain Node name.
 * @method void setNodeNames(array $NodeNames) Set Node name.
 * @method array getLogComponents() Obtain Log category.
 * @method void setLogComponents(array $LogComponents) Set Log category.
 * @method array getLogLevels() Obtain Log level.
 * @method void setLogLevels(array $LogLevels) Set Log level.
 * @method array getLogIds() Obtain Log ID.
 * @method void setLogIds(array $LogIds) Set Log ID.
 * @method array getLogConnections() Obtain Log connection information.
 * @method void setLogConnections(array $LogConnections) Set Log connection information.
 * @method array getLogDetailParams() Obtain Filtering fields for log details.
 * @method void setLogDetailParams(array $LogDetailParams) Set Filtering fields for log details.
 */
class CreateLogDownloadTaskRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Start time.
     */
    public $StartTime;

    /**
     * @var string End time.
     */
    public $EndTime;

    /**
     * @var array Node name.
     */
    public $NodeNames;

    /**
     * @var array Log category.
     */
    public $LogComponents;

    /**
     * @var array Log level.
     */
    public $LogLevels;

    /**
     * @var array Log ID.
     */
    public $LogIds;

    /**
     * @var array Log connection information.
     */
    public $LogConnections;

    /**
     * @var array Filtering fields for log details.
     */
    public $LogDetailParams;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $StartTime Start time.
     * @param string $EndTime End time.
     * @param array $NodeNames Node name.
     * @param array $LogComponents Log category.
     * @param array $LogLevels Log level.
     * @param array $LogIds Log ID.
     * @param array $LogConnections Log connection information.
     * @param array $LogDetailParams Filtering fields for log details.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("NodeNames",$param) and $param["NodeNames"] !== null) {
            $this->NodeNames = $param["NodeNames"];
        }

        if (array_key_exists("LogComponents",$param) and $param["LogComponents"] !== null) {
            $this->LogComponents = $param["LogComponents"];
        }

        if (array_key_exists("LogLevels",$param) and $param["LogLevels"] !== null) {
            $this->LogLevels = $param["LogLevels"];
        }

        if (array_key_exists("LogIds",$param) and $param["LogIds"] !== null) {
            $this->LogIds = $param["LogIds"];
        }

        if (array_key_exists("LogConnections",$param) and $param["LogConnections"] !== null) {
            $this->LogConnections = $param["LogConnections"];
        }

        if (array_key_exists("LogDetailParams",$param) and $param["LogDetailParams"] !== null) {
            $this->LogDetailParams = $param["LogDetailParams"];
        }
    }
}
