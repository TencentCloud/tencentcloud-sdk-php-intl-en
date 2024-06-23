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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitCustomFunction request structure.
 *
 * @method string getFunctionId() Obtain Function Unique Identifier
 * @method void setFunctionId(string $FunctionId) Set Function Unique Identifier
 * @method string getClusterIdentifier() Obtain Cluster Instance ID
 * @method void setClusterIdentifier(string $ClusterIdentifier) Set Cluster Instance ID
 * @method string getComment() Obtain Remark Information
 * @method void setComment(string $Comment) Set Remark Information
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 */
class SubmitCustomFunctionRequest extends AbstractModel
{
    /**
     * @var string Function Unique Identifier
     */
    public $FunctionId;

    /**
     * @var string Cluster Instance ID
     */
    public $ClusterIdentifier;

    /**
     * @var string Remark Information
     */
    public $Comment;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @param string $FunctionId Function Unique Identifier
     * @param string $ClusterIdentifier Cluster Instance ID
     * @param string $Comment Remark Information
     * @param string $ProjectId Project ID
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

        if (array_key_exists("ClusterIdentifier",$param) and $param["ClusterIdentifier"] !== null) {
            $this->ClusterIdentifier = $param["ClusterIdentifier"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
