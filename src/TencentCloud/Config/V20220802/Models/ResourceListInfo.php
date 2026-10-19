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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource list information
 *
 * @method string getResourceType() Obtain Resource type.
 * @method void setResourceType(string $ResourceType) Set Resource type.
 * @method string getResourceName() Obtain Resource name
 * @method void setResourceName(string $ResourceName) Set Resource name
 * @method string getResourceId() Obtain Resource ID
 * @method void setResourceId(string $ResourceId) Set Resource ID
 * @method string getResourceRegion() Obtain Region.
 * @method void setResourceRegion(string $ResourceRegion) Set Region.
 * @method string getResourceStatus() Obtain Resource status.
 * @method void setResourceStatus(string $ResourceStatus) Set Resource status.
 * @method integer getResourceDelete() Obtain Valid values: 1 (deleted) and 2 (not deleted).
 * @method void setResourceDelete(integer $ResourceDelete) Set Valid values: 1 (deleted) and 2 (not deleted).
 * @method string getResourceCreateTime() Obtain Resource creation time
 * @method void setResourceCreateTime(string $ResourceCreateTime) Set Resource creation time
 * @method array getTags() Obtain Tag information.
 * @method void setTags(array $Tags) Set Tag information.
 * @method string getResourceZone() Obtain AZ.
 * @method void setResourceZone(string $ResourceZone) Set AZ.
 * @method string getComplianceResult() Obtain Compliance status
 * @method void setComplianceResult(string $ComplianceResult) Set Compliance status
 */
class ResourceListInfo extends AbstractModel
{
    /**
     * @var string Resource type.
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
     * @var string Region.
     */
    public $ResourceRegion;

    /**
     * @var string Resource status.
     */
    public $ResourceStatus;

    /**
     * @var integer Valid values: 1 (deleted) and 2 (not deleted).
     */
    public $ResourceDelete;

    /**
     * @var string Resource creation time
     */
    public $ResourceCreateTime;

    /**
     * @var array Tag information.
     */
    public $Tags;

    /**
     * @var string AZ.
     */
    public $ResourceZone;

    /**
     * @var string Compliance status
     */
    public $ComplianceResult;

    /**
     * @param string $ResourceType Resource type.
     * @param string $ResourceName Resource name
     * @param string $ResourceId Resource ID
     * @param string $ResourceRegion Region.
     * @param string $ResourceStatus Resource status.
     * @param integer $ResourceDelete Valid values: 1 (deleted) and 2 (not deleted).
     * @param string $ResourceCreateTime Resource creation time
     * @param array $Tags Tag information.
     * @param string $ResourceZone AZ.
     * @param string $ComplianceResult Compliance status
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
