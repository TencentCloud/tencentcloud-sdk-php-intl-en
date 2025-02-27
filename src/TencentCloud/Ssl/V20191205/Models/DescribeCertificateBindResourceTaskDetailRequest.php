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
 * @method string getTaskId() Obtain Task id, which can be used to query the result of binding cloud resources according to the task id obtained from createcertificatebindresourcesynctask.
 * @method void setTaskId(string $TaskId) Set Task id, which can be used to query the result of binding cloud resources according to the task id obtained from createcertificatebindresourcesynctask.
 * @method string getLimit() Obtain The number of cloud resources displayed on each page. The default value is 10, and the maximum value is 100.
 * @method void setLimit(string $Limit) Set The number of cloud resources displayed on each page. The default value is 10, and the maximum value is 100.
 * @method string getOffset() Obtain Current offset, default is 0.
 * @method void setOffset(string $Offset) Set Current offset, default is 0.
 * @method array getResourceTypes() Obtain Result detail of queried resource type. if not provided, all will be queried. valid values include:.
- clb.
- cdn.
- ddos.
- live.
- vod.
- waf.
- apigateway.
- teo.
- tke.
- cos.
- tse.
- tcb.
 * @method void setResourceTypes(array $ResourceTypes) Set Result detail of queried resource type. if not provided, all will be queried. valid values include:.
- clb.
- cdn.
- ddos.
- live.
- vod.
- waf.
- apigateway.
- teo.
- tke.
- cos.
- tse.
- tcb.
 * @method array getRegions() Obtain Data of querying region list. clb, tke, waf, api gateway, tcb, cos, and tse support region query, while other resource types do not support.
 * @method void setRegions(array $Regions) Set Data of querying region list. clb, tke, waf, api gateway, tcb, cos, and tse support region query, while other resource types do not support.
 */
class DescribeCertificateBindResourceTaskDetailRequest extends AbstractModel
{
    /**
     * @var string Task id, which can be used to query the result of binding cloud resources according to the task id obtained from createcertificatebindresourcesynctask.
     */
    public $TaskId;

    /**
     * @var string The number of cloud resources displayed on each page. The default value is 10, and the maximum value is 100.
     */
    public $Limit;

    /**
     * @var string Current offset, default is 0.
     */
    public $Offset;

    /**
     * @var array Result detail of queried resource type. if not provided, all will be queried. valid values include:.
- clb.
- cdn.
- ddos.
- live.
- vod.
- waf.
- apigateway.
- teo.
- tke.
- cos.
- tse.
- tcb.
     */
    public $ResourceTypes;

    /**
     * @var array Data of querying region list. clb, tke, waf, api gateway, tcb, cos, and tse support region query, while other resource types do not support.
     */
    public $Regions;

    /**
     * @param string $TaskId Task id, which can be used to query the result of binding cloud resources according to the task id obtained from createcertificatebindresourcesynctask.
     * @param string $Limit The number of cloud resources displayed on each page. The default value is 10, and the maximum value is 100.
     * @param string $Offset Current offset, default is 0.
     * @param array $ResourceTypes Result detail of queried resource type. if not provided, all will be queried. valid values include:.
- clb.
- cdn.
- ddos.
- live.
- vod.
- waf.
- apigateway.
- teo.
- tke.
- cos.
- tse.
- tcb.
     * @param array $Regions Data of querying region list. clb, tke, waf, api gateway, tcb, cos, and tse support region query, while other resource types do not support.
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
