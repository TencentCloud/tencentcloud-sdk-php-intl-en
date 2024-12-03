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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource list information response parameters structure
 *
 * @method string getResourceType() Obtain Resource type
 * @method void setResourceType(string $ResourceType) Set Resource type
 * @method string getResourceName() Obtain Resource name
 * @method void setResourceName(string $ResourceName) Set Resource name
 * @method string getResourceId() Obtain Resource ID
 * @method void setResourceId(string $ResourceId) Set Resource ID
 * @method string getResourceRegion() Obtain Region

Note: This field may return null, indicating that no valid value is found.
 * @method void setResourceRegion(string $ResourceRegion) Set Region

Note: This field may return null, indicating that no valid value is found.
 * @method string getResourceStatus() Obtain Resource Status

Note: This field may return null, indicating that no valid value is found.
 * @method void setResourceStatus(string $ResourceStatus) Set Resource Status

Note: This field may return null, indicating that no valid value is found.
 * @method integer getResourceDelete() Obtain 1: Deleted. 2: Not deleted.
Note: This field may return null, indicating that no valid value is found.
 * @method void setResourceDelete(integer $ResourceDelete) Set 1: Deleted. 2: Not deleted.
Note: This field may return null, indicating that no valid value is found.
 * @method string getResourceCreateTime() Obtain Resource creation time

Note: This field may return null, indicating that no valid value is found.
 * @method void setResourceCreateTime(string $ResourceCreateTime) Set Resource creation time

Note: This field may return null, indicating that no valid value is found.
 * @method array getTags() Obtain Tag information

Note: This field may return null, indicating that no valid value is found.
 * @method void setTags(array $Tags) Set Tag information

Note: This field may return null, indicating that no valid value is found.
 * @method string getResourceZone() Obtain Availability zone

Note: This field may return null, indicating that no valid value is found.
 * @method void setResourceZone(string $ResourceZone) Set Availability zone

Note: This field may return null, indicating that no valid value is found.
 * @method string getComplianceResult() Obtain Compliance status.
Note: This field may return null, indicating that no valid value is found.
 * @method void setComplianceResult(string $ComplianceResult) Set Compliance status.
Note: This field may return null, indicating that no valid value is found.
 */
class ResourceListInfo extends AbstractModel
{
    /**
     * @var string Resource type
     */
    public $ResourceType;

    /**
     * @var string Resource name
     */
    public $ResourceName;

    /**
     * @var string Resource ID
     */
    public $ResourceId;

    /**
     * @var string Region

Note: This field may return null, indicating that no valid value is found.
     */
    public $ResourceRegion;

    /**
     * @var string Resource Status

Note: This field may return null, indicating that no valid value is found.
     */
    public $ResourceStatus;

    /**
     * @var integer 1: Deleted. 2: Not deleted.
Note: This field may return null, indicating that no valid value is found.
     */
    public $ResourceDelete;

    /**
     * @var string Resource creation time

Note: This field may return null, indicating that no valid value is found.
     */
    public $ResourceCreateTime;

    /**
     * @var array Tag information

Note: This field may return null, indicating that no valid value is found.
     */
    public $Tags;

    /**
     * @var string Availability zone

Note: This field may return null, indicating that no valid value is found.
     */
    public $ResourceZone;

    /**
     * @var string Compliance status.
Note: This field may return null, indicating that no valid value is found.
     */
    public $ComplianceResult;

    /**
     * @param string $ResourceType Resource type
     * @param string $ResourceName Resource name
     * @param string $ResourceId Resource ID
     * @param string $ResourceRegion Region

Note: This field may return null, indicating that no valid value is found.
     * @param string $ResourceStatus Resource Status

Note: This field may return null, indicating that no valid value is found.
     * @param integer $ResourceDelete 1: Deleted. 2: Not deleted.
Note: This field may return null, indicating that no valid value is found.
     * @param string $ResourceCreateTime Resource creation time

Note: This field may return null, indicating that no valid value is found.
     * @param array $Tags Tag information

Note: This field may return null, indicating that no valid value is found.
     * @param string $ResourceZone Availability zone

Note: This field may return null, indicating that no valid value is found.
     * @param string $ComplianceResult Compliance status.
Note: This field may return null, indicating that no valid value is found.
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("ResourceStatus",$param) and $param["ResourceStatus"] !== null) {
            $this->ResourceStatus = $param["ResourceStatus"];
        }

        if (array_key_exists("ResourceDelete",$param) and $param["ResourceDelete"] !== null) {
            $this->ResourceDelete = $param["ResourceDelete"];
        }

        if (array_key_exists("ResourceCreateTime",$param) and $param["ResourceCreateTime"] !== null) {
            $this->ResourceCreateTime = $param["ResourceCreateTime"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ResourceZone",$param) and $param["ResourceZone"] !== null) {
            $this->ResourceZone = $param["ResourceZone"];
        }

        if (array_key_exists("ComplianceResult",$param) and $param["ComplianceResult"] !== null) {
            $this->ComplianceResult = $param["ComplianceResult"];
        }
    }
}
