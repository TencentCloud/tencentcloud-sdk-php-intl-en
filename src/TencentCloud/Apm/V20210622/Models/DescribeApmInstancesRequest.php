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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApmInstances request structure.
 *
 * @method array getTags() Obtain Tag list.
 * @method void setTags(array $Tags) Set Tag list.
 * @method string getInstanceName() Obtain Filters by business system name, and fuzzy search is supported.
 * @method void setInstanceName(string $InstanceName) Set Filters by business system name, and fuzzy search is supported.
 * @method string getInstanceId() Obtain Filters by business system ID, and fuzzy search is supported.
 * @method void setInstanceId(string $InstanceId) Set Filters by business system ID, and fuzzy search is supported.
 * @method array getInstanceIds() Obtain Filter by business system id.
 * @method void setInstanceIds(array $InstanceIds) Set Filter by business system id.
 * @method integer getDemoInstanceFlag() Obtain Whether to query the official demo business system (0 = non-demo business system, 1 = demo business system, default is 0).
 * @method void setDemoInstanceFlag(integer $DemoInstanceFlag) Set Whether to query the official demo business system (0 = non-demo business system, 1 = demo business system, default is 0).
 * @method integer getAllRegionsFlag() Obtain Whether to query all regional business systems (0 = do not query all regions, 1 = query all regions, default is 0).
 * @method void setAllRegionsFlag(integer $AllRegionsFlag) Set Whether to query all regional business systems (0 = do not query all regions, 1 = query all regions, default is 0).
 */
class DescribeApmInstancesRequest extends AbstractModel
{
    /**
     * @var array Tag list.
     */
    public $Tags;

    /**
     * @var string Filters by business system name, and fuzzy search is supported.
     */
    public $InstanceName;

    /**
     * @var string Filters by business system ID, and fuzzy search is supported.
     */
    public $InstanceId;

    /**
     * @var array Filter by business system id.
     */
    public $InstanceIds;

    /**
     * @var integer Whether to query the official demo business system (0 = non-demo business system, 1 = demo business system, default is 0).
     */
    public $DemoInstanceFlag;

    /**
     * @var integer Whether to query all regional business systems (0 = do not query all regions, 1 = query all regions, default is 0).
     */
    public $AllRegionsFlag;

    /**
     * @param array $Tags Tag list.
     * @param string $InstanceName Filters by business system name, and fuzzy search is supported.
     * @param string $InstanceId Filters by business system ID, and fuzzy search is supported.
     * @param array $InstanceIds Filter by business system id.
     * @param integer $DemoInstanceFlag Whether to query the official demo business system (0 = non-demo business system, 1 = demo business system, default is 0).
     * @param integer $AllRegionsFlag Whether to query all regional business systems (0 = do not query all regions, 1 = query all regions, default is 0).
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
        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ApmTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("DemoInstanceFlag",$param) and $param["DemoInstanceFlag"] !== null) {
            $this->DemoInstanceFlag = $param["DemoInstanceFlag"];
        }

        if (array_key_exists("AllRegionsFlag",$param) and $param["AllRegionsFlag"] !== null) {
            $this->AllRegionsFlag = $param["AllRegionsFlag"];
        }
    }
}
