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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceLogToCLS request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
 * @method string getLogType() Obtain Log type. error: error log. slowlog: slow log.
 * @method void setLogType(string $LogType) Set Log type. error: error log. slowlog: slow log.
 * @method string getStatus() Obtain Delivery status. ON: Enabled, OFF: Disabled.
 * @method void setStatus(string $Status) Set Delivery status. ON: Enabled, OFF: Disabled.
 * @method boolean getCreateLogset() Obtain Whether required to create logset. Default to false.
 * @method void setCreateLogset(boolean $CreateLogset) Set Whether required to create logset. Default to false.
 * @method string getLogset() Obtain Logset name when creating a logset; logset ID when selecting an existing log set. Empty by default.
Description: When the parameter Status is set to ON, you must fill in either the Logset or LogTopic parameter.
 * @method void setLogset(string $Logset) Set Logset name when creating a logset; logset ID when selecting an existing log set. Empty by default.
Description: When the parameter Status is set to ON, you must fill in either the Logset or LogTopic parameter.
 * @method boolean getCreateLogTopic() Obtain Whether required to create log topic. Default to false.
 * @method void setCreateLogTopic(boolean $CreateLogTopic) Set Whether required to create log topic. Default to false.
 * @method string getLogTopic() Obtain Log topic name when creating a log topic; log topic ID when selecting an existing log topic. Empty by default.
Description: When the parameter Status is set to ON, you must fill in either the Logset or LogTopic parameter.
 * @method void setLogTopic(string $LogTopic) Set Log topic name when creating a log topic; log topic ID when selecting an existing log topic. Empty by default.
Description: When the parameter Status is set to ON, you must fill in either the Logset or LogTopic parameter.
 * @method integer getPeriod() Obtain Log topic valid period. Default value: 30 days if left empty. Maximum value: 3600.
 * @method void setPeriod(integer $Period) Set Log topic valid period. Default value: 30 days if left empty. Maximum value: 3600.
 * @method boolean getCreateIndex() Obtain Whether to create an index when creating a log topic. Default to false.
 * @method void setCreateIndex(boolean $CreateIndex) Set Whether to create an index when creating a log topic. Default to false.
 * @method string getClsRegion() Obtain The region of CLS. If left empty, it defaults to the parameter value of Region.
 * @method void setClsRegion(string $ClsRegion) Set The region of CLS. If left empty, it defaults to the parameter value of Region.
 */
class ModifyDBInstanceLogToCLSRequest extends AbstractModel
{
    /**
     * @var string Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
     */
    public $InstanceId;

    /**
     * @var string Log type. error: error log. slowlog: slow log.
     */
    public $LogType;

    /**
     * @var string Delivery status. ON: Enabled, OFF: Disabled.
     */
    public $Status;

    /**
     * @var boolean Whether required to create logset. Default to false.
     */
    public $CreateLogset;

    /**
     * @var string Logset name when creating a logset; logset ID when selecting an existing log set. Empty by default.
Description: When the parameter Status is set to ON, you must fill in either the Logset or LogTopic parameter.
     */
    public $Logset;

    /**
     * @var boolean Whether required to create log topic. Default to false.
     */
    public $CreateLogTopic;

    /**
     * @var string Log topic name when creating a log topic; log topic ID when selecting an existing log topic. Empty by default.
Description: When the parameter Status is set to ON, you must fill in either the Logset or LogTopic parameter.
     */
    public $LogTopic;

    /**
     * @var integer Log topic valid period. Default value: 30 days if left empty. Maximum value: 3600.
     */
    public $Period;

    /**
     * @var boolean Whether to create an index when creating a log topic. Default to false.
     */
    public $CreateIndex;

    /**
     * @var string The region of CLS. If left empty, it defaults to the parameter value of Region.
     */
    public $ClsRegion;

    /**
     * @param string $InstanceId Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
     * @param string $LogType Log type. error: error log. slowlog: slow log.
     * @param string $Status Delivery status. ON: Enabled, OFF: Disabled.
     * @param boolean $CreateLogset Whether required to create logset. Default to false.
     * @param string $Logset Logset name when creating a logset; logset ID when selecting an existing log set. Empty by default.
Description: When the parameter Status is set to ON, you must fill in either the Logset or LogTopic parameter.
     * @param boolean $CreateLogTopic Whether required to create log topic. Default to false.
     * @param string $LogTopic Log topic name when creating a log topic; log topic ID when selecting an existing log topic. Empty by default.
Description: When the parameter Status is set to ON, you must fill in either the Logset or LogTopic parameter.
     * @param integer $Period Log topic valid period. Default value: 30 days if left empty. Maximum value: 3600.
     * @param boolean $CreateIndex Whether to create an index when creating a log topic. Default to false.
     * @param string $ClsRegion The region of CLS. If left empty, it defaults to the parameter value of Region.
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

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateLogset",$param) and $param["CreateLogset"] !== null) {
            $this->CreateLogset = $param["CreateLogset"];
        }

        if (array_key_exists("Logset",$param) and $param["Logset"] !== null) {
            $this->Logset = $param["Logset"];
        }

        if (array_key_exists("CreateLogTopic",$param) and $param["CreateLogTopic"] !== null) {
            $this->CreateLogTopic = $param["CreateLogTopic"];
        }

        if (array_key_exists("LogTopic",$param) and $param["LogTopic"] !== null) {
            $this->LogTopic = $param["LogTopic"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("CreateIndex",$param) and $param["CreateIndex"] !== null) {
            $this->CreateIndex = $param["CreateIndex"];
        }

        if (array_key_exists("ClsRegion",$param) and $param["ClsRegion"] !== null) {
            $this->ClsRegion = $param["ClsRegion"];
        }
    }
}
