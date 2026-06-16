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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Join tables and view association information between original tables
 *
 * @method string getJoinId() Obtain Association relationship id, used by the frontend
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setJoinId(string $JoinId) Set Association relationship id, used by the frontend
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSourceTableNodeId() Obtain Original table node id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSourceTableNodeId(string $SourceTableNodeId) Set Original table node id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTargetTableNodeId() Obtain Target table node id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTargetTableNodeId(string $TargetTableNodeId) Set Target table node id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getJoinType() Obtain Association type of multi-table join
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setJoinType(string $JoinType) Set Association type of multi-table join
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getFields() Obtain Field list for joined tables
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFields(array $Fields) Set Field list for joined tables
Note: This field may return null, indicating that no valid values can be obtained.
 */
class JoinRelation extends AbstractModel
{
    /**
     * @var string Association relationship id, used by the frontend
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $JoinId;

    /**
     * @var string Original table node id
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SourceTableNodeId;

    /**
     * @var string Target table node id
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TargetTableNodeId;

    /**
     * @var string Association type of multi-table join
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $JoinType;

    /**
     * @var array Field list for joined tables
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Fields;

    /**
     * @param string $JoinId Association relationship id, used by the frontend
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SourceTableNodeId Original table node id
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TargetTableNodeId Target table node id
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $JoinType Association type of multi-table join
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Fields Field list for joined tables
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("JoinId",$param) and $param["JoinId"] !== null) {
            $this->JoinId = $param["JoinId"];
        }

        if (array_key_exists("SourceTableNodeId",$param) and $param["SourceTableNodeId"] !== null) {
            $this->SourceTableNodeId = $param["SourceTableNodeId"];
        }

        if (array_key_exists("TargetTableNodeId",$param) and $param["TargetTableNodeId"] !== null) {
            $this->TargetTableNodeId = $param["TargetTableNodeId"];
        }

        if (array_key_exists("JoinType",$param) and $param["JoinType"] !== null) {
            $this->JoinType = $param["JoinType"];
        }

        if (array_key_exists("Fields",$param) and $param["Fields"] !== null) {
            $this->Fields = [];
            foreach ($param["Fields"] as $key => $value){
                $obj = new JoinRelationField();
                $obj->deserialize($value);
                array_push($this->Fields, $obj);
            }
        }
    }
}
