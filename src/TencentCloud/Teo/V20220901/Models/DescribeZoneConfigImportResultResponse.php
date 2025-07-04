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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeZoneConfigImportResult response structure.
 *
 * @method string getStatus() Obtain The status of this import task. Valid values: <li>success: It indicates the configuration was successfully imported;</li> <li>failure: It indicates the configuration import failed;</li> <li>doing: It indicates the configuration is being imported.</li>
 * @method void setStatus(string $Status) Set The status of this import task. Valid values: <li>success: It indicates the configuration was successfully imported;</li> <li>failure: It indicates the configuration import failed;</li> <li>doing: It indicates the configuration is being imported.</li>
 * @method string getMessage() Obtain The status message of this import task. If the configuration item import fails, you can view the failure cause through this field.
 * @method void setMessage(string $Message) Set The status message of this import task. If the configuration item import fails, you can view the failure cause through this field.
 * @method string getContent() Obtain The configuration content of this import task.
 * @method void setContent(string $Content) Set The configuration content of this import task.
 * @method string getImportTime() Obtain The start time of this import task.
 * @method void setImportTime(string $ImportTime) Set The start time of this import task.
 * @method string getFinishTime() Obtain The end time of this import task.
 * @method void setFinishTime(string $FinishTime) Set The end time of this import task.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeZoneConfigImportResultResponse extends AbstractModel
{
    /**
     * @var string The status of this import task. Valid values: <li>success: It indicates the configuration was successfully imported;</li> <li>failure: It indicates the configuration import failed;</li> <li>doing: It indicates the configuration is being imported.</li>
     */
    public $Status;

    /**
     * @var string The status message of this import task. If the configuration item import fails, you can view the failure cause through this field.
     */
    public $Message;

    /**
     * @var string The configuration content of this import task.
     */
    public $Content;

    /**
     * @var string The start time of this import task.
     */
    public $ImportTime;

    /**
     * @var string The end time of this import task.
     */
    public $FinishTime;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Status The status of this import task. Valid values: <li>success: It indicates the configuration was successfully imported;</li> <li>failure: It indicates the configuration import failed;</li> <li>doing: It indicates the configuration is being imported.</li>
     * @param string $Message The status message of this import task. If the configuration item import fails, you can view the failure cause through this field.
     * @param string $Content The configuration content of this import task.
     * @param string $ImportTime The start time of this import task.
     * @param string $FinishTime The end time of this import task.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("ImportTime",$param) and $param["ImportTime"] !== null) {
            $this->ImportTime = $param["ImportTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
