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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceParams request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method array getInstanceIds() Obtain Instance ID, which supports batch query.
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID, which supports batch query.
 * @method string getParamKeyword() Obtain Search condition for a parameter name, which supports fuzzy search.
 * @method void setParamKeyword(string $ParamKeyword) Set Search condition for a parameter name, which supports fuzzy search.
 */
class DescribeInstanceParamsRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var array Instance ID, which supports batch query.
     */
    public $InstanceIds;

    /**
     * @var string Search condition for a parameter name, which supports fuzzy search.
     */
    public $ParamKeyword;

    /**
     * @param string $ClusterId Cluster ID
     * @param array $InstanceIds Instance ID, which supports batch query.
     * @param string $ParamKeyword Search condition for a parameter name, which supports fuzzy search.
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

        if (array_key_exists("ParamKeyword",$param) and $param["ParamKeyword"] !== null) {
            $this->ParamKeyword = $param["ParamKeyword"];
        }
    }
}
