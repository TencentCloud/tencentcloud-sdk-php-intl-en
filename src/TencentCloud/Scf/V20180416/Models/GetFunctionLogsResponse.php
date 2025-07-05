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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetFunctionLogs response structure.
 *
 * @method integer getTotalCount() Obtain Total number of function logs
 * @method void setTotalCount(integer $TotalCount) Set Total number of function logs
 * @method array getData() Obtain Function log information
 * @method void setData(array $Data) Set Function log information
 * @method LogSearchContext getSearchContext() Obtain This field is disused.
 * @method void setSearchContext(LogSearchContext $SearchContext) Set This field is disused.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class GetFunctionLogsResponse extends AbstractModel
{
    /**
     * @var integer Total number of function logs
     */
    public $TotalCount;

    /**
     * @var array Function log information
     */
    public $Data;

    /**
     * @var LogSearchContext This field is disused.
     */
    public $SearchContext;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount Total number of function logs
     * @param array $Data Function log information
     * @param LogSearchContext $SearchContext This field is disused.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new FunctionLog();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("SearchContext",$param) and $param["SearchContext"] !== null) {
            $this->SearchContext = new LogSearchContext();
            $this->SearchContext->deserialize($param["SearchContext"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
