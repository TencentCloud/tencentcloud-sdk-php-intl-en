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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetRequestStatus request structure.
 *
 * @method string getFunctionName() Obtain Function name
 * @method void setFunctionName(string $FunctionName) Set Function name
 * @method string getFunctionRequestId() Obtain ID of the request to be queried
 * @method void setFunctionRequestId(string $FunctionRequestId) Set ID of the request to be queried
 * @method string getNamespace() Obtain Function namespace
 * @method void setNamespace(string $Namespace) Set Function namespace
 * @method string getStartTime() Obtain Start time of the query, for example `2017-05-16 20:00:00`. If it’s left empty, it defaults to 15 minutes before the current time.
 * @method void setStartTime(string $StartTime) Set Start time of the query, for example `2017-05-16 20:00:00`. If it’s left empty, it defaults to 15 minutes before the current time.
 * @method string getEndTime() Obtain End time of the query. such as `2017-05-16 20:59:59`. If `StartTime` is not specified, `EndTime` defaults to the current time. If `StartTime` is specified, `EndTime` is required, and it need to be later than the `StartTime`.
 * @method void setEndTime(string $EndTime) Set End time of the query. such as `2017-05-16 20:59:59`. If `StartTime` is not specified, `EndTime` defaults to the current time. If `StartTime` is specified, `EndTime` is required, and it need to be later than the `StartTime`.
 */
class GetRequestStatusRequest extends AbstractModel
{
    /**
     * @var string Function name
     */
    public $FunctionName;

    /**
     * @var string ID of the request to be queried
     */
    public $FunctionRequestId;

    /**
     * @var string Function namespace
     */
    public $Namespace;

    /**
     * @var string Start time of the query, for example `2017-05-16 20:00:00`. If it’s left empty, it defaults to 15 minutes before the current time.
     */
    public $StartTime;

    /**
     * @var string End time of the query. such as `2017-05-16 20:59:59`. If `StartTime` is not specified, `EndTime` defaults to the current time. If `StartTime` is specified, `EndTime` is required, and it need to be later than the `StartTime`.
     */
    public $EndTime;

    /**
     * @param string $FunctionName Function name
     * @param string $FunctionRequestId ID of the request to be queried
     * @param string $Namespace Function namespace
     * @param string $StartTime Start time of the query, for example `2017-05-16 20:00:00`. If it’s left empty, it defaults to 15 minutes before the current time.
     * @param string $EndTime End time of the query. such as `2017-05-16 20:59:59`. If `StartTime` is not specified, `EndTime` defaults to the current time. If `StartTime` is specified, `EndTime` is required, and it need to be later than the `StartTime`.
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
        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("FunctionRequestId",$param) and $param["FunctionRequestId"] !== null) {
            $this->FunctionRequestId = $param["FunctionRequestId"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
