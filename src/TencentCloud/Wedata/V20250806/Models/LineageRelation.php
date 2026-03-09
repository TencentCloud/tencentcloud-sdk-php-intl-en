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
 * Lineage relationship.
 *
 * @method string getRelationId() Obtain Association ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRelationId(string $RelationId) Set Association ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSourceUniqueId() Obtain Source lineage ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSourceUniqueId(string $SourceUniqueId) Set Source lineage ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTargetUniqueId() Obtain Target unique lineage ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTargetUniqueId(string $TargetUniqueId) Set Target unique lineage ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getProcesses() Obtain Lineage processing process.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProcesses(array $Processes) Set Lineage processing process.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class LineageRelation extends AbstractModel
{
    /**
     * @var string Association ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RelationId;

    /**
     * @var string Source lineage ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SourceUniqueId;

    /**
     * @var string Target unique lineage ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TargetUniqueId;

    /**
     * @var array Lineage processing process.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Processes;

    /**
     * @param string $RelationId Association ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SourceUniqueId Source lineage ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TargetUniqueId Target unique lineage ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Processes Lineage processing process.
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
        if (array_key_exists("RelationId",$param) and $param["RelationId"] !== null) {
            $this->RelationId = $param["RelationId"];
        }

        if (array_key_exists("SourceUniqueId",$param) and $param["SourceUniqueId"] !== null) {
            $this->SourceUniqueId = $param["SourceUniqueId"];
        }

        if (array_key_exists("TargetUniqueId",$param) and $param["TargetUniqueId"] !== null) {
            $this->TargetUniqueId = $param["TargetUniqueId"];
        }

        if (array_key_exists("Processes",$param) and $param["Processes"] !== null) {
            $this->Processes = [];
            foreach ($param["Processes"] as $key => $value){
                $obj = new LineageProcess();
                $obj->deserialize($value);
                array_push($this->Processes, $obj);
            }
        }
    }
}
