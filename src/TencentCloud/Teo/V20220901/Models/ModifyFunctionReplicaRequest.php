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
 * ModifyFunctionReplica request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getFunctionId() Obtain Function ID.
 * @method void setFunctionId(string $FunctionId) Set Function ID.
 * @method string getReplicaName() Obtain Name of the edge function copy that needs to be modified.
 * @method void setReplicaName(string $ReplicaName) Set Name of the edge function copy that needs to be modified.
 * @method string getContent() Obtain Content of the edge function replica, which currently only supports JavaScript code. Its maximum size is 5 MB.
 * @method void setContent(string $Content) Set Content of the edge function replica, which currently only supports JavaScript code. Its maximum size is 5 MB.
 * @method string getRemark() Obtain Description of the edge function copy. It can contain up to 50 characters.
 * @method void setRemark(string $Remark) Set Description of the edge function copy. It can contain up to 50 characters.
 */
class ModifyFunctionReplicaRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string Function ID.
     */
    public $FunctionId;

    /**
     * @var string Name of the edge function copy that needs to be modified.
     */
    public $ReplicaName;

    /**
     * @var string Content of the edge function replica, which currently only supports JavaScript code. Its maximum size is 5 MB.
     */
    public $Content;

    /**
     * @var string Description of the edge function copy. It can contain up to 50 characters.
     */
    public $Remark;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $FunctionId Function ID.
     * @param string $ReplicaName Name of the edge function copy that needs to be modified.
     * @param string $Content Content of the edge function replica, which currently only supports JavaScript code. Its maximum size is 5 MB.
     * @param string $Remark Description of the edge function copy. It can contain up to 50 characters.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
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
    }
}
