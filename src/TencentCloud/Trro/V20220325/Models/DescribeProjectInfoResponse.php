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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProjectInfo response structure.
 *
 * @method string getProjectName() Obtain Project name.
 * @method void setProjectName(string $ProjectName) Set Project name.
 * @method string getProjectDescription() Obtain Project description.
 * @method void setProjectDescription(string $ProjectDescription) Set Project description.
 * @method string getPolicyMode() Obtain Project permission mode, black for blocklist, white for allowlist.
 * @method void setPolicyMode(string $PolicyMode) Set Project permission mode, black for blocklist, white for allowlist.
 * @method string getModifyTime() Obtain Project information modification time.
 * @method void setModifyTime(string $ModifyTime) Set Project information modification time.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeProjectInfoResponse extends AbstractModel
{
    /**
     * @var string Project name.
     */
    public $ProjectName;

    /**
     * @var string Project description.
     */
    public $ProjectDescription;

    /**
     * @var string Project permission mode, black for blocklist, white for allowlist.
     */
    public $PolicyMode;

    /**
     * @var string Project information modification time.
     */
    public $ModifyTime;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $ProjectName Project name.
     * @param string $ProjectDescription Project description.
     * @param string $PolicyMode Project permission mode, black for blocklist, white for allowlist.
     * @param string $ModifyTime Project information modification time.
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
        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("ProjectDescription",$param) and $param["ProjectDescription"] !== null) {
            $this->ProjectDescription = $param["ProjectDescription"];
        }

        if (array_key_exists("PolicyMode",$param) and $param["PolicyMode"] !== null) {
            $this->PolicyMode = $param["PolicyMode"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
