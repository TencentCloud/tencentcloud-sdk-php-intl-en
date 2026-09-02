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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSkillScanAlertList request structure.
 *
 * @method integer getOffset() Obtain Pagination offset.
Valid values: [0, +∞)
Default value: 0
 * @method void setOffset(integer $Offset) Set Pagination offset.
Valid values: [0, +∞)
Default value: 0
 * @method integer getLimit() Obtain Number of results per page
Valid values: [1, 200]
Default value: 10
 * @method void setLimit(integer $Limit) Set Number of results per page
Valid values: [1, 200]
Default value: 10
 * @method array getFilters() Obtain Filter criteria list. Supported filter fields: BelongAssetType (asset type ownership: HOST/CONTAINER, defaults to HOST if not specified), ContainerId (container ID, takes effect only for container alarms), RiskLevel (risk level, exact match), Status (processing status, exact match), SkillName (Skill name, fuzzy matching), UUID (host UUID, exact match), Level (alarm level, exact match), ContentHash (file SHA256, exact match), InstanceID (instance ID, exact match), InstanceName (instance name, fuzzy matching), SkillPath (Skill path, fuzzy matching)
 * @method void setFilters(array $Filters) Set Filter criteria list. Supported filter fields: BelongAssetType (asset type ownership: HOST/CONTAINER, defaults to HOST if not specified), ContainerId (container ID, takes effect only for container alarms), RiskLevel (risk level, exact match), Status (processing status, exact match), SkillName (Skill name, fuzzy matching), UUID (host UUID, exact match), Level (alarm level, exact match), ContentHash (file SHA256, exact match), InstanceID (instance ID, exact match), InstanceName (instance name, fuzzy matching), SkillPath (Skill path, fuzzy matching)
 * @method string getOrder() Obtain Sorting method.
Enumeration values:
ASC: Ascending
DESC: descending order
Default value: DESC
 * @method void setOrder(string $Order) Set Sorting method.
Enumeration values:
ASC: Ascending
DESC: descending order
Default value: DESC
 * @method string getBy() Obtain Sorting field.
Enumeration values:
CreateTime: first detection time
SecurityScore: Security score
UpdateTime: Update time
Default value: CreateTime
 * @method void setBy(string $By) Set Sorting field.
Enumeration values:
CreateTime: first detection time
SecurityScore: Security score
UpdateTime: Update time
Default value: CreateTime
 * @method array getMemberId() Obtain Group account member id
 * @method void setMemberId(array $MemberId) Set Group account member id
 */
class DescribeSkillScanAlertListRequest extends AbstractModel
{
    /**
     * @var integer Pagination offset.
Valid values: [0, +∞)
Default value: 0
     */
    public $Offset;

    /**
     * @var integer Number of results per page
Valid values: [1, 200]
Default value: 10
     */
    public $Limit;

    /**
     * @var array Filter criteria list. Supported filter fields: BelongAssetType (asset type ownership: HOST/CONTAINER, defaults to HOST if not specified), ContainerId (container ID, takes effect only for container alarms), RiskLevel (risk level, exact match), Status (processing status, exact match), SkillName (Skill name, fuzzy matching), UUID (host UUID, exact match), Level (alarm level, exact match), ContentHash (file SHA256, exact match), InstanceID (instance ID, exact match), InstanceName (instance name, fuzzy matching), SkillPath (Skill path, fuzzy matching)
     */
    public $Filters;

    /**
     * @var string Sorting method.
Enumeration values:
ASC: Ascending
DESC: descending order
Default value: DESC
     */
    public $Order;

    /**
     * @var string Sorting field.
Enumeration values:
CreateTime: first detection time
SecurityScore: Security score
UpdateTime: Update time
Default value: CreateTime
     */
    public $By;

    /**
     * @var array Group account member id
     */
    public $MemberId;

    /**
     * @param integer $Offset Pagination offset.
Valid values: [0, +∞)
Default value: 0
     * @param integer $Limit Number of results per page
Valid values: [1, 200]
Default value: 10
     * @param array $Filters Filter criteria list. Supported filter fields: BelongAssetType (asset type ownership: HOST/CONTAINER, defaults to HOST if not specified), ContainerId (container ID, takes effect only for container alarms), RiskLevel (risk level, exact match), Status (processing status, exact match), SkillName (Skill name, fuzzy matching), UUID (host UUID, exact match), Level (alarm level, exact match), ContentHash (file SHA256, exact match), InstanceID (instance ID, exact match), InstanceName (instance name, fuzzy matching), SkillPath (Skill path, fuzzy matching)
     * @param string $Order Sorting method.
Enumeration values:
ASC: Ascending
DESC: descending order
Default value: DESC
     * @param string $By Sorting field.
Enumeration values:
CreateTime: first detection time
SecurityScore: Security score
UpdateTime: Update time
Default value: CreateTime
     * @param array $MemberId Group account member id
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
