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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Replica of an edge function.
 *
 * @method string getFunctionId() Obtain Function ID.
 * @method void setFunctionId(string $FunctionId) Set Function ID.
 * @method string getReplicaName() Obtain Name of the edge function copy.
 * @method void setReplicaName(string $ReplicaName) Set Name of the edge function copy.
 * @method string getContent() Obtain Content of the edge function copy. Format: JavaScript code.
 * @method void setContent(string $Content) Set Content of the edge function copy. Format: JavaScript code.
 * @method string getRemark() Obtain Description of the edge function replica.
 * @method void setRemark(string $Remark) Set Description of the edge function replica.
 * @method string getCreatedOn() Obtain Creation time of the edge function replica.
 * @method void setCreatedOn(string $CreatedOn) Set Creation time of the edge function replica.
 * @method string getModifiedOn() Obtain Last update time of the edge function replica.
 * @method void setModifiedOn(string $ModifiedOn) Set Last update time of the edge function replica.
 */
class FunctionReplica extends AbstractModel
{
    /**
     * @var string Function ID.
     */
    public $FunctionId;

    /**
     * @var string Name of the edge function copy.
     */
    public $ReplicaName;

    /**
     * @var string Content of the edge function copy. Format: JavaScript code.
     */
    public $Content;

    /**
     * @var string Description of the edge function replica.
     */
    public $Remark;

    /**
     * @var string Creation time of the edge function replica.
     */
    public $CreatedOn;

    /**
     * @var string Last update time of the edge function replica.
     */
    public $ModifiedOn;

    /**
     * @param string $FunctionId Function ID.
     * @param string $ReplicaName Name of the edge function copy.
     * @param string $Content Content of the edge function copy. Format: JavaScript code.
     * @param string $Remark Description of the edge function replica.
     * @param string $CreatedOn Creation time of the edge function replica.
     * @param string $ModifiedOn Last update time of the edge function replica.
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
        if (array_key_exists("FunctionId",$param) and $param["FunctionId"] !== null) {
            $this->FunctionId = $param["FunctionId"];
        }

        if (array_key_exists("ReplicaName",$param) and $param["ReplicaName"] !== null) {
            $this->ReplicaName = $param["ReplicaName"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("ModifiedOn",$param) and $param["ModifiedOn"] !== null) {
            $this->ModifiedOn = $param["ModifiedOn"];
        }
    }
}
