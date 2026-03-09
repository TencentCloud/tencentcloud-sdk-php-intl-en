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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * LineageNodeInfo lineage relationship entity.
 *
 * @method LineageResource getResource() Obtain Current resource.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResource(LineageResource $Resource) Set Current resource.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method LineageRelation getRelation() Obtain Relationship.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRelation(LineageRelation $Relation) Set Relationship.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDownStreamCount() Obtain Upstream quantity.
 * @method void setDownStreamCount(integer $DownStreamCount) Set Upstream quantity.
 * @method integer getUpStreamCount() Obtain Downstream quantity.
 * @method void setUpStreamCount(integer $UpStreamCount) Set Downstream quantity.
 */
class LineageNodeInfo extends AbstractModel
{
    /**
     * @var LineageResource Current resource.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Resource;

    /**
     * @var LineageRelation Relationship.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Relation;

    /**
     * @var integer Upstream quantity.
     */
    public $DownStreamCount;

    /**
     * @var integer Downstream quantity.
     */
    public $UpStreamCount;

    /**
     * @param LineageResource $Resource Current resource.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param LineageRelation $Relation Relationship.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DownStreamCount Upstream quantity.
     * @param integer $UpStreamCount Downstream quantity.
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = new LineageResource();
            $this->Resource->deserialize($param["Resource"]);
        }

        if (array_key_exists("Relation",$param) and $param["Relation"] !== null) {
            $this->Relation = new LineageRelation();
            $this->Relation->deserialize($param["Relation"]);
        }

        if (array_key_exists("DownStreamCount",$param) and $param["DownStreamCount"] !== null) {
            $this->DownStreamCount = $param["DownStreamCount"];
        }

        if (array_key_exists("UpStreamCount",$param) and $param["UpStreamCount"] !== null) {
            $this->UpStreamCount = $param["UpStreamCount"];
        }
    }
}
