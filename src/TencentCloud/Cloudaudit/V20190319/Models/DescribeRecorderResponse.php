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
namespace TencentCloud\Cloudaudit\V20190319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRecorder response structure.
 *
 * @method boolean getEnable() Obtain Whether to enable the recorder. Valid values: true (enable), false (disable).
 * @method void setEnable(boolean $Enable) Set Whether to enable the recorder. Valid values: true (enable), false (disable).
 * @method string getName() Obtain Recorder name
 * @method void setName(string $Name) Set Recorder name
 * @method string getLastErrorMessage() Obtain Last error message of the recorder, which corresponds to `LastErrorCode`.
 * @method void setLastErrorMessage(string $LastErrorMessage) Set Last error message of the recorder, which corresponds to `LastErrorCode`.
 * @method string getLastStatus() Obtain The status of the recorder when it recorded information last time. Valid values: PENDING, OK, FAILED.
 * @method void setLastStatus(string $LastStatus) Set The status of the recorder when it recorded information last time. Valid values: PENDING, OK, FAILED.
 * @method array getResourceTypes() Obtain List of the resource types monitored by the recorder
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setResourceTypes(array $ResourceTypes) Set List of the resource types monitored by the recorder
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getLastStartTime() Obtain Time when the recorder was enabled last time
 * @method void setLastStartTime(string $LastStartTime) Set Time when the recorder was enabled last time
 * @method string getLastErrorCode() Obtain Last error code of the recorder
 * @method void setLastErrorCode(string $LastErrorCode) Set Last error code of the recorder
 * @method string getLastStopTime() Obtain Time when the recorder was disabled last time
 * @method void setLastStopTime(string $LastStopTime) Set Time when the recorder was disabled last time
 * @method boolean getAllSupported() Obtain Whether to monitor all currently supported resource types. Valid values: true (yes), false (no).
 * @method void setAllSupported(boolean $AllSupported) Set Whether to monitor all currently supported resource types. Valid values: true (yes), false (no).
 * @method string getCreateTime() Obtain Recorder creation time
 * @method void setCreateTime(string $CreateTime) Set Recorder creation time
 * @method string getRole() Obtain Role name authorized to CFA
 * @method void setRole(string $Role) Set Role name authorized to CFA
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeRecorderResponse extends AbstractModel
{
    /**
     * @var boolean Whether to enable the recorder. Valid values: true (enable), false (disable).
     */
    public $Enable;

    /**
     * @var string Recorder name
     */
    public $Name;

    /**
     * @var string Last error message of the recorder, which corresponds to `LastErrorCode`.
     */
    public $LastErrorMessage;

    /**
     * @var string The status of the recorder when it recorded information last time. Valid values: PENDING, OK, FAILED.
     */
    public $LastStatus;

    /**
     * @var array List of the resource types monitored by the recorder
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ResourceTypes;

    /**
     * @var string Time when the recorder was enabled last time
     */
    public $LastStartTime;

    /**
     * @var string Last error code of the recorder
     */
    public $LastErrorCode;

    /**
     * @var string Time when the recorder was disabled last time
     */
    public $LastStopTime;

    /**
     * @var boolean Whether to monitor all currently supported resource types. Valid values: true (yes), false (no).
     */
    public $AllSupported;

    /**
     * @var string Recorder creation time
     */
    public $CreateTime;

    /**
     * @var string Role name authorized to CFA
     */
    public $Role;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param boolean $Enable Whether to enable the recorder. Valid values: true (enable), false (disable).
     * @param string $Name Recorder name
     * @param string $LastErrorMessage Last error message of the recorder, which corresponds to `LastErrorCode`.
     * @param string $LastStatus The status of the recorder when it recorded information last time. Valid values: PENDING, OK, FAILED.
     * @param array $ResourceTypes List of the resource types monitored by the recorder
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $LastStartTime Time when the recorder was enabled last time
     * @param string $LastErrorCode Last error code of the recorder
     * @param string $LastStopTime Time when the recorder was disabled last time
     * @param boolean $AllSupported Whether to monitor all currently supported resource types. Valid values: true (yes), false (no).
     * @param string $CreateTime Recorder creation time
     * @param string $Role Role name authorized to CFA
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("LastErrorMessage",$param) and $param["LastErrorMessage"] !== null) {
            $this->LastErrorMessage = $param["LastErrorMessage"];
        }

        if (array_key_exists("LastStatus",$param) and $param["LastStatus"] !== null) {
            $this->LastStatus = $param["LastStatus"];
        }

        if (array_key_exists("ResourceTypes",$param) and $param["ResourceTypes"] !== null) {
            $this->ResourceTypes = [];
            foreach ($param["ResourceTypes"] as $key => $value){
                $obj = new RecordResourceType();
                $obj->deserialize($value);
                array_push($this->ResourceTypes, $obj);
            }
        }

        if (array_key_exists("LastStartTime",$param) and $param["LastStartTime"] !== null) {
            $this->LastStartTime = $param["LastStartTime"];
        }

        if (array_key_exists("LastErrorCode",$param) and $param["LastErrorCode"] !== null) {
            $this->LastErrorCode = $param["LastErrorCode"];
        }

        if (array_key_exists("LastStopTime",$param) and $param["LastStopTime"] !== null) {
            $this->LastStopTime = $param["LastStopTime"];
        }

        if (array_key_exists("AllSupported",$param) and $param["AllSupported"] !== null) {
            $this->AllSupported = $param["AllSupported"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
