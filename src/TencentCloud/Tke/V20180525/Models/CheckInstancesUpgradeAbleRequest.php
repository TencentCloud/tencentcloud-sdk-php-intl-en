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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckInstancesUpgradeAble request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method array getInstanceIds() Obtain Specify the node list to check. If it’s not passed in, all nodes of the cluster will be checked.
 * @method void setInstanceIds(array $InstanceIds) Set Specify the node list to check. If it’s not passed in, all nodes of the cluster will be checked.
 * @method string getUpgradeType() Obtain Upgrade type, enum values: reset (Reinstallation and Upgrade, supports major and minor versions), hot (In-place Rolling Minor Version Upgrade), major (In-place Rolling Major Version Upgrade).
 * @method void setUpgradeType(string $UpgradeType) Set Upgrade type, enum values: reset (Reinstallation and Upgrade, supports major and minor versions), hot (In-place Rolling Minor Version Upgrade), major (In-place Rolling Major Version Upgrade).
 * @method integer getOffset() Obtain Pagination offset
 * @method void setOffset(integer $Offset) Set Pagination offset
 * @method integer getLimit() Obtain Pagination limit
 * @method void setLimit(integer $Limit) Set Pagination limit
 * @method array getFilter() Obtain Filtering
 * @method void setFilter(array $Filter) Set Filtering
 */
class CheckInstancesUpgradeAbleRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var array Specify the node list to check. If it’s not passed in, all nodes of the cluster will be checked.
     */
    public $InstanceIds;

    /**
     * @var string Upgrade type, enum values: reset (Reinstallation and Upgrade, supports major and minor versions), hot (In-place Rolling Minor Version Upgrade), major (In-place Rolling Major Version Upgrade).
     */
    public $UpgradeType;

    /**
     * @var integer Pagination offset
     */
    public $Offset;

    /**
     * @var integer Pagination limit
     */
    public $Limit;

    /**
     * @var array Filtering
     */
    public $Filter;

    /**
     * @param string $ClusterId Cluster ID
     * @param array $InstanceIds Specify the node list to check. If it’s not passed in, all nodes of the cluster will be checked.
     * @param string $UpgradeType Upgrade type, enum values: reset (Reinstallation and Upgrade, supports major and minor versions), hot (In-place Rolling Minor Version Upgrade), major (In-place Rolling Major Version Upgrade).
     * @param integer $Offset Pagination offset
     * @param integer $Limit Pagination limit
     * @param array $Filter Filtering
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("UpgradeType",$param) and $param["UpgradeType"] !== null) {
            $this->UpgradeType = $param["UpgradeType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = [];
            foreach ($param["Filter"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filter, $obj);
            }
        }
    }
}
