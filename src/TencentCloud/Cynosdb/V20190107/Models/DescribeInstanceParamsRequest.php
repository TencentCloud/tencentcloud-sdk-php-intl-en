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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceParams request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method array getInstanceIds() Obtain Instance ID. Support batch querying.
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID. Support batch querying.
 * @method string getParamKeyword() Obtain Parameter name search criteria. Fuzzy matching is supported.
 * @method void setParamKeyword(string $ParamKeyword) Set Parameter name search criteria. Fuzzy matching is supported.
 * @method string getIsGlobal() Obtain Whether it is a global parameter
 * @method void setIsGlobal(string $IsGlobal) Set Whether it is a global parameter
 */
class DescribeInstanceParamsRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var array Instance ID. Support batch querying.
     */
    public $InstanceIds;

    /**
     * @var string Parameter name search criteria. Fuzzy matching is supported.
     */
    public $ParamKeyword;

    /**
     * @var string Whether it is a global parameter
     */
    public $IsGlobal;

    /**
     * @param string $ClusterId Cluster ID
     * @param array $InstanceIds Instance ID. Support batch querying.
     * @param string $ParamKeyword Parameter name search criteria. Fuzzy matching is supported.
     * @param string $IsGlobal Whether it is a global parameter
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

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }
    }
}
