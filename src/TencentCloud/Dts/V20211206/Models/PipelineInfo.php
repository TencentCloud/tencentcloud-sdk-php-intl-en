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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Mongo output aggregation settings. Default value: Change Event.
 *
 * @method string getAggOp() Obtain Aggregation operators: $addFields, $match, $project, $replaceRoot, $redact, $replaceWith, $set, $unset. $replaceWith, $set, $unset are available options for subscription instances that are version 4.2 or higher.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAggOp(string $AggOp) Set Aggregation operators: $addFields, $match, $project, $replaceRoot, $redact, $replaceWith, $set, $unset. $replaceWith, $set, $unset are available options for subscription instances that are version 4.2 or higher.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAggCmd() Obtain Aggregation expression must be in json format.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAggCmd(string $AggCmd) Set Aggregation expression must be in json format.Note: This field may return null, indicating that no valid values can be obtained.
 */
class PipelineInfo extends AbstractModel
{
    /**
     * @var string Aggregation operators: $addFields, $match, $project, $replaceRoot, $redact, $replaceWith, $set, $unset. $replaceWith, $set, $unset are available options for subscription instances that are version 4.2 or higher.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AggOp;

    /**
     * @var string Aggregation expression must be in json format.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AggCmd;

    /**
     * @param string $AggOp Aggregation operators: $addFields, $match, $project, $replaceRoot, $redact, $replaceWith, $set, $unset. $replaceWith, $set, $unset are available options for subscription instances that are version 4.2 or higher.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AggCmd Aggregation expression must be in json format.Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("AggOp",$param) and $param["AggOp"] !== null) {
            $this->AggOp = $param["AggOp"];
        }

        if (array_key_exists("AggCmd",$param) and $param["AggCmd"] !== null) {
            $this->AggCmd = $param["AggCmd"];
        }
    }
}
