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
 * DescribeIntegrationNode response structure.
 *
 * @method IntegrationNodeInfo getNodeInfo() Obtain Node information\nNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setNodeInfo(IntegrationNodeInfo $NodeInfo) Set Node information\nNote: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getSourceCheckFlag() Obtain Has the upstream node been modified? true Modified, needs to be prompted; false Not modified\nNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setSourceCheckFlag(boolean $SourceCheckFlag) Set Has the upstream node been modified? true Modified, needs to be prompted; false Not modified\nNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeIntegrationNodeResponse extends AbstractModel
{
    /**
     * @var IntegrationNodeInfo Node information\nNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $NodeInfo;

    /**
     * @var boolean Has the upstream node been modified? true Modified, needs to be prompted; false Not modified\nNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $SourceCheckFlag;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param IntegrationNodeInfo $NodeInfo Node information\nNote: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $SourceCheckFlag Has the upstream node been modified? true Modified, needs to be prompted; false Not modified\nNote: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("NodeInfo",$param) and $param["NodeInfo"] !== null) {
            $this->NodeInfo = new IntegrationNodeInfo();
            $this->NodeInfo->deserialize($param["NodeInfo"]);
        }

        if (array_key_exists("SourceCheckFlag",$param) and $param["SourceCheckFlag"] !== null) {
            $this->SourceCheckFlag = $param["SourceCheckFlag"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}