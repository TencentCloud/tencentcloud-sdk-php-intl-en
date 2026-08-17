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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance information
 *
 * @method string getInstanceName() Obtain <p>Instance name.</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name.</p>
 * @method integer getProjectId() Obtain <p>Project ID</p>
 * @method void setProjectId(integer $ProjectId) Set <p>Project ID</p>
 * @method integer getStatus() Obtain <p>Instance status
 * @method void setStatus(integer $Status) Set <p>Instance status
 * @method integer getSubStatus() Obtain <p>Substatus of the instance in process returned.</p><p>Enumeration value:</p><ul><li>0: Read-only disk.</li></ul>
 * @method void setSubStatus(integer $SubStatus) Set <p>Substatus of the instance in process returned.</p><p>Enumeration value:</p><ul><li>0: Read-only disk.</li></ul>
 * @method string getRegion() Obtain <p>Region.</p>
 * @method void setRegion(string $Region) Set <p>Region.</p>
 * @method string getZone() Obtain <p>Zone</p>
 * @method void setZone(string $Zone) Set <p>Zone</p>
 * @method integer getDegradeStrategy() Obtain <p>Degradation policy, measurement unit: ms. After the instance P99 reaches the degradation policy, audit data is automatically discarded to prioritize business availability. Default value: 500 ms. Range value: 300-1000 ms.</p>
 * @method void setDegradeStrategy(integer $DegradeStrategy) Set <p>Degradation policy, measurement unit: ms. After the instance P99 reaches the degradation policy, audit data is automatically discarded to prioritize business availability. Default value: 500 ms. Range value: 300-1000 ms.</p>
 * @method array getInstanceTags() Obtain <p>Tag information</p>
 * @method void setInstanceTags(array $InstanceTags) Set <p>Tag information</p>
 * @method integer getType() Obtain <p>Architecture edition</p>
 * @method void setType(integer $Type) Set <p>Architecture edition</p>
 */
class InstanceInfo extends AbstractModel
{
    /**
     * @var string <p>Instance name.</p>
     */
    public $InstanceName;

    /**
     * @var integer <p>Project ID</p>
     */
    public $ProjectId;

    /**
     * @var integer <p>Instance status
     */
    public $Status;

    /**
     * @var integer <p>Substatus of the instance in process returned.</p><p>Enumeration value:</p><ul><li>0: Read-only disk.</li></ul>
     */
    public $SubStatus;

    /**
     * @var string <p>Region.</p>
     */
    public $Region;

    /**
     * @var string <p>Zone</p>
     */
    public $Zone;

    /**
     * @var integer <p>Degradation policy, measurement unit: ms. After the instance P99 reaches the degradation policy, audit data is automatically discarded to prioritize business availability. Default value: 500 ms. Range value: 300-1000 ms.</p>
     */
    public $DegradeStrategy;

    /**
     * @var array <p>Tag information</p>
     */
    public $InstanceTags;

    /**
     * @var integer <p>Architecture edition</p>
     */
    public $Type;

    /**
     * @param string $InstanceName <p>Instance name.</p>
     * @param integer $ProjectId <p>Project ID</p>
     * @param integer $Status <p>Instance status
     * @param integer $SubStatus <p>Substatus of the instance in process returned.</p><p>Enumeration value:</p><ul><li>0: Read-only disk.</li></ul>
     * @param string $Region <p>Region.</p>
     * @param string $Zone <p>Zone</p>
     * @param integer $DegradeStrategy <p>Degradation policy, measurement unit: ms. After the instance P99 reaches the degradation policy, audit data is automatically discarded to prioritize business availability. Default value: 500 ms. Range value: 300-1000 ms.</p>
     * @param array $InstanceTags <p>Tag information</p>
     * @param integer $Type <p>Architecture edition</p>
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SubStatus",$param) and $param["SubStatus"] !== null) {
            $this->SubStatus = $param["SubStatus"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("DegradeStrategy",$param) and $param["DegradeStrategy"] !== null) {
            $this->DegradeStrategy = $param["DegradeStrategy"];
        }

        if (array_key_exists("InstanceTags",$param) and $param["InstanceTags"] !== null) {
            $this->InstanceTags = [];
            foreach ($param["InstanceTags"] as $key => $value){
                $obj = new InstanceTagInfo();
                $obj->deserialize($value);
                array_push($this->InstanceTags, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
