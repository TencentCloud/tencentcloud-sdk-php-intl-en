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
 * DescribeDiscoveredResource response structure.
 *
 * @method string getLastUpdateTime() Obtain Last update time
 * @method void setLastUpdateTime(string $LastUpdateTime) Set Last update time
 * @method string getResourceType() Obtain Resource type
 * @method void setResourceType(string $ResourceType) Set Resource type
 * @method string getResourceId() Obtain Resource ID
 * @method void setResourceId(string $ResourceId) Set Resource ID
 * @method string getCreateTime() Obtain Resource creation time
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Resource creation time
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getTag() Obtain Tag details
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTag(string $Tag) Set Tag details
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getResourceInfo() Obtain Current resource configuration details
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setResourceInfo(string $ResourceInfo) Set Current resource configuration details
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getResourceRegion() Obtain Resource region
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setResourceRegion(string $ResourceRegion) Set Resource region
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getResourceAlias() Obtain Resource alias
 * @method void setResourceAlias(string $ResourceAlias) Set Resource alias
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeDiscoveredResourceResponse extends AbstractModel
{
    /**
     * @var string Last update time
     */
    public $LastUpdateTime;

    /**
     * @var string Resource type
     */
    public $ResourceType;

    /**
     * @var string Resource ID
     */
    public $ResourceId;

    /**
     * @var string Resource creation time
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Tag details
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Tag;

    /**
     * @var string Current resource configuration details
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ResourceInfo;

    /**
     * @var string Resource region
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ResourceRegion;

    /**
     * @var string Resource alias
     */
    public $ResourceAlias;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $LastUpdateTime Last update time
     * @param string $ResourceType Resource type
     * @param string $ResourceId Resource ID
     * @param string $CreateTime Resource creation time
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Tag Tag details
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $ResourceInfo Current resource configuration details
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $ResourceRegion Resource region
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $ResourceAlias Resource alias
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
        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("ResourceInfo",$param) and $param["ResourceInfo"] !== null) {
            $this->ResourceInfo = $param["ResourceInfo"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("ResourceAlias",$param) and $param["ResourceAlias"] !== null) {
            $this->ResourceAlias = $param["ResourceAlias"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
