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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCertificateBindResourceTaskDetail request structure.
 *
 * @method string getTaskId() Obtain <p>Task ID. Query the result of binding cloud resources based on the task ID obtained from CreateCertificateBindResourceSyncTask.</p>
 * @method void setTaskId(string $TaskId) Set <p>Task ID. Query the result of binding cloud resources based on the task ID obtained from CreateCertificateBindResourceSyncTask.</p>
 * @method string getLimit() Obtain <p>Number of items per page, default 10, maximum value 100; total pages is the total number of instances in the resource region, that is, page 1 will pull the number of instances under each Tencent Cloud resource region up to the Limit</p>
 * @method void setLimit(string $Limit) Set <p>Number of items per page, default 10, maximum value 100; total pages is the total number of instances in the resource region, that is, page 1 will pull the number of instances under each Tencent Cloud resource region up to the Limit</p>
 * @method string getOffset() Obtain <p>Offset, defaults to 0</p>
 * @method void setOffset(string $Offset) Set <p>Offset, defaults to 0</p>
 * @method array getResourceTypes() Obtain <p>Query result details of the resource type. Query all if not specified. Supported values: - clb- cdn- ddos- live- vod- waf- apigateway- teo- tke- cos- tse- tcb</p>
 * @method void setResourceTypes(array $ResourceTypes) Set <p>Query result details of the resource type. Query all if not specified. Supported values: - clb- cdn- ddos- live- vod- waf- apigateway- teo- tke- cos- tse- tcb</p>
 * @method array getRegions() Obtain <p>Query the data of region list. clb, tke, waf, API Gateway, tcb, cos, and tse support query region. Other resource types are unsupported.</p>
 * @method void setRegions(array $Regions) Set <p>Query the data of region list. clb, tke, waf, API Gateway, tcb, cos, and tse support query region. Other resource types are unsupported.</p>
 */
class DescribeCertificateBindResourceTaskDetailRequest extends AbstractModel
{
    /**
     * @var string <p>Task ID. Query the result of binding cloud resources based on the task ID obtained from CreateCertificateBindResourceSyncTask.</p>
     */
    public $TaskId;

    /**
     * @var string <p>Number of items per page, default 10, maximum value 100; total pages is the total number of instances in the resource region, that is, page 1 will pull the number of instances under each Tencent Cloud resource region up to the Limit</p>
     */
    public $Limit;

    /**
     * @var string <p>Offset, defaults to 0</p>
     */
    public $Offset;

    /**
     * @var array <p>Query result details of the resource type. Query all if not specified. Supported values: - clb- cdn- ddos- live- vod- waf- apigateway- teo- tke- cos- tse- tcb</p>
     */
    public $ResourceTypes;

    /**
     * @var array <p>Query the data of region list. clb, tke, waf, API Gateway, tcb, cos, and tse support query region. Other resource types are unsupported.</p>
     */
    public $Regions;

    /**
     * @param string $TaskId <p>Task ID. Query the result of binding cloud resources based on the task ID obtained from CreateCertificateBindResourceSyncTask.</p>
     * @param string $Limit <p>Number of items per page, default 10, maximum value 100; total pages is the total number of instances in the resource region, that is, page 1 will pull the number of instances under each Tencent Cloud resource region up to the Limit</p>
     * @param string $Offset <p>Offset, defaults to 0</p>
     * @param array $ResourceTypes <p>Query result details of the resource type. Query all if not specified. Supported values: - clb- cdn- ddos- live- vod- waf- apigateway- teo- tke- cos- tse- tcb</p>
     * @param array $Regions <p>Query the data of region list. clb, tke, waf, API Gateway, tcb, cos, and tse support query region. Other resource types are unsupported.</p>
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
