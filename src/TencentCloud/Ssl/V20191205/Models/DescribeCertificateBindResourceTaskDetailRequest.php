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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCertificateBindResourceTaskDetail request structure.
 *
 * @method string getTaskId() Obtain The task ID, which is required to query the result of associated cloud resources.
 * @method void setTaskId(string $TaskId) Set The task ID, which is required to query the result of associated cloud resources.
 * @method string getLimit() Obtain The number of cloud resources displayed on each page. The default value is 10, and the maximum value is 100.
 * @method void setLimit(string $Limit) Set The number of cloud resources displayed on each page. The default value is 10, and the maximum value is 100.
 * @method string getOffset() Obtain The current offset.
 * @method void setOffset(string $Offset) Set The current offset.
 * @method array getResourceTypes() Obtain The types of the resources to be queried. If no value is passed in, all types of resources will be queried.
 * @method void setResourceTypes(array $ResourceTypes) Set The types of the resources to be queried. If no value is passed in, all types of resources will be queried.
 * @method array getRegions() Obtain The regions of the resources to be queried. Only CLB, TKE, WAF, APIGATEWAY, and TCB resources support the query by region.
 * @method void setRegions(array $Regions) Set The regions of the resources to be queried. Only CLB, TKE, WAF, APIGATEWAY, and TCB resources support the query by region.
 */
class DescribeCertificateBindResourceTaskDetailRequest extends AbstractModel
{
    /**
     * @var string The task ID, which is required to query the result of associated cloud resources.
     */
    public $TaskId;

    /**
     * @var string The number of cloud resources displayed on each page. The default value is 10, and the maximum value is 100.
     */
    public $Limit;

    /**
     * @var string The current offset.
     */
    public $Offset;

    /**
     * @var array The types of the resources to be queried. If no value is passed in, all types of resources will be queried.
     */
    public $ResourceTypes;

    /**
     * @var array The regions of the resources to be queried. Only CLB, TKE, WAF, APIGATEWAY, and TCB resources support the query by region.
     */
    public $Regions;

    /**
     * @param string $TaskId The task ID, which is required to query the result of associated cloud resources.
     * @param string $Limit The number of cloud resources displayed on each page. The default value is 10, and the maximum value is 100.
     * @param string $Offset The current offset.
     * @param array $ResourceTypes The types of the resources to be queried. If no value is passed in, all types of resources will be queried.
     * @param array $Regions The regions of the resources to be queried. Only CLB, TKE, WAF, APIGATEWAY, and TCB resources support the query by region.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("ResourceTypes",$param) and $param["ResourceTypes"] !== null) {
            $this->ResourceTypes = $param["ResourceTypes"];
        }

        if (array_key_exists("Regions",$param) and $param["Regions"] !== null) {
            $this->Regions = $param["Regions"];
        }
    }
}
